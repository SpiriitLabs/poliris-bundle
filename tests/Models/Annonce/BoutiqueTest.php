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
use Spiriit\PolirisBundle\Models\Annonce\Boutique;

class BoutiqueTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_boutique()
    {
        $boutique = new Boutique(
            $quai = true,
            $situationCommerciale = 'situation'
        );

        self::assertEquals($quai, $boutique->getQuai()->getVal());
        self::assertEquals($situationCommerciale, $boutique->getSituationCommerciale()->getVal());

        $expectedArray = [
            $boutique->getQuai(),
            $boutique->getSituationCommerciale(),
        ];

        self::assertEquals($expectedArray, $boutique->toArray());
    }
}
