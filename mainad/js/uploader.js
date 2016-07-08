/********************************************************************************
* This script is brought to you by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
*********************************************************************************/

//This does the file Uploads
$(document).ready(function()
{
	var uploaded_files_location = "uploaded_files";
	var post_session = $('#post_session').val();
	new AjaxUpload($('#vpb_upload_button'), 
	{
		action: 'uploader.php?pcodes='+post_session,
		name: 'file_to_upload',
		onSubmit: function(file, file_extensions)
		{
			$('.vpb_main_demo_wrapper').show(); //This is the main wrapper for the uploaded items which is hidden by default
			
			//Allowed file formats jpg|png|jpeg|gif|pdf|docx|doc|rtf|txt - You can add as more file formats or remove as you wish.
			if (!(file_extensions && /^(jpg|png|jpeg|gif|pdf|docx|doc|rtf|txt)$/.test(file_extensions)))
			{
				//If file format is not allowed then, display an error message to the user
				$('#vpb_uploads_error_displayer').html('<div class="vpb_error_info" align="left">Sorry, you can only upload the following file formats: DOCX, DOC, RTF, PDF, JPG, PNG and GIF. Thanks...</div>');
				return false;
			}
			else
			{
			  $('#vpb_uploads_error_displayer').html('<div class="uplading_image">Uploading <img src="images/loadings.gif" align="absmiddle" /></div>');
			  return true;
			}
		},
		onComplete: function(file, response)
		{
			if(response != "error")
			{
				$('#vpb_uploads_error_displayer').html(''); //Empty the error message box
				$('#file_name').val(response);
				$('#vpb_uploads_displayer').append('<div class="col-md-3" id="fileID'+response+'"><div onclick="describeFile(\''+response+'\')"><img src="../admin/uploaded_files/'+response+'.jpg" style="max-width:100%; display: block" class="allimages" id="im'+response+'"/></div><div id="vpb_remove_button'+response+'" class="vpb-smalltext" style: color: red">Remove File</div><div id="text'+response+'">No Caption</div></div>');
				
				//$('#vpb_uploads_displayer').html('<div class="vpb_image_wrappers" id="fileID'+response+'" align="center"><div class="vpb_image_names">'+response+'</div><img src="'+response+'" class="vpb_image_design" /><div id="vpb_remove_button'+vpb_file_names+'" class="vpb_remove_button" onclick="remove_unwanted_file(\''+vpb_file_names+'\',\''+file+'\');">Remove</div></div>');
				} else
			{
				$('#vpb_uploads_error_displayer').html(response);
				//$('#vpb_uploads_error_displayer').html('<div class="vpb_error_info" align="left">Sorry, your file upload was unsuccessful. Please reduce the size of your file and try again or contact this site admin to report this error message if the problem persist. Thanks...</div>');
			}
				
				
			} 
			
	});
	
});


//This removes all unwanted files
function remove_unwanted_file(file)
{
	if(confirm("If you are sure that you really want to remove the file "+file+" then click on OK otherwise, Cancel it."))
	{
		var dataString = "file_to_remove=" + file;
		$.ajax({
			type: "POST",
			url: "remove_unwanted_files.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#vpb_remove_button"+file).html('<img src="images/loadings.gif" align="absmiddle" />');
			},
			success: function(response) 
			{
				$('div#fileID'+file).fadeOut('slow');	
			}
		});
	}
	return false;
}

function describeFile(file) {
	$("#vpb_image_name").val(file);
	$('#titlename').text(file);
	$('#enterdescription').show();
	
}

function postDescription() {
	var post = $("#post_session").val();
	var file = $("#vpb_image_name").val();
	var des = $("#description").val();
	var dataString = "file_to_post=" + file + "&post_session =" + post + "&description=" + des;
	alert(dataString);
		$.ajax({
			type: "POST",
			url: "postdescription.php",
			data: dataString,
			cache: false,
			success: function(response) 
			{
				//$('div#fileID'+file).fadeOut('slow');	
			}
		});
	
}