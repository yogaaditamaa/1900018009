<?php
   $nama = $_POST['nama']; 
   $email = $_POST['email'];
   $nomer = $_POST['nomer'];
   $username = $_POST['username'];
   $Password = $_POST['Password'];
   $ttl = $_POST['ttl'];
   $Kelamin = $_POST['Kelamin'];
   $Agama = $_POST['Agama'];


   echo "Nama     : ".$nama;
   echo "<br />";
   echo "E-mail   : ".$email;
   echo "<br />";
   echo "Nomer    :".$nomer;
   echo "<br />";
   echo "Username :".$username;
   echo "<br />";
   echo "Password :".$Password;
   echo "<br />";
   echo "TTL      :".$ttl;
   echo "<br />";
   echo "Kelamin  :".$Kelamin;
   echo "<br />";
   echo "Agama    :".$Agama;
?>