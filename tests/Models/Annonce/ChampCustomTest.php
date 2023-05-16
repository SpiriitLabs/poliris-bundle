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
use Spiriit\PolirisBundle\Models\Annonce\ChampCustom;

class ChampCustomTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_champ_custom()
    {
        $champCustom = new ChampCustom(
            $champ1 = 'champ 1',
            $champ2 = 'champ 2',
            $champ3 = 'champ 3',
            $champ4 = 'champ 4',
            $champ5 = 'champ 5',
            $champ6 = 'champ 6',
            $champ7 = 'champ 7',
            $champ8 = 'champ 8',
            $champ9 = 'champ 9',
            $champ10 = 'champ 10',
            $champ11 = 'champ 11',
            $champ12 = 'champ 12',
            $champ13 = 'champ 13',
            $champ14 = 'champ 14',
            $champ15 = 'champ 15',
            $champ16 = 'champ 16',
            $champ17 = 'champ 17',
            $champ18 = 'champ 18',
            $champ19 = 'champ 19',
            $champ20 = 'champ 20',
            $champ21 = 'champ 21',
            $champ22 = 'champ 22',
            $champ23 = 'champ 23',
            $champ24 = 'champ 24',
            $champ25 = 'champ 25',
            $champ26 = 'champ 26',
        );

        self::assertEquals($champ1, $champCustom->getChamp1()->getVal());
        self::assertEquals($champ2, $champCustom->getChamp2()->getVal());
        self::assertEquals($champ3, $champCustom->getChamp3()->getVal());
        self::assertEquals($champ4, $champCustom->getChamp4()->getVal());
        self::assertEquals($champ5, $champCustom->getChamp5()->getVal());
        self::assertEquals($champ6, $champCustom->getChamp6()->getVal());
        self::assertEquals($champ7, $champCustom->getChamp7()->getVal());
        self::assertEquals($champ8, $champCustom->getChamp8()->getVal());
        self::assertEquals($champ9, $champCustom->getChamp9()->getVal());
        self::assertEquals($champ10, $champCustom->getChamp10()->getVal());
        self::assertEquals($champ11, $champCustom->getChamp11()->getVal());
        self::assertEquals($champ12, $champCustom->getChamp12()->getVal());
        self::assertEquals($champ13, $champCustom->getChamp13()->getVal());
        self::assertEquals($champ14, $champCustom->getChamp14()->getVal());
        self::assertEquals($champ15, $champCustom->getChamp15()->getVal());
        self::assertEquals($champ16, $champCustom->getChamp16()->getVal());
        self::assertEquals($champ17, $champCustom->getChamp17()->getVal());
        self::assertEquals($champ18, $champCustom->getChamp18()->getVal());
        self::assertEquals($champ19, $champCustom->getChamp19()->getVal());
        self::assertEquals($champ20, $champCustom->getChamp20()->getVal());
        self::assertEquals($champ21, $champCustom->getChamp21()->getVal());
        self::assertEquals($champ22, $champCustom->getChamp22()->getVal());
        self::assertEquals($champ23, $champCustom->getChamp23()->getVal());
        self::assertEquals($champ24, $champCustom->getChamp24()->getVal());
        self::assertEquals($champ25, $champCustom->getChamp25()->getVal());
        self::assertEquals($champ26, $champCustom->getChamp26()->getVal());

        $expectedArray = [
            $champCustom->getChamp1(),
            $champCustom->getChamp2(),
            $champCustom->getChamp3(),
            $champCustom->getChamp4(),
            $champCustom->getChamp5(),
            $champCustom->getChamp6(),
            $champCustom->getChamp7(),
            $champCustom->getChamp8(),
            $champCustom->getChamp9(),
            $champCustom->getChamp10(),
            $champCustom->getChamp11(),
            $champCustom->getChamp12(),
            $champCustom->getChamp13(),
            $champCustom->getChamp14(),
            $champCustom->getChamp15(),
            $champCustom->getChamp16(),
            $champCustom->getChamp17(),
            $champCustom->getChamp18(),
            $champCustom->getChamp19(),
            $champCustom->getChamp20(),
            $champCustom->getChamp21(),
            $champCustom->getChamp22(),
            $champCustom->getChamp23(),
            $champCustom->getChamp24(),
            $champCustom->getChamp25(),
            $champCustom->getChamp26(),
        ];

        self::assertEquals($expectedArray, $champCustom->toArray());
    }
}
