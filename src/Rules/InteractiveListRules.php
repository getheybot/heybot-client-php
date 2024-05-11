<?php

namespace Heybot\Client\Rules;

class InteractiveListRules
{
    const RULES = [
        'id' => ['optional', 'cast:string', 'min:1', 'max:24'],
        'title' => ['required', 'cast:string', 'min:1', 'max:60'],
        'text' => ['optional', 'cast:string', 'min:1', 'max:1024'],
        'buttonTitle' => ['required', 'cast:string', 'min:1', 'max:20'],
        'sections' => ['required', 'cast:array', 'min:1', 'max:10'],
        'sections.*.options' => ['required', 'cast:array', 'min:1', 'max:10'],
    ];
}