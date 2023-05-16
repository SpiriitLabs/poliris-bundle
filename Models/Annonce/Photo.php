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

class Photo
{
    private Column $photo1;
    private Column $photo2;
    private Column $photo3;
    private Column $photo4;
    private Column $photo5;
    private Column $photo6;
    private Column $photo7;
    private Column $photo8;
    private Column $photo9;
    private Column $photo10;
    private Column $photo11;
    private Column $photo12;
    private Column $photo13;
    private Column $photo14;
    private Column $photo15;
    private Column $photo16;
    private Column $photo17;
    private Column $photo18;
    private Column $photo19;
    private Column $photo20;
    private Column $photo21;
    private Column $photo22;
    private Column $photo23;
    private Column $photo24;
    private Column $photo25;
    private Column $photo26;
    private Column $photo27;
    private Column $photo28;
    private Column $photo29;
    private Column $photo30;

    private Column $titre1;
    private Column $titre2;
    private Column $titre3;
    private Column $titre4;
    private Column $titre5;
    private Column $titre6;
    private Column $titre7;
    private Column $titre8;
    private Column $titre9;
    private Column $titre10;
    private Column $titre11;
    private Column $titre12;
    private Column $titre13;
    private Column $titre14;
    private Column $titre15;
    private Column $titre16;
    private Column $titre17;
    private Column $titre18;
    private Column $titre19;
    private Column $titre20;
    private Column $titre21;
    private Column $titre22;
    private Column $titre23;
    private Column $titre24;
    private Column $titre25;
    private Column $titre26;
    private Column $titre27;
    private Column $titre28;
    private Column $titre29;
    private Column $titre30;

    private Column $photoPanoramique;
    private Column $urlVisiteVirtuelle;

    public function __construct(
        $photo1,
        $photo2,
        $photo3,
        $photo4,
        $photo5,
        $photo6,
        $photo7,
        $photo8,
        $photo9,
        $photo10,
        $photo11,
        $photo12,
        $photo13,
        $photo14,
        $photo15,
        $photo16,
        $photo17,
        $photo18,
        $photo19,
        $photo20,
        $photo21,
        $photo22,
        $photo23,
        $photo24,
        $photo25,
        $photo26,
        $photo27,
        $photo28,
        $photo29,
        $photo30,
        $titre1,
        $titre2,
        $titre3,
        $titre4,
        $titre5,
        $titre6,
        $titre7,
        $titre8,
        $titre9,
        $titre10,
        $titre11,
        $titre12,
        $titre13,
        $titre14,
        $titre15,
        $titre16,
        $titre17,
        $titre18,
        $titre19,
        $titre20,
        $titre21,
        $titre22,
        $titre23,
        $titre24,
        $titre25,
        $titre26,
        $titre27,
        $titre28,
        $titre29,
        $titre30,
        $photoPanoramique,
        $urlVisiteVirtuelle
    ) {
        $this->photo1 = new Column(85, $photo1);
        $this->photo2 = new Column(86, $photo2);
        $this->photo3 = new Column(87, $photo3);
        $this->photo4 = new Column(88, $photo4);
        $this->photo5 = new Column(89, $photo5);
        $this->photo6 = new Column(90, $photo6);
        $this->photo7 = new Column(91, $photo7);
        $this->photo8 = new Column(92, $photo8);
        $this->photo9 = new Column(93, $photo9);
        $this->photo10 = new Column(164, $photo10);
        $this->photo11 = new Column(165, $photo11);
        $this->photo12 = new Column(166, $photo12);
        $this->photo13 = new Column(167, $photo13);
        $this->photo14 = new Column(168, $photo14);
        $this->photo15 = new Column(169, $photo15);
        $this->photo16 = new Column(170, $photo16);
        $this->photo17 = new Column(171, $photo17);
        $this->photo18 = new Column(172, $photo18);
        $this->photo19 = new Column(173, $photo19);
        $this->photo20 = new Column(174, $photo20);
        $this->photo21 = new Column(264, $photo21);
        $this->photo22 = new Column(265, $photo22);
        $this->photo23 = new Column(266, $photo23);
        $this->photo24 = new Column(267, $photo24);
        $this->photo25 = new Column(268, $photo25);
        $this->photo26 = new Column(269, $photo26);
        $this->photo27 = new Column(270, $photo27);
        $this->photo28 = new Column(271, $photo28);
        $this->photo29 = new Column(272, $photo29);
        $this->photo30 = new Column(273, $photo30);
        $this->titre1 = new Column(94, $titre1);
        $this->titre2 = new Column(95, $titre2);
        $this->titre3 = new Column(96, $titre3);
        $this->titre4 = new Column(97, $titre4);
        $this->titre5 = new Column(98, $titre5);
        $this->titre6 = new Column(99, $titre6);
        $this->titre7 = new Column(100, $titre7);
        $this->titre8 = new Column(101, $titre8);
        $this->titre9 = new Column(102, $titre9);
        $this->titre10 = new Column(274, $titre10);
        $this->titre11 = new Column(275, $titre11);
        $this->titre12 = new Column(276, $titre12);
        $this->titre13 = new Column(277, $titre13);
        $this->titre14 = new Column(278, $titre14);
        $this->titre15 = new Column(279, $titre15);
        $this->titre16 = new Column(280, $titre16);
        $this->titre17 = new Column(281, $titre17);
        $this->titre18 = new Column(282, $titre18);
        $this->titre19 = new Column(283, $titre19);
        $this->titre20 = new Column(284, $titre20);
        $this->titre21 = new Column(285, $titre21);
        $this->titre22 = new Column(286, $titre22);
        $this->titre23 = new Column(287, $titre23);
        $this->titre24 = new Column(288, $titre24);
        $this->titre25 = new Column(289, $titre25);
        $this->titre26 = new Column(290, $titre26);
        $this->titre27 = new Column(291, $titre27);
        $this->titre28 = new Column(292, $titre28);
        $this->titre29 = new Column(293, $titre29);
        $this->titre30 = new Column(294, $titre30);
        $this->photoPanoramique = new Column(103, $photoPanoramique);
        $this->urlVisiteVirtuelle = new Column(104, $urlVisiteVirtuelle);
    }

