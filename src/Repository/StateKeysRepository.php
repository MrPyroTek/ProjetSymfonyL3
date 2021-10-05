<?php

namespace App\Repository;

use App\Entity\StateKeys;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StateKeys|null find($id, $lockMode = null, $lockVersion = null)
 * @method StateKeys|null findOneBy(array $criteria, array $orderBy = null)
 * @method StateKeys[]    findAll()
 * @method StateKeys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StateKeysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StateKeys::class);
    }

    // /**
    //  * @return StateKeys[] Returns an array of StateKeys objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StateKeys
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
