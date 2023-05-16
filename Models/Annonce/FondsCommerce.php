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

class FondsCommerce
{
    private Column $ca;
    private Column $repartitionCa;
    private Column $natureBailCommercial;
    private Column $resultatAnneeN2;
    private Column $resultatAnneeN1;
    private Column $resultatActuel;
    private Column $caAnneeN2;
    private Column $caAnneeN1;

    public function __construct(
        $ca,
        $repartitionCa,
        $natureBailCommercial,
        $resultatAnneeN2,
        $resultatAnneeN1,
        $resultatActuel,
        $caAnneeN2,
        $caAnneeN1
    ) {
        $this->ca = new Column(79, $ca);
        $this->repartitionCa = new Column(220, $repartitionCa);
        $this->natureBailCommercial = new Column(243, $natureBailCommercial);
        $this->resultatAnneeN2 = new Column(224, $resultatAnneeN2);
        $this->resultatAnneeN1 = new Column(225, $resultatAnneeN1);
        $this->resultatActuel = new Column(226, $resultatActuel);
        $this->caAnneeN2 = new Column(236, $caAnneeN2);
        $this->caAnneeN1 = new Column(237, $caAnneeN1);
    }

    public function getCa(): Column
    {
        return $this->ca;
    }

    public function getRepartitionCa(): Column
    {
        return $this->repartitionCa;
    }

    public function getNatureBailCommercial(): Column
    {
        return $this->natureBailCommercial;
    }

    public function getResultatAnneeN2(): Column
    {
        return $this->resultatAnneeN2;
    }

    public function getResultatAnneeN1(): Column
    {
        return $this->resultatAnneeN1;
    }

    public function getResultatActuel(): Column
    {
        return $this->resultatActuel;
    }

    public function getCaAnneeN2(): Column
    {
        return $this->caAnneeN2;
    }

    public function getCaAnneeN1(): Column
    {
        return $this->caAnneeN1;
    }

    public function toArray(): array
    {
        return [
            $this->getCa(),
            $this->getRepartitionCa(),
            $this->getNatureBailCommercial(),
            $this->getResultatAnneeN2(),
            $this->getResultatAnneeN1(),
            $this->getResultatActuel(),
            $this->getCaAnneeN2(),
            $this->getCaAnneeN1(),
        ];
    }
}
