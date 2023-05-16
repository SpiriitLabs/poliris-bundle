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
use Spiriit\PolirisBundle\Models\Annonce\Detail;

class DetailTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_detail()
    {
        $detail = new Detail(
            $activitesCommerciales = 'BAR, TABAC, PMU',
            $label = 'Maison 3 pièces',
            $description = 'Très belle maison',
            $dateDispo = new \DateTimeImmutable(),
            $amenagementHandicapes = true,
            $animauxAcceptes = false,
            $duplex = true,
            $commPrives = 'Clefs à prendre chez le gardien',
            $logementADisposition = false,
            $nomModele = 'Tradition'
        );

        self::assertEquals($activitesCommerciales, $detail->getActivitesCommerciales()->getVal());
        self::assertEquals($label, $detail->getLabel()->getVal());
        self::assertEquals($description, $detail->getDescription()->getVal());
        self::assertEquals($dateDispo, $detail->getDateDispo()->getVal());
        self::assertEquals($amenagementHandicapes, $detail->getAmenagementHandicapes()->getVal());
        self::assertEquals($animauxAcceptes, $detail->getAnimauxAcceptes()->getVal());
        self::assertEquals($duplex, $detail->getDuplex()->getVal());
        self::assertEquals($commPrives, $detail->getCommPrives()->getVal());
        self::assertEquals($logementADisposition, $detail->getLogementADisposition()->getVal());
        self::assertEquals($nomModele, $detail->getNomModele()->getVal());

        $expectedArray = [
            $detail->getActivitesCommerciales(),
            $detail->getLabel(),
            $detail->getDescription(),
            $detail->getDateDispo(),
            $detail->getAmenagementHandicapes(),
            $detail->getAnimauxAcceptes(),
            $detail->getDuplex(),
            $detail->getCommPrives(),
            $detail->getLogementADisposition(),
            $detail->getNomModele(),
        ];

        self::assertEquals($expectedArray, $detail->toArray());
    }
}
