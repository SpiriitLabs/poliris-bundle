# Guide Développeur - PolirisBundle 📚

> **Bundle Symfony pour la génération de flux CSV Poliris (V4.1.17)**  
> Export de données immobilières vers SeLoger, LeBonCoin et autres portails

---

## 📋 Table des matières

1. [Getting Started](#-getting-started)
2. [Cas d'usage illustrés](#-cas-dusage-illustrés)
3. [Référence des modèles](#-référence-des-modèles)
4. [Dépannage](#-dépannage)

---

## 🚀 Getting Started

### Qu'est-ce que PolirisBundle ?

**PolirisBundle** est un bundle Symfony qui facilite la génération de fichiers CSV au format **Poliris** (V4.1.17), le standard utilisé par les principaux portails immobiliers français (SeLoger, LeBonCoin, etc.).

#### Pourquoi ce bundle ?

- ✅ **Simplicité** : Pas besoin de gérer manuellement 333+ colonnes CSV
- ✅ **Type-safe** : Utilise le pattern Builder avec des classes typées
- ✅ **Performance** : Optimisé pour traiter des milliers d'annonces
- ✅ **Maintenance** : Évolution facile grâce à l'architecture modulaire

#### Que puis-je en faire ?

- Exporter vos biens immobiliers vers SeLoger, LeBonCoin
- Automatiser la mise à jour quotidienne de vos annonces
- Gérer des flux multi-portails avec un seul code source
- Intégrer facilement des photos et métadonnées

---

### Installation

#### Prérequis

- PHP >= 8.2
- Symfony >= 5.4

#### Installation via Composer

```bash
composer require spiriitlabs/poliris-bundle
```

Le bundle sera automatiquement enregistré grâce au Flex de Symfony.

---

### Configuration minimale

Le bundle ne nécessite **aucune configuration** pour démarrer. Il fonctionne out-of-the-box !

Si vous souhaitez personnaliser le comportement, créez un fichier `config/packages/poliris.yaml` :

```yaml
# config/packages/poliris.yaml (optionnel)
poliris:
    # Configuration future (actuellement aucune configuration nécessaire)
```

---

### Premier export : Exemple complet

Créons notre premier fichier CSV avec 2 annonces immobilières.

#### Code PHP

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
        
        // Annonce 1 : Appartement T3 à Paris
        $builder
            ->startLine()
            ->withIdentifiant(
                agenceId: 'AGENCE001',
                agencePropertyRef: 'BIEN-12345',
                annonceType: Annonce::ANNONCE_TYPE_VENTE,
                annonceIdTechnique: 'TECH-001'
            )
            ->withType(
                type: 1,        // 1 = Appartement
                sousType: null
            )
            ->withLocalisation(
                cp: '75001',
                ville: 'Paris',
                pays: 'France',
                adresse: '10 rue de Rivoli',
                quartierProximite: 'Proche métro Louvre',
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
                syndicatCoproDetails: 'Charges annuelles : 2400€',
                prixTerrain: null,
                prixModeleMaison: null,
                prixMin: null,
                prixMax: null
            )
            ->withDetail(
                activitesCommerciales: null,
                label: 'Appartement T3 lumineux proche Louvre',
                description: 'Magnifique appartement de 65m² avec balcon, situé au cœur de Paris. Vue dégagée, calme, proche de toutes commodités.',
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
                fullName: 'Jean Dupont',
                email: 'contact@agence.fr',
                interCabinet: false,
                interCabinetPrive: null,
                codeNego: 'NEG001',
                agenceTerrain: null
            );

        // Annonce 2 : Maison à Lyon
        $builder
            ->startLine()
            ->withIdentifiant(
                agenceId: 'AGENCE001',
                agencePropertyRef: 'BIEN-67890',
                annonceType: Annonce::ANNONCE_TYPE_VENTE,
                annonceIdTechnique: 'TECH-002'
            )
            ->withType(
                type: 2,        // 2 = Maison
                sousType: null
            )
            ->withLocalisation(
                cp: '69003',
                ville: 'Lyon',
                pays: 'France',
                adresse: '25 avenue du Général Leclerc',
                quartierProximite: 'Quartier résidentiel',
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
                label: 'Belle maison familiale avec jardin',
                description: 'Maison de 120m² avec jardin de 250m², 4 chambres, terrasse. Idéale famille.',
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
                fullName: 'Marie Martin',
                email: 'lyon@agence.fr',
                interCabinet: false,
                interCabinetPrive: null,
                codeNego: 'NEG002',
                agenceTerrain: null
            );

        // Génération du CSV
        $export = $builder->build();
        
        return $export->toCSV(); // Retourne le contenu CSV
    }
}
```

#### Utilisation dans un contrôleur

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

### À quoi ressemble le résultat ?

Le CSV généré contiendra 333+ colonnes. Voici un **extrait simplifié** des premières colonnes :

```csv
AGENCE001,BIEN-12345,vente,1,,,,75001,Paris,...,65,3,2,...,450000,...
AGENCE001,BIEN-67890,vente,2,,,,69003,Lyon,...,120,5,4,...,650000,...
```

**Structure du fichier :**

| Col 1-4 | Col 5-10 | Col 11-40 | Col 41-100 | Col 101-200 | Col 201-333 |
|---------|----------|-----------|------------|-------------|-------------|
| Identifiant | Type | Photos | Localisation | Surface/Prix | Divers |

#### Correspondance des colonnes principales

| Colonne | Nom | Exemple |
|---------|-----|---------|
| 1 | ID Agence | `AGENCE001` |
| 2 | Référence bien | `BIEN-12345` |
| 3 | Type annonce | `vente` ou `location` |
| 4 | Type de bien | `1` (Appt), `2` (Maison) |
| 5-10 | Photos | URLs des images |
| 11 | Code postal | `75001` |
| 12 | Ville | `Paris` |
| 20 | Surface | `65` (m²) |
| 21 | Nb pièces | `3` |
| 22 | Nb chambres | `2` |
| 30 | Prix | `450000` |
| ... | ... | ... |

---

## 🎯 Cas d'usage illustrés

### Cas #1 : Exporter pour SeLoger avec mapping

SeLoger impose certaines **contraintes spécifiques** sur les données Poliris.

#### Mapping des types de biens

```php
<?php

namespace App\Service;

class SeLogerMappingService
{
    /**
     * Mapping des types de biens pour SeLoger
     */
    public const TYPE_MAPPING = [
        'appartement' => 1,
        'maison' => 2,
        'parking' => 3,
        'terrain' => 4,
        'boutique' => 5,
        'bureau' => 6,
        'batiment' => 7,
        'chateau' => 8,
        'immeuble' => 9,
        'loft' => 10,
        'local_commercial' => 11,
        'programme_neuf' => 13,
    ];

    /**
     * Sous-types pour appartement
     */
    public const SOUS_TYPE_APPARTEMENT = [
        'duplex' => 1,
        'triplex' => 2,
        'loft' => 3,
        'penthouse' => 4,
    ];

    /**
     * Sous-types pour maison
     */
    public const SOUS_TYPE_MAISON = [
        'villa' => 1,
        'mas' => 2,
        'chalet' => 3,
        'ferme' => 4,
        'longere' => 5,
    ];

    public function getTypePoliris(string $typeBien): int
    {
        return self::TYPE_MAPPING[$typeBien] ?? 1;
    }

    public function getSousType(string $typeBien, ?string $sousType): ?int
    {
        if ($typeBien === 'appartement' && $sousType) {
            return self::SOUS_TYPE_APPARTEMENT[$sousType] ?? null;
        }
        
        if ($typeBien === 'maison' && $sousType) {
            return self::SOUS_TYPE_MAISON[$sousType] ?? null;
        }
        
        return null;
    }
}
```

#### Utilisation du mapping

```php
<?php

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;
use App\Service\SeLogerMappingService;

$mapping = new SeLogerMappingService();
$builder = new AnnonceExportBuilder();

// Pour un duplex
$builder
    ->startLine()
    ->withIdentifiant('AGENCE001', 'REF-001', 'vente', 'TECH-001')
    ->withType(
        type: $mapping->getTypePoliris('appartement'),    // 1
        sousType: $mapping->getSousType('appartement', 'duplex')  // 1
    )
    ->withDetail(
        activitesCommerciales: null,
        label: 'Duplex 4 pièces',
        description: 'Magnifique duplex...',
        datesDispo: new \DateTimeImmutable(),
        amenagementHandicapes: false,
        animauxAcceptes: false,
        duplex: true,  // Important pour SeLoger
        commPrives: null,
        logementADisposition: null,
        nomModele: null
    );
```

#### Publication spécifique SeLoger

```php
$builder
    ->startLine()
    ->withIdentifiant(/* ... */)
    ->withPublication(
        publications: 'seloger',  // Portails cibles : seloger, leboncoin, etc.
        coupDeCoeur: true,        // Mise en avant
        versionFormat: '4.1.17'   // Version Poliris
    );
```

---

### Cas #2 : Inclure des photos dans l'export

Les portails immobiliers nécessitent des photos de qualité. Le bundle supporte jusqu'à **30 photos par annonce**.

#### Exemple avec photos

```php
<?php

use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;

$builder = new AnnonceExportBuilder();

$builder
    ->startLine()
    ->withIdentifiant('AGENCE001', 'REF-001', 'vente', 'TECH-001')
    ->withType(1, null)
    ->withPhoto(
        // URLs des photos (30 max)
        photo1: 'https://www.example.com/photos/bien-001/salon.jpg',
        photo2: 'https://www.example.com/photos/bien-001/cuisine.jpg',
        photo3: 'https://www.example.com/photos/bien-001/chambre1.jpg',
        photo4: 'https://www.example.com/photos/bien-001/chambre2.jpg',
        photo5: 'https://www.example.com/photos/bien-001/sdb.jpg',
        photo6: 'https://www.example.com/photos/bien-001/exterieur.jpg',
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
        
        // Titres des photos (optionnels)
        titre1: 'Salon lumineux',
        titre2: 'Cuisine équipée',
        titre3: 'Chambre 1',
        titre4: 'Chambre 2',
        titre5: 'Salle de bain',
        titre6: 'Vue extérieure',
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
        
        // Photo panoramique et visite virtuelle
        photoPanoramique: 'https://www.example.com/photos/bien-001/panorama.jpg',
        urlVisiteVirtuelle: 'https://www.example.com/visite-virtuelle/bien-001'
    );
```

#### Bonnes pratiques pour les photos

✅ **Ordre des photos** : Commencez par les pièces principales (salon, cuisine)  
✅ **Qualité** : Minimum 1024x768, idéal 1920x1080  
✅ **Format** : JPG ou PNG  
✅ **Poids** : < 2 Mo par photo  
✅ **Titres** : Descriptifs et informatifs

❌ **À éviter** : Photos floues, trop sombres, avec filigrane

---

### Cas #3 : Automatiser un export programmé

#### Option A : Avec une commande Symfony

Créez une commande pour générer l'export :

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
    description: 'Génère le fichier CSV Poliris pour l\'export immobilier',
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
        $io->title('Génération du fichier Poliris');

        try {
            // Génération du CSV
            $csvContent = $this->exportService->generateExport();
            
            // Sauvegarde du fichier
            $filename = sprintf(
                'poliris-export-%s.csv',
                (new \DateTime())->format('Y-m-d-His')
            );
            $filepath = $this->exportDir . '/' . $filename;
            
            file_put_contents($filepath, $csvContent);
            
            $io->success(sprintf('Export généré : %s', $filename));
            
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error('Erreur lors de la génération : ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
```

**Configuration** (`config/services.yaml`) :

```yaml
# config/services.yaml
services:
    App\Command\ExportPolirisCommand:
        arguments:
            $exportDir: '%kernel.project_dir%/var/exports'
```

**Exécution** :

```bash
php bin/console app:export:poliris
```

#### Option B : Avec un cron

Ajoutez une tâche cron pour exécuter l'export quotidiennement :

```bash
# Crontab : Export tous les jours à 2h du matin
0 2 * * * cd /var/www/myapp && php bin/console app:export:poliris >> /var/log/poliris-export.log 2>&1
```

#### Option C : Avec un Event Symfony

Déclenchez l'export automatiquement lors de certains événements :

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
        // Regénérer l'export après mise à jour d'un bien
        $csvContent = $this->exportService->generateExport();
        
        // Enregistrer ou envoyer le fichier
        // ...
    }
}
```

#### Option D : Via Messenger (asynchrone)

Pour des exports lourds, utilisez Symfony Messenger :

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
        
        // Sauvegarder le fichier
        file_put_contents(
            '/var/exports/poliris-' . $message->requestedAt->format('YmdHis') . '.csv',
            $csvContent
        );
    }
}
```

