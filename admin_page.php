<?php
session_start();
if(!isset($_SESSION['admin_username'])){
    die("Please login first");
}
?>
<html>
<head>
  <style>
  h1{text-align:center;
    margin-top:150;
  }
  table, th, td {
    border:1px solid red;
}
  </style>
</head>
<body background="image/back.jpg">
  <center>
  <img src="image/admincontrl.jpg" alt="admin" height="187" width="1200">
</center>
<h1 >Welcome Admin</h1>
  <table border="1" width="90%" id="table1" height="186" align=center>
    <tr>
      <td colspan="5">
      <p align="center"><font color="#800000">&nbsp;<STRONG><FONT size="5">ADMINISTRATOR
      ONLINE</FONT></STRONG></font></td>
    </tr>
    <tr>
      <td height="51" align="center" width="24%"><a href="room_book.php"><STRONG>
      <FONT
color=#800000 size="5">Room Types </FONT></STRONG>
      </td>
      <td height="51" align="center" width="20%">
  <a href="room_bookings.php"><STRONG><B>
  <FONT
 color=#800000 size="5">Room Bookings</FONT></B></STRONG></td>

      <td width="16%" height="51" align="center">
<a href="search.php">
<font size="5"><STRONG><B>
  <FONT
 color=#800000 size="5">Search</FONT></B></STRONG></font></td>
<td height="42" align="center" width="20%">
<a href="membership.php">
<font size="5"><STRONG><B>
      <FONT color=#800000 size="5">Type of Members</FONT></B></STRONG></font>
      </td>
    </tr>
    <tr>
      <td colspan="5">
<p align="center"><a href="logout.php" ><STRONG>
<FONT size="5">LOG OUT</FONT></STRONG></td>
    </tr>
</table>

</body>
</html>
