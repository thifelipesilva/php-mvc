<?php

namespace Alura\Cursos\Controller;

abstract class ControllerHtml 
{
    public function renderizaHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados);//extract(..) que recebe um array associativo e define variáveis para cada chave
        ob_start();//com o ob_start() ativar a buffer de saída do buffer 
        require __DIR__ . '/../../view/' . $caminhoTemplate;
        $html = ob_get_clean();//ob_get_clean devolve conteúdo e limpa o buffer
        
        return $html;
    }
}
