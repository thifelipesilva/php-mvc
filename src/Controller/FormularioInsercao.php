<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerHtml
{
    public function processaRequisicao():void
    {
        echo $this->renderizaHtml('cursos/formCurso.php', [
            'titulo' => 'Formulario Curso'
        ]);
        
    }
}