<?php

namespace Tests\Support;

use AscentFunding\LaravelRawSqsConnector\RawSqsJob;

class TestJobClass extends RawSqsJob
{
    public $data = [];
}
