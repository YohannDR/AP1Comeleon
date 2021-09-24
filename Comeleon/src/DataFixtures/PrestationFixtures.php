<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Presta;

class PrestationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for($i = 1; $i <= 10; $i++) {
            $presta = new Presta();
            $presta->setTitre("Titre de la prestation n°$i")
                    ->setDescription("Description de la prestation")
                    ->setImage("http://placehold.it/350x150")
                    ->setCreatedAt(new \DateTime());

                    $manager->persist($presta);
        }

        $manager->flush();
    }
}
