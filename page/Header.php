<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>Tổng:</span></div>
        </div>
        <div class="humberger__menu__widget">
        <div class="header__top__right__social">

                            </div>
            <div class="header__top__right__auth">
            <?php                                 
              if(isset($_SESSION["login-facebook"]))
              {
              $sql2 = "SELECT * FROM  khachhang where facebook_id =". $_SESSION["login-facebook"];
              $result = mysqli_query($link, $sql2);
              $count=mysqli_num_rows($result);
              while ($row=mysqli_fetch_array($result)) 
              {
                  echo 'Xin chào: <a href="index.php?action=profile&query=profile">'.$row["Ten_KH"].'</a>';
              }
             }
              if(isset($_SESSION["login-google"]))
              {
                  $sql2 = "SELECT * FROM  khachhang where google_id =". $_SESSION["login-google"];
                  $result = mysqli_query($link, $sql2);
                  $count=mysqli_num_rows($result);
                  while ($row=mysqli_fetch_array($result)) 
                  {
                      echo 'Xin chào: <a href="index.php?action=profile&query=profile">'.$row["Ten_KH"].'</a>';
                  }

              }
           
         if(isset($_SESSION["login-google"])||isset($_SESSION["login-facebook"]))
                             {
                                echo ' <a href="index.php?action=dangxuat&query=dangxuat">Đăng xuất</a>';

                             }
                             else    
                             {
                                echo ' <a class="collapse-item" href="login-main.php">Đăng nhập</a>';
                            }
                            
                            ?>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
          
        </div>
        <div class="humberger__menu__contact">
            <ul>
          
                <div id="gt-mordadam-43217984"></div>

            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                            <?php 
                                
                                if(isset($_SESSION["login-facebook"]))
                                {
                                $sql2 = "SELECT * FROM  khachhang where facebook_id =". $_SESSION["login-facebook"];
                                $result = mysqli_query($link, $sql2);
                                $count=mysqli_num_rows($result);
                                while ($row=mysqli_fetch_array($result)) 
                                {
                                    echo 'Xin chào: <a href="index.php?action=profile&query=profile">'.$row["Ten_KH"].'</a>';
                                }
                               }
                                if(isset($_SESSION["login-google"]))
                                {
                                    $sql2 = "SELECT * FROM  khachhang where google_id =". $_SESSION["login-google"];
                                    $result = mysqli_query($link, $sql2);
                                    $count=mysqli_num_rows($result);
                                    while ($row=mysqli_fetch_array($result)) 
                                    {
                                        echo 'Xin chào: <a href="index.php?action=profile&query=profile">'.$row["Ten_KH"].'</a>';
                                    }

                                }
                             
                        ?>
                
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__social">
                            <div id="gt-mordadam-43217984"></div>

                            </div>
                            <div class="header__top__right__auth">
                                
                            <?php 
                             if(isset($_SESSION["login-google"])||isset($_SESSION["login-facebook"]))
                             {
                                echo ' <a href="index.php?action=dangxuat&query=dangxuat">Đăng xuất</a>';

                             }
                             else    
                             {
                                echo ' <a class="collapse-item" href="login-main.php">Đăng nhập</a>';
                            }
                            
                            ?>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->