    public function getPhoto1(): Column
    {
        return $this->photo1;
    }

    public function getPhoto2(): Column
    {
        return $this->photo2;
    }

    public function getPhoto3(): Column
    {
        return $this->photo3;
    }

    public function getPhoto4(): Column
    {
        return $this->photo4;
    }

    public function getPhoto5(): Column
    {
        return $this->photo5;
    }

    public function getPhoto6(): Column
    {
        return $this->photo6;
    }

    public function getPhoto7(): Column
    {
        return $this->photo7;
    }

    public function getPhoto8(): Column
    {
        return $this->photo8;
    }

    public function getPhoto9(): Column
    {
        return $this->photo9;
    }

    public function getPhoto10(): Column
    {
        return $this->photo10;
    }

    public function getPhoto11(): Column
    {
        return $this->photo11;
    }

    public function getPhoto12(): Column
    {
        return $this->photo12;
    }

    public function getPhoto13(): Column
    {
        return $this->photo13;
    }

    public function getPhoto14(): Column
    {
        return $this->photo14;
    }

    public function getPhoto15(): Column
    {
        return $this->photo15;
    }

    public function getPhoto16(): Column
    {
        return $this->photo16;
    }

    public function getPhoto17(): Column
    {
        return $this->photo17;
    }

    public function getPhoto18(): Column
    {
        return $this->photo18;
    }

    public function getPhoto19(): Column
    {
        return $this->photo19;
    }

    public function getPhoto20(): Column
    {
        return $this->photo20;
    }

    public function getPhoto21(): Column
    {
        return $this->photo21;
    }

    public function getPhoto22(): Column
    {
        return $this->photo22;
    }

    public function getPhoto23(): Column
    {
        return $this->photo23;
    }

    public function getPhoto24(): Column
    {
        return $this->photo24;
    }

    public function getPhoto25(): Column
    {
        return $this->photo25;
    }

    public function getPhoto26(): Column
    {
        return $this->photo26;
    }

    public function getPhoto27(): Column
    {
        return $this->photo27;
    }

    public function getPhoto28(): Column
    {
        return $this->photo28;
    }

    public function getPhoto29(): Column
    {
        return $this->photo29;
    }

    public function getPhoto30(): Column
    {
        return $this->photo30;
    }

    public function getTitre1(): Column
    {
        return $this->titre1;
    }

    public function getTitre2(): Column
    {
        return $this->titre2;
    }

