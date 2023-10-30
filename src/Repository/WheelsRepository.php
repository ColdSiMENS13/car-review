<?php

namespace App\Repository;

use App\Entity\Wheels;
use App\Services\ServiceWheelsRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method Wheels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wheels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wheels[]    findAll()
 * @method Wheels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WheelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wheels::class);
    }

    public function findAllBrands(): array
    {
        return $this->findBy([], ['wheelBrand' => Criteria::ASC]);
    }
}
