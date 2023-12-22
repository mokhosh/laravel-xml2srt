<?php

namespace Mokhosh\LaravelXmlToSrt;

use Illuminate\Support\Collection;

class Caption
{
    protected Collection $lines;

    public function add(Line $line)
    {
        $this->lines->push($line);
    }
}