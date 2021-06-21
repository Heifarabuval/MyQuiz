<?php

namespace App\Repository;

use App\Entity\ConnectionHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConnectionHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConnectionHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConnectionHistory[]    findAll()
 * @method ConnectionHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConnectionHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConnectionHistory::class);
    }

    // /**
    //  * @return ConnectionHistory[] Returns an array of ConnectionHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConnectionHistory
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