**Déclencher l'export** :

```php
$messageBus->dispatch(new GeneratePolirisExportMessage(new \DateTimeImmutable()));
```

---

### Cas #4 : Erreur courante et solution

#### ❌ Erreur : "Invalid CSV format"

**Symptôme** :  
Le portail refuse le CSV avec le message "Format invalide".

**Causes possibles** :

1. **Encodage incorrect** : Le CSV doit être en UTF-8
2. **Séparateur incorrect** : Poliris utilise des virgules (`,`)
3. **Nombre de colonnes incorrect** : 333 colonnes attendues
4. **Valeurs manquantes** : Certaines colonnes obligatoires sont vides

**Solution 1 : Vérifier l'encodage**

```php
$csvContent = $builder->build()->toCSV();

// Forcer l'encodage UTF-8
$csvContent = mb_convert_encoding($csvContent, 'UTF-8', 'auto');

// Ajouter le BOM UTF-8 (parfois nécessaire)
$csvContent = "\xEF\xBB\xBF" . $csvContent;
```

**Solution 2 : Vérifier les colonnes obligatoires**

Assurez-vous de remplir **au minimum** :

```php
$builder
    ->startLine()
    // OBLIGATOIRES
    ->withIdentifiant(
        agenceId: 'AGENCE001',           // ✅ Requis
        agencePropertyRef: 'REF-001',    // ✅ Requis
        annonceType: 'vente',            // ✅ Requis
        annonceIdTechnique: 'TECH-001'   // ✅ Requis
    )
    ->withType(
        type: 1,                         // ✅ Requis
        sousType: null
    )
    ->withLocalisation(
        cp: '75001',                     // ✅ Requis
        ville: 'Paris',                  // ✅ Requis
        pays: 'France',                  // ✅ Requis
        adresse: null,                   // Optionnel
        // ... autres paramètres optionnels
    )
    ->withSurface(
        surface: 65,                     // ✅ Requis
        surfaceTerrain: null,
        nbPieces: 3,                     // ✅ Requis
        nbChambres: 2,                   // ✅ Requis (selon type)
        // ... autres paramètres
    )
    ->withPrix(
        prix: 450000,                    // ✅ Requis
        // ... autres paramètres optionnels
    )
    ->withDetail(
        activitesCommerciales: null,
        label: 'Mon annonce',            // ✅ Requis
        description: 'Description...',   // ✅ Requis
        // ... autres paramètres
    );
```

