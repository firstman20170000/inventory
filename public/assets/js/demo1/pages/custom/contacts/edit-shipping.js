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
            $('#tot_bundle_co').html($('#bundle_tot').val());
            $('#qty').html($('#ship_qty_tot').val());
            $('#fba_shipment_id').html($('#FBA_Shipment_id').val());
            $('#fba_asin').html($('#FBA_asin').val());
            $('#ship_method').html($('#ship_type option:selected').text());
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
                
                master_cartoon: {
                    required: true
                },
                ship_qty_tot: {
                    required: true,
                  
                },
                FBA_Shipment_id: {
                    required: true,
                },
                FBA_asin: {
                    required: true,

                },
                ship_type:{
                    required: true,
                },
                barcode:{
                    required: true,
                    accept:'pdf',
                },
                shiplabel:{
                    required:true,
                    accept:'pdf'
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
                        "text": "please add the master cartoon.",
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


                formdata.append('bundle_tot', $("#bundle_tot").val());
                formdata.append('ship_qty_tot', $("#ship_qty_tot").val());
                formdata.append('Bundle_Id', $('#bundleid').val());
                formdata.append('FSO_ID', n);
                formdata.append('FBA_Shipment_id', $('#FBA_Shipment_id').val());
                formdata.append('FBA_asin', $('#FBA_asin').val());
                formdata.append('ship_type', $('#ship_type').val());
                formdata.append('barcode', $('#barcode')[0].files[0],$('#barcode')[0].files[0]['name']);
                console.log($('#barcode'));
                formdata.append('shiplabel', $('#shiplabel')[0].files[0], $('#shiplabel')[0].files[0]['name']);
                $('#package').find("tr").each(function(){
                    var pack_id=$(this).attr("data-packid");
                    var cartqty=$(this).find(".cartqty").html();
                    var bundle_pack_mc=$(this).find(".bundle_pack_mc").html();
                    formdata.append('packid[]',pack_id);
                    formdata.append('cartqty[]',cartqty);
                    formdata.append('bundle_pack_mc[]',bundle_pack_mc);
                })
                // formdata.append('image', $("#image")[0].files[0]);
                // // formdata.append('files', $("#files")[0].files[0]);
                // formdata.append('image_url', $("#image_url").val());
                // formdata.append('Bundle_Fee', $("#Bundle_Fee").val());
                // formdata.append('file_url', $("#file_url").val());
                formdata.append('Units_in_Stock', j);

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '/FSOshipping',
                    processData: false,
                    contentType: false,
                    data: formdata,
                    success: function (data) {

                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
                        swal.fire({
                            "title": "",
                            "text": "The shipping has been successfully submitted!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                            if (result.value) {
                                window.location.href = "/view/shipping-table";
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
