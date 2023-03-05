## Proyecto Clima

Este proyecto utiliza la API de OpenWeatherMap para mostrar la humedad de las ciudades de Miami, Orlando y New York en un mapa, así como para almacenar un historial de consultas que puede ser consultado a través de un enlace en la página.

## Requisitos

Para poder ejecutar este proyecto, es necesario contar con las siguientes herramientas instaladas en tu equipo:

-   PHP >= 7.3
-   Composer
-   Node.js y npm
-   Laravel >= 8.0
-   Una clave de API de OpenWeatherMap (puede obtenerse de forma gratuita en su sitio web)

### Instalación

1. Clona este repositorio en tu máquina local:
   <Code language="javascript">

git clone https://github.com/tu-usuario/proyecto-clima.git
</Code> 2. Instala las dependencias de PHP con Composer y npm .

<Code language="javascript">

cd weather-app
composer install
npm install
</Code> 3. Crea el archivo de configuración de Laravel.

<Code language="javascript">

cp .env.example .env
</Code> 4. Actualiza el archivo .env con las credenciales de la base de datos y la API de OpenWeatherMap.
<Code language="javascript">

OPENWEATHERMAP_API_KEY=your-api-key-here
DB_DATABASE=your-database-name-here
DB_USERNAME=your-database-username-here
DB_PASSWORD=your-database-password-here
</Code> 5. Ejecuta las migraciones de la base de datos.
<Code language="javascript">

php artisan migrate
</Code> 6. Sirve la aplicación en un servidor local.

<Code language="javascript">

php artisan serve
npm run dev

</Code>

## Uso

La página principal de la aplicación muestra un mapa con los marcadores de las ciudades Miami, Orlando y New York. Al hacer clic en cada marcador se muestra la humedad actual de la ciudad correspondiente.

La aplicación guarda un historial de las búsquedas realizadas, que se puede consultar haciendo clic en el enlace "Historial" en la parte superior de la página.

## Ejemplo 1 Pagina inicio

![ Pagina de inicio](https://i.ibb.co/4Z41jLc/captura.png)

## Ejemplo 2 Pagina busqudas

![Lista de busquedas](https://i.ibb.co/rZCskDQ/Captura-de-pantalla-2023-03-05-062416.png)
