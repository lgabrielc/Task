1) Clonar repositorio, instalar composer install, generar php artisan key:generate, correr las migraciones: php artisan migration


Detalle de el uso de la api task


A) LEER TASKS
/**
 * @api {get} /task/  Informacion del request task
 * @apiSuccess {String} firstname Firstname of the User.
 */
  //Ejemplo:
http://127.0.0.1:8000/api/task 


B) MOSTRAR UNA TASK FILTRANDO POR ID
 /**
 * @api {get} /task/:id Request User information

 * @apiParam {Number} id Task unique ID.
 * @apiSuccess {json} Informacion en json de la tarea.

 */
 //Ejemplo:
http://127.0.0.1:8000/api/task/1
 
C) CREAR TASK
 /**
 * @api {post} /task/ Request Task information
 * @apiParam {string} title Task Titulo.
 * @apiParam {string} description Task Descripcion de la tarea.
 * @apiParam {string} completed Task estado de la tarea.
 * @apiParam {string} due_dated Task fecha de vencimiento.
 * @apiReturn {json} Task creada.

 */
 //Ejemplo:
http://127.0.0.1:8000/api/task?title=titulo2&description=contenido&completed=completo&due_date=2000-05-05

D) ACTUALIZAR TASK POR ID
 /**
 * @api {put} /task/:id Request Task information
 * @apiParam {string} title Task Titulo a editar.
 * @apiParam {string} description Task Descripcion de la tarea a editar.
 * @apiParam {string} completed Task estado de la tarea a editar.
 * @apiParam {string} due_dated Task fecha de vencimiento a editar.

 * @apiSuccess {null} Devuelve nulo si ha sido eliminado con exito.

 */
 
//Ejemplo:
http://127.0.0.1:8000/api/task/1?title=prueba3&description=prueba3&completed=realizado&due_date=2024-04-04


E) ELIMINAR TASK POR ID
  /**
 * @api {delete} /task/:id Request User information

 * @apiParam {Number} id Task unique ID.
 * @apiSuccess {boolean} Devuelve true si se elimino con exito.

 */
 Ejemplo:
http://127.0.0.1:8000/api/task/1
