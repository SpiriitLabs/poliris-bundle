<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Builders;

use Spiriit\PolirisBundle\Models\Annonce\Annonce;
use Spiriit\PolirisBundle\Models\Annonce\Boutique;
use Spiriit\PolirisBundle\Models\Annonce\Bureau;
use Spiriit\PolirisBundle\Models\Annonce\ChampCustom;
use Spiriit\PolirisBundle\Models\Annonce\ChauffageClim;
use Spiriit\PolirisBundle\Models\Annonce\Contact;
use Spiriit\PolirisBundle\Models\Annonce\Detail;
use Spiriit\PolirisBundle\Models\Annonce\Diagnostic;
use Spiriit\PolirisBundle\Models\Annonce\Etage;
use Spiriit\PolirisBundle\Models\Annonce\Exterieur;
use Spiriit\PolirisBundle\Models\Annonce\FondsCommerce;
use Spiriit\PolirisBundle\Models\Annonce\Garage;
use Spiriit\PolirisBundle\Models\Annonce\HonoraireCharge;
use Spiriit\PolirisBundle\Models\Annonce\Identifiant;
use Spiriit\PolirisBundle\Models\Annonce\Interieur;
use Spiriit\PolirisBundle\Models\Annonce\Langue;
use Spiriit\PolirisBundle\Models\Annonce\Localisation;
use Spiriit\PolirisBundle\Models\Annonce\Location;
use Spiriit\PolirisBundle\Models\Annonce\LocationVacances;
use Spiriit\PolirisBundle\Models\Annonce\Mandat;
use Spiriit\PolirisBundle\Models\Annonce\Parking;
use Spiriit\PolirisBundle\Models\Annonce\PartieJour;
use Spiriit\PolirisBundle\Models\Annonce\Photo;
use Spiriit\PolirisBundle\Models\Annonce\Prix;
use Spiriit\PolirisBundle\Models\Annonce\ProduitInvestissement;
use Spiriit\PolirisBundle\Models\Annonce\Publication;
use Spiriit\PolirisBundle\Models\Annonce\Securite;
use Spiriit\PolirisBundle\Models\Annonce\Surface;
use Spiriit\PolirisBundle\Models\Annonce\Terrain;
use Spiriit\PolirisBundle\Models\Annonce\Type;
use Spiriit\PolirisBundle\Models\Annonce\Viager;

class AnnonceBuilder
{
    private Annonce $annonce;

    public function __construct()
    {
        $this->annonce = new Annonce();
    }

    public function withIdentifiant(
        $agenceId = null,
        $agencePropertyRef = null,
        $annonceType = null,
        $annonceIdTechnique = null
    ): self {
        $this->annonce->setIdentifiant(new Identifiant($agenceId, $agencePropertyRef, $annonceType, $annonceIdTechnique));

        return $this;
    }

    public function withType(
        $type = null,
        $sousType = null
    ): self {
        $this->annonce->setType(new Type($type, $sousType));

        return $this;
    }

