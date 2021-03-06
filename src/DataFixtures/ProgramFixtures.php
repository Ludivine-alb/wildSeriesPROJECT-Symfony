<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{

    const PROGRAMS = [
        [
            'title' => 'Ash vs. Evil Dead',
            'synopsis' => 'Demon hunters called Counters capture evil spirits that have returned to earth in pursuit of eternal life.',
            'category' => 'category_Horreur'
        ],
        [
            'title' => 'The Walking Dead',
            'synopsis' => "Adapted from the American television drama of the same name, it tells the lives of specials members of the criminal investigation department as they try to uncover cases.", 
            'category' => 'category_Horreur'
        ],
        [
            'title' => 'Black summer',
            'synopsis' => "The animated series consists of stand-alone episodes, all under 22 minutes long, and produced by different casts and crews, though some episodes may share certain crew members. The series title refers to each episode's thematic connection to the three aforementioned subjects, though not every episode contains all three elements.", 
            'category' => 'category_Horreur'
        ],
        [
            'title' => 'The Haunting of Hill House',
            'synopsis' => "A petite woman born with supernatural strength named Do Bong Soon is hired by a childish CEO to protect him from an anonymous threat. Unbeknown to Bong Soon, he falls in love with her at first sight, though she already has her eyes set on her high school friend. Your typical love triangle aside, hilarity ensues as Bong Soon, thanks to her new job, finds herself in unusual situations of which she meets with equally comedic dialogue.", 
            'category' => 'category_Horreur'
        ],
        [
            'title' => 'The Haunting of Bly Manor',
            'synopsis' => "Tak Dong Kyung’s parents were killed in an accident. So, she’s throwing herself into her work as an editor of a novel. As they arrive, she is down on her luck, but lousy luck strikes when she suddenly finds a cancerous brain tumor. A night, she goes on the rooftop and calls out for the end of her miserable situation. Fortunately, her call does not go unanswered this time, as her words summon a mystery heavenly.", 
            'category' => 'category_Horreur'
        ],
        [
            'title' => 'Santa Clarita Diet',
            'synopsis' => "Set in the Joseon period, the deceased king rises and a mysterious plague begins to spread; the prince must face a new breed of enemies to unveil the evil scheme and save his people.", 
            'category' => 'category_Humour'
        ],
        [
            'title' => 'Misfits', 
            'synopsis' => "A love story develops between Captain Yoo Shi Jin, from South Korean Special Forces and Doctor Kang Mo Yeon, who works as a Surgeon at Haesung Hospital in Seoul. They will find themselves in the middle of great events and deadly dangers, both in their Motherland and in the fictitious, war-torn country of Urk.", 
            'category' => 'category_Humour'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::PROGRAMS as $series) {
            $program = new Program();
            $program->setTitle($series['title']);
            $program->setSynopsis($series['synopsis']);
            $program->setCategory($this->getReference($series['category']));
            $manager->persist($program);
            $this->addReference('program_' . $program->getTitle(), $program);
        }
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