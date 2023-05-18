<p align="center"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.hospitalveterinariglories.com%2Fperro-salchicha%2F&psig=AOvVaw3IXdFCpyS4G_cnaS5agkJN&ust=1684517623449000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMCLyaaz__4CFQAAAAAdAAAAABAE" width="400" alt="Perro salchicha"></p>

<p align="center">
Guía de instalación pila laravel + mysql con docker compose.
</p>

## Requerimientos

Es necesario tener instalado: 
`docker` https://docs.docker.com/engine/install/
`docker-compose` https://docs.docker.com/compose/install/
`composer` https://getcomposer.org/
`GIT`https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
en tu computadora.

## Paso a paso
1) Clonar el repositorio en una carpeta local.
2) Abrir los archivos, clonar el archivo .env.example a un archivo llamado .env y modificar las credeniales de base de datos proporcionadas por Gaspar. Agregar las siguientes lineas
`WWWUSER=1000
WWWGROUP=1000`
Y modificar la que dice `DB_HOST=127.0.0.1` a `DB_HOST=mysql`
3) En la terminal, pararse en la carpeta del proyecto y ejecutar `composer install`, luego `docker-compose up` (la primera vez tarda), este útlimo comando se ejecuta cada vez que querramos prender el contenedor.
4) Luego entramos al contenedor y ejecutamos `php artisan key:generate` para generar una clave.
5) Para ver la base de datos nos conectamos con las credenciales puestas anteriormente desde MySQLWorkbench. 
6) 4) Luego entramos al contenedor y ejecutamos `php artisan migrate` para generar una clave.
