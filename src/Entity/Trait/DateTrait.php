<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    #[ORM\Column(type: 'datetime_immutable', nullable: true, options:['default'=>'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmuTable $createdAt=null;
    
    #[ORM\Column(type: 'datetime_immutable', nullable: true, options:['default'=>'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmuTable $updatedAt=null;

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    #[ORM\PrePersist]
    public function setCreatedAt(): self
    {
        $this->createdAt = new \DateTimeImmutable();

        return $this->createdAt;
    }



    public function getPreupdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    #[ORM\PreUpdate]
    public function setUpdatedAt(): self
    {
        $this->updatedAt = new \DateTimeImmutable();

        return $this->updatedAt;
    }
   
}

