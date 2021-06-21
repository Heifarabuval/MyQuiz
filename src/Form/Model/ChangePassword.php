<?php


namespace App\Form\Model;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class ChangePassword
{

    /**
     * @SecurityAssert\UserPassword(
     *     message = "Le mot de passe ne correspond pas"
     * )
     */
    private $oldPassword;

    /**
     * @Assert\NotEqualTo(propertyPath="oldPassword",message="Votre nouveau mot de passe doit etre différent de l'actuel")
     * @Assert\Length(min="8",minMessage="Votre mot de passe doit faire minimum 8 caractères")
     */
    private $newPassword;

    /**
     * @Assert\EqualTo(propertyPath="newPassword",message="Vous n'avez pas tappé le même mot de passe")
     */
    private $newConfirmPassword;

    /**
     * @return mixed
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * @param mixed $oldPassword
     */
    public function setOldPassword($oldPassword): void
    {
        $this->oldPassword = $oldPassword;
    }

    /**
     * @return mixed
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param mixed $newPassword
     */
    public function setNewPassword($newPassword): void
    {
        $this->newPassword = $newPassword;
    }

    /**
     * @return mixed
     */
    public function getNewConfirmPassword()
    {
        return $this->newConfirmPassword;
    }

    /**
     * @param mixed $newConfirmPassword
     */
    public function setNewConfirmPassword($newConfirmPassword): void
    {
        $this->newConfirmPassword = $newConfirmPassword;
    }



}