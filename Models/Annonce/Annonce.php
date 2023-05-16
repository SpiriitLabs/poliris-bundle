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

class Annonce
{
    public const ANNONCE_TYPE_VENTE = 'vente';
    public const ANNONCE_TYPE_LOCATION = 'location';

    public const ANNONCE_TYPE_MODELE_MAISON = 'modèle de maison';

    private Identifiant $identifiant;
    private Type $type;
    private Photo $photo;
    private ChampCustom $champCustom;
    private Langue $langue;
    private Mandat $mandat;
    private LocationVacances $locationVacances;
    private Viager $viager;
    private Terrain $terrain;
    private Bureau $bureau;
    private Diagnostic $diagnostic;
    private Parking $parking;
    private Boutique $boutique;
    private Prix $prix;
    private Location $location;
    private ProduitInvestissement $produitInvestissement;
    private FondsCommerce $fondsCommerce;
    private HonoraireCharge $honoraireCharge;
    private Localisation $localisation;
    private Surface $surface;
    private Contact $contact;
    private Etage $etage;
    private Interieur $interieur;
    private PartieJour $partieJour;
    private Exterieur $exterieur;
    private Garage $garage;
    private Securite $securite;
    private ChauffageClim $chauffageClim;
    private Detail $detail;
    private Publication $publication;

    public function isTypeVente(): bool
    {
        return self::ANNONCE_TYPE_VENTE === $this->getIdentifiant()->getAnnonceType()->getVal();
    }

    public function isTypeLocation(): bool
    {
        return self::ANNONCE_TYPE_LOCATION === $this->getIdentifiant()->getAnnonceType()->getVal();
    }

    public function isModeleMaison(): bool
    {
        return self::ANNONCE_TYPE_MODELE_MAISON === $this->getType()->getType()->getVal();
    }

