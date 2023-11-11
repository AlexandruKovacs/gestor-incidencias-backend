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
}
