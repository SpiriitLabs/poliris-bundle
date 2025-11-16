# PolirisBundle Documentation

> **Symfony Bundle for Poliris CSV Generation (V4.1.17)**  
> Export real estate data to SeLoger, LeBonCoin and other French property portals

---

## Table of Contents

1. [Getting Started](#getting-started)
2. [Use Cases](#use-cases)
3. [Model Reference](#model-reference)
4. [Troubleshooting](#troubleshooting)

---

## Getting Started

### What is PolirisBundle?

**PolirisBundle** is a Symfony bundle that simplifies the generation of CSV files in the **Poliris** format (V4.1.17), the standard used by major French real estate portals (SeLoger, LeBonCoin, etc.).

#### Why use this bundle?

- ✅ **Simplicity**: No need to manually manage 333+ CSV columns
- ✅ **Type-safe**: Uses the Builder pattern with typed classes
- ✅ **Performance**: Optimized to process thousands of listings
- ✅ **Maintainability**: Easy evolution thanks to modular architecture

#### What can you do with it?

- Export your real estate properties to SeLoger, LeBonCoin
- Automate daily listing updates
- Manage multi-portal feeds with a single codebase
- Easily integrate photos and metadata

---

### Installation

#### Requirements

- PHP >= 8.2
- Symfony >= 5.4

#### Installation via Composer

```bash
composer require spiriitlabs/poliris-bundle
```

The bundle will be automatically registered thanks to Symfony Flex.

---

### Minimal Configuration

The bundle requires **no configuration** to get started. It works out-of-the-box!

If you wish to customize behavior, create a `config/packages/poliris.yaml` file:

```yaml
# config/packages/poliris.yaml (optional)
poliris:
    # Future configuration (currently no configuration needed)
```

---

### First Export: Complete Example

Let's create our first CSV file with 2 real estate listings.

#### PHP Code

```php
<?php

namespace App\Service;

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;
use Spiriit\PolirisBundle\Models\Annonce\Annonce;

class PolirisExportService
{
    public function generateExport(): string
    {
        $builder = new AnnonceExportBuilder();
        
        // Listing 1: 3-room apartment in Paris
        $builder
            ->startLine()
            ->withIdentifiant(
                agenceId: 'AGENCE001',
                agencePropertyRef: 'PROP-12345',
                annonceType: Annonce::ANNONCE_TYPE_VENTE,
                annonceIdTechnique: 'TECH-001'
            )
            ->withType(
                type: 1,        // 1 = Apartment
                sousType: null
            )
            ->withLocalisation(
                cp: '75001',
                ville: 'Paris',
                pays: 'France',
                adresse: '10 rue de Rivoli',
                quartierProximite: 'Near Louvre metro',
                situation: null,
                procheLac: null,
                procheTennis: null,
                procheSki: null,
                cpReel: '75001',
                villeReelle: 'Paris',
                idQuartier: null,
                transportLigne: '1,14',
                transportStation: 'Louvre-Rivoli',
                latitude: 48.860611,
                longitude: 2.342499,
                precisionGps: null,
                localisation: null
            )
            ->withSurface(
                surface: 65,
                surfaceTerrain: null,
                nbPieces: 3,
                nbChambres: 2,
                nbSdb: 1,
                nbSalleEau: 0,
                nbWc: 1,
                nbBalcons: 1,
                surfaceBalcon: 5,
                nbParkings: 0,
                nbBoxes: 0,
                terrasse: false,
                longueurFacade: null,
                placesEnSalle: null,
                nbBureaux: null,
                surfaceSejour: 25,
                nbTerrasses: 0,
                surfaceCave: 0,
                surfaceSalleManger: null,
                surfaceMin: null,
                surfaceMax: null,
                nbPiecesMin: null,
                nbPiecesMax: null,
                nbChambresMin: null,
                nbChambresMax: null,
                comblesAmenageables: null,
                surfaceTerrainNecessaire: null,
                surfaceTerrasse: null
            )
            ->withPrix(
                prix: 450000,
                loyerMoisMur: null,
                loyerCC: null,
                loyerHT: null,
                depotGarantie: null,
                prixMasque: false,
                prixHT: null,
                copropriete: true,
                nbLots: 25,
                syndicatCopro: null,
                syndicatCoproDetails: 'Annual charges: €2400',
                prixTerrain: null,
                prixModeleMaison: null,
                prixMin: null,
                prixMax: null
            )
            ->withDetail(
                activitesCommerciales: null,
                label: 'Bright 3-room apartment near Louvre',
                description: 'Beautiful 65m² apartment with balcony, located in the heart of Paris. Unobstructed view, quiet, close to all amenities.',
                datesDispo: new \DateTimeImmutable('2025-01-01'),
                amenagementHandicapes: false,
                animauxAcceptes: false,
                duplex: false,
                commPrives: null,
                logementADisposition: null,
                nomModele: null
            )
            ->withDiagnostic(
                recent: true,
                travaux: false,
                consoEnergie: 'C',
                bilanConsoEnergie: '150',
                ges: 'B',
                bilanGes: '20',
                dpeAt: new \DateTimeImmutable('2024-06-15'),
                dpeVersion: '2021',
                dpeMin: null,
                dpeMax: null,
                dpeAnneeRef: null,
                dpeCoutConsoAnnuelle: 1200
            )
            ->withContact(
                tel: '0142000000',
                fullName: 'John Smith',
                email: 'contact@agency.com',
                interCabinet: false,
                interCabinetPrive: null,
                codeNego: 'NEG001',
                agenceTerrain: null
            );

        // Listing 2: House in Lyon
        $builder
            ->startLine()
            ->withIdentifiant(
                agenceId: 'AGENCE001',
                agencePropertyRef: 'PROP-67890',
                annonceType: Annonce::ANNONCE_TYPE_VENTE,
                annonceIdTechnique: 'TECH-002'
            )
            ->withType(
                type: 2,        // 2 = House
                sousType: null
            )
            ->withLocalisation(
                cp: '69003',
                ville: 'Lyon',
                pays: 'France',
                adresse: '25 avenue du Général Leclerc',
                quartierProximite: 'Residential area',
                situation: null,
                procheLac: null,
                procheTennis: null,
                procheSki: null,
                cpReel: '69003',
                villeReelle: 'Lyon',
                idQuartier: null,
                transportLigne: 'B',
                transportStation: 'Place Guichard',
                latitude: 45.754610,
                longitude: 4.856880,
                precisionGps: null,
                localisation: null
            )
            ->withSurface(
                surface: 120,
                surfaceTerrain: 250,
                nbPieces: 5,
                nbChambres: 4,
                nbSdb: 2,
                nbSalleEau: 1,
                nbWc: 2,
                nbBalcons: 0,
                surfaceBalcon: null,
                nbParkings: 2,
                nbBoxes: 0,
                terrasse: true,
                longueurFacade: null,
                placesEnSalle: null,
                nbBureaux: null,
                surfaceSejour: 40,
                nbTerrasses: 1,
                surfaceCave: 15,
                surfaceSalleManger: 18,
                surfaceMin: null,
                surfaceMax: null,
                nbPiecesMin: null,
                nbPiecesMax: null,
                nbChambresMin: null,
                nbChambresMax: null,
                comblesAmenageables: null,
                surfaceTerrainNecessaire: null,
                surfaceTerrasse: 30
            )
            ->withPrix(
                prix: 650000,
                loyerMoisMur: null,
                loyerCC: null,
                loyerHT: null,
                depotGarantie: null,
                prixMasque: false,
                prixHT: null,
                copropriete: false,
                nbLots: null,
                syndicatCopro: null,
                syndicatCoproDetails: null,
                prixTerrain: null,
                prixModeleMaison: null,
                prixMin: null,
                prixMax: null
            )
            ->withDetail(
                activitesCommerciales: null,
                label: 'Beautiful family house with garden',
                description: '120m² house with 250m² garden, 4 bedrooms, terrace. Ideal for families.',
                datesDispo: new \DateTimeImmutable('2025-02-01'),
                amenagementHandicapes: false,
                animauxAcceptes: true,
                duplex: false,
                commPrives: null,
                logementADisposition: null,
                nomModele: null
            )
            ->withDiagnostic(
                recent: true,
                travaux: false,
                consoEnergie: 'D',
                bilanConsoEnergie: '220',
                ges: 'D',
                bilanGes: '35',
                dpeAt: new \DateTimeImmutable('2024-09-10'),
                dpeVersion: '2021',
                dpeMin: null,
                dpeMax: null,
                dpeAnneeRef: null,
                dpeCoutConsoAnnuelle: 1800
            )
            ->withContact(
                tel: '0478000000',
                fullName: 'Mary Johnson',
                email: 'lyon@agency.com',
                interCabinet: false,
                interCabinetPrive: null,
                codeNego: 'NEG002',
                agenceTerrain: null
            );

        // Generate CSV
        $export = $builder->build();
        
        return $export->toCSV();
    }
}
```

#### Usage in a Controller

```php
<?php

namespace App\Controller;

use App\Service\PolirisExportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExportController extends AbstractController
{
    #[Route('/export/poliris', name: 'export_poliris')]
    public function exportPoliris(PolirisExportService $exportService): Response
    {
        $csvContent = $exportService->generateExport();
        
        $response = new Response($csvContent);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="export-poliris.csv"');
        
        return $response;
    }
}
```

---

### Expected Output

The generated CSV will contain 333+ columns. Here's a **simplified excerpt** of the first columns:

```csv
AGENCE001,PROP-12345,vente,1,,,,75001,Paris,...,65,3,2,...,450000,...
AGENCE001,PROP-67890,vente,2,,,,69003,Lyon,...,120,5,4,...,650000,...
```

**File structure:**

| Col 1-4 | Col 5-10 | Col 11-40 | Col 41-100 | Col 101-200 | Col 201-333 |
|---------|----------|-----------|------------|-------------|-------------|
| Identifier | Type | Photos | Location | Surface/Price | Miscellaneous |

#### Main Column Mapping

| Column | Name | Example |
|---------|-----|---------|
| 1 | Agency ID | `AGENCE001` |
| 2 | Property Reference | `PROP-12345` |
| 3 | Listing Type | `vente` or `location` |
| 4 | Property Type | `1` (Apt), `2` (House) |
| 5-10 | Photos | Image URLs |
| 11 | Postal Code | `75001` |
| 12 | City | `Paris` |
| 20 | Surface | `65` (m²) |
| 21 | Rooms | `3` |
| 22 | Bedrooms | `2` |
| 30 | Price | `450000` |
| ... | ... | ... |

---

## Use Cases

### Case #1: Export for SeLoger with Mapping

SeLoger has specific **requirements** for Poliris data.

#### Property Type Mapping

```php
<?php

namespace App\Service;

class SeLogerMappingService
{
    /**
     * Property type mapping for SeLoger
     */
    public const TYPE_MAPPING = [
        'apartment' => 1,
        'house' => 2,
        'parking' => 3,
        'land' => 4,
        'shop' => 5,
        'office' => 6,
        'building' => 7,
        'castle' => 8,
        'block' => 9,
        'loft' => 10,
        'commercial_premises' => 11,
        'new_development' => 13,
    ];

    /**
     * Subtypes for apartments
     */
    public const SOUS_TYPE_APPARTEMENT = [
        'duplex' => 1,
        'triplex' => 2,
        'loft' => 3,
        'penthouse' => 4,
    ];

    /**
     * Subtypes for houses
     */
    public const SOUS_TYPE_MAISON = [
        'villa' => 1,
        'farmhouse' => 2,
        'chalet' => 3,
        'farm' => 4,
        'longhouse' => 5,
    ];

    public function getTypePoliris(string $propertyType): int
    {
        return self::TYPE_MAPPING[$propertyType] ?? 1;
    }

    public function getSubType(string $propertyType, ?string $subType): ?int
    {
        if ($propertyType === 'apartment' && $subType) {
            return self::SOUS_TYPE_APPARTEMENT[$subType] ?? null;
        }
        
        if ($propertyType === 'house' && $subType) {
            return self::SOUS_TYPE_MAISON[$subType] ?? null;
        }
        
        return null;
    }
}
```

#### Using the Mapping

```php
<?php

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;
use App\Service\SeLogerMappingService;

$mapping = new SeLogerMappingService();
$builder = new AnnonceExportBuilder();

// For a duplex
$builder
    ->startLine()
    ->withIdentifiant('AGENCE001', 'REF-001', 'vente', 'TECH-001')
    ->withType(
        type: $mapping->getTypePoliris('apartment'),    // 1
        sousType: $mapping->getSubType('apartment', 'duplex')  // 1
    )
    ->withDetail(
        activitesCommerciales: null,
        label: '4-room duplex',
        description: 'Magnificent duplex...',
        datesDispo: new \DateTimeImmutable(),
        amenagementHandicapes: false,
        animauxAcceptes: false,
        duplex: true,  // Important for SeLoger
        commPrives: null,
        logementADisposition: null,
        nomModele: null
    );
```

#### SeLoger-specific Publication

```php
$builder
    ->startLine()
    ->withIdentifiant(/* ... */)
    ->withPublication(
        publications: 'seloger',  // Target portals: seloger, leboncoin, etc.
        coupDeCoeur: true,        // Featured listing
        versionFormat: '4.1.17'   // Poliris version
    );
```

---

### Case #2: Including Photos in Export

Real estate portals require quality photos. The bundle supports up to **30 photos per listing**.

#### Example with Photos

```php
<?php

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;

$builder = new AnnonceExportBuilder();

$builder
    ->startLine()
    ->withIdentifiant('AGENCE001', 'REF-001', 'vente', 'TECH-001')
    ->withType(1, null)
    ->withPhoto(
        // Photo URLs (30 max)
        photo1: 'https://www.example.com/photos/property-001/living-room.jpg',
        photo2: 'https://www.example.com/photos/property-001/kitchen.jpg',
        photo3: 'https://www.example.com/photos/property-001/bedroom1.jpg',
        photo4: 'https://www.example.com/photos/property-001/bedroom2.jpg',
        photo5: 'https://www.example.com/photos/property-001/bathroom.jpg',
        photo6: 'https://www.example.com/photos/property-001/exterior.jpg',
        photo7: null,
        photo8: null,
        photo9: null,
        photo10: null,
        photo11: null,
        photo12: null,
        photo13: null,
        photo14: null,
        photo15: null,
        photo16: null,
        photo17: null,
        photo18: null,
        photo19: null,
        photo20: null,
        photo21: null,
        photo22: null,
        photo23: null,
        photo24: null,
        photo25: null,
        photo26: null,
        photo27: null,
        photo28: null,
        photo29: null,
        photo30: null,
        
        // Photo titles (optional)
        titre1: 'Bright living room',
        titre2: 'Equipped kitchen',
        titre3: 'Bedroom 1',
        titre4: 'Bedroom 2',
        titre5: 'Bathroom',
        titre6: 'Exterior view',
        titre7: null,
        titre8: null,
        titre9: null,
        titre10: null,
        titre11: null,
        titre12: null,
        titre13: null,
        titre14: null,
        titre15: null,
        titre16: null,
        titre17: null,
        titre18: null,
        titre19: null,
        titre20: null,
        titre21: null,
        titre22: null,
        titre23: null,
        titre24: null,
        titre25: null,
        titre26: null,
        titre27: null,
        titre28: null,
        titre29: null,
        titre30: null,
        
        // Panoramic photo and virtual tour
        photoPanoramique: 'https://www.example.com/photos/property-001/panorama.jpg',
        urlVisiteVirtuelle: 'https://www.example.com/virtual-tour/property-001'
    );
```

#### Best Practices for Photos

✅ **Photo order**: Start with main rooms (living room, kitchen)  
✅ **Quality**: Minimum 1024x768, ideal 1920x1080  
✅ **Format**: JPG or PNG  
✅ **Size**: < 2 MB per photo  
✅ **Titles**: Descriptive and informative

❌ **Avoid**: Blurry photos, too dark, with watermarks

---

### Case #3: Automated Scheduled Export

#### Option A: Symfony Command

Create a command to generate the export:

```php
<?php
// src/Command/ExportPolirisCommand.php

namespace App\Command;

use App\Service\PolirisExportService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:export:poliris',
    description: 'Generate Poliris CSV file for real estate export',
)]
class ExportPolirisCommand extends Command
{
    public function __construct(
        private PolirisExportService $exportService,
        private string $exportDir
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Poliris File Generation');

        try {
            // Generate CSV
            $csvContent = $this->exportService->generateExport();
            
            // Save file
            $filename = sprintf(
                'poliris-export-%s.csv',
                (new \DateTime())->format('Y-m-d-His')
            );
            $filepath = $this->exportDir . '/' . $filename;
            
            file_put_contents($filepath, $csvContent);
            
            $io->success(sprintf('Export generated: %s', $filename));
            
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error('Error during generation: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
```

**Configuration** (`config/services.yaml`):

```yaml
# config/services.yaml
services:
    App\Command\ExportPolirisCommand:
        arguments:
            $exportDir: '%kernel.project_dir%/var/exports'
```

**Execution**:

```bash
php bin/console app:export:poliris
```

#### Option B: Cron Job

Add a cron task to run the export daily:

```bash
# Crontab: Export every day at 2am
0 2 * * * cd /var/www/myapp && php bin/console app:export:poliris >> /var/log/poliris-export.log 2>&1
```

#### Option C: Symfony Event

Trigger export automatically on certain events:

```php
<?php
// src/EventSubscriber/PropertyUpdateSubscriber.php

namespace App\EventSubscriber;

use App\Event\PropertyUpdatedEvent;
use App\Service\PolirisExportService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PropertyUpdateSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private PolirisExportService $exportService
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            PropertyUpdatedEvent::class => 'onPropertyUpdated',
        ];
    }

    public function onPropertyUpdated(PropertyUpdatedEvent $event): void
    {
        // Regenerate export after property update
        $csvContent = $this->exportService->generateExport();
        
        // Save or send the file
        // ...
    }
}
```

#### Option D: Symfony Messenger (Asynchronous)

For heavy exports, use Symfony Messenger:

```php
<?php
// src/Message/GeneratePolirisExportMessage.php

namespace App\Message;

class GeneratePolirisExportMessage
{
    public function __construct(
        public readonly \DateTimeImmutable $requestedAt
    ) {}
}
```

```php
<?php
// src/MessageHandler/GeneratePolirisExportHandler.php

namespace App\MessageHandler;

use App\Message\GeneratePolirisExportMessage;
use App\Service\PolirisExportService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class GeneratePolirisExportHandler
{
    public function __construct(
        private PolirisExportService $exportService
    ) {}

    public function __invoke(GeneratePolirisExportMessage $message): void
    {
        $csvContent = $this->exportService->generateExport();
        
        // Save the file
        file_put_contents(
            '/var/exports/poliris-' . $message->requestedAt->format('YmdHis') . '.csv',
            $csvContent
        );
    }
}
```

**Trigger the export**:

```php
$messageBus->dispatch(new GeneratePolirisExportMessage(new \DateTimeImmutable()));
```

---

### Case #4: Common Error and Solution

#### ❌ Error: "Invalid CSV format"

**Symptom**:  
Portal rejects CSV with "Invalid format" message.

**Possible causes**:

1. **Incorrect encoding**: CSV must be UTF-8
2. **Wrong separator**: Poliris uses commas (`,`)
3. **Incorrect column count**: 333 columns expected
4. **Missing values**: Some required columns are empty

**Solution 1: Check encoding**

```php
$csvContent = $builder->build()->toCSV();

// Force UTF-8 encoding
$csvContent = mb_convert_encoding($csvContent, 'UTF-8', 'auto');

// Add UTF-8 BOM (sometimes required)
$csvContent = "\xEF\xBB\xBF" . $csvContent;
```

**Solution 2: Check required columns**

Ensure you fill in **at minimum**:

```php
$builder
    ->startLine()
    // REQUIRED
    ->withIdentifiant(
        agenceId: 'AGENCE001',           // ✅ Required
        agencePropertyRef: 'REF-001',    // ✅ Required
        annonceType: 'vente',            // ✅ Required
        annonceIdTechnique: 'TECH-001'   // ✅ Required
    )
    ->withType(
        type: 1,                         // ✅ Required
        sousType: null
    )
    ->withLocalisation(
        cp: '75001',                     // ✅ Required
        ville: 'Paris',                  // ✅ Required
        pays: 'France',                  // ✅ Required
        adresse: null,                   // Optional
        // ... other optional parameters
    )
    ->withSurface(
        surface: 65,                     // ✅ Required
        surfaceTerrain: null,
        nbPieces: 3,                     // ✅ Required
        nbChambres: 2,                   // ✅ Required (depending on type)
        // ... other parameters
    )
    ->withPrix(
        prix: 450000,                    // ✅ Required
        // ... other optional parameters
    )
    ->withDetail(
        activitesCommerciales: null,
        label: 'My listing',             // ✅ Required
        description: 'Description...',   // ✅ Required
        // ... other parameters
    );
```

**Solution 3: Enable debug logging**

```php
try {
    $export = $builder->build();
    $csvContent = $export->toCSV();
} catch (\Throwable $e) {
    // Log the error
    error_log('Poliris error: ' . $e->getMessage());
    error_log('Trace: ' . $e->getTraceAsString());
    
    throw $e;
}
```

#### ❌ Error: "Memory exhausted"

**Symptom**:  
`PHP Fatal error: Allowed memory size exhausted`

**Cause**:  
Too many listings in memory (several thousand).

**Solution: Process in batches**

```php
<?php

namespace App\Service;

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;

class PolirisExportService
{
    private const BATCH_SIZE = 500;

    public function generateExportInBatches(\Iterator $properties): \Generator
    {
        $builder = new AnnonceExportBuilder();
        $count = 0;

        foreach ($properties as $property) {
            $this->addProperty($builder, $property);
            $count++;

            // Generate CSV every 500 listings
            if ($count % self::BATCH_SIZE === 0) {
                yield $builder->build()->toCSV();
                
                // Reset builder
                $builder = new AnnonceExportBuilder();
                
                // Free memory
                gc_collect_cycles();
            }
        }

        // Last listings
        if ($count % self::BATCH_SIZE !== 0) {
            yield $builder->build()->toCSV();
        }
    }

    private function addProperty(AnnonceExportBuilder $builder, $property): void
    {
        $builder
            ->startLine()
            ->withIdentifiant(/* ... */);
        // etc.
    }
}
```

**Usage**:

```php
// In a controller or command
$properties = $propertyRepository->findAllAsIterator();

foreach ($exportService->generateExportInBatches($properties) as $batch) {
    // Write each batch to a file
    file_put_contents('/tmp/export-batch-' . time() . '.csv', $batch, FILE_APPEND);
}
```

---

## Model Reference

The bundle provides **31 models** to represent all aspects of a real estate property.

### Model Overview

| Model | Description | CSV Columns |
|--------|-------------|--------------|
| **Identifiant** | Agency ID, property reference | 1-3, 175 |
| **Type** | Property type (apt, house, etc.) | 4, 181 |
| **Photo** | Photo URLs (30 max) + virtual tour | 5-10, 96-125 |
| **Localisation** | Address, postal code, city, GPS | 11-19, 158-165 |
| **Surface** | Surface, rooms, bedrooms | 20-29, 182-188 |
| **Prix** | Price, rent, charges | 30-34, 126-137 |
| **Detail** | Title, description, availability | 35-40, 194-196 |
| **Diagnostic** | DPE, GES, diagnostics | 41-50, 198-205 |
| **Contact** | Phone, email, agent | 51-57, 300-305 |
| **Exterieur** | Elevator, pool, view | 58-64 |
| **Interieur** | Furnished, construction year | 65-85 |
| **ChauffageClim** | Heating type, air conditioning | 86-87 |
| **PartieJour** | Kitchen, living room, equipment | 88-95 |
| **Etage** | Floor, number of floors | 138-140 |
| **Securite** | Digicode, intercom, alarm | 141-144 |
| **Garage** | Garage, type | 145-146 |
| **Parking** | Number of vehicles, parking type | 147-149 |
| **Bureau** | Office property information | 150-167 |
| **Boutique** | Shop information | 168-169 |
| **Terrain** | Buildable land, agricultural | 170-176 |
| **Location** | Lease duration, lease type | 177-180, 206-209 |
| **Viager** | Lump sum, monthly annuity | 210-214 |
| **Mandat** | Exclusive mandate, number | 215-225 |
| **HonoraireCharge** | Fees, charges | 226-235 |
| **Diagnostic** | Property diagnostics | 236-250 |
| **FondsCommerce** | Revenue, results (business) | 251-258 |
| **ProduitInvestissement** | Purchase value, return | 259-260 |
| **LocationVacances** | Season prices, availability | 261-272 |
| **Langue** | Multilingual (3 languages max) | 273-284 |
| **Publication** | Distribution portals | 285-287 |
| **ChampCustom** | Custom fields (26 max) | 288-313 |

### Most Used Models

#### 1. Identifiant (columns 1-3, 175)

```php
->withIdentifiant(
    agenceId: 'AGENCE001',           // Col 1: Agency ID
    agencePropertyRef: 'REF-001',    // Col 2: Property reference
    annonceType: 'vente',            // Col 3: vente/location
    annonceIdTechnique: 'TECH-001'   // Col 175: Technical ID
)
```

**Listing types**:
- `Annonce::ANNONCE_TYPE_VENTE` = `'vente'`
- `Annonce::ANNONCE_TYPE_LOCATION` = `'location'`
- `Annonce::ANNONCE_TYPE_MODELE_MAISON` = `'modèle de maison'`

#### 2. Type (columns 4, 181)

```php
->withType(
    type: 1,        // Col 4: Main type
    sousType: null  // Col 181: Subtype
)
```

**Type codes**:
- `1` = Apartment
- `2` = House
- `3` = Parking/Box
- `4` = Land
- `5` = Shop
- `6` = Office
- `7` = Building
- `8` = Castle
- `9` = Block
- `10` = Loft
- `11` = Commercial premises
- `13` = New development

#### 3. Surface (columns 20-29, 182-188)

```php
->withSurface(
    surface: 65,              // Col 20: Living area (m²)
    surfaceTerrain: 200,      // Col 21: Land area (m²)
    nbPieces: 3,              // Col 22: Number of rooms
    nbChambres: 2,            // Col 23: Number of bedrooms
    nbSdb: 1,                 // Col 24: Bathrooms
    nbSalleEau: 1,            // Col 25: Shower rooms
    nbWc: 1,                  // Col 26: WC
    nbBalcons: 1,             // Col 27: Number of balconies
    surfaceBalcon: 5,         // Col 28: Balcony surface (m²)
    nbParkings: 1,            // Col 29: Parkings
    // ... 18 other parameters
)
```

#### 4. Prix (columns 30-34, 126-137)

```php
->withPrix(
    prix: 450000,                    // Col 30: Sale price or rent
    loyerMoisMur: null,              // Col 31: Wall rent
    loyerCC: 500,                    // Col 32: Rent including charges
    loyerHT: null,                   // Col 33: Rent excl. tax (professional)
    depotGarantie: 1000,             // Col 34: Security deposit
    prixMasque: false,               // Col 126: Hide price
    prixHT: null,                    // Col 127: Price excl. tax (professional)
    copropriete: true,               // Col 128: In co-ownership
    nbLots: 25,                      // Col 129: Number of lots
    syndicatCopro: null,             // Col 130: Syndic
    syndicatCoproDetails: 'Annual charges: €2400',  // Col 131
    // ... other parameters
)
```

#### 5. Detail (columns 35-40, 194-196)

```php
->withDetail(
    activitesCommerciales: null,              // Col 35
    label: 'Bright 3-room apartment',         // Col 36: Title
    description: 'Beautiful description...',  // Col 37: Description
    datesDispo: new \DateTimeImmutable(),     // Col 38: Availability date
    amenagementHandicapes: false,             // Col 39
    animauxAcceptes: true,                    // Col 40
    duplex: false,                            // Col 194
    commPrives: null,                         // Col 195
    logementADisposition: null,               // Col 196
    nomModele: null
)
```

---

## Troubleshooting

### FAQ

**Q: Can I validate data before export?**  
A: No, the bundle does not offer built-in validation for performance reasons. Validate your data upstream with Symfony's Validator.

**Q: How to handle multilingual fields?**  
A: Use the `Langue` model with up to 3 languages:

```php
->withLangue(
    code1: 'FR',
    code2: 'EN',
    code3: 'DE',
    proximite1: 'Near metro',
    proximite2: 'Near metro',
    proximite3: 'Near U-Bahn',
    label1: '3-room apartment',
    label2: '3-room apartment',
    label3: '3-Zimmer-Wohnung',
    descriptif1: 'Beautiful description in French',
    descriptif2: 'Beautiful description in English',
    descriptif3: 'Beautiful description in German'
)
```

**Q: How to export only certain listings?**  
A: Filter your data upstream in your repository:

```php
// In your service
public function generateExportForSeLoger(): string
{
    $properties = $this->propertyRepository->findBy([
        'status' => 'published',
        'exportToSeLoger' => true
    ]);

    $builder = new AnnonceExportBuilder();
    
    foreach ($properties as $property) {
        $this->addProperty($builder, $property);
    }

    return $builder->build()->toCSV();
}
```

**Q: Is the CSV valid for all portals?**  
A: Poliris V4.1.17 format is supported by most French portals (SeLoger, LeBonCoin, PAP, etc.). Check each portal's documentation for specifics.

**Q: How to handle generation errors?**  
A: Use try-catch and log errors:

```php
use Psr\Log\LoggerInterface;

public function generateExport(LoggerInterface $logger): ?string
{
    try {
        $builder = new AnnonceExportBuilder();
        
        foreach ($this->properties as $property) {
            try {
                $this->addProperty($builder, $property);
            } catch (\Throwable $e) {
                // Log but continue
                $logger->error('Listing error ' . $property->getId(), [
                    'exception' => $e->getMessage()
                ]);
            }
        }
        
        return $builder->build()->toCSV();
        
    } catch (\Throwable $e) {
        $logger->critical('Poliris CSV generation error', [
            'exception' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        
        return null;
    }
}
```

---

### Pre-production Checklist

- [ ] Required fields are filled (Identifiant, Type, Localisation, Surface, Prix, Detail)
- [ ] Photos are accessible via HTTPS
- [ ] CSV encoding is UTF-8
- [ ] Dates use `DateTimeImmutable` or `DateTime`
- [ ] Booleans are correctly converted (`true` → `'OUI'`, `false` → `'NON'`)
- [ ] CSV file is tested on a portal in test environment
- [ ] Logging is enabled to trace errors
- [ ] Monitoring system is in place (daily export success/failure)
- [ ] Performance is acceptable (< 30s for 1000 listings)

---

### Additional Resources

- **Official Poliris documentation**: [https://www.poliris.com/documentation](https://www.poliris.com/documentation)
- **GitHub repository**: [https://github.com/SpiriitLabs/poliris-bundle](https://github.com/SpiriitLabs/poliris-bundle)
- **Packagist**: [https://packagist.org/packages/spiriitlabs/poliris-bundle](https://packagist.org/packages/spiriitlabs/poliris-bundle)

---

## Architecture Diagram

```
┌─────────────────────────────────────────────────────────────┐
│                     Your Application                         │
│                                                               │
│  ┌────────────────┐      ┌─────────────────┐                │
│  │   Controller   │─────▶│  ExportService  │                │
│  └────────────────┘      └────────┬────────┘                │
│                                    │                          │
│                                    ▼                          │
│              ┌─────────────────────────────────┐             │
│              │  AnnonceExportBuilder (Bundle)  │             │
│              └──────────────┬──────────────────┘             │
│                             │                                 │
│                             ▼                                 │
│              ┌─────────────────────────────┐                 │
│              │   AnnonceBuilder (Bundle)   │                 │
│              └──────────────┬──────────────┘                 │
│                             │                                 │
│                    Uses 31 models                            │
│                             │                                 │
│              ┌──────────────┼──────────────┐                 │
│              ▼              ▼              ▼                  │
│         Identifiant     Surface        Photo                 │
│         Type            Prix           Detail                │
│         Localisation    Contact        etc.                  │
│                                                               │
└───────────────────────────┬───────────────────────────────┘
                            │
                            ▼
                   ┌────────────────┐
                   │  CSV File      │
                   │  (333 columns)  │
                   └────────┬───────┘
                            │
           ┌────────────────┼────────────────┐
           ▼                ▼                ▼
      SeLoger         LeBonCoin           PAP
```

---

## Use Case Summary Table

| Use Case | Difficulty | Estimated Time | Required Models |
|-------------|------------|--------------|----------------|
| Basic export | ⭐ Easy | 15 min | 5-7 models |
| Export with photos | ⭐⭐ Medium | 30 min | 8-10 models |
| Complete SeLoger export | ⭐⭐⭐ Advanced | 1-2h | 15-20 models |
| Cron automation | ⭐⭐ Medium | 45 min | Depends on case |
| Asynchronous export | ⭐⭐⭐ Advanced | 2-3h | Depends on case |
| Multi-portal | ⭐⭐⭐ Advanced | 3-4h | 20-25 models |

---

**You're now ready to use PolirisBundle like a pro! 🚀**

If you have questions, feel free to open an issue on GitHub or check the examples in the `tests/` folder.

Happy exporting! 🏠✨
