<!--
Name: Julia Telle
Date: 10/31
Page: Contact
Description: This page allows users to send me a message.
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="nav.css">
<!--Custom font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<?php include 'header.html'; ?>

<!--Form-->
<main>
<h1>Let's Connect!</h1>
<form action="mailto:juliatelle97@gmail.com?Subject=Form%20Submission" method="post" enctype="text/plain">
<fieldset>
<legend>Join my email list</legend>
<h3>Stay up to date on the latest EdTech trends and resources.</h3>


<ol>
<li>
<label for="title">Title:</label>
<select name="title" id="title" required>
<option value="" disabled selected>Select your title</option>
<option>Mr.</option>
<option>Ms.</option>
<option>Mrs.</option>
<option>Dr.</option>
<option>Prof.</option>
</select>
</li>


<li>
<label for="firstname">First Name:</label>
<input type="text" name="firstname" id="firstname" required placeholder="Enter your first name">
</li>


<li>
<label for="lastname">Last Name:</label>
<input type="text" name="lastname" id="lastname" required placeholder="Enter your last name">
</li>


<li>
<label for="email">Email:</label>
<input type="email" name="email" id="email" required placeholder="Please enter a valid email address (e.g: name@example.com)">
</li>


<li>
<label>Role:</label>
<div class="role-buttons">
<label><input type="radio" name="role" value="Educator" required> Educator</label>
<label><input type="radio" name="role" value="Instructional Coach"> Instructional Coach</label>
<label><input type="radio" name="role" value="Administrator"> Administrator</label>
<label><input type="radio" name="role" value="EdTech Specialist"> EdTech Specialist</label>
<label><input type="radio" name="role" value="Other"> Other (please specify in message)</label>
</div>
</li>


<li>
<label for="message">Message:</label>
<textarea name="message" id="message" required placeholder="Write your message here"></textarea>
</li>
</ol>


<input type="submit" value="Submit">
</fieldset>
</form>
</main>

<?php include 'footer.html'; ?>