Proyecto Web destinado al representante de la Bodega Cecchin en la patagonia.
=====
**Proyecto final web 1er Año de la materia Proyecto de Software I**
-
**Profesor:** Lucas Passalaqcua.
-
**Instituto Capacitas.**
-
**Alumnos:** Facundo Sautu, Ignacio Bressa, Ramiro Lezcano.
-
**Año:** 2017.

=====

Descripcion del proyecto:

El proyecto se basa de un sistema Online orientado a la venta de vinos orgánicos.
Se trata de un sitio tanto informativo como también capáz de permitirle al usuario
realizar consultas y gestionar compras comunicandose directamente con el vendedor.
Detras del sitio correrá una base de datos donde se alojarán los e-mails y la 
información personal de cada uno de los usuarios que hayan realizado previamente 
algún tipo de consulta al vendedor o hayan registrado una cuenta en nuestro sitio. 
También estan alojados en dicha base de datos los productos que se encuentran disponibles
para la venta, como también otros datos propios del backend.
======  

Guia de Usuario:
===
Menu
---
Se dispone de un **menu** en el cual se pueden observar los siguientes items:

"Inicio" es la página principal del sitio web.
-
"Quienes Somos" es la página donde se puede leer una breve reseña de la historia de la bodega.
-
"Nuestros Productos" aquí se listan todos los productos disponibles para la venta al público.
-
"Contacto" este es el formulario de contacto para que pueda realizar consultas, pedir 
presupuestos o informarse sobre algun tipo de promoción comunicandose directamente con el vendedor.
-
"Registro" aquí puede crear una cuenta de ususario para nuestro sitio y asi mantenerse infomado sobre
las últimas novedades o promociones.
-
"Ingresar" aquí usted podrá ingresar con su cuenta ya registrada con anterioridad en el formulario de
registro.
---

Contacto
===

Para poder contactarse con el vendedor usted necesitara completar los campos disponibles con sus datos, 
para luego poder escribir su mensaje en el área de texto.
Los campos son:

"Nombre" debe introducir aquí su nombre.
-
"Email" debe introducir aquí su email.
-
"Teléfono" debe introducir aquí su teléfono (opcional)
-
"Empresa" debe introducir aquí su empresa en caso de terner una, sino puede escribir "Particular" o dejar
el espacio en blanco (opcional).
-
"Mensaje" debe escribir su mensaje.
---

Registro
===

Este es el formulario de registro que deberá completar para poder crear una cuenta en nuestro sitio.
Los campos que deberá llenar son los siguientes:

"Nombre" debe introducir aquí su nombre.
-
"Apellido" debe introducir su apellido.
-
"Email" debe introducir aquí su email.
-
"Contraseña" debe introducir aquí su contraseña.
-
"Confirmacion de contraseña" debe volver a ingresar la misma clave que ingresó en el campo anterior.
-
"Teléfono" debe introducir aquí su teléfono (opcional).
-
"Boton de enviar" debe presionarlo luego de completar el formulario para que se pueda registrar.
---

Ingresar
===

En este formulario de 2 campos debe introducir el email y la caontraseña que utilizó para crear su cuenta
en nuestro sitio.
Campos para completar:

**Email** debe introducir su email registrado.
-
**Contraseña** debe introducir su contraseña registrada.
 
 Guia del programador
 ===
 
 Requisitos:
 
 PHP, MySQL, Servidor apache (para correrlo en modo Local) y el archivo BDVinos.sql (que es el script para crear la 
 base de datos que utiliza el sitio. Se encuentra en la carpeta SQL).
 ---
 El sitio esta dividio en 2 ya que posee un frontend y un backend. 
 El frontend esta compuesto por todo lo que esta a la vista del usuario final.
 El backend es únicamente accesible para las cuentas de administradores ya que aquí se le permite al administrador
 del sitio modificar cualquier dato que aparece en el frontend. 
 Este backend trabaja de la mano con la base de datos MySQL y php para poder hacer las consultas (query) y modificar 
 diversos aspectos del frontend, directamente desde el backend.
