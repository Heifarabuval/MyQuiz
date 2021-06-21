<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 *     fields={"email"},
 *     message="L'email indiqué est déja utilisé"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8",minMessage="Votre passe doit faire minimum 8 caractères")
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password",message="Vous n'avez pas tappé le même mot de passe")
     */
    private $confirm_password;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activation_token;

    /**
     * @ORM\ManyToOne(targetEntity=Quizz::class, inversedBy="users")
     */
    private $quiz;

    /**
     * @ORM\OneToMany(targetEntity=Quizz::class, mappedBy="user")
     */
    private $quizzs;

    /**
     * @ORM\OneToMany(targetEntity=History::class, mappedBy="user")
     */
    private $histories;

    /**
     * @ORM\OneToMany(targetEntity=ConnectionHistory::class, mappedBy="user")
     */
    private $connectionHistories;

    public function __construct()
    {
        $this->quizzs = new ArrayCollection();
        $this->histories = new ArrayCollection();
        $this->connectionHistories = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }

    /**
     * @param mixed $confirm_password
     */
    public function setConfirmPassword($confirm_password): void
    {
        $this->confirm_password = $confirm_password;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles()
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);

    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    public function getQuiz(): ?Quizz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quizz $quiz): self
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * @return Collection|Quizz[]
     */
    public function getQuizzs(): Collection
    {
        return $this->quizzs;
    }

    public function addQuizz(Quizz $quizz): self
    {
        if (!$this->quizzs->contains($quizz)) {
            $this->quizzs[] = $quizz;
            $quizz->setUser($this);
        }

        return $this;
    }

    public function removeQuizz(Quizz $quizz): self
    {
        if ($this->quizzs->removeElement($quizz)) {
            // set the owning side to null (unless already changed)
            if ($quizz->getUser() === $this) {
                $quizz->setUser(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->username;
    }

    /**
     * @return Collection|History[]
     */
    public function getHistories(): Collection
    {
        return $this->histories;
    }

    public function addHistory(History $history): self
    {
        if (!$this->histories->contains($history)) {
            $this->histories[] = $history;
            $history->setUser($this);
        }

        return $this;
    }

    public function removeHistory(History $history): self
    {
        if ($this->histories->removeElement($history)) {
            // set the owning side to null (unless already changed)
            if ($history->getUser() === $this) {
                $history->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ConnectionHistory[]
     */
    public function getConnectionHistories(): Collection
    {
        return $this->connectionHistories;
    }

    public function addConnectionHistory(ConnectionHistory $connectionHistory): self
    {
        if (!$this->connectionHistories->contains($connectionHistory)) {
            $this->connectionHistories[] = $connectionHistory;
            $connectionHistory->setUser($this);
        }

        return $this;
    }

    public function removeConnectionHistory(ConnectionHistory $connectionHistory): self
    {
        if ($this->connectionHistories->removeElement($connectionHistory)) {
            // set the owning side to null (unless already changed)
            if ($connectionHistory->getUser() === $this) {
                $connectionHistory->setUser(null);
            }
        }

        return $this;
    }


}
