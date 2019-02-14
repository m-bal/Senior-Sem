<!DOCTYPE HTML>
<html>
<head>
<title>
Game
</title>
</head>
<body>
<?php

    $pawn = array(0, 1, 2, 3, 4);
    for ($i = 0; $i < 20; $i++) {
	$one = rand(0, 4);
	$two = rand(0, 4);
	$temp = $pawn[$one];
	$pawn[$one] = $pawn[$two];
	$pawn[$two] = $temp;
    }
   
    $db = pg_connect("host=localhost port=5432 dbname=careerai user=careerai password=pal92Dizj");
    $at = 0;
    $level =1;
    $subject = 'math';
    $pro_num = rand(0, 1);
    $que_num = rand(0, 3);
    $pro_id = $pro_num + 1000;
    $theQuery = 'SELECT prompt, question, a.answer, a2.answer, a3.answer, a4.answer, a5.answer FROM question q INNER JOIN prompt p ON p.pid = q.pid INNER JOIN answer a ON a.aid = q.answer1 INNER JOIN answer a2 ON a2.aid = q.answer2 INNER JOIN answer a3 ON a3.aid = q.answer3 INNER JOIN answer a4 ON a4.aid = q.answer4 INNER JOIN answer a5 ON a5.aid = q.solution WHERE q.lvl = '.$level.' AND p.type =\'' . $subject . '\';';
    $query = pg_query($db, $theQuery);
    
    $row = pg_fetch_row($query);
?>
<form method="post" action="check.php">
<h1> <?php echo htmlspecialchars($row[0]);?></h1>

<?php
for ($i=0; $i<5; $i++) {
    echo "<h2> Question". htmlspecialchars($i + 1)." </h2>";
    echo "<p>". htmlspecialchars($row[1])."</p>";
    echo "<input type = \"radio\" name = \"question". htmlspecialchars($i + 1)."\" value =".htmlspecialchars($row[2]).">". htmlspecialchars($row[2]). "<br>\n";
    echo "<input type = \"radio\" name = \"question". htmlspecialchars($i + 1)."\" value =".htmlspecialchars($row[3]).">". htmlspecialchars($row[3]). "<br>\n";
    echo "<input type = \"radio\" name = \"question". htmlspecialchars($i + 1)."\" value =".htmlspecialchars($row[4]).">". htmlspecialchars($row[4]). "<br>\n";
    echo "<input type = \"radio\" name = \"question". htmlspecialchars($i + 1)."\" value =".htmlspecialchars($row[5]).">". htmlspecialchars($row[5]). "<br>\n";
    echo "<input type = \"radio\" name = \"question". htmlspecialchars($i + 1)."\" value =".htmlspecialchars($row[6]).">". htmlspecialchars($row[6]). "<br>\n";
    echo "<input type = \"radio\" name = \"question". htmlspecialchars($i + 1)."\" value =".htmlspecialchars("NULL")." hidden checked = \"checked\">";
    
    if ($i!=4) {
        $row = pg_fetch_row($query);
    }
    echo "\n";
}
?>
<input type = "submit"  value = "Submit">
</form>

</body>
</html>
