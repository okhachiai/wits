<?php

namespace Wits\FrontBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SpeakersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SpeakersRepository extends EntityRepository
{
    public function getspeakersByConferenceEdition($edition){
        return $this->createQueryBuilder('s')
            ->join('s.conference', 'c')
            ->where('c.edition = :edition AND s.online = :status ')
            ->setParameter('edition', $edition)
            ->setParameter('status', true)
            ->getQuery()
            ->getResult();
    }
}
