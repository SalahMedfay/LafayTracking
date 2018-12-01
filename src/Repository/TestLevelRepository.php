<?php

namespace App\Repository;

use App\Entity\TestLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestLevel|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestLevel|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestLevel[]    findAll()
 * @method TestLevel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestLevelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestLevel::class);
    }

    // /**
    //  * @return TestLevel[] Returns an array of TestLevel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestLevel
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
