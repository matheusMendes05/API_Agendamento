<?php

namespace App\src\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AtendenteController
{
    // lista todos os atendentes da base de dados
    /** 
     *  @Route("atendente")
     */
    public function index(Request $request): Response
    {
        return new JsonResponse([
            "status" => true,
        ]);
    }
    // criar um novo atendente
    /**
     * @Route("atendente/new" , methods = "POST")
     */
    public function store(Request $request): Response
    {
        $bodyRequest = $request->getContent();
        $dataJson = json_decode($bodyRequest);

        return new JsonResponse([
            "status" => true,
            "results" => $dataJson
        ]);
    }
}
