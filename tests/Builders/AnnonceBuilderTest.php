<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Builders;

use PHPUnit\Framework\TestCase;
use Spiriit\PolirisBundle\Builders\AnnonceBuilder;
use Spiriit\PolirisBundle\Models\Annonce\Annonce;

class AnnonceBuilderTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_build_annonce_line()
    {
        $annonceLineBuilder = new AnnonceBuilder();

        $annonceLine = $annonceLineBuilder
            ->withIdentifiant('test', 'test', 'test', 'test')
            ->withType('test', 'test')
            ->build();

        $this->assertInstanceOf(Annonce::class, $annonceLine);
    }
}
