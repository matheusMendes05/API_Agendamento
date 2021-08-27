<?php

namespace App\src\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController
{
    private $arr_users = [];
    /**
     * @Route("user")
     */
    public function index(Request $request): Response
    {
        return new JsonResponse([
            "status" => true,
            "results" => $this->arr_users
        ]);
    }
    /**
     * @Route("user/new", methods = "POST")
     */
    public function store(Request $request): Response
    {
        $bodyRequest = $request->getContent();
        $dataJson = json_decode($bodyRequest);
        $this->arr_users[] = $dataJson;

        return new JsonResponse([
            "status" => true,
            "results" => $this->arr_users
        ]);
    }
}
