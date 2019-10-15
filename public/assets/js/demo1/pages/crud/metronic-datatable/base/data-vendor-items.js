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
            url: "/get-items",
            cache: false,
            success: function (data) {
                // var dataRes = JSON.parse(data);
                // var data = JSON.stringify(dataRes.data);
                // var data1 = JSON.stringify(dataRes.data1);


                var dataJSONArray = JSON.parse(data);
                console.log(dataJSONArray)
                var data2 = JSON.stringify(dataJSONArray.data);
                console.log(data2)
                var data1 = JSON.stringify(dataJSONArray.data1);
                console.log(data1)
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
                            field: "Image_Url",
                            title: "Item Image",
                            width: 'auto',
                            autoHide: false,
                            // callback function support for column rendering
                            template: function (data) {

                                var img = data.Image_Url;

                                var output = '\
                        <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                            <div class="kt-user-card-v2__pic">\
								<img src="' + img + '" alt="photo">\
							</div>\
						</div>';

                                return output;
                            }
                        },
                        {
                            field: 'Item_Name',
                            title: 'Item Name',
                        },
                        {
                            field: 'item_ID',
                            title: 'Item ID',

                            template: function (data) {

                                var id = data.id;

                                var time = data.Item_ID;

                                var output = 'ITM-' + time + '-' + id + '-BP';

                                return output;
                            }
                        },

                        {
                            field: 'EST_COST',
                            title: 'Est.Cost',
			    template: function(data)
			    {
				var output="$"+formatNumber(data.EST_COST);
				return output;
			     }

                        },
                        {
                            field: 'MOQ',
                            title: 'MOQ',
                            template:function(data)
                            {
                               var output=formatNumber(data.MOQ);
                               return output;
                            }

                        },
                        {
                            field: 'Units_in_Stock',
                            title: 'Units In Stock',
                            template: function (data) {
                                console.log(data)
                                var data_Units_in_Stock = formatNumber(data.stock);
                               
                                // var data2 = JSON.parse(data1);
                                // var type = data2[0].type

                                    var output ="<b>"+data_Units_in_Stock+"</b>";
                                    return output;
                            }   

                        }, {
                            field: 'updated_at',
                            title: 'Date Updated',
                            type: 'date',
                            format: 'DD/MM/YYYY',
                            template: function (data) {

                                var date = data.updated_at;
                                var output = date.substring(0, 10);
                                return output;
                            }
                        }, {
                            field: 'id',
                            title: 'View',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function (data) {

                                var id = data.id;

                                var output = '\
                        <a href="view-items/' + id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
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
                        }
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
