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
            $('#name').html($('#Item_Name').val());
            $('#description').html($('#Item_description').val());
            $('#file_name').html($('#file_url1').val());
            $('#stock').html($('#MOQ').val());
            $('#cost').html($('#EST_COST').val());
            $('#fee').html($('#Purchase_Fee').val());
            $('#width').html($('#Item_Width').val());
            $('#height').html($('#Item_Height').val());
            $('#length').html($('#Item_Length').val());
            $('#weight').html($('#Item_Weight').val());
            $('#time').html($('#LEAD_TIME').val());
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
                Item_Name: {
                    required: true
                },
                Item_description: {
                    required: true,
                },
                Item_Weight: {
                    required: true,
                },
                Item_Width: {
                    required: true,

                },
                profile_email: {
                    required: true,
                    email: true
                },
                file_url: {
                    required: true,
                },
                Item_Length: {
                    required: true,
                },
                Item_Height: {
                    required: true,
                },
                EST_COST: {
                    required: true,
                },
                MOQ: {
                    required: true,
                },
                Item_id: {
                    required: true,
                },
                LEAD_TIME: {
                    required: true,
                },
                Purchase_Fee: {
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
        var btn = formEl.find('#subbutton');

        btn.on('click', function (e) {
            alert("okay");
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

                formdata.append('Item_Name', $("#Item_Name").val());
                formdata.append('Item_description', $("#Item_description").val());
                formdata.append('Item_ID', n);
                formdata.append('Item_Width', $("#Item_Width").val());
                formdata.append('Item_Weight', $("#Item_Weight").val());
                formdata.append('Item_Height', $("#Item_Height").val());
                formdata.append('Item_Length', $("#Item_Length").val());
                formdata.append('EST_COST', $("#EST_COST").val());
                formdata.append('MOQ', $("#MOQ").val());
                formdata.append('LEAD_TIME', $("#LEAD_TIME").val());
                formdata.append('image', $("#image")[0].files[0]);
                // formdata.append('files', $("#files")[0].files[0]);
                formdata.append('image_url', $("#image_url").val());
                formdata.append('Purchase_Fee', $("#Purchase_Fee").val());
                formdata.append('file_url', $("#file_url").val());
                formdata.append('Units_in_Stock', j);

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '/items',
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
                                window.location.href = "/items";
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
