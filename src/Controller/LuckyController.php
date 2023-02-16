<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    #[Route('/home')]
    public function showHome()
    {
        return $this->render("bezoeker/home.html.twig");
    }



    #[Route('/contact')]
    public function showContact()
    {
        return $this->render("bezoeker/contact.html.twig");
    }





//    #[route('/home')]
//    public function number(int $max): Response
//    {
//        $number = random_int(0, $max);
//
//        return $this->render('bezoeker/home.html.twig', ['number'=> $number]);
////
//        return new Response(
//
//        );
//
//    }


//    #[Route('/Home')]
//    public function goedemorgen(): Response
//    {
//        $goedenmorgen = 'goedemorgen';
//        return $this->render('bezoeker/vorrbeeld.html.twig', ['goedenmorgen' => $goedenmorgen]);
//
//        return new Response(
//
//        );
//
//    }



}