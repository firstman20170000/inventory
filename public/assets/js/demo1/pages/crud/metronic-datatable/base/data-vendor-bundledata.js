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
            url: "/get-bundles",
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
                            field:'image_url',
                            title:'Bundle Image',
                            textAlign: 'center',
                            template:function(pu_data)
                            {
                                var img = pu_data.image_url;

                                var output = '\
                                    <div class="kt-user-card-v2 kt-user-card-v2--uncircle" style=\"margin:auto!important\">\
                                        <div class="kt-user-card-v2__pic" style=\"margin:auto\">\
                                            <img src="' + img + '" alt="photo">\
                                        </div>\
                                    </div>';

                                return output;
                            }
                            
                        },
                        {
                            field:'bundle_name',
                            title:'Bundle Name',
                            textAlign:'center',
                            template:function(pu_data)
                            {
                                var output=pu_data.bundle_name;
                                return output.toString();
                            }
                            
                        },
                        {
                            field: 'bundle_id',
                            title: 'Bundle#',
                            textAlign: 'center',
                            template: function (pu_data) {


                                var time = pu_data.bundle_id;
                                var prid=pu_data.id;
                                var output = "BDL-" + time + "-" +prid+"-BP";

                                return output.toString();
                            }
                        },
                        {
                            field: 'Est_Cost',
                            title: 'Est Cost',
                            textAlign: 'center',
                            template:function(pu_data) {
                                var output="$"+formatNumber(pu_data.est_cost.toFixed(2));
                                return output;
                            }
                        },
                        {
                            field: 'bunding_fee',
                            title: 'Bundling Fee',
                            textAlign: 'center',
                            template:function(pu_data)
                            {
                                console.log(pu_data);
                                var po_qty=pu_data.bundling_fee;
                                var output="$"+formatNumber(po_qty);
                                return output.toString();
                            }

                        },
                        {
                            field: 'Units in stock',
                            title: 'Units in Stock',
                            textAlign: 'center',
                            width: 110,
                            template:function(pu_data)
                            {
                                var stock=formatNumber(pu_data.bundles_in_stock);
                                var output="<b>"+stock+"</b>";
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
                            field: 'id',
                            title: 'View',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;

                                var output = '\
                        <a href="/view/bundle/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
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
                            field: 'Edit_id',
                            title: 'Edit',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;
                                var status_id=data.status_id;
                                if(status_id==5||status_id==6)
                                {
                                    var output = '\
                                    <a class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
                                        <i class="la la-edit"></i>\
                                    </a>';    

                                } else{
                                    var output = '\
                                    <a href="/edit/bundle/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
                                        <i class="la la-edit"></i>\
                                    </a>';    
                                } 
                                 
                                
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
