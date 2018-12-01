<?php include('header.php'); ?>
    <main class="main-frame sidebar-active">
      <div class="container">
        <a href="index.php">
            <button class="btn btn-sm btn-primary">
              <i class="fa fa-arrow-left"></i> Voltar à tela principal
            </button>
          <hr>
        </a>
        <div class="row">
              <div class="col-12 col-sm-6 col-md-4">
                <form action="">
                  <div class="form-group">
                    <label>Id de usuário</label>
                    <input type="text" name="id" class="form-control" required><br>
                  </div>
                  <div class="form-group">
                    <label>Placa do veículo</label>
                    <input type="text" name="placa" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-secondary mb-3">
                      Registrar Entrada
                    </button>             
                    </div>     
                </form>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <form action="">
                  <div class="form-group">
                    <label>Id de usuário</label>
                    <input type="text" name="id" class="form-control" required><br>
                  </div>
                  <div class="form-group">
                    <label>Placa do veículo</label>
                    <input type="text" name="placa" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-3">
                      Registrar Saída
                    </button>             
                    </div>     
                </form>
              </div>
          </div>
        <div class="ocurrences">
          <span>Registros do dia 20/11/2018 ocorridos na última hora.</span>
        </div>
        <table class="table table-light">
          <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Veículo</th>
            <th>Ação</th>
            <th>Tipo</th>
            <th>Apto </th>
            <th>Data/hora</th>
          </thead>
          <tbody>
            <tr>
              <td>0145</td>
              <td>Anderson Isaac</td>
              <td>Fox prata : CGX-5437</td>
              <td>Entrada</td>
              <td>Morador</td>
              <td>221</td>
              <td>23/10/2018 - 20:22</td>
            </tr>
            <tr>
              <td>0145</td>
              <td>Anderson Isaac</td>
              <td>Fox prata : CGX-5437</td>
              <td>Saída</td>
              <td>Morador</td>
              <td>221</td>
              <td>23/10/2018 - 20:22</td>
            </tr>
            <tr>
              <td>0145</td>
              <td>Anderson Isaac</td>
              <td>Fox prata : CGX-5437</td>
              <td>Saída</td>
              <td>Morador</td>
              <td>221</td>
              <td>23/10/2018 - 20:22</td>
            </tr>
            <tr>
              <td>0145</td>
              <td>Anderson Isaac</td>
              <td>Fox prata : CGX-5437</td>
              <td>Saída</td>
              <td>Morador</td>
              <td>221</td>
              <td>23/10/2018 - 20:22</td>
            </tr>
            <tr>
              <td>0145</td>
              <td>Anderson Isaac</td>
              <td>Fox prata : CGX-5437</td>
              <td>Saída</td>
              <td>Morador</td>
              <td>221</td>
              <td>23/10/2018 - 20:22</td>
            </tr>
          </tbody>
        </table>
        <a href="registros.php">
          <i class="fa fa-search"></i> Ver todos os registros
        </a>
      </div>
    </main>

<?php include('footer.php') ?>