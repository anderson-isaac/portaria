<?php include('header.php'); ?>

    <main class="main-frame sidebar-active">
        <div class="container">
            <h3>Cadastro de morador</h3>
            <form action="">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label>Nome completo</label>
                            <input type="text" name="nome" class="form-control" required="required">
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 form-group">
                                <label>RG</label>
                                <input type="text" name="rg" class="form-control" required="required">
                            </div>
                            <div class="col-12 col-sm-6 form-group">
                                <label>CPF</label>
                                <input type="text" name="cpf" class="form-control" required="required">
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 form-group">
                                <label>Telefone</label>
                                <input type="text" name="telefone" class="form-control tel" required="required">
                            </div>
                            <div class="col-12 col-sm-6 form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" required="required">
                            </div>                        
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <small>(JPG ou PNG)</small><br>
                            <?php /* 
                            <label for="foto" class="hidden">
                                <img src="images/noimg.png" alt="" class="img-holder">
                            </label><br> */ ?>
                            <input type="file" id="foto" name="foto" class="file-input" required="required">
                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                <label>Unidade</label>
                                <input type="text" name="unidade" class="form-control" required="required">
                            </div>     
                            <div class="col-4 form-group">
                                <label>Interfone</label>
                                <input type="text" name="interfone" class="form-control" required="required">
                            </div>
                            <div class="col-4 form-group">
                                <label>Garagem</label>
                                <input type="text" name="garagem" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea name="observacoes" rows="4" class="form-control" required="required"></textarea>
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