**Solution 3 : Activer les logs de debug**

```php
try {
    $export = $builder->build();
    $csvContent = $export->toCSV();
} catch (\Throwable $e) {
    // Logger l'erreur
    error_log('Erreur Poliris : ' . $e->getMessage());
    error_log('Trace : ' . $e->getTraceAsString());
    
    throw $e;
}
```

#### ❌ Erreur : "Memory exhausted"

**Symptôme** :  
`PHP Fatal error: Allowed memory size exhausted`

**Cause** :  
Trop d'annonces en mémoire (plusieurs milliers).

**Solution : Traiter par lots**

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

            // Générer un CSV toutes les 500 annonces
            if ($count % self::BATCH_SIZE === 0) {
                yield $builder->build()->toCSV();
                
                // Réinitialiser le builder
                $builder = new AnnonceExportBuilder();
                
                // Libérer la mémoire
                gc_collect_cycles();
            }
        }

        // Dernières annonces
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

**Utilisation** :

```php
// Dans un contrôleur ou une commande
$properties = $propertyRepository->findAllAsIterator();

foreach ($exportService->generateExportInBatches($properties) as $batch) {
    // Écrire chaque batch dans un fichier
    file_put_contents('/tmp/export-batch-' . time() . '.csv', $batch, FILE_APPEND);
}
```

