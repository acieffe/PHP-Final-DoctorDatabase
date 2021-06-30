<?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "submit=empty") == true) {
    echo "<p id='bad'>Please Fill In ALL Fields</p>";
  } elseif (strpos($fullUrl, "submit=noSubmit") == true) {
    echo "<p id='bad'>YOU DON'T BELONG HERE!</p>";
  } elseif (strpos($fullUrl, "submit=success") == true) {
    echo "<p id='good'>Patient Successfully Added!</p>";
  }

?>

<form id="patientsInput" action="includes/insertPatient.inc.php" method="POST">
  <h1>Enter Patient Info</h1>

  <table>
    <tr>
      <td><label for="fname">First Name:</lable></td>
      <td><input type="text" id="fname" name="fname"></td>
    </tr>
    <tr>
      <td><label for="mname">Middle Init:</lable></td>
      <td><input type="text" id="mname" name="mname" maxLength="1" size="2"></td>
    </tr>
    <tr>
      <td><label for="lname">Last Name:</lable></td>
      <td><input type="text" id="lname" name="lname"></td>
    </tr>
    <tr>
      <td><label for="street1">Address:</lable></td>
      <td><input type="text" id="street1" name="street1"></td>
    </tr>
    <tr>
      <td><label for="street2">Address Cont:</lable></td>
      <td><input type="text" id="street2" name="street2"></td>
    </tr>
    <tr>
      <td><label for="pcity">City:</lable></td>
      <td><input type="text" id="pcity" name="pcity"></td>
    </tr>
    <tr>
      <td><label for="pstate">State:</lable></td>
      <td><input type="text" id="pstate" name="pstate" maxLength="2" size="3"></td>
    </tr>
    <tr>
      <td><label for="pzip">Zip Code:</lable></td>
      <td><input type="text" id="pzip" name="pzip" size="10"></td>
    </tr>
    <tr>
      <td><label for="birthdate">Birthday:</lable></td>
      <td><input type="date" id="birthdate" name="birthdate"></td>
    </tr>
    <tr>
      <td><label for="gender">Gender:</lable></td>
      <td>
        <select id="gender" name="gender">
          <option value="female">Female</option>
          <option value="male">Male</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label for="mstatus">Marital Status:</lable></td>
      <td>
        <select id="mstatus" name="mstatus">
          <option value="single">Single</option>
          <option value="married">Married</option>
          <option value="divorced">Divorced</option>
          <option value="widow(er)">Widow(er)</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label for="insure">Insurance</lable></td>
      <td>
        <select id="insure" name="insure">
          <option value="none">None</option>
          <option value="Blue Snake">Blue Snake</option>
          <option value="Louder Milk">Louder Milk</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="submit">Save Patient</button>
      </td>
    </tr>
  </table>
  
</form>