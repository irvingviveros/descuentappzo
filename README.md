# descuentappzo
Primera versión de la web.

PROPÓSITO:
El propósito de la aplicación y página web es mostrar las promociones que existen en restaurantes, bares y cafés de la zona Veracruz - Boca del Río. 
Las promociones contendrán el nombre del establecimiento, un breve encabezado de la promoción, la ubicación del establecimiento, el día de la promoción y su página en Facebook.

--USAR CHROME PARA VISUALIZAR EL CONTENIDO--
--USAR HERRAMIENTAS DE DESARROLLADORES EN CHROME PARA VISUALIZAR LA PÁGINA EN MODO DEVICE (CELULAR)--

La página principal (index.php) contendrá las promociones únicamente del día actual, a excepción de la pestaña que encabeza la página titulada "TOP", mostrará un máximo de 5 promociones más relevantes seleccionadas por un administrador por el momento. En un futuro se planea poner las promociones que paguen por estar en ese apartado.
Se tienen 4 enunciados, las cuales son: 
"Promos del día", son promociones de todo tipo de establecimiento (bar, rest y café)
"Bares, Restaurantes, Postres y Café" son secciones que mostrarán establecimientos de su respectivo tipo.

HEADER: El header está compuesto por un snack desplegable. Ninguno de los enlaces que contiene el snack funciona por el momento, excepto el de agregar promoción. Los enlaces son:
1. Promociones por día: son las promociones que puedes consultar otro día al actual.
2. Restaurantes: solo se desplegarán las promociones de los restaurantes del día actual.
3. Bares: solo se desplegarán las promociones de los bares del día actual.
4. Postres y café: solo se desplegarán las promociones de los cafés y tiendas de postres del día actual.
5. Agregar promoción: está opción es muy importante, no se pondrá hasta el momento para todo el público, será una opción para el administrador y se puso ahí para que sea fácil agregar información a la base de datos, se quitará una vez que se termine la página web.

Funcionalidades:
El apartado de "agregar promoción" funciona solo el agregar información a la base de datos.

Que se necesita: 
1. Se necesita reorganizar la base de datos, agregar campos o dejarla así, por el momento está "bien".
2. Se requiere obtener la información de la base de datos para que sea desplegado en la página principal por el momento, acorde al formato que está la página "index.php". Por ejemplo, si el admn agrega información en la página de "Agregar promoción", se necesita desplegar en la página index.php acorde al tipo de negocio.
3. Se requiere que en la página de "Agregar promoción" se incluya una opción para subir una imagen de la promoción y se guarde en la BD.
4. En la sección "Promociones por día" se requiere mostrar solo las promociones del día que se requiera. 

NOTAS: La información que está introducida en la BD es ficticia por el momento.

a. HTML: Todo está en orden, no necesita ningún cambio.

b. CSS: Todo está en orden, no se necesita ningún cambio. Se pueden simplificar algunas clases pero es lo de menos. 

c. JAVASCRIPT: No necesita ningún cambio hasta ahora.
El archivo JS "slickcar.js" es para el funcionamiento del carousel (cards en movimiento derecha-izquierda).

d. BDD: Necesita varios cambios si es requerido. Almacena:

Tabla negocio:
0. id_n: id del negocio, llave primaria
1. nom_n: nombre del negocio
2. tipo_n: tipo del negocio, ya sea bar, restaurante o café
3. dir_n: dirección del negocio. Por el momento será un enlace de Google Maps con referencia al negocio
4. face_n: dirección del perfil en Facebook del negocio
5. id_p1: id de la promoción, llave secundaria.

Tabla promoción:
0. id_p: ID de la promoción, llave primaria.
1. titulo_p: título de la promoción.
2. id_d1: día de la promoción, llave secundaria

Tabla dia:
0. id_d: ID del día
1. dia_d: día de la semana


≧◠‿◠≦✌
