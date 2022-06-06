<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Program;
use Faker\Factory;


class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = ['program_Ash vs. Evil Dead', 'program_The Walking Dead', 'program_Black summer', 'program_The Haunting of Hill House', 'program_The Haunting of Bly Manor', 'program_Santa Clarita Diet', 'program_Misfits'];

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for($i = 0; $i < 10; $i++) {
            $actor = new Actor();
            $actor->setName($faker->words(2, true));
            $actor->addProgram($this->getReference(self::PROGRAMS[array_rand(self::PROGRAMS, 1)]));
            $actor->addProgram($this->getReference(self::PROGRAMS[array_rand(self::PROGRAMS, 1)]));
            $actor->addProgram($this->getReference(self::PROGRAMS[array_rand(self::PROGRAMS, 1)]));
            $manager->persist($actor);
        }

        $manager->flush();

        // for($i = 1; $i < 4; $i++) {
        //     $actor = new Actor();
        //     $actor->setName($faker->firstName($i));
        //     $manager->persist($actor);
        //     $this->addReference('program_Ash vs. Evil Dead_season_' . $actor->getName(), $actor);
        // }

        // for($i = 1; $i < 4; $i++) {
        //     $actor = new Actor();
        //     $actor->setName($faker->firstName($i));
        //     $manager->persist($actor);
        //     $this->addReference('program_Ash vs. Evil Dead_season_' . $actor->getName(), $actor);
        // }

    }

    public function getDependencies()
    {
        return [
          ProgramFixtures::class,
        ];
    }
}