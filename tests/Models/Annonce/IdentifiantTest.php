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
use Spiriit\PolirisBundle\Models\Annonce\Identifiant;

class IdentifiantTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_identifiant()
    {
        $identifiant = new Identifiant(
            $id = 'id',
            $ref = 'ref',
            $annonceType = 'type annonce',
            $annonceIdTechnique = 'annonce id technique',
        );

        self::assertEquals($id, $identifiant->getAgenceId()->getVal());
        self::assertEquals($ref, $identifiant->getAgencePropertyRef()->getVal());
        self::assertEquals($annonceType, $identifiant->getAnnonceType()->getVal());
        self::assertEquals($annonceIdTechnique, $identifiant->getAnnonceIdTechnique()->getVal());

        $expectedArray = [
            $identifiant->getAgenceId(),
            $identifiant->getAgencePropertyRef(),
            $identifiant->getAnnonceType(),
            $identifiant->getAnnonceIdTechnique(),
        ];
        self::assertEquals($expectedArray, $identifiant->toArray());
    }
}
