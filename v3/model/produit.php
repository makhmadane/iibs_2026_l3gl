<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'produit')] 
class Produit {
    
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $libelle;

    #[ORM\Column(type: 'float')] // Changed from 'double' to 'float'
    private float $quantite;

    #[ORM\Column(type: 'integer')]
    private int $prix;

   
    //Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getLibelle(): string {
        return $this->libelle;
    }

    public function getQuantite(): float {
        return $this->quantite;
    }

    public function getPrix(): int {
        return $this->prix;
    }

    //Setters
    public function setLibelle(string $libelle): self {
        $this->libelle = $libelle;
        return $this;
    }

    public function setQuantite(float $quantite): self {
        $this->quantite = $quantite;
        return $this;
    }

    public function setPrix(int $prix): self {
        $this->prix = $prix;
        return $this;
    }
}