    public function getIdentifiant(): Identifiant
    {
        return $this->identifiant;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getChampCustom(): ChampCustom
    {
        return $this->champCustom;
    }

    public function getLangue(): Langue
    {
        return $this->langue;
    }

    public function getMandat(): Mandat
    {
        return $this->mandat;
    }

    public function getLocationVacances(): LocationVacances
    {
        return $this->locationVacances;
    }

    public function getViager(): Viager
    {
        return $this->viager;
    }

    public function getTerrain(): Terrain
    {
        return $this->terrain;
    }

    public function getBureau(): Bureau
    {
        return $this->bureau;
    }

    public function getDiagnostic(): Diagnostic
    {
        return $this->diagnostic;
    }

    public function getParking(): Parking
    {
        return $this->parking;
    }

    public function getBoutique(): Boutique
    {
        return $this->boutique;
    }

    public function getPrix(): Prix
    {
        return $this->prix;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getProduitInvestissement(): ProduitInvestissement
    {
        return $this->produitInvestissement;
    }

    public function getFondsCommerce(): FondsCommerce
    {
        return $this->fondsCommerce;
    }

    public function getHonoraireCharge(): HonoraireCharge
    {
        return $this->honoraireCharge;
    }

    public function getLocalisation(): Localisation
    {
        return $this->localisation;
    }

    public function getSurface(): Surface
    {
        return $this->surface;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getEtage(): Etage
    {
        return $this->etage;
    }

    public function getInterieur(): Interieur
    {
        return $this->interieur;
    }

    public function getPartieJour(): PartieJour
    {
        return $this->partieJour;
    }

    public function getExterieur(): Exterieur
    {
        return $this->exterieur;
    }

    public function getGarage(): Garage
    {
        return $this->garage;
    }

    public function getSecurite(): Securite
    {
        return $this->securite;
    }

    public function getChauffageClim(): ChauffageClim
    {
        return $this->chauffageClim;
    }

    public function getDetail(): Detail
    {
        return $this->detail;
    }

    public function getPublication(): Publication
    {
        return $this->publication;
    }

    public function setIdentifiant(Identifiant $identifiant): void
    {
        $this->identifiant = $identifiant;
    }

    public function setType(Type $type): void
    {
        $this->type = $type;
    }

    public function setPhoto(Photo $photo): void
    {
        $this->photo = $photo;
    }

    public function setChampCustom(ChampCustom $champCustom): void
    {
        $this->champCustom = $champCustom;
    }

    public function setLangue(Langue $langue): void
    {
        $this->langue = $langue;
    }

    public function setMandat(Mandat $mandat): void
    {
        $this->mandat = $mandat;
    }

    public function setLocationVacances(LocationVacances $locationVacances): void
    {
        $this->locationVacances = $locationVacances;
    }

    public function setViager(Viager $viager): void
    {
        $this->viager = $viager;
    }

    public function setTerrain(Terrain $terrain): void
    {
        $this->terrain = $terrain;
    }

    public function setBureau(Bureau $bureau): void
    {
        $this->bureau = $bureau;
    }

    public function setDiagnostic(Diagnostic $diagnostic): void
    {
        $this->diagnostic = $diagnostic;
    }

    public function setParking(Parking $parking): void
    {
        $this->parking = $parking;
    }

    public function setBoutique(Boutique $boutique): void
    {
        $this->boutique = $boutique;
    }

    public function setPrix(Prix $prix): void
    {
        $this->prix = $prix;
    }

    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    public function setProduitInvestissement(ProduitInvestissement $produitInvestissement): void
    {
        $this->produitInvestissement = $produitInvestissement;
    }

    public function setFondsCommerce(FondsCommerce $fondsCommerce): void
    {
        $this->fondsCommerce = $fondsCommerce;
    }

    public function setHonoraireCharge(HonoraireCharge $honoraireCharge): void
    {
        $this->honoraireCharge = $honoraireCharge;
    }

    public function setLocalisation(Localisation $localisation): void
    {
        $this->localisation = $localisation;
    }

    public function setSurface(Surface $surface): void
    {
        $this->surface = $surface;
    }

    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;
    }

    public function setEtage(Etage $etage): void
    {
        $this->etage = $etage;
    }

    public function setInterieur(Interieur $interieur): void
    {
        $this->interieur = $interieur;
    }

    public function setPartieJour(PartieJour $partieJour): void
    {
        $this->partieJour = $partieJour;
    }

    public function setExterieur(Exterieur $exterieur): void
    {
        $this->exterieur = $exterieur;
    }

    public function setGarage(Garage $garage): void
    {
        $this->garage = $garage;
    }

    public function setSecurite(Securite $securite): void
    {
        $this->securite = $securite;
    }

    public function setChauffageClim(ChauffageClim $chauffageClim): void
    {
        $this->chauffageClim = $chauffageClim;
    }

    public function setDetail(Detail $detail): void
    {
        $this->detail = $detail;
    }

    public function setPublication(Publication $publication): void
    {
        $this->publication = $publication;
    }

    public function toArray(): array
    {
        $results = [];

        $columns = [
            ...$this->getIdentifiant()->toArray(),
            ...$this->getType()->toArray(),
            ...$this->getPhoto()->toArray(),
            ...$this->getChampCustom()->toArray(),
            ...$this->getLangue()->toArray(),
            ...$this->getMandat()->toArray(),
            ...$this->getLocationVacances()->toArray(),
            ...$this->getViager()->toArray(),
            ...$this->getTerrain()->toArray(),
            ...$this->getBureau()->toArray(),
            ...$this->getDiagnostic()->toArray(),
            ...$this->getParking()->toArray(),
            ...$this->getBoutique()->toArray(),
            ...$this->getPrix()->toArray(),
            ...$this->getLocation()->toArray(),
            ...$this->getProduitInvestissement()->toArray(),
            ...$this->getFondsCommerce()->toArray(),
            ...$this->getHonoraireCharge()->toArray(),
            ...$this->getLocalisation()->toArray(),
            ...$this->getSurface()->toArray(),
            ...$this->getContact()->toArray(),
            ...$this->getEtage()->toArray(),
            ...$this->getInterieur()->toArray(),
            ...$this->getPartieJour()->toArray(),
            ...$this->getExterieur()->toArray(),
            ...$this->getGarage()->toArray(),
            ...$this->getSecurite()->toArray(),
            ...$this->getChauffageClim()->toArray(),
            ...$this->getDetail()->toArray(),
            ...$this->getPublication()->toArray(),
        ];

        /** @var Column $column */
        foreach ($columns as $column) {
            $results[$column->getPos()] = $column->getTransformedVal();
        }

        ksort($results);

        return $results;
    }
}
