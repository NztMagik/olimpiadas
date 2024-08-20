<?php include("../template/cabecera.php");?>
<?php include("../secciones/clientes.php");?>

        <div class="col-md-4">
            <form action="" method="post">

                <div class="card">
                    <div class="card-header">Busqueda clientes</div>
                    <div class="card-body">
                        
                        <div class="mb-3">
                            <label for="id_clientes" class="form-label">ID</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_clientes"
                                id="id_clientes"
                                aria-describedby="helpId"
                                placeholder="ID"
                            />
                        </div>
                
                        <div class="mb-3">
                            <label for="dni_clientes" class="form-label">DNI</label>
                            <input
                                type="text"
                                class="form-control"
                                name="dni_clientes"
                                id="dni_clientes"
                                aria-describedby="helpId"
                                placeholder="ej: 36671982"
                            />
                        </div>
                
                        <div class="mb-3">
                            <label for="nombre_clientes" class="form-label">Nombre</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nombre_clientes"
                                id="nombre_clientes"
                                aria-describedby="helpId"
                                placeholder="ej: Juan"
                            />
                        </div>
                
                        <div class="mb-3">
                            <label for="apellido_clientes" class="form-label">Apellido</label>
                            <input
                                type="text"
                                class="form-control"
                                name="apellido_clientes"
                                id="apellido_clientes"
                                aria-describedby="helpId"
                                placeholder="ej: Gomez"
                            />
                        </div>
        
                        <div class="d-grid gap-2">
                            <button
                                type="submit"
                                value="buscar"
                                name="buscar_cliente"
                                id="buscar_cliente"
                                class="btn btn-primary"
                            >
                                Buscar
                            </button>
                        </div>
                        
        
                    </div>
                </div>
            </form>

        


            
        </div>
        <div class="col-md-8">

            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaCliente as $cliente){?>
                        <tr>
                            <td><?php echo $cliente['id_cliente']; ?></td>
                            <td><?php echo $cliente['DNI']; ?></td>
                            <td><?php echo $cliente['Nombre']; ?></td>
                            <td><?php echo $cliente['Apellido']; ?></td>
                            <td><a href="">Facturas</a></td>
                            <td><a href="">Pendientes</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            

        </div>
        

<?php include("../template/pie.php");?>