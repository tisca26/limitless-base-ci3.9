var Select2Selects = function () {
    var _componentSelect2 = function () {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        }
        $('.select-search').select2({
            placeholder: 'Seleccione menú',
            allowClear: true
        });

        //
        // Customize matched results
        //

        // Setup matcher
        function matchStart(term, text) {
            if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
                return true;
            }

            return false;
        }

        // Initialize
        $.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {
            $('.select-matched-customize').select2({
                minimumResultsForSearch: Infinity,
                placeholder: 'Select a State',
                matcher: oldMatcher(matchStart)
            });
        });
    };

    return {
        init: function () {
            _componentSelect2();
        }
    }
}();
var InputsCheckboxesRadios = function () {
    var _componentUniform = function () {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }
        // Default initialization
        $('.form-check-input-styled').uniform();
    };

    return {
        initComponents: function () {
            _componentUniform();
        }
    }
}();

var FormValidation = function () {
    var _componentValidation = function () {
        if (!$().validate) {
            console.warn('Warning - validate.min.js is not loaded.');
            return;
        }
        var validator = $('.form-validate-jquery').validate({
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-invalid-label',
            successClass: 'validation-valid-label',
            validClass: 'validation-valid-label',
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            success: function (label) {
                label.addClass('validation-valid-label').text('Correcto.'); // remove to hide Success message
            },

            // Different components require proper error label placement
            errorPlacement: function (error, element) {

                // Unstyled checkboxes, radios
                if (element.parents().hasClass('form-check')) {
                    error.appendTo(element.parents('.form-check').parent());
                }

                // Input with icons and Select2
                else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }

                // Input group, styled file input
                else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                }

                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                $('#btn_submit').attr('disabled', true).text('Cargando...');
                form.submit();
            },
            rules: {
                nombre: {
                    required: true,
                    minlength: 2
                },
                parent_id: {
                    required: true
                },
                orden: {
                    required: true
                }
            }
        });

        // Reset form
        $('#reset').on('click', function () {
            validator.resetForm();
        });
    };

    return {
        init: function () {
            _componentValidation();
        }
    }
}();


function valida_radio_enlace() {
    if ($('#radio_res').is(':checked')) {
        $('#page_uri').prop('disabled', true);
        $('#resource_id').prop('disabled', false);
        $('#page_res').prop('disabled', false);
        $('.select-search').trigger('change');
    }
    if ($('#radio_url').is(':checked')) {
        $('#page_uri').prop('disabled', false);
        $('#resource_id').prop('disabled', true);
        $('#page_res').prop('disabled', true);
        $('.select-search').trigger('change');
    }
};

document.addEventListener('DOMContentLoaded', function () {
    Select2Selects.init();
    InputsCheckboxesRadios.initComponents();
    FormValidation.init();
    valida_radio_enlace();
    $("input[name=radio_url]:radio").change(function () {
        valida_radio_enlace();
    });
});