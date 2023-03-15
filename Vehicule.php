<?php

class Vehicule
{

    private string $matriculation;
    private string $type;
    private string $statut;
    private Conducteur $conducteur;


    public function __construct(string $matriculation, string $type, string $statut, )
    {
        $this->matriculation = $matriculation;
        $this->type = $type;
        $this->statut = $statut;

    }

    /**
     * @return string
     */
    public function getMatriculation(): string
    {
        return $this->matriculation;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getStatut(): string
    {
        return $this->statut;
    }

    /**
     * @return Conducteur
     */
    public function getConducteur(): Conducteur
    {
        return $this->conducteur;
    }

    /**
     * @param Conducteur $conducteur
     */
    public function setConducteur(Conducteur $conducteur)
    {
        $this->conducteur = $conducteur;
        //on rajoute [] ?
    }





}