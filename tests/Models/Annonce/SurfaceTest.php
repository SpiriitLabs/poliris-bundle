<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Models\Annonce;

use PHPUnit\Framework\TestCase;
use Spiriit\PolirisBundle\Models\Annonce\Surface;

class SurfaceTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_surface()
    {
        $surface = new Surface(
            $surf = 1,
            $surfaceTerrain = 2,
            $nbPieces = 3,
            $nbChambres = 4,
            $nbSdb = 5,
            $nbSalleEau = 6,
            $nbWc = 7,
            $nbBalcons = 8,
            $surfaceBalcon = 26,
            $nbParkings = 9,
            $nbBoxes = 10,
            $terrasse = true,
            $longueurFacade = 11,
            $placesEnSalle = 12,
            $nbBureaux = 13,
            $surfaceSejour = 14,
            $nbTerrasses = 15,
            $surfaceCave = 16,
            $surfaceSalleManger = 17,
            $surfaceMin = 18,
            $surfaceMax = 19,
            $nbPiecesMin = 20,
            $nbPiecesMax = 21,
            $nbChambresMin = 22,
            $nbChambresMax = 23,
            $comblesAmenageables = false,
            $surfaceTerrainNecessaire = 24,
            $surfaceTerrasse = 25
        );

        self::assertEquals($surf, $surface->getSurface()->getVal());
        self::assertEquals($surfaceTerrain, $surface->getSurfaceTerrain()->getVal());
        self::assertEquals($nbPieces, $surface->getNbPieces()->getVal());
        self::assertEquals($nbChambres, $surface->getNbChambres()->getVal());
        self::assertEquals($nbSdb, $surface->getNbSdb()->getVal());
        self::assertEquals($nbSalleEau, $surface->getNbSalleEau()->getVal());
        self::assertEquals($nbWc, $surface->getNbWc()->getVal());
        self::assertEquals($nbBalcons, $surface->getNbBalcons()->getVal());
        self::assertEquals($surfaceBalcon, $surface->getSurfaceBalcon()->getVal());
        self::assertEquals($nbParkings, $surface->getNbParkings()->getVal());
        self::assertEquals($nbBoxes, $surface->getNbBoxes()->getVal());
        self::assertEquals($terrasse, $surface->getTerrasse()->getVal());
        self::assertEquals($longueurFacade, $surface->getLongueurFacade()->getVal());
        self::assertEquals($placesEnSalle, $surface->getPlacesEnSalle()->getVal());
        self::assertEquals($nbBureaux, $surface->getNbBureaux()->getVal());
        self::assertEquals($surfaceSejour, $surface->getSurfaceSejour()->getVal());
        self::assertEquals($nbTerrasses, $surface->getNbTerrasses()->getVal());
        self::assertEquals($surfaceCave, $surface->getSurfaceCave()->getVal());
        self::assertEquals($surfaceSalleManger, $surface->getSurfaceSalleManger()->getVal());
        self::assertEquals($surfaceMin, $surface->getSurfaceMin()->getVal());
        self::assertEquals($surfaceMax, $surface->getSurfaceMax()->getVal());
        self::assertEquals($nbPiecesMin, $surface->getNbPiecesMin()->getVal());
        self::assertEquals($nbPiecesMax, $surface->getNbPiecesMax()->getVal());
        self::assertEquals($nbChambresMin, $surface->getNbChambresMin()->getVal());
        self::assertEquals($nbChambresMax, $surface->getNbChambresMax()->getVal());
        self::assertEquals($comblesAmenageables, $surface->getComblesAmenageables()->getVal());
        self::assertEquals($surfaceTerrainNecessaire, $surface->getSurfaceTerrainNecessaire()->getVal());
        self::assertEquals($surfaceTerrasse, $surface->getSurfaceTerrasse()->getVal());

        $expectedArray = [
            $surface->getSurface(),
            $surface->getSurfaceTerrain(),
            $surface->getNbPieces(),
            $surface->getNbChambres(),
            $surface->getNbSdb(),
            $surface->getNbSalleEau(),
            $surface->getNbWc(),
            $surface->getNbBalcons(),
            $surface->getSurfaceBalcon(),
            $surface->getNbParkings(),
            $surface->getNbBoxes(),
            $surface->getTerrasse(),
            $surface->getLongueurFacade(),
            $surface->getPlacesEnSalle(),
            $surface->getNbBureaux(),
            $surface->getSurfaceSejour(),
            $surface->getNbTerrasses(),
            $surface->getSurfaceCave(),
            $surface->getSurfaceSalleManger(),
            $surface->getSurfaceMin(),
            $surface->getSurfaceMax(),
            $surface->getNbPiecesMin(),
            $surface->getNbPiecesMax(),
            $surface->getNbChambresMin(),
            $surface->getNbChambresMax(),
            $surface->getComblesAmenageables(),
            $surface->getSurfaceTerrainNecessaire(),
            $surface->getSurfaceTerrasse(),
        ];

        self::assertEquals($expectedArray, $surface->toArray());
    }
}
