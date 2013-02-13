<?php

use Pepmo\SiteConfig;

require_once SiteConfig::REVERB_ROOT."/system/componentbase.php";

class Sniffer extends ComponentBase
{
    protected function
    Index()
    {
        $fileName = '/opt/git/Sniffer/output/sniffer_embed.html';

        if (is_readable($fileName))
        {
            $snifferFile = fopen($fileName, 'r');
            $output = fread($snifferFile, filesize($fileName));

            // now read in the stylesheet, ready for prepending
            $stylesheetFilename = '/opt/git/Sniffer/output/output.css';

            if (is_readable($stylesheetFilename))
            {
                $styleFile = fopen($stylesheetFilename, 'r');
                $styleString = fread($styleFile, filesize($stylesheetFilename));

                $output = '<style type="text/css">' . $styleString . '</style>' . $output;
            }
        }
        else
        {
            $output = 'Sniffer output not found';
        }

        $this->ExposeVariable('output', $output);
    }
}
