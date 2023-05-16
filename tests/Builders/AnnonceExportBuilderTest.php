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
use Spiriit\PolirisBundle\Builders\AnnonceExportBuilder;
use Spiriit\PolirisBundle\Models\AnnonceExport;

class AnnonceExportBuilderTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_build_annonce()
    {
        $annonceBuilder = new AnnonceExportBuilder();

        $annonceBuilder
            ->startLine()
                ->withIdentifiant('test', 'test', 'test', 'test')
                ->withType('test', 'test')
            ->endLine();

        $this->assertInstanceOf(AnnonceExport::class, $annonceBuilder->build());
    }
}
