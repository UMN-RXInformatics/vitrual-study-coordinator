<?php
if(!session_id()) session_start(); // session start


        if($_REQUEST['Digits'] = "1"){
		// good to go
                echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
                echo "<Response><Play>./audio/EnglishPhonemicVFPromptApple.mp3</Play>\n";
                echo "<Play>./audio/EnglishPromptBegin.mp3</Play>\n";
                echo "<Record timeout=\"60\" maxLength=\"60\" action=\"./process-LetterA.php\"/></Response>";

        }else{
		// loop
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
                echo "<Response><Gather timeout=\"5\"  numDIgits=\"1\" action=\"./process-FirstDigit.php\"/></Response>";
        }

?>