    public function getTitre3(): Column
    {
        return $this->titre3;
    }

    public function getTitre4(): Column
    {
        return $this->titre4;
    }

    public function getTitre5(): Column
    {
        return $this->titre5;
    }

    public function getTitre6(): Column
    {
        return $this->titre6;
    }

    public function getTitre7(): Column
    {
        return $this->titre7;
    }

    public function getTitre8(): Column
    {
        return $this->titre8;
    }

    public function getTitre9(): Column
    {
        return $this->titre9;
    }

    public function getTitre10(): Column
    {
        return $this->titre10;
    }

    public function getTitre11(): Column
    {
        return $this->titre11;
    }

    public function getTitre12(): Column
    {
        return $this->titre12;
    }

    public function getTitre13(): Column
    {
        return $this->titre13;
    }

    public function getTitre14(): Column
    {
        return $this->titre14;
    }

    public function getTitre15(): Column
    {
        return $this->titre15;
    }

    public function getTitre16(): Column
    {
        return $this->titre16;
    }

    public function getTitre17(): Column
    {
        return $this->titre17;
    }

    public function getTitre18(): Column
    {
        return $this->titre18;
    }

    public function getTitre19(): Column
    {
        return $this->titre19;
    }

    public function getTitre20(): Column
    {
        return $this->titre20;
    }

    public function getTitre21(): Column
    {
        return $this->titre21;
    }

    public function getTitre22(): Column
    {
        return $this->titre22;
    }

    public function getTitre23(): Column
    {
        return $this->titre23;
    }

    public function getTitre24(): Column
    {
        return $this->titre24;
    }

    public function getTitre25(): Column
    {
        return $this->titre25;
    }

    public function getTitre26(): Column
    {
        return $this->titre26;
    }

    public function getTitre27(): Column
    {
        return $this->titre27;
    }

    public function getTitre28(): Column
    {
        return $this->titre28;
    }

    public function getTitre29(): Column
    {
        return $this->titre29;
    }

    public function getTitre30(): Column
    {
        return $this->titre30;
    }

    public function getPhotoPanoramique(): Column
    {
        return $this->photoPanoramique;
    }

    public function getUrlVisiteVirtuelle(): Column
    {
        return $this->urlVisiteVirtuelle;
    }

    public function toArray(): array
    {
        return [
            $this->getPhoto1(),
            $this->getPhoto2(),
            $this->getPhoto3(),
            $this->getPhoto4(),
            $this->getPhoto5(),
            $this->getPhoto6(),
            $this->getPhoto7(),
            $this->getPhoto8(),
            $this->getPhoto9(),
            $this->getPhoto10(),
            $this->getPhoto11(),
            $this->getPhoto12(),
            $this->getPhoto13(),
            $this->getPhoto14(),
            $this->getPhoto15(),
            $this->getPhoto16(),
            $this->getPhoto17(),
            $this->getPhoto18(),
            $this->getPhoto19(),
            $this->getPhoto20(),
            $this->getPhoto21(),
            $this->getPhoto22(),
            $this->getPhoto23(),
            $this->getPhoto24(),
            $this->getPhoto25(),
            $this->getPhoto26(),
            $this->getPhoto27(),
            $this->getPhoto28(),
            $this->getPhoto29(),
            $this->getPhoto30(),
            $this->getTitre1(),
            $this->getTitre2(),
            $this->getTitre3(),
            $this->getTitre4(),
            $this->getTitre5(),
            $this->getTitre6(),
            $this->getTitre7(),
            $this->getTitre8(),
            $this->getTitre9(),
            $this->getTitre10(),
            $this->getTitre11(),
            $this->getTitre12(),
            $this->getTitre13(),
            $this->getTitre14(),
            $this->getTitre15(),
            $this->getTitre16(),
            $this->getTitre17(),
            $this->getTitre18(),
            $this->getTitre19(),
            $this->getTitre20(),
            $this->getTitre21(),
            $this->getTitre22(),
            $this->getTitre23(),
            $this->getTitre24(),
            $this->getTitre25(),
            $this->getTitre26(),
            $this->getTitre27(),
            $this->getTitre28(),
            $this->getTitre29(),
            $this->getTitre30(),
            $this->getPhotoPanoramique(),
            $this->getUrlVisiteVirtuelle(),
        ];
    }
}
