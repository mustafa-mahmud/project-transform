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
        <link rel="stylesheet" href="css/simpleCarouselWithJs.css" />
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="btnRotate">
                        <button class="previous">Previous</button>&nbsp;
                        <button class="next">Next</button>
                    </div>
                </div> 
            </div>
        </div>
        <!---JS---->
        <script type="text/javascript">
            var parent = document.querySelector(".parent");
            var child = document.querySelector(".child");
            var elements = document.querySelectorAll(".elements");
            var previous = document.querySelector(".previous");
            var next = document.querySelector(".next");
            var selectIndex = 0;
            var radius, degree;

            function rotateCells() {
                child.style.transform = "translateZ(" + -radius + "px) rotateY(" + degree * -selectIndex + "deg)";
            }
            function setRotateTranslate() {
                degree = 360 / elements.length;
                var tan = Math.tan(Math.PI / elements.length);
                radius = Math.round((parent.offsetWidth / 2) / tan);
                child.style.transform = "translateZ(" + -radius + "px)";
                let i = 0, len = elements.length;
                for (i; i < len; i++) {
                    var cells = elements[i];
                    var degrees = degree * i;
                    cells.style.opacity = 0.8;
                    cells.style.transform = "rotateY(" + degrees + "deg) translateZ(" + radius + "px)";
                }
            }
            setRotateTranslate();
            //set functioning 'previous' button
            previous.addEventListener("click", function () {
                selectIndex--;
                rotateCells();
            });
            //set functioning 'next' button
            next.addEventListener("click", function () {
                selectIndex++;
                rotateCells();
            });
        </script>
    </body>
</html>
