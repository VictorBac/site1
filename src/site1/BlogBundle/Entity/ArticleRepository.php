<?php

namespace site1\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{

    public function getArticles()
    {
      $qb = $this->createQueryBuilder('a')
                 ->leftJoin('a.categories', 'cat')
                 ->addSelect('cat')
                 ->leftJoin('a.image', 'i')
                 ->addSelect('i')
                 ->orderBy('a.date', 'DESC');

       return $qb->getQuery()->getResult();
    }

    public function getSelectList()
    {
        $qb = $this->creatQueryBuilder('a')
                   ->where('a.publication = 1');

          return $qb;
    }

    public function getArticleAvecCommentaire($id)
    {
      $qb = $this->createQueryBuilder('a')
                 ->where('a.id = :id')
                  ->setParameter('id', $id)
                 ->leftJoin('a.commentaires', 'c')
                 ->addSelect('c');

       $resultat = $qb->getQuery()->getOneOrNullResult();

      return $resultat;
    }

    public function getDerniers($nbr)
    {
      $qb = $this->createQueryBuilder('a');
      $qb->orderBy('a.date', 'DESC')->setMaxResults( $nbr );

      $resultat = $qb->getQuery()->getResult();

      return $resultat;
    }

    public function myFindAll()
    {
        $queryBuilder = $this->createQueryBuilder('a');

        // On a fini de construire notre requête
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();

        // On récupère les résultats à partir de la Query
        $resultats = $query->getResult();

        // On retourne ces résultats
        return $resultats;
    }

    public function myFindOne($id)
    {
        // On passe par le QueryBuilder vide de l'EntityManager pour l'exemple
        $qb = $this->_em->createQueryBuilder();

        $qb->select('a')
             ->from($this->_entityName, 'a')
             ->where('a.id = :id')
             ->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }

    public function myFind()
    {
      $qb = $this->createQueryBuilder('a');

      // On peut ajouter ce qu'on veut avant
      $qb->where('a.auteur = :auteur')
          ->setParameter('auteur', 'winzou');

      // On applique notre condition
      $qb = $this->whereCurrentYear($qb);

      // On peut ajouter ce qu'on veut après
      $qb->orderBy('a.date', 'DESC');

      return $qb->getQuery()
                ->getResult();
    }

    public function whereCurrentYear(\Doctrine\ORM\QueryBuilder $qb)
    {
        $qb->andWhere('a.date BETWEEN :debut AND :fin')
              ->setParameter('debut', new \Datetime(date('Y').'-01-01'))  // Date entre le 1er janvier de cette année
              ->setParameter('fin',   new \Datetime(date('Y').'-12-31')); // Et le 31 décembre de cette année

        return $qb;
    }

}
