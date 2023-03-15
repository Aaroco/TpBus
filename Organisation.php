<?php

class Organisation
{

    private string $nom;
    private string $ville;
    private array $garages=[] ;


    public function __construct(string $nom, string $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;

    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }


    public function getVille(): string
    {
        return $this->ville;
    }



    public function getGarages(): array
    {
        return $this->garages;
    }

    public function addVehiculeInGarage(Vehicule $vehicule)
    {
        $this->garages[] = $vehicule;
    }



}