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
use Spiriit\PolirisBundle\Models\Annonce\Mandat;

class MandatTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_mandat()
    {
        $mandat = new Mandat(
            $exclusif = true,
            $numero = '01',
            $date = new \DateTimeImmutable(),
            $nomMandataire = 'nom',
            $prenomMandataire = 'prénom',
            $raisonSocialeMandataire = 'raison',
            $adresseMandataire = 'adresse',
            $cpMandataire = 'cp',
            $villeMandataire = 'ville',
            $telMandataire = '0123456789',
            $commMandataire = 'comm',
        );

        self::assertEquals($exclusif, $mandat->getExclusif()->getVal());
        self::assertEquals($numero, $mandat->getNumero()->getVal());
        self::assertEquals($date, $mandat->getDate()->getVal());
        self::assertEquals($nomMandataire, $mandat->getNomMandataire()->getVal());
        self::assertEquals($prenomMandataire, $mandat->getPrenomMandataire()->getVal());
        self::assertEquals($raisonSocialeMandataire, $mandat->getRaisonSocialeMandataire()->getVal());
        self::assertEquals($adresseMandataire, $mandat->getAdresseMandataire()->getVal());
        self::assertEquals($cpMandataire, $mandat->getCodePostalMandataire()->getVal());
        self::assertEquals($villeMandataire, $mandat->getVilleMandataire()->getVal());
        self::assertEquals($telMandataire, $mandat->getTelMandataire()->getVal());
        self::assertEquals($commMandataire, $mandat->getCommMandataire()->getVal());

        $expectedArray = [
            $mandat->getExclusif(),
            $mandat->getNumero(),
            $mandat->getDate(),
            $mandat->getNomMandataire(),
            $mandat->getPrenomMandataire(),
            $mandat->getRaisonSocialeMandataire(),
            $mandat->getAdresseMandataire(),
            $mandat->getCodePostalMandataire(),
            $mandat->getVilleMandataire(),
            $mandat->getTelMandataire(),
            $mandat->getCommMandataire(),
        ];

        self::assertEquals($expectedArray, $mandat->toArray());
    }
}
