<?php include './layout/head.php'; ?>

<h1>PHP Output No. 2 (Page 1)</h1>
<h1>Welcome</h1>
<p>This is the <strong>Home Page</strong> of the PHP Output #2 project. It ties together four pages &mdash; Home, Register, Login, and Forgot Password &mdash; that all share the same header and footer through <code>include</code>/<code>require</code>.</p>
<p>Use the navigation menu above to visit the other pages.</p>

<a href="./index2.php">Go to next Page</a>

<?php include './layout/foot.php'; ?>

<!-- include will only produce a warning (E_WARNING) and the script will continue -->