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

class Publication
{
    private Column $publications;
    private Column $coupDeCoeur;
    private Column $versionFormat;

    public function __construct(
        $publications,
        $coupDeCoeur,
        $versionFormat
    ) {
        $this->publications = new Column(82, $publications);
        $this->coupDeCoeur = new Column(84, $coupDeCoeur);
        $this->versionFormat = new Column(301, $versionFormat);
    }

    public function getPublications(): Column
    {
        return $this->publications;
    }

    public function getCoupDeCoeur(): Column
    {
        return $this->coupDeCoeur;
    }

    public function getVersionFormat(): Column
    {
        return $this->versionFormat;
    }

    public function toArray(): array
    {
        return [
            $this->getPublications(),
            $this->getCoupDeCoeur(),
            $this->getVersionFormat(),
        ];
    }
}
