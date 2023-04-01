<?php
namespace NdeTermennetwerk;

return [
    'data_types' => [
        'factories' => [
            'valuesuggest:ndeterms:aatm' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:aatpt' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:aatsp' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:aat' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:abr' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:adamlink' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:btt' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:cht' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:chtm' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:chtsp' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:eurovoc' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:geonames' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:gtaagen' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:gtaaond' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:gtm' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:homosaurus' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:iconclass' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:ied' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:muzgs' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:muzpp' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:muzsch' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:nta' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:rkdartists' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:stcn' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:tnmw' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:ttwn' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:wikiall' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:wikipers' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:wikiplacenlbe' => Service\NdeTermsDataTypeFactory::class,
            'valuesuggest:ndeterms:wikistrnl' => Service\NdeTermsDataTypeFactory::class,
        ]
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => sprintf('%s/../language', __DIR__),
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];
