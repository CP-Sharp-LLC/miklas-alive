/* global jQuery */
var $ = jQuery;

var page = {
    request: null,
    main: $('#main'),

};

$(document).ready(function(e) {
    $('nav').find('a').click(function() {
        loadingContainer();

        page.request = $.get(this.href, {
            ajaxloaded: true
        }, loaded).fail(errorContainer);
        return false;
    });
});

function loaded(data, status, container) {


}

function errorContainer(e, f, g) {
    console.log(e);
}

function loadingContainer() {
    if (page.request != null) {
        page.request.abort();
    }
}

function newContainer(data) {

}
