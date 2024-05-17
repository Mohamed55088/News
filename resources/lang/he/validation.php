<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'חובה לאשר את :attribute.',
    'active_url' => 'ה-:attribute אינו כתובת URL תקפה.',
    'after' => 'ה-:attribute חייב להיות תאריך אחרי :date.',
    'after_or_equal' => 'ה-:attribute חייב להיות תאריך אחרי או שווה ל-:date.',
    'alpha' => 'ה-:attribute יכול להכיל רק אותיות.',
    'alpha_dash' => 'ה-:attribute יכול להכיל רק אותיות, מספרים, מקפים וקו תחתון.',
    'alpha_num' => 'ה-:attribute יכול להכיל רק אותיות ומספרים.',
    'array' => 'ה-:attribute חייב להיות מערך.',
    'before' => 'ה-:attribute חייב להיות תאריך לפני :date.',
    'before_or_equal' => 'ה-:attribute חייב להיות תאריך לפני או שווה ל-:date.',
    'between' => [
        'numeric' => 'ה-:attribute חייב להיות בין :min ל-:max.',
        'file' => 'ה-:attribute חייב להיות בין :min ל-:max קילובייט.',
        'string' => 'ה-:attribute חייב להיות בין :min ל-:max תווים.',
        'array' => 'ה-:attribute חייב להכיל בין :min ל-:max פריטים.',
    ],
    'boolean' => 'שדה ה-:attribute חייב להיות אמת או שקר.',
    'confirmed' => 'האישור של :attribute אינו תואם.',
    'date' => 'ה-:attribute אינו תאריך תקף.',
    'date_equals' => 'ה-:attribute חייב להיות תאריך שווה ל-:date.',
    'date_format' => 'ה-:attribute אינו תואם לפורמט :format.',
    'different' => 'ה-:attribute וה-:other חייבים להיות שונים.',
    'digits' => 'ה-:attribute חייב להיות בעל :digits ספרות.',
    'digits_between' => 'ה-:attribute חייב להיות בין :min ל-:max ספרות.',
    'dimensions' => 'ה-:attribute מכיל תמונה עם מימדים לא תקפים.',
    'distinct' => 'שדה ה-:attribute מכיל ערך כפול.',
    'email' => 'ה-:attribute חייב להיות כתובת דוא"ל תקפה.',
    'ends_with' => 'ה-:attribute חייב להסתיים באחד מהערכים הבאים: :values.',
    'exists' => 'ה-:attribute שנבחר אינו תקף.',
    'file' => 'ה-:attribute חייב להיות קובץ.',
    'filled' => 'שדה ה-:attribute הוא חובה.',
    'gt' => [
        'numeric' => 'ה-:attribute חייב להיות גדול מ-:value.',
        'file' => 'ה-:attribute חייב להיות גדול מ-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות בעל יותר מ-:value תווים.',
        'array' => 'ה-:attribute חייב להכיל יותר מ-:value פריטים.',
    ],
    'gte' => [
        'numeric' => 'ה-:attribute חייב להיות גדול או שווה ל-:value.',
        'file' => 'ה-:attribute חייב להיות גדול או שווה ל-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות בעל :value תווים או יותר.',
        'array' => 'ה-:attribute חייב להכיל :value פריטים או יותר.',
    ],
    'image' => 'ה-:attribute חייב להיות תמונה.',
    'in' => 'ה-:attribute שנבחר אינו תקף.',
    'in_array' => 'שדה ה-:attribute אינו קיים ב-:other.',
    'integer' => 'ה-:attribute חייב להיות מספר שלם.',
    'ip' => 'ה-:attribute חייב להיות כתובת IP תקפה.',
    'ipv4' => 'ה-:attribute חייב להיות כתובת IPv4 תקפה.',
    'ipv6' => 'ה-:attribute חייב להיות כתובת IPv6 תקפה.',
    'json' => 'ה-:attribute',
    'lt' => [
        'numeric' => 'ה-:attribute חייב להיות פחות מ-:value.',
        'file' => 'ה-:attribute חייב להיות פחות מ-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות פחות מ-:value תווים.',
        'array' => 'ה-:attribute חייב להכיל פחות מ-:value פריטים.',
    ],
    'lte' => [
        'numeric' => 'ה-:attribute חייב להיות פחות או שווה ל-:value.',
        'file' => 'ה-:attribute חייב להיות פחות או שווה ל-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות בעל לכל היותר :value תווים.',
        'array' => 'ה-:attribute חייב להכיל לכל היותר :value פריטים.',
    ],
    'max' => [
        'numeric' => 'ה-:attribute עלול לא להיות גדול מ-:max.',
        'file' => 'ה-:attribute עלול לא להיות גדול מ-:max קילובייט.',
        'string' => 'ה-:attribute עלול לא להיות גדול מ-:max תווים.',
        'array' => 'ה-:attribute עלול לא להכיל יותר מ-:max פריטים.',
    ],
    'mimes' => 'ה-:attribute חייב להיות קובץ מסוג: :values.',
    'mimetypes' => 'ה-:attribute חייב להיות קובץ מסוג: :values.',
    'min' => [
        'numeric' => 'ה-:attribute חייב להיות לפחות :min.',
        'file' => 'ה-:attribute חייב להיות לפחות :min קילובייט.',
        'string' => 'ה-:attribute חייב להיות לפחות :min תווים.',
        'array' => 'ה-:attribute חייב להכיל לפחות :min פריטים.',
    ],
    'not_in' => 'ה-:attribute שנבחר אינו תקף.',
    'not_regex' => 'ה-:attribute בפורמט שאינו תקף.',
    'numeric' => 'ה-:attribute חייב להיות מספר.',
    'password' => 'הסיסמה אינה נכונה.',
    'present' => 'שדה ה-:attribute חייב להיות נוכח.',
    'regex' => 'ה-:attribute בפורמט שאינו תקף.',
    'required' => 'שדה ה-:attribute הוא חובה.',
    'required_if' => 'שדה ה-:attribute הוא חובה כאשר :other הוא :value.',
    'required_unless' => 'שדה ה-:attribute הוא חובה אלא אם :other הוא ב-:values.',
    'required_with' => 'שדה ה-:attribute הוא חובה כאשר :values נמצא.',
    'required_with_all' => 'שדה ה-:attribute הוא חובה כאשר :values נמצאים.',
    'required_without' => 'שדה ה-:attribute הוא חובה כאשר :values לא נמצאים.',
    'required_without_all' => 'שדה ה-:attribute הוא חובה כאשר אף אחד מבין :values לא נמצאים.',
    'same' => 'ה-:attribute וה-:other חייבים להתאים.',
    'size' => [
        'numeric' => 'ה-:attribute חייב להיות :size.',
        'file' => 'ה-:attribute חייב להיות :size קילובייט.',
        'string' => 'ה-:attribute חייב להיות :size תווים.',
        'array' => 'ה-:attribute חייב להכיל :size פריטים.',
    ],
    'starts_with' => 'ה-:attribute חייב להתחיל באחד מהערכים הבאים: :values.',
    'string' => 'ה-:attribute חייב להיות מחרוזת.',
    'timezone' => 'ה-:attribute חייב להיות אזור תקף.',
    'unique' => 'ה-:attribute כבר קיים במערכת.',
    'uploaded' => 'ה-:attribute נכשל בהעלאה.',
    'url' => 'ה-:attribute בפורמט שאינו תקף.',
    'uuid' => 'ה-:attribute חייב להיות UUID תקף.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];