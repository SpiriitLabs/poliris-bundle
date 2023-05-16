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

class Parking
{
    private Column $nbVehicules;
    private Column $immeuble;
    private Column $isole;

    public function __construct(
        $nbVehicules,
        $immeuble,
        $isole
    ) {
        $this->nbVehicules = new Column(217, $nbVehicules);
        $this->immeuble = new Column(227, $immeuble);
        $this->isole = new Column(228, $isole);
    }

    public function getNbVehicules(): Column
    {
        return $this->nbVehicules;
    }

    public function getImmeuble(): Column
    {
        return $this->immeuble;
    }

    public function getIsole(): Column
    {
        return $this->isole;
    }

    public function toArray(): array
    {
        return [
            $this->getNbVehicules(),
            $this->getImmeuble(),
            $this->getIsole(),
        ];
    }
}
