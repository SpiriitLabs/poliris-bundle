<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Centers\CsvCenter;

use Spiriit\PolirisBundle\Models\ExportInterface;

abstract class CsvCenter
{
    abstract public function generateCsvFile(ExportInterface $export, string $formatEncodage): string;

    /**
     * Remove unnecessary $ enclosure.
     */
    protected function getCleanedContent(string $content): string
    {
        return str_replace('$', '', $content);
    }

    /**
     * Create : "contenu du champ1" !# "contenu du champ2" !# "contenu du champ3".
     */
    protected function updateDelimiter(array $lines): array
    {
        $result = [];
        foreach ($lines as $line) {
            $resultLine = [];
            $k = 1;
            foreach ($line as $field) {
                if ($k === (is_array($line) || $line instanceof \Countable ? \count($line) : 0)) {
                    $resultLine[] = '"' . $field . '"';
                } else {
                    $resultLine[] = '"' . $field . '"!';
                }

                ++$k;
            }

            $result[] = $resultLine;
        }

        return $result;
    }

    protected function getTransformedContent(array $lines): array
    {
        return $this->updateDelimiter($lines);
    }
}
