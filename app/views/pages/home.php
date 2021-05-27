<?php
?>
    <div id = 'header'>
        <header>
        <nav>
          <ul class="nav_links">
            <li><img src="../image/logo.png" alt="logo" class="logo"></li>
            <li id="home_link"><a href="/pages/home">Home</a></li>
            <li><a href="/pages/home">Product</a></li>
            <li><a href="/pages/home">Design</a></li>
            <li><a href="/pages/about">About</a></li>
            <li><a href="/pages/service">Service</a></li>
            <li>
            <div class="search_bar">
            <input type="text " placeholder="Search.. " name="keyword" id="keyword">
            <div class="btn"><img src="../image/search.png " alt="icon_search "></div>
            </div>
            <li>
      
          <a href="" class="cart"><img src="../image/trolley.png " alt="icon_cart "></a>
          </ul>
        </nav>
    
    </header>
    </div>
<div id="container">
    <div class="hello" id="hello"> <marquee direction="right" loop="1" scrollamount="25" ><img src="../image/hello.png" style="width:120%"></marquee></div>
    <script src="home.js"></script>
    <header>
        <meta charset="utf-8">
        <link rel=STYLESHEET HREF="home.css" type="text/css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SITENAME</title>
        <link rel="stylesheet" href="style.css">
    </header>
    <div id="body">
        <!-- Thẻ Chứa Slideshow -->
        <div class="slideshow-container">
            <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
            <div class="mySlides fade">
                <a href="https://www.facebook.com/profile.php?id=100008617321262" target="_self"> 
                    <img src="../image/khuyen_mai/1.jpg" style="width:100%">
                </a>
            </div>
            <div class="mySlides fade">
            <a href="https://www.facebook.com/profile.php?id=100008617321262" target="_self"> 
                <img src="../image/khuyen_mai/2.jpg" style="width:100%">
            </a>
            </div>
            <div class="mySlides fade">
            <a href="https://www.facebook.com/profile.php?id=100008617321262" target="_self"> 
                <img src="../image/khuyen_mai/3.jpg" style="width:100%">
            </a>
            </div>
            
            <!-- Nút điều khiển mũi tên-->
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <br>
        <!-- Nút tròn điều khiển slideshow-->
        <div style="text-align:center">
            <script>currentSlide(1);</script>
            <script>
                var i = 1;
                var id = setInterval(myAlert, 2500); //Cứ 3s gọi hàm myAlert một lần
                function myAlert() {
                    i++;
                    currentSlide(i);
                    if (i==3) {
                        i=0;}

                }
            </script>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <br>
            <div class="contain_button_buynow">
                <button class="button button_buynow" onclick="scroll_to_home2(3000)">
                </button>
            </div>
        <br>
        <!--------------------------- chọn mẫu sản phẩm top----------------------------------------------------------------->
        <div class = "top" style="text-align:center;">
            <div class="slideshow-container-top1">

                <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                <div class="mySlides-top1 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/laptop/1.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top1 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/phone/1.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top1 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/design/1.png" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="slideshow-container-top2">

                <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                <div class="mySlides-top2 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/laptop/2.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top2 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/phone/2.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top2 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/design/2.png" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="slideshow-container-top3">

                <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                <div class="mySlides-top3 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/laptop/3.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top3 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/phone/3.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top3 fade">
                    <a href="" target="_self"> 
                        <img src="../image/de_cu/design/3.png" style="width:100%">
                    </a>
                </div>
            </div>
        </div>

        <div style="padding-left: 125px; padding-top: 350px;">
            <script> currentSlide_home2(1)</script>
            <script>
                var i = 1;
                var n = 0;
                var id = setInterval(myAlert, 3000); //Cứ 3s gọi hàm myAlert một lần
                function myAlert() {
                    i++;
                    n++;
                    currentSlide_home2(i);
                    if (i==3) i=0;
                    if(n==2) deletehello();
                }
            </script>
            <span class="laptop_button" onclick="currentSlide_home2(1);"></span>
            <br>
            <span class="phone_button" onclick="currentSlide_home2(2)"></span>
            <br>
            <span class="design_button" onclick="currentSlide_home2(3)"></span>
        </div>
        <div class="text_top" >
            <h1>Best selling this month</h1>
        </div>
    <br>
        
        <br>
    </div>

    

</div>
<?php
    require_once '../app/views/common/footer.php';
?>