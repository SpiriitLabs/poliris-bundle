#!/usr/bin/env php
<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Performance test script for CSV export generation
 * Tests with different volumes of data
 * 
 * Usage: php run-performance-test.php [count]
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;
use Spiriit\PolirisBundle\Centers\CsvCenter\AnnonceCsvCenter;

$count = isset($argv[1]) ? (int)$argv[1] : 100;

if ($count < 1 || $count > 10000) {
    echo "Error: Count must be between 1 and 10000\n";
    exit(1);
}

echo "Generating mock data for $count properties...\n";

// Generate mock data
$mockDataFile = __DIR__ . '/../Fixtures/mock-properties-perf-' . $count . '.json';
$generateCmd = 'php ' . __DIR__ . '/generate-large-mock-data.php ' . $count . ' > ' . escapeshellarg($mockDataFile);
exec($generateCmd, $output, $returnCode);

if ($returnCode !== 0) {
    echo "Error generating mock data\n";
    exit(1);
}

echo "Loading mock data from file...\n";
$mockData = json_decode(file_get_contents($mockDataFile), true);

if (!is_array($mockData) || empty($mockData)) {
    echo "Error loading mock data\n";
    exit(1);
}

echo "Building export for $count properties...\n";
$startBuild = microtime(true);

$builder = new AnnonceExportBuilder();

foreach ($mockData as $property) {
    $lineBuilder = $builder->startLine();
    
    // Required fields
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
    
    // Initialize all required properties
    $lineBuilder->withPhoto();
    $lineBuilder->withChampCustom();
    $lineBuilder->withLangue();
    $lineBuilder->withMandat();
    $lineBuilder->withLocationVacances();
    $lineBuilder->withViager();
    
    if (isset($property['terrain'])) {
        $terrain = $property['terrain'];
        $lineBuilder->withTerrain(
            $terrain['surface'] ?? null,
            $terrain['constructible'] ?? null,
            $terrain['viabilise'] ?? null,
            null, null, null, null,
            $terrain['cos'] ?? null
        );
    } else {
        $lineBuilder->withTerrain();
    }
    
    $lineBuilder->withBureau();
    $lineBuilder->withDiagnostic();
    $lineBuilder->withParking();
    $lineBuilder->withBoutique();
    
    if (isset($property['prix'])) {
        $prix = $property['prix'];
        $lineBuilder->withPrix(
            $prix['prix'] ?? null,
            null, null, null,
            $prix['mentionPrix'] ?? null,
            null,
            $prix['complement'] ?? null
        );
    } else {
        $lineBuilder->withPrix();
    }
    
    if (isset($property['location'])) {
        $location = $property['location'];
        $lineBuilder->withLocation(
            $location['loyerMensuel'] ?? null,
            $location['charges'] ?? null
        );
    } else {
        $lineBuilder->withLocation();
    }
    
    $lineBuilder->withProduitInvestissement();
    $lineBuilder->withFondsCommerce();
    $lineBuilder->withHonoraireCharge();
    
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
    
    if (isset($property['surface'])) {
        $surf = $property['surface'];
        $lineBuilder->withSurface(
            $surf['habitable'] ?? null,
            $surf['terrain'] ?? null,
            $surf['sejour'] ?? null,
            null,
            $surf['terrasse'] ?? null,
            null, null, null,
            $surf['hauteur'] ?? null,
            $surf['balcon'] ?? null
        );
    } else {
        $lineBuilder->withSurface();
    }
    
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
    
    $lineBuilder->withEtage();
    $lineBuilder->withInterieur();
    $lineBuilder->withPartieJour();
    $lineBuilder->withExterieur();
    $lineBuilder->withGarage();
    $lineBuilder->withSecurite();
    $lineBuilder->withChauffageClim();
    
    if (isset($property['detail'])) {
        $detail = $property['detail'];
        $lineBuilder->withDetail(
            $detail['activitesCommerciales'] ?? null,
            $detail['description'] ?? null
        );
    } else {
        $lineBuilder->withDetail();
    }
    
    $lineBuilder->withPublication();
}

$export = $builder->build();
$buildTime = microtime(true) - $startBuild;

echo "Generating CSV file...\n";
$startCsv = microtime(true);

$csvCenter = new AnnonceCsvCenter();
$csvFilePath = $csvCenter->generateCsvFile($export, 'UTF-8');
$csvTime = microtime(true) - $startCsv;

$totalTime = $buildTime + $csvTime;

// Get file size
$fileSize = filesize($csvFilePath);
$fileSizeMB = round($fileSize / 1024 / 1024, 2);

echo "\n";
echo "========================================\n";
echo "Performance Test Results\n";
echo "========================================\n";
echo "Properties count: $count\n";
echo "Build time: " . round($buildTime, 3) . "s\n";
echo "CSV generation time: " . round($csvTime, 3) . "s\n";
echo "Total time: " . round($totalTime, 3) . "s\n";
echo "CSV file size: $fileSizeMB MB\n";
echo "Throughput: " . round($count / $totalTime, 2) . " properties/second\n";
echo "========================================\n";

// Clean up
unlink($csvFilePath);
unlink($mockDataFile);

exit(0);
