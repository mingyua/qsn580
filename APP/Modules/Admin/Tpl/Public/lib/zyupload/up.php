<?php



$uploaddir = 'uploads/';

$uploadfile = $uploaddir.$_FILES['file']['name'];

print "<pre>";
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $_FILES['file']['name'])) {
    print "文件存在，并且已经上传成功。这里是一些调试信息:\n";
    print_r($_FILES);
} else {
    print "Possible file upload attack!  Here's some debugging info:\n";
    print_r($_FILES);
}
print "</pre>";

?>