<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

<form action="/welcome" method="POST"> 
@csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="firstname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lastname"><br><br>
        <label for="jkel">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select id="select" name="select">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="chinese">Chinese</option>
        </select><br><br>
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="0">English<br>
        <input type="checkbox" name="language" value="0">Other<br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" name="proses" value="Sign Up">
    </form>
</body>
</html>

