"use strict";
document.addEventListener("DOMContentLoaded", function(e) {
    {
        const c = document.querySelector(".price-duration-toggler"),
            t = [].slice.call(document.querySelectorAll(".price-monthly")),
            o = [].slice.call(document.querySelectorAll(".price-yearly"));

        function n() {
            c.checked ? (o.map(function(e) {
                e.classList.remove("d-none")
            }), t.map(function(e) {
                e.classList.add("d-none")
            })) : (o.map(function(e) {
                e.classList.add("d-none")
            }), t.map(function(e) {
                e.classList.remove("d-none")
            }))
        }
        n(), c.onchange = function() {
            n()
        }
    }
});