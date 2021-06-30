<h1>User Login</h1>

<?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "submit=empty") == true) {
    echo "<p class='bad'>Please Fill In ALL Fields</p>";
  } elseif (strpos($fullUrl, "submit=noUser") == true) {
    echo "<p class='bad'>YOU DON'T BELONG HERE!</p>";
  } elseif (strpos($fullUrl, "submit=wrongPass") == true) {
    echo "<p class='bad'>Please use correct password.</p>";
  }

?>

<!-- Section to hold user input fields -->
<form id="login" method="POST" action="includes/login.inc.php">

  <table>
    <tr>
      <td>Username: </td> <!-- Username -->
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>Password: </td> <!-- Password -->
      <td><input type="password" name="passwrd"></td>
    </tr>          
    <tr>
      <td colspan="2" align="center"> <!-- Submit Button -->
        <button type="submit" name="submit">Log In</button>
      </td>
    </tr>
  </table>
</form>