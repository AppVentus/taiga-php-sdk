<?php

namespace Taiga;

/**
 * Taiga API main entry point.
 * Provides managers to connect, send and read data from Taiga API
 */
class Api extends RestClient
{
    public $projects;
    /**
     * Constructor
     */
    function __construct($token, $baseUrl)
    {
        parent::__construct($token, $baseUrl);
        // API Endpoints
        $this->projects = new Endpoints\Projects($this);
    }
}