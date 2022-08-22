# nabu

Un sistema gestor de contenido (CMS) de artículos en Markdown para la Universidad de Guanajuato.

## Dependencias

* [PHP >= 7.4](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [MariaDB >= 5.1](https://mariadb.org/)

## Instalación

    git clone https://github.com/ricardogj08/nabu.git
    cd nabu
    composer install

## Configuración

Copia el archivo `env` a `.env` (contiene todas las opciones de configuración del proyecto):

    cp env .env

## Base de datos

Construye la base de datos del proyecto:

    php spark db:create nabu

Crea todas las tablas de la base de datos:

    php spark migrate --all

* [Modelo relacional de la base de datos](https://drive.google.com/file/d/1ObBiFhC8VmIiILmaJ64crW2BtZin29bw/view?usp=sharing)

## Ejecución

    php spark serve

<http://localhost:8080>

## Referencias

* [Primera versión de nabu](https://git.disroot.org/ricardogj08/nabu)
* [CodeIgniter4 User Guide](https://codeigniter4.github.io/userguide/)
* [Shield Documentation](https://github.com/codeigniter4/shield/blob/develop/docs/index.md)

## Licencia

    nabu - Un sistema gestor de contenido (CMS) de artículos en Markdown para la Universidad de Guanajuato.

    Copyright (C) 2021-2022 - Ricardo García Jiménez <ricardogj08@riseup.net>,
                              Juan José Ramírez López <juan.ramirez.j99@gmail.com>,
                              Francisco Solís Martínez <franciscosolism08@gmail.com>,
                              Fernando Andrés Chávez Gavaldón <fernandochg26@gmail.com>

    Este programa es software libre: puedes redistribuirlo y/o modificarlo
    bajo los términos de la Licencia Pública General de GNU Affero publicada por
    la Free Software Foundation, ya sea la versión 3 de la Licencia, o
    (a su elección) cualquier versión posterior.

    Este programa se distribuye con la esperanza de que sea de utilidad,
    pero SIN NINGUNA GARANTÍA; incluso sin la garantía implícita de
    COMERCIABILIDAD o APTITUD PARA UN PROPÓSITO PARTICULAR. Consulte la
    Licencia Pública General de GNU Affero para obtener más detalles.

    Debería haber recibido una copia de la Licencia Pública General de GNU Affero
    junto con este programa. De lo contrario, consulte <https://www.gnu.org/licenses/>.
