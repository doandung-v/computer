jQuery(document).ready(function() {
    jQuery('.isures-radio-variable input').change(function() {
        jQuery('select[name="' + jQuery(this).attr('name') + '"]').val(jQuery(this).val()).trigger('change');
    });
    jQuery(".reset_variations").click(function() {
        jQuery(".isures-radio-variable input").removeAttr("checked");
        jQuery(".isures-option").removeClass("active");
    });
    jQuery('.isures-radio-variable input').each(function(index, element) {
        jQuery(element).removeAttr('disabled');
        let thisName = jQuery(element).attr('name');
        let thisVal = jQuery(element).attr('value');
        if (jQuery('select[name="' + thisName + '"] option[value="' + thisVal + '"]').is(':disabled')) {
            jQuery(element).prop('disabled', true);
        }
    });

    jQuery('.isures-option').each(function() {
        let checked = jQuery(this).find('input[type="radio"]').attr("checked");


        if (checked == "checked") {
            jQuery(this).addClass('active');
        }

    });

    jQuery(".isures-radio-variable").each(function() {
        let btn = jQuery(this).find(".isures-option");


        jQuery(btn).click(function() {
            btn.removeClass("active");
            jQuery(this).addClass("active");

        });

    });

});