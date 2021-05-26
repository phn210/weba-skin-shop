<?php
    require_once '../app/views/common/header.php';
?>
    <!-- Thẻ Chứa Slideshow -->
    <div class="slideshow-container">
            <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
                <a href="https://www.facebook.com/profile.php?id=100008617321262" target="_self"> 
                    <img src="<?=URLROOT?>/public/img/home/khuyen_mai/1.jpg" style="width:100%">
                </a>
            </div>
            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <a href="https://www.facebook.com/profile.php?id=100008617321262" target="_self"> 
                <img src="<?=URLROOT?>/public/img/home/khuyen_mai/2.jpg" style="width:100%">
            </a>
            </div>
            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <a href="https://www.facebook.com/profile.php?id=100008617321262" target="_self"> 
                <img src="<?=URLROOT?>/public/img/home/khuyen_mai/3.jpg" style="width:100%">
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
                    if (i==3) i=0;
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
                        <img src="<?=URLROOT?>/public/img/home/de_cu/laptop/1.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top1 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/phone/1.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top1 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/design/1.png" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="slideshow-container-top2">

                <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                <div class="mySlides-top2 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/laptop/2.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top2 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/phone/2.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top2 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/design/2.png" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="slideshow-container-top3">

                <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                <div class="mySlides-top3 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/laptop/3.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top3 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/phone/3.jpg" style="width:100%">
                    </a>
                </div>
                <div class="mySlides-top3 fade">
                    <a href="" target="_self"> 
                        <img src="<?=URLROOT?>/public/img/home/de_cu/design/3.png" style="width:100%">
                    </a>
                </div>
            </div>
        </div>

        <div style="padding-left: 125px; padding-top: 350px;">
            <script> currentSlide_home2(1)</script>
            <script>
                var i = 1;
                var id = setInterval(myAlert, 2000); //Cứ 3s gọi hàm myAlert một lần
                function myAlert() {
                    i++;
                    currentSlide_home2(i);
                    if (i==3) i=0;
                }
            </script>
            <span class="laptop_button" onclick="currentSlide_home2(1);"></span>
            <br>
            <span class="phone_button" onclick="currentSlide_home2(2)"></span>
            <br>
            <span class="design_button" onclick="currentSlide_home2(3)"></span>
        </div>
        <div class="text_top" >
            <h1  style="text-align:center">Top sản phẩm bán chạy nhất tháng</h1>
        </div>

        <script src="<?=URLROOT?>/public/javascript/home.js"></script>
<?php
    require_once '../app/views/common/footer.php';
?>