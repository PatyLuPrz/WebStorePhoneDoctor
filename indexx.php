<?php
session_start();

if (!isset($_SESSION['loggedin'])){
    echo "Esta pagina es solo para usuarios registrados.<br>";
    echo "<br><a href='login.html'>Login</a>";
    echo "<br><br><a href='index.html'>Registrarme</a>";

    exit;
}
$now = time();

if($now > $_SESSION['expire']){
    session_destroy();
    echo "Su sesion a caducado,
    <a href=login.html>Inicie sesion nuevamente</a>";
    exit;
}
?><html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Bigelow+Rules|Boogaloo|Indie+Flower|Love+Ya+Like+A+Sister|Marcellus+SC|Nanum+Gothic|Pompiere|Rancho|Roboto+Mono|Six+Caps|Special+Elite|Squada+One|Sue+Ellen+Francisco|Tenor+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Handlee|Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css"> 
        <meta charset="UTF-8">
        <title> Inicio </title>
    </head>
    <body>
        <a name="INICIO"></a>
        <div class="header">
            <div class="header-2">
                <div id="h4">
                    <table>
                        <tr>
                            <td><img id="logo" src="img/logo.png" /></td>
                            <td>
                                <h1> StorePhone Doctor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1>
                                <hr/>
                            </td>
                        </tr>
                    </table>
                </div>
                 <div id="h5">
                    <form method="post" action="buscar.php">
                        <input id="buscar" type="Text" name="buscar" placeholder="Search" /> 
                        <a id="login" href="login.html">Cerrar sesión</a>
                        <br/>
                        <table id="menu">
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="indexx.php"> Inicio </a>&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                <td> <a href="ProductosV.php"> Productos </a>&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                <td> <a href="AcercaDeV.html"> Acerca de... </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td> <a href="Contactanos.html"> Contactanos </a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="banner">
            <img id="banner" src="img/banner.png">
        </div>
        <div class="body">
            
            <div class="body-2">
                <h2 id="titulo"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos nuevos... </h2>    
                <div id="b4">
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item ch-img-1">
                                <div class="ch-info">
                                    <h3>Liquido nano protector</h3>
                                    <p>Ver más... <a href="vistaProducto.php">View on Dribbble</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <center>
                        <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                    </center>
                </div>
            
                <div id="b5">
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item ch-img-2">
                                <div class="ch-info">
                                    <h3>Audifonos bluetooth</h3>
                                    <p>Ver más... <a href="vistaProducto.php">View on Dribbble</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <center>
                        <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                    </center>
                </div>
                <div id="b6">
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item ch-img-3">
                                <div class="ch-info">
                                    <h3>Adaptador plug led USB</h3>
                                    <p>Ver más...<a href="vistaProducto.php"></a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <center>
                        <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                    </center>
                </div>
			<div id="b4">
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item ch-img-4">
                                <div class="ch-info">
                                    <h3>Adaptador plug led USB</h3>
                                    <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <center>
                        <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                    </center>
			 </div>
            <div id="b5">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-5">
                            <div class="ch-info">
                                <h3>Adaptador plug led USB</h3>
                                <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <center>
                    <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                </center>
                </div>
                <div id="b6">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-6">
                            <div class="ch-info">
                                <h3>Adaptador plug led USB</h3>
                                <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <center>
                    <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                </center>
                </div>
                <div id="b7">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-7">
                            <div class="ch-info">
                                <h3>Adaptador plug led USB</h3>
                                <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <center>
                    <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                </center>
                </div>
                <div id="b8">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-8">
                            <div class="ch-info">
                                <h3>Adaptador plug led USB</h3>
                                <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <center>
                    <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                </center>
                </div>
                <div id="b9">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-9">
                            <div class="ch-info">
                                <h3>Adaptador plug led USB</h3>
                                <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <center>
                    <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                </center>
                </div>
                <div id="b10">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-10">
                            <div class="ch-info">
                                <h3>Adaptador plug led USB</h3>
                                <p>Ver más...<a href="vistaProducto.php">View on Dribbble</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <center>
                    <a id="SeeMore" href="vistaProducto.php"> >>Ver más... </a>
                </center>
                </div>
            </div>
        </div>
		<div class="body-3">
            
        
        </div>
        
        
        
        
        <hr>
        <div class="footer">
            <div class="footer-1">
                <div id="f1">
                    <center>
                        E-MAIL<br/>
                        <a id="mail"> storephone@gmail.com </a>
                    </center>
                </div>
                <div id="f2">
                    <center>
                        WhatsApp<br/>
                        <a id="whats"> +52 1 775 128 4715 </a>
                    </center>
                </div>
                <div id="f3">
                    <center>
                        DIRECCIÓN<br/>
                        <a id="address"> Pasaje Catedral “Fayuka” local #69 </a>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>