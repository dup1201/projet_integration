<?php

namespace Dupriez\ProductBundle\Repository;

/**
 * PC_portableRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PC_portableRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPcWithProduct()
    {
        $qb =$this->createQueryBuilder('p')
            ->Join('p.products','products')
            ->addSelect('products');

        return $qb->getQuery()->getResult();
    }
}
