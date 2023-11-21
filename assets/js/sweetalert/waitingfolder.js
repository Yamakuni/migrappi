document.querySelector('.buttons .sw_waitingfolder ').onclick = function () {
    swal({
            title: "Confirmer ?",
            text: "Cette action entrainera le placement en file d'attente du dossier",
            icon: "info",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Le dossier a été placé dans la file d'attente", {
                    icon: "success",
                });
            }
        });
};
