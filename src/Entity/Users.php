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



}
