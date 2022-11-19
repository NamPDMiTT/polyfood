document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});
var c = document.getElementById("coca");
var x = document.getElementById("xoi");
var y = document.getElementById("ncloc");
var z = document.getElementById("cku");
var h = document.getElementById("cki");
var x1 = document.getElementById("xoi1");
var com2 = document.getElementById("com2");
var com1 = document.getElementById("com1");


function bla() {

    if (c.style.display = "none") {
        y.style.display = "block";
        x.style.display = "none";
        x1.style.display = "none";
    } else {
        y.style.display = "none";
        c.style.display = "block"

    }
    if (z.style.display = "none") {
        h.style.display = "block";
    } else {
        h.style.display = "block";
    }
}

function xoi() {
    if (c.style.display = "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "block";
    }

    if (z.style.display = "none") {
        x1.style.display = "block";
        h.style.display = "none"
    } else {
        x1.style.display = "block";
    }
}