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
        <link rel="stylesheet" href="css/dynamicCarouselJs.css" />
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
                            <div class="elements">13</div>
                            <div class="elements">14</div>
                            <div class="elements">15</div>
                            <div class="elements">16</div>
                            <div class="elements">17</div>
                            <div class="elements">18</div>
                            <div class="elements">19</div>
                            <div class="elements">20</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="btnRotate">
                        <p style="margin: 20px 0; margin-left: 100px;">
                            <button class="previous">Previous</button>&nbsp;
                            <button class="next">Next</button>
                        </p>
                        <!--Range-->
                        <p style="margin: 20px 0;">
                            Select Range : 
                            <label><input type="range" min="3" max="20" value="10" /></label>
                        </p>
                        <!--- Horizontal & Vertical --->
                        <p style="margin: 20px 0;">
                            Orientation : 
                            <label><input type="radio" name="orientation" value="horizontal" checked="checked" /> Horizontal<label> &nbsp;
                            <label><input type="radio" name="orientation" value="vertical" /> Vertical<label> 
                        </p>
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
            var range=document.querySelector("input[type='range']");
            var rotateIndex = 0;
            var radius, angle,isHorizontal=true,rotateXY=isHorizontal?"rotateY":"rotateX",rangeValue=10;
            var radio=document.querySelectorAll("input[name='orientation']");
            //add event at the start point at radio input
            (function(){
                let i=0,len=radio.length;
                for(i;i<len;i++){
                     radio[i].addEventListener("change",userChange);
                }
            })();
            //add event at the range input
            (function(){
                range.addEventListener("change",function(){
                    rangeValue=range.value;
                    rotateCircle();
                });
            })();
            //checking user choosed value, is horizontal or vertical?
            function userChange(){
                var ckOrientation=document.querySelector("input[name='orientation']:checked");
                isHorizontal=ckOrientation.value==="horizontal";
                rotateXY=isHorizontal?"rotateY":"rotateX";
                //call rotateCircle() if user change the 'oreintation' value by input
                rotateCircle();
            }
            //rotate the slider when click on 'previous' or 'next' button
            function rotateUser() {
                child.style.transform = "translateZ(" + -radius + "px)"+ rotateXY+"(" + (angle * -rotateIndex) + "deg)";
            }
            //set event at previous button  which increasing var rotateIndex number
            previous.addEventListener("click", function () {
                rotateIndex--;
                rotateUser();
            });
            //set event a next button which decreasing var rotateIndex number
            next.addEventListener("click", function () {
                rotateIndex++;
                rotateUser();
            });
            //making circle all '.elements'
            function rotateCircle() {
                angle = 360 / rangeValue;
                var tan = Math.tan(Math.PI / rangeValue);
                radius = Math.round(((rotateXY==="rotateY"?parent.offsetWidth:parent.offsetHeight) / 2) / tan);
                child.style.transform = "translateZ(" + -radius + "px)";
                let i = 0, len = elements.length;
                for (i; i < len; i++) {
                    if(i<rangeValue){
                        elements[i].style.opacity=0.8;
                        elements[i].style.transform = rotateXY+"(" + angle * i + "deg) translateZ(" + radius + "px)";
                    }else{
                         elements[i].style.opacity=0;
                         elements[i].style.transform="none";
                    }
                }
                rotateUser();
            }
            rotateCircle();
        </script>
    </body>
</html>
