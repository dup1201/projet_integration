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
    private $query;

    public function getCategorieWithProduct($categorie)
    {
        $qb =$this->createQueryBuilder('v')
            ->where('v.categorie = :categorie ')
            ->setParameter('categorie', $categorie)
            ->Join('v.products','products')
            ->addSelect('products');

        $this->query= $qb->getQuery();
        return $this;
    }

    public function getPage($page, $nbPage)
    {
        $this->query->setFirstResult(($page - 1) * $nbPage);
        $this->query->setMaxResults($nbPage);

        return $this;
    }

    public function getNombreProduct($product)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT Count(t.id) FROM DupriezProductBundle:Vetements t where t.categorie = \''.$product.'\''
        );
        return $query->getSingleScalarResult();
    }

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param mixed $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

}
