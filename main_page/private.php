
<?php require "../header/header_link.php";?>

<?php require 'nav.php';?>


<?php


    $name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $sharif = $_POST['sharif'];
    $date = $_POST['date'];
    $course = $_POST['course'];
    $group = $_POST['group'];
  $teacher = $_POST['teacher'];
  $address = $_POST['address'];
  
 
if( ( $name != null ) and ( $last_name != null ) and ( $sharif != null ) and ( $date != null )
and  ( $course != null ) and ( $group != null ) and  ( $teacher != null ) and 
( $address != null ))
{
  setcookie( "fname", $name, time() + 36000 );
  setcookie( "lname", $last_name, time() + 36000 );
  setcookie( "sharif", $sharif, time() + 36000 );
  setcookie( "date", $date, time() + 36000 );
  setcookie( "course", $course, time() + 36000 );
  setcookie( "group", $group, time() + 36000 );
  setcookie( "teacher", $teacher, time() + 36000 );
  setcookie( "address", $address, time() + 36000 );
 
}



?>



<section class="articles">
  
  <article>

    <div class="article-wrapper">
      <figure>
      <img src="../images/user1.png" />
      </figure>
      <div class="article-body">
        <h2> Shaxsiy ma'lumotlar  </h2>
        <p>
        <?= $_COOKIE['fname']; ?>
        </p>
        <hr>
        <br>
        <p><?= $_COOKIE['lname']; ?></p>
        <hr>
        <br>
        <p><?= $_COOKIE['sharif']; ?></p>
        <hr>
        <br>
<p><?= $_COOKIE['date']; ?>  </p>
<hr>
<br>
<p><?= $_COOKIE['course']; ?> </p>
<hr>
<br>
<p><?= $_COOKIE['group']; ?> </p>
<hr>
<br>
<p><?= $_COOKIE['address']; ?></p>
<hr><br>

       
      </div>
    </div>
  </article>
</section>



<?php require "../footer/footer.php";?>