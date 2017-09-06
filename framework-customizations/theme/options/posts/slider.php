<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'slider_meta' => array(
        'type'    => 'box',
        'title'   => 'Slider Detayları',
        'options' => array(
            'aciklama' => array(
                'type'  => 'text',
                'label' => 'Açıklama',
                'desc'  => 'Açıklama metnini giriniz.',
            ),
            'gorsel' => array(
                'type'        => 'upload',
                'label'       => 'Görsel',
                'desc'        => 'Ortam kütüphanesi\'nden slider görselini seçin ya da yeni bir görsel yükleyin.',
                'images_only' => true
            ),
            'btn_link' => array(
                'type'  => 'text',
                'value' => '#',
                'label' => 'Buton Linki',
                'desc'  => 'Buton linkini giriniz. Eğer boş bırakırsanız, buton görüntülenmeyecektir.',
            ),
            'btn_metin' => array(
                'type'  => 'text',
                'value' => 'Detaylı İncele',
                'label' => 'Buton Metni',
                'desc'  => 'Buton metnini giriniz. Eğer boş bırakırsanız, varsayılan olarak "Detaylı İncele" metni görüntülenecektir.',
            ),
            'icerik_hizalama' => array(
                'type'    => 'radio',
                'value'   => 'left',
                'label'   => 'Metin Hizalama',
                'inline'  => true,
                'choices' => array(
                    'left'   => 'Sola Hizalı',
                    'center' => 'Ortalanmış',
                    'right'  => 'Sağa Hizalı',
                ),
            )
        )
    )
);
