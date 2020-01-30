<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Repository\ArtistRepository;
use App\Entity\Home;
use App\Repository\HomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends AbstractController
{
    /**
     * @Route("/", name="user_view")
     */
    public function index(HomeRepository $homeRepository, ArtistRepository $artistRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'home' => $homeRepository->findAll(),
            'artist' => $artistRepository->findAll()

        ]);
    }
}
