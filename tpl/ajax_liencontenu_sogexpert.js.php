<script>
    function get_content(_content, _container, headerfooter) {
        if(jQuery('[data-set_content="'+_content+'"][data-container="'+_container+'"]').hasClass('active')){
            return false;
        }
        jQuery('[data-set_content].active').removeClass('active');
        jQuery('[data-set_content="'+_content+'"][data-container="'+_container+'"]').addClass('active');
        jQuery('#loader_rdv_diag .text_loading_rdvdiag').html("Chargement en cours,");
        jQuery('#' + _container).html(jQuery('#loader_rdv_diag').html());
        jQuery.ajax({
            url: '?lien_contenu=' + _content + headerfooter,
            method: 'POST',
            data: <?php if (isset($_POST) && !empty($_POST)) { echo json_encode($_POST); } else echo '{}'; ?>,
            dataType: 'html',
            success: function (data) {
                jQuery('#' + _container).html(data);

                if (data.indexOf("auto_submit_paiement") > 1) {
                    setTimeout(function () {
                        jQuery('.auto_submit_paiement').submit();
                    }, 5000);
                }
            },
            error: function (data) {
                jQuery('#' + _container).html("");
            }
        });
    }

    jQuery(document).ready(function () {
        if (jQuery('[data-auto_set_content]').length >= 1) {
            jQuery("[data-auto_set_content]").each(function (index) {
                var headerfooter = "";
                if (typeof jQuery(this).attr('headerfooter') !== 'undefined') {
                    headerfooter = "&headerfooter";
                }
                get_content(jQuery(this).data('auto_set_content'), jQuery(this).attr('id'), headerfooter);
            });
        }
        jQuery('body').on('click', '[data-set_content][data-container]', function (e) {
            var headerfooter = "";
            if (typeof jQuery(this).attr('headerfooter') !== 'undefined') {
                headerfooter = "&headerfooter";
            }
            get_content(jQuery(this).data('set_content'), jQuery(this).data('container'), headerfooter);
        });
    });

</script>
