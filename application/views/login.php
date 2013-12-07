<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitku - Admin</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_login.css" />

<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Masuk Ke Halaman Administrator</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <?php echo form_open('admin'); ?>
                <input type="text" class="form-control col-md-4" name="username" value="<?=set_value('email')?>" placeholder="Masukan Username"/><br/>
                <input type="password" class="form-control" name="password" value="<?=set_value('password')?>" placeholder="Masukan Password"/>
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit_login"/>
                <?php echo form_close(); ?>
            </div>
          </div>
    </div>
</div>
</body>
</html>