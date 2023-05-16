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
use Spiriit\PolirisBundle\Models\Annonce\FondsCommerce;

class FondsCommerceTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_fonds_commerce()
    {
        $fondsCommerce = new FondsCommerce(
            $ca = 1,
            $repartitionCa = '70 % bar / 30 % restaurant',
            $natureBailCommercial = 'Tous commerces sauf restauration',
            $resultatAnneeN2 = 2,
            $resultatAnneeN1 = 3,
            $resultatActuel = 4,
            $caAnneeN2 = 5,
            $caAnneeN1 = 6,
        );

        self::assertEquals($ca, $fondsCommerce->getCa()->getVal());
        self::assertEquals($repartitionCa, $fondsCommerce->getRepartitionCa()->getVal());
        self::assertEquals($natureBailCommercial, $fondsCommerce->getNatureBailCommercial()->getVal());
        self::assertEquals($resultatAnneeN2, $fondsCommerce->getResultatAnneeN2()->getVal());
        self::assertEquals($resultatAnneeN1, $fondsCommerce->getResultatAnneeN1()->getVal());
        self::assertEquals($resultatActuel, $fondsCommerce->getResultatActuel()->getVal());
        self::assertEquals($caAnneeN2, $fondsCommerce->getCaAnneeN2()->getVal());
        self::assertEquals($caAnneeN1, $fondsCommerce->getCaAnneeN1()->getVal());

        $expectedArray = [
            $fondsCommerce->getCa(),
            $fondsCommerce->getRepartitionCa(),
            $fondsCommerce->getNatureBailCommercial(),
            $fondsCommerce->getResultatAnneeN2(),
            $fondsCommerce->getResultatAnneeN1(),
            $fondsCommerce->getResultatActuel(),
            $fondsCommerce->getCaAnneeN2(),
            $fondsCommerce->getCaAnneeN1(),
        ];

        self::assertEquals($expectedArray, $fondsCommerce->toArray());
    }
}
