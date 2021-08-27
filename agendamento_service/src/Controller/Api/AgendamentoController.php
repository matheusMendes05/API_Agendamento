<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgendamentoController extends AbstractController
{

    private $arr_agendamento = [
        "unidade_atendimento" => "Gama-DF",
        "servico" => "2 via identidade",
        "data" => "25/08/2021",
        "horario" => "15:30",
        "periodo" => "tarde",
        "nome" => "matheus Mendes",
        "email" => "matheus@gmail.com",
        "cpf" => "05955109145"
    ];

    // lista todos os agendamento ativos
    /**
     * @Route("agendamentos")
     */
    public function index(): Response
    {
        return new JsonResponse([
            "status" => true,
            "adendamentos" => "Lista de Agendamento"
        ]);
    }

    /**
     * @Route("agendamento/{cpf}")
     */
    public function serach(Request $request, $cpf): Response
    {
        if ($this->arr_agendamento['cpf'] == $cpf) {
            return new JsonResponse([
                "status" => true,
                "results" => $this->arr_agendamento
            ]);
        } else {
            return new JsonResponse([
                "status" => false,
                "results" => "Nao foi encontrado Agendamento com seu CPF"
            ]);
        }
    }
}
