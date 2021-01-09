<?php


namespace App\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Security\Authentication\Token\JWTUserToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends AbstractController
{
    public function test(): JsonResponse
    {
        /** @var JWTUserToken $currentToken */
        $currentToken = $this->get('security.token_storage')->getToken();

        return new JsonResponse([
            'user_id' => $currentToken->getUser()->getId()
        ]);
    }
}