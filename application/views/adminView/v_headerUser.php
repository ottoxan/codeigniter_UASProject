<?php if($this->session->flashdata('status')) : ?>
<div class="alert alert-success">
    <?= $this->session->flashdata('status'); ?>
</div>
<?php endif; ?>

<?php $uname = $this->session->userdata('auth_user')['username']; ?>
<?php $email = $this->session->userdata('auth_user')['email']; ?>

<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="">Academia</a> </p>
        </div>
        <div class="right-links">
            <a href="<?php echo base_url('logout') ?>"> <button class="btn btn-primary">Log Out</button> </a>
        </div>
    </div>

    <main>
       <div class="main-box top">
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('error')['error']; ?>
                </div>
            <?php } ?>
          <div class="top">
            <div class="box">
                <p><?php $this->welcome->welcome_name("$uname"); ?></p>
            </div>
            <div class="box">
                <p><?php $this->welcome->myEmail("$email"); ?></p>
            </div>
          </div>