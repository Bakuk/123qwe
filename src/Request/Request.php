<?php

namespace Core\src\Request;

class Request
{
    private string $method;
    private string $uri;
    private array $headers;
    protected array $body;

    public function __construct(string $method, string $uri, array $headers = [], array $body = [])
    {
        $this->method = $method;
        $this->uri = $uri;
        $this->headers = $headers;
        $this->body = $body;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): array
    {
        return $this->body;
    }

}