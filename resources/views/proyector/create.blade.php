<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro proyector</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css2.css">
</head>

<body>
    <div class="container ">
        <form>
            <!-- contenedor de informacion -->
            <div class="row py-3 px-5">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="nsinv" class="form-label">No Inventario: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nsinv" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label for="nsuv" class="form-label">No UV: </label>
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
                        <input class="form-control" type="text" value="Equipo Informatico" id="tipo" disabled readonly>
                    </div>
                    <div class="col-sm-12">
                        <label for="dispo">Dispositivo: </label>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="Proyector" id="dispo" disabled readonly>
                    </div>
                </div>
            </div>
            <!-- contenedor descripcion -->
            <div class="row py-3 px-5">
                <h1>Descripcion</h1>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="marca_monitor" class="form-label">Marca: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="marca_monitor" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label for="modelo_monitor" class="form-label">Modelo: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="modelo_monitor" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6>Puertos: </h6>
                    <div class="row row-cols-2">
                        <div class="form-check">
                            <input type="checkbox" id="control" class="form-check-input">
                            <label for="control">Control remoto</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="hdmi" class="form-check-input">
                            <label for="hdmi">HDMI</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="vga" class="form-check-input">
                            <label for="vga">VGA</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="rs232" class="form-check-input">
                            <label for="rs232">RS232</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="audio" class="form-check-input">
                            <label for="audio">Audio</label>
                        </div>
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
                            <option value="prest">Prestado</option>
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