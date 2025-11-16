<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Functional;

use PHPUnit\Framework\TestCase;
use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;
use Spiriit\PolirisBundle\Centers\CsvCenter\AnnonceCsvCenter;
use Spiriit\PolirisBundle\Models\Annonce\Annonce;

/**
 * Functional test that validates the complete CSV export generation process.
 * This test simulates real-world usage by:
 * - Creating mock real estate property data with relevant fields
 * - Exporting the data to CSV format using the Poliris bundle
 * - Validating the generated CSV file structure and content
 */
class CsvExportFunctionalTest extends TestCase
{
    private AnnonceCsvCenter $csvCenter;
    private string $csvFilePath;

    protected function setUp(): void
    {
        parent::setUp();
        $this->csvCenter = new AnnonceCsvCenter();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        // Clean up generated CSV file
        if (isset($this->csvFilePath) && file_exists($this->csvFilePath)) {
            unlink($this->csvFilePath);
        }
    }

    /**
     * @test
     * Test complete CSV export generation with multiple properties using mock data
     * This test loads mock property data from a JSON file and validates the CSV export
     */
    public function it_generates_complete_csv_export_with_property_data(): void
    {
        // ARRANGE: Load mock data and build CSV export
        $mockData = $this->loadMockData();
        $builder = $this->buildExportFromMockData($mockData);
        $export = $builder->build();

        // ACT: Generate CSV file
        $this->csvFilePath = $this->csvCenter->generateCsvFile($export, 'UTF-8');

        // ASSERT: Verify CSV file was created
        $this->assertFileExists($this->csvFilePath, 'CSV file should be created');
        $this->assertGreaterThan(0, filesize($this->csvFilePath), 'CSV file should not be empty');

        // Read and validate CSV content
        $csvContent = file_get_contents($this->csvFilePath);
        $this->assertNotEmpty($csvContent, 'CSV content should not be empty');

        // Split content into lines
        $lines = explode("\n", trim($csvContent));
        $this->assertCount(3, $lines, 'CSV should contain 3 lines (one per property)');

        // Validate CSV structure: each line should have the custom delimiter "!#"
        foreach ($lines as $lineNumber => $line) {
            $this->assertStringContainsString('"!', $line, "Line $lineNumber should contain the Poliris delimiter");
        }

        // Parse first line and verify it contains expected data
        $line1Fields = $this->parseCsvLine($lines[0]);
        
        // Verify key fields are present in the first property
        $this->assertStringContainsString('AGENCY001', $line1Fields[0] ?? '', 'Should contain agency ID');
        $this->assertStringContainsString('REF-HOUSE-001', $line1Fields[1] ?? '', 'Should contain property reference');
        $this->assertStringContainsString('vente', $line1Fields[2] ?? '', 'Should contain transaction type');
        
        // Verify price is present
        $this->assertContains('750000', $line1Fields, 'Should contain price 750000');
        
        // Verify address information
        $foundParis = false;
        $found75001 = false;
        foreach ($line1Fields as $field) {
            if (str_contains($field, 'Paris')) {
                $foundParis = true;
            }
            if (str_contains($field, '75001')) {
                $found75001 = true;
            }
        }
        $this->assertTrue($foundParis, 'Should contain city name Paris');
        $this->assertTrue($found75001, 'Should contain postal code 75001');

        // Parse second line and verify rental property data
        $line2Fields = $this->parseCsvLine($lines[1]);
        
        $this->assertStringContainsString('AGENCY001', $line2Fields[0] ?? '', 'Should contain agency ID');
        $this->assertStringContainsString('REF-APT-002', $line2Fields[1] ?? '', 'Should contain property reference');
        $this->assertStringContainsString('location', $line2Fields[2] ?? '', 'Should contain transaction type');
        
        // Verify rental price
        $this->assertContains('1200', $line2Fields, 'Should contain rental price 1200');
        
        // Parse third line and verify land property
        $line3Fields = $this->parseCsvLine($lines[2]);
        
        $this->assertStringContainsString('AGENCY002', $line3Fields[0] ?? '', 'Should contain agency ID');
        $this->assertStringContainsString('REF-LAND-003', $line3Fields[1] ?? '', 'Should contain property reference');
        
        // Verify number of fields (Poliris format has 333+ columns)
        $this->assertGreaterThan(100, count($line1Fields), 'Each line should have many fields (Poliris format has 333+ columns)');
    }

