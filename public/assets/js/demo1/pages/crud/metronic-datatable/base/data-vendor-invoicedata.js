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
            url: "/get-inovice",
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
                            field:'invoice_number',
                            title:'Invoice Number',
                            textAlign: 'center',
                            template:function(pu_data)
                            {

                                var output = "INV-"+pu_data.invoice_number+"-"+pu_data.id+"-BP";

                                return output;
                            }
                            
                        },
                        {
                            field:'type',
                            title:'Type',
                            textAlign:'center',
                            template:function(pu_data)
                            {
                                var type=pu_data.type;
                                var output="";
                                if(type=='po')
                                {
                                    output="Purchase Order";
                                }
                                if(type=='mtso')
                                {
                                    output="Make to StockOrder";
                                }
                                if(type=='DSO')
                                {
                                    output="Dropship Order";
                                }
                                if(type=='FSO')
                                {
                                    output="FBA Shipments";
                                }
                                
                                return output;
                            }
                            
                        },
                        {
                            field: 'Invoice_total',
                            title: 'Amount',
                            textAlign: 'center',
                            template: function (pu_data) {


                                var output ="$"+formatNumber(pu_data.Invoice_total);
                                return output.toString();
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
                                if(status_id==0)
                                {
                                    var output="<span class=\"label label-warning\" style=\"color:Gray\">Unpaid</span>";
                                }
                                if(status_id==1)
                                {
                                    var output="<span class=\"label label-success\" style=\"color:Purple\">Paid</span>";
                                }
                                if(status_id==2)
                                {
                                    var output="<span class=\"label label-success\" style=\"color:red\">Cancelled</span>";
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
                                    <a href="/view/inovice/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
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
