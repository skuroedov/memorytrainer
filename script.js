function _random(max) {
    return Math.floor(Math.random()*max);
}

document.addEventListener("DOMContentLoaded", function () {
    let blinking = document.getElementById("random");
    setInterval(function() {
        let r = _random(255);
        let g = _random(255);
        let b = _random(255);
        blinking.style.color = `rgb(${r}, ${g}, ${b})`;
    }, 80);
});