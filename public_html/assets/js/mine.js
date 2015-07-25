function notify (cap,msg,bgcolor,color) {
	    var not = $.Notify({
	    	caption: cap,
	        content: msg,
	        timeout: 5000,
	        style:{background:bgcolor,color:color}
	    });
}


function nextstep (step) {
	if(step==1){
		if($("#custom_new_sheetname").val()==""){
			notify('Error','Please provided your sheet name','red','white');
			$("#custom_new_sheetname").focus();
		}else if($("#custom_new_desc").val()==""){
			notify('Error','Please provided your sheet description','red','white');
			$("#custom_new_desc").focus();
		}else{
			$(".stepper").stepper('next');
			$("#custom_new_first_panel").fadeOut(1000);
			setTimeout(function () {
				$("#custom_new_second_panel").fadeIn();
			},1000);
		}
	}
	else if(step==2){
		if($("#custom_new_sheetname").val()==""){
			notify('Error','Please provided your sheet name','red','white');
			$("#custom_new_sheetname").focus();
		}else if($("#custom_new_desc").val()==""){
			notify('Error','Please provided your sheet description','red','white');
			$("#custom_new_desc").focus();
		}else{
			$(".stepper").stepper('next');
			$("#custom_new_first_panel").fadeOut(1000);
			setTimeout(function () {
				$("#custom_new_second_panel").fadeIn();
			},1000);
		}
	}
}