<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

class Subscriptions extends ResourcePresenter
{
    /**
     * Registra una nueva suscripción
     * desde el método POST.
     *
     * @return mixed
     */
    public function create()
    {
    }

    /**
     * Cancela la suscripción de un usuario.
     *
     * @param mixed $token
     *
     * @return mixed
     */
    public function remove($token = null)
    {
    }
}
