<?php

require 'FileImage.php';
require 'FileManager.php';

class FileImageResizer
{

    public function resize(FileImage $file, string $destination, $width, $maxHeight)
    {
        $function = 'imagecreatefrom' . $file->getType();

        if (!is_callable($function)) {
            return false;
        }

        $image = $function($origin);

        $imageWidth = $file->getWidth();
        if ($imageWidth < $width) {
            if (!copy($file->getAbsolutePath(), $destination)) {
                throw new Exception("Impossible de copier le fichier {$file->getAbsolutePath()} vers {$destination}");
            }
        } else {
            $imageHeight = $file->getHeight();
            $height = (int) (($width * $imageHeight) / $imageWidth);
            if ($height > $maxHeight) {
                $height = $maxHeight;
                $width = (int) (($height * $imageWidth) / $imageHeight);
            }
            $newImage = FileManager::create($width, $height);

            if ($newImage !== false) {
                \imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $imageWidth, $imageHeight);

                $function = 'image' . $type;

                if (!is_callable($function)) {
                    return false;
                }

                $function($newImage, $destination);

                FileManager::destroy($newImage);
                FileManager::destroy($image);
            }
        }
    }
}
