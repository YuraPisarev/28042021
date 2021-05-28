<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <div>
            <label for="username">Name</label>
            <input type="text" name="uaername" id="username">
        </div>
            <label>Gender</label>
            <input type="redio" name="gender" value="male" id="gender-male">
            <label for="gender-male">Male</label>
            <input type="redio" name="gender" value="female" id="gender-female">
            <label for="gender-female">Female</label>
        <div>

        <div>
        <label>Programming language </label>
        <select>name="programming language"</select>
            <optgroup label="Backend">
                <option value="php">PHP</option>
                <option value="python">Python</option>
                <option value="java">Java</option>
            </optgroup>
            <optgroup label="Frontend">
                <option value="javascript">JavaScript</option>
                <option value="python">Python</option>
                <option value="css">CSS</option>
            </optgroup>
        </div>
        <button class="btn btn-success">Send</button>
    </form>
</body>
</html>