    public function withPhoto(
        $photo1 = null,
        $photo2 = null,
        $photo3 = null,
        $photo4 = null,
        $photo5 = null,
        $photo6 = null,
        $photo7 = null,
        $photo8 = null,
        $photo9 = null,
        $photo10 = null,
        $photo11 = null,
        $photo12 = null,
        $photo13 = null,
        $photo14 = null,
        $photo15 = null,
        $photo16 = null,
        $photo17 = null,
        $photo18 = null,
        $photo19 = null,
        $photo20 = null,
        $photo21 = null,
        $photo22 = null,
        $photo23 = null,
        $photo24 = null,
        $photo25 = null,
        $photo26 = null,
        $photo27 = null,
        $photo28 = null,
        $photo29 = null,
        $photo30 = null,
        $titre1 = null,
        $titre2 = null,
        $titre3 = null,
        $titre4 = null,
        $titre5 = null,
        $titre6 = null,
        $titre7 = null,
        $titre8 = null,
        $titre9 = null,
        $titre10 = null,
        $titre11 = null,
        $titre12 = null,
        $titre13 = null,
        $titre14 = null,
        $titre15 = null,
        $titre16 = null,
        $titre17 = null,
        $titre18 = null,
        $titre19 = null,
        $titre20 = null,
        $titre21 = null,
        $titre22 = null,
        $titre23 = null,
        $titre24 = null,
        $titre25 = null,
        $titre26 = null,
        $titre27 = null,
        $titre28 = null,
        $titre29 = null,
        $titre30 = null,
        $photoPanoramique = null,
        $urlVisiteVirtuelle = null
    ): self {
        $photo = new Photo(
            $photo1,
            $photo2,
            $photo3,
            $photo4,
            $photo5,
            $photo6,
            $photo7,
            $photo8,
            $photo9,
            $photo10,
            $photo11,
            $photo12,
            $photo13,
            $photo14,
            $photo15,
            $photo16,
            $photo17,
            $photo18,
            $photo19,
            $photo20,
            $photo21,
            $photo22,
            $photo23,
            $photo24,
            $photo25,
            $photo26,
            $photo27,
            $photo28,
            $photo29,
            $photo30,
            $titre1,
            $titre2,
            $titre3,
            $titre4,
            $titre5,
            $titre6,
            $titre7,
            $titre8,
            $titre9,
            $titre10,
            $titre11,
            $titre12,
            $titre13,
            $titre14,
            $titre15,
            $titre16,
            $titre17,
            $titre18,
            $titre19,
            $titre20,
            $titre21,
            $titre22,
            $titre23,
            $titre24,
            $titre25,
            $titre26,
            $titre27,
            $titre28,
            $titre29,
            $titre30,
            $photoPanoramique,
            $urlVisiteVirtuelle
        );

        $this->annonce->setPhoto($photo);

        return $this;
    }

    public function withChampCustom(
        $champ1 = null,
        $champ2 = null,
        $champ3 = null,
        $champ4 = null,
        $champ5 = null,
        $champ6 = null,
        $champ7 = null,
        $champ8 = null,
        $champ9 = null,
        $champ10 = null,
        $champ11 = null,
        $champ12 = null,
        $champ13 = null,
        $champ14 = null,
        $champ15 = null,
        $champ16 = null,
        $champ17 = null,
        $champ18 = null,
        $champ19 = null,
        $champ20 = null,
        $champ21 = null,
        $champ22 = null,
        $champ23 = null,
        $champ24 = null,
        $champ25 = null,
        $champ26 = null
    ): self {
        $champCustom = new ChampCustom(
            $champ1,
            $champ2,
            $champ3,
            $champ4,
            $champ5,
            $champ6,
            $champ7,
            $champ8,
            $champ9,
            $champ10,
            $champ11,
            $champ12,
            $champ13,
            $champ14,
            $champ15,
            $champ16,
            $champ17,
            $champ18,
            $champ19,
            $champ20,
            $champ21,
            $champ22,
            $champ23,
            $champ24,
            $champ25,
            $champ26
        );

        $this->annonce->setChampCustom($champCustom);

        return $this;
    }

    public function withLangue(
        $code1 = null,
        $code2 = null,
        $code3 = null,
        $proximite1 = null,
        $proximite2 = null,
        $proximite3 = null,
        $label1 = null,
        $label2 = null,
        $label3 = null,
        $descriptif1 = null,
        $descriptif2 = null,
        $descriptif3 = null
    ): self {
        $langue = new Langue(
            $code1,
            $code2,
            $code3,
            $proximite1,
            $proximite2,
            $proximite3,
            $label1,
            $label2,
            $label3,
            $descriptif1,
            $descriptif2,
            $descriptif3
        );

        $this->annonce->setLangue($langue);

        return $this;
    }

