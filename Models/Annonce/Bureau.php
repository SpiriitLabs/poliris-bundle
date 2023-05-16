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

class Bureau
{
    private Column $loyerAnnuelGlobal;
    private Column $loyerAnnuelM2;
    private Column $loyerAnnuelCC;
    private Column $loyerAnnuelM2CC;
    private Column $loyerAnnuelHT;
    private Column $loyerAnnuelM2HT;

    private Column $chargesAnnuellesGlobales;
    private Column $chargesAnnuellesM2;
    private Column $chargesMensuellesHT;
    private Column $chargesAnnuellesM2HT;
    private Column $chargesAnnuellesHT;

    private Column $divisible;
    private Column $surfaceDivisibleMin;
    private Column $surfaceDivisibleMax;

    private Column $conditionsFinancieres;
    private Column $prestationsDiverses;
    private Column $immeubleBureaux;
    private Column $surfaceMaxBureau;

    public function __construct(
        $loyerAnnuelGlobal,
        $loyerAnnuelM2,
        $loyerAnnuelCC,
        $loyerAnnuelM2CC,
        $loyerAnnuelHT,
        $loyerAnnuelM2HT,
        $chargesAnnuellesGlobales,
        $chargesAnnuellesM2,
        $chargesMensuellesHT,
        $chargesAnnuellesM2HT,
        $chargesAnnuellesHT,
        $divisible,
        $surfaceDivisibleMin,
        $surfaceDivisibleMax,
        $conditionsFinancieres,
        $prestationsDiverses,
        $immeubleBureaux,
        $surfaceMaxBureau
    ) {
        $this->loyerAnnuelGlobal = new Column(202, $loyerAnnuelGlobal);
        $this->chargesAnnuellesGlobales = new Column(203, $chargesAnnuellesGlobales);
        $this->loyerAnnuelM2 = new Column(204, $loyerAnnuelM2);
        $this->chargesAnnuellesM2 = new Column(205, $chargesAnnuellesM2);
        $this->chargesMensuellesHT = new Column(206, $chargesMensuellesHT);
        $this->loyerAnnuelCC = new Column(207, $loyerAnnuelCC);
        $this->loyerAnnuelHT = new Column(208, $loyerAnnuelHT);
        $this->chargesAnnuellesHT = new Column(209, $chargesAnnuellesHT);
        $this->loyerAnnuelM2CC = new Column(210, $loyerAnnuelM2CC);
        $this->loyerAnnuelM2HT = new Column(211, $loyerAnnuelM2HT);
        $this->chargesAnnuellesM2HT = new Column(212, $chargesAnnuellesM2HT);
        $this->divisible = new Column(213, $divisible);
        $this->surfaceDivisibleMin = new Column(214, $surfaceDivisibleMin);
        $this->surfaceDivisibleMax = new Column(215, $surfaceDivisibleMax);
        $this->conditionsFinancieres = new Column(238, $conditionsFinancieres);
        $this->prestationsDiverses = new Column(239, $prestationsDiverses);
        $this->immeubleBureaux = new Column(249, $immeubleBureaux);
        $this->surfaceMaxBureau = new Column(255, $surfaceMaxBureau);
    }

    public function getLoyerAnnuelGlobal(): Column
    {
        return $this->loyerAnnuelGlobal;
    }

    public function getLoyerAnnuelM2(): Column
    {
        return $this->loyerAnnuelM2;
    }

    public function getLoyerAnnuelCC(): Column
    {
        return $this->loyerAnnuelCC;
    }

    public function getLoyerAnnuelM2CC(): Column
    {
        return $this->loyerAnnuelM2CC;
    }

    public function getLoyerAnnuelHT(): Column
    {
        return $this->loyerAnnuelHT;
    }

    public function getLoyerAnnuelM2HT(): Column
    {
        return $this->loyerAnnuelM2HT;
    }

    public function getChargesAnnuellesGlobales(): Column
    {
        return $this->chargesAnnuellesGlobales;
    }

    public function getChargesAnnuellesM2(): Column
    {
        return $this->chargesAnnuellesM2;
    }

    public function getChargesMensuellesHT(): Column
    {
        return $this->chargesMensuellesHT;
    }

    public function getChargesAnnuellesM2HT(): Column
    {
        return $this->chargesAnnuellesM2HT;
    }

    public function getChargesAnnuellesHT(): Column
    {
        return $this->chargesAnnuellesHT;
    }

    public function getDivisible(): Column
    {
        return $this->divisible;
    }

    public function getSurfaceDivisibleMin(): Column
    {
        return $this->surfaceDivisibleMin;
    }

    public function getSurfaceDivisibleMax(): Column
    {
        return $this->surfaceDivisibleMax;
    }

    public function getConditionsFinancieres(): Column
    {
        return $this->conditionsFinancieres;
    }

    public function getPrestationsDiverses(): Column
    {
        return $this->prestationsDiverses;
    }

    public function getImmeubleBureaux(): Column
    {
        return $this->immeubleBureaux;
    }

    public function getSurfaceMaxBureau(): Column
    {
        return $this->surfaceMaxBureau;
    }

    public function toArray(): array
    {
        return [
            $this->getLoyerAnnuelGlobal(),
            $this->getLoyerAnnuelM2(),
            $this->getLoyerAnnuelCC(),
            $this->getLoyerAnnuelM2CC(),
            $this->getLoyerAnnuelHT(),
            $this->getLoyerAnnuelM2HT(),
            $this->getChargesAnnuellesGlobales(),
            $this->getChargesAnnuellesM2(),
            $this->getChargesMensuellesHT(),
            $this->getChargesAnnuellesM2HT(),
            $this->getChargesAnnuellesHT(),
            $this->getDivisible(),
            $this->getSurfaceDivisibleMin(),
            $this->getSurfaceDivisibleMax(),
            $this->getConditionsFinancieres(),
            $this->getPrestationsDiverses(),
            $this->getImmeubleBureaux(),
            $this->getSurfaceMaxBureau(),
        ];
    }
}
