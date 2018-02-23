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
   * @Route("/home", name="home")
   * @Route("/")
   */
  public function HomeAction(Request $request)
  {
    // $InitSession = new SessionInitController($request->server->get('HTTP_HOST'), $request->server->get('HTTPS'), $request->server->get('HTTP_ACCEPT_LANGUAGE'));
    // $logged = $InitSession->checkLoginStatus();
    // $city = $this->get('translator')->trans('city');

    // $InitSession = new SessionInitController();
    // $baseURL = $InitSession->setBaseURL($request->server->get('HTTP_HOST'), $request->server->get('HTTPS'));

    // $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
    // $last_event = $em->getLastEvent();

    // dump('toto');
    // die();
    $registration = $this->get('translator')->trans('registration');

    // $lastevents = $this->lastEventsAction();

    return $this->render('home.html.twig', array(
      'registration' => $registration
      )
    );
  }

}
