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
                apellido_paterno: {
                    required: true,
                    minlength: 2
                },
                apellido_materno: {
                    required: true,
                    minlength: 2
                },
                correo: {
                    email: true
                },
                username: {
                    required: true,
                    minlength: 2
                },
                passwd: {
                    required: true,
                    minlength: 4
                },
                'groups[]': {
                    required: true
                }
            },
            messages: {
                'groups[]': {
                    required: 'Debe seleccionar al menos 1 campo'
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

document.addEventListener('DOMContentLoaded', function () {
    InputsCheckboxesRadios.initComponents();
    FormValidation.init();
});