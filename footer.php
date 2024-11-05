<div class="container-fluid  mt-3 bg-dark footer">

    <h3 style="color: aliceblue;text-align: center;">vidhyavati unversity@gmail.com</h3>

  </div> 

</div>
<!-- student popup form -->
<div class="popup-form" id="popup-form">
    <form action="./STUDENT./student_home.php" method="POST">
      <h3>Student Login Portal</h3>
      <label for=""><i class="fa-regular fa-user" style="margin-right: 10px;"></i>USER NAME</label>
     
      <input type="text" name="un" class="input-area">
      
      <label for=""><i class="fa-regular fa-key" style="margin-right: 10px;"></i>PASSWORD</label>
      
      <input type="text" name="pass" class="input-area">
      
      <a href="#">forget password ?</a>
      <div class="button">
        
      <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
      <button type="button" class="btn btn-danger" onclick="closePopup()">CANCLE</button>
    </div>
  </form>


   <script src="bootstrap.min.js"></script>
   <script>
    let pop = document.getElementById("popup-form");
    function openPopup()
    {
          pop.classList.add("open-Popup");
    }
    function closePopup()
    {
          pop.classList.remove("open-Popup");
    }
    
    
   
   </script>

</body>
</html>
