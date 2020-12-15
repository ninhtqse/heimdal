<?php

namespace Ninhtqse\Heimdal\Reporters;

use Throwable;

interface ReporterInterface
{
    public function report(Throwable $e);
}
