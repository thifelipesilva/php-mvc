<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos extends ControllerHtml
{
    //propriedade ganha os metodos de repositorio da classe curso.

    /**
    * @var \Doctrine\Common\Persistence\ObjectRepository
    */
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class); 
    }
    
    public function processaRequisicao():void
    {
        echo $this->renderizaHtml('cursos/listaDeCursos.php', [
            'cursos' =>  $this->repositorioDeCursos->findAll(),
            'titulo' =>  'Lista de Cursos'
        ]);
    }
}