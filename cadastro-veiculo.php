<?php include('header.php'); ?>

    <main class="main-frame sidebar-active">
        <div class="container">
            <h3>Cadastro de veículo</h3>
            <form action="">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-sm-6 form-group">
                                <label>Marca</label>
                                <input type="text" name="marca" class="form-control" required="required">
                            </div>
                            <div class="col-12 col-sm-6 form-group">
                                <label>Modelo</label>
                                <input type="text" name="modelo" class="form-control" required="required">
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4 form-group">
                                <label>Ano</label>
                                <input type="text" name="ano" class="form-control tel" required="required">
                            </div>
                            <div class="col-12 col-sm-4 form-group">
                                <label>Placa</label>
                                <input type="text" name="placa" class="form-control" required="required">
                            </div>
                            <div class="col-12 col-sm-4 form-group">
                                <label>Cor</label>
                                <input type="text" name="cor" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4 form-group">
                                <label>Id do Dono</label>
                                <input type="text" name="dono" class="form-control" required="required">                                
                            </div>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Cadastrar <i class="fa fa-plus-square"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php include('footer.php'); ?>
