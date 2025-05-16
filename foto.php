<?php include "inc/header.inc.php"; ?>


<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr>
            <td align="left" valign="top">&nbsp;

                <!--webbot bot="PhotoAlbum" U-include="photogallery/photo4023/real.htm" clientside tag="BODY" startspan -->
                <picture file-href="photogallery/photo4023/real_p.htm" />
                <picture file-href="photogallery/photo4023/real_x.htm" />
                <div align="center">
                    <center>
                        <layer visibility="hide">
                            <div style="display:none;" id="fpGalleryCaptions_516">
                                <div>
                                    <p>Die Villa Cosima</p>
                                </div>
                                <div>
                                    <p>Die Küchenzeile</p>
                                </div>
                                <div>
                                    <p>Die Sitzgelegenheit</p>
                                </div>
                                <div>
                                    <p>Die Sitzgelegenheit</p>
                                </div>
                                <div>
                                    <p>Das Wohnzimmer</p>
                                </div>
                                <div>
                                    <p>Das Wohnzimmer</p>
                                </div>
                                <div>
                                    <p>Das Schlafzimmer</p>
                                </div>
                                <div>
                                    <p>Das Badezimmer</p>
                                </div>
                            </div>
                            <div style="display:none;" id="fpGalleryDescriptions_516">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </layer>
                        <script language="javascript" src="photogallery/photo4023/sldshow.js">
                            <!--
                            -->
                        </script>
                        <div class="thumbnails-scroll">
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/villacosima.jpg" width="90" height="68" title="Die Villa Cosima" data-large="bilder/ansicht/villacosima.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/kueche.jpg" width="90" height="68" title="Die Küchenzeile" data-large="bilder/ansicht/kueche.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/sitzgelegenheit.jpg" width="90" height="68" title="Die Sitzgelegenheit" data-large="bilder/ansicht/sitzgelegenheit.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/sitzgelegenheiten.jpg" width="90" height="68" title="Die Sitzgelegenheit" data-large="bilder/ansicht/sitzgelegenheiten.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/wohnzimmerfenster.jpg" width="90" height="68" title="Das Wohnzimmer" data-large="bilder/ansicht/wohnzimmerfenster.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/wohnzimmertisch.jpg" width="90" height="68" title="Das Wohnzimmer" data-large="bilder/ansicht/wohnzimmertisch.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/schlafzimmer.jpg" width="90" height="68" title="Das Schlafzimmer" data-large="bilder/ansicht/schlafzimmer.jpg" />
                            <img hspace="10" vspace="5" border="0" src="photogallery/photo4023/bad.jpg" width="90" height="68" title="Das Badezimmer" data-large="bilder/ansicht/bad.jpg" />
                        </div>
                        <img id="fpGalleryMainImg_516" name="fpGalleryMainImg_516" width="435" height="326" src="bilder/ansicht/villacosima.jpg" title="Die Villa Cosima" />
                        <div id="fpGalleryCaptionCell_516">
                            <p>Die Villa Cosima</p>
                        </div>
                    </center>
                </div>
                <!--webbot bot="PhotoAlbum" i-checksum="14565" endspan -->
            </td>
        </tr>
    </tbody>
</table>

<style>
.thumbnails-scroll {
    overflow-x: auto;
    white-space: nowrap;
    width: 100%;
    padding-bottom: 10px;
}
.thumbnails-scroll a {
    display: inline-block;
    vertical-align: middle;
}
.thumbnails-scroll img {
    max-width: none;
}
</style>

<script>
document.querySelectorAll('.thumbnails-scroll img').forEach(function(thumb) {
    thumb.addEventListener('click', function(e) {
        var mainImg = document.getElementById('fpGalleryMainImg_516');
        mainImg.src = this.getAttribute('data-large');
        mainImg.title = this.title;
        var caption = document.getElementById('fpGalleryCaptionCell_516');
        if (caption) caption.innerHTML = '<p>' + this.title + '</p>';
    });
});
</script>

<?php include "inc/footer.inc.php"; ?>