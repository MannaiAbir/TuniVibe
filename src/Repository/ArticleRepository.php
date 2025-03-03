<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }


    public function findAllWithComments()
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.commentaires', 'c') // Changé de 'comments' à 'commentaires'
            ->addSelect('c')
            ->getQuery()
            ->getResult();
    }


    public function findByFilters(?string $search, ?string $category, ?string $date): array
{
    $queryBuilder = $this->createQueryBuilder('a');

    if ($search) {
        $queryBuilder
            ->andWhere('a.title LIKE :search OR a.content LIKE :search')
            ->setParameter('search', '%' . $search . '%');
    }

    if ($category) {
        $queryBuilder
            ->andWhere('a.category = :category')
            ->setParameter('category', $category);
    }

    if ($date) {
        $queryBuilder
            ->andWhere('a.createdAt = :date')
            ->setParameter('date', $date);
    }

    return $queryBuilder->getQuery()->getResult();
}


    //    /**
    //     * @return Article[] Returns an array of Article objects
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

    //    public function findOneBySomeField($value): ?Article
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
