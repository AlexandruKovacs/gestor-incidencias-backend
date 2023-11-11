<?php

namespace App\Repository;

use App\Entity\TiposIncidencias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TiposIncidencias>
 *
 * @method TiposIncidencias|null find($id, $lockMode = null, $lockVersion = null)
 * @method TiposIncidencias|null findOneBy(array $criteria, array $orderBy = null)
 * @method TiposIncidencias[]    findAll()
 * @method TiposIncidencias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TiposIncidenciasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TiposIncidencias::class);
    }
}
