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
use Spiriit\PolirisBundle\Models\Annonce\Garage;

class GarageTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_garage()
    {
        $garage = new Garage(
            $g = true,
            $type = 1
        );

        self::assertEquals($g, $garage->getGarage()->getVal());
        self::assertEquals($type, $garage->getType()->getVal());

        $expectedArray = [
            $garage->getGarage(),
            $garage->getType(),
        ];

        self::assertEquals($expectedArray, $garage->toArray());
    }
}
