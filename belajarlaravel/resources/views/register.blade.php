<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
    @csrf
    <label for="namaawal">First name:</label>
    <br>
    <input type="text" id="namaawal" name="first_name"><br><br>

    <label for="namaakhir">Last name:</label>
    <br>
    <input type="text" id="namaakhir" name="last_name"><br><br>

    <label>Gender:</label>
    <br>
    <input type="radio" name="gender" value="male"> Male <br>
    <input type="radio" name="gender" value="female"> Female <br>
    <input type="radio" name="gender" value="other"> Other <br><br>

    <label>Nationality:</label><br>
    <select name="nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Singapore">Singapura</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Thailand">Thailand</option>
    </select><br><br>

    <label>Language Spoken:</label><br>
    <input type="checkbox" name="language_spoken[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
    <input type="checkbox" name="language_spoken[]" value="English"> English <br>
    <input type="checkbox" name="language_spoken[]" value="Arabic"> Arabic <br>
    <input type="checkbox" name="language_spoken[]" value="Japanese"> Japanese<br><br>

    <label>Bio:</label><br>
    <textarea name="bio" cols="25" rows="15"></textarea><br><br>

    <input type="submit" value="Kirim">
</form>

</body></html>