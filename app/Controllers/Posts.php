<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

class Posts extends ResourcePresenter
{
    /**
     * Lista y busca posts autorizados
     * con paginación ordenados por título.
     *
     * @return mixed
     */
    public function index()
    {
        return view('posts/index');
    }

    /**
     * Renderiza la vista de un post.
     *
     * @param mixed $slug
     *
     * @return mixed
     */
    public function show($slug = null)
    {
        return view('posts/show');
    }

    /**
     * Renderiza la vista para
     * registrar un nuevo post.
     *
     * @return mixed
     */
    public function new()
    {
        return view('posts/new');
    }

    /**
     * Registra un nuevo post
     * desde el método POST.
     *
     * @return mixed
     */
    public function create()
    {
    }
}
