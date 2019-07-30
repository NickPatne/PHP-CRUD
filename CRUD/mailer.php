<?php 

 $textfile = fopen("/CRUD/textfile.txt", "w") or die("Unable to open file!");

    fwrite($textfile , 'Nikhil');
    fwrite($textfile, "\n\n\n");
    fwrite($textfile , 'Patne');
    fwrite($textfile, "\n\n\n");
    fclose($textfile);
    ?>