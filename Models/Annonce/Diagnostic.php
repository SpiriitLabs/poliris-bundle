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

class Diagnostic
{
    public const DPE_VERSION_V01 = 'DPE_v01-2011';
    public const DPE_VERSION_V07 = 'DPE_v07-2021';

    public const CLASSIFICATION_VI = 'VI';
    public const CLASSIFICATION_NS = 'NS';

    private Column $recent;
    private Column $travaux;
    private Column $consoEnergie;
    private Column $bilanConsoEnergie;
    private Column $ges;
    private Column $bilanGes;
    private Column $dpeAt;
    private Column $dpeVersion;
    private Column $dpeMin;
    private Column $dpeMax;
    private Column $dpeAnneeRef;
    private Column $dpeCoutConsoAnnuelle;

    public function __construct(
        $recent,
        $travaux,
        $consoEnergie,
        $bilanConsoEnergie,
        $ges,
        $bilanGes,
        $dpeAt,
        $dpeVersion,
        $dpeMin,
        $dpeMax,
        $dpeAnneeRef,
        $dpeCoutConsoAnnuelle
    ) {
        $this->recent = new Column(162, $recent);
        $this->travaux = new Column(163, $travaux);
        $this->consoEnergie = new Column(176, $consoEnergie);
        $this->bilanConsoEnergie = new Column(177, $bilanConsoEnergie);
        $this->ges = new Column(178, $ges);
        $this->bilanGes = new Column(179, $bilanGes);
        $this->dpeAt = new Column(324, $dpeAt);
        $this->dpeVersion = new Column(325, $dpeVersion);
        $this->dpeMin = new Column(326, $dpeMin);
        $this->dpeMax = new Column(327, $dpeMax);
        $this->dpeAnneeRef = new Column(328, $dpeAnneeRef);
        $this->dpeCoutConsoAnnuelle = new Column(330, $dpeCoutConsoAnnuelle);
    }

    public function getRecent(): Column
    {
        return $this->recent;
    }

    public function getTravaux(): Column
    {
        return $this->travaux;
    }

    public function getConsoEnergie(): Column
    {
        return $this->consoEnergie;
    }

    public function getBilanConsoEnergie(): Column
    {
        return $this->bilanConsoEnergie;
    }

    public function getGes(): Column
    {
        return $this->ges;
    }

    public function getBilanGes(): Column
    {
        return $this->bilanGes;
    }

    public function getDpeAt(): Column
    {
        return $this->dpeAt;
    }

    public function getDpeVersion(): Column
    {
        return $this->dpeVersion;
    }

    public function getDpeMin(): Column
    {
        return $this->dpeMin;
    }

    public function getDpeMax(): Column
    {
        return $this->dpeMax;
    }

    public function getDpeAnneeRef(): Column
    {
        return $this->dpeAnneeRef;
    }

    public function getDpeCoutConsoAnnuelle(): Column
    {
        return $this->dpeCoutConsoAnnuelle;
    }

    public function toArray(): array
    {
        return [
            $this->getRecent(),
            $this->getTravaux(),
            $this->getConsoEnergie(),
            $this->getBilanConsoEnergie(),
            $this->getGes(),
            $this->getBilanGes(),
            $this->getDpeAt(),
            $this->getDpeVersion(),
            $this->getDpeMin(),
            $this->getDpeMax(),
            $this->getDpeAnneeRef(),
            $this->getDpeCoutConsoAnnuelle(),
        ];
    }
}
