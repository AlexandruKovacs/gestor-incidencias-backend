<?php

namespace App\Entity;

class Profesores
{
    private ?int $id = null;

    private ?string $nombre = null;

    private ?string $apellidos = null;

    private ?string $usuario = null;

    private ?string $password = null;

    private ?string $correo = null;

    private ?Departamentos $departamento = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): static
    {
        $this->correo = $correo;

        return $this;
    }

    public function getDepartamento(): ?Departamentos
    {
        return $this->departamento;
    }

    public function setDepartamento(?Departamentos $departamento): static
    {
        $this->departamento = $departamento;

        return $this;
    }
}
