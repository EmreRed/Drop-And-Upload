<!DOCTYPE html>
<html lang='en' class=''>
<head>
<link rel='stylesheet prefetch' href='assets/style.css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head><body>
<div class="container">
    <h1>jQuery Image Upload</h1>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview">
            </div>
        </div><br />
        <p id="result" align="center"></p>
    </div>
</div>
<script src='assets/jquery-3.3.1.min.js'></script>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
			$.post("upload.php",
        {
          image: e.target.result
        },
        function(data,status){
				if(data.trim()=="success"){
					document.getElementById('result').innerHTML='<span style="color:red">Success !</span>';
				}else{
					document.getElementById('result').innerHTML='<span style="color:red">Failed</span>';
				}
		   });
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
</body>
</html>
