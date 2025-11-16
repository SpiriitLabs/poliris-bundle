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
 * Generate large volume mock data for performance testing
 * 
 * Usage: php generate-large-mock-data.php [count]
 * Default count: 1000
 */

$count = isset($argv[1]) ? (int)$argv[1] : 1000;

if ($count < 1 || $count > 100000) {
    echo "Error: Count must be between 1 and 100000\n";
    exit(1);
}

$cities = ['Paris', 'Lyon', 'Marseille', 'Toulouse', 'Nice', 'Nantes', 'Bordeaux', 'Lille', 'Strasbourg', 'Rennes'];
$propertyTypes = [
    ['type' => 'Maison', 'sousType' => 'Villa'],
    ['type' => 'Appartement', 'sousType' => 'T2'],
    ['type' => 'Appartement', 'sousType' => 'T3'],
    ['type' => 'Appartement', 'sousType' => 'T4'],
    ['type' => 'Terrain', 'sousType' => 'Constructible'],
    ['type' => 'Maison', 'sousType' => 'Pavillon'],
];
$transactionTypes = ['vente', 'location'];

$properties = [];

for ($i = 1; $i <= $count; $i++) {
    $city = $cities[array_rand($cities)];
    $propertyType = $propertyTypes[array_rand($propertyTypes)];
    $transactionType = $transactionTypes[array_rand($transactionTypes)];
    $isRental = $transactionType === 'location';
    
    $property = [
        'identifiant' => [
            'agenceId' => 'AGENCY' . str_pad((string)(($i % 100) + 1), 3, '0', STR_PAD_LEFT),
            'agencePropertyRef' => 'REF-' . strtoupper($propertyType['type']) . '-' . str_pad((string)$i, 6, '0', STR_PAD_LEFT),
            'annonceType' => $transactionType,
            'annonceIdTechnique' => 'TECH-ID-' . str_pad((string)$i, 6, '0', STR_PAD_LEFT)
        ],
        'type' => $propertyType,
        'localisation' => [
            'ville' => $city,
            'codePostal' => (string)(75000 + ($i % 20)),
            'pays' => 'France',
            'adresse' => ($i % 100) . ' Rue de la République',
            'latitude' => 48.8566 + (($i % 100) * 0.01),
            'longitude' => 2.3522 + (($i % 100) * 0.01),
            'proximite' => 'Proche commodités'
        ],
        'prix' => [
            'prix' => $isRental ? (800 + ($i % 1200)) : (150000 + ($i % 500000)),
            'mentionPrix' => $isRental ? 'CC' : 'FAI'
        ],
        'surface' => [
            'habitable' => 50 + ($i % 200),
            'terrain' => ($propertyType['type'] === 'Terrain') ? (300 + ($i % 1000)) : null
        ],
        'contact' => [
            'nom' => 'Agent ' . (($i % 50) + 1),
            'telephone' => '01' . str_pad((string)($i % 100000000), 8, '0', STR_PAD_LEFT),
            'email' => 'agent' . (($i % 50) + 1) . '@agency.com',
            'siteWeb' => 'www.agency' . (($i % 10) + 1) . '.com'
        ],
        'detail' => [
            'activitesCommerciales' => $propertyType['sousType'] . ' ' . ($isRental ? 'à louer' : 'à vendre'),
            'description' => 'Description détaillée du bien immobilier numéro ' . $i . '. ' . 
                           'Bien situé dans un quartier calme avec toutes commodités à proximité.'
        ],
        'photos' => [
            'https://example.com/photos/property' . $i . '-1.jpg',
            'https://example.com/photos/property' . $i . '-2.jpg'
        ],
        'photosTitres' => [
            'Vue principale',
            'Vue intérieure'
        ]
    ];
    
    if ($isRental) {
        $property['location'] = [
            'loyerMensuel' => $property['prix']['prix'],
            'charges' => 50 + ($i % 150)
        ];
    }
    
    if ($propertyType['type'] === 'Terrain') {
        $property['terrain'] = [
            'surface' => $property['surface']['terrain'],
            'constructible' => true,
            'viabilise' => ($i % 2) === 0,
            'cos' => 0.3 + (($i % 10) * 0.05)
        ];
    }
    
    $properties[] = $property;
}

echo json_encode($properties, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
