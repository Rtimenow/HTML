<?php

$name = $email = $contBack = $comment = ""; //variables that hold values
$nameErr = $emailErr = $contBackErr = ""; //variables that check for errors
$formErr = false; //handler

function cleanInput($data)
{
  $data = trim($data); //Kevin
  $data = stripslashes($data); //Kevin
  $data = htmlspecialchars($data); //<p></p>
  return $data;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //Evaluating for the NAME field
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $formErr = true;
  } else {
    $name = cleanInput($_POST["name"]);
    if (!preg_match("/^[a-zA-z ]*$/", $name)) {
      $nameErr = "Only letters and spaces are allowed";
      $formErr = true;
    }
  }

  //Evaluating for the EMAIL field
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $formErr = true;
  } else {
    $email = cleanInput($_POST["email"]);
    //Check if e-mail address is formatted correctly
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Please enter a valid email address.";
      $formErr = true;
    }
  }

  //Evaluating for the CONTACT field 
  if (empty($_POST["contact-back"])) {
    $contBackErr = "Please let us know if we can contact you back";
    $formErr = true;
  } else {
    $contBack = cleanInput($_POST["contact-back"]);
  }

  //Evaluating for the COMMENTS field
  $comment = cleanInput($_POST["comments"]);
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <label for="name">Name:</label>
  <span>* <?php echo $nameErr; ?></span>
  <input type="text" name="name">

  <br>

  <label for="email">Email address:</label>
  <span>* <?php echo $emailErr; ?></span>
  <input type="email" name="email">

  <br>

  <label for="contact-back">Can we contact you back?</label>
  <span>* <?php echo $contBackErr; ?></span>
  <input type="radio" name="contact-back" value="Yes">
  <label for="yes">Yes</label>
  <br>
  <input type="radio" name="contact-back" value="No">
  <label for="no">No</label>

  <br>

  <label for="comments">Comments:</label>
  <textarea name="comments" rows="3"></textarea>

  <br>

  <label for="">* Indicates required fields</label>

  <br>
  <input type="submit" name="submit">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

<section>
  <h2>Form Entries:</h2>
  <ul>
    <?php
      if ($name !== "") {
        echo "<li>NAME: $name</li> ";
      }
      if ($email !== "") {
        echo "<li>EMAIL: $email</li> ";
      }
      if ($contBack !== "") {
        echo "<li>CONTACT BACK: $contBack</li> ";
      }
      if ($comment !== "") {
        echo "<li>COMMENT: $comment</li> ";
      }
      ?>
  </ul>
</section>

<?php

}

?>