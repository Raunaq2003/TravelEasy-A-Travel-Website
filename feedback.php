<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("travelfeedback.jpg");}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Feedback Form</h3>

<div class="container">
  <form action="sub.php" method="post">
    <label for="f_name">First Name</label>
    <input type="text" id="fname" name="f_name" placeholder="Your name..">

    <label for="l_name">Last Name</label>
    <input type="text" id="l_name" name="l_name" placeholder="Your last name..">

    <label for="rate"> How do you rate our website?</label>
    <select id="rate" name="rate">
      <option value="good">Good</option>
      <option value="average">Average</option>
      <option value="bad">Bad</option>
    </select>

    <label for="comments">Comments</label>
    <textarea id="comments" name="comments" placeholder="Your Comments.." style="height:200px"></textarea>

   <button onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Successfully saved!";
}
</script>
  </form>
</div>

</body>
</html>