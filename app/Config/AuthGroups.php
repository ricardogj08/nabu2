<?php

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'user';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * The available authentication systems, listed
     * with alias and class name. These can be referenced
     * by alias in the auth helper:
     *      auth('api')->attempt($credentials);
     */
    public array $groups = [
        'admin' => [
            'title'       => 'Administrador',
            'description' => 'Control total del sitio web.',
        ],
        'moderator' => [
            'title'       => 'Moderador',
            'description' => 'Moderadores de posts y comentarios del sitio web.',
        ],
        'user' => [
            'title'       => 'Usuario',
            'description' => 'Usuarios generales del sitio web. A menudo clientes.',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system. Each system is defined
     * where the key is the
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        'admin.access'   => 'Puede acceder al área de administración del sitio web',
        'admin.users'    => 'Puede administrar usuarios',
        'admin.posts'    => 'Puede administrar posts',
        'admin.comments' => 'Puede eliminar comentarios',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     */
    public array $matrix = [
        'admin' => [
            'admin.*',
        ],
        'moderator' => [
            'admin.access',
            'admin.posts',
            'admin.comments',
        ],
        'user' => [],
    ];
}
