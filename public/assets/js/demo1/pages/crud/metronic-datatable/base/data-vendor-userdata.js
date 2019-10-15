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
            url: "/get-userdata",
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
                            title:'UserID',
                            textAlign: 'center',
                            template:function(pu_data)
                            {
                                var userid=pu_data.id;
                                var output = userid;
                                return output;
                            }
                            
                        },
                        {
                            field:'fname',
                            title:'Name',
                            template:function(pu_data)
                            {
                                var output="";
                                if(pu_data.fname!=null)
                                {
                                     output=pu_data.fname+"  "+pu_data.lname;
                                }
                                
                                
                               
                                return output;
                            }
                            
                        },
                        {
                            field: 'name',
                            title: 'Username',
                            textAlign: 'center',
                            template: function (pu_data) {


                                var username = pu_data.name;
                                var output=username;

                                return output.toString();
                            }
                        },
                        {
                            field: 'email',
                            title: 'Email',
                            textAlign: 'center',
                            template:function(pu_data) {
                                var output=pu_data.email;
                                return output;
                            }
                        },
                        
                        
                        {
                            field: 'Edit_id',
                            title: 'Edit',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;

                                var output = '\
                        <a  href="/edit/user/' + id + '"  class="btn btn-sm btn-clean btn-icon btn-icon-md " title="Edit details">\
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
                            field: 'del_id',
                            title: 'Delete',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;
                               
                                    var output = '\
                                    <a  data-id="'+id+'" data-username="'+data.name+'"class="btn btn-sm btn-clean btn-icon btn-icon-md delbtn" title="Edit details">\
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
});
