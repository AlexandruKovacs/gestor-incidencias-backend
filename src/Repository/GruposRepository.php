<?php

namespace App\Repository;

use App\Entity\Grupos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Grupos>
 *
 * @method Grupos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grupos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grupos[]    findAll()
 * @method Grupos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GruposRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grupos::class);
    }

//    /**
//     * @return Grupos[] Returns an array of Grupos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Grupos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
