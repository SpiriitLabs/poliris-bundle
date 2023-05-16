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
use Spiriit\PolirisBundle\Models\Annonce\Diagnostic;

class DiagnosticTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_diagnostic()
    {
        $diagnostic = new Diagnostic(
            $recent = true,
            $travaux = false,
            $consoEnergie = 1,
            $bilanConsoEnergie = 'D',
            $ges = 3,
            $bilanGes = 'E',
            $dpeAt = new \DateTimeImmutable(),
            $dpeVersion = '1',
            $dpeMin = 0,
            $dpeMax = 10,
            $dpeAnneeRef = '2021',
            $depCoutAnnuelle = 250
        );

        self::assertEquals($recent, $diagnostic->getRecent()->getVal());
        self::assertEquals($travaux, $diagnostic->getTravaux()->getVal());
        self::assertEquals($consoEnergie, $diagnostic->getConsoEnergie()->getVal());
        self::assertEquals($bilanConsoEnergie, $diagnostic->getBilanConsoEnergie()->getVal());
        self::assertEquals($ges, $diagnostic->getGes()->getVal());
        self::assertEquals($bilanGes, $diagnostic->getBilanGes()->getVal());
        self::assertEquals($dpeAt, $diagnostic->getDpeAt()->getVal());
        self::assertEquals($dpeVersion, $diagnostic->getDpeVersion()->getVal());
        self::assertEquals($dpeMin, $diagnostic->getDpeMin()->getVal());
        self::assertEquals($dpeMax, $diagnostic->getDpeMax()->getVal());
        self::assertEquals($dpeAnneeRef, $diagnostic->getDpeAnneeRef()->getVal());
        self::assertEquals($depCoutAnnuelle, $diagnostic->getDpeCoutConsoAnnuelle()->getVal());

        $expectedArray = [
            $diagnostic->getRecent(),
            $diagnostic->getTravaux(),
            $diagnostic->getConsoEnergie(),
            $diagnostic->getBilanConsoEnergie(),
            $diagnostic->getGes(),
            $diagnostic->getBilanGes(),
            $diagnostic->getDpeAt(),
            $diagnostic->getDpeVersion(),
            $diagnostic->getDpeMin(),
            $diagnostic->getDpeMax(),
            $diagnostic->getDpeAnneeRef(),
            $diagnostic->getDpeCoutConsoAnnuelle(),
        ];

        self::assertEquals($expectedArray, $diagnostic->toArray());
    }
}
