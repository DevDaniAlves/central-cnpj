<?php

namespace App\Http\Controllers;
use App\Service\ApiBrasil;
class EmpresaController extends Controller {

    public function index(ApiBrasil $apiService): Response
        {
            $response = $apiService->consultar_empresa();
            return $this->json($response);
    }
}