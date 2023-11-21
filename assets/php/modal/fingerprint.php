<div class="modal" id="modal_fingerprint">
    <div class="modal-background"></div>
    <div scroll="no" class="modal-content fingerprint">
        <header class="card-header">
            <p class="card-header-title">Fingerprint session</p>
            <button onclick="fingerprint_close()" class="modal-close" aria-label="close"></button>
        </header>
        <table class="table">
            <thead>
                <tr>
                    <th class="fingerprint_first fingerprint_head">Information</th>
                    <th class="fingerprint_head">Donnée</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fingerprint_first">User agent</td>
                    <td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:64.0) Gecko/20100101 Firefox/64.0</td>
                </tr>
                <tr>
                    <td class="fingerprint_first">Content language</td>
                    <td>fr-FR,fr;q=0.5</td>
                </tr>
                <tr>
                    <td class="fingerprint_first">Plateforme</td>
                    <td>MacIntel</td>
                </tr>
                <tr>
                    <td class="fingerprint_first">Fuseau horaire</td>
                    <td>-60</td>
                </tr>
                <tr>
                    <td class="fingerprint_first">Résolution</td>
                    <td>1280x800x24</td>
                </tr>
                <tr>
                    <td class="fingerprint_first">WebGL Vendor</td>
                    <td>Intel Inc.</td>
                </tr>
                <tr>
                    <td class="fingerprint_first">WebGL Renderer</td>
                    <td>Intel HD Graphics 4000 OpenGL Engine</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function fingerprint_open() {
        var element = document.getElementById("modal_fingerprint");
        element.classList.add("is-active");
    }

    function fingerprint_close() {
        var element = document.getElementById("modal_fingerprint");
        element.classList.remove("is-active");
    }

</script>
