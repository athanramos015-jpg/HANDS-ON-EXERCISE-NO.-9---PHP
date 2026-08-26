<?php
$pageTitle = 'Login';
require './layout/head.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username'] ?? '');
    $message  = "Welcome back, {$username}! (This is a demo &mdash; no real login was performed.)";
}
?>

<h1>Login</h1>
<p>Log in to your account using the form below.</p>

<?php if ($message): ?>
    <p style="color: #27ae60; font-weight: bold;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" action="login.php">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="submit-btn">Login</button>
    <div class="form-links">
        <a href="forgot-password.php">Forgot your password?</a><br>
        <a href="register.php">Need an account? Register</a>
    </div>
</form>

<?php require './layout/foot.php'; ?>