<html> 
    <head>
        <title> Ingeniería 1</title>
        <link rel="stylesheet" href="../css/Planificacion.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    </head>
       
    <body>
     <div class="barrnav">

        <div class="logo-titulo">
        <img src="../Iconos/construction_pc_computer_engineering_icon_153256.png" class="logo">
        <h1 class="title">INGENIERIA 1</h1>
        </div>
        <div class="dropdown move-right">
        <a class="btn custom-blue-btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contenido de la materia
        </a>
        <ul class="dropdown-menu">

            <div class="row">
  <div class="col">
    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4">
      <nav class="nav nav-pills flex-column">
        <a class="nav-link" href="Contexto.php">1. Contexto</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#item-1-1">1.1- Introducción</a>
          <a class="nav-link ms-3 my-1" href="#item-1-2">1.2- Justificación del problema</a>
          <a class="nav-link ms-3 my-1" href="#item-1-2">1.2- Definición del problema</a>
        </nav>
        <a class="nav-link" href="Investigacion.php">2. Investigación y fundamentos teóricos</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#item-1-1">2.1- Antecedentes</a>
        </nav>
        <a class="nav-link" href="Planificacion.php">3. Planificación y requisitos</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#item-3-1">3.1- Objetivos</a>
          <a class="nav-link ms-3 my-1" href="#item-3-2">3.2- Alcance del sistema</a>
          <a class="nav-link ms-3 my-1" href="Requisitos.php">3.3- Requisitos</a>
        </nav>
      </nav>
    </nav>
  </div>
      <!-- AQUI ESTA EL FIN DEL PRIMER MENU-->
        </ul>
        </div>

  

            <div class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button type="submit">🔍</button>
            </div>

        <div class="iconos">
            <a href="#"><i class="fas fa-sign-out-alt icono"></i></a>
            
        </div>
     </div>   

        <div class="contenedor">
            <h2>Planificación y requisitos del proyecto.</h2>
                <span> OBJETIVO GENERAL</span>
                <br>
                <p>Desarrollar una aplicación que conecte directamente a los productores agrícolas con los consumidores,
                eliminando intermediarios, garantizando precios justos y mejorando su rentabilidad, promoviendo la transparencia
                y sostenibilidad, a través de metodologías de ingeniería de software, lenguajes de programación y bases de datos. 
                </p>
        
                <span> OBJETIVOS ESPECÍFICOS</span>
                <p>Los objetivos específicos de este proyecto están ligados directamente con el ciclo de vida del software,
                de manera que se irán presentando en su debido orden. Estos objetivos específicos buscan acarrear todas las
                necesidades existentes. 
                1.	Analizar las necesidades y requerimientos de los productores agrícolas y consumidores que nos llevarán directo
                a las funcionalidades clave de la aplicación.
                2.	Diseñar una interfaz de usuario intuitiva y accesible que facilite la navegación y uso de la aplicación tanto para
                productores como para consumidores.
                3.	Desarrollar la plataforma tecnológica de la aplicación, incluyendo el backend y frontend, asegurando su funcionalidad
                y rendimiento.
                4.	Integrar un sistema de pago seguro que facilite las transacciones entre productores y consumidores, garantizando la 
                seguridad de la información financiera.
                5.	Probar la aplicación mediante un proceso de pruebas de usuario y funcionales para tener en cuenta los errores antes 
                de su lanzamiento al mercado.
                6.	Desplegar la aplicación en plataformas móviles y web, también garantizando un plan de capacitación y promoción para 
                su adopción efectiva por parte de los usuarios finales.
                
                </p>
                <span> ALCANCE DEL SISTEMA</span>
                <p> <!--INICIO TABLA ALCANCE SISTEMA-->
<table>
<tbody>
<tr>
<td width="196">
<p><strong>ENTRADA</strong></p>
</td>
<td width="196">
<p><strong>PROCESOS</strong></p>
</td>
<td width="196">
<p><strong>SALIDAS</strong></p>
</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n de la persona</p>
</td>
<td rowspan="13" width="196">
<p>Gesti&oacute;n de informaci&oacute;n de los pagos y pedidos</p>
</td>
<td rowspan="2" width="196">
<p>Consultas de los datos de las personas y su tipo por parte de los clientes, empleados y productores para tener respectivo conocimiento de ellos entre s&iacute; mismos.</p>
</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n del tipo de persona</p>
</td>
</tr>
<tr>
<td width="196">Informaci&oacute;n de los productos</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n del tipo de productos</p>
</td>
</tr>
<tr>
<td width="196">Informaci&oacute;n de puntos de ventas</td>
</tr>
<tr>
<td width="196">Informaci&oacute;n del municipio</td>
</tr>
<tr>
<td width="196">Informaci&oacute;n del corregimiento</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n de la vereda</p>
</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n de los predios de cultivo</p>
</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n de consultas con IA sobre estudios de mercado</p>
</td>
<td width="196">
<p>Informes dirigidos a los clientes y productores como gu&iacute;a para el establecimiento e informaci&oacute;n de precios.</p>
</td>
</tr>
<tr>
<td width="196">
<p>Informaci&oacute;n de los clientes</p>
</td>
<td width="196">
<p>Consultas por parte de los productores y empleados para realizar las acciones respectivas con la informaci&oacute;n del cliente.</p>
</td>
</tr>
<tr>
<td rowspan="2" width="196">
<p>Informaci&oacute;n del tipo de pagos</p>
</td>
<td width="196">
<p>Informes de los ingresos dirigidos a cada productor para que puedan llevar su contabilidad.</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
                </p> <!--FIN TABLA ALCANCE SISTEMA-->
                
        </div>
    </body>
</html>