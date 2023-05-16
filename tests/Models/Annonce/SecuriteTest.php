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
use Spiriit\PolirisBundle\Models\Annonce\Securite;

class SecuriteTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_securite_test()
    {
        $securite = new Securite(
            $digicode = true,
            $interphone = false,
            $gardien = true,
            $alarme = false
        );

        self::assertEquals($digicode, $securite->getDigicode()->getVal());
        self::assertEquals($interphone, $securite->getInterphone()->getVal());
        self::assertEquals($gardien, $securite->getGardien()->getVal());
        self::assertEquals($alarme, $securite->getAlarme()->getVal());

        $expectedArray = [
            $securite->getDigicode(),
            $securite->getInterphone(),
            $securite->getGardien(),
            $securite->getAlarme(),
        ];

        self::assertEquals($expectedArray, $securite->toArray());
    }
}
