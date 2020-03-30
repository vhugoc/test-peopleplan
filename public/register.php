<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- start linking  -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <!-- icon -->
    <link rel="icon" href="img/log.png">
    <!-- end linking -->
    <title>PeoplePlan - Registro de Usuário</title>
  </head>
  <body style="background-color: #222;">
    <div class="content">
      <div class="wrap">
        <section class="app-content">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <div id="forms">
                <div class="wrap card">
                  <h3 class = "text-center">Criar uma Conta</h3>
                  <hr/>
                  <form id = "register_form" name="register" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Seu nome</label>
                      <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                    <div class="form-group">
                      <label for="login">Login</label>
                      <input type="text" class="form-control" id="login" name="login">
                    </div>
                    <div class="form-group">
                      <label for="password">Senha</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Pronto</button>
                  </form>
                  <br/>
                  <a href="login.php"><small class="text-info">Já possui uma conta? Inicie uma sessão</small></a>
                  <br/>
                  <div class="alert alert-danger text-center font-weight-bold mt-3 debug" style="display:none;"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </section>
      </div>
    </div>
  </body>
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script src="./js/storage.js"></script>
  <script src="./js/register.js"></script>
</html>
