<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function solucion1(){
        var masa=0.7;
        var Volumen = 0.002587;
        var D=(masa/Volumen)
        var a=Math.round(D *1000)/1000;
        var d=document.getElementById("resultado");
        d.innerHTML='<h2>Resultado: </h2>  La densidad en SI(sistema internacional) es: </br> D = '+ a +'  Kg/m^3 </br>';
        }
    </script>
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <h1>Science Technology Engineerig & Mathematics</h1>
    <h2>Resolver problemas de Ciencia e Ingeniería con JS</h2>
    <h2>Nombre: Miguel angel Popoca  Naves    , No. de control: 17091136</h2>
    <img src="images/fotoSelfie.jpg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
        <h2>Problema: Dado el siguiente caso, resolverlo modificando el codigo de JS base.</h2>
        <p>Descripción:</p>
        <p>Un cuerpo solido de cierto material se mide su masa y se encontro un valor de 700gr al medir su volumen este fue de 2587cm3. <br>
            <br>
            calcular la densidad en el sistema internacional de unidades. 
           <br> 
            
            
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            Masa = 700gr = 0.7kg <br>
            Volumen = 2,587 cm^3  = 0.002587 m^3  <br>
            <br>
      </section>
      <section id="formulas">
            <h2>Fórmulas</h2>
            D = M/V <br>
            

      </section>
      <section id="solucion">
            <h2>Cálculos</h2>
            <p>La densidad en SI(sistema internacional) es:<br>
                D = (0.7)Kg / (0.002587)m^3 <br>
            D = ?
            <br>
            </p>
             <button onclick="solucion1()">Presiona para calcular</button>
             <br>
      </section>
      <section id="resultado">
          <h2>Resultado</h2>
            
      </section>
    </section>
    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
