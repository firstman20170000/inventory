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
            $('#qty').html($('#ship_qty_tot').val())
            $('#shi_fname').html($('#Fname').val());
            $('#shi_lname').html($('#Lname').val());
            $('#addr_line1').html($('#address1').val());
            $('#addr_line2').html($('#address2').val());
            $('#Post_code_lb').html($('#postcode').val());
            $('#ship_method').html($('#ship_type option:selected').text());
            $('#city_lb').html($('#city').val());
            if($('#country').val()=='United States'){
            
              $('#state_lb').html($('#state').val());
            } else {
               $('#state_lb').html($('#state1').val());
            }
            
            $('#country_lb').html($('#country').val())
            $('#telephone_lb').html($('#telephone').val());
            $('#ref_lb').html($('#ref').val());
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
                
                ship_qty_tot:{
                    required:true,
                },
                Fname: {
                    required: true,
                  
                },
                Lname: {
                    required: true,
                },
                address1: {
                    required: true,

                },
                city:{
                    required: true,
                    
                },
                postcode:{
                    required:true,
                    
                },
                country:{
                   required:true,
                },
                ref:{
                  required:true,
                }
              
            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();
                var shiptot=$('#ship_qty_tot').val();
                if(shiptot=="")
                {
                    swal.fire({
                        "title": "",
                        "text": "please add the bundle for dropshipping.",
                        "type": "error",
                        "buttonStyling": false,
                        "confirmButtonClass": "btn btn-brand btn-sm btn-bold"
                    });

                } else {
                    swal.fire({
                        "title": "",
                        "text": "There are some errors in your submission. Please correct them.",
                        "type": "error",
                        "buttonStyling": false,
                        "confirmButtonClass": "btn btn-brand btn-sm btn-bold"
                    });
                }
                
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
                

                var d = new Date();
                var n = d.getTime();
                var j = 0;


                formdata.append('fname', $("#Fname").val());
                formdata.append('lname', $("#Lname").val());
                formdata.append('address1', $('#address1').val());
                formdata.append('address2', $('#address2').val());
                formdata.append('postcode', $('#postcode').val());
                formdata.append('city', $('#city').val());
                 if($('#country').val()=='United States'){
                     formdata.append('state', $('#state').val());
                } else {
                    formdata.append('state', $('#state1').val());
                }
               
                formdata.append('telephone', $('#telephone').val());
                $('#dropship').find("tr").each(function(){
                    var bundle_id=$(this).attr("data-bundle-id");
                    var bundleqty=$(this).find(".bundleqty").html();
                    formdata.append('bundleid[]',bundle_id);
                    formdata.append('qty[]',bundleqty);
                    
                })
                formdata.append('order_id',n);
                formdata.append('country',$('#country').val());
                formdata.append('ref',$('#ref').val());
                formdata.append('ship_type',$('#ship_type').val());
                // formdata.append('image', $("#image")[0].files[0]);
                // // formdata.append('files', $("#files")[0].files[0]);
                // formdata.append('image_url', $("#image_url").val());
                // formdata.append('Bundle_Fee', $("#Bundle_Fee").val());
                // formdata.append('file_url', $("#file_url").val());
              
                // See: http://malsup.com/jquery/form/#ajaxSubmit
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '/DSOshipping',
                    processData: false,
                    contentType: false,
                    data: formdata,
                    success: function (data) {

                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
                         swal.fire({
                            "title": "",
                            "text": "A new Dropshipment have been submitted successfully!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                            window.location.href = "/view/dropship-table";
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
