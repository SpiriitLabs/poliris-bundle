<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Models;

use PHPUnit\Framework\TestCase;
use Spiriit\PolirisBundle\Models\Annonce\Annonce;
use Spiriit\PolirisBundle\Models\Annonce\Boutique;
use Spiriit\PolirisBundle\Models\Annonce\Bureau;
use Spiriit\PolirisBundle\Models\Annonce\ChampCustom;
use Spiriit\PolirisBundle\Models\Annonce\ChauffageClim;
use Spiriit\PolirisBundle\Models\Annonce\Contact;
use Spiriit\PolirisBundle\Models\Annonce\Detail;
use Spiriit\PolirisBundle\Models\Annonce\Diagnostic;
use Spiriit\PolirisBundle\Models\Annonce\Etage;
use Spiriit\PolirisBundle\Models\Annonce\Exterieur;
use Spiriit\PolirisBundle\Models\Annonce\FondsCommerce;
use Spiriit\PolirisBundle\Models\Annonce\Garage;
use Spiriit\PolirisBundle\Models\Annonce\HonoraireCharge;
use Spiriit\PolirisBundle\Models\Annonce\Identifiant;
use Spiriit\PolirisBundle\Models\Annonce\Interieur;
use Spiriit\PolirisBundle\Models\Annonce\Langue;
use Spiriit\PolirisBundle\Models\Annonce\Localisation;
use Spiriit\PolirisBundle\Models\Annonce\Location;
use Spiriit\PolirisBundle\Models\Annonce\LocationVacances;
use Spiriit\PolirisBundle\Models\Annonce\Mandat;
use Spiriit\PolirisBundle\Models\Annonce\Parking;
use Spiriit\PolirisBundle\Models\Annonce\PartieJour;
use Spiriit\PolirisBundle\Models\Annonce\Photo;
use Spiriit\PolirisBundle\Models\Annonce\Prix;
use Spiriit\PolirisBundle\Models\Annonce\ProduitInvestissement;
use Spiriit\PolirisBundle\Models\Annonce\Publication;
use Spiriit\PolirisBundle\Models\Annonce\Securite;
use Spiriit\PolirisBundle\Models\Annonce\Surface;
use Spiriit\PolirisBundle\Models\Annonce\Terrain;
use Spiriit\PolirisBundle\Models\Annonce\Type;
use Spiriit\PolirisBundle\Models\Annonce\Viager;
use Spiriit\PolirisBundle\Models\AnnonceExport;

class AnnonceExportTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_annonce_export()
    {
        $annonceExport = new AnnonceExport();
        $annonce = new Annonce();

        $identifiant = new Identifiant(null, 'ref', 'type', 'id_tech');
        $annonce->setIdentifiant($identifiant);

        $type = new Type('type', 'sous_type');
        $annonce->setType($type);

        $photo = new Photo(
            'https://url.photo_1',
            'https://url.photo_2',
            'https://url.photo_3',
            'https://url.photo_4',
            'https://url.photo_5',
            'https://url.photo_6',
            'https://url.photo_7',
            'https://url.photo_8',
            'https://url.photo_9',
            'https://url.photo_10',
            'https://url.photo_11',
            'https://url.photo_12',
            'https://url.photo_13',
            'https://url.photo_14',
            'https://url.photo_15',
            'https://url.photo_16',
            'https://url.photo_17',
            'https://url.photo_18',
            'https://url.photo_19',
            'https://url.photo_20',
            'https://url.photo_21',
            'https://url.photo_22',
            'https://url.photo_23',
            'https://url.photo_24',
            'https://url.photo_25',
            'https://url.photo_26',
            'https://url.photo_27',
            'https://url.photo_28',
            'https://url.photo_29',
            'https://url.photo_30',
            'titre 1',
            'titre 2',
            'titre 3',
            'titre 4',
            'titre 5',
            'titre 6',
            'titre 7',
            'titre 8',
            'titre 9',
            'titre 10',
            'titre 11',
            'titre 12',
            'titre 13',
            'titre 14',
            'titre 15',
            'titre 16',
            'titre 17',
            'titre 18',
            'titre 19',
            'titre 20',
            'titre 21',
            'titre 22',
            'titre 23',
            'titre 24',
            'titre 25',
            'titre 26',
            'titre 27',
            'titre 28',
            'titre 29',
            'titre 30',
            'panorama',
            'visite'
        );
        $annonce->setPhoto($photo);

        $champCustom = new ChampCustom(
            'champ 1',
            'champ 2',
            'champ 3',
            'champ 4',
            'champ 5',
            'champ 6',
            'champ 7',
            'champ 8',
            'champ 9',
            'champ 10',
            'champ 11',
            'champ 12',
            'champ 13',
            'champ 14',
            'champ 15',
            'champ 16',
            'champ 17',
            'champ 18',
            'champ 19',
            'champ 20',
            'champ 21',
            'champ 22',
            'champ 23',
            'champ 24',
            'champ 25',
            'champ 26',
        );
        $annonce->setChampCustom($champCustom);

        $langue = new Langue(
            'code',
            'code',
            'code',
            'prox',
            'prox',
            'prox',
            'label',
            'label',
            'label',
            'desc',
            'desc',
            'desc',
        );
        $annonce->setLangue($langue);

        $mandat = new Mandat(
            true,
            '01',
            new \DateTimeImmutable(),
            'nom',
            'prenom',
            'raison',
            'adresse',
            '34000',
            'Montpellier',
            '0123456789',
            'commentaire'
        );
        $annonce->setMandat($mandat);

        $locationVacances = new LocationVacances(
            'periodes dispo',
            'periodes bs',
            'prix semaine bs',
            'prix quinzaine bs',
            'prix mois bs',
            'periodes hs',
            'prix semaine hs',
            'prix quinzaine hs',
            'prix mois hs',
            1,
            true,
            'type'
        );
        $annonce->setLocationVacances($locationVacances);

        $viager = new Viager(
            2000,
            500,
            50,
            52,
            true,
        );
        $annonce->setViager($viager);

        $terrain = new Terrain(
            true,
            true,
            true,
            true,
            100,
            true,
            true
        );

        $annonce->setTerrain($terrain);

        $bureau = new Bureau(
            0,
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            true,
            11,
            12,
            'conditions',
            'prestations',
            true,
            13
        );
        $annonce->setBureau($bureau);

        $diagnostic = new Diagnostic(
            true,
            false,
            1,
            'D',
            3,
            'E',
            new \DateTimeImmutable(),
            '1',
            0,
            10,
            '2021',
            null
        );
        $annonce->setDiagnostic($diagnostic);

        $parking = new Parking(1, true, false);
        $annonce->setParking($parking);

        $boutique = new Boutique(true, 'situation');
        $annonce->setBoutique($boutique);

        $prix = new Prix(
            1,
            2,
            3,
            4,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15,
            16
        );
        $annonce->setPrix($prix);

        $location = new Location(
            1,
            2,
            3,
            'location meublée',
            4,
            10,
            15,
            20
        );
        $annonce->setLocation($location);

        $produitInvestissement = new ProduitInvestissement(
            1,
            2,
        );
        $annonce->setProduitInvestissement($produitInvestissement);

        $fondsCommerce = new FondsCommerce(
            1,
            '70 % bar / 30 % restaurant',
            'Tous commerces sauf restauration',
            2,
            3,
            4,
            5,
            6,
        );
        $annonce->setFondsCommerce($fondsCommerce);

        $honoraireCharge = new HonoraireCharge(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10
        );
        $annonce->setHonoraireCharge($honoraireCharge);

        $localisation = new Localisation(
            '34000',
            'MTP',
            'France',
            '425 Rue Alfred Nobel',
            'Commerces',
            'ville',
            false,
            false,
            false,
            '34000',
            'MONTPELLIER',
            null,
            '8',
            'Opera',
            22.1,
            23.4,
            1,
            '75,92,93,94,95'
        );
        $annonce->setLocalisation($localisation);

        $surface = new Surface(
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            26,
            10,
            true,
            11,
            12,
            13,
            14,
            15,
            16,
            17,
            18,
            19,
            20,
            21,
            22,
            23,
            false,
            24,
            25
        );
        $annonce->setSurface($surface);

        $contact = new Contact(
            '0123456789',
            'René Marc',
            'marcr@test.com',
            true,
            false,
            'MARTIN',
            'Agence'
        );
        $annonce->setContact($contact);

        $etage = new Etage(
            0,
            1,
            3
        );
        $annonce->setEtage($etage);

        $interieur = new Interieur(
            true,
            '1985',
            true,
            false,
            true,
            false,
            false,
            false,
            true,
            1,
            2,
            3,
            false,
            true,
            false,
            true,
            false,
            false,
            false,
            true,
            true
        );
        $annonce->setInterieur($interieur);

        $partieJour = new PartieJour(
            'type',
            false,
            true,
            false,
            true,
            false,
            true,
            false,
            true
        );
        $annonce->setPartieJour($partieJour);

        $exterieur = new Exterieur(
            true,
            false,
            true,
            false,
            true,
            false,
            true
        );
        $annonce->setExterieur($exterieur);

        $garage = new Garage(
            true,
            1
        );
        $annonce->setGarage($garage);

        $securite = new Securite(
            true,
            false,
            true,
            false
        );
        $annonce->setSecurite($securite);

        $chauffageClim = new ChauffageClim(1, true);
        $annonce->setChauffageClim($chauffageClim);

        $detail = new Detail(
            'BAR, CINEMA',
            'Maison 3 pièces',
            'Très belle maison',
            new \DateTimeImmutable(),
            true,
            false,
            true,
            'Clefs à prendre chez le gardien',
            false,
            'Tradition'
        );
        $annonce->setDetail($detail);

        $publication = new Publication(
            'SL,BD,WA',
            true,
            '4.11'
        );
        $annonce->setPublication($publication);

        $annonceExport->addLine($annonce);

        self::assertCount(1, $annonceExport->getAnnonces());

        $expectedArray = [
            [
                $identifiant->getAgenceId()->getPos() => $identifiant->getAgenceId()->getTransformedVal(),
                $identifiant->getAnnonceType()->getPos() => $identifiant->getAnnonceType()->getTransformedVal(),
                $identifiant->getAnnonceIdTechnique()->getPos() => $identifiant->getAnnonceIdTechnique(
                )->getTransformedVal(),
                $identifiant->getAgencePropertyRef()->getPos() => $identifiant->getAgencePropertyRef(
                )->getTransformedVal(),
                $type->getType()->getPos() => $type->getType()->getTransformedVal(),
                $type->getSousType()->getPos() => $type->getSousType()->getTransformedVal(),
                $photo->getPhoto1()->getPos() => $photo->getPhoto1()->getTransformedVal(),
                $photo->getPhoto2()->getPos() => $photo->getPhoto2()->getTransformedVal(),
                $photo->getPhoto3()->getPos() => $photo->getPhoto3()->getTransformedVal(),
                $photo->getPhoto4()->getPos() => $photo->getPhoto4()->getTransformedVal(),
                $photo->getPhoto5()->getPos() => $photo->getPhoto5()->getTransformedVal(),
                $photo->getPhoto6()->getPos() => $photo->getPhoto6()->getTransformedVal(),
                $photo->getPhoto7()->getPos() => $photo->getPhoto7()->getTransformedVal(),
                $photo->getPhoto8()->getPos() => $photo->getPhoto8()->getTransformedVal(),
                $photo->getPhoto9()->getPos() => $photo->getPhoto9()->getTransformedVal(),
                $photo->getPhoto10()->getPos() => $photo->getPhoto10()->getTransformedVal(),
                $photo->getPhoto11()->getPos() => $photo->getPhoto11()->getTransformedVal(),
                $photo->getPhoto12()->getPos() => $photo->getPhoto12()->getTransformedVal(),
                $photo->getPhoto13()->getPos() => $photo->getPhoto13()->getTransformedVal(),
                $photo->getPhoto14()->getPos() => $photo->getPhoto14()->getTransformedVal(),
                $photo->getPhoto15()->getPos() => $photo->getPhoto15()->getTransformedVal(),
                $photo->getPhoto16()->getPos() => $photo->getPhoto16()->getTransformedVal(),
                $photo->getPhoto17()->getPos() => $photo->getPhoto17()->getTransformedVal(),
                $photo->getPhoto18()->getPos() => $photo->getPhoto18()->getTransformedVal(),
                $photo->getPhoto19()->getPos() => $photo->getPhoto19()->getTransformedVal(),
                $photo->getPhoto20()->getPos() => $photo->getPhoto20()->getTransformedVal(),
                $photo->getPhoto21()->getPos() => $photo->getPhoto21()->getTransformedVal(),
                $photo->getPhoto22()->getPos() => $photo->getPhoto22()->getTransformedVal(),
                $photo->getPhoto23()->getPos() => $photo->getPhoto23()->getTransformedVal(),
                $photo->getPhoto24()->getPos() => $photo->getPhoto24()->getTransformedVal(),
                $photo->getPhoto25()->getPos() => $photo->getPhoto25()->getTransformedVal(),
                $photo->getPhoto26()->getPos() => $photo->getPhoto26()->getTransformedVal(),
                $photo->getPhoto27()->getPos() => $photo->getPhoto27()->getTransformedVal(),
                $photo->getPhoto28()->getPos() => $photo->getPhoto28()->getTransformedVal(),
                $photo->getPhoto29()->getPos() => $photo->getPhoto29()->getTransformedVal(),
                $photo->getPhoto30()->getPos() => $photo->getPhoto30()->getTransformedVal(),
                $photo->getTitre1()->getPos() => $photo->getTitre1()->getTransformedVal(),
                $photo->getTitre2()->getPos() => $photo->getTitre2()->getTransformedVal(),
                $photo->getTitre3()->getPos() => $photo->getTitre3()->getTransformedVal(),
                $photo->getTitre4()->getPos() => $photo->getTitre4()->getTransformedVal(),
                $photo->getTitre5()->getPos() => $photo->getTitre5()->getTransformedVal(),
                $photo->getTitre6()->getPos() => $photo->getTitre6()->getTransformedVal(),
                $photo->getTitre7()->getPos() => $photo->getTitre7()->getTransformedVal(),
                $photo->getTitre8()->getPos() => $photo->getTitre8()->getTransformedVal(),
                $photo->getTitre9()->getPos() => $photo->getTitre9()->getTransformedVal(),
                $photo->getTitre10()->getPos() => $photo->getTitre10()->getTransformedVal(),
                $photo->getTitre11()->getPos() => $photo->getTitre11()->getTransformedVal(),
                $photo->getTitre12()->getPos() => $photo->getTitre12()->getTransformedVal(),
                $photo->getTitre13()->getPos() => $photo->getTitre13()->getTransformedVal(),
                $photo->getTitre14()->getPos() => $photo->getTitre14()->getTransformedVal(),
                $photo->getTitre15()->getPos() => $photo->getTitre15()->getTransformedVal(),
                $photo->getTitre16()->getPos() => $photo->getTitre16()->getTransformedVal(),
                $photo->getTitre17()->getPos() => $photo->getTitre17()->getTransformedVal(),
                $photo->getTitre18()->getPos() => $photo->getTitre18()->getTransformedVal(),
                $photo->getTitre19()->getPos() => $photo->getTitre19()->getTransformedVal(),
                $photo->getTitre20()->getPos() => $photo->getTitre20()->getTransformedVal(),
                $photo->getTitre21()->getPos() => $photo->getTitre21()->getTransformedVal(),
                $photo->getTitre22()->getPos() => $photo->getTitre22()->getTransformedVal(),
                $photo->getTitre23()->getPos() => $photo->getTitre23()->getTransformedVal(),
                $photo->getTitre24()->getPos() => $photo->getTitre24()->getTransformedVal(),
                $photo->getTitre25()->getPos() => $photo->getTitre25()->getTransformedVal(),
                $photo->getTitre26()->getPos() => $photo->getTitre26()->getTransformedVal(),
                $photo->getTitre27()->getPos() => $photo->getTitre27()->getTransformedVal(),
                $photo->getTitre28()->getPos() => $photo->getTitre28()->getTransformedVal(),
                $photo->getTitre29()->getPos() => $photo->getTitre29()->getTransformedVal(),
                $photo->getTitre30()->getPos() => $photo->getTitre30()->getTransformedVal(),
                $photo->getPhotoPanoramique()->getPos() => $photo->getPhotoPanoramique()->getTransformedVal(),
                $photo->getUrlVisiteVirtuelle()->getPos() => $photo->getUrlVisiteVirtuelle()->getTransformedVal(),
                $champCustom->getChamp1()->getPos() => $champCustom->getChamp1()->getTransformedVal(),
                $champCustom->getChamp2()->getPos() => $champCustom->getChamp2()->getTransformedVal(),
                $champCustom->getChamp3()->getPos() => $champCustom->getChamp3()->getTransformedVal(),
                $champCustom->getChamp4()->getPos() => $champCustom->getChamp4()->getTransformedVal(),
                $champCustom->getChamp5()->getPos() => $champCustom->getChamp5()->getTransformedVal(),
                $champCustom->getChamp6()->getPos() => $champCustom->getChamp6()->getTransformedVal(),
                $champCustom->getChamp7()->getPos() => $champCustom->getChamp7()->getTransformedVal(),
                $champCustom->getChamp8()->getPos() => $champCustom->getChamp8()->getTransformedVal(),
                $champCustom->getChamp9()->getPos() => $champCustom->getChamp9()->getTransformedVal(),
                $champCustom->getChamp10()->getPos() => $champCustom->getChamp10()->getTransformedVal(),
                $champCustom->getChamp11()->getPos() => $champCustom->getChamp11()->getTransformedVal(),
                $champCustom->getChamp12()->getPos() => $champCustom->getChamp12()->getTransformedVal(),
                $champCustom->getChamp13()->getPos() => $champCustom->getChamp13()->getTransformedVal(),
                $champCustom->getChamp14()->getPos() => $champCustom->getChamp14()->getTransformedVal(),
                $champCustom->getChamp15()->getPos() => $champCustom->getChamp15()->getTransformedVal(),
                $champCustom->getChamp16()->getPos() => $champCustom->getChamp16()->getTransformedVal(),
                $champCustom->getChamp17()->getPos() => $champCustom->getChamp17()->getTransformedVal(),
                $champCustom->getChamp18()->getPos() => $champCustom->getChamp18()->getTransformedVal(),
                $champCustom->getChamp19()->getPos() => $champCustom->getChamp19()->getTransformedVal(),
                $champCustom->getChamp20()->getPos() => $champCustom->getChamp20()->getTransformedVal(),
                $champCustom->getChamp21()->getPos() => $champCustom->getChamp21()->getTransformedVal(),
                $champCustom->getChamp22()->getPos() => $champCustom->getChamp22()->getTransformedVal(),
                $champCustom->getChamp23()->getPos() => $champCustom->getChamp23()->getTransformedVal(),
                $champCustom->getChamp24()->getPos() => $champCustom->getChamp24()->getTransformedVal(),
                $champCustom->getChamp25()->getPos() => $champCustom->getChamp25()->getTransformedVal(),
                $champCustom->getChamp26()->getPos() => $champCustom->getChamp26()->getTransformedVal(),
                $langue->getCode1()->getPos() => $langue->getCode1()->getTransformedVal(),
                $langue->getCode2()->getPos() => $langue->getCode2()->getTransformedVal(),
                $langue->getCode3()->getPos() => $langue->getCode3()->getTransformedVal(),
                $langue->getProximite1()->getPos() => $langue->getProximite1()->getTransformedVal(),
                $langue->getProximite2()->getPos() => $langue->getProximite2()->getTransformedVal(),
                $langue->getProximite3()->getPos() => $langue->getProximite3()->getTransformedVal(),
                $langue->getLabel1()->getPos() => $langue->getLabel1()->getTransformedVal(),
                $langue->getLabel2()->getPos() => $langue->getLabel2()->getTransformedVal(),
                $langue->getLabel3()->getPos() => $langue->getLabel3()->getTransformedVal(),
                $langue->getDescriptif1()->getPos() => $langue->getDescriptif1()->getTransformedVal(),
                $langue->getDescriptif2()->getPos() => $langue->getDescriptif2()->getTransformedVal(),
                $langue->getDescriptif3()->getPos() => $langue->getDescriptif3()->getTransformedVal(),
                $mandat->getExclusif()->getPos() => $mandat->getExclusif()->getTransformedVal(),
                $mandat->getNumero()->getPos() => $mandat->getNumero()->getTransformedVal(),
                $mandat->getDate()->getPos() => $mandat->getDate()->getTransformedVal(),
                $mandat->getNomMandataire()->getPos() => $mandat->getNomMandataire()->getTransformedVal(),
                $mandat->getPrenomMandataire()->getPos() => $mandat->getPrenomMandataire()->getTransformedVal(),
                $mandat->getRaisonSocialeMandataire()->getPos() => $mandat->getRaisonSocialeMandataire(
                )->getTransformedVal(),
                $mandat->getAdresseMandataire()->getPos() => $mandat->getAdresseMandataire()->getTransformedVal(),
                $mandat->getCodePostalMandataire()->getPos() => $mandat->getCodePostalMandataire()->getTransformedVal(),
                $mandat->getVilleMandataire()->getPos() => $mandat->getVilleMandataire()->getTransformedVal(),
                $mandat->getTelMandataire()->getPos() => $mandat->getTelMandataire()->getTransformedVal(),
                $mandat->getCommMandataire()->getPos() => $mandat->getCommMandataire()->getTransformedVal(),
                $locationVacances->getPeriodesDispo()->getPos() => $locationVacances->getPeriodesDispo(
                )->getTransformedVal(),
                $locationVacances->getPeriodesBasseSaison()->getPos() => $locationVacances->getPeriodesBasseSaison(
                )->getTransformedVal(),
                $locationVacances->getPrixSemaineBasseSaison()->getPos(
                ) => $locationVacances->getPrixSemaineBasseSaison()->getTransformedVal(),
                $locationVacances->getPrixQuinzaineBasseSaison()->getPos(
                ) => $locationVacances->getPrixQuinzaineBasseSaison()->getTransformedVal(),
                $locationVacances->getPrixMoisBasseSaison()->getPos() => $locationVacances->getPrixMoisBasseSaison(
                )->getTransformedVal(),
                $locationVacances->getPeriodesHauteSaison()->getPos() => $locationVacances->getPeriodesHauteSaison(
                )->getTransformedVal(),
                $locationVacances->getPrixSemaineHauteSaison()->getPos(
                ) => $locationVacances->getPrixSemaineHauteSaison()->getTransformedVal(),
                $locationVacances->getPrixQuinzaineHauteSaison()->getPos(
                ) => $locationVacances->getPrixQuinzaineHauteSaison()->getTransformedVal(),
                $locationVacances->getPrixMoisHauteSaison()->getPos() => $locationVacances->getPrixMoisHauteSaison(
                )->getTransformedVal(),
                $locationVacances->getNbPersonnes()->getPos() => $locationVacances->getNbPersonnes()->getTransformedVal(
                ),
                $locationVacances->getResidence()->getPos() => $locationVacances->getResidence()->getTransformedVal(),
                $locationVacances->getTypeResidence()->getPos() => $locationVacances->getTypeResidence(
                )->getTransformedVal(),
                $viager->getPrixBouquet()->getPos() => $viager->getPrixBouquet()->getTransformedVal(),
                $viager->getRenteMensuelle()->getPos() => $viager->getRenteMensuelle()->getTransformedVal(),
                $viager->getAgeHomme()->getPos() => $viager->getAgeHomme()->getTransformedVal(),
                $viager->getAgeFemme()->getPos() => $viager->getAgeFemme()->getTransformedVal(),
                $viager->getVenduLibre()->getPos() => $viager->getVenduLibre()->getTransformedVal(),
                $terrain->getAgricole()->getPos() => $terrain->getAgricole()->getTransformedVal(),
                $terrain->getConstructible()->getPos() => $terrain->getConstructible()->getTransformedVal(),
                $terrain->getPente()->getPos() => $terrain->getPente()->getTransformedVal(),
                $terrain->getPlanEau()->getPos() => $terrain->getPlanEau()->getTransformedVal(),
                $terrain->getViabilise()->getPos() => $terrain->getViabilise()->getTransformedVal(),
                $terrain->getDonneSurLaRue()->getPos() => $terrain->getDonneSurLaRue()->getTransformedVal(),
                $terrain->getLongueurFacade()->getPos() => $terrain->getLongueurFacade()->getTransformedVal(),
                $bureau->getLoyerAnnuelGlobal()->getPos() => $bureau->getLoyerAnnuelGlobal()->getTransformedVal(),
                $bureau->getLoyerAnnuelM2()->getPos() => $bureau->getLoyerAnnuelM2()->getTransformedVal(),
                $bureau->getLoyerAnnuelCC()->getPos() => $bureau->getLoyerAnnuelCC()->getTransformedVal(),
                $bureau->getLoyerAnnuelM2CC()->getPos() => $bureau->getLoyerAnnuelM2CC()->getTransformedVal(),
                $bureau->getLoyerAnnuelHT()->getPos() => $bureau->getLoyerAnnuelHT()->getTransformedVal(),
                $bureau->getLoyerAnnuelM2HT()->getPos() => $bureau->getLoyerAnnuelM2HT()->getTransformedVal(),
                $bureau->getChargesAnnuellesGlobales()->getPos() => $bureau->getChargesAnnuellesGlobales(
                )->getTransformedVal(),
                $bureau->getChargesAnnuellesM2()->getPos() => $bureau->getChargesAnnuellesM2()->getTransformedVal(),
                $bureau->getChargesMensuellesHT()->getPos() => $bureau->getChargesMensuellesHT()->getTransformedVal(),
                $bureau->getChargesAnnuellesM2HT()->getPos() => $bureau->getChargesAnnuellesM2HT()->getTransformedVal(),
                $bureau->getChargesAnnuellesHT()->getPos() => $bureau->getChargesAnnuellesHT()->getTransformedVal(),
                $bureau->getDivisible()->getPos() => $bureau->getDivisible()->getTransformedVal(),
                $bureau->getSurfaceDivisibleMin()->getPos() => $bureau->getSurfaceDivisibleMin()->getTransformedVal(),
                $bureau->getSurfaceDivisibleMax()->getPos() => $bureau->getSurfaceDivisibleMax()->getTransformedVal(),
                $bureau->getConditionsFinancieres()->getPos() => $bureau->getConditionsFinancieres()->getTransformedVal(
                ),
                $bureau->getPrestationsDiverses()->getPos() => $bureau->getPrestationsDiverses()->getTransformedVal(),
                $bureau->getImmeubleBureaux()->getPos() => $bureau->getImmeubleBureaux()->getTransformedVal(),
                $bureau->getSurfaceMaxBureau()->getPos() => $bureau->getSurfaceMaxBureau()->getTransformedVal(),
                $diagnostic->getRecent()->getPos() => $diagnostic->getRecent()->getTransformedVal(),
                $diagnostic->getTravaux()->getPos() => $diagnostic->getTravaux()->getTransformedVal(),
                $diagnostic->getConsoEnergie()->getPos() => $diagnostic->getConsoEnergie()->getTransformedVal(),
                $diagnostic->getBilanConsoEnergie()->getPos() => $diagnostic->getBilanConsoEnergie()->getTransformedVal(
                ),
                $diagnostic->getGes()->getPos() => $diagnostic->getGes()->getTransformedVal(),
                $diagnostic->getBilanGes()->getPos() => $diagnostic->getBilanGes()->getTransformedVal(),
                $diagnostic->getDpeAt()->getPos() => $diagnostic->getDpeAt()->getTransformedVal(),
                $diagnostic->getDpeVersion()->getPos() => $diagnostic->getDpeVersion()->getTransformedVal(),
                $diagnostic->getDpeMin()->getPos() => $diagnostic->getDpeMin()->getTransformedVal(),
                $diagnostic->getDpeMax()->getPos() => $diagnostic->getDpeMax()->getTransformedVal(),
                $diagnostic->getDpeAnneeRef()->getPos() => $diagnostic->getDpeAnneeRef()->getTransformedVal(),
                $diagnostic->getDpeCoutConsoAnnuelle()->getPos() => $diagnostic->getDpeCoutConsoAnnuelle(
                )->getTransformedVal(),
                $parking->getNbVehicules()->getPos() => $parking->getNbVehicules()->getTransformedVal(),
                $parking->getImmeuble()->getPos() => $parking->getImmeuble()->getTransformedVal(),
                $parking->getIsole()->getPos() => $parking->getIsole()->getTransformedVal(),
                $boutique->getQuai()->getPos() => $boutique->getQuai()->getTransformedVal(),
                $boutique->getSituationCommerciale()->getPos() => $boutique->getSituationCommerciale(
                )->getTransformedVal(),
                $prix->getPrix()->getPos() => $prix->getPrix()->getTransformedVal(),
                $prix->getLoyerMoisMur()->getPos() => $prix->getLoyerMoisMur()->getTransformedVal(),
                $prix->getLoyerCC()->getPos() => $prix->getLoyerCC()->getTransformedVal(),
                $prix->getLoyerHT()->getPos() => $prix->getLoyerHT()->getTransformedVal(),
                $prix->getDepotGarantie()->getPos() => $prix->getDepotGarantie()->getTransformedVal(),
                $prix->getPrixMasque()->getPos() => $prix->getPrixMasque()->getTransformedVal(),
                $prix->getPrixHT()->getPos() => $prix->getPrixHT()->getTransformedVal(),
                $prix->getCopropriete()->getPos() => $prix->getCopropriete()->getTransformedVal(),
                $prix->getNbLots()->getPos() => $prix->getNbLots()->getTransformedVal(),
                $prix->getSyndicatCopro()->getPos() => $prix->getSyndicatCopro()->getTransformedVal(),
                $prix->getSyndicatCoproDetails()->getPos() => $prix->getSyndicatCoproDetails()->getTransformedVal(),
                $prix->getPrixTerrain()->getPos() => $prix->getPrixTerrain()->getTransformedVal(),
                $prix->getPrixModeleMaison()->getPos() => $prix->getPrixModeleMaison()->getTransformedVal(),
                $prix->getPrixMin()->getPos() => $prix->getPrixMin()->getTransformedVal(),
                $prix->getPrixMax()->getPos() => $prix->getPrixMax()->getTransformedVal(),
                $location->getDureeBail()->getPos() => $location->getDureeBail()->getTransformedVal(),
                $location->getPrixDroitEntree()->getPos() => $location->getPrixDroitEntree()->getTransformedVal(),
                $location->getPrixDroitBail()->getPos() => $location->getPrixDroitBail()->getTransformedVal(),
                $location->getNatureBail()->getPos() => $location->getNatureBail()->getTransformedVal(),
                $location->getComplementLoyer()->getPos() => $location->getComplementLoyer()->getTransformedVal(),
                $location->getLoyerBase()->getPos() => $location->getLoyerBase()->getTransformedVal(),
                $location->getLoyerReferenceMajore()->getPos() => $location->getLoyerReferenceMajore(
                )->getTransformedVal(),
                $location->getEncadrementLoyers()->getPos() => $location->getEncadrementLoyers()->getTransformedVal(),
                $produitInvestissement->getValeurAchat()->getPos() => $produitInvestissement->getValeurAchat(
                )->getTransformedVal(),
                $produitInvestissement->getMontantRapport()->getPos() => $produitInvestissement->getMontantRapport(
                )->getTransformedVal(),
                $fondsCommerce->getCa()->getPos() => $fondsCommerce->getCa()->getTransformedVal(),
                $fondsCommerce->getRepartitionCa()->getPos() => $fondsCommerce->getRepartitionCa()->getTransformedVal(),
                $fondsCommerce->getNatureBailCommercial()->getPos() => $fondsCommerce->getNatureBailCommercial(
                )->getTransformedVal(),
                $fondsCommerce->getResultatAnneeN2()->getPos() => $fondsCommerce->getResultatAnneeN2(
                )->getTransformedVal(),
                $fondsCommerce->getResultatAnneeN1()->getPos() => $fondsCommerce->getResultatAnneeN1(
                )->getTransformedVal(),
                $fondsCommerce->getResultatActuel()->getPos() => $fondsCommerce->getResultatActuel()->getTransformedVal(
                ),
                $fondsCommerce->getCaAnneeN2()->getPos() => $fondsCommerce->getCaAnneeN2()->getTransformedVal(),
                $fondsCommerce->getCaAnneeN1()->getPos() => $fondsCommerce->getCaAnneeN1()->getTransformedVal(),
                $honoraireCharge->getHonoraires()->getPos() => $honoraireCharge->getHonoraires()->getTransformedVal(),
                $honoraireCharge->getHonorairesCharge()->getPos() => $honoraireCharge->getHonorairesCharge(
                )->getTransformedVal(),
                $honoraireCharge->getCharges()->getPos() => $honoraireCharge->getCharges()->getTransformedVal(),
                $honoraireCharge->getUrlBaremeHonorairesAgence()->getPos(
                ) => $honoraireCharge->getUrlBaremeHonorairesAgence()->getTransformedVal(),
                $honoraireCharge->getPartHonorairesEtatLieux()->getPos(
                ) => $honoraireCharge->getPartHonorairesEtatLieux()->getTransformedVal(),
                $honoraireCharge->getPrixHorsHonorairesAcquereur()->getPos(
                ) => $honoraireCharge->getPrixHorsHonorairesAcquereur()->getTransformedVal(),
                $honoraireCharge->getHonorairesChargeAcquereur()->getPos(
                ) => $honoraireCharge->getHonorairesChargeAcquereur()->getTransformedVal(),
                $honoraireCharge->getPourcentageHonorairesTTC()->getPos(
                ) => $honoraireCharge->getPourcentageHonorairesTTC()->getTransformedVal(),
                $honoraireCharge->getModalitesChargesLocataire()->getPos(
                ) => $honoraireCharge->getModalitesChargesLocataire()->getTransformedVal(),
                $honoraireCharge->getChargesAnnuelles()->getPos() => $honoraireCharge->getChargesAnnuelles(
                )->getTransformedVal(),
                $localisation->getCp()->getPos() => $localisation->getCp()->getTransformedVal(),
                $localisation->getVille()->getPos() => $localisation->getVille()->getTransformedVal(),
                $localisation->getPays()->getPos() => $localisation->getPays()->getTransformedVal(),
                $localisation->getAdresse()->getPos() => $localisation->getAdresse()->getTransformedVal(),
                $localisation->getQuartierProximite()->getPos() => $localisation->getQuartierProximite(
                )->getTransformedVal(),
                $localisation->getSituation()->getPos() => $localisation->getSituation()->getTransformedVal(),
                $localisation->getProcheLac()->getPos() => $localisation->getProcheLac()->getTransformedVal(),
                $localisation->getProcheTennis()->getPos() => $localisation->getProcheTennis()->getTransformedVal(),
                $localisation->getProcheSki()->getPos() => $localisation->getProcheSki()->getTransformedVal(),
                $localisation->getCpReel()->getPos() => $localisation->getCpReel()->getTransformedVal(),
                $localisation->getVilleReelle()->getPos() => $localisation->getVilleReelle()->getTransformedVal(),
                $localisation->getIdQuartier()->getPos() => $localisation->getIdQuartier()->getTransformedVal(),
                $localisation->getTransportLigne()->getPos() => $localisation->getTransportLigne()->getTransformedVal(),
                $localisation->getTransportStation()->getPos() => $localisation->getTransportStation(
                )->getTransformedVal(),
                $localisation->getLatitude()->getPos() => $localisation->getLatitude()->getTransformedVal(),
                $localisation->getLongitude()->getPos() => $localisation->getLongitude()->getTransformedVal(),
                $localisation->getPrecisionGps()->getPos() => $localisation->getPrecisionGps()->getTransformedVal(),
                $localisation->getLocalisation()->getPos() => $localisation->getLocalisation()->getTransformedVal(),
                $surface->getSurface()->getPos() => $surface->getSurface()->getTransformedVal(),
                $surface->getSurfaceTerrain()->getPos() => $surface->getSurfaceTerrain()->getTransformedVal(),
                $surface->getNbPieces()->getPos() => $surface->getNbPieces()->getTransformedVal(),
                $surface->getNbChambres()->getPos() => $surface->getNbChambres()->getTransformedVal(),
                $surface->getNbSdb()->getPos() => $surface->getNbSdb()->getTransformedVal(),
                $surface->getNbSalleEau()->getPos() => $surface->getNbSalleEau()->getTransformedVal(),
                $surface->getNbWc()->getPos() => $surface->getNbWc()->getTransformedVal(),
                $surface->getNbBalcons()->getPos() => $surface->getNbBalcons()->getTransformedVal(),
                $surface->getSurfaceBalcon()->getPos() => $surface->getSurfaceBalcon()->getTransformedVal(),
                $surface->getNbParkings()->getPos() => $surface->getNbParkings()->getTransformedVal(),
                $surface->getNbBoxes()->getPos() => $surface->getNbBoxes()->getTransformedVal(),
                $surface->getTerrasse()->getPos() => $surface->getTerrasse()->getTransformedVal(),
                $surface->getLongueurFacade()->getPos() => $surface->getLongueurFacade()->getTransformedVal(),
                $surface->getPlacesEnSalle()->getPos() => $surface->getPlacesEnSalle()->getTransformedVal(),
                $surface->getNbBureaux()->getPos() => $surface->getNbBureaux()->getTransformedVal(),
                $surface->getSurfaceSejour()->getPos() => $surface->getSurfaceSejour()->getTransformedVal(),
                $surface->getNbTerrasses()->getPos() => $surface->getNbTerrasses()->getTransformedVal(),
                $surface->getSurfaceCave()->getPos() => $surface->getSurfaceCave()->getTransformedVal(),
                $surface->getSurfaceSalleManger()->getPos() => $surface->getSurfaceSalleManger()->getTransformedVal(),
                $surface->getSurfaceMin()->getPos() => $surface->getSurfaceMin()->getTransformedVal(),
                $surface->getSurfaceMax()->getPos() => $surface->getSurfaceMax()->getTransformedVal(),
                $surface->getNbPiecesMin()->getPos() => $surface->getNbPiecesMin()->getTransformedVal(),
                $surface->getNbPiecesMax()->getPos() => $surface->getNbPiecesMax()->getTransformedVal(),
                $surface->getNbChambresMin()->getPos() => $surface->getNbChambresMin()->getTransformedVal(),
                $surface->getNbChambresMax()->getPos() => $surface->getNbChambresMax()->getTransformedVal(),
                $surface->getComblesAmenageables()->getPos() => $surface->getComblesAmenageables()->getTransformedVal(),
                $surface->getSurfaceTerrainNecessaire()->getPos() => $surface->getSurfaceTerrainNecessaire(
                )->getTransformedVal(),
                $surface->getSurfaceTerrasse()->getPos() => $surface->getSurfaceTerrasse()->getTransformedVal(),
                $contact->getTel()->getPos() => $contact->getTel()->getTransformedVal(),
                $contact->getFullName()->getPos() => $contact->getFullName()->getTransformedVal(),
                $contact->getEmail()->getPos() => $contact->getEmail()->getTransformedVal(),
                $contact->getInterCabinet()->getPos() => $contact->getInterCabinet()->getTransformedVal(),
                $contact->getInterCabinetPrive()->getPos() => $contact->getInterCabinetPrive()->getTransformedVal(),
                $contact->getCodeNego()->getPos() => $contact->getCodeNego()->getTransformedVal(),
                $contact->getAgenceTerrain()->getPos() => $contact->getAgenceTerrain()->getTransformedVal(),
                $etage->getEtage()->getPos() => $etage->getEtage()->getTransformedVal(),
                $etage->getNbEtages()->getPos() => $etage->getNbEtages()->getTransformedVal(),
                $etage->getIdTypeEtage()->getPos() => $etage->getIdTypeEtage()->getTransformedVal(),
                $interieur->getMeuble()->getPos() => $interieur->getMeuble()->getTransformedVal(),
                $interieur->getAnneeConstruction()->getPos() => $interieur->getAnneeConstruction()->getTransformedVal(),
                $interieur->getRefaitNeuf()->getPos() => $interieur->getRefaitNeuf()->getTransformedVal(),
                $interieur->getWcSepares()->getPos() => $interieur->getWcSepares()->getTransformedVal(),
                $interieur->getOrientationSud()->getPos() => $interieur->getOrientationSud()->getTransformedVal(),
                $interieur->getOrientationEst()->getPos() => $interieur->getOrientationEst()->getTransformedVal(),
                $interieur->getOrientationOuest()->getPos() => $interieur->getOrientationOuest()->getTransformedVal(),
                $interieur->getOrientationNord()->getPos() => $interieur->getOrientationNord()->getTransformedVal(),
                $interieur->getCave()->getPos() => $interieur->getCave()->getTransformedVal(),
                $interieur->getNbCouverts()->getPos() => $interieur->getNbCouverts()->getTransformedVal(),
                $interieur->getNbLitsDoubles()->getPos() => $interieur->getNbLitsDoubles()->getTransformedVal(),
                $interieur->getNbLitsSimples()->getPos() => $interieur->getNbLitsSimples()->getTransformedVal(),
                $interieur->getCableTv()->getPos() => $interieur->getCableTv()->getTransformedVal(),
                $interieur->getCheminee()->getPos() => $interieur->getCheminee()->getTransformedVal(),
                $interieur->getPlacards()->getPos() => $interieur->getPlacards()->getTransformedVal(),
                $interieur->getTel()->getPos() => $interieur->getTel()->getTransformedVal(),
                $interieur->getParquet()->getPos() => $interieur->getParquet()->getTransformedVal(),
                $interieur->getEquipementBebe()->getPos() => $interieur->getEquipementBebe()->getTransformedVal(),
                $interieur->getConnexionInternet()->getPos() => $interieur->getConnexionInternet()->getTransformedVal(),
                $interieur->getEquipementVideo()->getPos() => $interieur->getEquipementVideo()->getTransformedVal(),
                $interieur->getMitoyennete()->getPos() => $interieur->getMitoyennete()->getTransformedVal(),
                $partieJour->getTypeCuisine()->getPos() => $partieJour->getTypeCuisine()->getTransformedVal(),
                $partieJour->getCongelateur()->getPos() => $partieJour->getCongelateur()->getTransformedVal(),
                $partieJour->getFour()->getPos() => $partieJour->getFour()->getTransformedVal(),
                $partieJour->getMicroOndes()->getPos() => $partieJour->getMicroOndes()->getTransformedVal(),
                $partieJour->getLaveLinge()->getPos() => $partieJour->getLaveLinge()->getTransformedVal(),
                $partieJour->getLaveVaisselle()->getPos() => $partieJour->getLaveVaisselle()->getTransformedVal(),
                $partieJour->getSecheLinge()->getPos() => $partieJour->getSecheLinge()->getTransformedVal(),
                $partieJour->getSalleManger()->getPos() => $partieJour->getSalleManger()->getTransformedVal(),
                $partieJour->getSejour()->getPos() => $partieJour->getSejour()->getTransformedVal(),
                $exterieur->getAscenseur()->getPos() => $exterieur->getAscenseur()->getTransformedVal(),
                $exterieur->getCalme()->getPos() => $exterieur->getCalme()->getTransformedVal(),
                $exterieur->getPiscine()->getPos() => $exterieur->getPiscine()->getTransformedVal(),
                $exterieur->getVueDegagee()->getPos() => $exterieur->getVueDegagee()->getTransformedVal(),
                $exterieur->getEntree()->getPos() => $exterieur->getEntree()->getTransformedVal(),
                $exterieur->getVisAVis()->getPos() => $exterieur->getVisAVis()->getTransformedVal(),
                $exterieur->getMonteCharge()->getPos() => $exterieur->getMonteCharge()->getTransformedVal(),
                $garage->getGarage()->getPos() => $garage->getGarage()->getTransformedVal(),
                $garage->getType()->getPos() => $garage->getType()->getTransformedVal(),
                $securite->getAlarme()->getPos() => $securite->getAlarme()->getTransformedVal(),
                $securite->getDigicode()->getPos() => $securite->getDigicode()->getTransformedVal(),
                $securite->getGardien()->getPos() => $securite->getGardien()->getTransformedVal(),
                $securite->getInterphone()->getPos() => $securite->getInterphone()->getTransformedVal(),
                $chauffageClim->getTypeChauffage()->getPos() => $chauffageClim->getTypeChauffage()->getTransformedVal(),
                $chauffageClim->getClim()->getPos() => $chauffageClim->getClim()->getTransformedVal(),
                $detail->getNomModele()->getPos() => $detail->getNomModele()->getTransformedVal(),
                $detail->getLogementADisposition()->getPos() => $detail->getLogementADisposition()->getTransformedVal(),
                $detail->getCommPrives()->getPos() => $detail->getCommPrives()->getTransformedVal(),
                $detail->getDuplex()->getPos() => $detail->getDuplex()->getTransformedVal(),
                $detail->getAnimauxAcceptes()->getPos() => $detail->getAnimauxAcceptes()->getTransformedVal(),
                $detail->getAmenagementHandicapes()->getPos() => $detail->getAmenagementHandicapes()->getTransformedVal(
                ),
                $detail->getDateDispo()->getPos() => $detail->getDateDispo()->getTransformedVal(),
                $detail->getDescription()->getPos() => $detail->getDescription()->getTransformedVal(),
                $detail->getLabel()->getPos() => $detail->getLabel()->getTransformedVal(),
                $detail->getActivitesCommerciales()->getPos() => $detail->getActivitesCommerciales()->getTransformedVal(
                ),
                $publication->getPublications()->getPos() => $publication->getPublications()->getTransformedVal(),
                $publication->getCoupDeCoeur()->getPos() => $publication->getCoupDeCoeur()->getTransformedVal(),
                $publication->getVersionFormat()->getPos() => $publication->getVersionFormat()->getTransformedVal(),
            ],
        ];

        ksort($expectedArray);

        self::assertEquals($expectedArray, $annonceExport->toArray());
        self::assertCount(333, $annonceExport->toArray()[0]);
        self::assertEquals(range(1, 333), array_keys($annonceExport->toArray()[0]));

        $annonceExport->removeLines([1]);
        self::assertEmpty($annonceExport->toArray());
    }
}
