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
        <link rel="stylesheet" href="css/cube.css" />
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
                <div class="parent m-5">
                    <div class="child">
                        <div class="allDes front">front</div>
                        <div class="allDes back">back</div>
                        <div class="allDes top">top</div>
                        <div class="allDes bottom">bottom</div>
                        <div class="allDes left">left</div>
                        <div class="allDes right">right</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="radioAll">
                    <label><input type="radio" name="okay" value="front" checked="checked">front</label>
                    <label><input type="radio" name="okay" value="back">back</label>
                    <label><input type="radio" name="okay" value="top">top</label>
                    <label><input type="radio" name="okay" value="bottom">bottom</label>
                    <label><input type="radio" name="okay" value="left">left</label>
                    <label><input type="radio" name="okay" value="right">right</label>
                </p>
            </div>
        </div>
        <!---JS---->
        <script type="text/javascript">
            var radioAll = document.querySelector(".radioAll");
            var child = document.querySelector(".child");
            var currentClass = "";
            function changed() {
                var checked = radioAll.querySelector(":checked");
                var className = checked.value;
                var processClass = "show-" + className;
                if (currentClass) {
                    child.classList.remove(currentClass);
                }
                currentClass = processClass;
                child.classList.add(currentClass);
            }
            changed();
            radioAll.addEventListener("change", changed);
        </script>
    </body>
</html>
