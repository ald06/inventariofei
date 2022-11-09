<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro software</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/registros.css') }}">
</head>

<body>
    <div class="container ">
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
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="marca" class="form-label">Nombre: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="marca" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label for="modelo" class="form-label">Version: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="modelo" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="descsoft">Descripcion: </label>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="descarea" id="descsoft" cols="5" rows="4" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <!-- contenedor requerimentos -->
            <div class="row py-3 px-5">
                <h1>Requerimentos</h1>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <label for="ram" class="form-label">RAM: </label>
                    </div>
                    <div class="col-sm-9">
                        <select id="ram" class="form-control">
                            <option value="2gb">2 GB</option>
                            <option value="4gb">4 GB</option>
                            <option value="8gb">8 GB</option>
                            <option value="16gb">16 GB</option>
                            <option value="32gb">32 GB</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="procesador" class="form-label">Almacenamiento: </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="procesador" class="form-control" placeholder="MB">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="table-responsice-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sistema operativo</th>
                                    <th scope="col"><button type="button" class="btn-close" disabled
                                            aria-label="Close"></button></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Windows Vista x32/x64</td>
                                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Windows 8 x32/x64</td>
                                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Windows 10 x32/x64</td>
                                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-12">
                        <label for="so" class="form-label">Sistema operativo: </label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="sisop" id="so" class="form-control">
                    </div>
                    <div class="col-sm-6 py-3">
                        <button type="button" class="btn btn-success me-md-2">Agregar</button>
                    </div>
                </div>
            </div>
            <!-- contenedor disponibilidad -->
            <div class="row py-3 px-5">
                <h1>Disponibilidad</h1>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="instalados">Equipos instalados: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" id="instalados" min="0" max="15" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label for="por_instalar">Equipos por instalar: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" id="por_instalar" min="0" max="15" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="key" class="form-label">Archivo/KEY: </label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control" type="file" id="key">
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