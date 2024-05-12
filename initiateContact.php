<?php 

if(duplicateEmail($db, $_POST['email'])){
  echo "<h3> Sorry, you already have contacted with that email. Please wait for a response, before submitting more messages. </h3>";

}else{
  $query = "INSERT INTO contacts(
    fullName,
    email,
    phone,
    contactMessage
    ) VALUES (
      '$_POST[fullName]',
      '$_POST[email]',
      '$_POST[phone]',
      '$_POST[contactMessage]'
    );";
    $result = mysqli_query($db, $query);
    echo"<h3>Contact is complete.</h3>";
}
mysqli_close($db);

function duplicateEmail($db, $email){
  $query = "SELECT *
  FROM Contacts
  WHERE email = '$email'";
  $contacts = mysqli_query($db, $query);
  $numberOfRecords = mysqli_num_rows($contacts);
  if($numberOfRecords > 0){
    return true;
  }
  return false;
}

?>