<?php

namespace App\Entity;

use App\Repository\ConnectionHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConnectionHistoryRepository::class)
 */
class ConnectionHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="connectionHistories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $connectedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getConnectedAt(): ?\DateTimeInterface
    {
        return $this->connectedAt;
    }

    public function setConnectedAt(\DateTimeInterface $connectedAt): self
    {
        $this->connectedAt = $connectedAt;

        return $this;
    }
}
