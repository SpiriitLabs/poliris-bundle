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

class Mandat
{
    private Column $exclusif;
    private Column $numero;
    private Column $date;
    private Column $nomMandataire;
    private Column $prenomMandataire;
    private Column $raisonSocialeMandataire;
    private Column $adresseMandataire;
    private Column $codePostalMandataire;
    private Column $villeMandataire;
    private Column $telMandataire;
    private Column $commMandataire;

    public function __construct(
        $exclusif,
        $numero,
        $date,
        $nomMandataire,
        $prenomMandataire,
        $raisonSocialeMandataire,
        $adresseMandataire,
        $codePostalMandataire,
        $villeMandataire,
        $telMandataire,
        $commMandataire
    ) {
        $this->exclusif = new Column(83, $exclusif);
        $this->numero = new Column(112, $numero);
        $this->date = new Column(113, $date);
        $this->nomMandataire = new Column(114, $nomMandataire);
        $this->prenomMandataire = new Column(115, $prenomMandataire);
        $this->raisonSocialeMandataire = new Column(116, $raisonSocialeMandataire);
        $this->adresseMandataire = new Column(117, $adresseMandataire);
        $this->codePostalMandataire = new Column(118, $codePostalMandataire);
        $this->villeMandataire = new Column(119, $villeMandataire);
        $this->telMandataire = new Column(120, $telMandataire);
        $this->commMandataire = new Column(121, $commMandataire);
    }

    public function getExclusif(): Column
    {
        return $this->exclusif;
    }

    public function getNumero(): Column
    {
        return $this->numero;
    }

    public function getDate(): Column
    {
        return $this->date;
    }

    public function getNomMandataire(): Column
    {
        return $this->nomMandataire;
    }

    public function getPrenomMandataire(): Column
    {
        return $this->prenomMandataire;
    }

    public function getRaisonSocialeMandataire(): Column
    {
        return $this->raisonSocialeMandataire;
    }

    public function getAdresseMandataire(): Column
    {
        return $this->adresseMandataire;
    }

    public function getCodePostalMandataire(): Column
    {
        return $this->codePostalMandataire;
    }

    public function getVilleMandataire(): Column
    {
        return $this->villeMandataire;
    }

    public function getTelMandataire(): Column
    {
        return $this->telMandataire;
    }

    public function getCommMandataire(): Column
    {
        return $this->commMandataire;
    }

    public function toArray(): array
    {
        return [
            $this->getExclusif(),
            $this->getNumero(),
            $this->getDate(),
            $this->getNomMandataire(),
            $this->getPrenomMandataire(),
            $this->getRaisonSocialeMandataire(),
            $this->getAdresseMandataire(),
            $this->getCodePostalMandataire(),
            $this->getVilleMandataire(),
            $this->getTelMandataire(),
            $this->getCommMandataire(),
        ];
    }
}
