<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\SessionInit;
use AppBundle\Entity\Event;
use AppBundle\Entity\EventComment;
use AppBundle\Entity\Member;


class HomeController extends Controller
{
  /**
  * @Route("/lastevents/")
  */
  private function lastEventsAction()
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

    return $lastevents;
    // return $this->render('lastevents.html.twig', ['lastevents' => $lastevents]);
  }


  /**
     * Display all details of an event
     *
     * @Route("/event/{id}", name="event")
     * @Method({"GET"})
     */
  public function showEventAction($id) {
    $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
    $event = $em->getEventByName($id);

    // dump($event);
    // die();

    return $this->render('showEvent.html.twig', ['event' => $event]);
  }


  /**
     * Display all events depending on category
     *
     * @Route("/list/{category}", name="list")
     * @Method({"GET"})
     */
  public function listEventsAction($category) {

    $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
    $events = $em->getSummaryEventsByCategory($category);

    return $this->render('listEvents.html.twig', ['events' => $events]);
  }

  /**
   * @Route("/home")
   * @Route("/")
   */
  public function HomeAction(Request $request)
  {
    // $InitSession = new SessionInitController($request->server->get('HTTP_HOST'), $request->server->get('HTTPS'), $request->server->get('HTTP_ACCEPT_LANGUAGE'));
    // $logged = $InitSession->checkLoginStatus();
    // $city = $this->get('translator')->trans('city');

    $InitSession = new SessionInitController();
    $baseURL = $InitSession->setBaseURL($request->server->get('HTTP_HOST'), $request->server->get('HTTPS'));

    $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
    $last_event = $em->getLastEvent(1);

    // dump($last_event);
    // die();

    $registration = $this->get('translator')->trans('registration');
    $connection = $this->get('translator')->trans('connection');
    $event = $this->get('translator')->trans('event');

    // $lastevents = $this->lastEventsAction();

    return $this->render('home.html.twig', array(
      'baseURL' => $baseURL,
      'registration' => $registration,
      'connection' => $connection,
      'event' => $event,
      'lastevent' => $last_event
      )
    );
  }


 /**
 * @Route("/postevent/")
 */
 public function postEventAction()
 {

    // $event = new Event();
    // $event->setOrganizer("demozpeak");
    // $event->setCategory("run");
    // $event->setName("Sortie Piscine");
    // $event->setPlace("Piscine St-Georges");
    // $event->setDescription("Je propose une sortie piscine... etc... ");
    // $event->setPlannedAt(new \DateTime('now'));
    // $event->setSpokenLanguage("espagnol");

    // echo "Création événement: ".$event->getName();
    // echo "Evenement proposé par: ".$event->getOrganizer();

    // $em = $this->getDoctrine()->getManager();
    // $em->persist($event);
    // $em->flush();

    // exit;

    // $id = 1;
    // $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
    // echo "L'event récupéré à les informations suivantes :  ID : ".$event->getId().",  Name : ".$event->getName();
    //
    // exit;

  }



  /**
  * @Route("/register/")
  */
  public function registerMemberAction()
  {

   $member = new Member();
   $member->setPseudo("demozpeak");
   $member->setFirstname("Jean-Baptiste");

   $pass = "P@ssw01rd";
   $member->setPassword($pass);

   $member->setLastname("Philippe");
   $member->setEmail("jeanbapt37@homtail.fr");

   echo "Pseudo ".$member->getPseudo();
   echo "adresse email: ".$member->getEmail();

   $em = $this->getDoctrine()->getManager();
   $em->persist($member);
   $em->flush();

   // Get registered user.
   $id = 2;
   $new_member = $this->getDoctrine()->getRepository('AppBundle:Member')->find($id);

   echo "Les informations de l'utilisateur sont :  Nom : ".$new_member->getLastname()." ,  prénom : ".$new_member->getFirstname()." ,  son email est : ".$new_member->getEmail();
   echo "L'utilisateur ".$new_member->getFirstname()." a bien été enregistré";

   exit;

   // $id = 1;
   // $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
   // echo "L'event récupéré à les informations suivantes :  ID : ".$event->getId().",  Name : ".$event->getName();
   //
   // exit;

 }


 /**
 * @Route("/addcomment/")
 */
 public function addCommentAction()
 {

    // $id = 2;
    // $member = $this->getDoctrine()->getRepository('AppBundle:Member')->find($id);
    // $pseudo = $member->getPseudo();
    //
    // $comment = new EventComment();
    // $comment->setPseudo($pseudo);
    // $comment->setDescription("Test de commentaire");
    // $comment->setSubmissionIp("192.168.122.175");
    // $comment->setOrganizer($id);


    $em = $this->getDoctrine()->getManager();
    $id = 2;

    $member = $this->getDoctrine()->getRepository('WmdWatchMyDeskBundle:Desk')->find($id);
    echo "Le membre récupéré porte l'ID: ".$member->getId()." et le pseudo: ".$member->getPseudo();

    $comment = new EventComment();
    $comment->setDescription("Mon premier commentaire: TEST");
    // $comment->setSubmissionIp($this->getRequest()->server->get('REMOTE_ADDR'));
    $comment->setSubmissionIp("192.168.122.175");
    $comment->setMember($member); // On lie le commentaire à notre bureau d'ID 1

    $em->persist($comment); // On persist le commentaire 1

    $comment2 = new EventComment();
    $comment2->setDescription("Mon deuxième commentaire: TEST2");
    // $comment2->setSubmissionIp($this->getRequest()->server->get('REMOTE_ADDR'));
    $comment->setSubmissionIp("192.168.122.175");
    $comment2->setMember($member); // On lie le commentaire à notre bureau d'ID 1

    $em->persist($comment2); // On persist le commentaire 2

    $em->flush(); // On sauvegarde en BDD les deux commentaires

    exit;


  }


 /**
 * @Route("/addevents/")
 */
 public function addEventsAction()
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
}