    /**
     * Load mock property data from JSON fixture file
     */
    private function loadMockData(): array
    {
        $fixtureFile = __DIR__ . '/../Fixtures/mock-properties.json';
        $this->assertFileExists($fixtureFile, 'Mock data fixture file should exist');
        
        $jsonContent = file_get_contents($fixtureFile);
        $data = json_decode($jsonContent, true);
        
        $this->assertIsArray($data, 'Mock data should be valid JSON array');
        $this->assertNotEmpty($data, 'Mock data should not be empty');
        
        return $data;
    }

    /**
     * Build AnnonceExportBuilder from mock data
     * Each property in the mock data is converted to a line in the CSV export
     */
    private function buildExportFromMockData(array $mockData): AnnonceExportBuilder
    {
        $builder = new AnnonceExportBuilder();
        
        foreach ($mockData as $property) {
            $lineBuilder = $builder->startLine();
            
            // Required fields: identifiant and type
            if (isset($property['identifiant'])) {
                $lineBuilder->withIdentifiant(
                    $property['identifiant']['agenceId'] ?? null,
                    $property['identifiant']['agencePropertyRef'] ?? null,
                    $property['identifiant']['annonceType'] ?? null,
                    $property['identifiant']['annonceIdTechnique'] ?? null
                );
            }
            
            if (isset($property['type'])) {
                $lineBuilder->withType(
                    $property['type']['type'] ?? null,
                    $property['type']['sousType'] ?? null
                );
            }
            
            // Initialize all required properties with at least empty values
            // Photos
            if (isset($property['photos'])) {
                $photos = $property['photos'];
                $titres = $property['photosTitres'] ?? [];
                
                $lineBuilder->withPhoto(
                    $photos[0] ?? null,
                    $photos[1] ?? null,
                    $photos[2] ?? null,
                    null, null, null, null, null, null, null,
                    null, null, null, null, null, null, null, null, null, null,
                    null, null, null, null, null, null, null, null, null, null,
                    $titres[0] ?? null,
                    $titres[1] ?? null,
                    $titres[2] ?? null
                );
            } else {
                $lineBuilder->withPhoto();
            }
            
            // ChampCustom - initialize with nulls
            $lineBuilder->withChampCustom();
            
            // Langue - initialize with nulls
            $lineBuilder->withLangue();
            
            // Mandat - initialize with nulls
            $lineBuilder->withMandat();
            
            // LocationVacances - initialize with nulls
            $lineBuilder->withLocationVacances();
            
            // Viager - initialize with nulls
            $lineBuilder->withViager();
            
            // Terrain
            if (isset($property['terrain'])) {
                $terrain = $property['terrain'];
                $lineBuilder->withTerrain(
                    $terrain['surface'] ?? null,
                    $terrain['constructible'] ?? null,
                    $terrain['viabilise'] ?? null,
                    null,
                    null,
                    null,
                    null,
                    $terrain['cos'] ?? null
                );
            } else {
                $lineBuilder->withTerrain();
            }
            
            // Bureau - initialize with nulls
            $lineBuilder->withBureau();
            
            // Diagnostic - initialize with nulls
            $lineBuilder->withDiagnostic();
            
            // Parking - initialize with nulls
            $lineBuilder->withParking();
            
            // Boutique - initialize with nulls
            $lineBuilder->withBoutique();
            
            // Prix
            if (isset($property['prix'])) {
                $prix = $property['prix'];
                $lineBuilder->withPrix(
                    $prix['prix'] ?? null,
                    null,
                    null,
                    null,
                    $prix['mentionPrix'] ?? null,
                    null,
                    $prix['complement'] ?? null
                );
            } else {
                $lineBuilder->withPrix();
            }
            
            // Location
            if (isset($property['location'])) {
                $location = $property['location'];
                $lineBuilder->withLocation(
                    $location['loyerMensuel'] ?? null,
                    $location['charges'] ?? null
                );
            } else {
                $lineBuilder->withLocation();
            }
            
            // ProduitInvestissement - initialize with nulls
            $lineBuilder->withProduitInvestissement();
            
            // FondsCommerce - initialize with nulls
            $lineBuilder->withFondsCommerce();
            
            // HonoraireCharge - initialize with nulls
            $lineBuilder->withHonoraireCharge();
            
            // Localisation
            if (isset($property['localisation'])) {
                $loc = $property['localisation'];
                $lineBuilder->withLocalisation(
                    $loc['ville'] ?? null,
                    $loc['codePostal'] ?? null,
                    $loc['pays'] ?? null,
                    $loc['adresse'] ?? null,
                    $loc['complement'] ?? null,
                    $loc['quartier'] ?? null,
                    $loc['proximite'] ?? null,
                    $loc['latitude'] ?? null,
                    $loc['longitude'] ?? null
                );
            } else {
                $lineBuilder->withLocalisation();
            }
            
            // Surface
            if (isset($property['surface'])) {
                $surf = $property['surface'];
                $lineBuilder->withSurface(
                    $surf['habitable'] ?? null,
                    $surf['terrain'] ?? null,
                    $surf['sejour'] ?? null,
                    null,
                    $surf['terrasse'] ?? null,
                    null,
                    null,
                    null,
                    $surf['hauteur'] ?? null,
                    $surf['balcon'] ?? null
                );
            } else {
                $lineBuilder->withSurface();
            }
            
            // Contact
            if (isset($property['contact'])) {
                $contact = $property['contact'];
                $lineBuilder->withContact(
                    $contact['nom'] ?? null,
                    $contact['telephone'] ?? null,
                    $contact['email'] ?? null,
                    $contact['siteWeb'] ?? null
                );
            } else {
                $lineBuilder->withContact();
            }
            
            // Etage - initialize with nulls
            $lineBuilder->withEtage();
            
            // Interieur - initialize with nulls
            $lineBuilder->withInterieur();
            
            // PartieJour - initialize with nulls
            $lineBuilder->withPartieJour();
            
            // Exterieur - initialize with nulls
            $lineBuilder->withExterieur();
            
            // Garage - initialize with nulls
            $lineBuilder->withGarage();
            
            // Securite - initialize with nulls
            $lineBuilder->withSecurite();
            
            // ChauffageClim - initialize with nulls
            $lineBuilder->withChauffageClim();
            
            // Detail
            if (isset($property['detail'])) {
                $detail = $property['detail'];
                $lineBuilder->withDetail(
                    $detail['activitesCommerciales'] ?? null,
                    $detail['description'] ?? null
                );
            } else {
                $lineBuilder->withDetail();
            }
            
            // Publication - initialize with nulls
            $lineBuilder->withPublication();
        }
        
        return $builder;
    }

