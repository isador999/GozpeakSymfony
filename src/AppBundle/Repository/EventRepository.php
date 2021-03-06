<?php

namespace AppBundle\Repository;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends \Doctrine\ORM\EntityRepository
{

  // public function getLastEvents($limit = 2) {
  //   $result = $this->getEntityManager()
  //     ->createQuery('
  //       SELECT
  //           d
  //       FROM
  //           AppBundle:Event d
  //       WHERE
  //           d.organizer = :organizer_id
  //       ORDER BY
  //           d.id DESC
  //   ')
  //   ->setMaxResults($limit)
  //   ->setParameter('organizer_id', '2')
  //   ->getResult();
  //
  //   return $result;
  // }

  public function getLastEvent($limit = 1) {
    $qbuilder = $this->getEntityManager()->createQueryBuilder();
    $lastevent = $qbuilder->select('e')
                       ->from('AppBundle:Event', 'e')
                       ->where('e.category = :category')
                       ->setParameter('category', 'run')
                       ->orderBy('e.plannedAt','ASC')
                       ->setMaxResults(1)
                       ->getQuery()
                       ->getSingleResult();

    return $lastevent;
  }

  public function getEventByName($id) {
    $qbuilder = $this->getEntityManager()->createQueryBuilder();
    $result = $qbuilder->select('e')
                      ->from('AppBundle:Event', 'e')
                      ->where('e.id = :id')
                      ->setParameter('id', $id)
                      ->getQuery()->getSingleResult();

    return $result;
  }


  public function getSummaryEventsByCategory($category) {
    $qbuilder = $this->getEntityManager()->createQueryBuilder();
    $result = $qbuilder->select('e')
                      ->from('AppBundle:Event', 'e')
                      ->where('e.category = :category')
                      ->setParameter('category', $category)
                      ->getQuery()->getResult();

    return $result;

    // $queryBuilder = $this->getEntityManager()->createQueryBuilder('e')->where('e.category > :category')->setParameter('category', 'run')->orderBy('e.createdAt', 'DESC') ->getQuery();

    // $queryBuilder->add('select','d')
    //              ->add('from','AppBundle:Event d')
    //              ->add('where','d.category = :category')
    //              ->add('orderBy','d.plannedAt DESC')
    //              ->setParameter('category', $category);

    // $events = $queryBuilder->getResult();
    // return $events;

  }

}
