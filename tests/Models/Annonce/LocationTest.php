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
use Spiriit\PolirisBundle\Models\Annonce\Location;

class LocationTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_location()
    {
        $location = new Location(
            $dureeBail = 1,
            $prixDroitEntree = 2,
            $prixDroitBail = 3,
            $natureBail = 'location meublée',
            $complementLoyer = 4,
            $loyerBase = 10,
            $loyerReferenceMajore = 15,
            $encadrementLoyer = 10
        );

        self::assertEquals($dureeBail, $location->getDureeBail()->getVal());
        self::assertEquals($prixDroitEntree, $location->getPrixDroitEntree()->getVal());
        self::assertEquals($prixDroitBail, $location->getPrixDroitBail()->getVal());
        self::assertEquals($natureBail, $location->getNatureBail()->getVal());
        self::assertEquals($complementLoyer, $location->getComplementLoyer()->getVal());
        self::assertEquals($loyerBase, $location->getLoyerBase()->getVal());
        self::assertEquals($loyerReferenceMajore, $location->getLoyerReferenceMajore()->getVal());
        self::assertEquals($encadrementLoyer, $location->getEncadrementLoyers()->getVal());

        $expectedArray = [
            $location->getDureeBail(),
            $location->getPrixDroitEntree(),
            $location->getPrixDroitBail(),
            $location->getNatureBail(),
            $location->getComplementLoyer(),
            $location->getLoyerBase(),
            $location->getLoyerReferenceMajore(),
            $location->getEncadrementLoyers(),
        ];

        self::assertEquals($expectedArray, $location->toArray());
    }
}