    /**
     * Parse a CSV line with custom Poliris delimiter "!#"
     * The format is: "field1"!"field2"!"field3"
     */
    private function parseCsvLine(string $line): array
    {
        // Remove quotes and split by the delimiter pattern
        $fields = [];
        $pattern = '/"([^"]*)"!?/';
        
        if (preg_match_all($pattern, $line, $matches)) {
            $fields = $matches[1];
        }
        
        return $fields;
    }

    /**
     * @test
     * Test that CSV export handles empty export correctly
     */
    public function it_generates_empty_csv_when_no_properties(): void
    {
        // ARRANGE
        $builder = new AnnonceExportBuilder();
        $export = $builder->build();

        // ACT
        $this->csvFilePath = $this->csvCenter->generateCsvFile($export, 'UTF-8');

        // ASSERT
        $this->assertFileExists($this->csvFilePath, 'CSV file should be created even when empty');
        
        $csvContent = file_get_contents($this->csvFilePath);
        // Empty export should produce minimal or no content
        $lines = array_filter(explode("\n", trim($csvContent)));
        $this->assertCount(0, $lines, 'Empty export should produce no data lines');
    }

    /**
     * @test
     * Test CSV file structure and format
     */
    public function it_validates_csv_structure_and_format(): void
    {
        // ARRANGE: Use mock data to build export
        $mockData = $this->loadMockData();
        $builder = $this->buildExportFromMockData($mockData);
        $export = $builder->build();

        // ACT: Generate CSV
        $this->csvFilePath = $this->csvCenter->generateCsvFile($export, 'UTF-8');

        // ASSERT: Validate structure
        $this->assertFileExists($this->csvFilePath);
        $csvContent = file_get_contents($this->csvFilePath);
        
        // Verify Poliris delimiter format is used
        $this->assertStringContainsString('"!', $csvContent, 'CSV should use Poliris delimiter format');
        
        // Verify we have the expected number of lines
        $lines = explode("\n", trim($csvContent));
        $this->assertCount(3, $lines, 'Should have 3 data lines');
        
        // Each line should have many columns (Poliris format)
        foreach ($lines as $line) {
            $fields = $this->parseCsvLine($line);
            $this->assertGreaterThan(50, count($fields), 'Each line should have many columns');
        }
    }

