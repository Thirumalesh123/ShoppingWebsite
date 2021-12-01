

var $table = $('#ListOfcontactTable');

if ($table.length) {
	var jsonUrl =window.contextRoot +'/json/data/all/contact';
	


	$table.DataTable({

		lengthMenu: [[2, 4, 8, -1], ['2 Records', '4 Records', '8 Records', 'All']],
		pageLength: 5,
		ajax: {
			url: jsonUrl,
			dataSrc: ''
		},

		columns:
			[
				
				{
					data: 'name'
				},
				{
					data: 'phoneno'
				},
				{
					data: 'email'
				},
				{
					data: 'message'
				}
			],


	}
	);

}

