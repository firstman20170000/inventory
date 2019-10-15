'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {
		var dataJSONArray = JSON.parse('[{"RecordID":1,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":1,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":2,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":3,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":3,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":4,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":4,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Air Freight","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":5,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":6,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":7,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":1,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":8,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":9,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Sea Feight","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":10,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":3,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":11,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Air Freight","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":12,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":13,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":14,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":4,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":15,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Air Freight","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":16,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":17,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":1,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":18,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":19,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Air Freight","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":20,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":3,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":21,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +
			'{"RecordID":22,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":2,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null},\n' +

			'{"RecordID":23,"Number":"SO-09890-BP","BundleName":"3 Pack cloth & Glasses Pouch","Quantity":5,"GrossWeight":"2000gr","Cost":"$146","Method":"Express","Status":3,"Tracking":"RU0977098NL","Date":"01/12/2018","Actions":null}]');



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
					title: 'Shipment Number',
					template: function(row) 
					{
						return row.Number;
					},
				},
				{
					field: 'BundleName',
					title: 'Bundle Name',
				},
				{
					field: 'Quantity',
					title: 'Quantity',
				},
				{
					field: 'GrossWeight',
					title: 'Gross Weight',
				},
				{
					field: 'Cost',
					title: 'T.Cost',
				},
				{
					field: 'Method',
					title: 'S.Method',
				},
				{
					field: 'Status',
					title: 'Order Status',
					// callback function support for column rendering
					template: function(row) 
					{
						var status = {
							// 1: {'title': 'Pending222', 'class': 'kt-badge--brand'},
							1: {'title': 'Canceled', 'class': ' kt-badge--danger'},
							2: {'title': 'Delivered', 'class': ' kt-badge--primary'},
							3: {'title': 'Shipped', 'class': ' kt-badge--warning'},
							4: {'title': 'Pending', 'class': ' kt-badge--brand'},
							5: {'title': 'Processing', 'class': ' kt-badge--info'}
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
				},
				{
					field: 'Tracking',
					title: 'Tracking #',
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