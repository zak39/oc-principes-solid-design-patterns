<?php

class FileManager
{
    public static function copy(string $source, string $destination): bool
    {
        $isCopied = copy($source, $destination);

        if (!isCopied) {
            throw new \Exception("Impossible de copier le fichier {$source} vers {$destination}");
        }
    }

    public static function getTmpDir(): string
    {
        return sys_get_temp_dir();
    }

    public static function create(int $width, int $height): GdImage|false
    {
        return \imagecreatetruecolor($width, $height);
    }

    public static function destroy($image)
    {
        \imagedestroy($image);
    }
}