<?php

namespace Alura\Cursos\Controller;

class Deslogar 
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: /login');
    }
}