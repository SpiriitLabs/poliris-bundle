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

class Interieur
{
    private Column $meuble;
    private Column $anneeConstruction;
    private Column $refaitNeuf;
    private Column $wcSepares;
    private Column $orientationSud;
    private Column $orientationEst;
    private Column $orientationOuest;
    private Column $orientationNord;
    private Column $cave;
    private Column $nbCouverts;
    private Column $nbLitsDoubles;
    private Column $nbLitsSimples;
    private Column $cableTv;
    private Column $cheminee;
    private Column $placards;
    private Column $tel;
    private Column $parquet;
    private Column $equipementBebe;
    private Column $connexionInternet;
    private Column $equipementVideo;
    private Column $mitoyennete;

    public function __construct(
        $meuble,
        $anneeConstruction,
        $refaitNeuf,
        $wcSepares,
        $orientationSud,
        $orientationEst,
        $orientationOuest,
        $orientationNord,
        $cave,
        $nbCouverts,
        $nbLitsDoubles,
        $nbLitsSimples,
        $cableTv,
        $cheminee,
        $placards,
        $tel,
        $parquet,
        $equipementBebe,
        $connexionInternet,
        $equipementVideo,
        $mitoyennete
    ) {
        $this->meuble = new Column(26, $meuble);
        $this->anneeConstruction = new Column(27, $anneeConstruction);
        $this->refaitNeuf = new Column(28, $refaitNeuf);
        $this->wcSepares = new Column(32, $wcSepares);
        $this->orientationSud = new Column(35, $orientationSud);
        $this->orientationEst = new Column(36, $orientationEst);
        $this->orientationOuest = new Column(37, $orientationOuest);
        $this->orientationNord = new Column(38, $orientationNord);
        $this->cave = new Column(42, $cave);
        $this->nbCouverts = new Column(58, $nbCouverts);
        $this->nbLitsDoubles = new Column(59, $nbLitsDoubles);
        $this->nbLitsSimples = new Column(60, $nbLitsSimples);
        $this->cableTv = new Column(62, $cableTv);
        $this->cheminee = new Column(68, $cheminee);
        $this->placards = new Column(73, $placards);
        $this->tel = new Column(74, $tel);
        $this->parquet = new Column(191, $parquet);
        $this->equipementBebe = new Column(222, $equipementBebe);
        $this->connexionInternet = new Column(235, $connexionInternet);
        $this->equipementVideo = new Column(251, $equipementVideo);
        $this->mitoyennete = new Column(320, $mitoyennete);
    }

    public function getMeuble(): Column
    {
        return $this->meuble;
    }

    public function getAnneeConstruction(): Column
    {
        return $this->anneeConstruction;
    }

    public function getRefaitNeuf(): Column
    {
        return $this->refaitNeuf;
    }

    public function getWcSepares(): Column
    {
        return $this->wcSepares;
    }

    public function getOrientationSud(): Column
    {
        return $this->orientationSud;
    }

    public function getOrientationEst(): Column
    {
        return $this->orientationEst;
    }

    public function getOrientationOuest(): Column
    {
        return $this->orientationOuest;
    }

    public function getOrientationNord(): Column
    {
        return $this->orientationNord;
    }

    public function getCave(): Column
    {
        return $this->cave;
    }

    public function getNbCouverts(): Column
    {
        return $this->nbCouverts;
    }

    public function getNbLitsDoubles(): Column
    {
        return $this->nbLitsDoubles;
    }

    public function getNbLitsSimples(): Column
    {
        return $this->nbLitsSimples;
    }

    public function getCableTv(): Column
    {
        return $this->cableTv;
    }

    public function getCheminee(): Column
    {
        return $this->cheminee;
    }

    public function getPlacards(): Column
    {
        return $this->placards;
    }

    public function getTel(): Column
    {
        return $this->tel;
    }

    public function getParquet(): Column
    {
        return $this->parquet;
    }

    public function getEquipementBebe(): Column
    {
        return $this->equipementBebe;
    }

    public function getConnexionInternet(): Column
    {
        return $this->connexionInternet;
    }

    public function getEquipementVideo(): Column
    {
        return $this->equipementVideo;
    }

    public function getMitoyennete(): Column
    {
        return $this->mitoyennete;
    }

    public function toArray()
    {
        return [
            $this->getMeuble(),
            $this->getAnneeConstruction(),
            $this->getRefaitNeuf(),
            $this->getWcSepares(),
            $this->getOrientationSud(),
            $this->getOrientationEst(),
            $this->getOrientationOuest(),
            $this->getOrientationNord(),
            $this->getCave(),
            $this->getNbCouverts(),
            $this->getNbLitsDoubles(),
            $this->getNbLitsSimples(),
            $this->getCableTv(),
            $this->getCheminee(),
            $this->getPlacards(),
            $this->getTel(),
            $this->getParquet(),
            $this->getEquipementBebe(),
            $this->getConnexionInternet(),
            $this->getEquipementVideo(),
            $this->getMitoyennete(),
        ];
    }
}
