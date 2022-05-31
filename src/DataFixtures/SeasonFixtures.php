<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Season;
use Faker\Factory;


class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Ash vs. Evil Dead'));
            $manager->persist($season);
            $this->addReference('program_Ash vs. Evil Dead_season_' . $season->getNumber(), $season);
        }
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_The Walking Dead'));
            $manager->persist($season);
            $this->addReference('program_The Walking Dead_season_' . $season->getNumber(), $season);
        }
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Black summer'));
            $manager->persist($season);
            $this->addReference('program_Black summer_season_' . $season->getNumber(), $season);
        }
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_The Haunting of Hill House'));
            $manager->persist($season);
            $this->addReference('program_The Haunting of Hill House_season_' . $season->getNumber(), $season);
        }
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_The Haunting of Bly Manor'));
            $manager->persist($season);
            $this->addReference('program_The Haunting of Bly Manor_season_' . $season->getNumber(), $season);
        }
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Santa Clarita Diet'));
            $manager->persist($season);
            $this->addReference('program_Santa Clarita Diet_season_' . $season->getNumber(), $season);
        }
        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Misfits'));
            $manager->persist($season);
            $this->addReference('program_Misfits_season_' . $season->getNumber(), $season);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          ProgramFixtures::class,
        ];
    }
}
