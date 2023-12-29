<html>
    <head>
        <title>Navigation Bar with different icons</title>
        <!-- change or page title with the help of the title tags-->
        <link rel="stylesheet" type="text/css" href="nav.css">
        <!-- connect css file with html
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                margin:0;
                padding:0;
                font-family: sans-serif;
                background: aqua;
            }
            ul{
                position:absolute;
                top: 8%;
                left: 50%;
                transform: translate(-50%,-50%) ;
                margin: 0%;
                padding:  20px 0;
                background: #fff;
                display: flex;
                border-radius: 0 10px 30px rgba(red, green, blue, alpha);
            }
            ul li{
                list-style: none;
                text-align: center;
                display: block;
                border-right: 1px solid rgba(red, green, blue, alpha);
            }
            ul li:last-child{
                border-right: none;
            }
            ul li a{
                text-decoration: none;
                padding: 0 50px;
                display: block;
            }
            ul li a .icon{
                width: 40px;
                height: 40px;
                text-align: center;
                overflow: hidden;
                margin:0 auto 10px;
            }
            ul li a .icon .fa{
                width: 100%;
                height:100%;
                line-height: 40px;
                font-size: 34px;
                transition: 0.5s;
                color: #000;
            }
            </style>
        </head>
    <body>
        <ul>
            <li>
                <a href="Add.php">
                    <div class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="add">add Information</span></div>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <div class="icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="home">Index</span></div>
                </a>
            </li>
            <li>
                <a href="About.php">
                    <div class="icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="about">About us</span></div>
                </a>
            </li>
            <li>
                <a href="Contact.php">
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="Contact">call us</span></div>
                </a>
            </li>
            <li>
                <a href="display.php">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="display">Our display</span></div>
                </a>
            </li>
        </ul>
    </body>
</html>