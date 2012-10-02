<?php
include 'common/header.php';

$con = mysql_connect("localhost","root","");
if(!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("PennAviv", $con);


echo "<div id=\"events\">";
echo "<h2>Events</h2>";

$result = mysql_query("SELECT * FROM Events");

while ($row = mysql_fetch_array($result)) {
	echo "<h3>" . $row['title'] . "</h3>";
	echo "<p class=\"description\">" . $row['description'] . "</p>";
}

echo "<p>Join our mailing list by emailing pennaviv@gmail.com to be notified of any upcoming events.</p>";
echo "<p>The dates and times of all our events will be listed on the <a href=\"calendar.php\">Google Calendar here</a>.</p>";
echo "<p>If you have ideas for PennAviv events, shoot us an email! We cater PennAviv events for Penn students.</p>";
echo "</div>";

include 'common/footer.php';
?>

<!--
<?php include_once 'common/header.php' ?>
<div id="events">
	<h2>Events</h2>
	<h3>Jon Medved</h3>
	<p class="description">On November 4th, we will be meeting with Jon Medved at 7pm in Huntsman Hall.</p>
	<p>Join our mailing list by emailing pennaviv@gmail.com to be notified of any upcoming events.</p>
	<p>The dates and times of all our events will be listed on the <a href="calendar.php">Google Calendar here</a>.</p>
	<p>If you have ideas for PennAviv events, shoot us an email! We cater PennAviv events for Penn students.</p>
	</div>
<?php include_once 'common/footer.php' ?>
-->