<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="app_listing")
 * @ORM\Entity(repositoryClass="App\Repository\ListingRepository")
 */
class Listing
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $listing_id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $brand;
    /**
     * @ORM\Column(type="string", length=100)
     */

    private $type;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fit;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $color;
    /**
     * @ORM\Column(type="string", length=65)
     */
    private $cost;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bulletOne;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bulletTwo;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $description;
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
    private $image;
    /**
     * @ORM\Column(type="integer", length=100)
     */
    private $userId;
    /**
     * @ORM\Column(type="datetime")
     */
    private $created;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;

    public function getListing_id()
    {
        return $this->listing_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getFit()
    {
        return $this->fit;
    }

    public function setFit($fit)
    {
        $this->fit = implode(" ,",$fit);
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = implode(" ,",$color);
    }
    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }
    public function getBulletOne()
    {
        return $this->bulletOne;
    }

    public function setBulletOne($bulletOne)
    {
        $this->bulletOne = $bulletOne;
    }
    public function getBulletTwo()
    {
        return $this->bulletTwo;
    }

    public function setBulletTwo($bulletTwo)
    {
        $this->bulletTwo = $bulletTwo;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
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
