document.querySelector('.buttons .sw_erasefolder').onclick = function () {
    swal({
            title: "Êtes vous sûr ?",
            text: "Cette action entrainera la suppression définitive du dossier",
            icon: "error",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Le dossier a été supprimé", {
                    icon: "success",
                });
            }
        });
};
