<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 5px;
      width: 300px;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 0px 0 5px;
    }

    input {
      width: 100%;
      padding: 5px;
      margin-bottom: 0px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
      padding: 5px;
      margin-bottom: 0px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 5px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>REGISTER</h2>
  <form action="proses_register.php" method="post">
    <label for="username">Username:</label>
    <input type="username" id="username" name="username" required>

    <label for="password">password:</label>
    <input type="password" id="password" name="password" required>
   
    <button type="submit">register</button>

  </form>
</div>

</body>
</html>