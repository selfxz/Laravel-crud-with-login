<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Comenzando 💪🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

### Pre-requisitos 📋

_Que cosas necesitas para poner en marcha el proyecto y como instalarlos_

* GIT [Link](https://git-scm.com/downloads)
* Entorno de servidor local, Ej: [Laragon](https://laragon.org/download/), [XAMPP](https://www.apachefriends.org/es/index.html) o [LAMPP](https://bitnami.com/stack/lamp/installer).
* Manejador de dependencias de PHP [Composer](https://getcomposer.org/download/).

### Instalación 🔧

Paso a paso de lo que debes ejecutar para tener el proyecto ejecutandose

 - Inicia el git dentro de tu servidor:
    ```
    git init
    ```
 - Luego, clona el repositorio dentro de la carpeta de tu servidor con el siguiente comando:
    ```
    git clone https://github.com/selfxz/Laravel-crud-with-login.git
    ```
 - Ingresa a la carpeta del repositorio
    ```
    cd name-carpetaPrincipal
    ```
 - Instala las dependencias del proyecto
    ```
    composer install
    ```
 - Crea el archivo ".env" copiando la información del [ejemplo](https://github.com/selfxz/Laravel-crud-with-login/blob/master/.env.example) y cambiar valores de su Base de datos.
 6. Ejecute las migraciones
    ```
    php artisan migrate --seed
    ```
 7. Inicialice el servidor local
    ```
    php artisan serve
    ```
 8. Listo, ya podrá visualizr e interactuar con el proyecto en local  😁

## Construido con 🛠️

Las herramientas que utilice para crear este proyecto

* Framework de PHP [Laravel](https://laravel.com/docs/9.x).
