<?php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affiliates;

    /**
     * Constructor
     */
    public function __construct() {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Add jobs
     *
     * @param \Ens\JobeetBundle\Entity\Job $jobs
     * @return Category
     */
    public function addJob(\Ens\JobeetBundle\Entity\Job $jobs) {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \Ens\JobeetBundle\Entity\Job $jobs
     */
    public function removeJob(\Ens\JobeetBundle\Entity\Job $jobs) {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobs() {
        return $this->jobs;
    }

    /**
     * Add affiliates
     *
     * @param \Ens\JobeetBundle\Entity\Affiliate $affiliates
     * @return Category
     */
    public function addAffiliate(\Ens\JobeetBundle\Entity\Affiliate $affiliates) {
        $this->affiliates[] = $affiliates;

        return $this;
    }

    /**
     * Remove affiliates
     *
     * @param \Ens\JobeetBundle\Entity\Affiliate $affiliates
     */
    public function removeAffiliate(\Ens\JobeetBundle\Entity\Affiliate $affiliates) {
        $this->affiliates->removeElement($affiliates);
    }

    /**
     * Get affiliates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffiliates() {
        return $this->affiliates;
    }

    public function __toString() {
        return $this->getName();
    }

}
