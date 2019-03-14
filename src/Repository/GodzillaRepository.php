<?php

namespace App\Repository;

use App\Entity\Godzilla;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Godzilla|null find($id, $lockMode = null, $lockVersion = null)
 * @method Godzilla|null findOneBy(array $criteria, array $orderBy = null)
 * @method Godzilla[]    findAll()
 * @method Godzilla[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GodzillaRepository extends ServiceEntityRepository
{
    /**
     * {@inheritdoc}
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Godzilla::class);
    }
}
