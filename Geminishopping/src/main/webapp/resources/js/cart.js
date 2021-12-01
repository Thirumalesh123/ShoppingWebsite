$('button[name="refreshCart"]').click(function(){

var cartLineId=$(this).attr('value');
var countField=$('#count_'+cartLineId);
var originalCount=countField.attr('value');

if(countField.val() != originalCount)
{
if(countField.val()<1 || countField.val() >4)
{
countField.val(originalCount);
bootbox.alert({
size:'medium',
title:'error',
message:'Product count could not be less than 1 and greater than 4..!!'
});
}
else
{
var updateUrl=cartLineId+'/update?count='+countField.val();
/*window.updated=updaterUrl;*/
window.location.href=updateUrl;
}
}
});

