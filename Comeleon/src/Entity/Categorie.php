<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreCategorie;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionCategorie;

    /**
     * @ORM\OneToMany(targetEntity=presta::class, mappedBy="idCategorie")
     */
    private $prestations;

    public function __construct()
    {
        $this->prestations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreCategorie(): ?string
    {
        return $this->titreCategorie;
    }

    public function setTitreCategorie(string $titreCategorie): self
    {
        $this->titreCategorie = $titreCategorie;

        return $this;
    }

    public function getDescriptionCategorie(): ?string
    {
        return $this->descriptionCategorie;
    }

    public function setDescriptionCategorie(string $descriptionCategorie): self
    {
        $this->descriptionCategorie = $descriptionCategorie;

        return $this;
    }

    /**
     * @return Collection|presta[]
     */
    public function getPrestations(): Collection
    {
        return $this->prestations;
    }

    public function addPrestation(presta $prestation): self
    {
        if (!$this->prestations->contains($prestation)) {
            $this->prestations[] = $prestation;
            $prestation->setIdCategorie($this);
        }

        return $this;
    }

    public function removePrestation(presta $prestation): self
    {
        if ($this->prestations->removeElement($prestation)) {
            // set the owning side to null (unless already changed)
            if ($prestation->getIdCategorie() === $this) {
                $prestation->setIdCategorie(null);
            }
        }

        return $this;
    }
}
