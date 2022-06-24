# solid-php-ejemplos
Algunos ejemplos sobre los principios de diseño SOLID en PHP.

# Docker

Sigue los siguientes pasos para correr el proyecto en tu máquina local.

**Paso 1.** Descargar y clonar el repositorio en la rama _main_.

**Paso 2.** Ejecutar _docker-compose up -d_ para descargar las imágenes y crear los contenedores.

**Paso 3.** Correr _docker-compose exec -it php-fpm composer install_ para instalar las librerías.

**Paso 4.** Correr _docker-compose exec -it php-fpm ./vendor/bin/phpunit tests_ para los tests.
