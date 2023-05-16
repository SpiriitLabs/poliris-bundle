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

class Etage
{
    public const TYPE_RDC_RDJ = 0;
    public const TYPE_PREMIER_ETAGE = 1;

    private Column $etage;
    private Column $nbEtages;
    private Column $idTypeEtage;

    public function __construct(
        $etage,
        $nbEtages,
        $idTypeEtage
    ) {
        $this->etage = new Column(24, $etage);
        $this->nbEtages = new Column(25, $nbEtages);
        $this->idTypeEtage = new Column(316, $idTypeEtage);
    }

    public function getEtage(): Column
    {
        return $this->etage;
    }

    public function getNbEtages(): Column
    {
        return $this->nbEtages;
    }

    public function getIdTypeEtage(): Column
    {
        return $this->idTypeEtage;
    }

    public function toArray(): array
    {
        return [
            $this->getEtage(),
            $this->getNbEtages(),
            $this->getIdTypeEtage(),
        ];
    }
}
