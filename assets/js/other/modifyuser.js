function AskModifyUser() {
    var a = document.getElementsByClassName("formulaire");
    for (i = 0; i < a.length; i++) {
        a[i].disabled = false;
        document.getElementById("modifyuser_ask").style.display = "none";
        document.getElementById("modifyuser_valid").style.display = "block";
    }
    var a = document.getElementsByClassName("archive_user");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "flex";
    }
    var a = document.getElementsByClassName("history_user");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
}


function ValidModifyUser() {
    var a = document.getElementsByClassName("formulaire");
    for (i = 0; i < a.length; i++) {
        a[i].disabled = true;
        document.getElementById("modifyuser_ask").style.display = "block";
        document.getElementById("modifyuser_valid").style.display = "none";
    }
    var a = document.getElementsByClassName("archive_user");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    var a = document.getElementsByClassName("history_user");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "flex";
    }
}
