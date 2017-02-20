/* global jQuery */
var $ = jQuery;

$(document).ready(function(e) {
    ($('nav').find('a').click(function() {
        $.get(this.href, null, loaded);

        return false;
    }))
});

function loaded(e, d) {
    console.log(e);
    console.log(d);
}
