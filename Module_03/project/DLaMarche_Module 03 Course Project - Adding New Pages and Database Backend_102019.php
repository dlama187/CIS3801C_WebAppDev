<!DOCTYPE html>
<html>

  <head>
    <style>
      body {
        font-size: 28px;
      }

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover {
        background-color: #111;
      }

      .active {
        background-color: #4CAF50;
      }
      * {
        box-sizing: border-box;
      }

      .column {
        float: left;
        width: 33.33%;
        padding: 5px;
      }
      .row::after {
        content: "";
        clear: both;
        display: table;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h1><img src='capra1.jpg' style='top:0; left:0;' width='150' height='' alt='logo' /> Capra Cinemas</h1>
    </div>
    <ul>
      <li><a class="active" href="http://fundamentalsclassvm.centralus.cloudapp.azure.com/mod3/DLaMarche_Module_03_Course_Project.html">Home</a></li>
      <li><a href="http://fundamentalsclassvm.centralus.cloudapp.azure.com/mod3/CapraShowtime.html">Showtimes</a></li>
      <li><a href="http://fundamentalsclassvm.centralus.cloudapp.azure.com/mod3/CapraOrderTickets.html">Order Tickets</a></li>
      <li><a href="http://fundamentalsclassvm.centralus.cloudapp.azure.com/mod3/CapraConcessions.html">Concessions</a></li>
      <li><a href="http://fundamentalsclassvm.centralus.cloudapp.azure.com/mod3/CapraEvents.html">Events</a></li>
      <li><a href="http://fundamentalsclassvm.centralus.cloudapp.azure.com/mod3/CapraContact.html">Contact Us</a></li>
    </ul>
    <h2>The Magic Starts here</h2>
    <div class="row">
      <div class="column">
        <img src="casablanca.JPG" alt="Casablanca" style="width:'100" height='400'>
      </div>
      <div class="column">
        <img src="forbiddenplanet.JPG" alt="Forest" style="width:'100" height='400'>
      </div>
      <div class="column">
        <img src="kingkong.JPG" alt="Mountains" style="width:'100" height='400'>
      </div>
    </div>
    <p>
      Welcome to Capra Cinemas. Our guarantee to you is a cinematic experience like no other. Lose yourself in worlds beyond your own. Also we have popcorn.
    </p>
    <?php include 'test.php'; ?>
  </body>
</html>
