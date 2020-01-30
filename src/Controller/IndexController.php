<?php

namespace App\Controller;

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
    public function index(HomeRepository $homeRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'home' => $homeRepository->findAll()
        ]);
    }
}
