<?php
include "dbconnection.php";
$con = new dbConnection();

if (isset($_POST["comment"])) {
    if ($con->addComment(htmlspecialchars($_POST["comment"]),  date("Y/m/d") ) == 1) {
    } else {
        echo "Error!!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>References Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="refernces.php">
                    <img src="images/logo/references-mobile.png" class="logos" alt=" Refernces logo">
                </a>
            </div>
            <!--banner-->
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
                <tr>


                <form method="POST" target="refernces.php" name="addcomment" id ="addcomment">
                <tr class="insidetable1"><b>Add Comment :</b></tr>
<br>
<br>
                <textarea  type="text" id="comment" name="comment" for="addcomment"  form="addcomment" rows="4" cols="50"></textarea>

                <td> <input type="submit" name="signin" id="signin"  value="add"/></td>
                </form>

              </tr>

                </main>



                <main>
                    <table class="tableforimg">


                        <?php
                        $comments = $con->loadComments();
                        $i = 0;
                        for ($i=0;$i<sizeof($comments);$i+=2) {
                        ?>
                        <tr>
                            <td class="insidetable1"><b><?php echo $comments[$i+1].": ".$comments[$i]?></b></td>
                        </tr>
                        <br>
                        <?php } ?>


                    </table>

                </main>



            </article>
            <aside class="sidebar">
                <!--sidebar-->
                <div>
                    <h3>Your opinion</h3>
                    <ul>
                        <li>
                            <h4>Matters!! </h4>
                        </li>

                    </ul>
                </div>
            </aside>
            <!--sidebar-->
            <div class="clearfix"></div>
        </section>

        <footer class="main-footer">
            <div>
                <address class="address1">
                    <br>
                    <h3>Company name</h3>
                    <p>#100,someplace, somewhere far, 54654</p>

                    <p>Em: <a href="mailto:eliranhadad1@gmail.com">Eliranhadad1@gmail.com</a> &nbsp;&nbsp;&nbsp;&nbsp; Ph: <a href="tel:1235642">121354351</a></p>
                </address>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!--footer-->

        <div class="copy">
            <p>
                <smaill>Copyright &copy; 2020 All Rights Reserved.</smaill>
            </p>
        </div>


    </div>
    <script src="js/references.js"></script>

</body>

</html>