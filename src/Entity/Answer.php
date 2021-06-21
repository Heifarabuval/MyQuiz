<?php

namespace App\Entity;

use App\Repository\AnswerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnswerRepository::class)
 */
class Answer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class, inversedBy="answers")
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $answer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $expected_answer;

    private $expected_answer_crypt;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }


    public function setExpectedAnswer(bool $expected_answer): self
    {
        $this->expected_answer = $expected_answer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpectedAnswer()
    {
        return $this->expected_answer;
    }


    /**
     * @return mixed
     */
    public function getExpectedAnswerCrypt()
    {
        return password_hash($this->expected_answer,PASSWORD_DEFAULT);
    }

    /**
     * @param mixed $expected_answer_crypt
     */
    public function setExpectedAnswerCrypt($expected_answer_crypt): void
    {
        $this->expected_answer_crypt = $expected_answer_crypt;
    }


}
