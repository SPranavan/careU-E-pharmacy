<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="./updateImg" enctype="multipart/form-data" method="POST">
    <div class="container">
      <h1>Upload Image</h1>
      <input class="review" name="fileToUpload" type="file" id="file-input" onchange="readURL(this);">
      <img id="user_pic" src="<?php echo URLROOT; ?>/public/img/user-pics/<?php echo $_SESSION['profile'] ?>" alt="">
      <script>
          function readURL(input) {
              if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  document.getElementById("user_pic").src = e.target.result;
              };
              reader.readAsDataURL(input.files[0]);
              }
          }
      </script>
      <div class="clearfix">
        <button type="submit" name="submit" class="sub-btn">submit</button>
      </div>
    </div>
  </form>
</div>