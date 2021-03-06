
# ElectryProject:

## Español:

Para ver el proyecto primero se debe bajar en local, bien con un git clone (https://git-scm.com/book/es/v2/Fundamentos-de-Git-Obteniendo-un-repositorio-Git) o con un fork (http://aprendegit.com/fork-de-repositorios-para-que-sirve/).

Una vez tenemos el repositorio en local debemos ejecutar la instrucción siguiente en la terminal de nuestro proyecto:

    composer update

Seguidamente debemos crear el .env con el nombre y la contraseña de nuestra base de datos local - Para facilitar la tarea dejo a modo de ejemplo el .env.example.

Una vez tenemos todo correctamente configurado en el .env,  debemos ejecutar por terminal la siguiente instrucción:

    php artisan key:generate

Una vez generada correctamente veremos en el .env dicha key en "APP_KEY=base64", ya podemos pasar a generar la base de datos haciendo el comando:

    php artisan migrate

Para visualizar la app, ahora solo os queda hacer:

    php artisan serve 

¡Ya podéis ver la aplicación!

Gracias por usar mi app y aquí estoy si necesitáis ayuda.

Saludos,

Núria

## English

To see this project locali, first you should download the project localy. You coul use git clone (https://git-scm.com/book/es/v2/Fundamentos-de-Git-Obteniendo-un-repositorio-Git) or you can fork the repository (http://aprendegit.com/fork-de-repositorios-para-que-sirve/).

Once you have the repository localy, you should open the teminal in the project and then do the following in the command line:

    composer update

After you should create a .env file with the name and password of your Data Base. To help you in this process I just left the .env.example to help you.

When you are finish with it, you can execute on terminal the instruction:

    php artisan key:generate

To check if it is correctly generated look at your .env if you see a long key in APP_KEY=base64 you are ready to go and do the following command:

    php artisan migrate:fresh

To see the application now you just have to run:

    php artisan serve 

Now you are ready to go! 

I hope this will helpful, just contact me if you need further instructions. 

Regards,

Núria

## Documentation used:

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.