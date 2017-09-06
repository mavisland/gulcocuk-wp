<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'sayfa_ozellik' => array(
        'type'    => 'box',
        'title'   => 'Sayfa Düzeni',
        'options' => array(
            'sayfa_banner' => array(
                'type'        => 'upload',
                'label'       => 'Banner',
                'desc'        => 'Ortam kütüphanesi\'nden banner görselini seçin ya da yeni bir görsel yükleyin.',
                'images_only' => true
            )
        )
    )
);
