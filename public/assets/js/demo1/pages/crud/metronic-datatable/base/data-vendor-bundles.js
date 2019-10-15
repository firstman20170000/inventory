'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"RecordID":1,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/1.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			
			'{"RecordID":2,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/3.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":3,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/2.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +

			'{"RecordID":4,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/1.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":5,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/2.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":6,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/1.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":7,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/3.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":8,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/4.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":9,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/5.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":10,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/2.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":11,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/1.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":12,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/3.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":13,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/2.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":14,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/1.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":15,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/2.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":16,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/3.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":17,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/1.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":18,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/2.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":19,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/3.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":20,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/4.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":21,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/5.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null},\n' +

			'{"RecordID":22,"ShipName":"https://keenthemes.com/metronic/preview/assets/media/project-logos/5.png","ItemName":"3 Pack cloth & Glasses Pouch","ItemID":"BDL-001-BP","Items":"5","Weight":"450g","BundlingFee":"$0.7","ShippingFee":"$1.5","Date":"01/12/2018","Actions":null}]');



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
			columns: [
				{
					field: 'RecordID',
					title: '#',
					sortable: false,
					width: 20,
					type: 'number',
					selector: {class: 'kt-checkbox--solid'},
					textAlign: 'center',
				},
				{
					field: "ShipName",
					title: "",
					width: 'auto',
					autoHide: false,
					// callback function support for column rendering
					template: function(data) {
						
						var img = data.ShipName;
						
						var output = '\
                        <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                            <div class="kt-user-card-v2__pic">\
								<img src="' + img +  '" alt="photo">\
							</div>\
						</div>';

						return output;
					}
				},
				{
					field: 'ItemName',
					title: 'Item Name',
				},
				{
					field: 'ItemID',
					title: 'Bundle ID',
				},
				
				{
					field: 'Items',
					title: '# Items',
				},
				{
					field: 'Weight',
					title: 'Weight',
				},
				{
					field: 'BundlingFee',
					title: 'Bundling Fee',
				},	
				{
					field: 'ShippingFee',
					title: 'Est. Bulk Bundling Fee',
				}		
				,  {
					field: 'Date',
					title: 'Date Updated',
					type: 'date',
					format: 'DD/MM/YYYY',
				}, {
					field: 'Actions',
					title: 'View',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
					template: function() {
						return '\
						\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
					';
					},
				}],
		});

		// $('#kt_form_status').on('change', function() {
		// 	datatable.search($(this).val().toLowerCase(), 'Status');
		// });

		// $('#kt_form_type').on('change', function() {
		// 	datatable.search($(this).val().toLowerCase(), 'Type');
		// });

		// $('#kt_form_status,#kt_form_type').selectpicker();

	};

	return {
		// Public functions
		init: function() {
			// init dmeo
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableDataLocalDemo.init();
});