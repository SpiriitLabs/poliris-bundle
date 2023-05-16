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

class Langue
{
    private Column $code1;
    private Column $code2;
    private Column $code3;

    private Column $proximite1;
    private Column $proximite2;
    private Column $proximite3;

    private Column $label1;
    private Column $label2;
    private Column $label3;

    private Column $descriptif1;
    private Column $descriptif2;
    private Column $descriptif3;

    public function __construct(
        $code1,
        $code2,
        $code3,
        $proximite1,
        $proximite2,
        $proximite3,
        $label1,
        $label2,
        $label3,
        $descriptif1,
        $descriptif2,
        $descriptif3
    ) {
        $this->code1 = new Column(124, $code1);
        $this->code2 = new Column(128, $code2);
        $this->code3 = new Column(132, $code3);

        $this->proximite1 = new Column(125, $proximite1);
        $this->proximite2 = new Column(129, $proximite2);
        $this->proximite3 = new Column(133, $proximite3);

        $this->label1 = new Column(126, $label1);
        $this->label2 = new Column(130, $label2);
        $this->label3 = new Column(134, $label3);

        $this->descriptif1 = new Column(127, $descriptif1);
        $this->descriptif2 = new Column(131, $descriptif2);
        $this->descriptif3 = new Column(135, $descriptif3);
    }

    public function getCode1(): Column
    {
        return $this->code1;
    }

    public function getCode2(): Column
    {
        return $this->code2;
    }

    public function getCode3(): Column
    {
        return $this->code3;
    }

    public function getProximite1(): Column
    {
        return $this->proximite1;
    }

    public function getProximite2(): Column
    {
        return $this->proximite2;
    }

    public function getProximite3(): Column
    {
        return $this->proximite3;
    }

    public function getLabel1(): Column
    {
        return $this->label1;
    }

    public function getLabel2(): Column
    {
        return $this->label2;
    }

    public function getLabel3(): Column
    {
        return $this->label3;
    }

    public function getDescriptif1(): Column
    {
        return $this->descriptif1;
    }

    public function getDescriptif2(): Column
    {
        return $this->descriptif2;
    }

    public function getDescriptif3(): Column
    {
        return $this->descriptif3;
    }

    public function toArray(): array
    {
        return [
            $this->getCode1(),
            $this->getCode2(),
            $this->getCode3(),
            $this->getProximite1(),
            $this->getProximite2(),
            $this->getProximite3(),
            $this->getLabel1(),
            $this->getLabel2(),
            $this->getLabel3(),
            $this->getDescriptif1(),
            $this->getDescriptif2(),
            $this->getDescriptif3(),
        ];
    }
}
