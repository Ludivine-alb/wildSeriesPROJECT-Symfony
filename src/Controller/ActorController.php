<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Form\ActorType;
use App\Repository\ActorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actor', name: 'actor_')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ActorRepository $actorRepository): Response
    {
        $actors = $actorRepository->findAll();
        return $this->render('actor/index.html.twig', [
            'actors' => $actors,
        ]);
    }

  

    #[Route('/{actorId}', name: 'show', methods: ['GET'])]
    #[Entity('actor', options: ['id' => 'actorId'])]
    public function show(Actor $actor): Response
    {  
        if (!$actor) {
            throw $this->createNotFoundException('The actor does not exist.');
        }
        return $this->render('actor/show.html.twig', [
            'actor' => $actor,
        ]);
    }
}