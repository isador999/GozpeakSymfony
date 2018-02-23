<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\Event;


class EventController extends Controller {

  /**
  * @Route("/event/add/", name="addevent")
  */
  public function addEventAction()
  {

   $em = $this->getDoctrine()->getManager();
   $id = 2;

   $member = $this->getDoctrine()->getRepository('AppBundle:Member')->find($id);
   echo "L'utilisateur existant est ".$member->getPseudo()."\n";
   echo "\n";

   $event = new Event();
   $event->setCategory("run");
   $event->setName("Sortie Piscine");
   $event->setPlace("Piscine St Georges");
   $event->setDescription("Je propose une sortie piscine... etc... ");
   $event->setPlannedAt(new \DateTime('now'));
   $event->setSpokenLanguage("espagnol");
   $event->setOrganizer($id);

   $em->persist($event);

   $event2 = new Event();
   $event2->setCategory("art");
   $event2->setName("Beaux arts");
   $event2->setPlace("Musée des beaux arts, République");
   $event2->setDescription("Je propose une visite du musée ... etc... ");
   $event2->setPlannedAt(new \DateTime('now'));
   $event2->setSpokenLanguage("italien");
   $event2->setOrganizer($id);

   $em->persist($event2);

   $em->flush();
   exit;

   }

  /**
     * Display all events depending on category
     *
     * @Route("/event/list/{category}", name="listevents")
     * @Method({"GET"})
     */
  public function listEventsAction($category) {

    $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
    $events = $em->getSummaryEventsByCategory($category);

    return $this->render('listEvents.html.twig', ['events' => $events]);
  }

  /**
  * Display all details of an event
  *
  * @Route("/event/{id}", requirements={"id": "[1-9]\d*"}, name="event")
  * @Method({"GET"})
  */
  public function showEventAction($id) {
    $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
    $event = $em->getEventByName($id);

    return $this->render('showEvent.html.twig', ['event' => $event]);
  }

  /**
  * @Route("/event/last", name="lastevents")
  */
  public function lastEventsAction()
  {
    // $em = $this->getDoctrine()->getManager();
    // $lastevents = $em->getRepository('AppBundle:Event')->getLastEvents();

    $em = $this->getDoctrine()->getManager();
    $lastevents = $em->getRepository('AppBundle:Event')->findBy(
      array('category'=>'run'),
      array('createdAt'=>'desc'),
      5,
      0
    );

    return $this->render('home.html.twig', array('lastevents' => $lastevents)) ;
    // return $this->render('lastevents.html.twig', ['lastevents' => $lastevents]);
  }

}
