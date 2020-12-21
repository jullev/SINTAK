<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo assetUrl() ?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link
      href="<?php echo assetUrl() ?>vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?php echo assetUrl() ?>css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo assetUrl() ?>/animate/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--webfonts-->
    <title>SIMTAK - Reset Password</title>
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
          <div class="col-md-3" id="loading" style="display: flex;
    align-items: center;
    justify-content: center;
    top: 120px;
    position: fixed;
    ">
            <div class="loader">
            <span>Loading...</span>
            </div>
          </div>
            <div class="col-md-6" id="body_form" style="overflow:auto">
                <div class="box-login">
                    <div class="top">
                        <p>RESET PASSWORD</p>
                    </div>
                    <div class="body">
                      <div class="tmp_alert">

                      </div>
                        <form id="FormResetPassword" class="">
                            <label for="">Email</label>
                            <div class="form-underline email">
                                <input type="email" placeholder="Masukan Email Anda" id="email" required>
                                <span class="fa fa-mail"></span>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary px-5 font-weight-bold ls-1">Submit</button>
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
<script src="<?php echo assetUrl(); ?>vendor/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo assetUrl(); ?>vendor/jquery/jquery-ui.min.js"></script>

<script type="text/javascript">
function coba() {
  $('#FormResetPassword').addClass('animated bounceOutLeft');
}
$(document).ready(function(e){
  $("#FormResetPassword").on('submit', function(e){
    e.preventDefault();
    var email = $('#email').val();
    // alert(email);
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url();?>Resetpassword/resetPassword',
      data: { email: email},
      beforeSend: function () {
          $('#body_form').addClass('animated bounceOut');
          $('#loading').addClass('animated bounceIn');
         },
      error: function(err) {
           alert(err);
      },
      success: function(response) {
        response = response.trim()
        if (response == "u") {
          $('#body_form').removeClass('animated bounceOut');
          $('#body_form').addClass('animated bounceIn');
          $('.email').addClass('animated bounce delay-1s');
          var html = '<div class="alert alert-danger"><b> <span class="fa fa-info-circle"></span> &nbsp; Email Tidak Ditemukan</b></div>';
          $(".tmp_alert").html(html);
        }
        else if (response == "success") {
          $('#body_form').removeClass('animated bounceOut');
          $('#body_form').addClass('animated bounceIn');
          $('.email').addClass('animated bounce delay-1s');

          var html = '<div class="alert alert-success"><b> <span class="fa fa-info-circle"></span> &nbsp; Silahkan cek email anda untuk mengetahui password anda. Jika pesan tidak terdapat di inbox, silahkan cek di spam.</b></div>';
          $(".tmp_alert").html(html);
          $('#email').val('');
        }
        // alert(response);

      }
    });
  });
});

</script>
