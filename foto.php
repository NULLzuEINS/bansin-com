<?php include "inc/header.inc.php"; ?>

<style>
.gallery-wrap {
    padding: 8px 10px;
}
.gallery-main-img {
    display: block;
    width: 100%;
    max-width: 435px;
    height: auto;
    border: 1px solid #ddd;
}
.gallery-caption {
    font-size: 9pt;
    color: #555;
    margin-top: 4px;
    min-height: 18px;
}
.gallery-thumbs {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-top: 8px;
    margin-bottom: 8px;
}
.gallery-thumb {
    cursor: pointer;
    border: 2px solid transparent;
    opacity: 0.75;
    transition: opacity 0.15s, border-color 0.15s;
    display: block;
}
.gallery-thumb:hover {
    opacity: 1;
}
.gallery-thumb.active {
    border-color: #4898bb;
    opacity: 1;
}
.gallery-thumb img {
    display: block;
    width: 90px;
    height: 68px;
    object-fit: cover;
}
</style>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr>
            <td align="left" valign="top">
                <div class="gallery-wrap">
                    <img id="gallery-main"
                         class="gallery-main-img"
                         src="bilder/ansicht/villacosima.jpg"
                         alt="Die Villa Cosima"
                         width="435" height="326" />
                    <div id="gallery-caption" class="gallery-caption">Die Villa Cosima</div>

                    <div class="gallery-thumbs">
                        <span class="gallery-thumb active"
                              data-large="bilder/ansicht/villacosima.jpg"
                              data-caption="Die Villa Cosima"
                              title="Die Villa Cosima">
                            <img src="photogallery/photo4023/villacosima.jpg" alt="Die Villa Cosima" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/kueche.jpg"
                              data-caption="Die Küchenzeile"
                              title="Die Küchenzeile">
                            <img src="photogallery/photo4023/kueche.jpg" alt="Die Küchenzeile" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/sitzgelegenheit.jpg"
                              data-caption="Die Sitzgelegenheit"
                              title="Die Sitzgelegenheit">
                            <img src="photogallery/photo4023/sitzgelegenheit.jpg" alt="Die Sitzgelegenheit" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/sitzgelegenheiten.jpg"
                              data-caption="Die Sitzgelegenheit"
                              title="Die Sitzgelegenheit">
                            <img src="photogallery/photo4023/sitzgelegenheiten.jpg" alt="Die Sitzgelegenheit" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/wohnzimmerfenster.jpg"
                              data-caption="Das Wohnzimmer"
                              title="Das Wohnzimmer">
                            <img src="photogallery/photo4023/wohnzimmerfenster.jpg" alt="Das Wohnzimmer" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/wohnzimmertisch.jpg"
                              data-caption="Das Wohnzimmer (Tisch)"
                              title="Das Wohnzimmer">
                            <img src="photogallery/photo4023/wohnzimmertisch.jpg" alt="Das Wohnzimmer" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/schlafzimmer.jpg"
                              data-caption="Das Schlafzimmer"
                              title="Das Schlafzimmer">
                            <img src="photogallery/photo4023/schlafzimmer.jpg" alt="Das Schlafzimmer" />
                        </span>
                        <span class="gallery-thumb"
                              data-large="bilder/ansicht/bad.jpg"
                              data-caption="Das Badezimmer"
                              title="Das Badezimmer">
                            <img src="photogallery/photo4023/bad.jpg" alt="Das Badezimmer" />
                        </span>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<script>
(function () {
    var mainImg = document.getElementById('gallery-main');
    var caption = document.getElementById('gallery-caption');
    var thumbs  = document.querySelectorAll('.gallery-thumb');

    thumbs.forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            thumbs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');
            mainImg.src = this.getAttribute('data-large');
            mainImg.alt = this.getAttribute('data-caption');
            caption.textContent = this.getAttribute('data-caption');
        });
    });
}());
</script>

<?php include "inc/footer.inc.php"; ?>
