
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width"=device-width, initial-scale-1.0>
    <link rel="stylesheet" href="assets/styles.css">
    <title>Fome</title>
</head>
<body>

    <div class="container">
        <h2 class="tittle">forms</h2>

        <form action="home.php"method= "post">
            <label for = ""> Name</label>
            <input
                class="textfield"
                type="text"
                name="myName"
                id="myName"
                required
                >
            
        <label>      Username </label>
        <input
         class="textfield" 
         type="email"
          name="myEmail" 
          id="myEmail" required
          >

          <label for="">Passowrd </label>
          <input
             class = "textfield"
             type="password"
             name="myPassowrd"
             id="myPassword"
             required 
             >

             <button class="button" type="submit">Submit</button>

    

        </form>

    </div>


</body>
</html>