<?php

namespace App\Repository;

use App\Entity\Departamentos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Departamentos>
 *
 * @method Departamentos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Departamentos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Departamentos[]    findAll()
 * @method Departamentos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartamentosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Departamentos::class);
    }
}
