document.querySelector('.column .sw_fastfolder').onclick = function () {
    swal("Numéro de dossier :", {
            title: "Ouvrir un dossier",
            text: "Numéro de dossier :",
            content: "input",
        })
        .then((value) => {
            swal(`Dossier sélectionné: ${value}`)
        })

}
