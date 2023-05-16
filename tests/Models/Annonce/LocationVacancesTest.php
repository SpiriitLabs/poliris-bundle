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
use Spiriit\PolirisBundle\Models\Annonce\LocationVacances;

class LocationVacancesTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_location_vacances()
    {
        $locationVacances = new LocationVacances(
            $periodesDispo = 'periodes dispo',
            $periodesBS = 'periodes bs',
            $prixSemaineBS = 'prix semaine bs',
            $prixQuinzaineBS = 'prix quinzaine bs',
            $prixMoisBS = 'prix mois bs',
            $periodesHS = 'periodes hs',
            $prixSemaineHS = 'prix semaine hs',
            $prixQuinzaineHS = 'prix quinzaine hs',
            $prixMoisHS = 'prix mois hs',
            $nbPersonnes = 1,
            $residence = true,
            $typeResidence = 'type'
        );

        self::assertEquals($periodesDispo, $locationVacances->getPeriodesDispo()->getVal());
        self::assertEquals($periodesBS, $locationVacances->getPeriodesBasseSaison()->getVal());
        self::assertEquals($prixSemaineBS, $locationVacances->getPrixSemaineBasseSaison()->getVal());
        self::assertEquals($prixQuinzaineBS, $locationVacances->getPrixQuinzaineBasseSaison()->getVal());
        self::assertEquals($prixMoisBS, $locationVacances->getPrixMoisBasseSaison()->getVal());
        self::assertEquals($periodesHS, $locationVacances->getPeriodesHauteSaison()->getVal());
        self::assertEquals($prixSemaineHS, $locationVacances->getPrixSemaineHauteSaison()->getVal());
        self::assertEquals($prixQuinzaineHS, $locationVacances->getPrixQuinzaineHauteSaison()->getVal());
        self::assertEquals($prixMoisHS, $locationVacances->getPrixMoisHauteSaison()->getVal());
        self::assertEquals($nbPersonnes, $locationVacances->getNbPersonnes()->getVal());
        self::assertEquals($residence, $locationVacances->getResidence()->getVal());
        self::assertEquals($typeResidence, $locationVacances->getTypeResidence()->getVal());

        $expectedArray = [
            $locationVacances->getPeriodesDispo(),
            $locationVacances->getPeriodesBasseSaison(),
            $locationVacances->getPrixSemaineBasseSaison(),
            $locationVacances->getPrixQuinzaineBasseSaison(),
            $locationVacances->getPrixMoisBasseSaison(),
            $locationVacances->getPeriodesHauteSaison(),
            $locationVacances->getPrixSemaineHauteSaison(),
            $locationVacances->getPrixQuinzaineHauteSaison(),
            $locationVacances->getPrixMoisHauteSaison(),
            $locationVacances->getNbPersonnes(),
            $locationVacances->getResidence(),
            $locationVacances->getTypeResidence(),
        ];

        self::assertEquals($expectedArray, $locationVacances->toArray());
    }
}
