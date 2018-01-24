<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 22.01.2018
 * Time: 16:05
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="app_master")
 * @ORM\Entity(repositoryClass="App\Repository\MasterListingRepository")
 */
class MasterListing
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $master_id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $user_id;
    /**
     * @ORM\Column(type="string")
    /**
     * @Assert\Image(
     *     maxWidth = 4500,
     *     maxHeight = 5400
     * )
     *     detectCorrupted = true,
     *     corruptedMessage = "Yhe image is Corrupted! Please upload a valid PNG"
     *     mimeTypes = {"image/png"},
     *     mimeTypesMessage = "Please upload a valid PNG"
     * )
     */
    private $filename;
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    /**
     * @ORM\Column(type="datetime")
     */
    private $created;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;

    public function getMaster_id()
    {
        return $this->master_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }
    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}