---

## 📚 Référence des modèles

Le bundle fournit **31 modèles** pour représenter tous les aspects d'un bien immobilier.

### Vue d'ensemble des modèles

| Modèle | Description | Colonnes CSV |
|--------|-------------|--------------|
| **Identifiant** | ID agence, référence bien | 1-3, 175 |
| **Type** | Type de bien (appt, maison, etc.) | 4, 181 |
| **Photo** | URLs photos (30 max) + visite virtuelle | 5-10, 96-125 |
| **Localisation** | Adresse, CP, ville, GPS | 11-19, 158-165 |
| **Surface** | Surface, pièces, chambres | 20-29, 182-188 |
| **Prix** | Prix, loyer, charges | 30-34, 126-137 |
| **Detail** | Titre, description, disponibilité | 35-40, 194-196 |
| **Diagnostic** | DPE, GES, diagnostics | 41-50, 198-205 |
| **Contact** | Téléphone, email, négociateur | 51-57, 300-305 |
| **Exterieur** | Ascenseur, piscine, vue | 58-64 |
| **Interieur** | Meublé, année construction | 65-85 |
| **ChauffageClim** | Type chauffage, climatisation | 86-87 |
| **PartieJour** | Cuisine, séjour, équipements | 88-95 |
| **Etage** | Étage, nombre d'étages | 138-140 |
| **Securite** | Digicode, interphone, alarme | 141-144 |
| **Garage** | Garage, type | 145-146 |
| **Parking** | Nombre véhicules, type parking | 147-149 |
| **Bureau** | Infos bureaux professionnels | 150-167 |
| **Boutique** | Infos commerce | 168-169 |
| **Terrain** | Terrain constructible, agricole | 170-176 |
| **Location** | Durée bail, nature bail | 177-180, 206-209 |
| **Viager** | Bouquet, rente mensuelle | 210-214 |
| **Mandat** | Mandat exclusif, numéro | 215-225 |
| **HonoraireCharge** | Honoraires, charges | 226-235 |
| **Diagnostic** | Diagnostics immobiliers | 236-250 |
| **FondsCommerce** | CA, résultats (commerce) | 251-258 |
| **ProduitInvestissement** | Valeur achat, rapport | 259-260 |
| **LocationVacances** | Prix saison, disponibilités | 261-272 |
| **Langue** | Multilangue (3 langues max) | 273-284 |
| **Publication** | Portails de diffusion | 285-287 |
| **ChampCustom** | Champs personnalisés (26 max) | 288-313 |

