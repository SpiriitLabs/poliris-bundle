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

class Localisation
{
    private Column $cp;
    private Column $ville;
    private Column $pays;
    private Column $adresse;
    private Column $quartierProximite;
    private Column $situation;
    private Column $procheLac;
    private Column $procheTennis;
    private Column $procheSki;
    private Column $cpReel;
    private Column $villeReelle;
    private Column $idQuartier;
    private Column $transportLigne;
    private Column $transportStation;
    private Column $latitude;
    private Column $longitude;
    private Column $precisionGps;
    private Column $localisation;

    public function __construct(
        $cp,
        $ville,
        $pays,
        $adresse,
        $quartierProximite,
        $situation,
        $procheLac,
        $procheTennis,
        $procheSki,
        $cpReel,
        $villeReelle,
        $idQuartier,
        $transportLigne,
        $transportStation,
        $latitude,
        $longitude,
        $precisionGps,
        $localisation
    ) {
        $this->cp = new Column(5, $cp);
        $this->ville = new Column(6, $ville);
        $this->pays = new Column(7, $pays);
        $this->adresse = new Column(8, $adresse);
        $this->quartierProximite = new Column(9, $quartierProximite);
        $this->situation = new Column(57, $situation);
        $this->procheLac = new Column(75, $procheLac);
        $this->procheTennis = new Column(76, $procheTennis);
        $this->procheSki = new Column(77, $procheSki);
        $this->cpReel = new Column(108, $cpReel);
        $this->villeReelle = new Column(109, $villeReelle);
        $this->idQuartier = new Column(180, $idQuartier);
        $this->transportLigne = new Column(193, $transportLigne);
        $this->transportStation = new Column(194, $transportStation);
        $this->latitude = new Column(298, $latitude);
        $this->longitude = new Column(299, $longitude);
        $this->precisionGps = new Column(300, $precisionGps);
        $this->localisation = new Column(322, $localisation);
    }

    public function getCp(): Column
    {
        return $this->cp;
    }

    public function getVille(): Column
    {
        return $this->ville;
    }

    public function getPays(): Column
    {
        return $this->pays;
    }

    public function getAdresse(): Column
    {
        return $this->adresse;
    }

    public function getQuartierProximite(): Column
    {
        return $this->quartierProximite;
    }

    public function getSituation(): Column
    {
        return $this->situation;
    }

    public function getProcheLac(): Column
    {
        return $this->procheLac;
    }

    public function getProcheTennis(): Column
    {
        return $this->procheTennis;
    }

    public function getProcheSki(): Column
    {
        return $this->procheSki;
    }

    public function getCpReel(): Column
    {
        return $this->cpReel;
    }

    public function getVilleReelle(): Column
    {
        return $this->villeReelle;
    }

    public function getIdQuartier(): Column
    {
        return $this->idQuartier;
    }

    public function getTransportLigne(): Column
    {
        return $this->transportLigne;
    }

    public function getTransportStation(): Column
    {
        return $this->transportStation;
    }

    public function getLatitude(): Column
    {
        return $this->latitude;
    }

    public function getLongitude(): Column
    {
        return $this->longitude;
    }

    public function getPrecisionGps(): Column
    {
        return $this->precisionGps;
    }

    public function getLocalisation(): Column
    {
        return $this->localisation;
    }

    public function toArray()
    {
        return [
            $this->getCp(),
            $this->getVille(),
            $this->getPays(),
            $this->getAdresse(),
            $this->getQuartierProximite(),
            $this->getSituation(),
            $this->getProcheLac(),
            $this->getProcheTennis(),
            $this->getProcheSki(),
            $this->getCpReel(),
            $this->getVilleReelle(),
            $this->getIdQuartier(),
            $this->getTransportLigne(),
            $this->getTransportStation(),
            $this->getLatitude(),
            $this->getLongitude(),
            $this->getPrecisionGps(),
            $this->getLocalisation(),
        ];
    }
}
