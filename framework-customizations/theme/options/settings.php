<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'iletisim' => array(
        'type'    => 'tab',
        'title'   => 'İletişim Bilgileri',
        'options' => array(
            'adres' => array(
                'type'  => 'text',
                'label' => 'Adres'
            ),
            'telefon' => array(
                'type'  => 'text',
                'label' => 'Telefon Numarası'
            ),
            'faks' => array(
                'type'  => 'text',
                'label' => 'Faks Numarası'
            ),
            'eposta' => array(
                'type'  => 'text',
                'label' => 'E-posta Adresi'
            ),
            'harita'  => array(
                'type'  => 'map',
                'label' => 'Konum',
                'value' => array(
                    'coordinates' => array(
                        'lat' => -34,
                        'lng' => 150,
                    )
                )
            )
        ),
    ),
    // 'tab_id' => array(
    //     'type' => 'tab',
    //     'options' => array(
    //         'option_id' => array(
    //             'type'  => 'text',
    //             'value' => 'Default value',
    //             'label' => __('Option Label', '{domain}'),
    //             'desc'  => __('Option Description', '{domain}'),
    //             'attr'  => array('class' => 'custom-class', 'data-foo' => 'bar'),
    //             'help'  => __('Some html that will appear in tip popup', '{domain}'),
    //         )
    //     ),
    //     'title' => __('Tab Title', '{domain}'),
    //     'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    // ),
);
