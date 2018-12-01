<?php
namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\TestLevel", mappedBy="user", cascade={"persist", "remove"})
     */
    private $testLevel;

    public function __construct()
    {
        parent::__construct();
    }

    public function getTestLevel(): ?TestLevel
    {
        return $this->testLevel;
    }

    public function setTestLevel(TestLevel $testLevel): self
    {
        $this->testLevel = $testLevel;

        // set the owning side of the relation if necessary
        if ($this !== $testLevel->getUser()) {
            $testLevel->setUser($this);
        }

        return $this;
    }
}