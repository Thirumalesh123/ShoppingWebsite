var token=$('meta[name="_csrf"]').attr('content');
var header=$('meta[name="_csrf_header"]').attr('content');
if((token!=undefined && header!=undefined) &&(token.length>0 && header.length >0))
{
$(document).ajaxSend(function(e,xhr,options)
{
xhr.setRequestHeader(header,token);
});
}

var $table = $('#ListOfCategoryTable');

if ($table.length) {
	var jsonUrl =window.contextRoot +'/json/data/all/category';
	


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
						return '<img src="'+window.contextRoot+ '/resource/images/categoryimages' + data + '.jpg" height="120" width="120;"/> ';
					}
				},
				{
					data: 'name'
				},
				
				
				{
					data: 'description',
					
				},
				{
					data:'is_active',
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
						str+='<a href="	'+window.contextRoot +'/admin/'+data+'/category">';
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
					var msg=(checked)?'Do you want to activate the Category':'Do you Want to Deactivate the Category';
					var value=checkbox.prop('value');
					bootbox.confirm({
						title:"Product Activation and Deactivagtion",
						size:"medium",
						message:msg,
						callback:function(confirmed){
							if(confirmed){
								var activationURL=window.contextRoot +'/admin/manage/category/'+ value +'/activation';
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

