<?php

namespace Heybot\Client\Enums;

enum LeadTypeOption: string {
    case OPEN = 'open';
    case CLOSE = 'close';
    case CANCEL = 'cancel';
    case SOLVED = 'solved';
    case PATCH = 'patch';
    case REOPEN = 'reopen';
    case ATTACH = 'attach';
    case COMMENT = 'comment';
}