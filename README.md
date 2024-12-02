# Aplicación de Subida de Archivos

Esta es una aplicación web desarrollada en Laravel que permite a los usuarios subir, ver y listar archivos de imagen.

## Características

- Subida de archivos de imagen (jpg, png, gif) con un tamaño máximo de 2MB.
- Listado de todos los archivos subidos.
- Visualización de un archivo específico.
- Visualización de la imagen subida.
- Redireccionamiento al formulario de subida si no hay archivos subidos.


![Subir una imagen](images/create.jpg)



![Listado de imagenes](images/index.jpg)



![Detalles de la imagen](images/show.jpg)


## Instalación

Sigue estos pasos para descargar y configurar el repositorio:

1. Clona el repositorio:

    ```sh
    git clone https://github.com/aluqmor/subirArchivosApp.git
    ```

2. Navega al directorio del proyecto:

    ```sh
    cd tu-repositorio
    ```

3. Instala las dependencias de Composer:

    ```sh
    composer install
    ```

4. Copia el archivo database.sql y crea la base de datos junto con usuario y contraseña.

5. Cambia el nombre de `.env.example` a `.env`.

6. Configura tu base de datos en el archivo `.env`:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
    ```

7. Genera la clave de la aplicación:

    ```sh
    php artisan key:generate
    ```

8. Ejecuta las migraciones para crear las tablas necesarias:

    ```sh
    php artisan migrate
    ```
