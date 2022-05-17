<?php include('partials-front/menu.php'); ?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.user-cannot-see {
  display:none;
}
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
  background-color: #04AA6D;
  color: black;
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
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<h1>View order</h1>
<div class="container">
  <form method="post" action="vieworder.php">
    <label for="name">Name</label>
    <textarea id="name" name="name" placeholder="What is your name" required></textarea>
    <br>
    <label for="email">Email</label>
    <textarea id="email" name="email" placeholder="What is your email" required></textarea>
    <br>
    <input type="submit" value="Submit">

  </form>