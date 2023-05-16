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

class Terrain
{
    private Column $agricole;
    private Column $constructible;
    private Column $pente;
    private Column $planEau;
    private Column $longueurFacade;
    private Column $donneSurLaRue;
    private Column $viabilise;

    public function __construct(
        $agricole,
        $constructible,
        $pente,
        $planEau,
        $longueurFacade,
        $donneSurLaRue,
        $viabilise
    ) {
        $this->agricole = new Column(221, $agricole);
        $this->constructible = new Column(223, $constructible);
        $this->pente = new Column(231, $pente);
        $this->planEau = new Column(232, $planEau);
        $this->longueurFacade = new Column(240, $longueurFacade);
        $this->donneSurLaRue = new Column(248, $donneSurLaRue);
        $this->viabilise = new Column(250, $viabilise);
    }

    public function getAgricole(): Column
    {
        return $this->agricole;
    }

    public function getConstructible(): Column
    {
        return $this->constructible;
    }

    public function getPente(): Column
    {
        return $this->pente;
    }

    public function getPlanEau(): Column
    {
        return $this->planEau;
    }

    public function getLongueurFacade(): Column
    {
        return $this->longueurFacade;
    }

    public function getDonneSurLaRue(): Column
    {
        return $this->donneSurLaRue;
    }

    public function getViabilise(): Column
    {
        return $this->viabilise;
    }

    public function toArray(): array
    {
        return [
            $this->getAgricole(),
            $this->getConstructible(),
            $this->getPente(),
            $this->getPlanEau(),
            $this->getLongueurFacade(),
            $this->getDonneSurLaRue(),
            $this->getViabilise(),
        ];
    }
}
