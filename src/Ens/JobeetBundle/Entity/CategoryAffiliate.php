<?php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ens\JobeetBundle\Entity\Category
     */
    private $category;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \Ens\JobeetBundle\Entity\Category $category
     * @return CategoryAffiliate
     */
    public function setCategory(\Ens\JobeetBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Ens\JobeetBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
