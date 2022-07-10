<?php

namespace Alura\Cursos\Controller;

class FormLogin extends ControllerHtml
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}