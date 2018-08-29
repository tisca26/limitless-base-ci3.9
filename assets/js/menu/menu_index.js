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
        $('.sweet_alert').on('click', function () {
            $btn = $(this);
            $elem_id = $btn.attr('data-elem-id');
            $elem_nombre = $btn.attr('data-elem-nombre');
            $elem_type = $btn.attr('data-elem-type');
            if ($elem_type == 'estatus'){
                $title01 = '¿Desea cambiar el estatus de ' + $elem_nombre + '?';
                $url01 = $_base_url + 'menu/cambiar_estatus/' + $elem_id;
            } else if ($elem_type == 'borrar'){
                $title01 = '¿Desea borrar el menú ' + $elem_nombre + '?';
                $url01 = $_base_url + 'menu/borrar/' + $elem_id;
            } else {
                return alert('Error');
            }
            swal({
                title: $title01,
                text: 'Se modificará el menú',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, por favor',
                cancelButtonText: 'Cancelar'
            }).then(result => {
                if (result.value) {
                    // handle confirm
                    console.log(result.value);
                    console.log('Envia petición ok');
                    $.get($url01, {}).done(async function () {
                        swal({
                            title: '¡Éxito!',
                            text: 'Se modificó el registro correctamente.',
                            type: 'success'
                        }).then(result => {
                            if (result.value) {
                                console.log('Elemento modificado, se hace refresh manual');
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
    SweetAlert.initComponents();
});
