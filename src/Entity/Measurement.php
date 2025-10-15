<?php

namespace App\Entity;

use App\Repository\MeasurementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeasurementRepository::class)]
class Measurement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'measurements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column]
    private ?\DateTime $datetime = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $temperature = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $maxTemperature = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $minTemperature = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $feelsLike = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 1, nullable: true)]
    private ?string $windSpeed = null;

    #[ORM\Column(nullable: true)]
    private ?int $pressure = null;

    #[ORM\Column(nullable: true)]
    private ?int $humidity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDatetime(): ?\DateTime
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTime $datetime): static
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getTemperature(): ?string
    {
        return $this->temperature;
    }

    public function setTemperature(string $temperature): static
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getMaxTemperature(): ?string
    {
        return $this->maxTemperature;
    }

    public function setMaxTemperature(string $maxTemperature): static
    {
        $this->maxTemperature = $maxTemperature;

        return $this;
    }

    public function getMinTemperature(): ?string
    {
        return $this->minTemperature;
    }

    public function setMinTemperature(string $minTemperature): static
    {
        $this->minTemperature = $minTemperature;

        return $this;
    }

    public function getFeelsLike(): ?string
    {
        return $this->feelsLike;
    }

    public function setFeelsLike(string $feelsLike): static
    {
        $this->feelsLike = $feelsLike;

        return $this;
    }

    public function getWindSpeed(): ?string
    {
        return $this->windSpeed;
    }

    public function setWindSpeed(?string $windSpeed): static
    {
        $this->windSpeed = $windSpeed;

        return $this;
    }

    public function getPressure(): ?int
    {
        return $this->pressure;
    }

    public function setPressure(?int $pressure): static
    {
        $this->pressure = $pressure;

        return $this;
    }

    public function getHumidity(): ?int
    {
        return $this->humidity;
    }

    public function setHumidity(?int $humidity): static
    {
        $this->humidity = $humidity;

        return $this;
    }
}
