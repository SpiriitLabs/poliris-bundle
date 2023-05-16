<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Models\Annonce;

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

class AnnonceTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_annonce()
    {
        $annonce = new Annonce();

        $identifiant = new Identifiant('id', 'ref', 'type annonce', 'annonce id technique');
        $annonce->setIdentifiant($identifiant);

        $type = new Type('type', 'sous type');
        $annonce->setType($type);

        $photo = new Photo(
            'photo 1',
            'photo 2',
            'photo 3',
            'photo 4',
            'photo 5',
            'photo 6',
            'photo 7',
            'photo 8',
            'photo 9',
            'photo 10',
            'photo 11',
            'photo 12',
            'photo 13',
            'photo 14',
            'photo 15',
            'photo 16',
            'photo 17',
            'photo 18',
            'photo 19',
            'photo 20',
            'photo 21',
            'photo 22',
            'photo 23',
            'photo 24',
            'photo 25',
            'photo 26',
            'photo 27',
            'photo 28',
            'photo 29',
            'photo 30',
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
            null,
            null,
            null
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
            'René Gossier',
            'rgossier@agence.com',
            true,
            false,
            'MARTIN',
            'Agence terra nova'
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

        $detail = new Detail(
            'BAR, TABAC, PMU',
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
            '4.09'
        );
        $annonce->setPublication($publication);

        $chauffageClim = new ChauffageClim(1, true);
        $annonce->setChauffageClim($chauffageClim);

        self::assertFalse($annonce->isTypeVente());
        self::assertFalse($annonce->isTypeLocation());
        self::assertFalse($annonce->isModeleMaison());

        self::assertEquals($identifiant, $annonce->getIdentifiant());
        self::assertEquals($type, $annonce->getType());
        self::assertEquals($photo, $annonce->getPhoto());
        self::assertEquals($champCustom, $annonce->getChampCustom());
        self::assertEquals($langue, $annonce->getLangue());
        self::assertEquals($mandat, $annonce->getMandat());
        self::assertEquals($locationVacances, $annonce->getLocationVacances());
        self::assertEquals($viager, $annonce->getViager());
        self::assertEquals($terrain, $annonce->getTerrain());
        self::assertEquals($bureau, $annonce->getBureau());
        self::assertEquals($diagnostic, $annonce->getDiagnostic());
        self::assertEquals($parking, $annonce->getParking());
        self::assertEquals($boutique, $annonce->getBoutique());
        self::assertEquals($prix, $annonce->getPrix());
        self::assertEquals($location, $annonce->getLocation());
        self::assertEquals($produitInvestissement, $annonce->getProduitInvestissement());
        self::assertEquals($fondsCommerce, $annonce->getFondsCommerce());
        self::assertEquals($honoraireCharge, $annonce->getHonoraireCharge());
        self::assertEquals($localisation, $annonce->getLocalisation());
        self::assertEquals($surface, $annonce->getSurface());
        self::assertEquals($contact, $annonce->getContact());
        self::assertEquals($etage, $annonce->getEtage());
        self::assertEquals($interieur, $annonce->getInterieur());
        self::assertEquals($partieJour, $annonce->getPartieJour());
        self::assertEquals($exterieur, $annonce->getExterieur());
        self::assertEquals($garage, $annonce->getGarage());
        self::assertEquals($securite, $annonce->getSecurite());
        self::assertEquals($chauffageClim, $annonce->getChauffageClim());
        self::assertEquals($detail, $annonce->getDetail());
        self::assertEquals($publication, $annonce->getPublication());
    }
}
