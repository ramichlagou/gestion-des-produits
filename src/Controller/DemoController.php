<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo", name="demo")
     */
    public function index(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'yosra',
        ]);
    }
    /**
     * @Route("/essai/{nom}", name="essai")
     */
    public function index2($nom): Response
    {
        return $this->render('demo/index2.html.twig', [
            'name' => $nom,
        ]);
    }
    
    public function test($name,$a)
    {
        return $this->render('demo/test.html.twig', [
            'name' => $name,'age' => $a,
        ]);
    }
    public function index1($username)
    {
        return $this->render('demo/index1.html.twig', [
            'nom' => $username
        ]);
    }
}
