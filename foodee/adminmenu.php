<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="author" href="default.html">-->
    
    <link rel="stylesheet" href="admin.styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
<div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fab fa-alipay"></i>
                        <div class="title">Suki-Ya</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Profile</div>
                    </a>
                </li>
                <li>
                    <a href="listcustadmin.php">
                        <i class="fas fa-clipboard-list"></i>
                        <div class="title">List of Customer</div>
                    </a>
                </li>
                <li>
                    <a href="adminbooking.php">
                        <i class="fas fa-table"></i>
                        <div class="title">Bookings</div>
                    </a>
                </li>
                <li>
                    <a href="adminmenu.php">
                        <i class="fas fa-book-open"></i>
                        <div class="title">Menu</div>
                    </a>
                </li>
                <li>
                    <a href="adminfeedbck.php">

                        <i class="fab fa-wpforms"></i>
                        <div class="title">Feedback Form</div>
                    </a>
                </li>
                <li>
                    <a href="aboutadmin.php">

                        <i class="fas fa-hands"></i>
                        <div class="title">About Us</div>
                    </a>
                </li>
                <li>
                    <a href="contactadmin.php">

                        <i class="fas fa-address-book"></i>
                        <div class="title">Contact Us</div>
                    </a>
                </li>
                 <li>
                    <a href="index.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <div class="title">Sign Out</div>
                    </a>
                </li>
                <li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="search here">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="doctor1.png" alt="">
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">3</div>
                        <div class="card-name">New Bookings</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-table"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">13</div>
                        <div class="card-name">New Customer</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">8</div>
                        <div class="card-name">Operations</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-bed"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">$4500</div>
                        <div class="card-name">Earnings</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Menu</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Food</td>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Price</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="shabushabu.jpg" alt="">
                                    </div>
                                </td>
                                <td>Shabu-shabu</td>
                                <td>Soup</td>
                                <td>-</td>
                            </tr>
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="kimu.jpg" alt="">
                                    </div>
                                </td>
                                <td>Kimuchi</td>
                                <td>Soup</td>
                                <td>-</td>
                            </tr>
                          
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="suki.jpg" alt="">
                                    </div>
                                </td>
                                <td>Sukiyaki</td>
                                <td>Soup</td>
                                <td>-</td>
                            </tr>
                            
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="miso.jpg" alt="">
                                    </div>
                                </td>
                                <td>Miso</td>
                                <td>Soup</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
    </div>
            </div>
        
        <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Menu</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Food</td>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Price</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="vege.jpg" alt="">
                                    </div>
                                </td>
                                <td>Carrot</td>
                                <td>Vegetable</td>
                                <td>-</td>
                            </tr>
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="vege.jpg" alt="">
                                    </div>
                                </td>
                                <td>Mushroom</td>
                                <td>Vegetable</td>
                                <td>-</td>
                            </tr>
                          
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="vege.jpg" alt="">
                                    </div>
                                </td>
                                <td>Salad</td>
                                <td>Vegetable</td>
                                <td>-</td>
                            </tr>
                            
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="vege.jpg" alt="">
                                    </div>
                                </td>
                                <td>Onion</td>
                                <td>Vegetable</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
    </div>
            </div>
        
        <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Menu</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Food</td>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Price</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="beefs.png" alt="">
                                    </div>
                                </td>
                                <td>Beef</td>
                                <td>Meat</td>
                                <td>-</td>
                            </tr>
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="chic.jpg" alt="">
                                    </div>
                                </td>
                                <td>Chicken</td>
                                <td>Meat</td>
                                <td>-</td>
                            </tr>
                          
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="lamb.png" alt="">
                                    </div>
                                </td>
                                <td>Lamb</td>
                                <td>Meat</td>
                                <td>-</td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
    </div>
            </div>
            
              <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Menu</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Food</td>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Price</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="drinks.jpg" alt="">
                                    </div>
                                </td>
                                <td>Orange Juice</td>
                                <td>Drink</td>
                                <td>RM4.50</td>
                            </tr>
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="drinks.jpg" alt="">
                                    </div>
                                </td>
                                <td>Soft Drink</td>
                                <td>Drink</td>
                                <td>RM4.50</td>
                            </tr>
                          
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="drinks.jpg" alt="">
                                    </div>
                                </td>
                                <td>Iced Lemon Tea</td>
                                <td>Drink</td>
                                <td>RM9.90</td>
                            </tr>
                            
                             <tr>
                                <td>
                                    <div class="img-box-small">
                                    <img src="drinks.jpg" alt="">
                                    </div>
                                </td>
                                <td>Pink Guave</td>
                                <td>Drink</td>
                                <td>Rm4.50</td>
                            </tr>
                        </tbody>
                    </table>
    </div>
            </div>
        
        </div></div>
    
</body>

</html>