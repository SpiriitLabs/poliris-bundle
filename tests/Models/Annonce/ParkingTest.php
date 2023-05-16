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
use Spiriit\PolirisBundle\Models\Annonce\Parking;

class ParkingTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_parking()
    {
        $parking = new Parking(
            $nbVehicules = 1,
            $immeuble = true,
            $isole = false
        );

        self::assertEquals($nbVehicules, $parking->getNbVehicules()->getVal());
        self::assertEquals($immeuble, $parking->getImmeuble()->getVal());
        self::assertEquals($isole, $parking->getIsole()->getVal());
    }
}
