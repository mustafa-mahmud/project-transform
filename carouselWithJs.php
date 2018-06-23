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
        <link rel="stylesheet" href="css/carouselWithJs.css" />
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
                            <div class="cell">10</div>
                            <div class="cell">11</div>
                            <div class="cell">12</div>
                            <div class="cell">13</div>
                            <div class="cell">14</div>
                            <div class="cell">15</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="carousel-option">
                        <p>
                            <label>Cells: <input class="cells-range" min="3" max="15" value="9" type="range"  /></label>
                        </p>
                        <p>
                            <button class="previous">Previous</button>
                            <button class="next">Next</button>
                        </p>
                        <p>
                            Orientation : 
                            <label>
                                <input name="orientation" value="horizontal" type="radio" checked="checked" /> Horizontal 
                            </label>
                            <label>
                                <input name="orientation" value="vertical" type="radio" /> Vertical
                            </label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!---JS---->
        <script type="text/javascript">
            var carousel = document.querySelector('.myCarousel');
            var cells = carousel.querySelectorAll('.cell');
            var cellCount; // cellCount set from cells-range input value
            var selectedIndex = 0; // increment/decrement by previous/next button
            var cellWidth = carousel.offsetWidth;// it's needs for new creation cell width
            var cellHeight = carousel.offsetHeight;// it's needs for new creation cell height
            var isHorizontal = true;
            var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
            var radius, theta;

            function rotateCarousel() {
                var angle = theta * selectedIndex * -1;
                carousel.style.transform = 'translateZ(' + -radius + 'px) ' +
                        rotateFn + '(' + angle + 'deg)';
            }

            var prevButton = document.querySelector('.previous');
            prevButton.addEventListener('click', function () {
                selectedIndex--;
                rotateCarousel();
            });

            var nextButton = document.querySelector('.next');
            nextButton.addEventListener('click', function () {
                selectedIndex++;
                rotateCarousel();
            });

            var cellsRange = document.querySelector('.cells-range');
            cellsRange.addEventListener('change', changeCarousel);

            function changeCarousel() {
                cellCount = cellsRange.value;
                theta = 360 / cellCount;
                var cellSize = isHorizontal ? cellWidth : cellHeight;
                var ten=Math.tan(Math.PI/cellCount);
                radius = Math.round((cellSize / 2) / ten);
                for (var i = 0; i < cells.length; i++) {
                    var cell = cells[i];
                    if (i < cellCount) {
                        // visible cell
                        cell.style.opacity = 0.8;
                        var cellAngle = theta * i;
                        cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
                    } else {
                        // hidden cell
                        cell.style.opacity = 0;
                        cell.style.transform = 'none';
                    }
                }

                rotateCarousel();
            }

            var orientationRadios = document.querySelectorAll('input[name="orientation"]');
            (function () {
                for (var i = 0; i < orientationRadios.length; i++) {
                    var radio = orientationRadios[i];
                    radio.addEventListener('change', onOrientationChange);
                }
            })();

            function onOrientationChange() {
                var checkedRadio = document.querySelector('input[name="orientation"]:checked');
                isHorizontal = checkedRadio.value === 'horizontal';
                rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
                changeCarousel();
            }

            // set initials
            onOrientationChange();

        </script>
    </body>
</html>
