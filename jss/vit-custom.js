//calling controller method for navigation of view using parameterized urlPattern
function loadmydiv(urlPattern) {

	var winImage=$("#winImage").val();
	var authorizedID=$("#authorizedIDX").val();
	
	$.blockUI({ message: '<img src="assets/img/482.GIF" /> Please wait... while loading the page' });
	
	if(urlPattern==undefined || urlPattern==null) {
		$("#myModalFooter").modal();
		$.unblockUI();
	}else {
	
		/*alert("verifyMenu=true&winImage="+winImage+"&authorizedID="+authorizedID+"&nocache=@(new Date().getTime())");*/
		$.ajax({
			type: "POST",
			url : urlPattern,
			data : "verifyMenu=true&winImage="+winImage+"&authorizedID="+authorizedID+"&nocache=@(new Date().getTime())",
			success: function(data, textStatus, request){
			    var status = request.status;
			    console.log(status);
				if(status==231) {
					$("html").html($("html", data).html());
					location.reload();
				}else if(status==232) {
					$("#page_outline").html(data);
				}else if(status==233) {
					$("#page-wrapper").html(data);
				}else {
					$("#page-wrapper").html(data);
				}
				$.unblockUI();
			},
			error: function (request, textStatus, errorThrown) {
				 $("#myModalFooter").modal();
				$.unblockUI();
			}
		});
	}
}



function ajaxCall(urlText,dataText,target) {
	
	
	var success_flag=true;
	
	var findText="___INTERNAL___RESPONSE___";

	if(target==null) {
		target="page-wrapper";
	}
	
	$.ajax({
		type : "POST",
		url : urlText,
		data : dataText,
		success : function(response, textStatus, request){
			
			if(response.search(findText)==-1) {
				$("#"+target).html(response);
			}else {
				var status = request.status;
				if(status==231) {
					$("html").html($("html", response).html());
					location.reload();
				}else if(status==232) {
					$("#page_outline").html(response);
				}else if(status==233) {
					$("#page-wrapper").html(response);
				}else {
					$("#page-wrapper").html(response);
				}
			}
			$.unblockUI();
		},
		error : function(jqXHR, textStatus, errorMessage) {
			success_flag=false;
			$("#page-wrapper").html(errorMessage);
			$.unblockUI();
		}		
		
	});

	return success_flag;
	
}

function showHelp(module,context) {

	var helpWindow = window.open("", "_blank", "width=600,height=300,top=300,left=300,directories=0,location=0,titlebar=0,toolbar=0,fullscreen=0,menubar=0,status=0");
	
	$.ajax({
		type : "POST",
		url : "context/help",
		data : "module="+module+"&context="+context,
		success : function(response){
			
			helpWindow.document.write(response);
			
		},
		error : function(jqXHR, textStatus, errorMessage) {
			helpWindow.document.write("<h2><b>No Help</b><h2>");
		}		
	})
	
}







