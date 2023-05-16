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
use Spiriit\PolirisBundle\Models\Annonce\Prix;

class PrixTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_prix()
    {
        $prix = new Prix(
            $p = 1,
            $loyerMoisMur = 2,
            $loyerCC = 3,
            $loyerHT = 4,
            $depotGarantie = 6,
            $prixMasque = 7,
            $prixHT = 8,
            $copropriete = 9,
            $nbLots = 10,
            $syndicatCopro = 11,
            $syndicatCoproDetails = 12,
            $prixTerrain = 13,
            $prixModeleMaison = 14,
            $prixMin = 15,
            $prixMax = 16
        );

        self::assertEquals($p, $prix->getPrix()->getVal());
        self::assertEquals($loyerMoisMur, $prix->getLoyerMoisMur()->getVal());
        self::assertEquals($loyerCC, $prix->getLoyerCC()->getVal());
        self::assertEquals($loyerHT, $prix->getLoyerHT()->getVal());
        self::assertEquals($depotGarantie, $prix->getDepotGarantie()->getVal());
        self::assertEquals($prixMasque, $prix->getPrixMasque()->getVal());
        self::assertEquals($prixHT, $prix->getPrixHT()->getVal());
        self::assertEquals($copropriete, $prix->getCopropriete()->getVal());
        self::assertEquals($nbLots, $prix->getNbLots()->getVal());
        self::assertEquals($syndicatCopro, $prix->getSyndicatCopro()->getVal());
        self::assertEquals($syndicatCoproDetails, $prix->getSyndicatCoproDetails()->getVal());
        self::assertEquals($prixTerrain, $prix->getPrixTerrain()->getVal());
        self::assertEquals($prixModeleMaison, $prix->getPrixModeleMaison()->getVal());
        self::assertEquals($prixMin, $prix->getPrixMin()->getVal());
        self::assertEquals($prixMax, $prix->getPrixMax()->getVal());
    }
}
