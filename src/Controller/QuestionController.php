<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QuestionController extends AbstractController{
 
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        return new Response('Hello World');
    }


    #[Route('/questions/{slug}', name: 'app_question_show', methods: ['GET'])]
    public function show(string $slug): Response
    {
        $new_slug = ucwords(str_replace('-', ' ', $slug));
        return new Response(sprintf('Future page to show the question "%s"', $new_slug));
    }


}
