<?php

namespace App\Repository;

use App\Entity\AulaEstancia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AulaEstancia>
 *
 * @method AulaEstancia|null find($id, $lockMode = null, $lockVersion = null)
 * @method AulaEstancia|null findOneBy(array $criteria, array $orderBy = null)
 * @method AulaEstancia[]    findAll()
 * @method AulaEstancia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AulaEstanciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AulaEstancia::class);
    }

//    /**
//     * @return AulaEstancia[] Returns an array of AulaEstancia objects
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

//    public function findOneBySomeField($value): ?AulaEstancia
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
