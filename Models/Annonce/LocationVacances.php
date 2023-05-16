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

class LocationVacances
{
    private Column $periodesDispo;

    private Column $periodesBasseSaison;
    private Column $prixSemaineBasseSaison;
    private Column $prixQuinzaineBasseSaison;
    private Column $prixMoisBasseSaison;

    private Column $periodesHauteSaison;
    private Column $prixSemaineHauteSaison;
    private Column $prixQuinzaineHauteSaison;
    private Column $prixMoisHauteSaison;

    private Column $nbPersonnes;
    private Column $residence;
    private Column $typeResidence;

    public function __construct(
        $periodesDispo,
        $periodesBasseSaison,
        $prixSemaineBasseSaison,
        $prixQuinzaineBasseSaison,
        $prixMoisBasseSaison,
        $periodesHauteSaison,
        $prixSemaineHauteSaison,
        $prixQuinzaineHauteSaison,
        $prixMoisHauteSaison,
        $nbPersonnes,
        $residence,
        $typeResidence
    ) {
        $this->periodesDispo = new Column(182, $periodesDispo);

        $this->periodesBasseSaison = new Column(183, $periodesBasseSaison);
        $this->prixSemaineBasseSaison = new Column(49, $prixSemaineBasseSaison);
        $this->prixQuinzaineBasseSaison = new Column(50, $prixQuinzaineBasseSaison);
        $this->prixMoisBasseSaison = new Column(51, $prixMoisBasseSaison);

        $this->periodesHauteSaison = new Column(184, $periodesHauteSaison);
        $this->prixSemaineHauteSaison = new Column(52, $prixSemaineHauteSaison);
        $this->prixQuinzaineHauteSaison = new Column(53, $prixQuinzaineHauteSaison);
        $this->prixMoisHauteSaison = new Column(54, $prixMoisHauteSaison);

        $this->nbPersonnes = new Column(55, $nbPersonnes);
        $this->residence = new Column(190, $residence);
        $this->typeResidence = new Column(56, $typeResidence);
    }

    public function getPeriodesDispo(): Column
    {
        return $this->periodesDispo;
    }

    public function getPeriodesBasseSaison(): Column
    {
        return $this->periodesBasseSaison;
    }

    public function getPrixSemaineBasseSaison(): Column
    {
        return $this->prixSemaineBasseSaison;
    }

    public function getPrixQuinzaineBasseSaison(): Column
    {
        return $this->prixQuinzaineBasseSaison;
    }

    public function getPrixMoisBasseSaison(): Column
    {
        return $this->prixMoisBasseSaison;
    }

    public function getPeriodesHauteSaison(): Column
    {
        return $this->periodesHauteSaison;
    }

    public function getPrixSemaineHauteSaison(): Column
    {
        return $this->prixSemaineHauteSaison;
    }

    public function getPrixQuinzaineHauteSaison(): Column
    {
        return $this->prixQuinzaineHauteSaison;
    }

    public function getPrixMoisHauteSaison(): Column
    {
        return $this->prixMoisHauteSaison;
    }

    public function getNbPersonnes(): Column
    {
        return $this->nbPersonnes;
    }

    public function getResidence(): Column
    {
        return $this->residence;
    }

    public function getTypeResidence(): Column
    {
        return $this->typeResidence;
    }

    public function toArray(): array
    {
        return [
            $this->getPeriodesDispo(),
            $this->getPeriodesBasseSaison(),
            $this->getPrixSemaineBasseSaison(),
            $this->getPrixQuinzaineBasseSaison(),
            $this->getPrixMoisBasseSaison(),
            $this->getPeriodesHauteSaison(),
            $this->getPrixSemaineHauteSaison(),
            $this->getPrixQuinzaineHauteSaison(),
            $this->getPrixMoisHauteSaison(),
            $this->getNbPersonnes(),
            $this->getResidence(),
            $this->getTypeResidence(),
        ];
    }
}
