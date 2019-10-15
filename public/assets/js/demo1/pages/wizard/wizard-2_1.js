"use strict";

// Class definition
var KTWizard2 = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;

    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v2', {
            startStep: 1,
        });

        // Validation before going to next page
        wizard.on('beforeNext', function (wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop(); // don't go to the next step
            }
        });

        wizard.on('beforePrev', function (wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop(); // don't go to the next step
            }
        });

        // Change event
        wizard.on('change', function (wizard) {
            KTUtil.scrollTop();
        });
    }

    var initValidation = function () {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                //= Step 1
                item_name: {
                    required: true,
                },
                item_description: {
                    required: true,
                },
                item_weight: {
                    required: true,
                },
                item_width: {
                    required: true,

                },
                image: {
                    required: true,
                },
                file_url1: {
                    required: true,
                },


                item_length: {
                    required: true,
                },
                item_height: {
                    required: true,
                },
                estimated_cost: {
                    required: true,
                },
                moq: {
                    required: true,
                },
                item_id: {
                    required: true,
                },
                leadtime: {
                    required: true,
                },

            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    "text": "There are some errors in your submission. Please correct them.",
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary"
                });
            },

            // Submit valid form
            submitHandler: function (form) {

            }
        });
    }


    var initSubmit = function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var btn = formEl.find('[data-ktwizard-type="action-submit"]');

        btn.on('click', function (e) {
            e.preventDefault();

            if (validator.form()) {
                // See: src\js\framework\base\app.js

                var formdata = new FormData();
                formdata.append('id', $("#id").val());

                formdata.append('item_name', $("#item_name").val());
                formdata.append('item_description', $("#item_description").val());
                formdata.append('item_id', $("#item_id").val());
                formdata.append('item_width', $("#item_width").val());
                formdata.append('item_weight', $("#item_weight").val());
                formdata.append('item_height', $("#item_height").val());
                formdata.append('item_length', $("#item_length").val());
                formdata.append('estimated_cost', $("#estimated_cost").val());
                formdata.append('moq', $("#moq").val());
                formdata.append('leadtime', $("#leadtime").val());
                formdata.append('image', $("#image")[0].files[0]);
                formdata.append('image_url', $("#image_url").val());
                formdata.append('file_url1', $("#file_url1")[0].files[0]);
                formdata.append('file_url', $("#file_url").val());
                var id = $("#id").val();
                //var url ="inventory_view"
                //var form_action ="/"+url+"/"+id;
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: 'inventory/' + id,
                    processData: false,
                    contentType: false,
                    data: formdata,

                    success: function (data) {

                        //alert(data.success);
                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);

                        swal.fire({
                            "title": "",
                            "text": "The application has been successfully submitted!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                            if (result.value) {

                                window.location.href = "http://localhost:8000/inventory_view";

                            } else {
                                // handle dismissals
                                // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
                            }
                        })


                    }


                });
            }
        });
    }


    return {
        // public functions
        init: function () {
            wizardEl = KTUtil.get('kt_wizard_v2');
            formEl = $('#kt_form');

            initWizard();
            initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard2.init();
});
