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
        'buttons' => [['index' => 0, 'text' => '<postback_text>']] // The `postback_text` by index position, optional.
    ])
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5523456782', 
        'params' => [],
        'buttons' => [],
    ]),
];

$whatsapp->request($messages);
```

## Send campaign template
### usually for segments

```php

$whatsapp = new \Heybot\Client\Whatsapp(apiKey: '')

$whatsapp->campaign(
    name: 'Engagement Express: Ages 18 - 25"', // 100 chars limit 
    templateId: '{template-id}'
);

$messages = [
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5523456782', 
        'params' => ['foo A', 'bar B'] // The template params required
    ]),
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5698544585', 
        'params' => ['foo', 'bar'] // The template params required
    ]),
    // ...
];

$whatsapp->request($messages);

// Another campaign

$whatsapp->campaign(
    name: 'Engagement Express: Ages 26 - 30"', // 100 chars limit 
    templateId: '{template-id}'
);

$messages = [
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5698544585', 
        'params' => ['foo A', 'bar B'] // The template params required
    ]),
    \Heybot\Client\Message\Template::create([
        'phoneNumber' => '5523456782', 
        'params' => ['foo', 'bar'] // The template params required
    ]),
    // ...
];

$whatsapp->request($messages);
```

# Coming soon

* Chat - Not available yet
* Leads - Not available yet

## Chat - Not available yet


```php
$chat = new \Heybot\Client\Http\Chat(apiKey: '')

$chat->request(
    \Heybot\Chat\Chat::create([
        'entity' => '5523456782', 
        'action' => \Heybot\Client\Enums\ChatOptions::START
    ])
);

$chat->request(
    \Heybot\Chat\Chat::create([
        'entity' => '5523456782', 
        'action' => \Heybot\Client\Enums\ChatOptions::END
    ])
);
```

## Leads - Not available yet

```php
$leads = new \Heybot\Client\Http\Lead(apiKey: '')

$openLead = $leads->request([
    \Heybot\Client\Lead\Open::create([
        'phoneNumber' => '521782003377', 
        'meta' => [
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::EMAIL, 'metaKey' => 'email', 'metaValue' => 'me@gmail.com']),
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::TEXT, 'metaKey' => 'name', 'metaValue' => 'John Doe']),
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::TEXT, 'metaKey' => 'address', 'metaValue' => 'Meta Way, Menlo Park, California 94025, United States of America']),
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::LOCATION, 'metaKey' => 'coords', 'metaValue' => '18.354425,-99.7628451']),
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::INTEGER, 'metaKey' => 'age', 'metaValue' => '27']),
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::LINK, 'metaKey' => 'facebook', 'metaValue' => 'https://whatsapp.com']),
        ]
    ])
]);

$leadId = $openLead->collect()->get('id'); // 'hsdqxzE4c4R41wKGzXkD7'

$openLead = $leads->request([
    \Heybot\Client\Lead\Patch::create([
        'leadId' => $leadId
        'meta' => [
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::TEXT, 'metaKey' => 'name', 'metaValue' => 'John Doe']),
            \Heybot\Client\Lead\Meta::create(['metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::LOCATION, 'metaKey' => 'coords', 'metaValue' => '18.354425,-99.7628451']),
        ]
    ])
]);

$leads->request([\Heybot\Client\Lead\Cancel::create(['leadId' => $leadId])]);

$leads->request([\Heybot\Client\Lead\Close::create(['leadId' => $leadId])]);

$leads->request([\Heybot\Client\Lead\ReOpen::create(['leadId' => $leadId])]);

$leads->request([
    \Heybot\Client\Lead\Attach::create([
        'leadId' => $leadId,
        'meta' => [
            \Heybot\Client\Lead\Meta::create([
                'metaType'=> Heybot\Client\Enums\LeadMetaTypeOption::TEXT, 
                'metaKey' => 'contact', 
                'metaValue' => '5217772334456'
            ])
        ]
    ])
]);

$leads->request([
    \Heybot\Client\Lead\Comment::create([
        'leadId' => $leadId,
        'agent' => 'agent@email.com',
        'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
    ])
]);

$leads->request([
    \Heybot\Client\Lead\Solve::create(['leadId' => $leadId])
]);
```