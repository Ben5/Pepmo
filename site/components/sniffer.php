<?php

use Pepmo\SiteConfig;

require_once SiteConfig::REVERB_ROOT."/system/componentbase.php";

class Sniffer extends ComponentBase
{
    protected function
    Index()
    {
        $fileName = '/opt/git/Sniffer/output/sniffer.html';

        if (is_readable($fileName))
        {
            $snifferFile = fopen($fileName, 'r');
            $output = fread($snifferFile, filesize($fileName));
        }
        else
        {
            $output = 'Sniffer output not found';
        }

        $this->ExposeVariable('output', $output);
    }
}
