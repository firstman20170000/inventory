'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"RecordID":1,"Date":"01/12/2018","TransactionType":"Shipping Order","Reference":"SO-09890-BP","UnitsChange":"-110"},\n' +
			'{"RecordID":2,"Date":"01/12/2018","TransactionType":"Purchase Order","Reference":"PO-09890-BP","UnitsChange":"200"},\n' +
			'{"RecordID":3,"Date":"01/12/2018","TransactionType":"Manual Adjusment","Reference":"PO-09890-BP","UnitsChange":"-11"},\n' +
			'{"RecordID":4,"Date":"01/12/2018","TransactionType":"Manual Adjusment","Reference":"Subtract","UnitsChange":"22"},\n' +
			'{"RecordID":5,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"Add","UnitsChange":"-110"},\n' +
			'{"RecordID":6,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":7,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":8,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":9,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":10,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":11,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":12,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":13,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":14,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +
			'{"RecordID":15,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"},\n' +

			'{"RecordID":16,"Date":"01/12/2018","TransactionType":"Purchase Order/Shipping Order/Manual Adjusment","Reference":"{PO ID/Shipping ID}","UnitsChange":"-110"}]');



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
					field: 'Date',
					title: 'Date Updated',
					type: 'date',
					format: 'DD/MM/YYYY',
				}, 
				{
					field: 'TransactionType',
					title: 'Transaction Type',
					
				},
				{
					field: 'Reference',
					title: 'Reference #',
				},
				{
					field: 'UnitsChange',
					title: 'Units Change',
				}
				
				
				],
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