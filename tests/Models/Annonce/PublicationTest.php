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
use Spiriit\PolirisBundle\Models\Annonce\Publication;

class PublicationTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_publication()
    {
        $publication = new Publication(
            $publications = 'SL,BD,WA',
            $coupDeCoeur = true,
            $versionFormat = '4.09'
        );

        self::assertEquals($publications, $publication->getPublications()->getVal());
        self::assertEquals($coupDeCoeur, $publication->getCoupDeCoeur()->getVal());
        self::assertEquals($versionFormat, $publication->getVersionFormat()->getVal());

        $expectedArray = [
            $publication->getPublications(),
            $publication->getCoupDeCoeur(),
            $publication->getVersionFormat(),
        ];

        self::assertEquals($expectedArray, $publication->toArray());
    }
}
