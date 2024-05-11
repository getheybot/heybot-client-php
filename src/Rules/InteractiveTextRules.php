<?php

namespace Heybot\Client\Rules;

class InteractiveTextRules
{
    const RULES = [
        'id' => ['required', 'cast:string', 'min:1', 'max:256'],
        'text' => ['required', 'cast:string', 'min:1','max:1000'],
        'header' => ['optional', 'cast:string', 'min:1','max:20'],
        'footer' => ['optional', 'cast:string', 'min:1','max:60'],
    ];
}