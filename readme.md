<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca del código

**Servidor de correo**

Lo primero que tenemos que tener es un servidor de correo, el cual tenga habilitado el protocolo SMTP o POP3.

Para este ejemplo podemos usar Mailtrap <https://mailtrap.io/>. Mailtrap es un servidor de correo bastante utilizado por los desarrolladores para el testeo de sus aplicaciones. Es muy sencillo y su paquete freemium nos deja una bandeja de entrada de hasta 50 correos.

Una vez nos hemos logueado o creado una cuenta tenemos que copiarnos los datos y credenciales del servidor. Estos se encuentran en “Demo Inbox”.

Dentro de la configuración se nos deja escoger entre el tipo de aplicación que va a conectarse al servidor. Si escogemos Laravel, vemos que ya nos genera un código, listo para pegar en nuestro fichero de configuración.

**Nota importante**: Muchos servidores de correo, ya implementan la doble autentificación para acceder. Es posible que con estos datos nos de algún error de conexión y no funcione correctamente.

Para solucionar esto, debemos copiar esta misma configuración y grabarla en el archivo mail.php dentro del directorio config.

Para este ejemplo se va a desarrollar una ruta que reciba una función anónima donde utilizaremos la clase Mail de Laravel.

Mail cuenta con un método llamado send() que recibe 3 parámetros, a saber: vista/plantilla del correo electrónico, los datos que queremos enviar, y una función anónima.

La vista podemos prepararla dentro del directorio /views/emails y allí crear un archivo llamado notificacion.blade.php

Esta vista en especial, va a recibir una variable llamado link que lo pasaremos por el data.

fuente: https://jesuschicano.es

## IMPORTANTE
Laravel: error stream_socket_enable_crypto(): al tratar de usar certificados autofirmados

Se soluciona añadiendo al archivo config/mail.php

'stream' => [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
],

Con esto, conseguiremos que no se haga la comprobación completa del certificado (especialmente para certificados auto-firmados), pero si que se efectue la negociación de la conexión cifrada.

