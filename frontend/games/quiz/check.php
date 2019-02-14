<?php
$question1 = "";
$answers = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for($i = 0; $i < count($_POST); $i++){
            $answers[$i] = $_POST["question".htmlspecialchars(1 + $i)];
        }
        
    }
    $db = pg_connect("host=localhost port=5432 dbname=careerai user=careerai password=pal92Dizj");
    $theQuery = 'SELECT answer FROM question INNER JOIN prompt ON question.pid = prompt.pid INNER JOIN answer ON answer.aid = question.solution WHERE question.lvl = 1  AND prompt.type = \'math\';';
    $query = pg_query($db, $theQuery);
    $count = 0;
    for($i = 0; $i < count($_POST); $i++) {
         $row = pg_fetch_row($query);
        if($answers[$i] == htmlspecialchars($row[0])) {
            $count++;
        }   
    }
	
	
	
   $result = $count/count($_POST);
   echo "You scored a " . htmlspecialchars($result * 100). "%!\n";
   if($result* 100 == 100){
	   echo "You can be a Mathematical Tech\n";   
   }
   else if($result* 100 >= 94){
	   echo "You can be a Mathematician\n";
   }
   else if($result* 100 >=91){
		echo "You can be a Statistical Assistants\n";
   }else if($result* 100 >= 88){
	   echo "You can be a Physicists
			Actuaries\n";
   }
   else if($result* 100 >= 85){
	   echo "You can be a Biostatisticians
		Mathematical Science Teachers, Postsecondary
		\n";
   }else if($result* 100 >= 81){
	   echo "You can be a Geodetic Surveyors\n";
   }else if($result* 100 >= 78){
	   echo "You can be an Astronomers or a
			Financial Quantitative Analysts
			\n";
   }else if($result* 100 >= 75){
	   echo "You can be a Manufacturing Engineering Technologists
			Molecular and Cellular Biologists
			Environmental Economists
			Transportation Engineers
			Chemical Engineers
			Cost Estimators
			Remote Sensing Scientists and Technologists
			Budget Analysts
			Survey Researchers
			Surveyors or
			Accountants\n";
   }else if($result* 100 >= 72){
		echo "You can be a Civil Engineers, Photonics Engineers, Aerospace Engineers ,Automotive Engineers ,Mechanical Engineers, Robotic, Engineers, Biochemists and Biophysicists\n";	
   }
   else{
		echo "You might not be anything.\n";
   }
   $theQuery2 = 'SELECT MAX(gameid) FROM gameresults';
   $query2 = pg_query($db, $theQuery2);
   $row = pg_fetch_row($query2);
   if($row[0] == "") {
       $id = 1;
   }
   else {
       $id = $row[0] + 1;
   }
   $theQuery3 = 'INSERT INTO gameresults VALUES (' . $id . ', ' . (double)$result . ', ' . '\'Math Reasoning\', ' . '\'Math Reasoning\', 1);';
   $res = pg_query($db, $theQuery3);
   if(!$res) {
       echo "There was an error posting your results\n";
   }
   else {
     //  echo "Your result were posted sucessfuly\n";
   }


?>
