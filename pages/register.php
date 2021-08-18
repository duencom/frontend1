<div>
  {/*?php
?*/}
  <meta charSet="UTF-8" />
  <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Page</title>
  <link rel="stylesheet" href="style.css" />
  <form action="register_db.php">
    <legend><h2><b>Register</b></h2></legend>
    <label htmlFor="username">Username</label><br />
    <input type="text" name="username" id="username" placeholder="username" /><br />
    <label htmlFor="email">E-Mail</label><br />
    <input type="email" name="email" id="email" placeholder="e-mail" /><br />
    <label htmlFor="password">Password</label><br />
    <input type="password" name="password" id="password" placeholder="Password" /><br />
    <label htmlFor="Cpassword">Confirmed Password</label><br />
    <input type="password" name="Cpassword" id="Cpassword" placeholder="Confirmed Password" /><br /><br />
    <input type="submit" name="submit" id="submit" defaultValue="Submit" />
  </form>
</div>
