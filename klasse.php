<!DOCTYPE html5>
<html lang="de"><!-- -->
<head> 
<meta charset=utf-8><!--Bis <title> nur Metaangaben kann die man so nicht sehen kann-->
<meta name="author" content="Phillip">
<meta name="description" content="Bundesjugendspiele" />
<meta name="keywords" content="Bundesjugendspiele" />
<title> Bundesjugendspiele </title>
<link rel="stylesheet" type="text/css" href="style.css" /><!--Verweist aud die css Datei -->
<!--Damit der IE auf html5 versteht -->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" type="image/x-icon" href="icon.ico"><!--Icon oben links -->
</head>

<body>
	<header>
	<a href="index.html"><img id="b"src ="logo.png"></a><!-- -->
	<h1><a href="index.html">Bundesjugendspiele</a></h1>
	</header>
	<nav><!--Anfag Menü(Navigation) -->
<ul>
   <li><a href='index.html'><span>Home</span></a></li><!--1 Menüeintrag -->
   <li class='has-sub '><a href='#'><span>Orientierungsstufe</span></a><!--2 Menüeintrag -->
      <ul>
         <li class='has-sub '><a href='#'><span>Klasse 5</span></a><!--1 UnterMenüeintrag -->
            <ul>
               <li><a href='klasse.php?klasse=5a'><span>5a</span></a></li><!--1 UnterunterMenüeintrag -->
               <li><a href='klasse.php?klasse=5b'><span>5b</span></a></li><!--und so weiter... -->
               <li><a href='klasse.php?klasse=5c'><span>5c</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Klasse 6</span></a>
            <ul>
               <li><a href='klasse.php?klasse=6a'><span>6a</span></a></li>
               <li><a href='klasse.php?klasse=6b'><span>6b</span></a></li>
               <li><a href='klasse.php?klasse=6c'><span>6c</span></a></li>
               <li><a href='klasse.php?klasse=6d'><span>6d</span></a></li>
               <li><a href='klasse.php?klasse=6e'><span>6e</span></a></li>
            </ul>
         </li>
         </li>
     </ul>
    <li class='has-sub '><a href='#'><span>Mittelstufe</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Klasse 7</span></a>
            <ul>
               <li><a href='klasse.php?klasse=7a'><span>7a</span></a></li>
               <li><a href='klasse.php?klasse=7b'><span>7b</span></a></li>
               <li><a href='klasse.php?klasse=7c'><span>7c</span></a></li>
               <li><a href='klasse.php?klasse=7d'><span>7d</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Klasse 8</span></a>
            <ul>
               <li><a href='klasse.php?klasse=8a'><span>8a</span></a></li>
               <li><a href='klasse.php?klasse=8b'><span>8b</span></a></li>
               <li><a href='klasse.php?klasse=8c'><span>8c</span></a></li>
               <li><a href='klasse.php?klasse=8d'><span>8d</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Klasse 9</span></a>
            <ul>
               <li><a href='klasse.php?klasse=9a'><span>9a</span></a></li>
               <li><a href='klasse.php?klasse=9b'><span>9b</span></a></li>
               <li><a href='klasse.php?klasse=9c'><span>9c</span></a></li>
               <li><a href='klasse.php?klasse=9d'><span>9d</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Klasse 10</span></a>
            <ul>
               <li><a href='klasse.php?klasse=10a'><span>10a</span></a></li>
               <li><a href='klasse.php?klasse=10b'><span>10b</span></a></li>
               <li><a href='klasse.php?klasse=10c'><span>10c</span></a></li>
               <li><a href='klasse.php?klasse=10d'><span>10d</span></a></li>
               <li><a href='klasse.php?klasse=10e'><span>10e</span></a></li>
            </ul>
         </li>
         </li>
	</ul>
		<li class='has-sub '><a href='#'><span>Oberstufe</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Klasse 11</span></a>
            <ul>
               <li><a href='klasse.php?klasse=11a'><span>11a</span></a></li>
               <li><a href='klasse.php?klasse=11b'><span>11b</span></a></li>
               <li><a href='klasse.php?klasse=11c'><span>11c</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Klasse 12</span></a>
            <ul>
               <li><a href='klasse.php?klasse=12a'><span>12a</span></a></li>
               <li><a href='klasse.php?klasse=12b'><span>12b</span></a></li>
               <li><a href='klasse.php?klasse=12c'><span>12c</span></a></li>
               <li><a href='klasse.php?klasse=12d'><span>12d</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Klasse 13</span></a>
            <ul>
               <li><a href='klasse.php?klasse=9c'><span>13a</span></a></li>
               <li><a href='klasse.php?klasse=9c'><span>13b</span></a></li>
               <li><a href='klasse.php?klasse=9c'><span>13c</span></a></li>
            </ul>
         </li>
         </li>
     </ul>
</nav>
	
	<!--Beginn mit Seiten inhalt -->


<?php
$klasse=$_GET['klasse'];

$verbindung = mysql_connect ("Servername","Username", "Passwort")
or die ("keine Verbindung möglich.Benutzername oder Passwort sind falsch");

mysql_select_db("Datenbankenname")or die ("Die Datenbank existiert nicht.");
$abfrage = "SELECT Spaltenname FROM Tabellenname";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
   echo "$row->Spaltenname";
   }

echo '<br> Klasse'.$klasse.':';
if ($klasse== '9c')
	{
	echo'
	<br>
	<form method="POST" action="wertung.php">
		Disziplin: &nbsp;&nbsp;
		<select name="dropdownn">
		<option value="Sprint">Sprint</option>
		<option value="Langlauf">Langlauf</option>
		<option value="Weitsprung">Weitsprung</option>
		<option value="Weitwurf">Weitwurf</option>
		<option value="Hochsprung">Hochsprung</option>
		<option value="Kugelstoßen">Kugelsto&szlig;en</option>
		</select>
		<br><br>
		<table border="1" width="100%" >
		<tr align="center">
			<th>Nachname</th>
			<th>Vorname</th>
			<th>erreichte Punkte</th>
		</tr>
	</table>
	<p align="right"><input type="submit" name="auswertung" value="Auswerten"></p>
	</form>
';
}
?>


<!--Ende mit Seiten inhalt -->
<!--Beginn "footer" Fußzeile -->
<footer>
	<strong>Von Phillip</strong> - <em>MGS</em><!--<em> ist kursiv-->
</footer>
</body>
</html>
