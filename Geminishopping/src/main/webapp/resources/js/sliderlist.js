var $table = $('#ListOfSliderTable');

if ($table.length) {
	var jsonUrl =window.contextRoot +'/json/data/all/sliders';
	


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
					data: 'image_url',
					mRender: function(data, type, row) {
						return '<img src="'+window.contextRoot+ '/resource/images/slider' + data + '.jpg" height="120" width="120;"/> ';
					}
				},
				{
					data: 'heading'
				},
				
				
				{
					data: 'description',
					
				},
				{
					data:'id',
					mRender:function(data,type,row)
					{
						var str="";
						str+='<a href="	'+window.contextRoot +'/admin/'+data+'/slider">';
						str+='<button type="button" class="btn btn-info">EDIT</button>';
						str+='</a>';
		
						return str;
					}
		
				},
				{
					data:'id',
					mRender:function(data,type,row)
					{
						var str="";
						str+='<a href="	'+window.contextRoot +'/admin/'+data+'/sliderdelete">';
						str+='<button type="button" class="btn btn-danger">Delete</button>';
						str+='</a>';
		
						return str;
					}
		
				}	],


	}
	);

}

