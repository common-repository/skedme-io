
jQuery(function ($) {
    var el = $('.skedme-range');
    if (! el.length) { return; }

    el.find('input').on('input', function (e) {
        var value = e.target.value;
        el.find('span').text(value);
    });
});
