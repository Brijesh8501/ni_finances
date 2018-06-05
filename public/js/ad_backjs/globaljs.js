function myMenuFunctionBrij() {
    var x = document.getElementById("myTopnavbrij");
    if (x.className === "topnavbrij") {
        x.className += " responsivebrij";
    } else {
        x.className = "topnavbrij";
    }
}