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
use Spiriit\PolirisBundle\Models\Annonce\Type;

class TypeTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_type()
    {
        $type = new Type(
            $typeBien = 'type',
            $sousType = 'sous type'
        );

        self::assertEquals($typeBien, $type->getType()->getVal());
        self::assertEquals($sousType, $type->getSousType()->getVal());

        $expectedArray = [
            $type->getType(),
            $type->getSousType(),
        ];
        self::assertEquals($expectedArray, $type->toArray());
    }
}