    /**
     * @test
     * Test CSV contains expected field values from mock data
     */
    public function it_contains_expected_values_from_mock_data(): void
    {
        // ARRANGE
        $mockData = $this->loadMockData();
        $builder = $this->buildExportFromMockData($mockData);
        $export = $builder->build();

        // ACT
        $this->csvFilePath = $this->csvCenter->generateCsvFile($export, 'UTF-8');

        // ASSERT
        $csvContent = file_get_contents($this->csvFilePath);
        
        // Verify first property data (House in Paris)
        $this->assertStringContainsString('AGENCY001', $csvContent);
        $this->assertStringContainsString('REF-HOUSE-001', $csvContent);
        $this->assertStringContainsString('Paris', $csvContent);
        $this->assertStringContainsString('750000', $csvContent);
        
        // Verify second property data (Apartment in Lyon)
        $this->assertStringContainsString('REF-APT-002', $csvContent);
        $this->assertStringContainsString('Lyon', $csvContent);
        $this->assertStringContainsString('1200', $csvContent);
        
        // Verify third property data (Land in Bordeaux)
        $this->assertStringContainsString('AGENCY002', $csvContent);
        $this->assertStringContainsString('REF-LAND-003', $csvContent);
        $this->assertStringContainsString('Bordeaux', $csvContent);
        $this->assertStringContainsString('180000', $csvContent);
    }

    /**
     * @test
     * Test CSV export performance with large volume of data
     * @group performance
     */
    public function it_handles_large_volume_data_export_performantly(): void
    {
        // ARRANGE: Generate large volume mock data
        $propertyCount = 100;
        $mockData = $this->generateLargeVolumeMockData($propertyCount);
        
        // ACT: Measure build and export time
        $startTime = microtime(true);
        $builder = $this->buildExportFromMockData($mockData);
        $export = $builder->build();
        $buildTime = microtime(true) - $startTime;
        
        $csvStartTime = microtime(true);
        $this->csvFilePath = $this->csvCenter->generateCsvFile($export, 'UTF-8');
        $csvTime = microtime(true) - $csvStartTime;
        
        $totalTime = microtime(true) - $startTime;
        
        // ASSERT: Verify performance meets acceptable thresholds
        $this->assertFileExists($this->csvFilePath, 'CSV file should be created');
        $this->assertGreaterThan(0, filesize($this->csvFilePath), 'CSV file should not be empty');
        
        // Verify line count matches property count
        $csvContent = file_get_contents($this->csvFilePath);
        $lines = explode("\n", trim($csvContent));
        $this->assertCount($propertyCount, $lines, "CSV should contain $propertyCount lines");
        
        // Performance assertions - should handle 100 properties reasonably fast
        $this->assertLessThan(5.0, $totalTime, 'Total time should be less than 5 seconds for 100 properties');
        $this->assertLessThan(3.0, $buildTime, 'Build time should be less than 3 seconds for 100 properties');
        
        // Calculate and log throughput
        $throughput = $propertyCount / $totalTime;
        $this->assertGreaterThan(20, $throughput, 'Throughput should be at least 20 properties/second');
        
        // Log performance metrics (will be visible in test output)
        fwrite(STDERR, sprintf(
            "\nPerformance Metrics (%d properties):\n" .
            "  Build time: %.3fs\n" .
            "  CSV generation time: %.3fs\n" .
            "  Total time: %.3fs\n" .
            "  File size: %.2f MB\n" .
            "  Throughput: %.2f properties/second\n",
            $propertyCount,
            $buildTime,
            $csvTime,
            $totalTime,
            filesize($this->csvFilePath) / 1024 / 1024,
            $throughput
        ));
    }

