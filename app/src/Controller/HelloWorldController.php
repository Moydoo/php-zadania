<?php

// Hello world controller

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
     * Class HelloWorldController
     * Przypomnij o ciekawostce na temat komentarzy!
     *
     * @Route("/hello-world")
     */
    class HelloWorldController extends AbstractController
    {
        /**
         * @return \Symfony\Component\HttpFoundation\Response
         *
         * @param string $name Input parametr
         *
         * @Route(
         *     "/{name}",
         *     name="helloworld_index",
         *     defaults={"name" : "World"},
         *     requirements={"name" : "[a-zA-Z]+"},
         *
         * )
         */
        public function index(string $name): Response
        {
            return $this -> render(
                'hello-world/index.html.twig',
                ['name' => $name]
            );
        }
    }
