<?php
#app\Modules\ModuleDefault.php
namespace App\Modules;

trait ModuleDefault
{
    public function getData()
    {
        return $this->processData();
    }

    public function processData()
    {
        return null;

    }

    public function install()
    {
        return null;
    }

    public function uninstall()
    {
        return null;
    }

    public function enable()
    {
        return null;
    }
    public function disable()
    {
        return null;
    }

    public function config()
    {
        return null;
    }

    public function process($data)
    {
        return null;
    }

}
