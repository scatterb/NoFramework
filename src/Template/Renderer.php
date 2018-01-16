<?php declare(strict_types = 1);

namespace NoFramework\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}