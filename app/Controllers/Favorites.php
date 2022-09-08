<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

class Favorites extends ResourcePresenter
{
    /**
     * Lista y busca los posts favoritos
     * de un usuario de sesión con paginación
     * ordenados por fecha de registro.
     *
     * @return mixed
     */
    public function index()
    {
    }

    /**
     * Registra un post a favoritos
     * para el usuario de sesión
     * desde el método POST.
     *
     * @return mixed
     */
    public function create()
    {
    }

    /**
     * Elimina un post de favoritos
     * para el usuario de sesión
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
