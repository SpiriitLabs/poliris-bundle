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

class ChauffageClim
{
    // clim
    public const TYPE_CLIM_REVERSIBLE = 16384;

    // ***********************************************

    // individuel
    public const TYPE_INDIVIDUEL = 8192;
    public const TYPE_INDIVIDUEL_SOL = 8448;
    public const TYPE_INDIVIDUEL_RADIATEUR = 8320;

    // électricité
    public const TYPE_INDIVIDUEL_ELECTRIQUE = 10240;
    public const TYPE_INDIVIDUEL_ELECTRIQUE_SOL = 10496;
    public const TYPE_INDIVIDUEL_ELECTRIQUE_RADIATEUR = 10368;

    // fuel
    public const TYPE_INDIVIDUEL_FUEL = 9216;
    public const TYPE_INDIVIDUEL_FUEL_SOL = 9472;
    public const TYPE_INDIVIDUEL_FUEL_RADIATEUR = 9344;

    // gaz
    public const TYPE_INDIVIDUEL_GAZ = 8704;
    public const TYPE_INDIVIDUEL_GAZ_SOL = 8960;
    public const TYPE_INDIVIDUEL_GAZ_RADIATEUR = 8832;

    // ***********************************************

    // collectif
    public const TYPE_COLLECTIF = 4096;
    public const TYPE_COLLECTIF_SOL = 4352;
    public const TYPE_COLLECTIF_RADIATEUR = 4224;

    // électricité
    public const TYPE_COLLECTIF_ELECTRIQUE = 6144;
    public const TYPE_COLLECTIF_ELECTRIQUE_SOL = 6400;
    public const TYPE_COLLECTIF_ELECTRIQUE_RADIATEUR = 6272;

    // gaz
    public const TYPE_COLLECTIF_GAZ = 4608;
    public const TYPE_COLLECTIF_GAZ_SOL = 4864;
    public const TYPE_COLLECTIF_GAZ_RADIATEUR = 4736;

    // fuel
    public const TYPE_COLLECTIF_FUEL = 5120;
    public const TYPE_COLLECTIF_FUEL_SOL = 5376;
    public const TYPE_COLLECTIF_FUEL_RADIATEUR = 5248;

    // ***********************************************

    // urbain
    public const TYPE_RADIATEUR = 128;
    public const TYPE_SOL = 256;

    // gaz
    public const TYPE_GAZ = 512;
    public const TYPE_GAZ_RADIATEUR = 640;
    public const TYPE_GAZ_SOL = 768;

    // fuel
    public const TYPE_FUEL = 1024;
    public const TYPE_FUEL_SOL = 1280;
    public const TYPE_FUEL_RADIATEUR = 1152;

    // électricité
    public const TYPE_ELECTRIQUE = 2048;
    public const TYPE_ELECTRIQUE_SOL = 2304;
    public const TYPE_ELECTRIQUE_RADIATEUR = 2176;

    private Column $typeChauffage;
    private Column $clim;

    public function __construct($typeChauffage, $clim)
    {
        $this->typeChauffage = new Column(33, $typeChauffage);
        $this->clim = new Column(64, $clim);
    }

    public function getTypeChauffage(): Column
    {
        return $this->typeChauffage;
    }

    public function getClim(): Column
    {
        return $this->clim;
    }

    public function toArray(): array
    {
        return [
            $this->getTypeChauffage(),
            $this->getClim(),
        ];
    }
}
