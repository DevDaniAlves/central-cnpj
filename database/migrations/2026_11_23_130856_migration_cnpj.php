<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){

        Schema::create('empresas', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('uf');

            $table->text('cep');

            $table->text('cnpj');

            $table->text('pais');

            $table->text('porte');

            $table->text('email');

            $table->text('bairro');

            $table->text('numero');

            $table->text('ddd_fax');

            $table->text('municipio');

            $table->text('logradouro');
            
            $table->text('cnae_fiscal');

            $table->text('codigo_pais');

            $table->text('complemento');

            $table->text('razao_social');

            $table->text('codigo_porte');

            $table->text('nome_fantasia');

            $table->text('capital_social');

            $table->text('ddd_telefone_1');

            $table->text('ddd_telefone_2');

            $table->boolean('opcao_pelo_mei');

            $table->text('descricao_porte');

            $table->text('codigo_municipio');

            $table->text('natureza_juridica');

            $table->text('situacao_especial');

            $table->text('opcao_pelo_simples');

            $table->text('situacao_cadastral');

            $table->text('data_opcao_pelo_mei');

            $table->text('data_exclusao_do_mei');

            $table->text('cnae_fiscal_descricao');

            $table->text('codigo_municipio_ibge');

            $table->text('data_inicio_atividade');

            $table->text('data_situacao_especial');

            $table->text('data_opcao_pelo_simples');

            $table->text('data_situacao_cadastral');

            $table->text('nome_cidade_no_exterior');

            $table->text('codigo_natureza_juridica');

            $table->text('data_exclusao_do_simples');

            $table->text('motivo_situacao_cadastral');

            $table->text('ente_federativo_responsavel');

            $table->text('identificador_matriz_filial');

            $table->text('qualificacao_do_responsavel');

            $table->text('descricao_situacao_cadastral');

            $table->text('descricao_tipo_de_logradouro');

            $table->text('descricao_motivo_situacao_cadastral');

            $table->text('descricao_identificador_matriz_filial');

            $table->boolean('is_publish')->default(0);

            $table->timestamps();

        });

        Schema::create('cnaes', function (Blueprint $table){
            $table->bigIncrements('id');

            $table->string('codigo');

            $table->text('descricao');

        });

        Schema::create('qsa', function (Blueprint $table){
            $table->bigIncrements('id');

            $table->string('pais');

            $table->text('nome_socio');

            $table->text('codigo_pais');

            $table->string('faixa_etaria');

            $table->text('cnpj_cpf_do_socio');

            $table->string('qualificacao_socio');

            $table->text('codigo_faixa_etaria');

            $table->text('data_entrada_sociedade');

            $table->string('identificador_de_socio');

            $table->text('cpf_representante_legal');

            $table->text('nome_representante_legal');

            $table->string('codigo_qualificacao_socio');

            $table->text('qualificacao_representante_legal');

            $table->text('codigo_qualificacao_representante_legal');


        });

        Schema::create('empresa_qsa', function (Blueprint $table){
            $table->foreignId('id_qsa')->references('id')->on('qsa');
            $table->foreignId('id_empresa')->references('id')->on('empresas');

        });

        Schema::create('cnaes_secundarios', function (Blueprint $table){
            $table->foreignId('id_cnae')->references('id')->on('cnaes');
            $table->foreignId('id_empresa')->references('id')->on('empresas');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
