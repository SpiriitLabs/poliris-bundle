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

class Surface
{
    private Column $surface;
    private Column $surfaceTerrain;
    private Column $nbPieces;
    private Column $nbChambres;
    private Column $nbSdb;
    private Column $nbSalleEau;
    private Column $nbWc;
    private Column $nbBalcons;
    private Column $surfaceBalcon;
    private Column $nbParkings;
    private Column $nbBoxes;
    private Column $terrasse;
    private Column $longueurFacade;
    private Column $placesEnSalle;
    private Column $nbBureaux;
    private Column $surfaceSejour;
    private Column $nbTerrasses;
    private Column $surfaceCave;
    private Column $surfaceSalleManger;
    private Column $surfaceMin;
    private Column $surfaceMax;
    private Column $nbPiecesMin;
    private Column $nbPiecesMax;
    private Column $nbChambresMin;
    private Column $nbChambresMax;
    private Column $comblesAmenageables;
    private Column $surfaceTerrainNecessaire;
    private Column $surfaceTerrasse;

    public function __construct(
        $surface,
        $surfaceTerrain,
        $nbPieces,
        $nbChambres,
        $nbSdb,
        $nbSalleEau,
        $nbWc,
        $nbBalcons,
        $surfaceBalcon,
        $nbParkings,
        $nbBoxes,
        $terrasse,
        $longueurFacade,
        $placesEnSalle,
        $nbBureaux,
        $surfaceSejour,
        $nbTerrasses,
        $surfaceCave,
        $surfaceSalleManger,
        $surfaceMin,
        $surfaceMax,
        $nbPiecesMin,
        $nbPiecesMax,
        $nbChambresMin,
        $nbChambresMax,
        $comblesAmenageables,
        $surfaceTerrainNecessaire,
        $surfaceTerrasse
    ) {
        $this->surface = new Column(16, $surface);
        $this->surfaceTerrain = new Column(17, $surfaceTerrain);
        $this->nbPieces = new Column(18, $nbPieces);
        $this->nbChambres = new Column(19, $nbChambres);
        $this->nbSdb = new Column(29, $nbSdb);
        $this->nbSalleEau = new Column(30, $nbSalleEau);
        $this->nbWc = new Column(31, $nbWc);
        $this->nbBalcons = new Column(39, $nbBalcons);
        $this->surfaceBalcon = new Column(40, $surfaceBalcon);
        $this->nbParkings = new Column(43, $nbParkings);
        $this->nbBoxes = new Column(44, $nbBoxes);
        $this->terrasse = new Column(48, $terrasse);
        $this->longueurFacade = new Column(80, $longueurFacade);
        $this->placesEnSalle = new Column(196, $placesEnSalle);
        $this->nbBureaux = new Column(199, $nbBureaux);
        $this->surfaceSejour = new Column(216, $surfaceSejour);
        $this->nbTerrasses = new Column(244, $nbTerrasses);
        $this->surfaceCave = new Column(252, $surfaceCave);
        $this->surfaceSalleManger = new Column(253, $surfaceSalleManger);
        $this->surfaceMin = new Column(310, $surfaceMin);
        $this->surfaceMax = new Column(311, $surfaceMax);
        $this->nbPiecesMin = new Column(312, $nbPiecesMin);
        $this->nbPiecesMax = new Column(313, $nbPiecesMax);
        $this->nbChambresMin = new Column(314, $nbChambresMin);
        $this->nbChambresMax = new Column(315, $nbChambresMax);
        $this->comblesAmenageables = new Column(317, $comblesAmenageables);
        $this->surfaceTerrainNecessaire = new Column(321, $surfaceTerrainNecessaire);
        $this->surfaceTerrasse = new Column(329, $surfaceTerrasse);
    }

    public function getSurface(): Column
    {
        return $this->surface;
    }

    public function getSurfaceTerrain(): Column
    {
        return $this->surfaceTerrain;
    }

    public function getNbPieces(): Column
    {
        return $this->nbPieces;
    }

    public function getNbChambres(): Column
    {
        return $this->nbChambres;
    }

    public function getNbSdb(): Column
    {
        return $this->nbSdb;
    }

    public function getNbSalleEau(): Column
    {
        return $this->nbSalleEau;
    }

    public function getNbWc(): Column
    {
        return $this->nbWc;
    }

    public function getNbBalcons(): Column
    {
        return $this->nbBalcons;
    }

    public function getSurfaceBalcon(): Column
    {
        return $this->surfaceBalcon;
    }

    public function getNbParkings(): Column
    {
        return $this->nbParkings;
    }

    public function getNbBoxes(): Column
    {
        return $this->nbBoxes;
    }

    public function getTerrasse(): Column
    {
        return $this->terrasse;
    }

    public function getLongueurFacade(): Column
    {
        return $this->longueurFacade;
    }

    public function getPlacesEnSalle(): Column
    {
        return $this->placesEnSalle;
    }

    public function getNbBureaux(): Column
    {
        return $this->nbBureaux;
    }

    public function getSurfaceSejour(): Column
    {
        return $this->surfaceSejour;
    }

    public function getNbTerrasses(): Column
    {
        return $this->nbTerrasses;
    }

    public function getSurfaceCave(): Column
    {
        return $this->surfaceCave;
    }

    public function getSurfaceSalleManger(): Column
    {
        return $this->surfaceSalleManger;
    }

    public function getSurfaceMin(): Column
    {
        return $this->surfaceMin;
    }

    public function getSurfaceMax(): Column
    {
        return $this->surfaceMax;
    }

    public function getNbPiecesMin(): Column
    {
        return $this->nbPiecesMin;
    }

    public function getNbPiecesMax(): Column
    {
        return $this->nbPiecesMax;
    }

    public function getNbChambresMin(): Column
    {
        return $this->nbChambresMin;
    }

    public function getNbChambresMax(): Column
    {
        return $this->nbChambresMax;
    }

    public function getComblesAmenageables(): Column
    {
        return $this->comblesAmenageables;
    }

    public function getSurfaceTerrainNecessaire(): Column
    {
        return $this->surfaceTerrainNecessaire;
    }

    public function getSurfaceTerrasse(): Column
    {
        return $this->surfaceTerrasse;
    }

    public function toArray(): array
    {
        return [
            $this->getSurface(),
            $this->getSurfaceTerrain(),
            $this->getNbPieces(),
            $this->getNbChambres(),
            $this->getNbSdb(),
            $this->getNbSalleEau(),
            $this->getNbWc(),
            $this->getNbBalcons(),
            $this->getSurfaceBalcon(),
            $this->getNbParkings(),
            $this->getNbBoxes(),
            $this->getTerrasse(),
            $this->getLongueurFacade(),
            $this->getPlacesEnSalle(),
            $this->getNbBureaux(),
            $this->getSurfaceSejour(),
            $this->getNbTerrasses(),
            $this->getSurfaceCave(),
            $this->getSurfaceSalleManger(),
            $this->getSurfaceMin(),
            $this->getSurfaceMax(),
            $this->getNbPiecesMin(),
            $this->getNbPiecesMax(),
            $this->getNbChambresMin(),
            $this->getNbChambresMax(),
            $this->getComblesAmenageables(),
            $this->getSurfaceTerrainNecessaire(),
            $this->getSurfaceTerrasse(),
        ];
    }
}
