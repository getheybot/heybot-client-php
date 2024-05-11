<?php

declare(strict_types=1);

namespace Heybot\Client\Traits;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Message\InteractiveList;
use Heybot\Client\Message\InteractiveListSection;
use Heybot\Client\Rules\AudioRules;
use Heybot\Client\Rules\ContactRules;
use Heybot\Client\Rules\DocumentRules;
use Heybot\Client\Rules\ImageRules;
use Heybot\Client\Rules\InteractiveButtonRules;
use Heybot\Client\Rules\InteractiveDocumentRules;
use Heybot\Client\Rules\InteractiveImageRules;
use Heybot\Client\Rules\InteractiveListSectionOptionRules;
use Heybot\Client\Rules\InteractiveTextRules;
use Heybot\Client\Rules\InteractiveVideoRules;
use Heybot\Client\Rules\LocationRules;
use Heybot\Client\Rules\MessageRules;
use Heybot\Client\Rules\StickerRules;
use Heybot\Client\Rules\TemplateRules;
use Heybot\Client\Rules\VideoRules;


trait Validate
{
    /**
     * TODO
     * @throws \Exception
     */
    public function validate()
    {
        $validation = match(self::getMessageType()) {
            MessageType::AUDIO => (new AudioRules),
            MessageType::CONTACT => (new ContactRules),
            MessageType::DOCUMENT => (new DocumentRules),
            MessageType::INTERACTIVE_LIST => (new InteractiveList),
            MessageType::INTERACTIVE_LIST_SECTION => (new InteractiveListSection),
            MessageType::INTERACTIVE_LIST_SECTION_OPTION => (new InteractiveListSectionOptionRules),
            MessageType::INTERACTIVE_TEXT => (new InteractiveTextRules),
            MessageType::INTERACTIVE_IMAGE => (new InteractiveImageRules),
            MessageType::INTERACTIVE_VIDEO => (new InteractiveVideoRules),
            MessageType::INTERACTIVE_DOCUMENT => (new InteractiveDocumentRules),
            MessageType::INTERACTIVE_BUTTON => (new InteractiveButtonRules),
            MessageType::LOCATION => (new LocationRules),
            MessageType::IMAGE => (new ImageRules),
            MessageType::STICKER => (new StickerRules),
            MessageType::TEMPLATE => (new TemplateRules),
            MessageType::MESSAGE => (new MessageRules),
            MessageType::VIDEO => (new VideoRules),
            default => throw new \Exception('Not implemented'),
        };
    }
}