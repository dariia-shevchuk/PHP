<?php

namespace Apsl\Inf03\Webdev;

class Message
{
    protected string $from;
    protected string $to;
    protected string $text;

    public function __construct(string $from, string $to, string $text = '')
    {
        $this->from = $from;
        $this->to = $to;
        $this->text = $text;
    }

    public function getMessage(): string
    {
        return "[{$this->from}] -> [{$this->to}]: '{$this->text}'";
    }

    public function printMessage(): void
    {
        echo $this->getMessage();
    }

    public function __toString(): string
    {
        return $this->getMessage();
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getTo(): string
    {
        return $this->to;
    }
}
