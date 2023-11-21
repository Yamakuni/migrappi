<div class="modal" id="easter_egg4">
    <div class="modal-background"></div>
    <div class="modal-content">
        <p class="image">
            <img src="/assets/img/easter_egg/data.jpg" alt="" style="margin-top: 20%;">
        </p>
    </div>
    <button onclick="egg4_close()" class="modal-close is-large" aria-label="close"></button>
</div>

<script>
    function easter_egg4() {
        if (typeof(Storage) !== "undefinedch") {
            if (localStorage.clickcount) {
                localStorage.clickcount = Number(localStorage.clickcount) + 1;
            } else {
                localStorage.clickcount = 1;
            }
            if (localStorage.clickcount > 10) {
                document.getElementById("modal_version").style.display = "none";
                document.getElementById("easter_egg4").style.display = "block";
            } else {
                document.getElementById("easter_egg4").style.display = "none";
            }
        }
    }

    function egg4_close() {
        var element = document.getElementById("easter_egg4");
        element.style.display = "none";
        window.location.reload();
    }

</script>