    public function withMandat(
        $exclusif = null,
        $numero = null,
        $date = null,
        $nomMandataire = null,
        $prenomMandataire = null,
        $raisonSocialeMandataire = null,
        $adresseMandataire = null,
        $codePostalMandataire = null,
        $villeMandataire = null,
        $telMandataire = null,
        $commMandataire = null
    ): self {
        $mandat = new Mandat(
            $exclusif,
            $numero,
            $date,
            $nomMandataire,
            $prenomMandataire,
            $raisonSocialeMandataire,
            $adresseMandataire,
            $codePostalMandataire,
            $villeMandataire,
            $telMandataire,
            $commMandataire
        );

        $this->annonce->setMandat($mandat);

        return $this;
    }

    public function withLocationVacances(
        $periodesDispo = null,
        $periodesBasseSaison = null,
        $prixSemaineBasseSaison = null,
        $prixQuinzaineBasseSaison = null,
        $prixMoisBasseSaison = null,
        $periodesHauteSaison = null,
        $prixSemaineHauteSaison = null,
        $prixQuinzaineHauteSaison = null,
        $prixMoisHauteSaison = null,
        $nbPersonnes = null,
        $residence = null,
        $typeResidence = null
    ): self {
        $locationVacances = new LocationVacances(
            $periodesDispo,
            $periodesBasseSaison,
            $prixSemaineBasseSaison,
            $prixQuinzaineBasseSaison,
            $prixMoisBasseSaison,
            $periodesHauteSaison,
            $prixSemaineHauteSaison,
            $prixQuinzaineHauteSaison,
            $prixMoisHauteSaison,
            $nbPersonnes,
            $residence,
            $typeResidence
        );

        $this->annonce->setLocationVacances($locationVacances);

        return $this;
    }

    public function withViager(
        $prixBouquet = null,
        $renteMensuelle = null,
        $ageHomme = null,
        $ageFemme = null,
        $venduLibre = null
    ): self {
        $viager = new Viager(
            $prixBouquet,
            $renteMensuelle,
            $ageHomme,
            $ageFemme,
            $venduLibre
        );

        $this->annonce->setViager($viager);

        return $this;
    }

    public function withTerrain(
        $agricole = null,
        $constructible = null,
        $pente = null,
        $planEau = null,
        $longueurFacade = null,
        $donneSurLaRue = null,
        $viabilise = null
    ): self {
        $terrain = new Terrain(
            $agricole,
            $constructible,
            $pente,
            $planEau,
            $longueurFacade,
            $donneSurLaRue,
            $viabilise
        );

        $this->annonce->setTerrain($terrain);

        return $this;
    }

    public function withBureau(
        $loyerAnnuelGlobal = null,
        $loyerAnnuelM2 = null,
        $loyerAnnuelCC = null,
        $loyerAnnuelM2CC = null,
        $loyerAnnuelHT = null,
        $loyerAnnuelM2HT = null,
        $chargesAnnuellesGlobales = null,
        $chargesAnnuellesM2 = null,
        $chargesMensuellesHT = null,
        $chargesAnnuellesM2HT = null,
        $chargesAnnuellesHT = null,
        $divisible = null,
        $surfaceDivisibleMin = null,
        $surfaceDivisibleMax = null,
        $conditionsFinancieres = null,
        $prestationsDiverses = null,
        $immeubleBureaux = null,
        $surfaceMaxBureau = null
    ): self {
        $bureau = new Bureau(
            $loyerAnnuelGlobal,
            $loyerAnnuelM2,
            $loyerAnnuelCC,
            $loyerAnnuelM2CC,
            $loyerAnnuelHT,
            $loyerAnnuelM2HT,
            $chargesAnnuellesGlobales,
            $chargesAnnuellesM2,
            $chargesMensuellesHT,
            $chargesAnnuellesM2HT,
            $chargesAnnuellesHT,
            $divisible,
            $surfaceDivisibleMin,
            $surfaceDivisibleMax,
            $conditionsFinancieres,
            $prestationsDiverses,
            $immeubleBureaux,
            $surfaceMaxBureau
        );

        $this->annonce->setBureau($bureau);

        return $this;
    }

