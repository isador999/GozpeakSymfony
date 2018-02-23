<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\Member;


class MemberController extends Controller {

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
   $member->setEmail("jeanbapt37@hotmail.fr");

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
 * @Route("/member/{id}/", requirements={"id": "[1-9]\d*"}, name="member")
 */

}
