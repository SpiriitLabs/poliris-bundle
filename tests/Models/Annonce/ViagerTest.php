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
use Spiriit\PolirisBundle\Models\Annonce\Viager;

class ViagerTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_viager()
    {
        $viager = new Viager(
            $prixBouquet = 2000,
            $renteMensuelle = 500,
            $ageHomme = 50,
            $ageFemme = 52,
            $venduLibre = true,
        );

        self::assertEquals($prixBouquet, $viager->getPrixBouquet()->getVal());
        self::assertEquals($renteMensuelle, $viager->getRenteMensuelle()->getVal());
        self::assertEquals($ageHomme, $viager->getAgeHomme()->getVal());
        self::assertEquals($ageFemme, $viager->getAgeFemme()->getVal());
        self::assertEquals($venduLibre, $viager->getVenduLibre()->getVal());

        $expectedArray = [
            $viager->getPrixBouquet(),
            $viager->getRenteMensuelle(),
            $viager->getAgeHomme(),
            $viager->getAgeFemme(),
            $viager->getVenduLibre(),
        ];

        self::assertEquals($expectedArray, $viager->toArray());
    }
}
