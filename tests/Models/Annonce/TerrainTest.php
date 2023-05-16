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
use Spiriit\PolirisBundle\Models\Annonce\Terrain;

class TerrainTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_terrain()
    {
        $terrain = new Terrain(
            true,
            true,
            true,
            true,
            100,
            true,
            true
        );

        self::assertTrue($terrain->getAgricole()->getVal());
        self::assertTrue($terrain->getConstructible()->getVal());
        self::assertTrue($terrain->getPente()->getVal());
        self::assertTrue($terrain->getPlanEau()->getVal());
        self::assertTrue($terrain->getDonneSurLaRue()->getVal());
        self::assertTrue($terrain->getViabilise()->getVal());
        self::assertEquals(100, $terrain->getLongueurFacade()->getVal());

        $expectedArray = [
            $terrain->getAgricole(),
            $terrain->getConstructible(),
            $terrain->getPente(),
            $terrain->getPlanEau(),
            $terrain->getLongueurFacade(),
            $terrain->getDonneSurLaRue(),
            $terrain->getViabilise(),
        ];

        self::assertEquals($expectedArray, $terrain->toArray());
    }
}
