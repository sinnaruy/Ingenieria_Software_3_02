<html> 
    <head>
        <title> Ingeniería 1</title>
        <link rel="stylesheet" href="../css/Requisitos.css">
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
          <a class="nav-link ms-3 my-1" href="#item-3-2">3.3- Requisitos</a>
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
            <h2>Planificación y requisitos del proyecto</h2>
            <br>
            <p><strong>REQUISITOS DE USUARIO (RU)</strong></p>
                <p> 
<table>
<tbody>
<tr>
<td width="147">
<p><strong>Id Requisito</strong></p>
</td>
<td width="147">
<p><strong>Nombre del requisito</strong></p>
</td>
<td width="147">
<p><strong>Descripci&oacute;n del requisito</strong></p>
</td>
<td width="125">
<p><strong>Usuario</strong></p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-001</p>
</td>
<td width="147">
<p>Gesti&oacute;n persona</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de las personas para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-002</p>
</td>
<td width="147">
<p>Gesti&oacute;n tipo de persona</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n del tipo de persona para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-003</p>
</td>
<td width="147">
<p>Gesti&oacute;n productos</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los productos para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-004</p>
</td>
<td width="147">
<p>Gesti&oacute;n tipo de productos</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los empleados para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-005</p>
</td>
<td width="147">
<p>Gesti&oacute;n punto de ventas</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los empleados para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-006</p>
</td>
<td width="147">
<p>Gesti&oacute;n municipio</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n del municipio para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-007</p>
</td>
<td width="147">
<p>Gesti&oacute;n corregimiento</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n del corregimiento para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-008</p>
</td>
<td width="147">
<p>Gesti&oacute;n vereda</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de la vereda para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-009</p>
</td>
<td width="147">
<p>Gesti&oacute;n predios de cultivo</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los predios de cultivo para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-010</p>
</td>
<td width="147">
<p>Gesti&oacute;n consultas IA sobre estudios de mercado</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de consultas con IA sobre estudios de mercados para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-011</p>
</td>
<td width="147">
<p>Gesti&oacute;n clientes</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los clientes para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-012</p>
</td>
<td width="147">
<p>Gesti&oacute;n pedidos</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los pedidos para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-013</p>
</td>
<td width="147">
<p>Gesti&oacute;n pagos</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los pagos para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-014</p>
</td>
<td width="147">
<p>Gesti&oacute;n tipo pagos</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los tipos de pago para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-015</p>
</td>
<td width="147">
<p>Gesti&oacute;n informes</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de lo mencionado en el cuadro izquierdo para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-016</p>
</td>
<td width="147">
<p>Gesti&oacute;n consultas</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los pagos y pedidos para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Productor, empleado, cliente,</p>
<p>administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-017</p>
</td>
<td width="147">
<p>Gesti&oacute;n perfil</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los perfiles para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Administrador.</p>
</td>
</tr>
<tr>
<td width="147">
<p>RU-018</p>
</td>
<td width="147">
<p>Gesti&oacute;n usuario</p>
</td>
<td width="147">
<p>El sistema permitir&aacute; la gesti&oacute;n de la informaci&oacute;n de los usuarios para crear, consultar, modificar, guardar, inhabilitar, cancelar y salir.</p>
</td>
<td width="125">
<p>Administrador.</p>
</td>
</tr>
</tbody>
</table>
                </p> <!--FIN TABLA REQUISITOS USUARIO-->

                <p> <!--INICIO TABLA REQUISITOS FUNCIONALES-->

