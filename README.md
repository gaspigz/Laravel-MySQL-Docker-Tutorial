## ENGLISH

## Requirements

Make sure you have the following software installed on your computer:

- [Docker](https://docs.docker.com/engine/install/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Composer](https://getcomposer.org/)
- [GIT](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

## Getting Started

Follow these steps to set up and run the project:

1. Clone the repository to your local machine.
2. Open the files and create a copy of `.env.example` named `.env`. Modify the database credentials in the `.env` file. Add the following lines:
`WWWUSER=1000`
`WWWGROUP=1000`
Update the line that says `DB_HOST=127.0.0.1` to `DB_HOST=mysql`. If you are using Windows, modify line 20 in the `docker_compose.yml` file as follows:
`IGNITION_LOCAL_SITES_PATH: './vendor/laravel/sail/runtimes/8.2'`
3. In the terminal, navigate to the project folder and run the following commands:
`composer install`
`docker-compose up`
The first command installs project dependencies, and the second command starts the container. Note that the initial startup may take some time.
4. Once the container is up and running, access it and generate a key by running the following command:
`php artisan key:generate`
5. To access the database, use the previously configured credentials and connect with MySQL Workbench or any other MySQL client.
6. In the container, run the following commands to migrate the database and set the required permissions:
`php artisan migrate`
`chmod -R 777 storage`

## Creating a Migration

To create a migration, execute the following command inside the container:
`php artisan make:migration <migration_name>`
Then, run the following command to perform the migration:
`php artisan migrate`

## Accessing the Local Database

To access the local database, you need to install [MySQL Workbench](https://www.mysql.com/products/workbench/). Follow these steps:

1. Open MySQL Workbench.
2. Create a new connection with the following details:
   - Connection Name: localhost
   - Hostname: localhost
   - Port: 3306
   - Username: <username>
   - Password: <password>
   - Default Schema: bravo_app

Replace `<username>` and `<password>` with the appropriate database credentials.
    
## Español

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
2) Abrir los archivos, clonar el archivo .env.example a un archivo llamado .env y modificar las credeniales de base de datos. Agregar las siguientes lineas
`WWWUSER=1000
WWWGROUP=1000`
Y modificar la que dice `DB_HOST=127.0.0.1` a `DB_HOST=mysql`
En caso de usar windows, en el archivo docker_compose.yml modificar la línea 20 para que quede así: `IGNITION_LOCAL_SITES_PATH: './vendor/laravel/sail/runtimes/8.2'`
3) En la terminal, pararse en la carpeta del proyecto y ejecutar `composer install`, luego `docker-compose up` (la primera vez tarda), este útlimo comando se ejecuta cada vez que querramos prender el contenedor.
4) Luego entramos al contenedor y ejecutamos `php artisan key:generate` para generar una clave.
5) Para ver la base de datos nos conectamos con las credenciales puestas anteriormente desde MySQLWorkbench. 
6) 4) Luego entramos al contenedor y ejecutamos `php artisan migrate` para generar una clave. Luego ejecutar `chmod -R 777 storage` para dar permisos.

## Crear una migración:
En el contenedor ejecutar:
`php artisan make:migration nombre`
Luego:
`php artisan migrate`
## Como entrar a la base de datos LOCAL:
Para esto es necesario instalar `MySQL Workbench` https://www.mysql.com/products/workbench/
Allí, creamos una nueva conexión a `localhost` en el puerto `3306`, con un esquema default `bravo_app` y las credenciales puestas. 


