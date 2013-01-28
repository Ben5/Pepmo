<?php

use Pepmo\SiteConfig;

require_once SiteConfig::REVERB_ROOT."/system/componentbase.php";

class Home extends ComponentBase
{
    protected function
    Index()
    {
        $this->ExposeVariable('title', SiteConfig::DEFAULT_HEAD_TITLE, true);

        $projects = array(
            array('name'   => 'TerrainGen',
                  'url'    => '/html/terraingen/terrain/index',
                  'github' => 'https://github.com/Ben5/TerrainGen'),
            array('name'   => 'Reverb Framework',
                  'url'    => '/html/reverb/hello/index',
                  'github' => 'https://github.com/Ben5/Reverb'),
            array('name'   => 'Sniffer',
                  'url'    => '/html/sniffer/index',
                  'github' => 'https://github.com/Ben5/Sniffer'),
            );

        $this->ExposeVariable('projects', $projects);
    }
}
