<?php
namespace App\View;

use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder
{

    protected $activePath;
    protected $basePath;

    public function setBasePath($path){
        $this->basePath = $path;
    }
    public function setActiveTheme($theme){
        $this->activePath = $theme;
        array_unshift($this->paths, $this->basePath.'/'.$theme.'/views');
    }


}