    public function withDiagnostic(
        $recent = null,
        $travaux = null,
        $consoEnergie = null,
        $bilanConsoEnergie = null,
        $ges = null,
        $bilanGes = null,
        $dpeAt = null,
        $dpeVersion = null,
        $dpeMin = null,
        $dpeMax = null,
        $dpeAnneeRef = null,
        $dpeCoutConsoAnnuelle = null
    ): self {
        $diagnostic = new Diagnostic(
            $recent,
            $travaux,
            $consoEnergie,
            $bilanConsoEnergie,
            $ges,
            $bilanGes,
            $dpeAt,
            $dpeVersion,
            $dpeMin,
            $dpeMax,
            $dpeAnneeRef,
            $dpeCoutConsoAnnuelle
        );

        $this->annonce->setDiagnostic($diagnostic);

        return $this;
    }

    public function withParking(
        $nbVehicules = null,
        $immeuble = null,
        $isole = null
    ): self {
        $this->annonce->setParking(new Parking($nbVehicules, $immeuble, $isole));

        return $this;
    }

    public function withBoutique(
        $quai = null,
        $situationCommerciale = null
    ): self {
        $this->annonce->setBoutique(new Boutique($quai, $situationCommerciale));

        return $this;
    }

    public function withPrix(
        $prix = null,
        $loyerMoisMur = null,
        $loyerCC = null,
        $loyerHT = null,
        $depotGarantie = null,
        $prixMasque = null,
        $prixHT = null,
        $copropriete = null,
        $nbLots = null,
        $syndicatCopro = null,
        $syndicatCoproDetails = null,
        $prixTerrain = null,
        $prixModeleMaison = null,
        $prixMin = null,
        $prixMax = null
    ) {
        $prix = new Prix(
            $prix,
            $loyerMoisMur,
            $loyerCC,
            $loyerHT,
            $depotGarantie,
            $prixMasque,
            $prixHT,
            $copropriete,
            $nbLots,
            $syndicatCopro,
            $syndicatCoproDetails,
            $prixTerrain,
            $prixModeleMaison,
            $prixMin,
            $prixMax
        );
        $this->annonce->setPrix($prix);

        return $this;
    }

    public function withLocation(
        $dureeBail = null,
        $prixDroitEntree = null,
        $prixDroitBail = null,
        $natureBail = null,
        $complementLoyer = null,
        $loyerBase = null,
        $loyerReferenceMajore = null,
        $encadrementLoyers = null
    ): self {
        $location = new Location(
            $dureeBail,
            $prixDroitEntree,
            $prixDroitBail,
            $natureBail,
            $complementLoyer,
            $loyerBase,
            $loyerReferenceMajore,
            $encadrementLoyers
        );

        $this->annonce->setLocation($location);

        return $this;
    }

    public function withProduitInvestissement($valeurAchat = null, $montantRapport = null): self
    {
        $this->annonce->setProduitInvestissement(new ProduitInvestissement($valeurAchat, $montantRapport));

        return $this;
    }

    public function withFondsCommerce(
        $ca = null,
        $repartitionCa = null,
        $natureBailCommercial = null,
        $resultatAnneeN2 = null,
        $resultatAnneeN1 = null,
        $resultatActuel = null,
        $caAnneeN2 = null,
        $caAnneeN1 = null
    ): self {
        $fondsCommerce = new FondsCommerce(
            $ca,
            $repartitionCa,
            $natureBailCommercial,
            $resultatAnneeN2,
            $resultatAnneeN1,
            $resultatActuel,
            $caAnneeN2,
            $caAnneeN1
        );

        $this->annonce->setFondsCommerce($fondsCommerce);

        return $this;
    }

