'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"RecordID":1,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":2,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":3,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":4,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":5,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":6,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":7,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":8,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":9,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":4,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":5,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":6,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":7,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":8,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":9,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":10,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":11,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":12,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":13,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":15,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":16,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":17,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":18,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":19,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":20,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":21,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":22,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":23,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":24,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":25,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":26,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":27,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":28,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":1,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":29,"Number":"INV-09890-BP","OrderID":"PO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":30,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":31,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":32,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":3,"Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":33,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null},\n' +
			
			'{"RecordID":34,"Number":"INV-09890-BP","OrderID":"SO-09890-BP","Amount":"$146","Status":2,"Date":"01/12/2018","Actions":null}]');


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
					field: 'Number',
					title: 'Invoice Number',
					template: function(row) 
					{
						return row.Number;
					},
				},
				{
					field: 'OrderID',
					title: 'Order ID',
				},
				{
					field: 'Amount',
					title: 'Invoice Amount',
				},
				{
					field: 'Status',
					title: 'Invoice Status',
					// callback function support for column rendering
					template: function(row) 
					{
						var status = {
							// 1: {'title': 'Pending222', 'class': 'kt-badge--brand'},
							1: {'title': 'Canceled', 'class': ' kt-badge--danger'},
							2: {'title': 'Paid', 'class': ' kt-badge--primary'},
							// 4: {'title': 'Success', 'class': ' kt-badge--success'},
							// 5: {'title': 'Info', 'class': ' kt-badge--info'},
							// 6: {'title': 'Canceled', 'class': ' kt-badge--danger'},
							3: {'title': 'Unpaid', 'class': ' kt-badge--warning'},
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
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