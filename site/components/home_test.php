<?php

use Pepmo\SiteConfig;

require_once SiteConfig::REVERB_ROOT."/system/componentbase.php";

class Home_Test extends ComponentBase
{
    protected function
    Index()
    {
        $this->ExposeVariable('title', SiteConfig::DEFAULT_HEAD_TITLE, true);

        $projects = array(
            array('name'   => 'TerrainGen',
                  'url'    => '/html/terraingen/terrain/index',
                  'thumb'  => 'TerrainGenThumb.PNG',
                  'details'=> 'A little PHP app to generate and draw a 2D map consisting of different terrain types.
                               <br>
                               <br>
                               There are currently three types of terrain - Ocean, Beach and Grassland. 
                               <br>
                               There is a strict set of rules to define what types are allowed to be next to each other, for instance an ocean tile cannot be directly next to a grassland tile.
                               <br>
                               I have included the ability to change the dimensions of the generated map through a simple form, and I hope to add the ability to change the ruleset governing terrain relationships and maybe even the set of different terrain types.',
                  'github' => 'https://github.com/Ben5/TerrainGen'),
            array('name'   => 'Reverb Framework',
                  'url'    => '/html/reverb/hello/index',
                  'thumb'  => '',
                  'details'=> 'Extremely lightweight MVC pattern \'framework\' for PHP. This MVC pattern implementation (I hesitate to call it a framework, as it is so lightweight) has only been tested on Apache, but it should work without modification on a server running NGinX as well. I have provided the Apache config required to get it working on the GitHub page for this project, perhaps the NGinX equivalent will follow shortly :)',
                  'github' => 'https://github.com/Ben5/Reverb'),
            array('name'   => 'Sniffer',
                  'url'    => '/html/sniffer/index',
                  'thumb'  => 'SnifferOutput.PNG',
                  'details'=> 'A custom PHP static analysis script written in Python.',
                  'github' => 'https://github.com/Ben5/Sniffer'),
            array('name'   => 'Symblog',
                  'url'    => '/symblog/app.php',
                  'thumb'  => '',
                  'details'=> 'Creating a blog with Symfony2, following tutorial at <a href="http://tutorial.symblog.co.uk" target="_blank">tutorial.symblog.co.uk</a>.',
                  'github' => 'https://github.com/Ben5/Symblog'),
            );

        $this->ExposeVariable('projects', $projects);
    }
}
