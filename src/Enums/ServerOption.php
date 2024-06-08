<?php

namespace Heybot\Client\Enums;

enum ServerOption: string {
    case SERVER_SANDBOX = 'https://message-server.dev';
    case SERVER_PRODUCTION = 'https://message-server.app';
    case HEYBOT_SANDBOX = 'https://heybot.dev/api/v1';
    case HEYBOT_PRODUCTION = 'https://heybot.cloud/api/v1';
}