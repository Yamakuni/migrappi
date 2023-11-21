document.querySelector('.buttons .sw_validforms').onclick = function () {
    swal({
            title: "Confirmer vous cette action",
            text: "Cette action entrainera l'enregistrement des données et leur horodatage",
            icon: "info",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
                function backdanslesbacs() {
                    history.go(-1)
                }
                setTimeout(backdanslesbacs, 1500);
                swal("Le formulaire a été enregistré", {
                    icon: "success",
                    button: false,
                });
            }
        });
};
