<?php 
function save_image($inPath,$outPath)
{ //Download images from remote server
    $in=    fopen($inPath, "rb");
    $out=   fopen($outPath, "wb");
    while ($chunk = fread($in,8192))
    {
        fwrite($out, $chunk, 8192);
    }
    fclose($in);
    fclose($out);
}

echo mkdir("testing");

$srcfile="http://localhost/beetobeez.com/uploads/thumbs/33333343.jpg";
$dstfile=$_SERVER['DOCUMENT_ROOT'] . "/ajesh/1.jpg";
mkdir(dirname($dstfile), 0777, true);
copy($srcfile, $dstfile);
?>