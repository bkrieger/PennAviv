<?php
include 'common/header.php';
$con = mysql_connect("localhost","root","");
if(!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("PennAviv", $con);


echo "<div id=\"board\">";
echo "<h3>Board of Directors</h3>";

$result = mysql_query("SELECT * FROM Board");

while ($row = mysql_fetch_array($result)) {
	echo "<div class=\"person\">
        <div class=\"words\">";
    echo "<h4 class=\"name\">" . $row['name'] . "</h4>";
    echo "<h4 class=\"title\">" . $row['title'] . "</h4>";
    echo "<p class=\"info\">" . $row['info'] . "</p>";
    echo "</div>";
    echo "<img src=\"" . $row['img'] . "\" />";
    echo "</div>";
}

echo "</div>";

include 'common/footer.php';
?>


<!--
<?php include_once 'common/header.php' ?>
<div id="board">
    <h3>Board of Directors</h3>
    <div class="person">
        <div class="words">
            <h4 class="name">James Feuereisen</h4>
            <h4 class="title">Co-President</h4>
            <p class="info">James is a sophomore at Penn pursuing a dual degree between between the College of Arts Sciences (Molecular Biology) and The Wharton School. He's currently doing a part-time internship for petridish.org as well as doing lab research at the University of Michigan on stem cell treatment for ALS. During his freshman year he did work for Lore and was active with The Weiss Tech House, Penn Synapse, in addition to helping to found PennAviv. He is technology geek as well as an ardent supporter of Israel and hopes to share these passions with others. He is a proud native of Metro Detroit. </p>
        </div>
        <img src="Images/james_photo.jpg" />
    </div>
    <div class="person">
        <div class="words">
            <h4 class="name">Brandon Krieger</h4>
            <h4 class="title">Co-President</h4>
            <p class="info">Brandon is a sophomore at Penn pursuing a degree in Computer Science and Mathematical Economics. He has worked as an undergraduate research assistant in the CIS department in the Engineering school, and is a TA for CIS 120 this Fall. He also worked with SED International as in information systems intern, and enjoys programming and web development. Brandon is from Jericho, NY and is a huge fan of baseball and basketball.</p>
        </div>
        <img src="Images/brandon_photo.jpg" />
    </div>
    <div class="person">
        <div class="words">
            <h4 class="name">Adam Wachs</h4>
            <h4 class="title">Co-President</h4>
            <p class="info">Adam is a sophomore at Wharton pursuing a Bachelor of Science degree. He is currently a Campus Coordinator for the World Zionist Organization and is involved in other Jewish organizations on campus, including UPenn Hillel, the Lubavitch House at Penn, and Meor. He has a strong passion for Israel as he spent a gap year there between high school and university. He is committed to helping others find ways to get to Israel. Adam is from Lower Merion, PA and is a big fan of music and snowboarding.</p>
        </div>
        <img src="Images/adam_photo.jpg" />
    </div>
</div>
<?php include_once 'common/footer.php' ?>
-->