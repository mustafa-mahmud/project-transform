(function () {
    var container = document.getElementById("container");
    var inner = document.getElementById("inner");
    var helper = document.getElementById("helper");

    //work on mouse
    var mouse = {
        x: 0,
        y: 0,
        _x: 0,
        _y: 0,
        updatePosition: function (event) {
            var e = event || window.event;
            this.x = e.clientX - this._x;
            this.y = (e.clientY - this._y) * -1;
        },
        setOrigin: function (e) {
            this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
            this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
        },
        show: function () {
            return "(" + this.x + " , " + this.y + ")";
        }
    };
    mouse.setOrigin(container);
    //stoping iteration of mouse move
    var counter = 0;
    var updateRate = 1;
    var isTimeToUpdate = function () {
        return (counter++ % updateRate) === 0;
    };
    //defining Handler
    var onMouseEnterHandler = function (event) {
        helper.className = "";
        update(event);
    };

    var onMouseLeaveHandler = function (event) {
        inner.style = "";
    };

    var onMouseMoveHandler = function (event) {
        if (isTimeToUpdate()) {
            update(event);
        }
        displayMousePositionHelper(event);
    };

    var update = function (event) {
        mouse.updatePosition(event);
        updateTransformStyle(
                (mouse.y / inner.offsetHeight / 2).toFixed(2),
                (mouse.x / inner.offsetWidth / 2).toFixed(2)
                );
    };

    var updateTransformStyle = function (x, y) {
        var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
        inner.style.transform = style;
    };

    var displayMousePositionHelper = function (event) {
        var e = event || window.event;
        helper.innerHTML = mouse.show();
        helper.style = "top:" + (e.clientY - container.offsetTop) + "px;"
                + "left:" + (e.clientX - container.offsetLeft) + "px";
    };

    //now call the all function references
    container.onmouseenter = onMouseEnterHandler;
    container.onmouseleave = onMouseLeaveHandler;
    container.onmousemove = onMouseMoveHandler;
})();