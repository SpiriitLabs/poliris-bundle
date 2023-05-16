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

class ProduitInvestissement
{
    private Column $valeurAchat;
    private Column $montantRapport;

    public function __construct($valeurAchat, $montantRapport)
    {
        $this->valeurAchat = new Column(219, $valeurAchat);
        $this->montantRapport = new Column(241, $montantRapport);
    }

    public function getValeurAchat(): Column
    {
        return $this->valeurAchat;
    }

    public function getMontantRapport(): Column
    {
        return $this->montantRapport;
    }

    public function toArray(): array
    {
        return [
            $this->getValeurAchat(),
            $this->getMontantRapport(),
        ];
    }
}
