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

class PartieJour
{
    public const TYPE_CUISINE_AUCUNE = 1;
    public const TYPE_CUISINE_AMERICAINE = 2;
    public const TYPE_CUISINE_SEPAREE = 3;
    public const TYPE_CUISINE_COIN_CUISINE = 5;
    public const TYPE_CUISINE_AMERICAINE_EQUIPEE = 6;
    public const TYPE_CUISINE_SEPAREE_EQUIPEE = 7;
    public const TYPE_CUISINE_COIN_CUISINE_EQUIPE = 8;
    public const TYPE_CUISINE_EQUIPEE = 9;

    private Column $typeCuisine;
    private Column $congelateur;
    private Column $four;
    private Column $laveVaisselle;
    private Column $microOndes;
    private Column $laveLinge;
    private Column $secheLinge;
    private Column $salleManger;
    private Column $sejour;

    public function __construct(
        $typeCuisine,
        $congelateur,
        $four,
        $laveVaisselle,
        $microOndes,
        $laveLinge,
        $secheLinge,
        $salleManger,
        $sejour
    ) {
        $this->typeCuisine = new Column(34, $typeCuisine);
        $this->congelateur = new Column(69, $congelateur);
        $this->four = new Column(70, $four);
        $this->laveVaisselle = new Column(71, $laveVaisselle);
        $this->microOndes = new Column(72, $microOndes);
        $this->laveLinge = new Column(233, $laveLinge);
        $this->secheLinge = new Column(234, $secheLinge);
        $this->salleManger = new Column(246, $salleManger);
        $this->sejour = new Column(247, $sejour);
    }

    public function getTypeCuisine(): Column
    {
        return $this->typeCuisine;
    }

    public function getCongelateur(): Column
    {
        return $this->congelateur;
    }

    public function getFour(): Column
    {
        return $this->four;
    }

    public function getLaveVaisselle(): Column
    {
        return $this->laveVaisselle;
    }

    public function getMicroOndes(): Column
    {
        return $this->microOndes;
    }

    public function getLaveLinge(): Column
    {
        return $this->laveLinge;
    }

    public function getSecheLinge(): Column
    {
        return $this->secheLinge;
    }

    public function getSalleManger(): Column
    {
        return $this->salleManger;
    }

    public function getSejour(): Column
    {
        return $this->sejour;
    }

    public function toArray(): array
    {
        return [
            $this->getTypeCuisine(),
            $this->getCongelateur(),
            $this->getFour(),
            $this->getLaveVaisselle(),
            $this->getMicroOndes(),
            $this->getLaveLinge(),
            $this->getSecheLinge(),
            $this->getSalleManger(),
            $this->getSejour(),
        ];
    }
}
