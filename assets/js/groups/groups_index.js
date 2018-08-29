var DatatableBasic = function () {
    var _componentDatatableBasic = function () {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }
        // Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                emptyTable: "No hay datos disponibles",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                infoEmpty: "Mostrando 0 a 0 de 0 registros",
                infoFiltered: '(filtrado de _MAX_ registros totales)',
                loadingRecords: 'Cargando...',
                search: '<span>Buscar:</span> _INPUT_',
                ZeroRecords: 'No se encontraron registros',
                searchPlaceholder: 'Buscar...',
                lengthMenu: '<span>Ver:</span> _MENU_',
                paginate: {'first': 'Pri', 'last': 'Ult', 'next': 'Sig', 'previous': 'Prev'}
            }
        });

        $('.datatable-basic').DataTable({
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [2]
            }],
            stateSave: true
        });

    };
    return {
        init: function () {
            _componentDatatableBasic();
        }
    }
}();

var SweetAlert = function () {

    var _componentSweetAlert = function () {
        if (typeof swal == 'undefined') {
            console.warn('Warning - sweet_alert.min.js is not loaded.');
            return;
        }

        // Defaults
        var setCustomDefaults = function () {
            swal.setDefaults({
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-light'
            });
        }
        setCustomDefaults();
        // Warning alert
        $('.sweet_warning').on('click', function () {
            $btn = $(this);
            $elem_id = $btn.attr('data-elem-id');
            $elem_nombre = $btn.attr('data-elem-nombre');
            swal({
                title: '¿Desea borrar a ' + $elem_nombre + '?',
                text: 'Se hará un borrado suave',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, ¡borrar!',
                cancelButtonText: 'Cancelar'
            }).then(result => {
                if (result.value) {
                    // handle confirm
                    console.log(result.value);
                    console.log('Envia petición ok');
                    $.get($_base_url + "groups/borrar/" + $elem_id, {}).done(async function () {
                        swal({
                            title: '¡Éxito!',
                            text: 'Se borró el registro correctamente.',
                            type: 'success'
                        }).then(result => {
                            if (result.value) {
                                console.log('Elemento borrado, se hace refresh manual');
                                location.reload();
                            }
                        });
                        await sleep(2000);
                        location.reload();
                    }).fail(function () {
                        swal("Cancelado", "Error en la petición. No pasó nada", "error");
                        console.log('Error en la petición');
                    });
                } else {
                    // handle dismiss, result.dismiss can be 'cancel', 'overlay', 'close', and 'timer'
                    console.log(result.dismiss);
                    swal("Cancelado", "No pasó nada", "error");
                }
            });
        });
    };

    return {
        initComponents: function () {
            _componentSweetAlert();
        }
    }
}();
document.addEventListener('DOMContentLoaded', function () {
    DatatableBasic.init();
    SweetAlert.initComponents();
});
