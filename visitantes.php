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
                <div class="col-12">
                    <a href="cadastro-visitante.php">
                        <button class="btn btn-secondary mb-3">
                            Adicionar novo visitante
                        </button>
                    </a>
                </div>
            </div>
           
            <table class="table">
              <thead>
                  <tr>
                        <th>Id</th>
                      <th>Nome</th>
                      <th>RG</th>
                      <th>Visitou</th>                      
                      <th>Editar</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>001</td>
                      <td>Joaquim Barbosa</td>
                      <td>44.444.444-4</td>
                      <td>33</td>
                      <td>
                        <a href="cadastro-visitante.php">
                            <button class="btn"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>001</td>
                      <td>Joaquim Barbosa</td>
                      <td>44.444.444-4</td>
                      <td>33</td>
                      <td>
                        <a href="cadastro-visitante.php">
                            <button class="btn"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>001</td>
                      <td>Joaquim Barbosa</td>
                      <td>44.444.444-4</td>
                      <td>33</td>
                      <td>
                        <a href="cadastro-visitante.php">
                            <button class="btn"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>001</td>
                      <td>Joaquim Barbosa</td>
                      <td>44.444.444-4</td>
                      <td>33</td>
                      <td>
                        <a href="cadastro-visitante.php">
                            <button class="btn"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                  </tr>
              </tbody>
            </table>
        </div>
    </main>

<?php include('footer.php'); ?>