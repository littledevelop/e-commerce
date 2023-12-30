<input type='file' accept='image/*'  onchange="readURL(this)" >
  <img src="" alt="No Image" id="img" style='height:150px;'>
  
  <script>
  function readURL(input) {
    if (input.files && input.files[0]) {
    
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#img").setAttribute("src",e.target.result);
      };

      reader.readAsDataURL(input.files[0]); 
    }
  }
  </script>
</body>
</html>