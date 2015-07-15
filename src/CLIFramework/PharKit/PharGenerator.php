<?php
namespace CLIFramework\PharKit;
use Phar;
use CLIFramework\Logger;


class PharGenerator
{
    protected $pharFile;

    protected $alias;

    protected $map;

    protected $phar;

    protected $shellbang = '#!/usr/bin/env php';

    protected $logger;

    public function __construct(Logger $logger, $pharFile, $alias = null)
    {
        $this->logger = $logger;
        $this->pharFile = $pharFile;

        if ($alias) {
            $this->alias = $alias;
        } else {
            $this->alias = basename($alias);
        }

        $this->phar = new Phar($this->pharFile, 0, $this->alias);
        $this->phar->setSignatureAlgorithm(Phar::SHA1);
    }

    public function shellbang($shellbang)
    {
        $this->shellbang = $shellbang;
    }

    public function getPhar()
    {
        return $this->phar;
    }

    public function generate()
    {
        $this->phar->startBuffering();


   
   
    }



}

