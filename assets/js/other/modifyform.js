function AskModifyForm() {
    document.getElementById("validmodifiedform").style.display = "block";
    document.getElementById("askmodifiedform").style.display = "none";
    var a = document.getElementsByClassName("formulaire");
    for (i = 0; i < a.length; i++) {
        a[i].disabled = false;
    }
}

function CancelModifyForm() {
    window.location.reload()
}
