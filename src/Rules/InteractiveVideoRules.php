<?php

namespace Heybot\Client\Rules;

class InteractiveVideoRules
{
    const RULES = [
        'id' => ['required', 'cast:string', 'min:1', 'max:256'],
        'url' => ['required', 'cast:url'],
        'text' => ['optional', 'cast:string', 'min:1','max:1000'],
        'footer' => ['optional', 'cast:string', 'min:1','max:60'],
    ];
}