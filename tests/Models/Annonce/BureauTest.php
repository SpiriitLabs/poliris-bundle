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
use Spiriit\PolirisBundle\Models\Annonce\Bureau;

class BureauTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_bureau()
    {
        $bureau = new Bureau(
            $loyerAnnuelGlobal = 0,
            $loyerAnnuelM2 = 1,
            $loyerAnnuelCC = 2,
            $loyerAnnuelM2CC = 3,
            $loyerAnnuelHT = 4,
            $loyerAnnuelM2HT = 5,
            $chargesAnnuellesGlobales = 6,
            $chargesAnnuellesM2 = 7,
            $chargesMensuellesHT = 8,
            $chargesAnnuellesM2HT = 9,
            $chargesAnnuellesHT = 10,
            $divisible = true,
            $surfaceDivisibleMin = 11,
            $surfaceDivisibleMax = 12,
            $conditionsFinancieres = 'conditions',
            $prestationsDiverses = 'prestations',
            $immeubleBureaux = true,
            $surfaceMaxBureau = 13
        );

        self::assertEquals($loyerAnnuelGlobal, $bureau->getLoyerAnnuelGlobal()->getVal());
        self::assertEquals($loyerAnnuelM2, $bureau->getLoyerAnnuelM2()->getVal());
        self::assertEquals($loyerAnnuelCC, $bureau->getLoyerAnnuelCC()->getVal());
        self::assertEquals($loyerAnnuelM2CC, $bureau->getLoyerAnnuelM2CC()->getVal());
        self::assertEquals($loyerAnnuelHT, $bureau->getLoyerAnnuelHT()->getVal());
        self::assertEquals($loyerAnnuelM2HT, $bureau->getLoyerAnnuelM2HT()->getVal());
        self::assertEquals($chargesAnnuellesGlobales, $bureau->getChargesAnnuellesGlobales()->getVal());
        self::assertEquals($chargesAnnuellesM2, $bureau->getChargesAnnuellesM2()->getVal());
        self::assertEquals($chargesMensuellesHT, $bureau->getChargesMensuellesHT()->getVal());
        self::assertEquals($chargesAnnuellesM2HT, $bureau->getChargesAnnuellesM2HT()->getVal());
        self::assertEquals($chargesAnnuellesHT, $bureau->getChargesAnnuellesHT()->getVal());
        self::assertEquals($divisible, $bureau->getDivisible()->getVal());
        self::assertEquals($surfaceDivisibleMin, $bureau->getSurfaceDivisibleMin()->getVal());
        self::assertEquals($surfaceDivisibleMax, $bureau->getSurfaceDivisibleMax()->getVal());
        self::assertEquals($conditionsFinancieres, $bureau->getConditionsFinancieres()->getVal());
        self::assertEquals($prestationsDiverses, $bureau->getPrestationsDiverses()->getVal());
        self::assertEquals($immeubleBureaux, $bureau->getImmeubleBureaux()->getVal());
        self::assertEquals($surfaceMaxBureau, $bureau->getSurfaceMaxBureau()->getVal());

        $expectedArray = [
            $bureau->getLoyerAnnuelGlobal(),
            $bureau->getLoyerAnnuelM2(),
            $bureau->getLoyerAnnuelCC(),
            $bureau->getLoyerAnnuelM2CC(),
            $bureau->getLoyerAnnuelHT(),
            $bureau->getLoyerAnnuelM2HT(),
            $bureau->getChargesAnnuellesGlobales(),
            $bureau->getChargesAnnuellesM2(),
            $bureau->getChargesMensuellesHT(),
            $bureau->getChargesAnnuellesM2HT(),
            $bureau->getChargesAnnuellesHT(),
            $bureau->getDivisible(),
            $bureau->getSurfaceDivisibleMin(),
            $bureau->getSurfaceDivisibleMax(),
            $bureau->getConditionsFinancieres(),
            $bureau->getPrestationsDiverses(),
            $bureau->getImmeubleBureaux(),
            $bureau->getSurfaceMaxBureau(),
        ];

        self::assertEquals($expectedArray, $bureau->toArray());
    }
}
