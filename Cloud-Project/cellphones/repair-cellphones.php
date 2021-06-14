<!DOCTYPE html>
<html lang="en">
<head>
    <title>Repair Cellphones Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="repair-cellphones.php">
                    <img src="images/logo/repair-mobile.jpg" class="logos" alt="Repair mobile logo">
                </a>
            </div><!--banner-->
            <div class="clearfix"></div>
            <nav class="main-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="buy-cellphones.php">Buy Cellphones</a></li>

                    <li><a href="sell-cellphones.php">Sell Cellphones</a></li>
                    <li><a href="repair-cellphones.php">Repair Cellphones</a></li>

                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="refernces.php">References</a></li>

                </ul>
            </nav>
        </header>


        <section class="content-holder">
            <!--content holder-->
            <article class="content">
                <!--content-->
                <main>
                    <table class="table1">

                        <tr>
                            <td class="insidetable1"><b>Brand :</b><input type="text" id="brand" /></td>
                            <td class="insidetable1"><b>Color :</b><input type="text" id="color" /></td>

                        </tr>
                        <tr>
                            <td class="insidetable1"><b>Size :</b><input type="text" id="size" /></td>
                            <td class="insidetable1"><b>Capacity :</b><input type="text" id="capacity" /></td>
                        </tr>
                        <tr>
                            <td class="insidetable1"><b>First Name :</b><input type="text" id="firstname" /></td>
                            <td class="insidetable1"><b>Last Name :</b><input type="text" id="lastname" /></td>
                        </tr>
                        <tr>
                            <td class="insidetable1"><b>Phone Number :</b><input type="text" id="phonenumber" /></td>
                            <td class="insidetable1"><button class="btn2 contact" onclick="repairFunction()"><b>Send</b></button></td>
                        </tr>
                    </table>

                </main>
            </article>
            <aside class="sidebar">
                <!--sidebar-->
                <div>
                    <h3>Questions??</h3>
                    <ul>
                        <li><h4>Call: </h4></li>
                        <li><h4>+97254-235-0001</h4></li>

                    </ul>
                </div>
            </aside><!--sidebar-->
            <div class="clearfix"></div>
        </section>

        <footer class="main-footer">
            <div>
                <address class="address1">
                    <br>
                    <h3>Company name</h3>
                    <p>#100,someplace, somewhere far, 54654</p>

                    <p>Em: <a href="mailto:eliranhadad1@gmail.com">Eliranhadad1@gmail.com</a>  &nbsp;&nbsp;&nbsp;&nbsp; Ph: <a href="tel:1235642">121354351</a></p>
                </address>
            </div>
            <div class="clearfix"></div>
        </footer><!--footer-->

        <div class="copy">
            <p><smaill>Copyright &copy; 2020 All Rights Reserved.</smaill></p>
        </div>


    </div>

    <script src="js/repair.js"></script>

</body>
</html>