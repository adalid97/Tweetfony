<?php
namespace App\Controller;

use App\Entity\Tweet;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TweetController extends AbstractController
{
    function demo() {
        return $this->render('demo.html.twig');
    }
    function demoTweet() {
        return $this->render('demoTweet.html.twig');
    }

    public function tweets()
    {
        // Obtenemos el gestor de entidades de Doctrine
        $entityManager = $this->getDoctrine()->getManager();
        // obtenemos todos los twetts
        $tweets= $entityManager->getRepository(Tweet::class)->findAll();

        return $this->render('listaTweets.html.twig', array(
            'tweets' => $tweets,
        ));
    }

    public function verTweet($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tweet= $entityManager->getRepository(Tweet::class)->find($id);
    
        return $this->render('verTweet.html.twig', array(
            'tweet' => $tweet,
        ));
    }


   



}

