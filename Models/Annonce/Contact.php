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

class Contact
{
    private Column $tel;
    private Column $fullName;
    private Column $email;
    private Column $interCabinet;
    private Column $interCabinetPrive;
    private Column $codeNego;
    private Column $agenceTerrain;

    public function __construct(
        $tel,
        $fullName,
        $email,
        $interCabinet,
        $interCabinetPrive,
        $codeNego,
        $agenceTerrain
    ) {
        $this->tel = new Column(105, $tel);
        $this->fullName = new Column(106, $fullName);
        $this->email = new Column(107, $email);
        $this->interCabinet = new Column(110, $interCabinet);
        $this->interCabinetPrive = new Column(111, $interCabinetPrive);
        $this->codeNego = new Column(123, $codeNego);
        $this->agenceTerrain = new Column(297, $agenceTerrain);
    }

    public function getTel(): Column
    {
        return $this->tel;
    }

    public function getFullName(): Column
    {
        return $this->fullName;
    }

    public function getEmail(): Column
    {
        return $this->email;
    }

    public function getInterCabinet(): Column
    {
        return $this->interCabinet;
    }

    public function getInterCabinetPrive(): Column
    {
        return $this->interCabinetPrive;
    }

    public function getCodeNego(): Column
    {
        return $this->codeNego;
    }

    public function getAgenceTerrain(): Column
    {
        return $this->agenceTerrain;
    }

    public function toArray(): array
    {
        return [
            $this->getTel(),
            $this->getFullName(),
            $this->getEmail(),
            $this->getInterCabinet(),
            $this->getInterCabinetPrive(),
            $this->getCodeNego(),
            $this->getAgenceTerrain(),
        ];
    }
}
