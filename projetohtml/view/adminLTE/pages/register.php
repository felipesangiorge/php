<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../view/adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../view/adminlte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../view/adminlte/plugins/iCheck/square/blue.css">

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
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Cadastrar Novo Usuário</p>

    <form id="sendFormRegister" method="post">
    <div class="form-group has-feedback" id="form_email">
        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback" id="form_login">
        <input type="text" class="form-control" placeholder="Login" name="login"  id="login">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback" id="form_password">
        <input type="password" class="form-control" placeholder="Password" name="password"  id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback" id="form_tel">
        <input type="tel" class="form-control" placeholder="(00)0000-0000" min="0" max="11" name="tel"  id="tel">
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback" >
        <input type="checkbox" class="form-control" placeholder="Password" name="inadmin"  id="inadmin"> Administrador
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    
 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../view/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../view/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../view/adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

  $("#email").on("focusout",function() {

 if( !$(this).val()) {

         $('#form_email').addClass("has-warning");
         $('#email').attr("placeholder", "Campo vazio coloque um e-mail !");

    }else {
          $('#form_email').removeClass("has-warning");
          $('#form_email').addClass("has-success");
    }

});

   $("#login").on("focusout",function() {

 if( !$(this).val()) {

         $('#form_login').addClass("has-warning");
         $('#login').attr("placeholder", "Campo vazio coloque um Login !");

    }else {
          $('#form_login').removeClass("has-warning");
          $('#form_login').addClass("has-success");
    }

});

   $("#password").on("focusout",function() {

 if( !$(this).val() || $(this).val().length < 5) {

         $('#form_password').addClass("has-warning");
         $('#password').attr("placeholder", "minimo 5 caracteres");

    }else {
          $('#form_password').removeClass("has-warning");
          $('#form_password').addClass("has-success");
    }

});

      $("#tel").on("focusout",function() {

 if( !$(this).val()) {

         $('#form_tel').addClass("has-warning");
        

    }else {
          $('#form_tel').removeClass("has-warning");
          $('#form_tel').addClass("has-success");
    }

});

  jQuery(document).ready(function(){
    jQuery('#sendFormRegister').submit(function(){
      var dados = jQuery( this ).serialize();

                jQuery.ajax({
                  type: "POST",
                  url: "http://localhost/projetohtml/admin/register-user",
                  data: dados,
                  success: function( data ) {
                    console.log("dados enviados/ resposta:");
                    console.log(data);
                   
                   if(data == "error"){

                     
                        alert("Já existe um Usuário cadastrado com esses dados");
                       

                      }else{

                        alert("Usuário cadastrado com sucesso!");
                        window.location.reload();
                      }


                  },
                  error: function (result) {
          
                    console.log(result);
                    } 



      });

      
      return false;
    });
  });



   

</script>
</body>
</html>
