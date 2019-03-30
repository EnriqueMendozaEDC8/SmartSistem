Instrucciones para instalar y configurar los prerrequisitos de la aplicación.
    1.- Contar con un servidor local
    2.- Tener el codigo fuente en una carpeta llamada SPA
    3.- Es necesario primero instalar la base de datos antes de iniciar el sistema.

Instrucciones para crear e inicializar la base de datos
    1.- Crear una base de datos llamada spa
    2.- Ejecutar el archivo spa.sql en un servidor mysql

Asunciones que hiciste durante la construcción de la solución, es bueno explicar las
asunciones que hiciste.
    1.- Al momento de ingresar el nombre, debe ser mayor de dos letras.
    2.- En el apartado de perfil se muestran las solicitudes pendientes y las que han sido canceladas pero en la parte de solicitudes tambien muestra las solicitudes pendientes, debido a que el archivo lo da a entender asi.
    3.- El proceso de aceptacion o decline pide en este caso se realizo con tareas de windows, el archivo es "verificar_solicitudes.bat" por lo que se necesita agregar a tareas programadas o en otro caso executarlo directamente.
        para agregarlo a las tareas de windows
        1.- ejecutamos Task Scheduler
        2.- creamos una nueva tarea
        3.- general/ Asignamos un nombre y descripcion
        4.- triggers/ new/ Repeat task every ingresamos el tiempo deseado. for a duration of: Indefinitely
        5.- actions/ new / star a program y en settings buscamos el archivo .bat
        6.- aceptamos todo.
    4.- El historial crediticio se muestra con mas informacion.

Instrucciones para preparar el código fuente para compilarlo y correrlo de manera
apropiada
    1.- El sistema usa como framework codeigniter por lo tanto no es necesario instalar composer u otra dependencia, basta con un servidor local.

Instrucciones para ejecutar las pruebas
    1.- Instalamos Selenium(el ide de chrome web store de preferencia).
    2.- en el apartado test suites, dar click al icono de la carpeta
    3.- buscamos el archivo test_case.html ubicado en la carpeta raiz del sistema.
    4.- dar play

Problemas que enfrentaste al resolver éste ejercicio
    El decidir que framework usar debido a que buscaba que no fuera complicada la instalacion para la persona el cual esta destinada la revision.
    el punto 7 de losrequisitos funcionales, tal vez no lo entendi bien ya que cola de procesamiento es un nuevo concepto, en lo personal.

Crítica constructiva sobre éste ejercicio
    En el 3er punto de los requisitos funcionales perfil y solicitud es dificil entender cual es la diferencia en ciertos puntos.