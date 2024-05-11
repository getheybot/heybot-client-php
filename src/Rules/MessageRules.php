<?php

namespace Heybot\Client\Rules;

class MessageRules
{
    // Only opus codecs, base audio/ogg is not supported
    // Size Limit: 16MB
    const RULES = [
        'text' => [
            // 'required',
            'cast:string',
            'min:1',
            'max:4096'
        ]
    ];

}