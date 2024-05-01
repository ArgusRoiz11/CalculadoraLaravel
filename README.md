# Calculadora con Laravel

Este es un simple proyecto de calculadora desarrollado con el framework PHP Laravel. La calculadora puede realizar operaciones básicas como suma, resta, multiplicación, división y cálculo de porcentaje.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- PHP (preferiblemente 7.x o superior)
- Composer
- Servidor web (por ejemplo, Apache o Nginx)
- MySQL u otro sistema de gestión de bases de datos compatible con Laravel (opcional, dependiendo de tus necesidades)

## Instalación

1. Clona este repositorio en tu máquina local o descárgalo como un archivo zip y descomprímelo.
2. Abre una terminal y navega hasta el directorio del proyecto.
3. Ejecuta `composer install` para instalar las dependencias del proyecto.
4. Copia el archivo `.env.example` y renómbralo como `.env`. Ajusta la configuración del archivo `.env` según tu entorno local.
5. Genera una clave de aplicación ejecutando `php artisan key:generate`.
6. Configura tu servidor web para que apunte al directorio `public` de tu proyecto Laravel.

## Uso

Una vez que hayas instalado el proyecto, puedes utilizar la calculadora accediendo a la siguiente URL en tu navegador:

http://localhost:8000/calcular/{operacion}/{numero1}/{numero2}


Reemplaza `{operacion}`, `{numero1}` y `{numero2}` con los valores de la operación que deseas realizar y los números en los que deseas operar. Por ejemplo:

- Suma: `http://localhost:8000/calcular/suma/5/3`
- Resta: `http://localhost:8000/calcular/resta/10/4`
- Multiplicación: `http://localhost:8000/calcular/multiplicacion/6/2`
- División: `http://localhost:8000/calcular/division/8/2`
- Porcentaje: `http://localhost:8000/calcular/porcentaje/200/25`

La calculadora devolverá el resultado de la operación en formato JSON.

## Contribución

Si quieres contribuir a este proyecto, siéntete libre de hacer un fork y enviar tus propuestas a través de pull requests. Cualquier contribución será bienvenida.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
