<?php

namespace Dupriez\ProductBundle\Repository;

/**
 * VetementsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VetementsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getVetementWithProduct()
    {
        $qb =$this->createQueryBuilder('v')
            ->Join('v.products','products')
            ->addSelect('products');

        return $qb->getQuery()->getResult();
    }

    public function getCategorieWithProduct($categorie)
    {
        $qb =$this->createQueryBuilder('v')
            ->where('v.categorie = :categorie ')
            ->setParameter('categorie', $categorie)
            ->Join('v.products','products')
            ->addSelect('products');

        return $qb->getQuery()->getResult();
    }

    public function getPage($page, $nbPage)
    {
        $query = $this->getEntityManager()->createQuery(
            'select t
            FROM DupriezProductBundle:Vetements t
            ORDER BY t.id'
        );
        $query->setFirstResult(($page - 1) * $nbPage);
        $query->setMaxResults($nbPage);

        return $query->getResult();
    }

    public function getNombreDeTeeShirt()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT Count(t.id) FROM DupriezProductBundle:Vetements t'
        );
        return $query->getSingleScalarResult();
    }
}
