<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{

    public function consultar_empresa(Request $request)
    {
        $cnpj = $request->route('cnpj');
    
        $response = Http::get("https://brasilapi.com.br/cnpj/v1/$cnpj");
        console('consulta_feita');
        return $response->json();
    }
}