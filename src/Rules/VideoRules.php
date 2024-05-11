<?php

namespace Heybot\Client\Rules;

class VideoRules
{
    const RULES = [
        // Only H.264 video codec and AAC audio codec is supported.
        // Whatsapp support videos with a single audio stream or no audio stream.
        // Size Limit: 16MB
        'url' => ['required', 'cast:url', 'fileType:mp4,3gp'],
        'text' => ['optional', 'cast:string', 'min:1', 'max:1024'],
    ];
}