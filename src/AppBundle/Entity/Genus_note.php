<?php


namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class Genus_note
{

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */private $username;
    /**
     * @ORM\Column(type="string")
     */
    private $note;
    /**
     * @ORM\Column(type="string")
     */
    private $iscreated;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getIscreated()
    {
        return $this->iscreated;
    }

    /**
     * @param mixed $iscreated
     */
    public function setIscreated($iscreated)
    {
        $this->iscreated = $iscreated;
    }

}