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

class Column
{
    private int $pos;

    private $val;

    public function __construct(int $pos, $val)
    {
        $this->pos = $pos;
        $this->val = $val;
    }

    public function getPos(): int
    {
        return $this->pos;
    }

    public function getVal()
    {
        return $this->val;
    }

    public function getTransformedVal()
    {
        switch (\gettype($this->getVal())) {
            case 'boolean':
                return $this->getVal() ? 'OUI' : 'NON';

            case 'string':
                $replacedQuotes = str_replace('"', "'", $this->getVal());
                $replacedQuotes = str_replace(\PHP_EOL, ' ', $replacedQuotes);

                return trim(preg_replace('/\s+/', ' ', $replacedQuotes));

            case 'object':
                if (($date = $this->getVal()) instanceof \DateTimeInterface) {
                    /* @var \DateTimeInterface $date */
                    return $date->format('d/m/Y');
                }

                return $this->getVal();

            default:
                return $this->getVal();
        }
    }

    public function toArray(): array
    {
        return [
            'pos' => $this->getPos(),
            'val' => $this->getTransformedVal(),
        ];
    }
}
