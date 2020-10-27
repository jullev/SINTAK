<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url()."assets/" ?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link
      href="<?php echo base_url()."assets/" ?>vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?php echo base_url()."assets/" ?>css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>/animate/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--webfonts-->
    <title>SIMTAK - LOGIN</title>
    <style rel="stylesheet" type="text/css">
    .loader {
  width: 10em;
  height: 10em;
  font-size: 25px;
  box-sizing: border-box;
  border-top: 0.3em solid hotpink;
  border-radius: 50%;
  position: relative;
  animation: rotating 2s ease-in-out infinite;
  --direction: 1;
}

.loader::before,
.loader::after {
  content: '';
  position: absolute;
  width: inherit;
  height: inherit;
  border-radius: 50%;
  box-sizing: border-box;
  top: -0.2em;
}

.loader::before {
  border-top: 0.3em solid dodgerblue;
  transform: rotate(120deg);
}

.loader::after {
  border-top: 0.3em solid gold;
  transform: rotate(240deg);
}

.loader span {
  position: absolute;
  color: #42a5f5;
  width: inherit;
  height: inherit;
  text-align: center;
  line-height: 10em;
  font-family: sans-serif;
  animation: rotating 2s linear infinite;
  --direction: -1;
}

@keyframes rotating {
  50% {
      transform: rotate(calc(180deg * var(--direction)));
  }

  100% {
      transform: rotate(calc(360deg * var(--direction)));
  }
}

    </style>
</head>
<body class="bg-light">
    <div class="container container-login">
        <div class="row justify-content-center">
          <div class="col-md-3" id="loading" style="    display: flex;
    align-items: center;
    justify-content: center;
    top: 120px;
    position: fixed;
    ">
            <div class="loader">
            <span style="text">Loading...</span>
            </div>
          </div>
            <div class="col-md-12" id="body_form" style="overflow:auto">
                <div class="box-login">
                    <div class="top">
                        <p>LOGIN SIMTAK</p>
                    </div>
                    <div class="body">
                      <div class="tmp_alert">

                      </div>
                        <form id="FormLogin" class="">
                            <label for="">Username</label>
                            <div class="form-underline username">
                                <input type="text" placeholder="Masukkan Username" id="username" required>
                                <span class="fa fa-user"></span>
                            </div>
                            <br>
                            <label for="">Password</label>
                            <div class="form-underline password">
                                <input type="password" placeholder="Masukkan Password" id="password" required>
                                <span class="fa fa-lock"></span>
                            </div>
                            <br>
                            <button type="sumit" class="btn btn-primary px-5 font-weight-bold ls-1">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright mt-4">
        Copyright 2020 - SIMTAK
    </div>
</body>
</html>
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-ui.min.js"></script>

<script type="text/javascript">
function coba() {
  $('#FormLogin').addClass('animated bounceOutLeft');
}
$(document).ready(function(e){
  $("#FormLogin").on('submit', function(e){
    e.preventDefault();
    var usernameid = $('#username').val();
    var passwordid = $('#password').val();
    // alert(usernameid);
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url();?>index.php/Login/aksi_login',
      data: { username: usernameid, password: passwordid },
      beforeSend: function () {
          $('#body_form').addClass('animated bounceOut');
          $('#loading').addClass('animated bounceIn');
         },
      error: function(err) {
           alert(err);
      },
      success: function(response) {
        if (response == "u") {
          $('#body_form').removeClass('animated bounceOut');
          $('#body_form').addClass('animated bounceIn');
          $('.username').addClass('animated bounce delay-1s');
          var html = '<div class="alert alert-danger"><b> <span class="fa fa-info-circle"></span> &nbsp; Username Tidak Ditemukan</b></div>';
          $(".tmp_alert").html(html);
        } else if (response == "p") {
          $('#body_form').removeClass('animated bounceOut');
          $('#body_form').addClass('animated bounceIn');
          $('.password').addClass('animated bounce delay-1s');
          var html = '<div class="alert alert-danger"><b> <span class="fa fa-info-circle"></span> &nbsp; Password Anda Salah</b></div>';
          $(".tmp_alert").html(html);
        } else if (response == "up") {
          $('#body_form').removeClass('animated bounceOut');
          $('#body_form').addClass('animated bounceIn');
          $('.password').addClass('animated bounce delay-1s');
          $('.username').addClass('animated bounce delay-1s');

          var html = '<div class="alert alert-danger"><b> <span class="fa fa-info-circle"></span> &nbsp; Username atau Password Anda Salah</b></div>';
          $(".tmp_alert").html(html);
        } else {
          window.location = response;
        }
        // alert(response);

      }
    });
  });
});

</script>
