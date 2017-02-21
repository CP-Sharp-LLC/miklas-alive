/* global jQuery */
var $ = jQuery;

var page = {
    navlinks: null,
    request: null,
    main: null,
    cached: null,

    init: function() {
        page.main = $('#main');
        page.cached = new Array();
        page.navlinks = $('nav').find('a');
    },

    beginLoad: function() {
        if (page.request != null) {
            page.request.abort();
        }
    },

    errorLoad: function(e) {
        console.log(e);
    },

    successLoad: function(data, status, container) {
        page.request = null;

        page.main.html(data);
    }
};

$(document).ready(function(e) {
    page.init();
    page.navlinks.click(function() {
        page.beginLoad();

        page.request = $.get(this.href, {
                ajaxloaded: true
            }, page.successLoad)
            .fail(function(e) {
                page.errorLoad(e)
            });
        return false;
    });
});
