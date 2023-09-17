<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $article = new Article();
            $article->setTitle($faker->sentence);
            $article->setText($faker->paragraph);
            
            $manager->persist($article);
        }

        $manager->flush();
    }
}
