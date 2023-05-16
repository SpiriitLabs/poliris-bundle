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
use Spiriit\PolirisBundle\Models\Annonce\Contact;

class ContactTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_contact()
    {
        $contact = new Contact(
            $tel = '0123456789',
            $fullName = 'René Gossier',
            $email = 'rgossier@agence.com',
            $interCabinet = true,
            $interCabinetPrive = false,
            $codeNego = 'MARTIN',
            $agenceTerrain = 'Agence terra nova'
        );

        self::assertEquals($tel, $contact->getTel()->getVal());
        self::assertEquals($fullName, $contact->getFullName()->getVal());
        self::assertEquals($email, $contact->getEmail()->getVal());
        self::assertEquals($interCabinet, $contact->getInterCabinet()->getVal());
        self::assertEquals($interCabinetPrive, $contact->getInterCabinetPrive()->getVal());
        self::assertEquals($codeNego, $contact->getCodeNego()->getVal());
        self::assertEquals($agenceTerrain, $contact->getAgenceTerrain()->getVal());

        $expectedArray = [
            $contact->getTel(),
            $contact->getFullName(),
            $contact->getEmail(),
            $contact->getInterCabinet(),
            $contact->getInterCabinetPrive(),
            $contact->getCodeNego(),
            $contact->getAgenceTerrain(),
        ];

        self::assertEquals($expectedArray, $contact->toArray());
    }
}
