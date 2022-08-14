<?php

// Readin File

$path = "D:/data.txt";
$file = fopen($path, "a+");

if ($file == false) {
    print("Error in openng File\n\n");
    exit();

}


$filesize = filesize($path);
$filetext = fread($file, $filesize);

fclose($file);

print("The File Size is $filesize bytes\n\n");

print("\nLETS SEE THE CONTENT OF THE FILE\n\n");

print($filetext);



//WRITING File


fwrite($file,"\nMambo Mengi Mdaa Mchache.");
fclose($file)


?>