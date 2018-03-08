<?php
namespace HomeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class HomeController extends Controller
{

  /**
   * @Route("/", name="home")
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
    $connection = $this->get('translator')->trans('connection');
    $event = $this->get('translator')->trans('event');


    // $lastevents = $this->lastEventsAction();

    return $this->render('HomeBundle::home.html.twig', array(
      'registration' => $registration,
      'connection' => $connection,
      'event' => $event
      )
    );
  }

  public function FooterAction()
  {
    $year = date("Y");

    return $this->render('footer.html.twig', array(
        'year' => $year
      )
    );
  }
}
