<?php

namespace App\Repository;

use App\Entity\AulasEstancias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AulasEstancias>
 *
 * @method AulasEstancias|null find($id, $lockMode = null, $lockVersion = null)
 * @method AulasEstancias|null findOneBy(array $criteria, array $orderBy = null)
 * @method AulasEstancias[]    findAll()
 * @method AulasEstancias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AulasEstanciasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AulasEstancias::class);
    }

//    /**
//     * @return AulasEstancias[] Returns an array of AulasEstancias objects
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

//    public function findOneBySomeField($value): ?AulasEstancias
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
