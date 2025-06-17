<?php

namespace App\Entity;

use Symfony\component\validator\Constraints as Assert;

class Contact
{
    #[Assert\NotBlank(message: "Le prénom est obligatoire!")]
    #[Assert\length(
        min: 2,
        max: 50,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le prénom doit contenir au maximum {{ limit }} caractères",
    )]
    #[Assert\Regex(
        pattern: '/^[\p{L}\p{M}-\'\s]+$/u',
        message: "Le prénom contient des caractères invalides",
    )]
    private string $name;

    #[Assert\NotBlank(message: "Le mail est obligatoire")]
    #[Assert\Email(message: "L'adresse email est invalide'")]
    private string $email;

    private string $service = '';

    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire")]
    #[Assert\Regex(
        pattern: '/^\+?[0-9\s\-\(\)\.]{7,20}$/',
        message: "Le numéro de téléphone est invalide",
    )]
    private string $phoneNumber;

    #[Assert\NotBlank(message: "Le message est obligatoire")]
    #[Assert\length(
        min: 10,
        max: 1000,
        minMessage: "Le message doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le message doit contenir au maximum {{ limit }} caractères",
    )]
      #[Assert\Regex(
        pattern: '/^[^<>]+$/',
        message: "Je t'ai bien eu, tu n'as pas réussi à m'envoyer des spams",
    )]
    private string $message;


     // Getters et Setters

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }
}
