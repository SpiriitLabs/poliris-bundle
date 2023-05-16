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

class Location
{
    private Column $dureeBail;
    private Column $prixDroitEntree;
    private Column $prixDroitBail;
    private Column $natureBail;
    private Column $complementLoyer;
    private Column $loyerBase;
    private Column $loyerReferenceMajore;
    private Column $encadrementLoyers;

    public function __construct(
        $dureeBail,
        $prixDroitEntree,
        $prixDroitBail,
        $natureBail,
        $complementLoyer,
        $loyerBase,
        $loyerReferenceMajore,
        $encadrementLoyers
    ) {
        $this->dureeBail = new Column(195, $dureeBail);
        $this->prixDroitEntree = new Column(200, $prixDroitEntree);
        $this->prixDroitBail = new Column(218, $prixDroitBail);
        $this->natureBail = new Column(242, $natureBail);
        $this->complementLoyer = new Column(305, $complementLoyer);
        $this->loyerBase = new Column(331, $loyerBase);
        $this->loyerReferenceMajore = new Column(332, $loyerReferenceMajore);
        $this->encadrementLoyers = new Column(333, $encadrementLoyers);
    }

    public function getDureeBail(): Column
    {
        return $this->dureeBail;
    }

    public function getPrixDroitEntree(): Column
    {
        return $this->prixDroitEntree;
    }

    public function getPrixDroitBail(): Column
    {
        return $this->prixDroitBail;
    }

    public function getNatureBail(): Column
    {
        return $this->natureBail;
    }

    public function getComplementLoyer(): Column
    {
        return $this->complementLoyer;
    }

    public function getLoyerBase(): Column
    {
        return $this->loyerBase;
    }

    public function getLoyerReferenceMajore(): Column
    {
        return $this->loyerReferenceMajore;
    }

    public function getEncadrementLoyers(): Column
    {
        return $this->encadrementLoyers;
    }

    public function toArray(): array
    {
        return [
            $this->getDureeBail(),
            $this->getPrixDroitEntree(),
            $this->getPrixDroitBail(),
            $this->getNatureBail(),
            $this->getComplementLoyer(),
            $this->getLoyerBase(),
            $this->getLoyerReferenceMajore(),
            $this->getEncadrementLoyers(),
        ];
    }
}
