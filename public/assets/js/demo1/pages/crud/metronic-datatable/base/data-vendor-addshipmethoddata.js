'use strict';
// Class definition

var KTDatatableDataLocalDemo = function () {
    // Private functions

    // demo initializer
    var demo = function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "get",
            url: "/get-shiptype",
            cache: false,
            success: function (data) {
                // var dataRes = JSON.parse(data);
                // var data = JSON.stringify(dataRes.data);
                // var data1 = JSON.stringify(dataRes.data1);


                var dataJSONArray = JSON.parse(data);
                console.log(dataJSONArray);
                var pu_data= JSON.stringify(dataJSONArray.data);
            
                var datatable = $('.kt-datatable').KTDatatable({
                    // datasource definition
                    data: {
                        type: 'local',
                        source: dataJSONArray,
                        pageSize: 10,
                    },
                    // layout definition
                    layout: {
                        scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                        // height: 450, // datatable's body's fixed height
                        footer: false, // display/hide footer
                    },

                    // column sorting
                    sortable: true,

                    pagination: true,

                    search: {
                        input: $('#generalSearch'),
                    },

                    // columns definition
                    columns: [{
                            field: 'RecordID',
                            title: '#',
                            sortable: false,
                            width: 20,
                            type: 'number',
                            selector: {
                                class: 'kt-checkbox--solid'
                            },
                            textAlign: 'center',
                        },
                        {
                            field:'id',
                            title:'Method ID',
                            textAlign: 'center',
                            template:function(pu_data)
                            {

                                var output = pu_data.id;
                                return output;
                            }
                            
                        },
                        {
                            field:'Courier_Name',
                            title:'Courier',
                            textAlign:'center',
                            template:function(pu_data)
                            {
                                var output=pu_data.Courier_Name;
                                return output.toString();
                            }
                            
                        },
                        {
                            field: 'typename',
                            title: 'Type',
                            textAlign: 'center',
                            template: function (pu_data) {


                                var type = pu_data.typename;
                                return type;
                            }
                        },
                        {
                            field: 'shipping_time',
                            title: 'Shipping Time',
                            textAlign: 'center',
                            template:function(pu_data) {
                               var output=pu_data.shipping_time+" Days";
                                return output;
                            }
                        },

                        {
                            field: 'updated_at',
                            title: 'Date Updated',
                            type: 'date',
                            format: 'DD/MM/YYYY',
                            template: function (data) {

                                var date = data.updated_at;
                                var output = date.substring(0, 10);
                                return output;
                            }
                        },
                        {
                            field: 'edit',
                            title: 'edit',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;

                                var output = '\
                        <a href="/edit/ship-type/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
                        </a>';
                                // var output = `
                                // <span class="dropdown">
                                //     <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                //       <i class="la la-ellipsis-h"></i>
                                //     </a>
                                //     <div class="dropdown-menu dropdown-menu-right">
                                //         <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                //         <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                //         <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                                //     </div>
                                // </span>
                                // <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                //   <i class="la la-edit"></i>
                                // </a>`;

                                return output;
                            }
                            // template: function() {
                            // 	return '\
                            // 	\
                            // 	<a href="/home/id/edit" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
                            // 		<i class="la la-edit"></i>\
                            // 	</a>\
                            // ';
                            // },
                        },
                        {
                            field: 'delete',
                            title: 'delete',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;
                                   
                                    var output = '\
                            <a data-id='+id+' class="btn aevent btn-sm btn-clean btn-icon btn-icon-md" title="delete details" style="cursor:pointer">\
                                <i class="la la-edit"></i>\
                            </a>';
                            console.log(output);
                                
                                // var output = `
                                // <span class="dropdown">
                                //     <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                //       <i class="la la-ellipsis-h"></i>
                                //     </a>
                                //     <div class="dropdown-menu dropdown-menu-right">
                                //         <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                //         <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                //         <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                                //     </div>
                                // </span>
                                // <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                //   <i class="la la-edit"></i>
                                // </a>`;

                                return output;
                            }
                            // template: function() {
                            // 	return '\
                            // 	\
                            // 	<a href="/home/id/edit" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
                            // 		<i class="la la-edit"></i>\
                            // 	</a>\
                            // ';
                            // },
                        },
                    ],
                }); //expected to return value1, but it returns undefined instead.
            }
        });


    };

    return {
        // Public functions
        init: function () {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function () {
    KTDatatableDataLocalDemo.init();
    $(document).on('click','.aevent',function()
    {
         var dataid=$(this).attr('data-id');
         var disp="Are you sure you want to remove this method method  ?";
                  swal.fire({
                                "title": "",
                                "text": disp,
                                "type": 'warning',
                                "showCancelButton": "true",
                                "confirmButtonClass": 'btn btn-secondary',
                                "cancelButtonClass":'btn btn-primary',
                            }).then(result => {
                                if (result.value) {
                                  $.ajaxSetup({
                                      headers: {
                                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                      }
                                  });
                                  var formdata = new FormData();
                                  formdata.append('deleid',dataid);
                                  $.ajax({
                                          type: 'post',
                                          enctype: 'multipart/form-data',
                                          url: '/delete/methodid',
                                          processData: false,
                                          contentType: false,
                                          data: formdata,
                                          success: function (data) {
                                               location.reload(); 
                                          }
                                      });
                                   
                                } else {
                                    //
                                }
                            })
    })    
});
