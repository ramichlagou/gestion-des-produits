<?php

namespace App\Repository;

use App\Entity\Produit1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produit1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit1[]    findAll()
 * @method Produit1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Produit1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit1::class);
    }

    // /**
    //  * @return Produit1[] Returns an array of Produit1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit1
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
