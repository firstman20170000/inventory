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
            url: "/get-shipping",
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
                            field:'Sp_O_id',
                            title:'FSO#',
                            textAlign: 'center',
                            template:function(pu_data)
                            {

                                var output = "FSO-"+pu_data.Sp_O_id+"-"+pu_data.id+"-BP";

                                return output;
                            }
                            
                        },
                        {
                            field:'bundlename',
                            title:'Bundle Name',
                            textAlign:'center',
                            template:function(pu_data)
                            {
                                var output=pu_data.bundlename;
                                return output.toString();
                            }
                            
                        },
                        {
                            field: 'bundleid',
                            title: 'Bundle#',
                            textAlign: 'center',
                            template: function (pu_data) {


                                var output = pu_data.bundleid;
                                return output.toString();
                            }
                        },
                        {
                            field: 'QTY',
                            title: 'QTY',
                            textAlign: 'center',
                            template:function(pu_data) {
                               var qty=pu_data.QTY;
                               var bundle_qty=formatNumber(pu_data.Bundle_QTY);
                               var output=bundle_qty+"("+qty+")";
                                return output;
                            }
                        },
                        {
                            field: 'Tracking_num',
                            title: 'Tracking#',
                            textAlign: 'center',
                            template:function(pu_data)
                            {
                                
                                var po_qty=pu_data.Tracking_num;
                                var output=po_qty;
                                return po_qty;
                            }

                        },
                        {
                            field: 'order_tot',
                            title: 'Order total',
                            textAlign: 'center',
                           
                            template:function(pu_data)
                            {
                                if(pu_data.cost!=null)
                                {
                                  var stock="$"+formatNumber(pu_data.cost);
                                  return stock;
                                }
                                  
                                
                                
                            }

                        },
                        {
                            field: 'status_id',
                            title: 'Status',
                            textAlign: 'center',
                            width: 110,
                            template:function(pu_data)
                            {
                                var status_id=pu_data.status_id;
                                if(status_id==1)
                                {
                                    var output="<span class=\"label label-warning\" style=\"color:Gray\">PENDING QUOTATION</span>";
                                }
                                if(status_id==2)
                                {
                                    var output="<span class=\"label label-success\" style=\"color:Purple\">PENDING APPROVAL</span>";
                                }
                                if(status_id==3)
                                {
                                    var output="<span class=\"label label-info\" style=\"color:Green\">APPROVED</span>";
                                }if(status_id==4)
                                {
                                    var output="<span class=\"label label-info\" style=\"color:orange\">PROCESSING</span>";
                                }if(status_id==5)
                                {
                                    var output="<span class=\"label label-danger\" style=\"color:blue\">COMPLETED</span>";
                                }if(status_id==6)
                                {
                                    var output="<span class=\"label label-light\" style=\"color:Red\">CANCELED</span>";
                                }
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
                        <a href="/view/shipping/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
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
                                    <a href="/edit/shipping/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
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
