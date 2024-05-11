<?php

namespace Heybot\Client\Rules;

class InteractiveButtonRules
{
    const RULES = [
        'id' => ['required', 'cast:string', 'min:1', 'max:256'],
        'title' => ['optional', 'cast:string', 'min:1','max:20'],
    ];
}