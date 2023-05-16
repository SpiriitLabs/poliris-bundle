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

class Securite
{
    private Column $digicode;
    private Column $interphone;
    private Column $gardien;
    private Column $alarme;

    public function __construct(
        $digicode,
        $interphone,
        $gardien,
        $alarme
    ) {
        $this->digicode = new Column(45, $digicode);
        $this->interphone = new Column(46, $interphone);
        $this->gardien = new Column(47, $gardien);
        $this->alarme = new Column(61, $alarme);
    }

    public function getDigicode(): Column
    {
        return $this->digicode;
    }

    public function getInterphone(): Column
    {
        return $this->interphone;
    }

    public function getGardien(): Column
    {
        return $this->gardien;
    }

    public function getAlarme(): Column
    {
        return $this->alarme;
    }

    public function toArray(): array
    {
        return [
            $this->getDigicode(),
            $this->getInterphone(),
            $this->getGardien(),
            $this->getAlarme(),
        ];
    }
}
