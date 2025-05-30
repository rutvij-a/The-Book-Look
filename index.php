<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> The Book Look </a>

        <!--<form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>-->

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="viewCart.php" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"><a href="login.php" class="btn" style=" padding: 5px 15px; color: white;">Login</a></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">client reviews</a>
            <a href="#blogs">book reviews</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>upto 40% off</h3>
            <p>LOVE WHAT YOU READ,<br>
                READ WHAT YOU LOVE!</p>
            <a href="#featured" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over Rs.100</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100 secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days returns</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                  <div class="content">
                      <h3>It Ends With Us</h3>
                      <div class="price">Rs.599 <span>Rs.799</span></div>
                      <input type="hidden" name="book" value="It Ends with us" />
                      <input type="hidden" name="price" value="599">
                      <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                      <!--<button a href="manage_cart.php?book=It+Ends+With+Us&price=599" class="btn" name="Add_To_Cart" >add to cart</a>-->
                  </div>
                </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>The Room on the Roof</h3>
                    <div class="price">Rs.249<span>Rs.499</span></div>
                    <input type="hidden" name="book" value="The Room on the Roof" />
                    <input type="hidden" name="price" value="249">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <!--<a href="#" class="fas fa-heart"></a>-->
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.png" alt="">
                </div>
                  <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Diary of a Wimpy Kid</h3>
                    <div class="price">Rs.299 <span>Rs.499</span></div>
                    <input type="hidden" name="book" value="Diary of a Wimpy Kid" />
                    <input type="hidden" name="price" value="299">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.png" alt="">
                </div>
                  <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>A Brief History of Time</h3>
                    <div class="price">Rs.699<span>Rs.899</span></div>
                    <input type="hidden" name="book" value="ABrief History of Time" />
                    <input type="hidden" name="price" value="699">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>The Famous Five</h3>
                    <div class="price">Rs.389 <span>Rs.599</span></div>
                    <input type="hidden" name="book" value="The Famous Five" />
                    <input type="hidden" name="price" value="389">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.png" alt="">
                </div>
                  <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Book Lovers</h3>
                    <div class="price">Rs.699 <span>Rs.899</span></div>
                    <input type="hidden" name="book" value="Book Lovers" />
                    <input type="hidden" name="price" value="699">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.png" alt="">
                </div>
                  <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Death On The Nile</h3>
                    <div class="price">Rs.299<span>Rs.399</span></div>
                    <input type="hidden" name="book" value="Death On The Nile" />
                    <input type="hidden" name="price" value="299">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-8.png" alt="">
                </div>
                  <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Harry Potter & the Half-Blood Prince</h3>
                    <div class="price">Rs.599 <span>Rs.649</span></div>
                    <input type="hidden" name="book" value="Harry Potter & the Half-Blood Prince" />
                    <input type="hidden" name="price" value="599">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <!-- <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Paper Towns</h3>
                    <div class="price">Rs.799 <span>Rs.999</span></div>
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.png" alt="">
                </div>
                  <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Looking for Alaska</h3>
                    <div class="price">Rs.269 <span>Rs.399</span></div>
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </div> -->

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>
    <h2 class="heading1"> <span>Fiction</span> </h2>


    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-11.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">

                    <h3>An Abundance of Katherines</h3>
                    <div class="price">Rs.479<span>Rs.699</span></div>
                    <!--<a href="#" class="btn">add to cart</a>-->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="An Abundance of Katherines" />
                    <input type="hidden" name="price" value="479">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-12.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>One Arranged Murder</h3>
                    <div class="price">Rs399 <span>Rs.549</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="One Arranged Murder" />
                    <input type="hidden" name="price" value="399">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-13.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>This Is Not Your Story</h3>
                    <div class="price">Rs599 <span>Rs.899</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="This Is Not Your Story" />
                    <input type="hidden" name="price" value="599">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-15.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Peril At End House</h3>
                    <div class="price">Rs.699 <span>Rs.999</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input type="hidden" name="book" value="Peril At End House" />
                    <input type="hidden" name="price" value="699">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-19.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>It Starts With Us</h3>
                    <div class="price">Rs.689 <span>Rs.899</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="It Starts With Us" />
                    <input type="hidden" name="price" value="699">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-20.jpg" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>The Murder Emblem</h3>
                    <div class="price">Rs.499 <span>Rs.549</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="The Murder Emblem" />
                    <input type="hidden" name="price" value="499">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-17.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>The American Roommate Experience</h3>
                    <div class="price">Rs.449 <span>Rs.699</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="The American Roommate Experience" />
                    <input type="hidden" name="price" value="449">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

        </div>

    </div>
    <h2 class="heading1"> <span>Non-Fiction</span> </h2>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-14.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>If You Ask Me</h3>
                    <div class="price">Rs.499 <span>Rs.649</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="If You Ask Me" />
                    <input type="hidden" name="price" value="499">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-16.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Ikigai</h3>
                    <div class="price">Rs.449 <span>Rs.699</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="Ikigai" />
                    <input type="hidden" name="price" value="449">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-23.jpg" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Playing It My Way</h3>
                    <div class="price">Rs.399 <span>Rs.599</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input type="hidden" name="book" value="Playing It My Way" />
                    <input type="hidden" name="price" value="399">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-18.png" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Becoming</h3>
                    <div class="price">Rs.689 <span>Rs.899</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="Becoming" />
                    <input type="hidden" name="price" value="689">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-21.jpg" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>Think Like A Monk</h3>
                    <div class="price">Rs.699 <span>Rs.849</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <input type="hidden" name="book" value="Think Like A Monk" />
                    <input type="hidden" name="price" value="699">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-22.jpg" alt="">
                </div>
                <form action="manage_cart.php" method="GET">
                <div class="content">
                    <h3>The Art Of Happpiness</h3>
                    <div class="price">Rs.499 <span>Rs.799</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input type="hidden" name="book" value="The Art Of Happpiness" />
                    <input type="hidden" name="price" value="499">
                    <input type="submit" name="Add_To_Cart" class="btn" value="Add to cart">
                </div>
              </form>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50% off</h1>
        <p>"The World belongs to those who read."</p>
        <p>"A reader today, A leader tomorrow."</p>
        <a href="#" class="btn">shop now</a>
    </div>

    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>john david</h3>
                <p>I think "The Book Look" is the best website for book reviews. It has many users, and the site not only gives readers options to read but also to mark books to be read and recommend books to their friends. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>sara taylor</h3>
                <p>Most of "The Book Look" users are avid readers and their reviews are 100% genuine. You are certain to find almost all the books in this world in this wonderful website.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>Jim Hollard</h3>
                <p>One of the most amazing website to purchase books. The books have a very good quality and all the bookheads should definitely try this website!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>Angela Johnson</h3>
                <p>This is the one-stop and the best website for books. Reviews and quality are perfect and apt,absolutely worth a try!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <!--<div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>-->
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span> Book Reviews</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>"It Ends With Us" Review</h3>
                    <p>The relationships are portrayed with compassion and honesty, and the author's note at the end that explains Hoover's personal connection to the subject matter is a must-read.

                        </p>
                    <a href="https://www.kirkusreviews.com/book-reviews/colleen-hoover/it-ends-with-us/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>"One Arranged Murder" Review</h3>
                    <p>Chetan Bhagat's obsession with number names continues. His latest book, “One Arranged Murder” is proof of that. The title and the premise are exciting enough to give most readers a reason to buy and read the book</p>
                    <a href="https://www.bookgeeks.in/one-arranged-murder-chetan-bhagat-book-review/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>"Book Lovers" Review</h3>
                    <p>And while the romance between Nora and Charlie is swoonworthy and steam-filled, it's Nora's relationship with Libby that really brings the tears.
                       A heartfelt and hilarious read about books, sisters, and writing your own love story.</p>
                    <a href="https://www.kirkusreviews.com/book-reviews/emily-henry/book-lovers/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>"Paper Towns" Review</h3>
                    <p>"Margo always loved mysteries. And in everything that came afterward, I could never stop thinking that maybe she loved mysteries so much that she became one."
                       If you haven't picked up Paper Towns yet, today is the day!</p>
                    <a href="https://www.harpercollege.edu/library/blog/posts/paper-towns-book-review.php" class="btn">read more</a>
                </div>
            </div>

            <!--<div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>-->
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>

        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> client reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> book reviews</a>
        </div>

        <!--<div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>-->

        <div class="box">
            <h3>contact info</h3>

            <a href="#"> <i class="fas fa-envelope"></i> thebooklook@gmail.com </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>

    </div>

    <div class="share">
        <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="https://www.instagram.com/_"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="https://www.linkedin.com/in/"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="https://github.com/"> <i class="fab fa-github"></i> github </a>
    </div>

    <div class="credit"> Copyright 2022 | <span>The Book Look</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
