function detectInspect() {
    var isDebugging = false;

    function warn() {
        if (!isDebugging) {
            console.log('%cSTOP!',
                'color: red; font-size: 40px; -webkit-text-stroke: 2px black; font-weight: bold;');
            console.log('%cKepo aje tengok code orang! 🗿',
                'color: white; font-size: 16px;');
            console.log('%cHebohhh aje', 'color: white; font-size: 16px;');
            isDebugging = true;
        }
    }
    warn();
    setInterval(function () {
        if ((window.outerWidth - window.innerWidth) > 100 || (window.outerHeight - window.innerHeight) >
            100 || window.outerWidth === window.innerWidth || window.outerHeight === window.innerHeight
        ) {
            warn();
        }
    }, 1000);
}
detectInspect();

document.onkeydown = function (e) {
    if (event.keyCode == 123) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
    }
}