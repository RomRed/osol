<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcMode
 *
 * @ORM\Table(name="ac_mode")
 * @ORM\Entity(repositoryClass= "App\Repository\AcModeRepository")
 */
class AcMode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ac_mode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAcMode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_ac_mode", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $libelleAcMode = 'NULL';

    /**
     * Get the value of idAcMode
     *
     * @return  int
     */ 
    public function getIdAcMode()
    {
        return $this->idAcMode;
    }

    /**
     * Set the value of idAcMode
     *
     * @param  int  $idAcMode
     *
     * @return  self
     */ 
    public function setIdAcMode(int $idAcMode)
    {
        $this->idAcMode = $idAcMode;

        return $this;
    }

    /**
     * Get the value of libelleAcMode
     *
     * @return  string|null
     */ 
    public function getLibelleAcMode()
    {
        return $this->libelleAcMode;
    }

    /**
     * Set the value of libelleAcMode
     *
     * @param  string|null  $libelleAcMode
     *
     * @return  self
     */ 
    public function setLibelleAcMode($libelleAcMode)
    {
        $this->libelleAcMode = $libelleAcMode;

        return $this;
    }
}
