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

class Prix
{
    private Column $prix;
    private Column $loyerMoisMur;
    private Column $loyerCC;
    private Column $loyerHT;
    private Column $depotGarantie;
    private Column $prixMasque;
    private Column $prixHT;
    private Column $copropriete;
    private Column $nbLots;
    private Column $syndicatCopro;
    private Column $syndicatCoproDetails;
    private Column $prixTerrain;
    private Column $prixModeleMaison;
    private Column $prixMin;
    private Column $prixMax;

    public function __construct(
        $prix,
        $loyerMoisMur,
        $loyerCC,
        $loyerHT,
        $depotGarantie,
        $prixMasque,
        $prixHT,
        $copropriete,
        $nbLots,
        $syndicatCopro,
        $syndicatCoproDetails,
        $prixTerrain,
        $prixModeleMaison,
        $prixMin,
        $prixMax
    ) {
        $this->prix = new Column(11, $prix);
        $this->loyerMoisMur = new Column(12, $loyerMoisMur);
        $this->loyerCC = new Column(13, $loyerCC);
        $this->loyerHT = new Column(14, $loyerHT);
        $this->depotGarantie = new Column(161, $depotGarantie);
        $this->prixMasque = new Column(201, $prixMasque);
        $this->prixHT = new Column(245, $prixHT);
        $this->copropriete = new Column(258, $copropriete);
        $this->nbLots = new Column(259, $nbLots);
        $this->syndicatCopro = new Column(261, $syndicatCopro);
        $this->syndicatCoproDetails = new Column(262, $syndicatCoproDetails);
        $this->prixTerrain = new Column(295, $prixTerrain);
        $this->prixModeleMaison = new Column(296, $prixModeleMaison);
        $this->prixMin = new Column(308, $prixMin);
        $this->prixMax = new Column(309, $prixMax);
    }

    public function getPrix(): Column
    {
        return $this->prix;
    }

    public function getLoyerMoisMur(): Column
    {
        return $this->loyerMoisMur;
    }

    public function getLoyerCC(): Column
    {
        return $this->loyerCC;
    }

    public function getLoyerHT(): Column
    {
        return $this->loyerHT;
    }

    public function getDepotGarantie(): Column
    {
        return $this->depotGarantie;
    }

    public function getPrixMasque(): Column
    {
        return $this->prixMasque;
    }

    public function getPrixHT(): Column
    {
        return $this->prixHT;
    }

    public function getCopropriete(): Column
    {
        return $this->copropriete;
    }

    public function getNbLots(): Column
    {
        return $this->nbLots;
    }

    public function getSyndicatCopro(): Column
    {
        return $this->syndicatCopro;
    }

    public function getSyndicatCoproDetails(): Column
    {
        return $this->syndicatCoproDetails;
    }

    public function getPrixTerrain(): Column
    {
        return $this->prixTerrain;
    }

    public function getPrixModeleMaison(): Column
    {
        return $this->prixModeleMaison;
    }

    public function getPrixMin(): Column
    {
        return $this->prixMin;
    }

    public function getPrixMax(): Column
    {
        return $this->prixMax;
    }

    public function toArray(): array
    {
        return [
            $this->getPrix(),
            $this->getLoyerMoisMur(),
            $this->getLoyerCC(),
            $this->getLoyerHT(),
            $this->getDepotGarantie(),
            $this->getPrixMasque(),
            $this->getPrixHT(),
            $this->getCopropriete(),
            $this->getNbLots(),
            $this->getSyndicatCopro(),
            $this->getSyndicatCoproDetails(),
            $this->getPrixTerrain(),
            $this->getPrixModeleMaison(),
            $this->getPrixMin(),
            $this->getPrixMax(),
        ];
    }
}
