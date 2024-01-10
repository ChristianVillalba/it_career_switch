# 15 - User Authentication & Authorization

### PASSPORT.JS LOCAL AUTHENTICATION

Creating the authentication process from scratch can be lengthy and cumbersome, but thanks to Passport.js we can facilitate the login process by integrating it in an Express application.

* What strategies are and how to use a local strategy to authenticate users with a username and password.
* How to configure the local strategy as middleware in passport.
* How to manage persistent logins using serializeUser() and deserializeUser().
* How to use the passport.authenticate() middleware for login endpoints.
* How to log out a user through the logout() function that’s exposed in the request object.

### BCRYPT

It’s extremely important to avoid storing plaintext password in a database and to hash password before storing them in order to protect users.

Bcrypt is an extremely useful package that does a lot of work behind the scenes for us.
By applying it in your application, your users should be safe navigating the authentication process and avoid having their accounts hacked!

In this lesson we covered:
* What a hashing algorithm is and how it can be used to protect a plaintext password.
* What a salt is and how it’s used to further secure a hashed password.
* How Rainbow Table attacks are used to crack password hashes.
* How to use bcrypt in order to generate a salt and hash a plaintext password.
* How to use bcrypt in order to compare a retrieved password with a password stored in the database.
* How to implement bcrypt in an actual application and use it via user requests to authenticate users.