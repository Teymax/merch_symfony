<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $login;
     /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;
	 /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;
     /**
     * @ORM\Column(type="string",)
     */
    private $regDate;

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getRegDate()
    {
        return $this->regDate;
    }

    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;
    }


}
