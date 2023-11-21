<div class="modal" id="easter_egg2">
    <div class="modal-background"></div>
    <div class="modal-content">
        <p class="image">
            <img src="/assets/img/easter_egg/unicorn.jpg" alt="" style="margin-top: 7%;">
        </p>
    </div>
    <button onclick="egg2_close()" class="modal-close is-large" aria-label="close"></button>
</div>

<script>
    function easter_egg2() {
        if (typeof(Storage) !== "undefinedch") {
            if (localStorage.clickcount) {
                localStorage.clickcount = Number(localStorage.clickcount) + 1;
            } else {
                localStorage.clickcount = 1;
            }
            if (localStorage.clickcount > 2) {
                document.getElementById("modal_version").style.display = "none";
                document.getElementById("easter_egg2").style.display = "block";
            } else {
                document.getElementById("easter_egg2").style.display = "none";
            }
        }
    }

    function egg2_close() {
        var element = document.getElementById("easter_egg2");
        element.style.display = "none";
        window.location.reload();
    }

</script>
