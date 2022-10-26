<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css2.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<script>
    function w3_open() {
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    function myFunc(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
            if (x.className.indexOf("w3-hide") == -1) {
                x.className += " w3-hide";
            } else {
                x.className = x.className.replace(" w3-hide", "");
            }
        }
</script>
<style>
    input.busqueda {
        padding: 15px 2px px 30px;
    }
</style>
<body>

        <div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
            <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
        </div>

    <div class="w3 teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="row">
                    <div class="col-8">
                        <input type="text" name="bItem" id="bItem" size="60" placeholder="ID, ejem: FEI-568 o F-123">
                    </div>
                    <div class="col-4">
                        <button>Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-2">
                <img src="img\software.png" class="w3-round" with="20" height="20" alt="Icono">
                <b>Software</b>
                <p>Inventario: F-123</p>
                <p>ID UV: FEI-456</p>
                <p>Tipo:Software con licencia</p>
                <p>Ubicacion:<b>CC2</b></p>
                <p>Estado:<b>Disponible</b></p>
                <p>Responsable:
                <b>Fulano de Palo Rodriguez</b></p>
            </div>
            <div class="col-10">
                <button onclick="myFunc('Desc')" class="w3-btn w3-block w3-red">
                Descripcion</button>
                <div id="Desc" class="w3-container w3-show">
                    <div class="row">
                        <div class="col-6">
                            <p>Aqui pondria la informacion</p>
                        </div>
                        <div class="col-6">
                            <p>Situviera el js</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Aqui va mas info</p>
                        </div>
                        <div class="col-6">
                            <p>Otra info</p>
                        </div>
                    </div>
                </div>

                <button onclick="myFunc('Reque')" class="w3-btn w3-block w3-green">
                Requerimientos</button>
                <div id="Reque" class="w3-container w3-hide">
                    <div class="row">
                        <div class="col-6">
                            <p>Aqui 2</p>
                        </div>
                        <div class="col-6">
                            <p>Por alla2</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Aqui va mas info</p>
                        </div>
                        <div class="col-6">
                            <p>Otra info</p>
                        </div>
                    </div>
                </div>

                <button onclick="myFunc('Disp')" class="w3-btn w3-block w3-blue">
                Disponibilidad</button>
                <div id="Disp" class="w3-container w3-hide">
                    <div class="row">
                        <div class="col-6">
                            <p>Aqui 3</p>
                        </div>
                        <div class="col-6">
                            <p>Por alla3</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Aqui va mas info</p>
                        </div>
                        <div class="col-6">
                            <p>Otra info</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
