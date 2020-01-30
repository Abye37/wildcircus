<?php

namespace App\Repository;

use App\Entity\Expose;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Expose|null find($id, $lockMode = null, $lockVersion = null)
 * @method Expose|null findOneBy(array $criteria, array $orderBy = null)
 * @method Expose[]    findAll()
 * @method Expose[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExposeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Expose::class);
    }

    // /**
    //  * @return Expose[] Returns an array of Expose objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Expose
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
