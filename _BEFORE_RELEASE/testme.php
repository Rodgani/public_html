<!DOCTYPE html>
<html>
<head>
	<title>testme</title>
</head>
<body>

	<div class="form-group col-md-12">
  
      <ul>
        <li><p>Maximum 5MB for each photo</p></li>
        <li><p>First photo which you upload will be the main photo</p></li>
      </ul>
      <form action="http://localhost/automobile/admin/autoabo_image_upload" class="dropzone" id="myAwesomeDropzone" >
      </form>
  </div>



<script src="http://localhost/automobile/assets/dropzone/dist/dropzone.js"></script>
  
  <script>
var uploaded =  false;
  $(".dropzone").dropzone({
    dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
    maxFilesize: 5,  //MB
    acceptedFiles: ".jpeg,.jpg,.png",
    paramName: "imagefile",
    addRemoveLinks: true,
    queuecomplete: function (file) {
            uploaded = false;
    },
    addedfiles: function (file) {
            uploaded = true;
    },
removedfile: function(file) {
var name = file.name; 
$.ajax({
  type: 'POST',
  url: 'img-delete.php',
  data: {name: name},
  sucess: function(data){
    console.log('success: ' + data);
  }
});
  var _ref = file.previewElement;
//return (_ref = file.previewElement) != null _ref.parentNode.removeChild(file.previewElement) : void 0;
if(file.previewElement){
return _ref.parentNode.removeChild(file.previewElement)
}
}
  });
</script>
</body>
</html>