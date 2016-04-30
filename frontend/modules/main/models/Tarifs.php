<?php

namespace frontend\modules\main\models;

class Tarifs
{
    public function getSourcesMenu() {
        return [
            '2016' => [
                'items' => [
                    [
                        'label' => 'Приложение № 2 к предложению о размере цен (тарифов), долгосрочных параметров регулирования.', 
                        'url' => '#',
                        'template' => '<a href="{url}" data-toggle="modal" data-target="#1">{label}</a>',
                        'source' => [
                            'id' => '1',
                            'url' => 'tarifs_docs/attachment_2',
                            'type' => 'html',
                        ],
                    ],
                    [
                        'label' => 'Приложение № 5 к предложению о размере цен (тарифов), долгосрочных параметров регулирования.', 
                        'url' => '#',
                        'template' => '<a href="{url}" data-toggle="modal" data-target="#2">{label}</a>',
                        'source' => [
                            'id' => '2',
                            'url' => 'tarifs_docs/attachment_5',
                            'type' => 'html',
                        ],
                    ],
                    [
                        'label' => 'Анкета организации.', 
                        'url' => '#',
                        'template' => '<a href="{url}" data-toggle="modal" data-target="#3">{label}</a>',
                        'source' => [
                            'id' => '3',
                            'url' => '/source/images/work_docs/DSC_0261.JPG',
                            'type' => 'img',
                        ],
                    ],
                    [
                        'label' => 'Приложение № 7 к Порядку представления организациями и индивидуальными предпринимателями.', 
                        'url' => '#',
                        'template' => '<a href="{url}" data-toggle="modal" data-target="#4">{label}</a>',
                        'source' => [
                            'id' => '4',
                            'url' => 'tarifs_docs/attachment_7',
                            'type' => 'html',
                        ],
                    ],
                    [
                        'label' => 'Налоговая декларация по налогу на добавленную стоимость.', 
                        'url' => '#',
                        'template' => '<a href="{url}" data-toggle="modal" data-target="#5">{label}</a>',
                        'source' => [
                            'id' => '5',
                            'url' => 'tarifs_docs/tax_declaration_0',
                            'type' => 'html',
                        ],
                        'items' => [
                            [
                                'label' => 'Раздел 1. Сумма налога, подлежащая уплате в бюджет (возмещению из бюджета), по данным налогоплательщика.', 
                                'url' => '#',
                                'template' => '<a href="{url}" data-toggle="modal" data-target="#51">{label}</a>',
                                'source' => [
                                    'id' => '51',
                                    'url' => 'tarifs_docs/tax_declaration_1',
                                    'type' => 'html',
                                ],
                            ],
                            [
                                'label' => 'Раздел 3. Расчет суммы налога, подлежащей уплате в бюджет по операциям, облагаемым по налоговым ставкам, предусмотренным пунктами 2 - 4 статьи 164 Налогового кодекса Российской Федерации.', 
                                'url' => '#',
                                'template' => '<a href="{url}" data-toggle="modal" data-target="#52">{label}</a>',
                                'source' => [
                                    'id' => '52',
                                    'url' => 'tarifs_docs/tax_declaration_3',
                                    'type' => 'html',
                                ],
                            ],
                            [
                                'label' => 'Раздел 4. Расчет суммы налога по операциям по реализации товаров (работ, услуг), обоснованность применения налоговой ставки 0 процентов по которым документально подтверждена.', 
                                'url' => '#',
                                'template' => '<a href="{url}" data-toggle="modal" data-target="#53">{label}</a>',
                                'source' => [
                                    'id' => '53',
                                    'url' => 'tarifs_docs/tax_declaration_4',
                                    'type' => 'html',
                                ],
                            ],
                            [
                                'label' => 'Раздел 6. Расчет суммы налога по операциям по реализации товаров (работ, услуг), обоснованность применения налоговой ставки 0 процентов по которым документально не подтверждена.', 
                                'url' => '#',
                                'template' => '<a href="{url}" data-toggle="modal" data-target="#54">{label}</a>',
                                'source' => [
                                    'id' => '54',
                                    'url' => 'tarifs_docs/tax_declaration_6',
                                    'type' => 'html',
                                ],
                            ],
                        ]
                    ],
                ],
            ],
        ];
    }
}
