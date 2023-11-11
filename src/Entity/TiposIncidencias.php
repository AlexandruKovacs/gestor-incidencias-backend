<?php

namespace App\Entity;

class TiposIncidencias
{
    private ?int $id = null;

    private ?string $tipo_incidencia = null;

    private ?string $descripcion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoIncidencia(): ?string
    {
        return $this->tipo_incidencia;
    }

    public function setTipoIncidencia(string $tipo_incidencia): static
    {
        $this->tipo_incidencia = $tipo_incidencia;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
