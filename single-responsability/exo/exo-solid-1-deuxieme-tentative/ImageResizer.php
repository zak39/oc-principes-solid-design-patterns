<?php

require 'ExtensionValidator.php';
require 'FileInformation.php';

class ImageResizer
{
    public function resize($origin, $destination, $width, $maxHeight)
    {
        $type = (new FileInformation)->getExtension($origin);
        $extensionValidator = new ExtensionValidator();
        if ($extensionValidator->jpegValidator($type)) {
            $type = 'jpeg';
        } elseif ($extensionValidator->pngValidator($type)) {
            $type = 'png';
        }
        $function = 'imagecreatefrom' . $type;

        if (!is_callable($function)) {
            return false;
        }

        $image = $function($origin);

        $imageWidth = \imagesx($image);
        if ($imageWidth < $width) {
            if (!copy($origin, $destination)) {
                throw new Exception("Impossible de copier le fichier {$origin} vers {$destination}");
            }
        } else {
            $imageHeight = \imagesy($image);
            $height = (int) (($width * $imageHeight) / $imageWidth);
            if ($height > $maxHeight) {
                $height = $maxHeight;
                $width = (int) (($height * $imageWidth) / $imageHeight);
            }
            $newImage = \imagecreatetruecolor($width, $height);

            if ($newImage !== false) {
                \imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $imageWidth, $imageHeight);

                $function = 'image' . $type;

                if (!is_callable($function)) {
                    return false;
                }

                $function($newImage, $destination);

                \imagedestroy($newImage);
                \imagedestroy($image);
            }
        }
    }
}