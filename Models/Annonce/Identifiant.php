<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Models\Annonce;

use Spiriit\PolirisBundle\Models\Column;

class Identifiant
{
    public const ID_TECHNIQUE_COLUMN = 175;

    private Column $agenceId;
    private Column $agencePropertyRef;
    private Column $annonceType;
    private Column $annonceIdTechnique;

    public function __construct(
        $agenceId,
        $agencePropertyRef,
        $annonceType,
        $annonceIdTechnique
    ) {
        $this->agenceId = new Column(1, $agenceId);
        $this->agencePropertyRef = new Column(2, $agencePropertyRef);
        $this->annonceType = new Column(3, $annonceType);
        $this->annonceIdTechnique = new Column(self::ID_TECHNIQUE_COLUMN, $annonceIdTechnique);
    }

    public function getAgenceId(): Column
    {
        return $this->agenceId;
    }

    public function getAgencePropertyRef(): Column
    {
        return $this->agencePropertyRef;
    }

    public function getAnnonceType(): Column
    {
        return $this->annonceType;
    }

    public function getAnnonceIdTechnique(): Column
    {
        return $this->annonceIdTechnique;
    }

    public function toArray(): array
    {
        return [
            $this->getAgenceId(),
            $this->getAgencePropertyRef(),
            $this->getAnnonceType(),
            $this->getAnnonceIdTechnique(),
        ];
    }
}
