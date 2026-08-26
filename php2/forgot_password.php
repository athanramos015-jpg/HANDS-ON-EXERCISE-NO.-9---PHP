<?php
$pageTitle = 'Forgot Password';
require './layout/head.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $message = "If an account exists for {$email}, a reset link has been sent. (This is a demo &mdash; no email was actually sent.)";
}
?>

<h1>Forgot Password</h1>
<p>Enter your email address and we'll send you a link to reset your password.</p>

<?php if ($message): ?>
    <p style="color: #27ae60; font-weight: bold;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" action="forgot-password.php">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <button type="submit" class="submit-btn">Send Reset Link</button>
    <div class="form-links">
        <a href="login.php">Back to Login</a>
    </div>
</form>

<?php require './layout/foot.php'; ?>