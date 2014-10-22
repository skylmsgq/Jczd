var img = document.getElementById('floater');
var width = document.documentElement.clientWidth,
    height = document.documentElement.clientHeight,
    Hoffset = img.offsetHeight,
    Woffset = img.offsetWidth;
var xpos = parseInt(Math.random() * (width - Woffset) / 2),
    ypos = parseInt(Math.random() * (height - Hoffset) / 2),
    step = 1,
    yon = 0,
    xon = 0,
    interval = 0;

function changePos() {
    width = document.documentElement.clientWidth;
    height = document.documentElement.clientHeight;
    Hoffset = img.offsetHeight;
    Woffset = img.offsetWidth;
    $("#floater").css("left", xpos + document.body.scrollLeft);
    $("#floater").css("top", ypos + document.body.scrollTop);
    if (ypos == 0) {
        yon = 0;
        ypos = 1;
    }
    if (ypos == (height - Hoffset)) {
        yon = 1;
        ypos = (height - Hoffset) - 1;
    }
    if (xpos == 0) {
        xon = 0;
        xpos = 1;
    }
    if (xpos == (width - Woffset)) {
        xon = 1;
        xpos = (width - Woffset) - 1;
    }
    if (yon == 0) {
        ypos = ypos + step;
    } else {
        ypos = ypos - step;
    }
    if (xon == 0) {
        xpos = xpos + step;
    } else {
        xpos = xpos - step;
    }
}
interval = setInterval('changePos()', 30);
$(function() {
    $('#floater').mouseenter(function() {
        clearInterval(interval);
    });
    $('#floater').mouseleave(function() {
        interval = setInterval('changePos()', 30);
    });
});
