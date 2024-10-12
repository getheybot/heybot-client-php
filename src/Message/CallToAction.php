<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class CallToAction
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::CTA;

    private $_id;
    private $messageType;

    public bool $disablePreview = true;
    public bool $bypassCheck = true;
    public ?string $text = null;
    public ?string $footerText = null;
    public ?string $headerImage = null;
    public ?string $headerVideo = null;
    public string $buttonText;
    public string $buttonUrl;
    public int $secondsDelay = 1;
}