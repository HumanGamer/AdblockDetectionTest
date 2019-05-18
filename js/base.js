function hasClass(el, className)
{
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className)
{
    if (el.classList)
        el.classList.add(className)
    else if (!hasClass(el, className))
        el.className += " " + className;
}

function removeClass(el, className)
{
    if (el.classList)
        el.classList.remove(className)
    else if (hasClass(el, className))
    {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}

function testAdBlock()
{
    var detected = "<i class='fas fa-times-circle'></i>&nbsp;Adblock Detected";
    var notdetected = "<i class='fas fa-check'></i>&nbsp;No Adblock";

    var adel1 = document.getElementById('adtest1');
    if (document.getElementById('0Wna5W3mpo')) {
        adel1.innerHTML = notdetected;
        addClass(adel1, "button-green");
    } else {
        adel1.innerHTML = detected;
        addClass(adel1, "button-red");
    }

    var adel2 = document.getElementById('adtest2');
    if (!adblock) {
        adel2.innerHTML = notdetected;
        addClass(adel2, "button-green");
    } else {
        adel2.innerHTML = detected;
        addClass(adel2, "button-red");
    }

    var adel3 = document.getElementById('adtest3');
    if (document.getElementById("wrapfabtest").clientHeight > 0) {
        adel3.innerHTML = notdetected;
        addClass(adel3, "button-green");
    } else {
        adel3.innerHTML = detected;
        addClass(adel3, "button-red");
    }
}

setTimeout(testAdBlock, 1000);