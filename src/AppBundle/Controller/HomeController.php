<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\SessionInit;

class HomeController extends Controller
{

  /**
   * @Route("/home")
   * @Route("/")
   */
  public function returnHomeAction(Request $request)
  {
    $InitSession = new SessionInitController($request->server->get('HTTP_HOST'), $request->server->get('HTTPS'), $request->server->get('HTTP_ACCEPT_LANGUAGE'));
    $logged = $InitSession->checkLoginStatus();

    // require("variables.php");
    // require("language/".$InitSession->locale.".php");

    // $registration = $this->get('translator')->trans('registration');
    // $connection = $this->get('translator')->trans('connection');
    // $event = $this->get('translator')->trans('event');
    $city = $this->get('translator')->trans('city');

    return $this->render('home.html.twig', array(
      'baseURL' => $InitSession->baseURL,
      'promote_text' => "LA référence des langues étrangères à Rennes",
      'registration' => "registration",
      'connection' => "connection",
      'event' => "event",
      'navbar_template' => 'header-'.$logged.'.html.twig',
      // 'city' => $generic[$_SESSION['language']]['city'][0]['name'],
      'city' => $city,
      'modals' => array("modal-navbar.php", "modal-footer.php", 'modal-postevent-'.$logged.'.php'),
      'footer_text' => array('title' => "FooterTitle",
                              'contact' => "Contact",
                              'premium' => "Premium",
                              'what' => "C'est quoi Gozpeak",
                              'socials' => "Facebook"
                            ),
      'footer_titles' => array('contact' => "Contact",
                            'premium' => "Premium",
                            'what' => "What is it"
                          )
      // 'footer_text' => array('title' => $footer[$_SESSION['language']]['title'],
      //                         'contact' => $footer[$_SESSION['language']]['contact']['text'],
      //                         'premium' => $footer[$_SESSION['language']]['premium']['text'],
      //                         'what' => $generic[$_SESSION['language']]['what'][0]['text'],
      //                         'socials' => $footer[$_SESSION['language']]['socials']['desc']
      //                       ),
      // 'footer_titles' => array('contact' => $footer[$_SESSION['language']]['contact']['title'],
      //                       'premium' => $footer[$_SESSION['language']]['premium']['title'],
      //                       'what' => $generic[$_SESSION['language']]['what'][0]['title']
      //                     )
    ));
  }
}
