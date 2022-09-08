<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourcePresenter;

class Users extends ResourcePresenter
{
    /**
     * Lista y busca todos los usuarios registrados
     * con paginación ordenados por nombre.
     *
     * @return mixed
     */
    public function index()
    {
    }

    /**
     * Renderiza la vista para editar
     * la información de un usuario.
     *
     * @param mixed $username
     *
     * @return mixed
     */
    public function edit($username = null)
    {
    }

    /**
     * Actualiza la información de un usuario
     * desde el método POST.
     *
     * @param mixed $username
     *
     * @return mixed
     */
    public function update($username = null)
    {
    }

    /**
     * Elimina el perfil de un usuario
     * desde el método POST.
     *
     * @param mixed $username
     *
     * @return mixed
     */
    public function delete($username = null)
    {
    }
}
