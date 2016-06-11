<?php

namespace Wits\FrontBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ConferenceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConferenceRepository extends EntityRepository
{
    public function getAllConferences(){
        return $this->findAll();
    }

    public function getLasteConference(){

        $last_entity = $this->createQueryBuilder('e')
            ->select('e')
            ->orderBy('e.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $last_entity;
    }
}
