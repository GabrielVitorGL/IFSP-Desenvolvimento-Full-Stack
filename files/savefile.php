<?php
include '../libraries/file_upload.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = getFileExtension($target_file);

if (!isImage($_FILES["fileToUpload"]["tmp_name"])) {
    return die("O arquivo não é uma imagem.");
}


if (!tooLargeFile($_FILES["fileToUpload"]["tmp_name"])) {
    return die("O arquivo é muito grande.");
}

if (!allowedImageType($imageFileType)) {
    return die("Apenas arquivos PNG, JPG, JPEG e GIF são permitidos.");
}

if ($uploadOk == 0) {
    echo "Houve um erro ao enviar o arquivo.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi enviado.";
    } else {
        echo "Houve um erro ao enviar o arquivo.";
    }
}
