<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\EventComment;

/**
* @Route("/comment/add")
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
