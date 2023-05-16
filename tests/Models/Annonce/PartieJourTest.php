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
use Spiriit\PolirisBundle\Models\Annonce\PartieJour;

class PartieJourTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_partie_jour()
    {
        $partieJour = new PartieJour(
            $typeCuisine = 'type',
            $congelateur = false,
            $four = true,
            $laveVaisselle = false,
            $microOndes = true,
            $laveLinge = false,
            $secheLinge = true,
            $salleManger = false,
            $sejour = true
        );

        self::assertEquals($typeCuisine, $partieJour->getTypeCuisine()->getVal());
        self::assertEquals($congelateur, $partieJour->getCongelateur()->getVal());
        self::assertEquals($four, $partieJour->getFour()->getVal());
        self::assertEquals($laveVaisselle, $partieJour->getLaveVaisselle()->getVal());
        self::assertEquals($microOndes, $partieJour->getMicroOndes()->getVal());
        self::assertEquals($laveLinge, $partieJour->getLaveLinge()->getVal());
        self::assertEquals($secheLinge, $partieJour->getSecheLinge()->getVal());
        self::assertEquals($salleManger, $partieJour->getSalleManger()->getVal());
        self::assertEquals($sejour, $partieJour->getSejour()->getVal());

        $expectedArray = [
            $partieJour->getTypeCuisine(),
            $partieJour->getCongelateur(),
            $partieJour->getFour(),
            $partieJour->getLaveVaisselle(),
            $partieJour->getMicroOndes(),
            $partieJour->getLaveLinge(),
            $partieJour->getSecheLinge(),
            $partieJour->getSalleManger(),
            $partieJour->getSejour(),
        ];

        self::assertEquals($expectedArray, $partieJour->toArray());
    }
}
