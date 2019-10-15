"use strict";

// Class definition
var KTAppContactsAdd = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;


    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_apps_contacts_add', {
            startStep: 1,
        });

        // Validation before going to next page
        wizard.on('beforeNext', function (wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop(); // don't go to the next step
            }
        })

        // Change event
        wizard.on('change', function (wizard) {
            KTUtil.scrollTop();
            $('#name').html($('#Bundle_Name').val());
            $('#description').html($('#Bundle_description').val());
            $('#file_name').html($('#file_url1').val());
            $('#cost').html($('#Bundle_turn_time').val());
            $('#fee').html($('#Bundle_Fee').val());
            $('#width').html($('#Bundle_Width').val());
            $('#height').html($('#Bundle_Height').val());
            $('#length').html($('#Bundle_Length').val());
            $('#weight').html($('#Bundle_Weight').val());
            $('#time').html($('#Bundle_Model').val());
            //$('#filenames').html($('#selectedFiles').val());

        });
    }

    var initValidation = function () {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                // Step 1
                image: {
                    required: true
                },
                Bundle_Name: {
                    required: true
                },
                Bundle_description: {
                    required: true,
                },
                Bundle_turn_time: {
                    required: true,
                },
                Bundle_Width: {
                    required: true,

                },
                file_url: {
                    required: true,
                },
                Bundle_Length: {
                    required: true,
                },
                Bundle_Height: {
                    required: true,
                },
                Bundle_turn_time: {
                    required: true,
                },
                Bundle_Id: {
                    required: true,
                },
                Bundle_Model: {
                    required: true,
                },
                Bundle_Fee: {
                    required: true,
                }
            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    "text": "There are some errors in your submission. Please correct them.",
                    "type": "error",
                    "buttonStyling": false,
                    "confirmButtonClass": "btn btn-brand btn-sm btn-bold"
                });
            },

            // Submit valid form
            submitHandler: function (form) {

            }
        });
    }

    var initSubmit = function () {
        // var i = 1;
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
                KTApp.progress(btn);


                var formdata = new FormData();
                //console.log( $('#files')[0].files[0]);

                // var files =$('#files')[0].files;
                // console.log(files.length);
                var files = $('#files')[0].files;
                console.log(files.length);

                for (var i = 0; i < files.length; i++) {
                    formdata.append("files[]", files[i], files[i]['name']);

                }

                var d = new Date();
                var n = d.getTime();
                var j = 0;


                formdata.append('Bundle_Name', $("#Bundle_Name").val());
                formdata.append('Bundle_description', $("#Bundle_description").val());
                formdata.append('Bundle_Id', n);
                formdata.append('Bundle_Width', $("#Bundle_Width").val());
                formdata.append('Bundle_Weight', $("#Bundle_Weight").val());
                formdata.append('Bundle_Height', $("#Bundle_Height").val());
                formdata.append('Bundle_Length', $("#Bundle_Length").val());
                formdata.append('Bundle_turn_time', $("#Bundle_turn_time").val());
                formdata.append('Bundle_Model', $("#Bundle_Model").val());
                formdata.append('image', $("#image")[0].files[0]);
                // formdata.append('files', $("#files")[0].files[0]);
                formdata.append('image_url', $("#image_url").val());
                formdata.append('Bundle_Fee', $("#Bundle_Fee").val());
                formdata.append('file_url', $("#file_url").val());
                formdata.append('Units_in_Stock', j);

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '/bundles',
                    processData: false,
                    contentType: false,
                    data: formdata,
                    success: function (data) {

                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
                        swal.fire({
                            "title": "",
                            "text": "The application has been successfully submitted!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                            if (result.value) {
                                window.location.href = "/bundles";
                            } else {
                                //
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
            formEl = $('#kt_apps_contacts_add_form');

            initWizard();
            initValidation();
            initSubmit();

        }
    };
}();

jQuery(document).ready(function () {
    KTAppContactsAdd.init();
});
