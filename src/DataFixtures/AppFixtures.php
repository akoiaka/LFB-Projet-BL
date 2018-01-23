<?php
namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//creation de 20 produits pour test
    for ($i = 0; $i <20; $i++)
        {
            $product = new product();
            $product->setName('produit '.$i);
            $product->setPrice(mt-rand(10, 100));
            $manager->persist($product);
        }
    $manager->flush();
    }
}