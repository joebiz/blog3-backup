jQuery(document).ready(function($){
	jQuery(".ampforwp-text-layout-import").click(function(){
		var currentpointer =  jQuery(this);
		var selectedLayout = currentpointer.data("layout-val");
		var selectedLayoutJson =  currentpointer.data("layout") ;
        currentpointer.html("Please wait");
		 jQuery.ajax({
            url: ajaxurl,
            method: 'post',
            data: {action: 'ampforwp_amp_layouts_import', importSettings: selectedLayoutJson},
            dataType: 'json',
            success: function(response){
                if(response.status=='200'){
                   window.location.href = window.location.href;
                }else{
                    alert("not 200");
                }
            },
            error: function(){
				alert("Error Occurred");
			},
        })
        currentpointer.html("Import");



	});
	
})