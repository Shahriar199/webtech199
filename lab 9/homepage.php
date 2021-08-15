<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="homepage.css">
    </head>
    <body>

      <ul>
         <li style="float:left"><a href="homepage.php"> ProjecTree</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#contact">Contact</a></li>
        <!-- <li><a href="#news">Registration</a></li> -->
        <div class="dropdown">
            <button class="dropbtn">Registration As
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="volunteer/view/Registration.php">Volunteer</a>
              <a href="../donor/view/Registration.php">Donor</a>
              <a href="organizer/view/Registration.php">Organizer</a>

            </div>
          </div>
        <div class="dropdown">
            <button class="dropbtn">Login As
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="admin/view/login.php">Admin</a>
              <a href="volunteer/view/login.php">Volunteer</a>
              <a href="../donor/view/login.php">Donor</a>
              <a href="organizer/view/login.php">Organizer</a>
            </div>
          </div>
        <li><a href="homepage.php">Home</a></li>
      </ul>


      <div class="content">
        <div class="welcome">
           Welcome to ProjecTree.
        </div>
      </div>

    </body>
  </html>
