<?php
// proses-pendaftaran-inventori.php
// Fail ini memproses data borang pendaftaran inventori yang dihantar dari borang-pendaftaran.html

// Semak sama ada permintaan adalah POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari borang
    $nama_item    = htmlspecialchars($_POST['nama_item']);
    $kategori     = htmlspecialchars($_POST['kategori']);
    $no_siri      = htmlspecialchars($_POST['no_siri']);
    $tarikh_terima= htmlspecialchars($_POST['tarikh_terima']);
    $kuantiti     = intval($_POST['kuantiti']);
    $lokasi       = htmlspecialchars($_POST['lokasi']);
    $catatan      = htmlspecialchars($_POST['catatan']);

    // Simulasi simpanan (contoh: boleh sambung ke pangkalan data)
    // Di sini hanya papar semula data yang diterima untuk demo
    ?>
    <!DOCTYPE html>
    <html lang="ms">
    <head>
        <meta charset="UTF-8">
        <title>Pendaftaran Inventori Berjaya</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
            .container { max-width: 700px; margin: 40px auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);}
            h1 { color: #27ae60; }
            .success { background: #eafaf1; border-left: 4px solid #27ae60; padding: 15px 18px; color: #205072; margin-bottom: 18px;}
            table { width: 100%; border-collapse: collapse;}
            td { padding: 8px 6px; }
            tr:nth-child(odd) { background: #f9f9f9; }
            .footer-note {
                margin-top: 32px;
                font-size: 0.95em;
                color: #888;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!-- Global Header -->
        <div id="globalHeader"></div>
        <div class="container">
            <h1>Pendaftaran Berjaya</h1>
            <div class="success">
                Maklumat inventori telah berjaya didaftarkan.
            </div>
            <table>
                <tr><td><strong>Nama Item</strong></td><td><?= $nama_item ?></td></tr>
                <tr><td><strong>Kategori</strong></td><td><?= $kategori ?></td></tr>
                <tr><td><strong>No. Siri</strong></td><td><?= $no_siri ?></td></tr>
                <tr><td><strong>Tarikh Terima</strong></td><td><?= $tarikh_terima ?></td></tr>
                <tr><td><strong>Kuantiti</strong></td><td><?= $kuantiti ?></td></tr>
                <tr><td><strong>Lokasi Simpanan</strong></td><td><?= $lokasi ?></td></tr>
                <tr><td><strong>Catatan</strong></td><td><?= ($catatan ? $catatan : '-') ?></td></tr>
            </table>
            <p><a href="borang-pendaftaran.html">Daftar Inventori Baru</a></p>
            <div class="footer-note">
                Project Version: v1.0.0 | Last Updated: 12 Ogos 2025
            </div>
        </div>
        <!-- Global Footer -->
        <div id="globalFooter"></div>
        <script>
            // Load global header and footer (if using with header.html/footer.html)
            function loadHTML(id, url) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById(id).innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", url, true);
                xhttp.send();
            }
            loadHTML("globalHeader", "header.html");
            loadHTML("globalFooter", "footer.html");
        </script>
    </body>
    </html>
    <?php
} else {
    // Jika bukan permintaan POST, papar mesej ralat
    echo "Akses tidak sah.";
}
?>