<table>
<tbody>
<p><strong>REQUISITOS FUNCIONALES (RF)</strong></p>
<tr>
<td width="81">
<p><strong>Id RF</strong></p>
</td>
<td width="103">
<p><strong>Nombre del requisito</strong></p>
</td>
<td width="165">
<p><strong>Descripci&oacute;n del requisito</strong></p>
</td>
<td width="133">
<p><strong>Usuario</strong></p>
</td>
<td width="107">
<p><strong>Id RU</strong></p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-001</p>
</td>
<td width="103">
<p>Crear persona</p>
</td>
<td width="165">
<p>Permite registrar la informaci&oacute;n de las personas con los siguientes datos: Identificaci&oacute;n, nombre1, nombre2, apellido1, apellido2, correo, fecha de nacimiento. A trav&eacute;s de opci&oacute;n guardar.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-002</p>
</td>
<td width="103">
<p>Consultar persona</p>
</td>
<td width="165">
<p>Permite consultar la informaci&oacute;n de las personas por los campos identificaci&oacute;n, nombre1 y apellido1.</p>
</td>
<td width="133">
<p>Productor, empleado, cliente, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-003</p>
</td>
<td width="103">
<p>Modificar persona</p>
</td>
<td width="165">
<p>Permite modificar la informaci&oacute;n de las personas a excepci&oacute;n de la identificaci&oacute;n, utilizando la opci&oacute;n guardar.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-004</p>
</td>
<td width="103">
<p>Guardar persona</p>
</td>
<td width="165">
<p>Permite guardar la informaci&oacute;n de las personas.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-005</p>
</td>
<td width="103">
<p>Inhabilitar persona</p>
</td>
<td width="165">
<p>Permite habilitar o inhabilitar a una persona, con previa confirmaci&oacute;n de realizar el proceso.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-006</p>
</td>
<td width="103">
<p>Cancelar persona</p>
</td>
<td width="165">
<p>Permite cancelar el proceso que se est&eacute; realizando y regresar al estado inicial.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-007</p>
</td>
<td width="103">
<p>Salir persona</p>
</td>
<td width="165">
<p>Permite cerrar el formulario.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-001</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-008</p>
</td>
<td width="103">
<p>Crear tipo de persona</p>
</td>
<td width="165">
<p>Permite registrar la informaci&oacute;n del tipo de persona con los siguientes datos: Id_persona, cargo, tel&eacute;fono, direcci&oacute;n, numero de terrenos, cantidad de cultivos. A trav&eacute;s de opci&oacute;n guardar.</p>
</td>
<td width="133">
<p>Productor, administrador.</p>
</td>
<td width="107">
<p>RU-002</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-009</p>
</td>
<td width="103">
<p>Consultar tipo de persona</p>
</td>
<td width="165">
<p>Permite consultar la informaci&oacute;n del tipo de persona por el campo Id_persona.</p>
</td>
<td width="133">
<p>Productor, empleado, cliente, administrador.</p>
</td>
<td width="107">
<p>RU-002</p>
</td>
</tr>
<tr>
<td width="81">
<p>RF-010</p>
</td>
<td width="103">
<p>Modificar tipo de persona</p>
</td>
<td width="165">
<p>Permite modificar la informaci&oacute;n del tipo de persona a excepci&oacute;n del Id_persona.</p>
</td>
<td width="133">
<p>Productor, empleado, administrador.</p>
</td>
<td width="107">
<p>RU-002</p>
</td>
</tr>
</tbody>
</table>
                    <!--FIN TABLA REQUISITOS FUNCIONALES-->
                </p>

                <p> <!--INICIO TABLA REQUISITOS NO FUNCIONALES-->
                <p><strong>REQUISITOS NO FUNCIONALES (RNF)</strong></p>
