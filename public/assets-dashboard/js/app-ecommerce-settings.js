"use strict";
$(function() {
        var e = $(".select2");
        e.length && e.each(function() {
            var e = $(this);
            e.wrap('<div class="position-relative"></div>').select2({
                dropdownParent: e.parent(),
                placeholder: e.data("placeholder")
            })
        })
    }),
    function() {
        var e = document.querySelectorAll(".phone-mask");
        e && e.forEach(function(e) {
            new Cleave(e, {
                phone: !0,
                phoneRegionCode: "US"
            })
        })
    }();