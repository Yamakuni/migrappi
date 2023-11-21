document.querySelector('.column .sw_returnforms').onclick = function () {
    swal({
            title: "Êtes vous sûr ?",
            text: "Cette action entrainera la perte des données déjà saisies",
            icon: "error",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
                function backdanslesbacs() {
                    history.go(-1)
                }
                setTimeout(backdanslesbacs, 1500);

                swal("Le formulaire a été supprimé", {
                    icon: "success",
                    button: false,
                });
            }
        });
};
