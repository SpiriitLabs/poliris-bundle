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
use Spiriit\PolirisBundle\Models\Annonce\Exterieur;

class ExterieurTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_exterieur()
    {
        $exterieur = new Exterieur(
            $ascenseur = true,
            $calme = false,
            $piscine = true,
            $vueDegagee = false,
            $entree = true,
            $visAVis = false,
            $monteCharge = true
        );

        self::assertEquals($ascenseur, $exterieur->getAscenseur()->getVal());
        self::assertEquals($calme, $exterieur->getCalme()->getVal());
        self::assertEquals($piscine, $exterieur->getPiscine()->getVal());
        self::assertEquals($vueDegagee, $exterieur->getVueDegagee()->getVal());
        self::assertEquals($entree, $exterieur->getEntree()->getVal());
        self::assertEquals($visAVis, $exterieur->getVisAVis()->getVal());
        self::assertEquals($monteCharge, $exterieur->getMonteCharge()->getVal());

        $expectedArray = [
            $exterieur->getAscenseur(),
            $exterieur->getCalme(),
            $exterieur->getPiscine(),
            $exterieur->getVueDegagee(),
            $exterieur->getEntree(),
            $exterieur->getVisAVis(),
            $exterieur->getMonteCharge(),
        ];

        self::assertEquals($expectedArray, $exterieur->toArray());
    }
}