### Modèles les plus utilisés

#### 1. Identifiant (colonnes 1-3, 175)

```php
->withIdentifiant(
    agenceId: 'AGENCE001',           // Col 1 : ID agence
    agencePropertyRef: 'REF-001',    // Col 2 : Référence bien
    annonceType: 'vente',            // Col 3 : vente/location
    annonceIdTechnique: 'TECH-001'   // Col 175 : ID technique
)
```

**Types d'annonce** :
- `Annonce::ANNONCE_TYPE_VENTE` = `'vente'`
- `Annonce::ANNONCE_TYPE_LOCATION` = `'location'`
- `Annonce::ANNONCE_TYPE_MODELE_MAISON` = `'modèle de maison'`

#### 2. Type (colonnes 4, 181)

```php
->withType(
    type: 1,        // Col 4 : Type principal
    sousType: null  // Col 181 : Sous-type
)
```

**Codes types** :
- `1` = Appartement
- `2` = Maison
- `3` = Parking/Box
- `4` = Terrain
- `5` = Boutique
- `6` = Bureau
- `7` = Bâtiment
- `8` = Château
- `9` = Immeuble
- `10` = Loft
- `11` = Local commercial
- `13` = Programme neuf

#### 3. Surface (colonnes 20-29, 182-188)

```php
->withSurface(
    surface: 65,              // Col 20 : Surface habitable (m²)
    surfaceTerrain: 200,      // Col 21 : Surface terrain (m²)
    nbPieces: 3,              // Col 22 : Nombre de pièces
    nbChambres: 2,            // Col 23 : Nombre de chambres
    nbSdb: 1,                 // Col 24 : Salles de bain
    nbSalleEau: 1,            // Col 25 : Salles d'eau
    nbWc: 1,                  // Col 26 : WC
    nbBalcons: 1,             // Col 27 : Nombre de balcons
    surfaceBalcon: 5,         // Col 28 : Surface balcon (m²)
    nbParkings: 1,            // Col 29 : Parkings
    // ... 18 autres paramètres
)
```

