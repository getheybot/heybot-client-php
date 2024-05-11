<?php

namespace Heybot\Client\Rules;

class ImageRules
{
    // Images must be 8-bit, RGB or RGBA
    // Size Limit: 5MB
    const RULES = [
        'url' => ['required', 'cast:url', 'fileType:jpeg,png'],
        'text' => ['optional', 'cast:string', 'min:1', 'max:1024']
    ];
}