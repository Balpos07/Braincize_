<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Braincize-mission/vision</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body onload="change()">
    <div class="container" id="contain">
        <div class="logo">
            <img src="images/logo.png" alt="" class="logo_image">
            <ul>
                <li><a href="index.php" class="menu">HOME</a></li>
                <li><a href="about.php" class="menu">ABOUT US</a></li>
                <li><a href="contact.php" class="menu">CONTACT</a></li>
                <li><a href="research.php" class="menu">RESEARCH</a></li>    
                <li><button type="submit" id="account">LOGIN</button></li>
            </ul>
        </div>
        </div>
    </div>
  </div>
    <div class="banner">
        <div class="banner_text">
            <h1>CONTACT</h1>
        </div>
    </div>
    <div class="contact_container">
        <div class="contact">
            <h4>lorem ipsum lorem</h4>
            <h4>lorem ipsum lorem</h4>
            <h4>lorem ipsum lorem</h4>
        </div>
        <div class="contact">
            <h4>Phone: 0096865556</h4>
            <h4>email support@braincize.com</h4>
        </div>
    </div>
    <div class="container">
        <form action="action_page.php">
      
          <label for="fname"></label>
          <input type="text" id="fname" name="firstname" placeholder="Name.." size="50px"> <br>

          <label for="phone"></label>
          <input type="tel" id="phone" name="phone" placeholder="Telephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> <br>

          <label for="email"></label>
          <input type="email" id="email" name="email" placeholder="Email"> <br>
      
          <label for="subject"></label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> <br>
      
          <input type="submit" value="Send message">
      
        </form>
    </div>
</body>
</html>