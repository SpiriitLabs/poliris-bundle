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
use Spiriit\PolirisBundle\Models\Annonce\Langue;

class LangueTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_langue()
    {
        $langue = new Langue(
            $code1 = 'code 1',
            $code2 = 'code 2',
            $code3 = 'code 3',
            $proximite1 = 'proximite 1',
            $proximite2 = 'proximite 2',
            $proximite3 = 'proximite 3',
            $label1 = 'label 1',
            $label2 = 'label 2',
            $label3 = 'label 3',
            $descriptif1 = 'descriptif 1',
            $descriptif2 = 'descriptif 2',
            $descriptif3 = 'descriptif 3',
        );

        self::assertEquals($code1, $langue->getCode1()->getVal());
        self::assertEquals($code2, $langue->getCode2()->getVal());
        self::assertEquals($code3, $langue->getCode3()->getVal());
        self::assertEquals($proximite1, $langue->getProximite1()->getVal());
        self::assertEquals($proximite2, $langue->getProximite2()->getVal());
        self::assertEquals($proximite3, $langue->getProximite3()->getVal());
        self::assertEquals($label1, $langue->getLabel1()->getVal());
        self::assertEquals($label2, $langue->getLabel2()->getVal());
        self::assertEquals($label3, $langue->getLabel3()->getVal());
        self::assertEquals($descriptif1, $langue->getDescriptif1()->getVal());
        self::assertEquals($descriptif2, $langue->getDescriptif2()->getVal());
        self::assertEquals($descriptif3, $langue->getDescriptif3()->getVal());

        $expectedArray = [
            $langue->getCode1(),
            $langue->getCode2(),
            $langue->getCode3(),
            $langue->getProximite1(),
            $langue->getProximite2(),
            $langue->getProximite3(),
            $langue->getLabel1(),
            $langue->getLabel2(),
            $langue->getLabel3(),
            $langue->getDescriptif1(),
            $langue->getDescriptif2(),
            $langue->getDescriptif3(),
        ];

        self::assertEquals($expectedArray, $langue->toArray());
    }
}
