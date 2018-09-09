<?
require_once 'classes.php';
$data = array (
    (object) array(
        'id'=>1,
        'title'=> 'Hello World',
        'descr'=>'Lorem ipsum dolor sit amet',
        'type'=>'TextArticle'),
    (object) array(
        'id'=>2,
        'title'=> 'HelloWorld2',
        'descr'=>'Lorem22222 ipsum dolor sit amet',
        'type'=>'TextArticle'),
    (object) array(
        'id'=>3,
        'title'=> 'TextImage',
        'descr'=>'Lorem22222 ipsum dolor sit amet',
        'img'=> 'https://images.pexels.com/photos/219998/pexels-photo-219998.jpeg?auto=compress&cs=tinysrgb&h=350',
        'type'=>'TextImage'),
    (object) array(
        'id'=>4,
        'title'=> 'FFF',
        'descr'=>'Lorem22222 ipsum dolor sit amet',
        'header'=> 'This is header',
        'type'=>'FFF'),
    (object) array(
        'id'=>5,
        'title'=> 'This is title link',
        'descr'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non metus in velit mollis ornare sit amet
     sagittis tellus. Curabitur convallis massa scelerisque, tincidunt libero non, hendrerit dolor.
     Proin quis imperdiet turpis. In hac habitasse platea dictumst. Integer malesuada tellus libero,
     eget bibendum leo pulvinar non. Quisque ut mollis lectus, eu volutpat orci. Sed nec erat hendrerit,
     porta lacus et, commodo eros',
        'type'=>'TextDescription'),
    (object) array(
        'id'=>6,
        'title'=>'Title with image',
        'descr'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales pellentesque bibendum.
    Nulla mattis ligula cursus imperdiet fermentum. Integer purus turpis, venenatis at elementum non,
    convallis ac nisi. Donec ut est in turpis fermentum bibendum vel nec nisl.
    Vivamus tempor hendrerit nibh, a tempus nulla tincidunt quis. Curabitur turpis lorem, cursus a ligula eget,
    facilisis aliquam elit. Proin id diam non mauris pharetra vulputate a nec velit.
    Pellentesque vehicula molestie scelerisque. Mauris dictum laoreet leo, sed ultricies quam pellentesque quis.
    Ut fringilla, nisl sit amet auctor aliquam, velit lacus porttitor felis, gravida lacinia elit magna eget metus.
    Quisque magna eros, bibendum et bibendum a, sodales at metus.',
        'img'=>'https://images.pexels.com/photos/53594/blue-clouds-day-fluffy-53594.jpeg?auto=compress&cs=tinysrgb&h=350',
        'link'=>'http://htmlbook.ru/',
        'type'=>'TextDescriptionImage'
    ),
    (object) array(
        'id'=>7,
        'title'=>'Image link Title',
        'descr'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales pellentesque bibendum.
    Nulla mattis ligula cursus imperdiet fermentum. Integer purus turpis, venenatis at elementum non,
    convallis ac nisi. Donec ut est in turpis fermentum bibendum vel nec nisl.
    Vivamus tempor hendrerit nibh, a tempus nulla tincidunt quis. Curabitur turpis lorem, cursus a ligula eget,
    facilisis aliquam elit. Proin id diam non mauris pharetra vulputate a nec velit.
    Pellentesque vehicula molestie scelerisque. Mauris dictum laoreet leo, sed ultricies quam pellentesque quis.
    Ut fringilla, nisl sit amet auctor aliquam, velit lacus porttitor felis, gravida lacinia elit magna eget metus.
    Quisque magna eros, bibendum et bibendum a, sodales at metus.',
        'img'=>'https://images.pexels.com/photos/53594/blue-clouds-day-fluffy-53594.jpeg?auto=compress&cs=tinysrgb&h=350',
        'link'=>'http://htmlbook.ru/',
        'type'=>'ImageLink'
    ),
    (object) array(
        'id'=>8,
        'title'=>'Image link Title',
        'descr'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales pellentesque bibendum.
    Nulla mattis ligula cursus imperdiet fermentum. Integer purus turpis, venenatis at elementum non,
    convallis ac nisi. Donec ut est in turpis fermentum bibendum vel nec nisl.
    Vivamus tempor hendrerit nibh, a tempus nulla tincidunt quis. Curabitur turpis lorem, cursus a ligula eget,
    facilisis aliquam elit. Proin id diam non mauris pharetra vulputate a nec velit.
    Pellentesque vehicula molestie scelerisque. Mauris dictum laoreet leo, sed ultricies quam pellentesque quis.
    Ut fringilla, nisl sit amet auctor aliquam, velit lacus porttitor felis, gravida lacinia elit magna eget metus.
    Quisque magna eros, bibendum et bibendum a, sodales at metus.',
        'img'=>array(
            'https://www.tatumranch.org/page-10/files/image_256_144.jpg',
            'https://d1r3ldy4dta636.cloudfront.net/sites/default/files/rose-rose.jpg',
            'http://www.f-legrand.fr/scidoc/figures/image/niveaux/images/imA.png',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Lichtenstein_img_processing_test.png/256px-Lichtenstein_img_processing_test.png',
            'http://pluspng.com/img-png/customer-transparent-png-image-256.png',
            'http://www.qygjxz.com/data/out/80/4296988-flower-image.png',
            'http://merovingio.c2rmf.cnrs.fr/fcgi-bin/iipsrv.fcgi?FIF=PIA03883.pyr.tif&SDS=0,90&JTL=1,0',
            'https://nssdc.gsfc.nasa.gov/image/planetary/moon/clem_nir.jpg',
            'https://astronline.pro/og-image.jpg',
            'http://www.haseloff-lab.org/education/iGEM/files/stacks-image-35ce2e8.png'
        ),
        'type'=>'ImagePack'
    )
);
$objs = array();
foreach($data as $articleData){
    $objs[$articleData->id] = new $articleData->type($articleData);
}