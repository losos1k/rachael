var message = "";
function clickIE() {
    if (document.all) {
        (message);
        return false;
    }
}
function clickNS(e) {
    if
        (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2) {
            (message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS;
} else {
    document.onmouseup = clickNS;
    document.oncontextmenu = clickIE;
}
document.oncontextmenu = new Function("return false");
function disableSelection(target){
    if (typeof target.onselectstart!="undefined")
        target.onselectstart=function(){return false}
    else if (typeof target.style.MozUserSelect!="undefined")
        target.style.MozUserSelect="none"
    else
        target.onmousedown=function(){return false}
    target.style.cursor = "default"
}