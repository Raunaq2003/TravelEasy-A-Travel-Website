<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $link = mysqli_connect("localhost", "root", "", "travel");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
	  $country = $_POST['country'];
	  $subject =$_POST['subject'];


    $sql = "INSERT INTO contactt (first_name, last_name, country, subject) VALUES ('$first_name', '$last_name', '$country', '$subject')";
    if (mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("contactus.jpg");
      background-size: cover;
      background-position: center;
      color: #141212;
    }

    h2 {
      margin-top: 50px;
      text-align: center;
      font-size: 36px;
      text-transform: uppercase;
      color: #FFFFFF;
    }

    .container {
      border-radius: 5px;
      background-color: rgba(11, 10, 10, 0.9);
      padding: 30px;
      margin-top: 30px;
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #f8e2e2;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      background-color: #F9F9F9;
      color: #333333;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    label {
      font-weight: bold;
      background-color: #0a0808;
      color: #FFFFFF;
      padding: 10px;
      border-radius: 4px 4px 0 0;
    }

    textarea {
      height: 150px;
      background-color: #F9F9F9;
      color: #333333;
    }

    ::placeholder {
      color: #888;
    }
  </style>
</head>
<body>
  <h2>Contact Us</h2>
  <div class="container">
    <form action="submit.php" method="post">
      <label for="first_name">First Name</label>
      <input type="text" id="first_name" name="first_name" placeholder="Your first name..">

      <label for="last_name">Last Name</label>
      <input type="text" id="last_name" name="last_name" placeholder="Your last name..">

      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="india">India</option>
        <option value="usa">USA</option>
        <option value="england">England</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.."></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
