<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
  <div class="side-menu">
    <div class="brand-name">
        <h1>ADMIN</h1>
        
        <?php
        session_start();
        include('conn.php');
        echo"  <h2>welcome  ". $_SESSION['admin_name'] ."</h2>";
        ?>

    </div>
        <ul>
           <h2><li><a href="admin_dashboard.php" style="color:white;">DASHBOARD</a></li></h2>
          <h2><a href="students-page.php" style="color:white;"><LI>STUDENT</a></LI></h2>
          <h2><a href="teachers-page.php" style="color:white;"><LI>TEACHAR</a></LI></h2>
          <h2><a href="admins-page.php" style="color:white;"><LI>ADMIN</a></LI></h2>
          <h2><a href="admin_dashboard.php" style="color:white;"><LI>CHANGE PASSWORD</a></LI></h2>
          <h2><a href="admin_dashboard.php" style="color:white;"><LI>HELP</a></LI></h2>
        </ul>
    </div>
    <!-- navbar -->
  <div class="container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <input type="text" placeholder="search..">
                <button type="submit">search</button>
            </div>
            <div class="user">
                <a href="#" class="btn">ADD NEW</a>
                    <div class="img-case">
                        <img src="asset 5.png" alt="">
                    </div>
               
            </div>
        </div>
    </div>


    <!-- content part -->
    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h1>2193</h1>
                    <h3>STUDENTS</h3>
                </div>
                <div class="icon-case">
                    <img src="asset 6.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>1</h1>
                    <h3>ACCOUNT-MANAGER</h3>
                </div>
                <div class="icon-case">
                    <img src="asset 6.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>5</h1>
                    <h3>ADMIN</h3>
                </div>
                <div class="icon-case">
                    <img src="asset 6.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>30</h1>
                    <h3>TEACHERS</h3>
                </div>
                <div class="icon-case">
                    <img src="asset 6.png" alt="">
                </div>
            </div>
        </div>


          <!-- CONTENT -2 -->
    <div class="content-2">
                <div class="value-data-payment">
                    <div class="title">
                        <h1 style="color:black;">Recent Payment</h1>
                    
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name </th>
                            <th>College</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>ANKITA</td>
                            <td>TIB</td>
                            <td>45000</td>
                            <td><a href="#" class="btn" style="padding:3px">View All</a></td>
                        </tr>
                        <tr>
                            <td>PRIYA</td>
                            <td>SVUB</td>
                            <td>8000</td>
                            <td><a href="#" class="btn" style="padding:3px">View All</a></td>

                        </tr>
                    </table>
                </div>
                
                
                <div class="new-value-data">
                <div class="title">
                        <h1 style="color:black;">New Students</h1>
                    
                        <a href="#" class="btn">View All</a>
                    </div>
                </div>
     </div>
     
    </div>

  



  </div>


</body>
</html>