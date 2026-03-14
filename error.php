catch (Exception $e) {
    $_SESSION['error'] = "Login error.";
    ?>
    <script>
        window.location.href = "../../index.php";
    </script>
    <?php
    exit();
}
