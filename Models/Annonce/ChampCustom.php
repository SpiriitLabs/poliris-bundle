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

class ChampCustom
{
    private Column $champ1;
    private Column $champ2;
    private Column $champ3;
    private Column $champ4;
    private Column $champ5;
    private Column $champ6;
    private Column $champ7;
    private Column $champ8;
    private Column $champ9;
    private Column $champ10;
    private Column $champ11;
    private Column $champ12;
    private Column $champ13;
    private Column $champ14;
    private Column $champ15;
    private Column $champ16;
    private Column $champ17;
    private Column $champ18;
    private Column $champ19;
    private Column $champ20;
    private Column $champ21;
    private Column $champ22;
    private Column $champ23;
    private Column $champ24;
    private Column $champ25;
    private Column $champ26;

    public function __construct(
        $champ1,
        $champ2,
        $champ3,
        $champ4,
        $champ5,
        $champ6,
        $champ7,
        $champ8,
        $champ9,
        $champ10,
        $champ11,
        $champ12,
        $champ13,
        $champ14,
        $champ15,
        $champ16,
        $champ17,
        $champ18,
        $champ19,
        $champ20,
        $champ21,
        $champ22,
        $champ23,
        $champ24,
        $champ25,
        $champ26
    ) {
        $this->champ1 = new Column(136, $champ1);
        $this->champ2 = new Column(137, $champ2);
        $this->champ3 = new Column(138, $champ3);
        $this->champ4 = new Column(139, $champ4);
        $this->champ5 = new Column(140, $champ5);
        $this->champ6 = new Column(141, $champ6);
        $this->champ7 = new Column(142, $champ7);
        $this->champ8 = new Column(143, $champ8);
        $this->champ9 = new Column(144, $champ9);
        $this->champ10 = new Column(145, $champ10);
        $this->champ11 = new Column(146, $champ11);
        $this->champ12 = new Column(147, $champ12);
        $this->champ13 = new Column(148, $champ13);
        $this->champ14 = new Column(149, $champ14);
        $this->champ15 = new Column(150, $champ15);
        $this->champ16 = new Column(151, $champ16);
        $this->champ17 = new Column(152, $champ17);
        $this->champ18 = new Column(153, $champ18);
        $this->champ19 = new Column(154, $champ19);
        $this->champ20 = new Column(155, $champ20);
        $this->champ21 = new Column(156, $champ21);
        $this->champ22 = new Column(157, $champ22);
        $this->champ23 = new Column(158, $champ23);
        $this->champ24 = new Column(159, $champ24);
        $this->champ25 = new Column(160, $champ25);
        $this->champ26 = new Column(263, $champ26);
    }

    public function getChamp1(): Column
    {
        return $this->champ1;
    }

    public function getChamp2(): Column
    {
        return $this->champ2;
    }

    public function getChamp3(): Column
    {
        return $this->champ3;
    }

    public function getChamp4(): Column
    {
        return $this->champ4;
    }

    public function getChamp5(): Column
    {
        return $this->champ5;
    }

    public function getChamp6(): Column
    {
        return $this->champ6;
    }

    public function getChamp7(): Column
    {
        return $this->champ7;
    }

    public function getChamp8(): Column
    {
        return $this->champ8;
    }

    public function getChamp9(): Column
    {
        return $this->champ9;
    }

    public function getChamp10(): Column
    {
        return $this->champ10;
    }

    public function getChamp11(): Column
    {
        return $this->champ11;
    }

    public function getChamp12(): Column
    {
        return $this->champ12;
    }

    public function getChamp13(): Column
    {
        return $this->champ13;
    }

    public function getChamp14(): Column
    {
        return $this->champ14;
    }

    public function getChamp15(): Column
    {
        return $this->champ15;
    }

    public function getChamp16(): Column
    {
        return $this->champ16;
    }

    public function getChamp17(): Column
    {
        return $this->champ17;
    }

    public function getChamp18(): Column
    {
        return $this->champ18;
    }

    public function getChamp19(): Column
    {
        return $this->champ19;
    }

    public function getChamp20(): Column
    {
        return $this->champ20;
    }

    public function getChamp21(): Column
    {
        return $this->champ21;
    }

    public function getChamp22(): Column
    {
        return $this->champ22;
    }

    public function getChamp23(): Column
    {
        return $this->champ23;
    }

    public function getChamp24(): Column
    {
        return $this->champ24;
    }

    public function getChamp25(): Column
    {
        return $this->champ25;
    }

    public function getChamp26(): Column
    {
        return $this->champ26;
    }

    public function toArray(): array
    {
        return [
            $this->getChamp1(),
            $this->getChamp2(),
            $this->getChamp3(),
            $this->getChamp4(),
            $this->getChamp5(),
            $this->getChamp6(),
            $this->getChamp7(),
            $this->getChamp8(),
            $this->getChamp9(),
            $this->getChamp10(),
            $this->getChamp11(),
            $this->getChamp12(),
            $this->getChamp13(),
            $this->getChamp14(),
            $this->getChamp15(),
            $this->getChamp16(),
            $this->getChamp17(),
            $this->getChamp18(),
            $this->getChamp19(),
            $this->getChamp20(),
            $this->getChamp21(),
            $this->getChamp22(),
            $this->getChamp23(),
            $this->getChamp24(),
            $this->getChamp25(),
            $this->getChamp26(),
        ];
    }
}
