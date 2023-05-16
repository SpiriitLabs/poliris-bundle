<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Models\Annonce;

use Spiriit\PolirisBundle\Models\Column;

class HonoraireCharge
{
    public const CHARGE_ACQUEREUR = 1;
    public const CHARGE_VENDEUR = 2;

    private Column $honoraires;
    private Column $charges;
    private Column $honorairesChargeAcquereur;
    private Column $pourcentageHonorairesTTC;
    private Column $chargesAnnuelles;
    private Column $honorairesCharge;
    private Column $prixHorsHonorairesAcquereur;
    private Column $modalitesChargesLocataire;
    private Column $partHonorairesEtatLieux;
    private Column $urlBaremeHonorairesAgence;

    public function __construct(
        $honoraires,
        $charges,
        $honorairesChargeAcquereur,
        $pourcentageHonorairesTTC,
        $chargesAnnuelles,
        $honorairesCharge,
        $prixHorsHonorairesAcquereur,
        $modalitesChargesLocataire,
        $partHonorairesEtatLieux,
        $urlBaremeHonorairesAgence
    ) {
        $this->honoraires = new Column(15, $honoraires);
        $this->charges = new Column(23, $charges);
        $this->honorairesChargeAcquereur = new Column(256, $honorairesChargeAcquereur);
        $this->pourcentageHonorairesTTC = new Column(257, $pourcentageHonorairesTTC);
        $this->chargesAnnuelles = new Column(260, $chargesAnnuelles);
        $this->honorairesCharge = new Column(302, $honorairesCharge);
        $this->prixHorsHonorairesAcquereur = new Column(303, $prixHorsHonorairesAcquereur);
        $this->modalitesChargesLocataire = new Column(304, $modalitesChargesLocataire);
        $this->partHonorairesEtatLieux = new Column(306, $partHonorairesEtatLieux);
        $this->urlBaremeHonorairesAgence = new Column(307, $urlBaremeHonorairesAgence);
    }

    public function getHonoraires(): Column
    {
        return $this->honoraires;
    }

    public function getCharges(): Column
    {
        return $this->charges;
    }

    public function getHonorairesChargeAcquereur(): Column
    {
        return $this->honorairesChargeAcquereur;
    }

    public function getPourcentageHonorairesTTC(): Column
    {
        return $this->pourcentageHonorairesTTC;
    }

    public function getChargesAnnuelles(): Column
    {
        return $this->chargesAnnuelles;
    }

    public function getHonorairesCharge(): Column
    {
        return $this->honorairesCharge;
    }

    public function getPrixHorsHonorairesAcquereur(): Column
    {
        return $this->prixHorsHonorairesAcquereur;
    }

    public function getModalitesChargesLocataire(): Column
    {
        return $this->modalitesChargesLocataire;
    }

    public function getPartHonorairesEtatLieux(): Column
    {
        return $this->partHonorairesEtatLieux;
    }

    public function getUrlBaremeHonorairesAgence(): Column
    {
        return $this->urlBaremeHonorairesAgence;
    }

    public function toArray(): array
    {
        return [
            $this->getHonoraires(),
            $this->getCharges(),
            $this->getHonorairesChargeAcquereur(),
            $this->getPourcentageHonorairesTTC(),
            $this->getChargesAnnuelles(),
            $this->getHonorairesCharge(),
            $this->getPrixHorsHonorairesAcquereur(),
            $this->getModalitesChargesLocataire(),
            $this->getPartHonorairesEtatLieux(),
            $this->getUrlBaremeHonorairesAgence(),
        ];
    }
}
