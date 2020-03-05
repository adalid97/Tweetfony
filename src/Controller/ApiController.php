<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Entity\Tweet;
use App\Entity\User;

class ApiController extends AbstractController
{
    function getTweet($id) {
        // Obtenemos el tweet
        $entityManager = $this->getDoctrine()->getManager();
        $tweet = $entityManager->getRepository(Tweet::class)->findOneById($id);
        // Si el tweet no existe devolvemos un error con código 404.
        if ($tweet == null) {
        return new JsonResponse([
                                'error' => 'Tweet not found'
                                ], 404);
        }
        // Creamos un objeto genérico y lo rellenamos con la información.
        $result = new \stdClass();
        $result->id = $tweet->getId();
        $result->date = $tweet->getDate();

        $result->text = $tweet->getText();
        // Para enlazar al usuario, añadimos el enlace API para consultar su infor
        $result->user = $this->generateUrl('api_get_user', [
        'id' => $tweet->getUser()->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        // Para enlazar a los usuarios que han dado like al tweet, añadimos sus en
        $result->likes = array();
        foreach ($tweet->getLikes() as $user) {
        $result->likes[] = $this->generateUrl('api_get_user', [
        'id' => $user->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        }
        // Al utilizar JsonResponse, la conversión del objeto $result a JSON se ha
        return new JsonResponse($result);
        }
        
    function getTweetfonyUser($id) {
         // Obtenemos el usuario
         $entityManager = $this->getDoctrine()->getManager();
         $user = $entityManager->getRepository(User::class)->findOneById($id);
         // Si el tweet no existe devolvemos un error con código 404.
         if ($user == null) {
         return new JsonResponse([
                                 'error' => 'Tweet not found'
                                 ], 404);
         }
         // Creamos un objeto genérico y lo rellenamos con la información.
         $result = new \stdClass();
         $result->id = $user->getId();
         $result->name = $user->getName();
         $result->userName = $user->getUserName();
 
         $result->tweets = array();
         foreach ($user->getTweets() as $tweet) {
         $result->tweets[] = $this->generateUrl('api_get_tweet', [
         'id' => $tweet->getId(),
         ], UrlGeneratorInterface::ABSOLUTE_URL);
         }
 
         $result->likes = array();
         foreach ($user->getLikes() as $tweet) {
         $result->likes[] = $this->generateUrl('api_get_tweet', [
         'id' => $tweet->getId(),
         ], UrlGeneratorInterface::ABSOLUTE_URL);
         }
         return new JsonResponse($result);
     }


     function getUsers(){
        $repository = $this->getDoctrine()->getRepository(User::class);

        
        foreach ($users =$repository->findAll() as $user) {
           $result[] = $this->generateUrl('api_get_users', [
                'id' => $user->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        }

        return new JsonResponse($result);

    }

    function getTweets(){

        $repository = $this->getDoctrine()->getRepository(Tweet::class);

        
        foreach ($tweets =$repository->findAll() as $tweet) {
           $result[] = $this->generateUrl('api_get_tweets', [
                'id' => $tweet->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        }

        return new JsonResponse($result);

    }

    function index() {
        $result = array();
        $result['users'] = $this->generateUrl('api_get_users',array(), UrlGeneratorInterface::ABSOLUTE_URL);
        $result['tweets'] = $this->generateUrl('api_get_tweets',array(), UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($result);
    }


    function postUser(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneByUserName($request->request->get("userName"));
        if ($user) {
            return new JsonResponse([
            'error' => 'UserName already exists'
            ], 409);
        }
        $user = new User();
        $user->setName($request->request->get("name"));
        $user->setUserName($request->request->get("userName"));
        $entityManager->persist($user);
        $entityManager->flush();
        $result = new \stdClass();
        $result->id = $user->getId();
        $result->name = $user->getName();
        $result->userName = $user->getUserName();
        $result->likes = array();
        foreach ($user->getLikes() as $tweet) {
        $result->likes[] = $this->generateUrl('api_get_tweet', [
        'id' => $tweet->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        }
        $result->tweets = array();
        foreach ($user->getTweets() as $tweet) {
        $result->tweets[] = $this->generateUrl('api_get_tweet', [
        'id' => $tweet->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        }
        return new JsonResponse($result, 201);
    }

    function postTweet(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneById($request->request->get("user"));
        if (!$user) {
            return new JsonResponse([
            'error' => 'Usuario no existe'
            ], 409);
        }
        
        $tweet = new Tweet();

        $tweet->setText($request->request->get("text"));
        $tweet->setUser($user);
        $tweet->setDate(new \DateTime('now'));

        $entityManager->persist($tweet);
        $entityManager->flush();
        return new JsonResponse($this->generateUrl('api_get_tweet', [
        'id' => $tweet->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL), 201);
    }

    function putUser(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneById($id);
        if ($user == null) {
        return new JsonResponse([
        'error' => 'User not found'
        ], 404);
        }
        if ($user->getUserName() != $request->request->get("userName")) {
        $user2 = $entityManager->getRepository(User::class)->findOneByUserName($request->request->get("userName"));
        if ($user2) {
        return new JsonResponse([
        'error' => 'UserName already in use'
        ], 409);
        }
        }
        $user->setName($request->request->get("name"));
        $user->setUserName($request->request->get("userName"));
        $entityManager->flush();
        return new JsonResponse($this->generateUrl('api_get_user', [
        'id' => $user->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL));
    }

    function putTweet(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $tweet = $entityManager->getRepository(Tweet::class)->findOneById($id);
        if ($tweet == null) {
        return new JsonResponse([
        'error' => 'Tweet not found'
        ], 404);
        }
        
        $tweet->setText($request->request->get("text"));
        $tweet->setDate(new \DateTime('now'));

        $entityManager->flush();
        return new JsonResponse($this->generateUrl('api_get_tweet', [
        'id' => $tweet->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL));
    }

    function deteleUser($id){
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneById($id);
        if ($user == null) {
        return new JsonResponse([
        'error' => 'User not found'
        ], 404);
        }
        
        $entityManager->remove($user);
        $entityManager->flush();
        return new JsonResponse(null, 204);
    }

    function deleteTweet($id){
        $entityManager = $this->getDoctrine()->getManager();
        $tweet = $entityManager->getRepository(Tweet::class)->findOneById($id);
        if ($tweet == null) {
        return new JsonResponse([
        'error' => 'Tweet not found'
        ], 404);
        }
        
        $entityManager->remove($tweet);
        $entityManager->flush();
        return new JsonResponse(null, 204);

    }

    
}


