document.querySelector('#validmodifiedform .sw_modifyforms').onclick = function () {
    swal({
            title: "Confirmer vous cette action",
            text: "Cette action entrainera la modification et leur horodatage",
            icon: "info",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.getElementById("validmodifiedform").style.display = "none";
                document.getElementById("askmodifiedform").style.display = "block";
                var a = document.getElementsByClassName("formulaire");
                for (i = 0; i < a.length; i++) {
                    a[i].disabled = true;
                }
                swal("Les modifications ont bien été enregistrées", {
                    icon: "success",
                });
            }
        });
};
