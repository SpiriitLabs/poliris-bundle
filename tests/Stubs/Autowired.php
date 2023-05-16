<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Stubs;

use Spiriit\PolirisBundle\Centers\CsvCenter\AnnonceCsvCenter;

class Autowired
{
    private AnnonceCsvCenter $annonceCsvCenter;

    public function __construct(
        AnnonceCsvCenter $annonceCsvCenter
    ) {
        $this->annonceCsvCenter = $annonceCsvCenter;
    }

    public function getAnnonceCsvCenter(): AnnonceCsvCenter
    {
        return $this->annonceCsvCenter;
    }
}
