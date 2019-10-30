<?php


namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class Genus
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $sub_family;
    /**
     * @ORM\Column(type="string")
     */
    private $species_count;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSubFamily()
    {
        return $this->sub_family;
    }

    /**
     * @param mixed $sub_family
     */
    public function setSubFamily($sub_family)
    {
        $this->sub_family = $sub_family;
    }

    /**
     * @return mixed
     */
    public function getSpeciesCount()
    {
        return $this->species_count;
    }

    /**
     * @param mixed $species_count
     */
    public function setSpeciesCount($species_count)
    {
        $this->species_count = $species_count;
    }

}