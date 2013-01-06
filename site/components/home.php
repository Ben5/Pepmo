<?php
require_once(SiteConfig::REVERB_ROOT."/system/componentbase.php");

class Home extends ComponentBase
{
    protected function
    Index()
    {
        $this->ExposeVariable('title', SiteConfig::DEFAULT_HEAD_TITLE, true);
        $this->ExposeVariable('msg', 'Hello World');
    }
}
