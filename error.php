$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_SESSION['error'] = "Invalid email format.";
  ?>
  <script>
    window.location.href = "../../index.php";
  </script>

  <?php
  exit();
}
