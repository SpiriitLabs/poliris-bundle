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
use Spiriit\PolirisBundle\Models\Annonce\Photo;

class PhotoTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_photo()
    {
        $photo = new Photo(
            'photo1.jpeg',
            'photo2.jpeg',
            'photo3.jpeg',
            'photo4.jpeg',
            'photo5.jpeg',
            'photo6.jpeg',
            'photo7.jpeg',
            'photo8.jpeg',
            'photo9.jpeg',
            'photo10.jpeg',
            'photo11.jpeg',
            'photo12.jpeg',
            'photo13.jpeg',
            'photo14.jpeg',
            'photo15.jpeg',
            'photo16.jpeg',
            'photo17.jpeg',
            'photo18.jpeg',
            'photo19.jpeg',
            'photo20.jpeg',
            'photo21.jpeg',
            'photo22.jpeg',
            'photo23.jpeg',
            'photo24.jpeg',
            'photo25.jpeg',
            'photo26.jpeg',
            'photo27.jpeg',
            'photo28.jpeg',
            'photo29.jpeg',
            'photo30.jpeg',
            'Titre 1',
            'Titre 2',
            'Titre 3',
            'Titre 4',
            'Titre 5',
            'Titre 6',
            'Titre 7',
            'Titre 8',
            'Titre 9',
            'Titre 10',
            'Titre 11',
            'Titre 12',
            'Titre 13',
            'Titre 14',
            'Titre 15',
            'Titre 16',
            'Titre 17',
            'Titre 18',
            'Titre 19',
            'Titre 20',
            'Titre 21',
            'Titre 22',
            'Titre 23',
            'Titre 24',
            'Titre 25',
            'Titre 26',
            'Titre 27',
            'Titre 28',
            'Titre 29',
            'Titre 30',
            'panorama',
            'visite'
        );

        self::assertEquals('photo1.jpeg', $photo->getPhoto1()->getVal());
        self::assertEquals('photo2.jpeg', $photo->getPhoto2()->getVal());
        self::assertEquals('photo3.jpeg', $photo->getPhoto3()->getVal());
        self::assertEquals('photo4.jpeg', $photo->getPhoto4()->getVal());
        self::assertEquals('photo5.jpeg', $photo->getPhoto5()->getVal());
        self::assertEquals('photo6.jpeg', $photo->getPhoto6()->getVal());
        self::assertEquals('photo7.jpeg', $photo->getPhoto7()->getVal());
        self::assertEquals('photo8.jpeg', $photo->getPhoto8()->getVal());
        self::assertEquals('photo9.jpeg', $photo->getPhoto9()->getVal());
        self::assertEquals('photo10.jpeg', $photo->getPhoto10()->getVal());
        self::assertEquals('photo11.jpeg', $photo->getPhoto11()->getVal());
        self::assertEquals('photo12.jpeg', $photo->getPhoto12()->getVal());
        self::assertEquals('photo13.jpeg', $photo->getPhoto13()->getVal());
        self::assertEquals('photo14.jpeg', $photo->getPhoto14()->getVal());
        self::assertEquals('photo15.jpeg', $photo->getPhoto15()->getVal());
        self::assertEquals('photo16.jpeg', $photo->getPhoto16()->getVal());
        self::assertEquals('photo17.jpeg', $photo->getPhoto17()->getVal());
        self::assertEquals('photo18.jpeg', $photo->getPhoto18()->getVal());
        self::assertEquals('photo19.jpeg', $photo->getPhoto19()->getVal());
        self::assertEquals('photo20.jpeg', $photo->getPhoto20()->getVal());
        self::assertEquals('photo21.jpeg', $photo->getPhoto21()->getVal());
        self::assertEquals('photo22.jpeg', $photo->getPhoto22()->getVal());
        self::assertEquals('photo23.jpeg', $photo->getPhoto23()->getVal());
        self::assertEquals('photo24.jpeg', $photo->getPhoto24()->getVal());
        self::assertEquals('photo25.jpeg', $photo->getPhoto25()->getVal());
        self::assertEquals('photo26.jpeg', $photo->getPhoto26()->getVal());
        self::assertEquals('photo27.jpeg', $photo->getPhoto27()->getVal());
        self::assertEquals('photo28.jpeg', $photo->getPhoto28()->getVal());
        self::assertEquals('photo29.jpeg', $photo->getPhoto29()->getVal());
        self::assertEquals('photo30.jpeg', $photo->getPhoto30()->getVal());
        self::assertEquals('Titre 1', $photo->getTitre1()->getVal());
        self::assertEquals('Titre 2', $photo->getTitre2()->getVal());
        self::assertEquals('Titre 3', $photo->getTitre3()->getVal());
        self::assertEquals('Titre 4', $photo->getTitre4()->getVal());
        self::assertEquals('Titre 5', $photo->getTitre5()->getVal());
        self::assertEquals('Titre 6', $photo->getTitre6()->getVal());
        self::assertEquals('Titre 7', $photo->getTitre7()->getVal());
        self::assertEquals('Titre 8', $photo->getTitre8()->getVal());
        self::assertEquals('Titre 9', $photo->getTitre9()->getVal());
        self::assertEquals('Titre 10', $photo->getTitre10()->getVal());
        self::assertEquals('Titre 11', $photo->getTitre11()->getVal());
        self::assertEquals('Titre 12', $photo->getTitre12()->getVal());
        self::assertEquals('Titre 13', $photo->getTitre13()->getVal());
        self::assertEquals('Titre 14', $photo->getTitre14()->getVal());
        self::assertEquals('Titre 15', $photo->getTitre15()->getVal());
        self::assertEquals('Titre 16', $photo->getTitre16()->getVal());
        self::assertEquals('Titre 17', $photo->getTitre17()->getVal());
        self::assertEquals('Titre 18', $photo->getTitre18()->getVal());
        self::assertEquals('Titre 19', $photo->getTitre19()->getVal());
        self::assertEquals('Titre 20', $photo->getTitre20()->getVal());
        self::assertEquals('Titre 21', $photo->getTitre21()->getVal());
        self::assertEquals('Titre 22', $photo->getTitre22()->getVal());
        self::assertEquals('Titre 23', $photo->getTitre23()->getVal());
        self::assertEquals('Titre 24', $photo->getTitre24()->getVal());
        self::assertEquals('Titre 25', $photo->getTitre25()->getVal());
        self::assertEquals('Titre 26', $photo->getTitre26()->getVal());
        self::assertEquals('Titre 27', $photo->getTitre27()->getVal());
        self::assertEquals('Titre 28', $photo->getTitre28()->getVal());
        self::assertEquals('Titre 29', $photo->getTitre29()->getVal());
        self::assertEquals('Titre 30', $photo->getTitre30()->getVal());
        self::assertEquals('panorama', $photo->getPhotoPanoramique()->getVal());
        self::assertEquals('visite', $photo->getUrlVisiteVirtuelle()->getVal());

        $expectedArray = [
            $photo->getPhoto1(),
            $photo->getPhoto2(),
            $photo->getPhoto3(),
            $photo->getPhoto4(),
            $photo->getPhoto5(),
            $photo->getPhoto6(),
            $photo->getPhoto7(),
            $photo->getPhoto8(),
            $photo->getPhoto9(),
            $photo->getPhoto10(),
            $photo->getPhoto11(),
            $photo->getPhoto12(),
            $photo->getPhoto13(),
            $photo->getPhoto14(),
            $photo->getPhoto15(),
            $photo->getPhoto16(),
            $photo->getPhoto17(),
            $photo->getPhoto18(),
            $photo->getPhoto19(),
            $photo->getPhoto20(),
            $photo->getPhoto21(),
            $photo->getPhoto22(),
            $photo->getPhoto23(),
            $photo->getPhoto24(),
            $photo->getPhoto25(),
            $photo->getPhoto26(),
            $photo->getPhoto27(),
            $photo->getPhoto28(),
            $photo->getPhoto29(),
            $photo->getPhoto30(),
            $photo->getTitre1(),
            $photo->getTitre2(),
            $photo->getTitre3(),
            $photo->getTitre4(),
            $photo->getTitre5(),
            $photo->getTitre6(),
            $photo->getTitre7(),
            $photo->getTitre8(),
            $photo->getTitre9(),
            $photo->getTitre10(),
            $photo->getTitre11(),
            $photo->getTitre12(),
            $photo->getTitre13(),
            $photo->getTitre14(),
            $photo->getTitre15(),
            $photo->getTitre16(),
            $photo->getTitre17(),
            $photo->getTitre18(),
            $photo->getTitre19(),
            $photo->getTitre20(),
            $photo->getTitre21(),
            $photo->getTitre22(),
            $photo->getTitre23(),
            $photo->getTitre24(),
            $photo->getTitre25(),
            $photo->getTitre26(),
            $photo->getTitre27(),
            $photo->getTitre28(),
            $photo->getTitre29(),
            $photo->getTitre30(),
            $photo->getPhotoPanoramique(),
            $photo->getUrlVisiteVirtuelle(),
        ];

        self::assertEquals($expectedArray, $photo->toArray());
    }
}
