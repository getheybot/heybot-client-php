<?php

namespace Heybot\Client\Rules;

class StickerRules
{
    // Images must be 8-bit, RGB or RGBA
    // Size Limit: 100MB
    // Animated stickers: 500KB (Meta)
    const RULES = [
        'url' => ['required', 'cast:url', 'fileType:webp']
    ];
}