<?php

namespace Heybot\Client\Enums;

enum MessageType: string {
    case AUDIO = 'audio';
    case CONTACT = 'contact';
    case DOCUMENT = 'document';
    case INTERACTIVE_LIST = 'interactive_list';
    case INTERACTIVE_LIST_SECTION = 'interactive_list_section';
    case INTERACTIVE_LIST_SECTION_OPTION = 'interactive_list_section_option';
    case INTERACTIVE_TEXT = 'interactive_text';
    case INTERACTIVE_IMAGE = 'interactive_image';
    case INTERACTIVE_VIDEO = 'interactive_video';
    case INTERACTIVE_DOCUMENT = 'interactive_document';
    case INTERACTIVE_BUTTON = 'interactive_button';
    case LOCATION = 'location';
    case IMAGE = 'image';
    case STICKER = 'sticker';
    case REACTION = 'reaction';
    case TEMPLATE = 'template';
    case TEXT = 'text';
    case VIDEO = 'video';
    case CTA = 'cta_url';
}