    public function withHonoraireCharge(
        $honoraires = null,
        $charges = null,
        $honorairesChargeAcquereur = null,
        $pourcentageHonorairesTTC = null,
        $chargesAnnuelles = null,
        $honorairesCharge = null,
        $prixHonorairesAcquereur = null,
        $modalitesChargesLocataire = null,
        $partHonorairesEtatLieux = null,
        $urlBaremeHonorairesAgence = null
    ): self {
        $honoraireCharge = new HonoraireCharge(
            $honoraires,
            $charges,
            $honorairesChargeAcquereur,
            $pourcentageHonorairesTTC,
            $chargesAnnuelles,
            $honorairesCharge,
            $prixHonorairesAcquereur,
            $modalitesChargesLocataire,
            $partHonorairesEtatLieux,
            $urlBaremeHonorairesAgence
        );

        $this->annonce->setHonoraireCharge($honoraireCharge);

        return $this;
    }

    public function withLocalisation(
        $cp = null,
        $ville = null,
        $pays = null,
        $adresse = null,
        $quartierProximite = null,
        $situation = null,
        $procheLac = null,
        $procheTennis = null,
        $procheSki = null,
        $cpReel = null,
        $villeReelle = null,
        $idQuartier = null,
        $transportLigne = null,
        $transportStation = null,
        $latitude = null,
        $longitude = null,
        $precisionGps = null,
        $localisation = null
    ): self {
        $loc = new Localisation(
            $cp,
            $ville,
            $pays,
            $adresse,
            $quartierProximite,
            $situation,
            $procheLac,
            $procheTennis,
            $procheSki,
            $cpReel,
            $villeReelle,
            $idQuartier,
            $transportLigne,
            $transportStation,
            $latitude,
            $longitude,
            $precisionGps,
            $localisation
        );

        $this->annonce->setLocalisation($loc);

        return $this;
    }

    public function withSurface(
        $surface = null,
        $surfaceTerrain = null,
        $nbPieces = null,
        $nbChambres = null,
        $nbSdb = null,
        $nbSalleEau = null,
        $nbWc = null,
        $nbBalcons = null,
        $surfaceBalcon = null,
        $nbParkings = null,
        $nbBoxes = null,
        $terrasse = null,
        $longueurFacade = null,
        $placesEnSalle = null,
        $nbBureaux = null,
        $surfaceSejour = null,
        $nbTerrasses = null,
        $surfaceCave = null,
        $surfaceSalleManger = null,
        $surfaceMin = null,
        $surfaceMax = null,
        $nbPiecesMin = null,
        $nbPiecesMax = null,
        $nbChambresMin = null,
        $nbChambresMax = null,
        $comblesAmenageables = null,
        $surfaceTerrainNecessaire = null,
        $surfaceTerrasse = null
    ): self {
        $surf = new Surface(
            $surface,
            $surfaceTerrain,
            $nbPieces,
            $nbChambres,
            $nbSdb,
            $nbSalleEau,
            $nbWc,
            $nbBalcons,
            $surfaceBalcon,
            $nbParkings,
            $nbBoxes,
            $terrasse,
            $longueurFacade,
            $placesEnSalle,
            $nbBureaux,
            $surfaceSejour,
            $nbTerrasses,
            $surfaceCave,
            $surfaceSalleManger,
            $surfaceMin,
            $surfaceMax,
            $nbPiecesMin,
            $nbPiecesMax,
            $nbChambresMin,
            $nbChambresMax,
            $comblesAmenageables,
            $surfaceTerrainNecessaire,
            $surfaceTerrasse
        );

        $this->annonce->setSurface($surf);

        return $this;
    }

    public function withContact(
        $tel = null,
        $fullName = null,
        $email = null,
        $interCabinet = null,
        $interCabinetPrive = null,
        $codeNego = null,
        $agenceTerrain = null
    ): self {
        $contact = new Contact(
            $tel,
            $fullName,
            $email,
            $interCabinet,
            $interCabinetPrive,
            $codeNego,
            $agenceTerrain
        );

        $this->annonce->setContact($contact);

        return $this;
    }

    public function withEtage(
        $etage = null,
        $nbEtages = null,
        $idTypeEtage = null
    ): self {
        $e = new Etage(
            $etage,
            $nbEtages,
            $idTypeEtage
        );

        $this->annonce->setEtage($e);

        return $this;
    }

