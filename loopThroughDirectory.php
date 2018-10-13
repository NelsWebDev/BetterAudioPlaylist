<?php
/*
  File Made at request of another YouTube. If you have a directory of Mp3's, and you don't want to type out each link, use this code to scan through an entire directory of links. 
  
  Requirements: Make sure that you're using a web server that supports PHP (if your webhost supports cPanel, you're all set). If your web server doesn't have PHP installed, or you are trying to use this code elsewhere (such as tumblr) this will not work. 
  
  Instructions:
  1. Rename your file extension from .html to .php (index.html should be index.php). 
  2. Paste this entire code between the unordered list ( <ul id="playlist"> CODEHERE </ul> ) 
  3. change the $fileDir value to whatever the directory containing your mp3s (must be on same server). 
      Keep the qutation marks and semicolon in tact. 
      Examples $fileDir = "audio"; $fileDir = "mp3"; $fileDir = "src/mp3";
  4. Save file, and check the webpage to make sure it's working. 
  
  Feel free to delete lines 2-17 from this. 

*/

            $fileDir = "audio";
            $files = scandir($fileDir);
            foreach($files as $file) {
                 if(substr($file,-4) == ".mp3"){
            echo "<li><a href='$fileDir/$file'>".substr($file,0,-4)."</a></li>";
                 }
            }
?>
