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
use Spiriit\PolirisBundle\Models\Annonce\HonoraireCharge;

class HonoraireChargeTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_honoraire_charge()
    {
        $honoraireCharge = new HonoraireCharge(
            $honoraires = 1,
            $charges = 2,
            $honorairesChargeAcquereur = 3,
            $pourcentageHonorairesTTC = 4,
            $chargesAnnuelles = 5,
            $honorairesCharge = 6,
            $prixHorsHonorairesAcquereur = 7,
            $modalitesChargesLocataire = 8,
            $partHonorairesEtatLieux = 9,
            $urlBaremeHonorairesAgence = 10
        );

        self::assertEquals($honoraires, $honoraireCharge->getHonoraires()->getVal());
        self::assertEquals($charges, $honoraireCharge->getCharges()->getVal());
        self::assertEquals($honorairesChargeAcquereur, $honoraireCharge->getHonorairesChargeAcquereur()->getVal());
        self::assertEquals($pourcentageHonorairesTTC, $honoraireCharge->getPourcentageHonorairesTTC()->getVal());
        self::assertEquals($chargesAnnuelles, $honoraireCharge->getChargesAnnuelles()->getVal());
        self::assertEquals($honorairesCharge, $honoraireCharge->getHonorairesCharge()->getVal());
        self::assertEquals($prixHorsHonorairesAcquereur, $honoraireCharge->getPrixHorsHonorairesAcquereur()->getVal());
        self::assertEquals($modalitesChargesLocataire, $honoraireCharge->getModalitesChargesLocataire()->getVal());
        self::assertEquals($partHonorairesEtatLieux, $honoraireCharge->getPartHonorairesEtatLieux()->getVal());
        self::assertEquals($urlBaremeHonorairesAgence, $honoraireCharge->getUrlBaremeHonorairesAgence()->getVal());

        $expectedArray = [
            $honoraireCharge->getHonoraires(),
            $honoraireCharge->getCharges(),
            $honoraireCharge->getHonorairesChargeAcquereur(),
            $honoraireCharge->getPourcentageHonorairesTTC(),
            $honoraireCharge->getChargesAnnuelles(),
            $honoraireCharge->getHonorairesCharge(),
            $honoraireCharge->getPrixHorsHonorairesAcquereur(),
            $honoraireCharge->getModalitesChargesLocataire(),
            $honoraireCharge->getPartHonorairesEtatLieux(),
            $honoraireCharge->getUrlBaremeHonorairesAgence(),
        ];

        self::assertEquals($expectedArray, $honoraireCharge->toArray());
    }
}
