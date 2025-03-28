<?php

/**
 * Obtém o tipo de um arquivo
 * @param mixed $file: arquivo a ser verificado
 * @return string
 */
function getFileExtension($file)
{
    return strtolower(pathinfo($file, PATHINFO_EXTENSION));
}

/**
 * Verifica se um arquivo é uma imagem
 * @param mixed $filename: arquivo a ser verificado
 * @return bool
 */
function isImage($filename): bool
{
    $check = getimagesize($filename);
    return !!$check;
}

/**
 * Verifica se um arquivo excede o limite de tamanho
 * @param mixed $filename: arquivo a ser verificado
 * @param int $size: tamanho máximo permitido
 * @return bool
 */
function tooLargeFile($filename, $size = 500000): bool
{
    return filesize($filename) > $size;
}

/**
 * Verifica se o tipo de imagem é permitido
 * @param string $imageType: tipo da imagem
 * @param array $allowedTypes: tipos permitidos
 * @return bool
 */
function allowedImageType($imageType, $allowedTypes = ['png', 'jpg', 'jpeg', 'gif']): bool
{
    return in_array($imageType, $allowedTypes);
}
