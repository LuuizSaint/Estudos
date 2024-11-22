<?php

namespace app\http;

class Response
{
    private int $httpCode = 200;
    private array $headers = [];
    private string $contentType = "text/html";
    private mixed $content;


    public function __construct(int $httpCode, mixed $content, string $contentType = "text/html")
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader("ContentType", $contentType);
    }

    public function addHeader(string $key, string $value)
    {
        $this->headers[$key] = $value;
    }
}
