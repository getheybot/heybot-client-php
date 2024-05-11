<?php

namespace Heybot\Client\Rules;

class InteractiveListSectionRules
{
    const RULES = [
        'title' => ['required', 'cast:string', 'min:1', 'max:24'],
        'description' => ['required', 'cast:string', 'min:1', 'max:72'],
        'options' => ['required', 'cast:array']
    ];
}