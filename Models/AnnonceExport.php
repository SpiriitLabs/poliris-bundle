<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Models;

use Spiriit\PolirisBundle\Models\Annonce\Annonce;

class AnnonceExport implements ExportInterface
{
    private array $annonces = [];

    public function getAnnonces(): array
    {
        return $this->annonces;
    }

    public function addLine(Annonce $annonce): void
    {
        $this->annonces[] = $annonce;
    }

    public function removeLine(int $line): void
    {
        $key = $line - 1;

        if (\array_key_exists($key, $this->annonces)) {
            unset($this->annonces[$key]);
        }
    }

    public function removeLines(array $lines): void
    {
        /** @var int $line */
        foreach ($lines as $line) {
            $this->removeLine($line);
        }
    }

    public function toArray(): array
    {
        return array_map(fn (Annonce $annonce) => $annonce->toArray(), $this->annonces);
    }
}
