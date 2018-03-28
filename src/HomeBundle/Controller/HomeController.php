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
    $trans = $this->get('translator');
    $registration = $trans->trans('registration');
    $connection = $trans->trans('connection');
    $event = $trans->trans('event');

    $art_text = $trans->trans('activities.art');
    $run_text = $trans->trans('activities.run');
    $eat_text = $trans->trans('activities.eat');
    $party_text = $trans->trans('activities.party');

    // $lastevents = $this->lastEventsAction();

    return $this->render('HomeBundle::home.html.twig', array(
      'registration' => $registration,
      'connection' => $connection,
      'event' => $event,
      'art_text' => $art_text,
      'run_text' => $run_text,
      'eat_text' => $eat_text,
      'party_text' => $party_text,
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
