<?php

namespace App\Repository;

use App\Entity\Fatam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fatam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fatam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fatam[]    findAll()
 * @method Fatam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FatamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fatam::class);
    }

    // /**
    //  * @return Fatam[] Returns an array of Fatam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fatam
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
