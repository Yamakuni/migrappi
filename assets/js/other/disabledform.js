var CheminComplet = document.location.href;
var NomDuFichier = CheminComplet.substring(CheminComplet.lastIndexOf("/") + 1);
var a = document.getElementsByClassName("formulaire");

for (i = 0; i < a.length; i++) {
    if (NomDuFichier.includes("home")) {
        a[i].disabled = true;
    } else if (NomDuFichier.includes("page_admin")) {
        a[i].disabled = true;
    }
}

var CheminComplet = document.location.href;
var NomDuFichier = CheminComplet.substring(CheminComplet.lastIndexOf("/") + 1);
var a = document.getElementsByClassName("caseinfo");

for (i = 0; i < a.length; i++) {
    if (NomDuFichier.includes("home")) {
        a[i].style.visibility = "hidden";
        a[i].style.height = "0.01rem";
        a[i].style.margin = "0";
        a[i].style.padding = "0";
        a[i].style.marginBottom = "-0.8rem";
    }
}
