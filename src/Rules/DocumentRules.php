<?php

namespace Heybot\Client\Rules;

class DocumentRules
{
    const RULES = [
        // text/plain, application/pdf, application/vnd.ms-powerpoint, application/msword, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.openxmlformats-officedocument.presentationml.presentation, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
        'url' => ['required', 'cast:url', 'fileType:txt,pdf,ppt,doc,docx,xls,xlsx'],
        // The extension of the filename will specify what format the document is displayed as in WhatsApp.
        'filename' => ['required', 'cast:string', 'fileType:txt,pdf,ppt,doc,docx,xls,xlsx'],
    ];
}