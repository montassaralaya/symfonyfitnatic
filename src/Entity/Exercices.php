<?php

namespace App\Entity;

use App\Repository\ExercicesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExercicesRepository::class)]
class Exercices
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomE = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column]
    private ?int $dureeE = null;

    #[ORM\Column]
    private ?int $repetitions = null;

    #[ORM\Column]
    private ?int $series = null;

    #[ORM\Column(length: 255)]
    private ?string $objectif = null;

    #[ORM\Column(length: 255)]
    private ?string $niveauDifficulte = null;

    #[ORM\Column]
    private ?int $progress = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomE(): ?string
    {
        return $this->nomE;
    }

    public function setNomE(string $nomE): static
    {
        $this->nomE = $nomE;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDureeE(): ?int
    {
        return $this->dureeE;
    }

    public function setDureeE(int $dureeE): static
    {
        $this->dureeE = $dureeE;

        return $this;
    }

    public function getRepetitions(): ?int
    {
        return $this->repetitions;
    }

    public function setRepetitions(int $repetitions): static
    {
        $this->repetitions = $repetitions;

        return $this;
    }

    public function getSeries(): ?int
    {
        return $this->series;
    }

    public function setSeries(int $series): static
    {
        $this->series = $series;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(string $objectif): static
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getNiveauDifficulte(): ?string
    {
        return $this->niveauDifficulte;
    }

    public function setNiveauDifficulte(string $niveauDifficulte): static
    {
        $this->niveauDifficulte = $niveauDifficulte;

        return $this;
    }

    public function getProgress(): ?int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): static
    {
        $this->progress = $progress;

        return $this;
    }
}
