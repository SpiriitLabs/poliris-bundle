<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Builders;

use Spiriit\PolirisBundle\Models\AnnonceExport;

class AnnonceExportBuilder
{
    private array $lines = [];

    public function startLine(): AnnonceBuilder
    {
        $builder = new AnnonceBuilder();
        $this->lines[] = $builder;

        return $builder;
    }

    public function build(): AnnonceExport
    {
        $annonce = new AnnonceExport();
        /** @var AnnonceBuilder $line */
        foreach ($this->lines as $line) {
            $annonce->addLine($line->build());
        }

        return $annonce;
    }

    public function getLines(): array
    {
        return $this->lines;
    }
}
