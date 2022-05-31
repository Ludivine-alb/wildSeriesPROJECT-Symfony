<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Episode;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Ash vs. Evil Dead_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Ash vs. Evil Dead_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Ash vs. Evil Dead_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Ash vs. Evil Dead_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Ash vs. Evil Dead_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Walking Dead_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Walking Dead_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Walking Dead_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Walking Dead_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Walking Dead_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Black summer_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Black summer_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Black summer_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Black summer_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Black summer_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        } 
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Hill House_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Hill House_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Hill House_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Hill House_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Hill House_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Bly Manor_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Bly Manor_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Bly Manor_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Bly Manor_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Haunting of Bly Manor_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Santa Clarita Diet_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Santa Clarita Diet_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Santa Clarita Diet_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Santa Clarita Diet_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Santa Clarita Diet_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Misfits_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Misfits_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Misfits_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Misfits_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Misfits_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }

        $manager->flush();
    }
    
    public function getDependencies()
    {
        return [
          SeasonFixtures::class,
        ];
    }
}