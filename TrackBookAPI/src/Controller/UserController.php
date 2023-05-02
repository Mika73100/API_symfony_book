<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/users', name: 'users', methods: ['GET'])]
    public function getUserList(UserRepository $userRepository, SerializerInterface $serializer): Response
    {
        $userList = $userRepository->findAll();
        //dd($userList);
        $jsonUserList = $serializer->serialize($userList, 'json', ['groups'=>'user:read']);
        $response= new Response($jsonUserList,200,['content-type'=>'application/json']);
        return $response;
    }
}
