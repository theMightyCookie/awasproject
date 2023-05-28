SQL Injection:
Imagine you have a login form where users enter their username and password. In your PHP script, you may have something like this:

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

A user could potentially enter the following as their username:
admin'; --

This would make the SQL command look like this:
SELECT * FROM users WHERE username = 'admin'; -- AND password = ''
The -- is a comment in SQL, so everything after it is ignored. This means that the user has effectively bypassed the password check entirely. This is a simple demonstration of SQL injection.
