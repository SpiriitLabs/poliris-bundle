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

class Detail
{
    private Column $activitesCommerciales;
    private Column $label;
    private Column $description;
    private Column $dateDispo;
    private Column $amenagementHandicapes;
    private Column $animauxAcceptes;
    private Column $duplex;
    private Column $commPrives;
    private Column $logementADisposition;
    private Column $nomModele;

    public function __construct(
        $activitesCommerciales,
        $label,
        $description,
        $dateDispo,
        $amenagementHandicapes,
        $animauxAcceptes,
        $duplex,
        $commPrives,
        $logementADisposition,
        $nomModele
    ) {
        $this->activitesCommerciales = new Column(10, $activitesCommerciales);
        $this->label = new Column(20, $label);
        $this->description = new Column(21, $description);
        $this->dateDispo = new Column(22, $dateDispo);
        $this->amenagementHandicapes = new Column(66, $amenagementHandicapes);
        $this->animauxAcceptes = new Column(67, $animauxAcceptes);
        $this->duplex = new Column(81, $duplex);
        $this->commPrives = new Column(122, $commPrives);
        $this->logementADisposition = new Column(230, $logementADisposition);
        $this->nomModele = new Column(323, $nomModele);
    }

    public function getActivitesCommerciales(): Column
    {
        return $this->activitesCommerciales;
    }

    public function getLabel(): Column
    {
        return $this->label;
    }

    public function getDescription(): Column
    {
        return $this->description;
    }

    public function getDateDispo(): Column
    {
        return $this->dateDispo;
    }

    public function getAmenagementHandicapes(): Column
    {
        return $this->amenagementHandicapes;
    }

    public function getAnimauxAcceptes(): Column
    {
        return $this->animauxAcceptes;
    }

    public function getDuplex(): Column
    {
        return $this->duplex;
    }

    public function getCommPrives(): Column
    {
        return $this->commPrives;
    }

    public function getLogementADisposition(): Column
    {
        return $this->logementADisposition;
    }

    public function getNomModele(): Column
    {
        return $this->nomModele;
    }

    public function toArray(): array
    {
        return [
            $this->getActivitesCommerciales(),
            $this->getLabel(),
            $this->getDescription(),
            $this->getDateDispo(),
            $this->getAmenagementHandicapes(),
            $this->getAnimauxAcceptes(),
            $this->getDuplex(),
            $this->getCommPrives(),
            $this->getLogementADisposition(),
            $this->getNomModele(),
        ];
    }
}
