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

class Type
{
    private Column $type;
    private Column $sousType;

    public function __construct($type, $sousType)
    {
        $this->type = new Column(4, $type);
        $this->sousType = new Column(181, $sousType);
    }

    public function getType(): Column
    {
        return $this->type;
    }

    public function getSousType(): Column
    {
        return $this->sousType;
    }

    public function toArray(): array
    {
        return [
            $this->getType(),
            $this->getSousType(),
        ];
    }
}
