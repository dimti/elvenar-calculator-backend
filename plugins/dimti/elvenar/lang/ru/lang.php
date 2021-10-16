<?php
return [
    'common' => [
        'plugin_name' => 'API для калькулятора Elvenar',
        'elvenar' => 'Elvenar',
        'building_type_giver' => 'Даёт культуру и/или население', //deprecated
        'building_type_deduct' => 'Отнимает культуру и/или население', //deprecated
        'building_type_residence' => 'Резиденция: Дает население и отнимает культуру',
        'building_type_culture' => 'Культурное сооружение: Дает культуру и население',
        'building_type_manufacture' => 'Производство: Отнимает население и культуру',
        'population' => 'Население',
        'culture' => 'Культура',
        'givers' => 'Поставщики населения и/или культуры', //deprecated
        'deducts' => 'Потребители населения и/или культуры', //deprecated
        'residence' => 'Резиденция',
        'manufacture' => 'Производство',
        'building' => 'Здание',
        'buildings' => 'Здания',
        'for_building' => 'Здания',
        'level' => 'Уровень',
        'levels' => 'Уровни',
        'for_level' => 'Уровня',
        'sorting' => [
            'levels' => 'Сортировка уровней',
        ],
    ],
    'fields' => [
        'building_type' => 'Тип здания',
        'choose_option' => '-- Выберите --',
        'name' => 'Название',
        'sorting' => 'Сортировка',
        'label' => 'Наименование',
    ],
    'buttons' => [
        'delete_selected' => 'Удалить выбранные',
        'export' => 'Экспорт',
        'import' => 'Импорт',
        'create' => 'Создать',
        'create_and_close' => 'Создать и закрыть',
        'or' => 'или',
        'cancel' => 'Отменить',
        'save' => 'Сохранить',
        'save_and_close' => 'Сохранить и закрыть',
        'buildings' => [
            'new' => 'Новое здание',
            'are_you_sure_delete_selected' => 'Вы уверены что хотите удалить выбранные здания?',
            'return_to_list' => 'Вернутся к списку зданий',
            'creating' => 'Создание постройки...',
            'saving' => 'Сохранение постройки...',
            'deleting' => 'Удаление постройки...',
            'are_you_sure_delete_this' => 'Удалить эту постройку?',
        ],
        'levels' => [
            'new' => 'Новый уровень',
            'are_you_sure_delete_selected' => 'Вы уверены что хотите удалить выбранные уровни?',
            'return_to_list' => 'Вернутся к списку уровней',
            'creating' => 'Создание уровня...',
            'saving' => 'Сохранение уровня...',
            'deleting' => 'Удалегние уровня...',
            'are_you_sure_delete_this' => 'Удалить этот уровень?',
        ],
    ],
];
