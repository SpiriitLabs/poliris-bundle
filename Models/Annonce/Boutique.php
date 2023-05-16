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

class Boutique
{
    private Column $quai;
    private Column $situationCommerciale;

    public function __construct(
        $quai,
        $situationCommerciale
    ) {
        $this->quai = new Column(198, $quai);
        $this->situationCommerciale = new Column(254, $situationCommerciale);
    }

    public function getQuai(): Column
    {
        return $this->quai;
    }

    public function getSituationCommerciale(): Column
    {
        return $this->situationCommerciale;
    }

    public function toArray(): array
    {
        return [
            $this->getQuai(),
            $this->getSituationCommerciale(),
        ];
    }
}