<table width="631">
<tbody>
<tr>
<td width="111">
<p><strong>ID. Requisito</strong></p>
</td>
<td width="520">
<p><strong>Descripci&oacute;n del requisito</strong></p>
</td>
</tr>
<tr>
<td width="111">
<p>RNF-001</p>
</td>
<td width="520">
<p>Capacitaci&oacute;n, antes de intensificar el uso del sistema los usuarios deben conocer su</p>
<p>modo de uso.</p>
</td>
</tr>
<tr>
<td width="111">
<p>RNF-002</p>
</td>
<td width="520">
<p>Actualizar la informaci&oacute;n por ingreso o retiro de alg&uacute;n funcionario.</p>
</td>
</tr>
<tr>
<td width="111">
<p><em>&nbsp;</em></p>
<p><em>&nbsp;</em></p>
<p>RNF-003</p>
</td>
<td width="520">
<p>Dise&ntilde;o adecuado a las necesidades del usuario, para que la aplicaci&oacute;n sea intuitiva y sencilla de usar cumpliendo con los siguientes par&aacute;metros:</p>
<p>Tendr&aacute; una interfaz atrayente: formaci&oacute;n de los elementos acorde al dise&ntilde;o.</p>
<p>La carga de informaci&oacute;n deber&aacute; ser r&aacute;pida.</p>
</td>
</tr>
</tbody>
</table>
<table width="631">
<tbody>
<tr>
<td width="111">
<p><em>&nbsp;</em></p>
<p>RNF-004</p>
</td>
<td width="520">
<p>Tiempo de respuesta: se espera minimizar el tiempo a un promedio de 20 segundos, con el fin de que no se haga muy pesada la interacci&oacute;n con la Base de Datos manejada</p>
<p>v&iacute;a web.</p>
</td>
</tr>
<tr>
<td width="111">
<p>RNF-005</p>
</td>
<td width="520">
<p>Asignar suficiente espacio a la base de datos para soportar las grandes cantidades de</p>
<p>informaci&oacute;n suministradas.</p>
</td>
</tr>
<tr>
<td width="111">
<p>RNF-006</p>
</td>
<td width="520">
<p>Configuraci&oacute;n adecuada del equipo, para soportar la correcta instalaci&oacute;n de la</p>
<p>aplicaci&oacute;n.</p>
</td>
</tr>
</tbody>
</table>
<table width="631">
<tbody>
<tr>
<td width="111">
<p>RNF-007</p>
</td>
<td width="520">
<p>Encriptaci&oacute;n de las claves.</p>
</td>
</tr>
<tr>
<td width="111">
<p>RNF-008</p>
</td>
<td width="520">
<p>Realizar copia de seguridad, autom&aacute;tico cada 6 horas, en servidor ubicado en otro</p>
<p>espacio fuera de la empresa.</p>
</td>
</tr>
<tr>
<td width="111">
<p>RNF-009</p>
</td>
<td width="520">
<p>Los usuarios deber&aacute;n estar registrados, bajo la modalidad del perfil del sistema.</p>
</td>
</tr>
</tbody>
</table>
                    <!--FIN TABLA REQUISITOS NO FUNCIONALES-->
                </p>

                <p> <!--INICIO TABLA HISTORIAS DE USUARIO-->
                <p>&nbsp;</p>
                <p><strong>HISTORIAS DE USUARIO (HU)</strong></p>
<table width="777">
<tbody>
<tr>
<td width="187">
<p><strong>Como &lt;tipo de usuario&gt;</strong></p>
</td>
<td width="287">
<p><strong>Quiero &lt;realizar alguna tarea&gt;</strong></p>
</td>
<td width="304">
<p><strong>para que pueda &lt;el logro alg&uacute;n objetivo&gt;</strong></p>
</td>
</tr>
<tr>
<td width="187">
<p>Administrador de la aplicaci&oacute;n</p>
</td>
<td width="287">
<p>Necesito ver los comentarios que hacen las personas de los productos</p>
</td>
<td width="304">
<p>Y as&iacute; mirar que no haya malas palabras que no ayudan y solo insultan o hacen da&ntilde;o.</p>
</td>
</tr>
<tr>
<td width="187">
<p>Productor</p>
</td>
<td width="287">
<p>Recibir un mensaje cuando alguien compre mis productos</p>
</td>
<td width="304">
<p>Preparar los pedidos a tiempo</p>
</td>
</tr>
<tr>
<td width="187">
<p>Cliente</p>
</td>
<td width="287">
<p>Hablar directamente con el agricultor, acerca de los productos que vende</p>
</td>
<td width="304">
<p>Hacer preguntas de los productos antes de comprar</p>
</td>
</tr>
<tr>
<td width="187">
<p>Cliente</p>
</td>
<td width="287">
<p>Guardar mis productos favoritos</p>
</td>
<td width="304">
<p>Encontrarlos m&aacute;s f&aacute;cil cuando vaya a comprar</p>
</td>
</tr>
<tr>
<td width="187">
<p>Productor</p>
</td>
<td width="287">
<p>Mandar mensajes a las personas que compren</p>
</td>
<td width="304">
<p>Tener una mejor relaci&oacute;n con mis clientes</p>
</td>
</tr>
</tbody>
</table>
                    <!--FIN TABLA HISTORIAS DE USUARIO-->
                </p>

                <p> <!--INICIO TABLA REGLAS DEL NEGOCIO-->
                <p><strong>REGLAS DEL NEGOCIO (RN)</strong></p>
