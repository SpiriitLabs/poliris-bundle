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

class Garage
{
    private Column $garage;
    private Column $type;

    public function __construct($garage, $type)
    {
        $this->garage = new Column(318, $garage);
        $this->type = new Column(319, $type);
    }

    public function getGarage(): Column
    {
        return $this->garage;
    }

    public function getType(): Column
    {
        return $this->type;
    }

    public function toArray(): array
    {
        return [
            $this->getGarage(),
            $this->getType(),
        ];
    }
}
