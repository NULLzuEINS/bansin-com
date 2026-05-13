<?php include "inc/header.inc.php"; ?>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr>
            <td align="left" valign="top">
                <div class="p-2">
                    <img id="gallery-main"
                         class="block w-full max-w-[435px] h-auto border border-[#ddd]"
                         src="bilder/ansicht/villacosima.jpg"
                         alt="Die Villa Cosima"
                         width="435" height="326" />
                    <div id="gallery-caption" class="text-[9pt] text-[#555] mt-1 min-h-[18px]">Die Villa Cosima</div>

                    <div class="flex flex-wrap gap-1.5 mt-2 mb-2">
                        <span class="gallery-thumb cursor-pointer border-2 border-secondary opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/villacosima.jpg"
                              data-caption="Die Villa Cosima"
                              title="Die Villa Cosima">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/villacosima.jpg" alt="Die Villa Cosima" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/kueche.jpg"
                              data-caption="Die Küchenzeile"
                              title="Die Küchenzeile">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/kueche.jpg" alt="Die Küchenzeile" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/sitzgelegenheit.jpg"
                              data-caption="Die Sitzgelegenheit"
                              title="Die Sitzgelegenheit">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/sitzgelegenheit.jpg" alt="Die Sitzgelegenheit" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/sitzgelegenheiten.jpg"
                              data-caption="Die Sitzgelegenheit"
                              title="Die Sitzgelegenheit">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/sitzgelegenheiten.jpg" alt="Die Sitzgelegenheit" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/wohnzimmerfenster.jpg"
                              data-caption="Das Wohnzimmer"
                              title="Das Wohnzimmer">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/wohnzimmerfenster.jpg" alt="Das Wohnzimmer" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/wohnzimmertisch.jpg"
                              data-caption="Das Wohnzimmer (Tisch)"
                              title="Das Wohnzimmer">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/wohnzimmertisch.jpg" alt="Das Wohnzimmer" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/schlafzimmer.jpg"
                              data-caption="Das Schlafzimmer"
                              title="Das Schlafzimmer">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/schlafzimmer.jpg" alt="Das Schlafzimmer" />
                        </span>
                        <span class="gallery-thumb cursor-pointer border-2 border-transparent opacity-75 hover:opacity-100 block transition-all duration-150"
                              data-large="bilder/ansicht/bad.jpg"
                              data-caption="Das Badezimmer"
                              title="Das Badezimmer">
                            <img class="block w-[90px] h-[68px] object-cover" src="photogallery/photo4023/bad.jpg" alt="Das Badezimmer" />
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
            thumbs.forEach(function (t) {
                t.classList.remove('border-secondary', 'opacity-100');
                t.classList.add('border-transparent', 'opacity-75');
            });
            this.classList.remove('border-transparent', 'opacity-75');
            this.classList.add('border-secondary', 'opacity-100');
            mainImg.src = this.getAttribute('data-large');
            mainImg.alt = this.getAttribute('data-caption');
            caption.textContent = this.getAttribute('data-caption');
        });
    });
}());
</script>

<?php include "inc/footer.inc.php"; ?>
