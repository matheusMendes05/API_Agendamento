<?php

namespace App\src\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    private $arr_service = [
        "RG",
        "CNH",
        "Titulo de Eleitor"
    ];

    // Metodo lista todos os servicos da base de dados
    /**
     * @Route("service")
     */
    public function index(Request $request): Response
    {
        return new JsonResponse([
            "status" => true,
            "results" => $this->arr_service
        ]);
    }
    /**
     * Criar um novo Servico
     * @Route("service/new") 
     */
    public function store(Request $request): Response
    {
        $bodyRequest = $request->getContent();
        $dadoJson = json_decode($bodyRequest);
        $this->arr_service[] = $dadoJson;

        return new JsonResponse([
            "status" => true,
            "results" => $this->arr_service
        ]);
    }
}
