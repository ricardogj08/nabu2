<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

class Comments extends ResourcePresenter
{
    /**
     * Registra un comentario
     * para el usuario de sesión
     * desde el método POST.
     *
     * @return mixed
     */
    public function create()
    {

    }

    /**
     * Elimina un comentario
     * del usuario de sesión
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
