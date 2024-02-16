<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TJ SAYSON</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" type="image/jpg" href="images/aoi.jpg" />
  </head>

  <body>
    <h1>Who am I?<span style="font-size: 40px">&#128556;</span></h1>
    <audio controls autoplay hidden src="test.mp3"></audio>

  <?php

    $imageProperties = [
    'src'    => 'images/Me.jpg',
    'alt'    => 'TJ Picture',
    'width'  => '300',
    'height' => '300',
    'id' => 'Me',
    
];
echo img($imageProperties); 

?>

    

    <h2>Personal Information<span style="font-size: 40px">&#129313;</span></h2>

    <div class="border">
      <p id="name"></p>

      <p><strong>Nickname:</strong> TJ/Teej/Jay</p>

      <p id="age"></p>

      <p id="birth"></p>

      <p>
        <strong>Hobbies / Interests / libangan:</strong><br />My hobbies are playing sports like
        basketball, badminton, volleyball, and swimming. I have a lot of interests in history
        especially Philippine history and war history. I usually watch or read about them when I get
        bored and can’t sleep
      </p>
      <p>
        <strong>Goals in Life:</strong><br />To graduate and become a successful IT professional and
        would like to pursue a master’s degree about IT.
      </p>
      <p>
        <strong>Dreams wish to fulfill:</strong><br />I have dreamt to be a historian since I have a
        lot of interest when it comes to history. I might pursue this once I have the money to
        educate myself after graduating. I also dreamt to become a successful gamer/streamer since I
        am really addicted to gaming.
      </p>
    </div>

    
      <?php

      echo "<h2>School Information<span style='font-size: 40px'>&#127979;</span></h2>";
      ?> 
      <div class="border">
      <p>
        <strong><u>Senior High School Graduated From:</u></strong> <br />
        - I graduated senior high school here in Asia Pacific College. It is located in Humabon,
        Makati City <br />
      </p>
      <p>
        <strong><u>Senior High School Graduated From:</u></strong> <br />
        - The course I picked is Bachelor of Science in Information Technology specializing in
        mobile and internet technology.
      </p>
      <p>
        <strong><u>Scholarship:</u></strong> <br />
        - My scholarship is Entrance Academic Scholarship (50% Tuition Fee only).
      </p>
      <p>
        <strong><u>Why did you choose this course:</u></strong> <br />
        - I chose this course because I really like computers ever since I was a elementary student.
        Whenever there is a technology problem in our home, I am the one willing to study on how to
        fix it.
      </p>

      <p>
        <strong><u>I.T. Experience: Programming / Gaming / Others:</u></strong> <br />
        - I have a background in programming in making a website and a mobile application. The
        languages used are HTML, CSS, JavaScript, Java, and Python. I also like gaming and tried
        participating in gaming tournaments
      </p>
    </div>
<div class="border">
      <h3>Other interesting aspects of my life<span style="font-size: 40px">&#128570;</span></h3>
      <p>
        I tried to do streaming and creating my own page since I am heavily addicted in gaming and
        tried if it’s really for me. I also tried to find a part time job which is an encoder since
        I am a keyboard warrior.
      </p>
      <p>
        <strong><u>Pictures about yourself and your interests:</u></strong> <br />
        - This is my Facebook page where I started streaming. I created this during the pandemic and
        after getting a PC upgrade. Additionally, I am a cat person and here are the pictures of 3
        of my cats.

        <?php
    $txt = "Sebastian, Sophie, and Sue";
    echo "Their names are $txt!";

    function myMessage() {
        echo " Sebastian is the eldest which is 11 years old";
    }
    myMessage();

    $x = 4;

    function myfunction() {
        global $x; // Use the global keyword to access the global variable
        echo ", Sophie and Sue is " . $x . " years old ";
    }
    myfunction();

    $x = 5;
    var_dump($x);
?>

        
      </p>

      <img src="images/Pets.png" alt="My 3 pet cats" style="width: 300px; height: 300px" />
      <img src="images/FB page.jpg" alt="My Facebook page" style="width: 300px; height: 300px" />
      <img src="images/allmight.gif" alt="My Favorite anime" style="width: 400px; height: 300px" />
    </div>

      <h3>Games I Play when bored<span style="font-size: 40px">&#127918;</span></h3>
      <div class="border">
      <p><strong><u>Here are some of the games I always play:</u></strong> <br /></p>
      <p id="game"></p>

      <h4>Time Check <span style="font-size: 40px">&#128337;</span></h4>
      <p id="date"></p>
      <button id="clicks1" onclick="today()">Today is?</button>

      <button id="clicks"> Click me </button>

      <input type="image" src="images/git.png" alt="Check my github" onclick="newWin()" width="48" height="48">
    </div>

      
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
 
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
<div class="border">
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Others  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
 </div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php
// For Xampp Localhost
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";

//For socit cloud
/*$servername = "localhost";
$username = "webprogmi221";
$password = "g_6bCitLu.ljMK*m";
$dbname = "webprogmi221";

 //Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 //Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tvsayson_myguests (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>
    

    <script src="js/script.js"></script>
  </body>
</html>
