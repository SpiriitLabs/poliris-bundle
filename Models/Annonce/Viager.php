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

class Viager
{
    private Column $prixBouquet;
    private Column $renteMensuelle;
    private Column $ageHomme;
    private Column $ageFemme;
    private Column $venduLibre;

    public function __construct(
        $prixBouquet,
        $renteMensuelle,
        $ageHomme,
        $ageFemme,
        $venduLibre
    ) {
        $this->prixBouquet = new Column(185, $prixBouquet);
        $this->renteMensuelle = new Column(186, $renteMensuelle);
        $this->ageHomme = new Column(187, $ageHomme);
        $this->ageFemme = new Column(188, $ageFemme);
        $this->venduLibre = new Column(229, $venduLibre);
    }

    public function getPrixBouquet(): Column
    {
        return $this->prixBouquet;
    }

    public function getRenteMensuelle(): Column
    {
        return $this->renteMensuelle;
    }

    public function getAgeHomme(): Column
    {
        return $this->ageHomme;
    }

    public function getAgeFemme(): Column
    {
        return $this->ageFemme;
    }

    public function getVenduLibre(): Column
    {
        return $this->venduLibre;
    }

    public function toArray(): array
    {
        return [
            $this->getPrixBouquet(),
            $this->getRenteMensuelle(),
            $this->getAgeHomme(),
            $this->getAgeFemme(),
            $this->getVenduLibre(),
        ];
    }
}
