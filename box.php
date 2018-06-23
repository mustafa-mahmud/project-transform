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
        <link rel="stylesheet" href="css/box.css" />
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
                        <div class="box front">front</div>
                        <div class="box back">back</div>
                        <div class="box left">left</div>
                        <div class="box right">right</div>
                        <div class="box top">top</div>
                        <div class="box bottom">bottom</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="radioGroup ml-2">
                    <label><input type="radio" name="user" value="front" checked="checked">front</label>
                    <label><input type="radio" name="user" value="back">back</label>
                    <label><input type="radio" name="user" value="left">left</label>
                    <label><input type="radio" name="user" value="right">right</label>
                    <label><input type="radio" name="user" value="top">top</label>
                    <label><input type="radio" name="user" value="bottom">bottom</label>
                </p>
            </div>
        </div>
        <!---JS---->
        <script type="text/javascript">
            var child = document.querySelector(".child");
            var radioGroup = document.querySelector(".radioGroup");
            var currentClass = "";
            function changed() {
                var checked = radioGroup.querySelector(":checked");
                var getValue = checked.value;
                var processClass = "show-" + getValue;
                if(currentClass){
                    child.classList.remove(currentClass);
                }
                currentClass = processClass;
                child.classList.add(currentClass);
            }
            radioGroup.addEventListener("change", changed);
        </script>
    </body>
</html>
