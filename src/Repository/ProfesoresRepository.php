<?php

namespace App\Repository;

use App\Entity\Profesores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Profesores>
 *
 * @method Profesores|null find($id, $lockMode = null, $lockVersion = null)
 * @method Profesores|null findOneBy(array $criteria, array $orderBy = null)
 * @method Profesores[]    findAll()
 * @method Profesores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfesoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Profesores::class);
    }
}
