<?php

namespace Heybot\Client\Rules;

class LocationRules
{
    const RULES = [
        'latitude' => ['required', 'regex:/^[-]?((([0-8]?[0-9])(\.(\d{1,8}))?)|(90(\.0+)?))$/'], // preg_match($regex, $value);
        'longitude' => ['required', 'regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))(\.(\d{1,8}))?)|180(\.0+)?)$/'], // preg_match($regex, $value);
        'name' => ['required', 'string'],
        'address' => ['required', 'string'],
    ];
}