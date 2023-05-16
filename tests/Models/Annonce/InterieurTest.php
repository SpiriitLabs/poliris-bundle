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
use Spiriit\PolirisBundle\Models\Annonce\Interieur;

class InterieurTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_interieur()
    {
        $interieur = new Interieur(
            $meuble = true,
            $anneeConstruction = '1985',
            $refaitNeuf = true,
            $wcSepares = false,
            $orientationSud = true,
            $orientationEst = false,
            $orientationOuest = false,
            $orientationNord = false,
            $cave = true,
            $nbCouverts = 1,
            $nbLitsDoubles = 2,
            $nbLitsSimples = 3,
            $cableTv = false,
            $cheminee = true,
            $placards = false,
            $tel = true,
            $parquet = false,
            $equipementBebe = false,
            $connexionInternet = false,
            $equipementVideo = true,
            $mitoyennete = true
        );

        self::assertEquals($meuble, $interieur->getMeuble()->getVal());
        self::assertEquals($anneeConstruction, $interieur->getAnneeConstruction()->getVal());
        self::assertEquals($refaitNeuf, $interieur->getRefaitNeuf()->getVal());
        self::assertEquals($wcSepares, $interieur->getWcSepares()->getVal());
        self::assertEquals($orientationSud, $interieur->getOrientationSud()->getVal());
        self::assertEquals($orientationEst, $interieur->getOrientationEst()->getVal());
        self::assertEquals($orientationOuest, $interieur->getOrientationOuest()->getVal());
        self::assertEquals($orientationNord, $interieur->getOrientationNord()->getVal());
        self::assertEquals($cave, $interieur->getCave()->getVal());
        self::assertEquals($nbCouverts, $interieur->getNbCouverts()->getVal());
        self::assertEquals($nbLitsDoubles, $interieur->getNbLitsDoubles()->getVal());
        self::assertEquals($nbLitsSimples, $interieur->getNbLitsSimples()->getVal());
        self::assertEquals($cableTv, $interieur->getCableTv()->getVal());
        self::assertEquals($cheminee, $interieur->getCheminee()->getVal());
        self::assertEquals($placards, $interieur->getPlacards()->getVal());
        self::assertEquals($tel, $interieur->getTel()->getVal());
        self::assertEquals($parquet, $interieur->getParquet()->getVal());
        self::assertEquals($equipementBebe, $interieur->getEquipementBebe()->getVal());
        self::assertEquals($connexionInternet, $interieur->getConnexionInternet()->getVal());
        self::assertEquals($equipementVideo, $interieur->getEquipementVideo()->getVal());
        self::assertEquals($mitoyennete, $interieur->getMitoyennete()->getVal());
    }
}
