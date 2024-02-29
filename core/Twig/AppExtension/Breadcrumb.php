<?php

namespace core\Twig\AppExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Breadcrumb extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('customFunction', [$this, 'customFunction']),
        ];
    }

    public function customFunction($arg1, $arg2): string
    {
        // Function logic goes here
        return "Argument 1: $arg1, Argument 2: $arg2";
    }
}