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
use Spiriit\PolirisBundle\Models\Annonce\Etage;

class EtageTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_etage()
    {
        $etage = new Etage(
            $e = 0,
            $nbEtages = 1,
            $idTypeEtage = 3
        );

        self::assertEquals($e, $etage->getEtage()->getVal());
        self::assertEquals($nbEtages, $etage->getNbEtages()->getVal());
        self::assertEquals($idTypeEtage, $etage->getIdTypeEtage()->getVal());

        $expectedArray = [
            $etage->getEtage(),
            $etage->getNbEtages(),
            $etage->getIdTypeEtage(),
        ];

        self::assertEquals($expectedArray, $etage->toArray());
    }
}
