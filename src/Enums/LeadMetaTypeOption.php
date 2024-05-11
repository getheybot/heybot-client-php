<?php

namespace Heybot\Client\Enums;

enum LeadMetaTypeOption: string {
    case TEXT = 'text';
    case EMAIL = 'email';
    case PHONE = 'phone';
    case LINK = 'link';
    case INTEGER = 'integer';
    case LOCATION = 'location';
}