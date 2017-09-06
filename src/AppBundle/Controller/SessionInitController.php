<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SessionInitController extends Controller
{

  private $host;
  private $protocol;
  public $locale;
  public $baseURL;
  public $logged;

  // public function __construct($host, $protocol, $locale)
  // {
  //   header('Content-Type: text/html; charset=UTF-8');
  //   //
  //   // $this->setBaseURL($host, $protocol);
  //   // $this->locale = $locale{0}.$locale{1};
  //   //
  //   // $_SESSION['language'] = $this->locale;
  // }

  public function setBaseURL($host, $protocol)
  {
    if(!empty($protocol)) {
      $this->baseURL = 'https://'.$host;
    } else {
      $this->baseURL = 'http://'.$host;
    }
  }

  public function checkLoginStatus()
  {
    if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    	$this->logged = "notlogged";
    } elseif (isset($_SESSION['logged']) && $_SESSION['logged']) {
    	$this->logged = "logged";
    } else {
    	session_destroy();
    	$this->logged = "notlogged";
  	}

    return $this->logged;

  }
}
