<?php

require 'FileManager.php';

class FileImage
{
    private GDImage $ressource;
    
    public function __construct(
        array $data
    )
    {
        $this->temporaryName = $data['tmp_name'];
        $this->name = $data['name'];
        $this->type = $data['type'];
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTemporaryName(): string
    {
        return $this->temporaryName;
    }

    public function getExtension()
    {
        return pathinfo($this->name, PATHINFO_EXTENSION);
    }

    public function getWidth(): int
    {
        return \imagesx($this->ressource);
    }

    public function getHeight(): int
    {
        return \imagesy($this->ressource);
    }

    public function getAbsolutePath(): string
    {
        return FileManager::getTmpDir() . $this->temporaryName();
    }

}