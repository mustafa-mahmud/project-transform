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
        <link rel="stylesheet" href="css/carouselWith12.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css" />
        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="parent">
                        <div class="child">
                            <div class="elements">1</div>
                            <div class="elements">2</div>
                            <div class="elements">3</div>
                            <div class="elements">4</div>
                            <div class="elements">5</div>
                            <div class="elements">6</div>
                            <div class="elements">7</div>
                            <div class="elements">8</div>
                            <div class="elements">9</div>
                            <div class="elements">10</div>
                            <div class="elements">11</div>
                            <div class="elements">12</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p style="text-align: center;">
                        <button class="previous">Previous</button>
                        <button class="next">Next</button>
                    </p>
                </div>
            </div>
        </div>
        <!---JS---->
        <script type="text/javascript">
            var child = document.querySelector(".child");
            var totalCell = 12;
            var increDecre = 0;
            function rotateAngle() {
                var angle = (increDecre / totalCell) * -360;
                child.style.transform = "translateZ(-560px) rotateY(" + angle + "deg)";
            }
            //set previous button angle
            var previous = document.querySelector(".previous");
            previous.addEventListener("click", function () {
                increDecre++;
                rotateAngle();
            });
            //set next button angle
            var next = document.querySelector(".next");
            next.addEventListener("click", function () {
                increDecre--;
                rotateAngle();
            });
        </script>
    </body>
</html>
