<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SommeController extends AbstractController
{
    /**
     * @Route("/somm", name="somm")
     */
    public function index(): Response
    {
        return $this->render('somme/index.html.twig', [
            'controller_name' => 'SommeController',
        ]);
    }

    public function somme($a,$b)
    {
        $s = $a + $b;
        return $this->render('somme/somme.html.twig', [
            'ops1' => $a, 'ops2' => $b, 'somme' => $s
        ]);
    }
}
