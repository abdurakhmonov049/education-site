<?php require "../header/header-form.php";?>
<?php require 'nav.php';?>

<div class="container">
      <div class="text">
       Shaxsiy  Ma'lumotlar
      </div>
      <form action="private.php" method="post">
         <div class="form-row">

            <div class="input-data">
               <input type="text" required name="first_name">
               <div class="underline"></div>
               <label>Ismingiz:</label>
            </div>
            <div class="input-data">
               <input type="text" required name="last_name">
               <div class="underline"></div>
               <label>Familiyangiz:</label>
            </div>
            <div class="input-data">
               <input type="text" required name="sharif">
               <div class="underline"></div>
               <label>Sharifingiz:</label>
            </div>

         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="date" required name="date">
               <div class="underline"></div>
               <label></label>
            </div>
            <div class="input-data">
               <input type="text" required name='course'>
               <div class="underline"></div>
               <label for="">Kurs:</label>
            </div>

            <div class="input-data">
               <input type="text" required name="group">
               <div class="underline"></div>
               <label for="">Guruh:</label>
            </div>

            <div class="input-data">
               <input type="text" required name="teacher">
               <div class="underline"></div>
               <label for="">Kuratir:</label>
            </div>

         </div>
         <div class="form-row">
         <div class="input-data textarea">
            <textarea rows="8" cols="80" required name="address"></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Manzil:</label>
            <br/>
        


            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="submit" name="submit">
               </div>
            </div>
      </form>
      </div>

<?php require "../footer/footer.php";?>