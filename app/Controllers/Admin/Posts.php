<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourcePresenter;

class Posts extends ResourcePresenter
{
    /**
     * Lista y busca todos los posts con paginación
     * ordenados por estado de autorización
     * y fecha de registro.
     *
     * @return mixed
     */
    public function index()
    {

    }

    /**
     * Renderiza la vista para editar un post.
     *
     * @param mixed $slug
     *
     * @return mixed
     */
    public function edit($slug = null)
    {

    }

    /**
     * Actualiza la información de un post
     * desde el método POST.
     *
     * @param mixed $slug
     *
     * @return mixed
     */
    public function update($slug = null)
    {

    }

    /**
     * Elimina un post
     * desde el método POST.
     *
     * @param mixed $slug
     *
     * @return mixed
     */
    public function delete($slug = null)
    {

    }
}
