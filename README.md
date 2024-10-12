# Heybot - PHP SDK Client

Install
```
composer require getheybot/heybot-client-php
```

## WhatsApp Messaging

Send messages to one phone number

```php
# Basic usage

$whatsapp = new \Heybot\Client\Http\Whatsapp(apiKey: '');

$whatsapp->phoneNumber("521782003377");

$whatsapp->request([
    \Heybot\Client\Message\Text::create(["text" => "¡Hi there!"]),
    \Heybot\Client\Message\Image::create(["url" => "https://heybot.me/image.png", "text" => "¡Hi there!"]),
]);

```

Interactive list

```php

$whatsapp = new \Heybot\Client\Http\Whatsapp(apiKey: '');

$optionA = \Heybot\Client\Message\InteractiveListSectionOption::create([
    "id" => "optionA",
    "title" => "title a",
    "description" => "description a",
]);

$optionB = \Heybot\Client\Message\InteractiveListSectionOption::create([
    "id" => 123,
    "title" => "title b",
    "description" => "description b",
]);

$optionC = \Heybot\Client\Message\InteractiveListSectionOption::create([
    "id" => "optionA123",
    "title" => "title c",
    "description" => "description c",
]);

$sections = [
    \Heybot\Client\Message\InteractiveListSection::create([
        "title" => "First section",
        "description" => "some a",
        "options" => [
            $optionA,
        ]
    ]),
    \Heybot\Client\Message\InteractiveListSection::create([
        "title" => "Second section",
        "description" => "some b",
        "options" => [
            $optionB, $optionC,
        ]
    ])
];

\Heybot\Client\Message\InteractiveList::create([
    "id" => 1111,
    "title" => "demo",
    "text" => "some description",
    "buttonTitle" => "Menú",
    "sections" => $sections
]);
```

Interactive options

```php
$whatsapp = \Heybot\Client\Message\InteractiveText::create([
    "id" => "",
    "header" => "",
    "text" => "",
    "footer" => "",
    "options" => [
        \Heybot\Client\Message\InteractiveButton::create([
            "id" => "foo",
            "text" => "bar"
        ]),
        \Heybot\Client\Message\InteractiveButton::create([
            "id" => "foo2",
            "text" => "bar2"
        ]),
        \Heybot\Client\Message\InteractiveButton::create([
            "id" => "foo3",
            "text" => "bar3"
        ]),
    ],
]);
```

Contact

```php
$whatsapp = \Heybot\Client\Message\Contact::create([
    "name" => \Heybot\Client\Message\ContactName::create([
        "firstName" => "Dev",
        "lastName" => "Support",
        "formattedName" => "Dev Support",
    ]),
    "org" => [
        \Heybot\Client\Message\ContactOrg::create([
            "company" => "Meta Inc.",
        ])
    ],
    "emails" => [
        \Heybot\Client\Message\ContactEmail::create([
            "email" => "example@gmail.com",
            "type" => "WORK",
        ])
    ],
    "phones" => [
        \Heybot\Client\Message\ContactPhone::create([
            "phone" => "7738305433",
            "type" => "Mobile",
        ])
    ],
    "addresses" => [
        \Heybot\Client\Message\ContactAddress::create([
            "city" => "Menlo Park",
            "country" => "United States",
            "countryCode" => "us",
            "state" => "CA",
            "street" => "1 Hacker Way",
            "type" => "HOME",
            "zip" => "94025",
        ]),
        \Heybot\Client\Message\ContactAddress::create([
            "city" => "Menlo Park",
            "country" => "United States",
            "countryCode" => "us",
            "state" => "CA",
            "street" => "200 Jefferson Dr",
            "type" => "WORK",
            "zip" => "94025",
        ])
    ],
    "urls" => [
        \Heybot\Client\Message\ContactAddress::create([
            "url" => "https://www.facebook.com",
            "type" => "WORK",
        ])
    ],
]);
```

## Send template message
### usually for massive sends

```php

$whatsapp = new \Heybot\Client\Http\Whatsapp(apiKey: '')

$whatsapp->template(templateId: '{template-id}');

$messages = [
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5698544585', 
        'params' => ['foo', 'bar'], // The template params by index position, optional.
        'buttons' => [['index' => 0, 'id' => 'postback_text']] // The `postback_text` by index position, optional.
    ])
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5523456782', 
        'params' => [],
        'buttons' => [],
    ]),
];

$whatsapp->request($messages);
```
## Send Call To Action message
```php


$whatsapp = new \Heybot\Client\Http\Whatsapp(apiKey: '');

$whatsapp = \Heybot\Client\Message\CallToAction::create([
    'buttonTex' => 'Click Me',
    'buttonUrl' => 'https://heybot.cloud',
    'text' => '¡Welcome to Heybot!',
    'footerText' => 'Thank you',
]);

$whatsapp = \Heybot\Client\Message\CallToAction::create([
    'headerImage' => 'https;//heybot.cloud/logo.png',
    'buttonTex' => 'Click Me',
    'buttonUrl' => 'https://heybot.cloud',
    'text' => '¡Welcome to Heybot!',
    'footerText' => 'Thank you',
]);

$whatsapp = \Heybot\Client\Message\CallToAction::create([
    'headerVideo' => 'https;//heybot.cloud/logo.mp4',
    'buttonTex' => 'Click Me',
    'buttonUrl' => 'https://heybot.cloud',
    'text' => '¡Welcome to Heybot!',
    'footerText' => 'Thank you',
]);
```