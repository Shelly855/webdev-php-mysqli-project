<?php
require_once('includes/config.php');
$queryFilms = "SELECT * FROM Films";
$resultFilms = $mysqli->query($queryFilms);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link
      rel="stylesheet"
      href="css/desktop.css"
      media="only screen and (min-width : 720px)"
    />
  </head>
  <body>
<?php
include("includes/header.php");
?>
    <div class="mainContainer">
		      <main>
              <div class="banner">
                <h2>Catalogue</h2>
              </div>
              <section class="twoColumn">
                <div>
                  <!-- Film Listing Here -->
                  <div class="listing">
                            <table>
                              <tr>
                                  <th>Film</th>
                                  <th>Certificate</th>
                                  <th>Price</th>
                              </tr>
                                <?php
                                  while ($obj = $resultFilms -> fetch_object()){
                                    echo "<tr>";
                                    echo "<td>{$obj->filmTitle}</td>";
                                    echo "<td>{$obj->filmCertificate}</td>";
                                    echo "<td>&pound; {$obj->filmPrice}</td>";
                                    echo "</tr>";
                                }
                              ?>
                            </table>
                  </div>
                </div>
		            <div class="sideBar">
                <h3>Featured Film</h3>
                <div> <img src="images/babadook.jpg" alt="Babadook"/> </div>
                <p>Info Here</p>
                </div>
              </section>
        </main>
    </div>
<?php
// add Footer
?>
    <script src="js/main.js"></script>
  </body>
</html>
