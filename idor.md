Insecure Direct Object References (IDOR):
Concerning the fact that the URL displays a user profile like mysite.com/profile?id=123. 
The ID would correspond to the ID of a user in your database. If an attacker changes the ID in the URL to 124, 
they could access the profile of a different user. This is a very basic example of IDOR.
