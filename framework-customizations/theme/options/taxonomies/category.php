<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'sayfa_ozellik' => array(
        'type'    => 'box',
        'title'   => 'Sayfa Düzeni',
        'options' => array(
            'sayfa_baslik' => array(
                'type'  => 'text',
                'label' => 'Başlık',
                'desc'  => 'Başlık alanı banner bölümü üzerinde görüntülenecektir. Sayfa başlığından bağımsız olarak herhangi bir başlık girilebilir. Eğer boş bırakırsanız, yukarıda girmiş olduğunuz sayfa başlığı görüntülenecektir.'
            ),
            'sayfa_aciklama' => array(
                'type'  => 'textarea',
                'label' => 'Açıklama',
                'desc'  => 'Bu alan boş bırakılırsa, açıklama alanından özet metin gösterilecektir.'
            ),
            'sayfa_banner' => array(
                'type'        => 'upload',
                'label'       => 'Banner',
                'desc'        => 'Ortam kütüphanesi\'nden banner görselini seçin ya da yeni bir görsel yükleyin.',
                'images_only' => true
            ),
        )
    ),
);