    public function withInterieur(
        $meuble = null,
        $anneeConstruction = null,
        $refaitNeuf = null,
        $wcSepares = null,
        $orientationSud = null,
        $orientationEst = null,
        $orientationOuest = null,
        $orientationNord = null,
        $cave = null,
        $nbCouverts = null,
        $nbLitsDoubles = null,
        $nbLitsSimples = null,
        $cableTv = null,
        $cheminee = null,
        $placards = null,
        $tel = null,
        $parquet = null,
        $equipementBebe = null,
        $connexionInternet = null,
        $equipementVideo = null,
        $mitoyennete = null
    ): self {
        $interieur = new Interieur(
            $meuble,
            $anneeConstruction,
            $refaitNeuf,
            $wcSepares,
            $orientationSud,
            $orientationEst,
            $orientationOuest,
            $orientationNord,
            $cave,
            $nbCouverts,
            $nbLitsDoubles,
            $nbLitsSimples,
            $cableTv,
            $cheminee,
            $placards,
            $tel,
            $parquet,
            $equipementBebe,
            $connexionInternet,
            $equipementVideo,
            $mitoyennete
        );

        $this->annonce->setInterieur($interieur);

        return $this;
    }

    public function withPartieJour(
        $typeCuisine = null,
        $congelateur = null,
        $four = null,
        $laveVaisselle = null,
        $microOndes = null,
        $laveLinge = null,
        $secheLinge = null,
        $salleManger = null,
        $sejour = null
    ): self {
        $partieJour = new PartieJour(
            $typeCuisine,
            $congelateur,
            $four,
            $laveVaisselle,
            $microOndes,
            $laveLinge,
            $secheLinge,
            $salleManger,
            $sejour
        );

        $this->annonce->setPartieJour($partieJour);

        return $this;
    }

    public function withExterieur(
        $ascenseur = null,
        $calme = null,
        $piscine = null,
        $vueDegagee = null,
        $entree = null,
        $visAVis = null,
        $monteCharge = null
    ): self {
        $exterieur = new Exterieur(
            $ascenseur,
            $calme,
            $piscine,
            $vueDegagee,
            $entree,
            $visAVis,
            $monteCharge
        );

        $this->annonce->setExterieur($exterieur);

        return $this;
    }

    public function withGarage($garage = null, $type = null): self
    {
        $this->annonce->setGarage(new Garage($garage, $type));

        return $this;
    }

    public function withSecurite(
        $digicode = null,
        $interphone = null,
        $gardien = null,
        $alarme = null
    ): self {
        $securite = new Securite(
            $digicode,
            $interphone,
            $gardien,
            $alarme
        );

        $this->annonce->setSecurite($securite);

        return $this;
    }

    public function withChauffageClim($typeChauffage = null, $clim = null): self
    {
        $this->annonce->setChauffageClim(new ChauffageClim($typeChauffage, $clim));

        return $this;
    }

    public function withDetail(
        $activitesCommerciales = null,
        $label = null,
        $description = null,
        $datesDispo = null,
        $amenagementHandicapes = null,
        $animauxAcceptes = null,
        $duplex = null,
        $commPrives = null,
        $logementADisposition = null,
        $nomModele = null
    ): self {
        $detail = new Detail(
            $activitesCommerciales,
            $label,
            $description,
            $datesDispo,
            $amenagementHandicapes,
            $animauxAcceptes,
            $duplex,
            $commPrives,
            $logementADisposition,
            $nomModele
        );

        $this->annonce->setDetail($detail);

        return $this;
    }

    public function withPublication(
        $publications = null,
        $coupDeCoeur = null,
        $versionFormat = null
    ): self {
        $publication = new Publication(
            $publications,
            $coupDeCoeur,
            $versionFormat
        );

        $this->annonce->setPublication($publication);

        return $this;
    }

    public function endLine(): AnnonceExportBuilder
    {
        return new AnnonceExportBuilder();
    }

    public function build(): Annonce
    {
        return $this->annonce;
    }
}
