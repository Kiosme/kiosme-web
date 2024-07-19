# Kiosme

"Kiosme" es un programa de gestión de pequeñas empresas con el que podrás administrar tus finanzas, inventario, calendario y contabilidad, todo desde una interfaz amigable, adaptable y confiable.


# Instalación

## Windows

 1. Instalar un programa de alojamiento de páginas web Apache con capacidad de PHP.
 - Recomendamos utilizar **XAMPP**, disponible del siguiente link: [XAMPP Installers and Downloads for Apache Friends](https://www.apachefriends.org/es/index.html)
2. Descargar el repositorio actual
3. Mover los archivos del repositorio descargado a la carpeta "htdocs" de la instalación del servidor de páginas web.
4. Por defecto, el programa se conectará a la base de datos local del sistema (localhost, con usuario root). En el servidor MySQL a utilizar, se debe crear una base de datos "kiosme", y poblarla con tres tablas:
	- "id", INT 11 PRIMARY
	- "nombre_px", VARCHAR 250
	- "cant_px", INT 11

## Linux & MacOS

En progreso

## Uso

Una vez instalado, el servidor web mostrará la página principal de Kiosme. Se mostrará un botón para ingresar a la versión preliminar del módulo de inventario, el cual permitirá ingresar tus productos a una base de datos local.
