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

class Exterieur
{
    private Column $ascenseur;
    private Column $calme;
    private Column $piscine;
    private Column $vueDegagee;
    private Column $entree;
    private Column $visAVis;
    private Column $monteCharge;

    public function __construct(
        $ascenseur,
        $calme,
        $piscine,
        $vueDegagee,
        $entree,
        $visAVis,
        $monteCharge
    ) {
        $this->ascenseur = new Column(41, $ascenseur);
        $this->calme = new Column(63, $calme);
        $this->piscine = new Column(65, $piscine);
        $this->vueDegagee = new Column(78, $vueDegagee);
        $this->entree = new Column(189, $entree);
        $this->visAVis = new Column(192, $visAVis);
        $this->monteCharge = new Column(197, $monteCharge);
    }

    public function getAscenseur(): Column
    {
        return $this->ascenseur;
    }

    public function getCalme(): Column
    {
        return $this->calme;
    }

    public function getPiscine(): Column
    {
        return $this->piscine;
    }

    public function getVueDegagee(): Column
    {
        return $this->vueDegagee;
    }

    public function getEntree(): Column
    {
        return $this->entree;
    }

    public function getVisAVis(): Column
    {
        return $this->visAVis;
    }

    public function getMonteCharge(): Column
    {
        return $this->monteCharge;
    }

    public function toArray(): array
    {
        return [
            $this->getAscenseur(),
            $this->getCalme(),
            $this->getPiscine(),
            $this->getVueDegagee(),
            $this->getEntree(),
            $this->getVisAVis(),
            $this->getMonteCharge(),
        ];
    }
}
