<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | SanberBook</title>
</head>

<body>
    <header>
        <h1>Buat Account Baru!</h1>
    </header>
    <main>
        <form action="/welcome" method="post">
            @csrf
            <h2>Sign Up Form</h2>
            <div>
                <label for="firstName">First name:</label><br />
                <input
                    type="text"
                    id="firstName"
                    name="firstName"
                    required
                    maxlength="20" />
            </div>
            <br />
            <div>
                <label for="lastName">Last name:</label><br />
                <input
                    type="text"
                    id="lastName"
                    name="lastName"
                    required
                    maxlength="20" />
            </div>
            <br />
            <div>
                <p>Gender:</p>
                <input type="radio" id="male" name="gender" value="Male" />
                <label for="male">Male</label><br />
                <input type="radio" id="female" name="gender" value="Female" />
                <label for="female">Female</label><br />
                <input type="radio" id="other_gender" name="gender" value="Other" />
                <label for="other_gender">Other</label><br />
            </div>
            <br />
            <div>
                <label for="nationality">Nationality:</label><br />
                <select name="nationality" id="nationality">
                    <option value="australian">Australian</option>
                    <option value="indonesian">Indonesian</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="singaporean">Singaporean</option>
                </select>
            </div>
            <br />
            <div>
                <p>Language Spoken:</p>
                <input
                    type="checkbox"
                    id="indonesian"
                    name="languagesSpoken[]"
                    value="Indonesian" />
                <label for="indonesian">Bahasa Indonesia</label><br />
                <input
                    type="checkbox"
                    id="english"
                    name="languagesSpoken[]"
                    value="English" />
                <label for="english">English</label><br />
                <input
                    type="checkbox"
                    id="other_language"
                    name="languagesSpoken[]"
                    value="Other" />
                <label for="other_language">Other</label><br />
            </div>
            <br />
            <div>
                <label for="bio">Bio:</label><br />
                <textarea id="bio" name="bio" rows="14" cols="30"></textarea>
            </div>
            <input type="submit" value="Sign Up" />
        </form>
    </main>
</body>

</html>
