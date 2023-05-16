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
use Spiriit\PolirisBundle\Models\Annonce\ChauffageClim;

class ChauffageClimTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_chauffage_clim()
    {
        $chauffageClim = new ChauffageClim($typeChauffage = 1, $clim = true);

        self::assertEquals($typeChauffage, $chauffageClim->getTypeChauffage()->getVal());
        self::assertEquals($clim, $chauffageClim->getClim()->getVal());

        $expectedArray = [
            $chauffageClim->getTypeChauffage(),
            $chauffageClim->getClim(),
        ];

        self::assertEquals($expectedArray, $chauffageClim->toArray());
    }
}
