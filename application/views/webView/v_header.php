<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <script
            src="https://kit.fontawesome.com/355ada5da0.js"
            crossorigin="anonymous"
        ></script>
    </head>
        <body>
        <div id="Home" class="firstSection">
            <header>
                <a href="">Academia</a>
                <div class="social">
                    <a class="fa-brands fa-instagram"></a>
                    <a class="fa-brands fa-x-twitter"></a>
                </div>
            </header>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>web" class="home">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>web/about" class="about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>web/team" class="team">Team</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>web/contact" class="contact">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>login" class="login">Login</a>
                    </li>
                </ul>
            </nav>