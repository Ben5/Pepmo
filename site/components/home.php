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
                  'details'=> 'A little PHP app to generate and draw a 2D map consisting of different terrain types (ocean, beach, grass, etc).',
                  'github' => 'https://github.com/Ben5/TerrainGen'),
            array('name'   => 'Reverb Framework',
                  'url'    => '/html/reverb/hello/index',
                  'details'=> 'Extremely lightweight MVC pattern \'framework\' for PHP. This MVC pattern implementation (I hesitate to call it a framework, as it is so lightweight) has only been tested on Apache, but it should work without modification on a server running NGinX as well. I have provided the Apache config required to get it working on the GitHub page for this project, perhaps the NGinX equivalent will follow shortly :)',
                  'github' => 'https://github.com/Ben5/Reverb'),
            array('name'   => 'Sniffer',
                  'url'    => '/html/sniffer/index',
                  'details'=> 'A custom PHP static analysis script written in Python.',
                  'github' => 'https://github.com/Ben5/Sniffer'),
            array('name'   => 'Symblog',
                  'url'    => '/symblog/app_dev.php',
                  'details'=> 'Creating a blog with Symfony2, following tutorial at <a href="tutorial.symblog.co.uk">tutorial.symblog.co.uk</a>.',
                  'github' => 'https://github.com/Ben5/Symblog'),
            );

        $this->ExposeVariable('projects', $projects);
    }
}
