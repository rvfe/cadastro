<?php

namespace App\Repository;

use App\Entity\SymfonyServerStartD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SymfonyServerStartD|null find($id, $lockMode = null, $lockVersion = null)
 * @method SymfonyServerStartD|null findOneBy(array $criteria, array $orderBy = null)
 * @method SymfonyServerStartD[]    findAll()
 * @method SymfonyServerStartD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SymfonyServerStartDRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SymfonyServerStartD::class);
    }

    // /**
    //  * @return SymfonyServerStartD[] Returns an array of SymfonyServerStartD objects
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
    public function findOneBySomeField($value): ?SymfonyServerStartD
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
