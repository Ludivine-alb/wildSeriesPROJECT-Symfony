<?php

namespace App\DataFixtures;


use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    { 
        $program1 = new Program();
        $program1->setTitle('Ash vs Evil Dead');
        $program1->setSynopsis('Ash est de retour, le mal aussi.');
        $program1->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program1);
        

        $program2 = new Program();
        $program2->setTitle('The Walking Dead');
        $program2->setSynopsis('Les zombies sont de retour.');
        $program2->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program2);
        

        $program3 = new Program();
        $program3->setTitle('Black Summer');
        $program3->setSynopsis('Une invasion de zombies sème la panique.');
        $program3->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program3);
        

        $program4 = new Program();
        $program4->setTitle('The Haunting of Hill House');
        $program4->setSynopsis('Des frères et soeurs sont obligés de retourner dans la maison dans laquelle ils ont grandit
        , qui est aujourd\'hui le manoir le plus hanté des Etats-Unis.');
        $program4->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program4);
        

        $program5 = new Program();
        $program5->setTitle('The haunting of Bly Manor');
        $program5->setSynopsis('Deux orphelins se retrouvent livrés à eux-même en pleine campagne.');
        $program5->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program5);

        $manager->flush();
    }

    public function getDependencies()

    {  
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend

        return [

          CategoryFixtures::class,

        ];

    }
}
