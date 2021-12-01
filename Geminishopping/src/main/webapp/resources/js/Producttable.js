

var $table = $('#ListOfproductTable');

if ($table.length) {
	var jsonUrl =window.contextRoot +'/json/data/all/products';
	


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
					data: 'code',
					mRender: function(data, type, row) {
						return '<img src="'+window.contextRoot+ '/resource/images/productimages' + data + '.jpg" height="120" width="120;"/> ';
					}
				},
				{
					data: 'name'
				},
				{
					data: 'brand'
				},
				{
					data: 'cost',
					mRender: function(data, type, row) {
						return '&#8377;' + data
					}
				},
				{
					data: 'quantity',
					mRender: function(data, type, row) {
						if(data<1){
							return '<span style="color:red">Out Of Stock</span>';
						}
						return data;
					}
				},
				{
					data:'isactive',
					mRender: function(data, type, row) {
						var str='';
						str+="<label class='switch'>"
						if(data==true){
							str+='<input type="checkbox" checked=checked value="'+row.id+'"/>';
						}
						else{
							str+='<input type="checkbox" value="'+row.id+'"/>';
						}
						str+=' <span class="slider round"></span></label>';
						return str;
					}	
				},{
					data:'id',
					mRender:function(data,type,row)
					{
						var str="";
						str+='<a href="	'+window.contextRoot +'/admin/'+data+'/product">';
						str+='<button type="button" class="btn btn-info">EDIT</button>';
						str+='</a>';
		
						return str;
					}
		
				}	
			],
			initComplete:function(){
				var api=this.api();
				api.$('.switch input[type="checkbox"]').on('change',function(){
					var checkbox=$(this);
					var checked=checkbox.prop('checked');
					var msg=(checked)?'Do you want to activate the product':'Do you Want to Deactivate the product';
					var value=checkbox.prop('value');
					bootbox.confirm({
						title:"Product Activation and Deactivagtion",
						size:"medium",
						message:msg,
						callback:function(confirmed){
							if(confirmed){
								var activationURL=window.contextRoot +'/admin/product/'+ value +'/activation';
								$.post(activationURL,function(data){
									bootbox.alert({
										size:medium,
										title:"info",
										message:data,
									});
								});
							}
							else{
								checkbox.prop('checked',!checked)
							}
						}

					});	
				});
			}

	}
	);

}

