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
use Spiriit\PolirisBundle\Models\Annonce\ProduitInvestissement;

class ProduitInvestissementTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_produit_investissement()
    {
        $produitInvestissement = new ProduitInvestissement(
            $valeurAchat = 1,
            $montantRapport = 2,
        );

        self::assertEquals($valeurAchat, $produitInvestissement->getValeurAchat()->getVal());
        self::assertEquals($montantRapport, $produitInvestissement->getMontantRapport()->getVal());

        $expectedArray = [
            $produitInvestissement->getValeurAchat(),
            $produitInvestissement->getMontantRapport(),
        ];

        self::assertEquals($expectedArray, $produitInvestissement->toArray());
    }
}
