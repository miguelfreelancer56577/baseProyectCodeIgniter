<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url("recursos/styles/bootstrap.min2.css")?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("recursos/styles/AdminLTE.min.css")?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("recursos/styles/blue.css")?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <h4>.: Programa de Información Delictiva [PID] <?=date("Y");?> &copy; &reg; :.<br>(PID)</h4>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Inicia tu sessión</p>
        <?php echo form_open("auth/login");?>
        <!--<form action="admin.php" method="post">-->
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" id="identity" name="identity">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
            <div class="row">
                <div class="col-xs-0 text-center">
                  <?php echo $message;?>
                </div><!-- /.col -->
            </div>
          <div class="row">
            <div class="col-xs-0">
              <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
            </div><!-- /.col -->
          </div>
        <!--</form>-->
        <?php echo form_close();?>
        <br>
        <center>
        <h6>Subdirección de Desarrollo de Sistemas<br>Extensiones: 4020 - 5158 - 6159</h6>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url("recursos/script/jQuery-2.1.4.min.js")?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url("recursos/script/bootstrap.min.js")?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("recursos/script/icheck.min.js")?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
