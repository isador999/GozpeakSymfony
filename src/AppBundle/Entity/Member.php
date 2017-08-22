<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 *
 * @ORM\Table(name="member")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberRepository")
 */
class Member
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
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=20, unique=true)
     * @ORM\OneToMany(targetEntity="EventComment", mappedBy="pseudo", cascade={"remove", "persist"})
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var array
     *
     * @ORM\Column(name="nationalities", type="json_array", nullable=true)
     */
    private $nationalities;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var array
     *
     * @ORM\Column(name="languages", type="json_array", nullable=true)
     */
    private $languages;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="random_key", type="string", length=32, nullable=true)
     */
    private $randomKey;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_premium", type="boolean")
     */
    private $isPremium;

    /**
     * @ORM\OneToMany(targetEntity="Event", mappedBy="organizer", cascade={"remove", "persist"})
     */
    protected $events;


    public function __construct()
    {
      $this->createdAt = new \DateTime('now');
      $this->isActive = 0;
      $this->isPremium = 0;
    }


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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Member
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Member
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Member
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Member
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set nationalities
     *
     * @param array $nationalities
     *
     * @return Member
     */
    public function setNationalities($nationalities)
    {
        $this->nationalities = $nationalities;

        return $this;
    }

    /**
     * Get nationalities
     *
     * @return array
     */
    public function getNationalities()
    {
        return $this->nationalities;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Member
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set languages
     *
     * @param array $languages
     *
     * @return Member
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Member
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Member
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set randomKey
     *
     * @param string $randomKey
     *
     * @return Member
     */
    public function setRandomKey($randomKey)
    {
        $this->randomKey = $randomKey;

        return $this;
    }

    /**
     * Get randomKey
     *
     * @return string
     */
    public function getRandomKey()
    {
        return $this->randomKey;
    }

    /**
     * Set isPremium
     *
     * @param boolean $isPremium
     *
     * @return Member
     */
    public function setIsPremium($isPremium)
    {
        $this->isPremium = $isPremium;

        return $this;
    }

    /**
     * Get isPremium
     *
     * @return bool
     */
    public function getIsPremium()
    {
        return $this->isPremium;
    }

    /**
     * Add event
     *
     * @param \AppBundle\Entity\Event $event
     *
     * @return Member
     */
    public function addEvent(\AppBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \AppBundle\Entity\Event $event
     */
    public function removeEvent(\AppBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add comments
     *
     * @param \AppBundle\Entity\EventComment $comments
     */
    public function addEventComment(\AppBundle\Entity\EventComment $comments)
    {
        $this->comments[] = $comments;
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
