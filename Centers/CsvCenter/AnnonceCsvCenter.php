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

use Spiriit\PolirisBundle\Models\AnnonceExport;
use Spiriit\PolirisBundle\Models\ExportInterface;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use function Symfony\Component\String\u;

class AnnonceCsvCenter extends CsvCenter
{
    public function generateCsvFile(ExportInterface $export, string $formatEncodage): string
    {
        /** @var AnnonceExport $annonceExport */
        $annonceExport = $export;

        $csvEncoderOptions = [
            CsvEncoder::DELIMITER_KEY => '#',
            CsvEncoder::ENCLOSURE_KEY => '$',
            CsvEncoder::NO_HEADERS_KEY => true,
        ];
        $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder($csvEncoderOptions)]);

        $content = $serializer->encode($this->getTransformedContent($annonceExport->toArray()), 'csv');

        $path = u(sys_get_temp_dir())->append('/Annonces.csv')->toString();

        file_put_contents($path, mb_convert_encoding($this->getCleanedContent($content), $formatEncodage, 'UTF-8'));

        return $path;
    }
}
