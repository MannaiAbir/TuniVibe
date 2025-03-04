<?php

namespace App\Repository;

use App\Entity\Evenements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenements>
 */
class EvenementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenements::class);
    }

    //    /**
    //     * @return Evenements[] Returns an array of Evenements objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Evenements
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
  
    public function findAllVisible(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.isVisible = :true')
            ->setParameter('visible', true)
            ->orderBy('e.dateDebut', 'ASC') // Utilisez dateDebut ou dateFin
            ->getQuery()
            ->getResult();
    }


public function findAllWithDetails()
{
    return $this->createQueryBuilder('e')
        ->addSelect('u', 'a')
        ->leftJoin('e.organisateur', 'u')
        ->leftJoin('e.activites', 'a')
        ->getQuery()
        ->getResult();
}

// src/Repository/EventRepository.php
public function findBetweenDates(\DateTime $start, \DateTime $end): array
{
    return $this->createQueryBuilder('e')
        ->where('e.dateDebut BETWEEN :start AND :end')
        ->orWhere('e.dateFin BETWEEN :start AND :end')
        ->setParameter('start', $start->format('Y-m-d H:i:s'))
        ->setParameter('end', $end->format('Y-m-d H:i:s'))
        ->getQuery()
        ->getResult();
}

public function advancedSearch(array $filters)
{
    $qb = $this->createQueryBuilder('e');

    if (!empty($filters['titre'])) {
        $qb->andWhere('e.titre LIKE :titre')
           ->setParameter('titre', '%'.$filters['titre'].'%');
    }

    if (!empty($filters['dateDebut'])) {
        $qb->andWhere('e.dateDebut = :dateDebut')
           ->setParameter('dateDebut', $filters['dateDebut']);
    }

    if (!empty($filters['lieu'])) {
        $qb->andWhere('e.lieu LIKE :lieu')
           ->setParameter('lieu', '%'.$filters['lieu'].'%');
    }

    return $qb->getQuery()->getResult();
}
}
