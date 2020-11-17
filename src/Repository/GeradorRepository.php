<?php

namespace App\Repository;

use App\Entity\Gerador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gerador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gerador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gerador[]    findAll()
 * @method Gerador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeradorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gerador::class);
    }

    // /**
    //  * @return Gerador[] Returns an array of Gerador objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gerador
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
