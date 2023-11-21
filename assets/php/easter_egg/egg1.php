<div class="modal" id="easter_egg1">
    <div class="modal-background"></div>
    <div class="modal-content">
        <p class="image">
            <img src="/assets/img/easter_egg/museum.gif" alt="" style="margin-top: 3%;">
        </p>
    </div>
    <button onclick="egg1_close()" class="modal-close is-large" aria-label="close"></button>
</div>

<script>
    function easter_egg1() {
        var element = document.getElementById("easter_egg1");
        element.style.display = "block";
        document.getElementById("modal_version").style.display = "none";
    }

    function egg1_close() {
        var element = document.getElementById("easter_egg1");
        element.style.display = "none";
        window.location.reload();
    }

</script>
