document.querySelector('.title_formtop .sw_purgelist').onclick = function () {
    swal({
            title: "Êtes vous sûr ?",
            text: "Cette action entrainera la suppression de l'ensemble des dossiers encore en attente",
            icon: "error",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("La liste a été définitivement vidée, et les dossiers effacés", {
                    icon: "success",
                });
            }
        });
};
