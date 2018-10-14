<html>
<head>
    <title>Sign up</title>
</head>

<body>
<form action="sign-up-process.php" method="post">
    First name: <input type="text" id="first_name" name="first_name" required="required"><br>
    Last name: <input type="text" id="last_name" name="last_name" required="required"><br>
    Preferred food category:
    <select placeholder="Select Food Category" id="category" name="category" required="required">
        <option value="Fruits">Fruits</option>
        <option value="Vegetables">Vegetables</option>
        <option value="Protein">Protein</option>
        <option value="Dairy">Dairy</option>
        <option value="Grains">Grains</option>
        <option value="Oils">Oils</option>
    </select>
    Email Address: <input type="email" id="email_address" name="email_address" required="required"><br>
    Password: <input type="password" id="password" name="password" required="required"><br>
    <input type="submit" value="Sign up">
</form>
<p><a href="../sign-in/sign-in.php">Return to sign in</a></p>
</body>
</html>