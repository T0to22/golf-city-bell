# Proyecto Final - UTN PHP Avanzado

## Idea General

La idea general del proyecto es aplicar los conocimientos en POO en un site basico pero funcional.

Para esto, utilizando como base una web de un club de golf, estructure la pagina de la siguiente forma:

## URL del SITIO:
http://golfcb.ntasistemas.com.ar/

### Vista Publica
- Una pagina de inicio,
- Una pagina con una galeria de fotos,
- Una pagina con un formulario de contacto,
- Una pagina para registrarse como usuario,
- Una pagina para iniciar sesion.

## Vista Para Usuarios Registrados

- Una pagina para cambiar usuario y email de registro si el usuario no es Administrador.
- Una pagina para eliminar usuarios registrados si el usuario es Administrador.


Para el proyecto utilice PHP, aplicando MVC y POO.

La estructura del proyecto es la siguiente:

En el root path se encuentran los archivos index.php el cual hace de inicio de toda la web, el .gitignore donde se encuentran todos los archivos que no se subiran al repositorio, "datos mysql" que contiene, a modo de seguridad, los datos para la conexion a la base de datos y este README.md.

En la carpeta "controladores" se encuentran los controladores que le dan la lógica a toda la aplicacion.

    El archivo base.controlador.php es el encargado de cargar las vistas en el navegador.

    El archivo forms.controlador.php es quien realiza todas las operaciones que se inicien mediante formularios en las vistas. Aqui adentro estan definidas todas las operaciones que la pagina realiza:

        Todas las funciones tienen como base que, antes de ejecutarse, chequeen si todos los parametros necesarios para su ejecucion esten seteados por $_POST. Si esto es correcto se procede a ejecutar la funcion solicitada.

        Las funciones que reciban parametros de entrada procederan a leer los mismos y a armar un array con ellos, para luego enviarselos al MODELO correspondiente. En el caso de que la funcion no requiera ningun parametro de entrada, procedera a enviar al modelo la peticion.

        Como resultado, todas las funciones retornaran la respuesta que le sea devuelta por el modelo.

    El archivo mail.controlador.php unicamente gestiona el envio de mails del formulario de contacto de la web. La logica es similar a la explicada anteriormente.

En la carpeta "modelos" se encuentran los archivos que interactuan entre los controladores y la base de datos, como asi tambien el archivo que utiliza el controlador de mail.

    El archivo conexion.php define los parametros que se utilizan para la conexion con el motor de bases de datos MySQL.

    El archivo forms.modelos.php contiene las funciones que realizan operaciones contra la base de datos. Cada funcion, menos la de seleccion, recibe los datos enviados por la funcion solicitada en el controlador, utiliza el metodo conectar de la clase Conexion y envia la peticion al motor de base de datos.
    
    Dependiendo del resultado de la ejecucion de la peticion al motor de base de datos, cada funcion retornara dos respuestas posibles, siendo la primera la que suceda cuando la ejecucion sea correcta, y la segunda, informando del error especifico devuelto por el motor de base de datos.

    Para todos los casos, elegi utilizar Stored Procedures en lugar de sentencias preparadas, para poder manejar de un modo mas comodo todas las consultas en el motor de base de datos.

    El archivo mails.modelos.php contiene la logica para el envio de mails, utilizando la funcion mail() nativa de PHP.

Por ultimo, en la carpeta "vistas" se encuentran, como su nombre indica, todos los archivos que forman la parte visual del site. Adentro separe los archivos CSS, las Imagenes y las Paginas.

    El archivo base.php es el esqueleto principal de toda la web, contiene el menu y las rutas internas definidas mediante un condicional IF que recibe cada ruta asignada en los <a>. Cuando ninguna ruta coincida, se enviara a una web 404.php.

        La carpeta CSS contiene todos los archivos de estilo para las diferentes vistas.
        La carpeta IMG contiene las imagenes que se usan en todo el site.

        La capeta PAGINAS contiene las vistas de cada parte del site.

            Si el usuario es admin, una vez logueado, se le cargara la pagina admin.php donde se encuentra la operatoria para listar y eliminar usuarios registrados.

            Si el usuario no es admin, una vez logueado, se le cargara la pagina usuario.php donde se encuentran los datos y la posibilidad de modificarlos.

            El archivo login.php permite el acceso a usuarios cuando esten registrados.
            El archivo logout.php permite cerrar la sesion que se encuentra abierta en caso de existir una.
            El archivo registro.php permite el registro de usuarios nuevos.
            El archivo contacto.php permite el envio de emails.

            El resto de la web unicamente tiene informacion estatica.