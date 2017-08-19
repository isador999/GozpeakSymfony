<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventComment
 *
 * @ORM\Table(name="event_comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventCommentRepository")
 */
class EventComment
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="submissionIp", type="string", length=32)
     */
    private $submissionIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="pseudo", cascade={"remove"})
     * @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     */
    private $pseudo;

    /**
    * @ORM\ManyToOne(targetEntity="Event", inversedBy="comments", cascade={"remove"})
    * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
    */
    protected $event;


    public function __construct()
    {
      $this->createdAt = new \Datetime('now');
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
     * Set description
     *
     * @param string $description
     *
     * @return EventComment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set submissionIp
     *
     * @param string $submissionIp
     *
     * @return EventComment
     */
    public function setSubmissionIp($submissionIp)
    {
        $this->submissionIp = $submissionIp;

        return $this;
    }

    /**
     * Get submissionIp
     *
     * @return string
     */
    public function getSubmissionIp()
    {
        return $this->submissionIp;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EventComment
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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return EventComment
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
     * Set event
     *
     * @param \AppBundle\Entity\Event $event
     *
     * @return EventComment
     */
    public function setEvent(\AppBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AppBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
   * Set member
   *
   * @param \AppBundle\Entity\Member $member
   */
    public function setMember(\AppBundle\Entity\Member $member)
    {
        $this->member = $member;
    }

    /**
     * Get member
     *
     * @return \AppBundle\Entity\Member
     */
    public function getMember()
    {
        return $this->member;
    }
}
