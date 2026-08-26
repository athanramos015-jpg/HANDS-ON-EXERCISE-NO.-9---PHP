<?php
$pageTitle = 'Register';
require './layout/head.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username'] ?? '');
    $email    = htmlspecialchars($_POST['email'] ?? '');
    $message  = "Thanks, {$username}! (This is a demo &mdash; no account was actually created.)";
}
?>

<h1>Register</h1>
<p>Create a new account by filling out the form below.</p>

<?php if ($message): ?>
    <p style="color: #27ae60; font-weight: bold;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" action="register.php">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
    </div>
    <button type="submit" class="submit-btn">Create Account</button>
    <div class="form-links">
        <a href="login.php">Already have an account? Login</a>
    </div>
</form>

<?php require './layout/foot.php'; ?>