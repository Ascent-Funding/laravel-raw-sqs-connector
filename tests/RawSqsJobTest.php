<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use AscentFunding\LaravelRawSqsConnector\RawSqsJob;

class RawSqsJobTest extends TestCase
{
    public function testGettersSetters()
    {
        $data = ['first_name' => 'Primitive'];
        $rawSqsJob = new RawSqsJob($data);
        $this->assertSame($data, $rawSqsJob->getData());
    }
}
