<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8" />
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-Control" content="no-cache"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <!--[if lte IE 9]>
        <link href='/PATH/TO/FOLDER/css/animations-ie-fix.css' rel='stylesheet'>
        <![endif]-->
        <title>Transforms</title>
        <!----CSS----->
        <link rel="stylesheet" href="css/carousel.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css" />
        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <!--works link: https://3dtransforms.desandro.com/carousel --->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="scene">
                        <div class="myCarousel">
                            <div class="cell">1</div>
                            <div class="cell">2</div>
                            <div class="cell">3</div>
                            <div class="cell">4</div>
                            <div class="cell">5</div>
                            <div class="cell">6</div>
                            <div class="cell">7</div>
                            <div class="cell">8</div>
                            <div class="cell">9</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p style="text-align: center;">
                        <button class="previous-button">Previous</button>
                        <button class="next-button">Next</button>
                    </p>
                </div>
            </div>
        </div>
        <!---JS---->
        <script type="text/javascript">
            var carousel = document.querySelector(".myCarousel");
            var cellCount = 9;
            var selectIndex = 0;
            function rotateCarousel() {
                var angle = (selectIndex / cellCount )* -360;
                /*suppose user click on previous button then math will be-
                 (-1/9)*-360=-(-0.111*360)=40;
                */
               /*
                same way assume that, user now click on next button
                (1/9)*-360=-(0.111*360)=-40;
                */
                carousel.style.transform = "translateZ(-288px) rotateY(" + angle + "deg)";
            }
            //work on previous button
            var prevButton = document.querySelector(".previous-button");
            prevButton.addEventListener("click", function () {
                selectIndex--;
                rotateCarousel();
            });
            //work on next button
            var nextButton = document.querySelector(".next-button");
            nextButton.addEventListener("click", function () {
                selectIndex++;
                rotateCarousel();
            });
        </script>
    </body>
</html>