<table width="1085">
<tbody>
<tr>
<td width="77">
<p><strong>1. Identificador:</strong></p>
</td>
<td width="112">
<p><strong>2. Nombre de la regla:</strong></p>
</td>
<td width="113">
<p><strong>3. Descripci&oacute;n:</strong></p>
</td>
<td width="91">
<p><strong>4. &Aacute;mbito:</strong></p>
</td>
<td width="121">
<p><strong>5. Condiciones:</strong></p>
</td>
<td width="143">
<p><strong>6. Acciones o restricciones:</strong></p>
</td>
<td width="114">
<p><strong>7. Excepciones:</strong></p>
</td>
<td width="78">
<p><strong>8. Fuente:</strong></p>
</td>
<td width="65">
<p><strong>9. Prioridad:</strong></p>
</td>
<td width="77">
<p><strong>10. Fecha de creaci&oacute;n y &uacute;ltima actualizaci&oacute;n:</strong></p>
</td>
</tr>
<tr>
<td width="77">
<p>Un c&oacute;digo &uacute;nico o n&uacute;mero para identificar la regla (ejemplo: RN-001).</p>
</td>
<td width="112">
<p>Un t&iacute;tulo breve y descriptivo que resuma la regla.</p>
</td>
<td width="113">
<p>Explicaci&oacute;n clara y detallada de la regla.</p>
</td>
<td width="91">
<p>Define a qu&eacute; parte del sistema o proceso aplica la regla.</p>
</td>
<td width="121">
<p>Describe las condiciones o situaciones en las que la regla se aplica.</p>
</td>
<td width="143">
<p>Especifica lo que el sistema debe hacer o no hacer seg&uacute;n la regla.</p>
</td>
<td width="114">
<p>Indica si hay casos en los que la regla no aplica.</p>
</td>
<td width="78">
<p>Menciona de d&oacute;nde proviene la regla (por ejemplo, pol&iacute;ticas de la empresa, normativas legales, etc.).</p>
</td>
<td width="65">
<p>Define la importancia de la regla (alta, media, baja).</p>
</td>
<td width="77">
<p>Registra cu&aacute;ndo se cre&oacute; la regla y si ha sido modificada.</p>
</td>
</tr>
<tr>
<td width="77">
<p>RN-001</p>
</td>
<td width="112">
<p>Env&iacute;o gratis</p>
</td>
<td width="113">
<p>Los compradores pueden recibir sus productos de manera gratuita si superan los 70000 en compras</p>
</td>
<td width="91">
<p>Aplica para todas las compras realizadas en la plataforma</p>
</td>
<td width="121">
<p>Se activa cuando el comprador finaliza el pedido</p>
</td>
<td width="143">
<p>El sistema debe verificar el monto total de la compra antes de aplicar el env&iacute;o gratuito.</p>
</td>
<td width="114">
<p>No aplica en zonas rurales alejadas donde el costo de env&iacute;o es mayor</p>
</td>
<td width="78">
<p>Pol&iacute;tica de incentivos para mejorar las ventas</p>
</td>
<td width="65">
<p>Alta</p>
</td>
<td width="77">
<p>26/02/2025</p>
</td>
</tr>
<tr>
<td width="77">
<p>RN-002</p>
</td>
<td width="112">
<p>Verificaci&oacute;n de identidad para vendedores</p>
</td>
<td width="113">
<p>Los campesinos deben validar su identidad antes de vender productos en la plataforma.</p>
</td>
<td width="91">
<p>Aplica al proceso de registro de vendedores.</p>
</td>
<td width="121">
<p>Se activa cuando un usuario intenta registrarse como vendedor</p>
</td>
<td width="143">
<p>El sistema debe solicitar documentos de identidad y verificarlos antes de aprobar la cuenta.</p>
</td>
<td width="114">
<p>No aplica para compradores, solo para vendedores</p>
</td>
<td width="78">
<p>Pol&iacute;tica de la plataforma</p>
</td>
<td width="65">
<p>Alta</p>
</td>
<td width="77">
<p>26/02/2025</p>
</td>
</tr>
<tr>
<td width="77">
<p>RN-003</p>
</td>
<td width="112">
<p>Productos perecederos deben tener fecha de caducidad</p>
</td>
<td width="113">
<p>Todo producto perecedero debe incluir su fecha de caducidad al publicarse</p>
</td>
<td width="91">
<p>Aplica al proceso de registro de productos</p>
</td>
<td width="121">
<p>Se activa cuando un campesino publica un producto de tipo perecedero</p>
</td>
<td width="143">
<p>Si el producto es perecedero y no tiene fecha de caducidad, el sistema no permitir&aacute; su publicaci&oacute;n</p>
</td>
<td width="114">
<p>No aplica para productos no perecederos como artesan&iacute;as o semillas</p>
</td>
<td width="78">
<p>Pol&iacute;ticas de consumo y sanitarias</p>
</td>
<td width="65">
<p>Alta</p>
</td>
<td width="77">
<p>26/02/2025</p>
</td>
</tr>
<tr>
<td width="77">
<p>RN-004</p>
</td>
<td width="112">
<p>estricci&oacute;n de ventas dependiendo de la disponibilidad de los productos</p>
</td>
<td width="113">
<p>No se pueden vender productos que est&eacute;n agotados en inventario</p>
</td>
<td width="91">
<p>Aplica a la funcionalidad de gesti&oacute;n de inventarios</p>
</td>
<td width="121">
<p>Se activa cuando el stock de un producto llega a cero</p>
</td>
<td width="143">
<p>El sistema debe inhabilitar la opci&oacute;n de compra de ese producto</p>
</td>
<td width="114">
<p>No aplica si el productor actualiza el stock manualmente</p>
</td>
<td width="78">
<p>Pol&iacute;ticas de inventario</p>
</td>
<td width="65">
<p>Media</p>
</td>
<td width="77">
<p>26/02/2025</p>
</td>
</tr>
<tr>
<td width="77">
<p>RN-005</p>
</td>
<td width="112">
<p>M&eacute;todos de pago permitidos</p>
</td>
<td width="113">
<p>Los compradores solo pueden pagar con tarjetas de d&eacute;bito/cr&eacute;dito o transferencias bancarias</p>
</td>
<td width="91">
<p>Aplica a todas las compras en la plataforma</p>
</td>
<td width="121">
<p>Se activa cuando el usuario selecciona un m&eacute;todo de pago</p>
</td>
<td width="143">
<p>El sistema debe rechazar pagos en efectivo u otros m&eacute;todos no autorizados</p>
</td>
<td width="114">
<p>No aplica para convenios de empresas</p>
</td>
<td width="78">
<p>Pol&iacute;ticas de pagos</p>
</td>
<td width="65">
<p>Media</p>
</td>
<td width="77">
<p>26/02/2025</p>
</td>
</tr>
</tbody>
</table>
                    <!--FIN TABLA REGLAS DEL NEGOCIO-->
                </p>
  
        </div>
    </body>
</html>