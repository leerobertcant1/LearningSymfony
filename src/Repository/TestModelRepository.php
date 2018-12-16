<?php

namespace App\Repository;

use App\Entity\TestModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestModel[]    findAll()
 * @method TestModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestModelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestModel::class);
    }

    // /**
    //  * @return TestModel[] Returns an array of TestModel objects
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
    public function findOneBySomeField($value): ?TestModel
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
