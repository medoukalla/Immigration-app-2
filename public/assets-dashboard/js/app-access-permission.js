"use strict";
$(function() {
    var e, a = $(".datatables-permissions"),
        d = "app-user-list.html";
    a.length && (e = a.DataTable({
        ajax: assetsPath + "json/permissions-list.json",
        columns: [{
            data: ""
        }, {
            data: "id"
        }, {
            data: "name"
        }, {
            data: "assigned_to"
        }, {
            data: "created_date"
        }, {
            data: ""
        }],
        columnDefs: [{
            className: "control",
            orderable: !1,
            searchable: !1,
            responsivePriority: 2,
            targets: 0,
            render: function(e, a, t, s) {
                return ""
            }
        }, {
            targets: 1,
            searchable: !1,
            visible: !1
        }, {
            targets: 2,
            render: function(e, a, t, s) {
                return '<span class="text-nowrap">' + t.name + "</span>"
            }
        }, {
            targets: 3,
            orderable: !1,
            render: function(e, a, t, s) {
                for (var n = t.assigned_to, r = "", o = {
                        Admin: '<a href="' + d + '"><span class="badge bg-label-primary m-1">Administrator</span></a>',
                        Manager: '<a href="' + d + '"><span class="badge bg-label-warning m-1">Manager</span></a>',
                        Users: '<a href="' + d + '"><span class="badge bg-label-success m-1">Users</span></a>',
                        Support: '<a href="' + d + '"><span class="badge bg-label-info m-1">Support</span></a>',
                        Restricted: '<a href="' + d + '"><span class="badge bg-label-danger m-1">Restricted User</span></a>'
                    }, l = 0; l < n.length; l++) r += o[n[l]];
                return '<span class="text-nowrap">' + r + "</span>"
            }
        }, {
            targets: 4,
            orderable: !1,
            render: function(e, a, t, s) {
                return '<span class="text-nowrap">' + t.created_date + "</span>"
            }
        }, {
            targets: -1,
            searchable: !1,
            title: "Actions",
            orderable: !1,
            render: function(e, a, t, s) {
                return '<span class="text-nowrap"><button class="btn btn-sm btn-icon me-2" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ti ti-edit"></i></button><button class="btn btn-sm btn-icon delete-record"><i class="ti ti-trash"></i></button></span>'
            }
        }],
        order: [
            [1, "asc"]
        ],
        dom: '<"row mx-1"<"col-sm-12 col-md-3" l><"col-sm-12 col-md-9"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"<"me-3"f>B>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        language: {
            sLengthMenu: "Show _MENU_",
            search: "Search",
            searchPlaceholder: "Search.."
        },
        buttons: [{
            text: "Add Permission",
            className: "add-new btn btn-primary mb-3 mb-md-0 waves-effect waves-light",
            attr: {
                "data-bs-toggle": "modal",
                "data-bs-target": "#addPermissionModal"
            },
            init: function(e, a, t) {
                $(a).removeClass("btn-secondary")
            }
        }],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(e) {
                        return "Details of " + e.data().name
                    }
                }),
                type: "column",
                renderer: function(e, a, t) {
                    t = $.map(t, function(e, a) {
                        return "" !== e.title ? '<tr data-dt-row="' + e.rowIndex + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : ""
                    }).join("");
                    return !!t && $('<table class="table"/><tbody />').append(t)
                }
            }
        },
        initComplete: function() {
            this.api().columns(3).every(function() {
                var a = this,
                    t = $('<select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option></select>').appendTo(".user_role").on("change", function() {
                        var e = $.fn.dataTable.util.escapeRegex($(this).val());
                        a.search(e ? "^" + e + "$" : "", !0, !1).draw()
                    });
                a.data().unique().sort().each(function(e, a) {
                    t.append('<option value="' + e + '" class="text-capitalize">' + e + "</option>")
                })
            })
        }
    })), $(".datatables-permissions tbody").on("click", ".delete-record", function() {
        e.row($(this).parents("tr")).remove().draw()
    }), setTimeout(() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm")
    }, 300)
});