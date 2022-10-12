<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro 2</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css2.css">
</head>

<body>
    <div class="container">
        <form>
            <!-- contenedor de informacion -->
            <div class="row py-3 px-5">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="nsinv" class="form-label">NS Inventario: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nsinv" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label for="nsuv" class="form-label">NS UV: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nsuv" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="tipo">Tipo: </label>
                    </div>
                    <div class="col-sm-8">
                        <select id="tipo" class="form-select">
                            <option value="ei">Equipo Informatico</option>
                            <option value="soft">Software</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="dispo">Dispositivo: </label>
                    </div>
                    <div class="col-sm-8">
                        <select id="dispo" class="form-select">
                            <option value="com">Computadora</option>
                            <option value="mon">Monitor</option>
                            <option value="imp">Impresora</option>
                            <option value="pro">Proyector</option>
                            <option value="swt">Switch</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- contenedor descripcion -->
            <div class="row py-3 px-5">
                <h1>Descripcion</h1>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <label for="marca" class="form-label">Marca: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="marca" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label for="modelo" class="form-label">Modelo: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="modelo" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <label for="USB">USB: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" id="USB" min="0" max="10" class="form-control">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="teclado" class="form-check-input">
                        <label for="teclado">Teclado</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="mouse" class="form-check-input">
                        <label for="mouse">Mouse</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="ethernet" class="form-check-input">
                        <label for="ethernet">Ethernet</label>
                    </div>
                </div>
                <div class="col-sm-4 py-3">
                    <div class="form-check">
                        <input type="checkbox" id="monitor" class="form-check-input">
                        <label for="monitor">Monitor</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="microfono" class="form-check-input">
                        <label for="microfono">Microfono</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="hdmi" class="form-check-input">
                        <label for="hdmi">HDMI</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="vga" class="form-check-input">
                        <label for="vga">VGA</label>
                    </div>
                </div>
            </div>
            <!-- contenedor caracteristicas -->
            <div class="row py-3 px-5">
                <h1>Caracteristicas</h1>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="ram" class="form-label">RAM: </label>
                    </div>
                    <div class="col-sm-6">
                        <select id="ram" class="form-control">
                            <option value="4gb">4 GB</option>
                            <option value="8gb">8 GB</option>
                            <option value="16gb">16 GB</option>
                            <option value="32gb">32 GB</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="so" class="form-label">SO: </label>
                    </div>
                    <div class="col-sm-6">
                        <select id="so" class="form-control">
                            <option value="winserv">Windows Server</option>
                            <option value="win7">Windows 7</option>
                            <option value="win10">Windows 10</option>
                            <option value="win11">Windows 11</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="procesador" class="form-label">Procesador: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="procesador" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <h6>Almacenamiento</h6>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="hdd" class="form-check-input">
                        <label for="hdd">HDD</label>
                    </div>
                    <div class="col-sm-8">
                        <label for="caphdd" class="form-label">Capacidad: </label>
                        <select id="caphdd" class="form-control">
                            <option value="160gb">160 GB</option>
                            <option value="250gb">250 GB</option>
                            <option value="320gb">320 GB</option>
                            <option value="500gb">500 GB</option>
                            <option value="1tb">1 TB</option>
                            <option value="1.5tb">1,5 TB</option>
                            <option value="2tb">2 TB</option>
                            <option value="2.5tb">2,5 TB</option>
                            <option value="3tb">3 TB</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="sdd" class="form-check-input">
                        <label for="sdd">SDD</label>
                    </div>
                    <div class="col-sm-8">
                        <label for="capsdd" class="form-label">Capacidad: </label>
                        <select id="capsdd" class="form-control">
                            <option value="128gb">128 GB</option>
                            <option value="256gb">256 GB</option>
                            <option value="512gb">512 GB</option>
                            <option value="1tb">1 TB</option>
                            <option value="2tb">2 TB</option>
                            <option value="4tb">4 TB</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- contenedor software -->
            <div class="row py-3 px-5">
                <h1>Software</h1>
                <div class="col-sm-6">
                    <div class="table-responsice-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Software</th>
                                    <th scope="col"><button type="button" class="btn-close" disabled aria-label="Close"></button></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Office</td>
                                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Software 2</td>
                                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Software 3</td>
                                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="software" class="form-label">Software: </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="software" id="software" class="form-control">
                    </div>
                    <div class="col-sm-6 py-3">
                        <button type="button" class="btn btn-success me-md-2">Agregar</button>
                    </div>
                </div>
            </div>
            <!-- contenedor estado -->
            <div class="row py-3 px-5">
                <h1>Estado</h1>
                <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="estado" class="form-label">Estado del dispositivo: </label>
                        </div>
                        <div class="col-sm-6">
                            <select id="estado" class="form-control">
                                <option value="disp">Disponible</option>
                                <option value="mant">Mantenimiento</option>
                                <option value="prest">Prestada</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label for="ubicacion" class="form-label">Ubicacion: </label>
                        </div>
                        <div class="col-sm-6">
                            <select id="ubicacion" class="form-control">
                                <option value="cc1">CC1</option>
                                <option value="cc2">CC2</option>
                                <option value="labred">LAB REDES</option>
                                <option value="labtc">LAB TC</option>
                                <option value="labing">LAB ING</option>
                            </select>
                        </div>
                </div>
                <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="resp" class="form-label">Responsable: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" id="resp" class="form-control">
                        </div>
                </div>
            </div>
            <!-- botones finales -->
            <div class="row ">
                <div class="col-sm-6 py-2 px-5">
                    <button type="button" class="btn btn-danger btn-lg">Cancelar</button>
                </div>
                <div class="col-sm-6 py-2 px-5">
                    <button type="button" class="btn btn-success btn-lg">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>