    /**
     * Generate large volume of mock data for performance testing
     */
    private function generateLargeVolumeMockData(int $count): array
    {
        $mockData = [];
        $cities = ['Paris', 'Lyon', 'Marseille', 'Toulouse', 'Nice', 'Bordeaux'];
        $types = [
            ['type' => 'Maison', 'sousType' => 'Villa'],
            ['type' => 'Appartement', 'sousType' => 'T3'],
            ['type' => 'Terrain', 'sousType' => 'Constructible'],
        ];
        $transactionTypes = ['vente', 'location'];
        
        for ($i = 1; $i <= $count; $i++) {
            $city = $cities[array_rand($cities)];
            $type = $types[array_rand($types)];
            $transactionType = $transactionTypes[array_rand($transactionTypes)];
            $isRental = $transactionType === 'location';
            
            $property = [
                'identifiant' => [
                    'agenceId' => 'AGENCY' . str_pad((string)(($i % 50) + 1), 3, '0', STR_PAD_LEFT),
                    'agencePropertyRef' => 'REF-PERF-' . str_pad((string)$i, 6, '0', STR_PAD_LEFT),
                    'annonceType' => $transactionType,
                    'annonceIdTechnique' => 'TECH-PERF-' . str_pad((string)$i, 6, '0', STR_PAD_LEFT)
                ],
                'type' => $type,
                'localisation' => [
                    'ville' => $city,
                    'codePostal' => (string)(75000 + ($i % 20)),
                    'pays' => 'France',
                    'adresse' => ($i % 100) . ' Avenue de Test',
                    'latitude' => 48.8566 + (($i % 50) * 0.01),
                    'longitude' => 2.3522 + (($i % 50) * 0.01),
                    'proximite' => 'Proche commodités'
                ],
                'prix' => [
                    'prix' => $isRental ? (900 + ($i % 1100)) : (180000 + ($i % 400000)),
                    'mentionPrix' => $isRental ? 'CC' : 'FAI'
                ],
                'surface' => [
                    'habitable' => 55 + ($i % 145),
                    'terrain' => ($type['type'] === 'Terrain') ? (400 + ($i % 800)) : null
                ],
                'contact' => [
                    'nom' => 'Agent Performance ' . (($i % 30) + 1),
                    'telephone' => '01' . str_pad((string)($i % 100000000), 8, '0', STR_PAD_LEFT),
                    'email' => 'perf' . (($i % 30) + 1) . '@agency.com',
                    'siteWeb' => 'www.perfagency.com'
                ],
                'detail' => [
                    'activitesCommerciales' => 'Performance test property ' . $i,
                    'description' => 'Test property for performance benchmarking. Property number ' . $i . '.'
                ],
                'photos' => [
                    'https://example.com/photos/perf' . $i . '-1.jpg',
                    'https://example.com/photos/perf' . $i . '-2.jpg'
                ],
                'photosTitres' => [
                    'Photo 1',
                    'Photo 2'
                ]
            ];
            
            if ($isRental) {
                $property['location'] = [
                    'loyerMensuel' => $property['prix']['prix'],
                    'charges' => 80 + ($i % 120)
                ];
            }
            
            if ($type['type'] === 'Terrain') {
                $property['terrain'] = [
                    'surface' => $property['surface']['terrain'],
                    'constructible' => true,
                    'viabilise' => ($i % 2) === 0,
                    'cos' => 0.35
                ];
            }
            
            $mockData[] = $property;
        }
        
        return $mockData;
    }
}
