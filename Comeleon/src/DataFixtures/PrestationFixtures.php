<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PrestationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for($i = 1; $i <= 10; $i++) {
            $presta = new Presta();
            $presta->setTitre("Titre de la prestation n°$i")
                    ->setDescription("<p>Contenu de la prestation n°$i</p>")
                    ->setImage("http://placehold.it/350x150")
                    ->setCreatedAt(new \DateTime());
            $manager->persist($presta);
        }
        $manager->flush();
    }
}
