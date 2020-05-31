<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about-us", name="about_us")
     */
    public function index()
    {
        return $this->render('about/index.html.twig');
    }
}