#### 4. Prix (colonnes 30-34, 126-137)

```php
->withPrix(
    prix: 450000,                    // Col 30 : Prix vente ou loyer
    loyerMoisMur: null,              // Col 31 : Loyer mur
    loyerCC: 500,                    // Col 32 : Loyer charges comprises
    loyerHT: null,                   // Col 33 : Loyer HT (pro)
    depotGarantie: 1000,             // Col 34 : Dépôt de garantie
    prixMasque: false,               // Col 126 : Masquer le prix
    prixHT: null,                    // Col 127 : Prix HT (pro)
    copropriete: true,               // Col 128 : En copropriété
    nbLots: 25,                      // Col 129 : Nombre de lots
    syndicatCopro: null,             // Col 130 : Syndic
    syndicatCoproDetails: 'Charges annuelles : 2400€',  // Col 131
    // ... autres paramètres
)
```

#### 5. Detail (colonnes 35-40, 194-196)

```php
->withDetail(
    activitesCommerciales: null,              // Col 35
    label: 'Appartement T3 lumineux',         // Col 36 : Titre
    description: 'Belle description...',      // Col 37 : Descriptif
    datesDispo: new \DateTimeImmutable(),     // Col 38 : Date dispo
    amenagementHandicapes: false,             // Col 39
    animauxAcceptes: true,                    // Col 40
    duplex: false,                            // Col 194
    commPrives: null,                         // Col 195
    logementADisposition: null,               // Col 196
    nomModele: null
)
```

---

## 🔧 Dépannage

### FAQ

**Q : Puis-je valider les données avant l'export ?**  
R : Non, le bundle ne propose pas de validation intégrée pour des raisons de performance. Validez vos données en amont avec le Validator de Symfony.

**Q : Comment gérer les champs multilangues ?**  
R : Utilisez le modèle `Langue` avec jusqu'à 3 langues :

