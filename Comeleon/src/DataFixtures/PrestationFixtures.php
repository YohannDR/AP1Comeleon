<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use APP\Entity\Category;
use APP\Entity\Comment;
use APP\Entity\Presta;

class PrestationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        //Créer 3 catégories fakée

        for ($i = 0; $i <= 3; $i++) {
            $category = new Category();
            $category->setTitle($faker->sentence())
                    ->setDescription($faker->paragraph());

            $manager->persist($category);

            //Créer entre 4 et 6 prestations

            for($j = 1; $j <= mt_rand(4, 6); $j++) {
                $presta = new Presta();

                $content = '<p>';
                $content .= join($faker->paragraphs(5), '</p><p>');
                $content .= '</p>';
                
                $presta->setTitre($faker->sentence())
                        ->setDescription($content)
                        ->setImage($faker->imageUrl())
                        ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                        ->setCategory($category);
                $manager->persist($presta);

                //On donne des commentaires à la prestation
                for ($k = 1; $k <= mt_rand(4, 10); $k++) {
                    $comment = new Comment();

                    $content = '<p>';
                    $content .= join($faker->paragraphs(2), '</p><p>');
                    $content .= '</p>';

                    $days = (new \DateTime())->diff($presta->getCreatedAt())->days;
                    
                    $comment->setAuthor($faker->name)
                            ->setContent($content)
                            ->setCreatedAt($faker->dateTimeBetween('-' . $days . ' days'))
                            ->setPrestation($presta);
                    $manager->persist($comment);
                }
            }
        }
        $manager->flush();
    }
}
