<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Models;

use PHPUnit\Framework\TestCase;
use Spiriit\PolirisBundle\Models\Column;

class ColumnTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_create_column()
    {
        $column = new Column(1, 'value');

        self::assertEquals(1, $column->getPos());
        self::assertEquals('value', $column->getVal());

        $arrayExpected = [
            'pos' => 1,
            'val' => 'value',
        ];
        self::assertEquals($arrayExpected, $column->toArray());
    }

    /**
     * @test
     */
    public function it_must_transform_boolean_value()
    {
        $column = new Column(1, true);
        self::assertEquals('OUI', $column->getTransformedVal());

        $column = new Column(1, false);
        self::assertEquals('NON', $column->getTransformedVal());
    }

    /**
     * @test
     */
    public function it_must_transform_string_with_quotes_value()
    {
        $column = new Column(1, 'Camping "Les flots bleus"');
        self::assertEquals("Camping 'Les flots bleus'", $column->getTransformedVal());
    }

    /**
     * @test
     */
    public function it_must_transform_string_with_new_line_value()
    {
        $column = new Column(1, 'new' . \PHP_EOL . 'line');
        self::assertEquals('new line', $column->getTransformedVal());
    }

    /**
     * @test
     */
    public function it_must_transform_date_value()
    {
        $column = new Column(1, new \DateTimeImmutable('2021-12-30'));
        self::assertEquals('30/12/2021', $column->getTransformedVal());

        $column = new Column(1, new \DateTime('2021-12-31'));
        self::assertEquals('31/12/2021', $column->getTransformedVal());
    }
}
