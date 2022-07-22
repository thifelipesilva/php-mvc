<?php

use Alura\Cursos\Controller\{AlterarCurso, Deslogar, Exclusao, FormLogin, FormularioInsercao, ListarCursos, Persistencia, RealizarLogin};

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => AlterarCurso::class,
    '/login' => FormLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class
];


