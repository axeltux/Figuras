<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fig
 *
 * @ORM\Table(name="fig")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FigRepository")
 */
abstract class Fig
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numLados", type="integer")
     */
    private $numLados;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numLados
     *
     * @param integer $numLados
     *
     * @return Fig
     */
    public function setNumLados($numLados)
    {
        $this->numLados = $numLados;

        return $this;
    }

    /**
     * Get numLados
     *
     * @return int
     */
    public function getNumLados()
    {
        return $this->numLados;
    }

    abstract protected function getArea();
    abstract protected function getPerimetro();
    abstract protected function printr();
}

