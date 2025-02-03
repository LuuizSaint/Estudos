<?php

namespace app\http;

class Request
{
    private string $httpMethod;
    private string $uri;
    private array $queryParams = [];
    private array $postParams = [];
    private array $headers = [];

    public function __construct()
    {
        $this->httpMethod = $_SERVER["REQUEST_METHOD"] ?? "";
        $this->uri = $_SERVER["REQUEST_URI"] ?? "";
        $this->queryParams = $_GET ?? [];
        $this->postParams = $_POST ?? [];
        $this->headers = getallheaders();
    }

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function getPostParams()
    {
        return $this->postParams;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
