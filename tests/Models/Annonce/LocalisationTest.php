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
use Spiriit\PolirisBundle\Models\Annonce\Localisation;

class LocalisationTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_localisation()
    {
        $localisation = new Localisation(
            $cp = '34000',
            $ville = 'MTP',
            $pays = 'France',
            $adresse = '425 Rue Alfred Nobel',
            $quartierProximite = 'Commerces',
            $situation = 'ville',
            $procheLac = false,
            $procheTennis = false,
            $procheSki = false,
            $cpReel = '34000',
            $villeReelle = 'MONTPELLIER',
            $idQuartier = null,
            $transportLigne = '8',
            $transportStation = 'Opera',
            $latitude = 22.1,
            $longitude = 23.4,
            $precisionGps = 1,
            $loc = '75,92,93,94,95'
        );

        self::assertEquals($cp, $localisation->getCp()->getVal());
        self::assertEquals($ville, $localisation->getVille()->getVal());
        self::assertEquals($pays, $localisation->getPays()->getVal());
        self::assertEquals($adresse, $localisation->getAdresse()->getVal());
        self::assertEquals($quartierProximite, $localisation->getQuartierProximite()->getVal());
        self::assertEquals($situation, $localisation->getSituation()->getVal());
        self::assertEquals($procheLac, $localisation->getProcheLac()->getVal());
        self::assertEquals($procheTennis, $localisation->getProcheTennis()->getVal());
        self::assertEquals($procheSki, $localisation->getProcheSki()->getVal());
        self::assertEquals($cpReel, $localisation->getCpReel()->getVal());
        self::assertEquals($villeReelle, $localisation->getVilleReelle()->getVal());
        self::assertEquals($idQuartier, $localisation->getIdQuartier()->getVal());
        self::assertEquals($transportLigne, $localisation->getTransportLigne()->getVal());
        self::assertEquals($transportStation, $localisation->getTransportStation()->getVal());
        self::assertEquals($latitude, $localisation->getLatitude()->getVal());
        self::assertEquals($longitude, $localisation->getLongitude()->getVal());
        self::assertEquals($precisionGps, $localisation->getPrecisionGps()->getVal());
        self::assertEquals($loc, $localisation->getLocalisation()->getVal());

        $expectedArray = [
            $localisation->getCp(),
            $localisation->getVille(),
            $localisation->getPays(),
            $localisation->getAdresse(),
            $localisation->getQuartierProximite(),
            $localisation->getSituation(),
            $localisation->getProcheLac(),
            $localisation->getProcheTennis(),
            $localisation->getProcheSki(),
            $localisation->getCpReel(),
            $localisation->getVilleReelle(),
            $localisation->getIdQuartier(),
            $localisation->getTransportLigne(),
            $localisation->getTransportStation(),
            $localisation->getLatitude(),
            $localisation->getLongitude(),
            $localisation->getPrecisionGps(),
            $localisation->getLocalisation(),
        ];

        self::assertEquals($expectedArray, $localisation->toArray());
    }
}
