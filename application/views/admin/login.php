<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin PIKM</title>
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>

 <?= $this->session->flashdata('message')?> 

    <div class="kotak_login">
        <p class="tulisan_login">LOGIN ADMIN</p>

        <form action="<?php echo base_url()?>auth" method="POST">
            <label>Username</label>
            <input type="text" id="username" name="username" class="form_login" placeholder="Username" required="required">

            <label>Password</label>
            <input type="password" id="password" name="password" class="form_login" placeholder="Password" required="required">

            <input type="submit" class="tombol_login" value="LOGIN">
            <br><br>
            <input type="reset" class="tombol_reset" value="RESET">

            <br/>
            <br/>
            <!-- <center>
                <a class="link" href="index.php">Kembali</a></a>
            </center> -->


        </form>
    </div>
</body>
</html>