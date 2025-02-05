<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\User;

class HomeController extends AbstractController
{
    #[Route('/app/home', name: 'app_home')]
    #[Route('/app/', name: 'app_home_index')]
    public function index(): Response
    {
        $user=$this->getUser();
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
