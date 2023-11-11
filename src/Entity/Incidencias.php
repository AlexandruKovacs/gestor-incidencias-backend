<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;

class Incidencias
{
    private ?int $id = null;

    private ?string $descripcion = null;

    private ?\DateTimeInterface $fecha_creacion = null;

    private ?string $estado = null;

    private ?string $comentarios = null;

    private ?Profesores $profesor = null;

    private ?AulasEstancias $aula = null;

    private ?Grupos $grupo = null;

    private ?TiposIncidencias $tipoIncidencia = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(?\DateTimeInterface $fecha_creacion): static
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        $this->estado = $estado;

        return $this;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(?string $comentarios): static
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getProfesor(): ?Profesores
    {
        return $this->profesor;
    }

    public function setProfesor(?Profesores $profesor): static
    {
        $this->profesor = $profesor;

        return $this;
    }

    public function getAula(): ?AulasEstancias
    {
        return $this->aula;
    }

    public function setAula(?AulasEstancias $aula): static
    {
        $this->aula = $aula;

        return $this;
    }

    public function getGrupo(): ?Grupos
    {
        return $this->grupo;
    }

    public function setGrupo(?Grupos $grupo): static
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getTipoIncidencia(): ?TiposIncidencias
    {
        return $this->tipoIncidencia;
    }

    public function setTipoIncidencia(?TiposIncidencias $tipoIncidencia): static
    {
        $this->tipoIncidencia = $tipoIncidencia;

        return $this;
    }
}
