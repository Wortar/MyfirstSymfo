<?php

namespace App\Repository;

use App\Entity\Os;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Os|null find($id, $lockMode = null, $lockVersion = null)
 * @method Os|null findOneBy(array $criteria, array $orderBy = null)
 * @method Os[]    findAll()
 * @method Os[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Os::class);
    }

//    /**
//     * @return Os[] Returns an array of Os objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Os
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