```php
->withLangue(
    code1: 'FR',
    code2: 'EN',
    code3: 'DE',
    proximite1: 'Proche métro',
    proximite2: 'Near metro',
    proximite3: 'Nahe U-Bahn',
    label1: 'Appartement 3 pièces',
    label2: '3-room apartment',
    label3: '3-Zimmer-Wohnung',
    descriptif1: 'Belle description en français',
    descriptif2: 'Beautiful description in English',
    descriptif3: 'Schöne Beschreibung auf Deutsch'
)
```

**Q : Comment exporter uniquement certaines annonces ?**  
R : Filtrez vos données en amont dans votre repository :

```php
// Dans votre service
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

**Q : Le CSV est-il valide pour tous les portails ?**  
R : Le format Poliris V4.1.17 est supporté par la majorité des portails français (SeLoger, LeBonCoin, PAP, etc.). Vérifiez la documentation de chaque portail pour les spécificités.

**Q : Comment gérer les erreurs de génération ?**  
R : Utilisez un try-catch et loggez les erreurs :

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
                // Logger mais continuer
                $logger->error('Erreur annonce ' . $property->getId(), [
                    'exception' => $e->getMessage()
                ]);
            }
        }
        
        return $builder->build()->toCSV();
        
    } catch (\Throwable $e) {
        $logger->critical('Erreur génération CSV Poliris', [
            'exception' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        
        return null;
    }
}
```

---

### Checklist avant mise en production

- [ ] Les champs obligatoires sont remplis (Identifiant, Type, Localisation, Surface, Prix, Detail)
- [ ] Les photos sont accessibles via HTTPS
- [ ] L'encodage du CSV est UTF-8
- [ ] Les dates sont au format `DateTimeImmutable` ou `DateTime`
- [ ] Les booléens sont correctement convertis (`true` → `'OUI'`, `false` → `'NON'`)
- [ ] Le fichier CSV est testé sur un portail en environnement de test
- [ ] Les logs sont activés pour tracer les erreurs
- [ ] Un système de monitoring est en place (export quotidien réussi/échoué)
- [ ] La performance est acceptable (< 30s pour 1000 annonces)

---

### Ressources supplémentaires

- **Documentation officielle Poliris** : [https://www.poliris.com/documentation](https://www.poliris.com/documentation)
- **Repository GitHub** : [https://github.com/SpiriitLabs/poliris-bundle](https://github.com/SpiriitLabs/poliris-bundle)
- **Packagist** : [https://packagist.org/packages/spiriitlabs/poliris-bundle](https://packagist.org/packages/spiriitlabs/poliris-bundle)

---

## 📝 Schéma d'architecture

```
┌─────────────────────────────────────────────────────────────┐
│                     Votre Application                        │
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
│                    Utilise 31 modèles                        │
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
                   │  Fichier CSV   │
                   │  (333 colonnes) │
                   └────────┬───────┘
                            │
           ┌────────────────┼────────────────┐
           ▼                ▼                ▼
      SeLoger         LeBonCoin           PAP
```

---

## 📊 Tableau récapitulatif des cas d'usage

| Cas d'usage | Difficulté | Temps estimé | Modèles requis |
|-------------|------------|--------------|----------------|
| Export basique | ⭐ Facile | 15 min | 5-7 modèles |
| Export avec photos | ⭐⭐ Moyen | 30 min | 8-10 modèles |
| Export SeLoger complet | ⭐⭐⭐ Avancé | 1-2h | 15-20 modèles |
| Automatisation cron | ⭐⭐ Moyen | 45 min | Dépend du cas |
| Export asynchrone | ⭐⭐⭐ Avancé | 2-3h | Dépend du cas |
| Multi-portails | ⭐⭐⭐ Avancé | 3-4h | 20-25 modèles |

---

**Voilà ! Vous êtes maintenant prêt à utiliser PolirisBundle comme un pro ! 🚀**

Si vous avez des questions, n'hésitez pas à ouvrir une issue sur GitHub ou à consulter les exemples dans le dossier `tests/`.

Bon export ! 🏠✨
