<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .rightImg{float: left; padding-right: 10px; width: 75px; height: 75px;}
        .inTitle{color: crimson; text-align: center;}
        .sectionWrap{min-height: 150px; background: #a7ff9c; margin: 5px; padding: 3px;}
        .divleft{display: inline-block; padding: 5px;}
        .divright{display: inline-block; padding: 5px;}
        .divcenter{display: inline-block; padding: 5px;}
    </style>
</head>
<body>
<?
abstract class Article {
    function __construct($args) {
        foreach($args as $key=>$value) {
            if($key == 'type') {
                continue;
            }
            $this->$key = $value;
        }
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDesc() {
        return $this->descr;
    }
    public function render() {
        echo '<article><h2 class="bg-success h3 "><a href="/phpPolimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a></h2></article>';
    }
    public function renderAll() {
        echo '<article>'.
            '<h2 class="bg-primary">'.$this->getTitle().'</h2>'.
            '<p>'.$this->getDesc().'</p></article>';
    }
}

class TextArticle extends Article {}

class TextImage extends Article {
//	function __construct($title, $descr, $img) {
//		parent::__construct($title, $descr);
//		$this->img = $img;
//	}
    public function getImage() {
        return $this->img;
    }
    public function renderAll() {
        echo '<article>'.
            '<h2 style="background:green;color:white;">'.$this->getTitle().'</h2>'.
            '<img src="'.$this->getImage().'"/>'.
            '<p>'.$this->getDesc().'</p></article>';
    }
}

class TextDescription extends Article{
    public function renderAll(){
        echo '<article>'.
            '<h2 style="background:green;color:white;"><a href="/phpPolimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a></h2>'.
            '<p>'.$this->getDesc().'</p>'.
            '</article>';
    }
}

class TextDescriptionImage extends Article{

    public function render(){
        echo '<section class="sectionWrap">'.
            '<h2 style="background:green;color:white;"><a href="/phpPolimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a></h2>'.
            '<img class="rightImg" src="'.$this->img.'"/>'.
            '<a href="/phpPolimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a>'.
            '</section>';
    }
    public function renderAll(){
        echo '<section>'.
            '<h2 class="inTitle">'.$this->title.
            '</h2>'.
            '<img class="rightImg" src="'.$this->img.'"/>'.
            '<p>'.$this->getDesc().'</p>'.
            '<a href="/phpPolimorfizm/">'.$this->getTitle().'</a>'.
            '</section>';
    }
}

class ImageLink extends Article{
    public function render()
    {
        echo '<section class="sectionWrap">'.
            '<a href="/phpPolimorfizm/innerPage.php?id='.$this->id.'"><img style="display:block; height: 75px; margin:auto;" src="'.$this->img.'"/></a>'.
            '<h2 class="inTitle">'.$this->title.
            '</h2>'.
            '<p>'.$this->getDesc().'</p>'.
            '</section>';
    }
    public function renderAll()
    {
        echo '<section>'.
            '<a href="'.$this->link.'"><h2 class="inTitle">'.$this->title. '</h2></a>'.
            '<img style="display:block; margin:auto;" src="'.$this->img.'"/>'.
            '</section>';
    }
}

class ImagePack extends Article{
    public function render()
    {
echo '<section class="sectionWrap" style="display:flex; flex-direction:row;">'.
    '<div class="divleft"><a href="/phpPolimorfizm/innerPage.php?id='.$this->id.'"><img style="height: 75px; margin:auto;" src="'.$this->img[0].'"/></a></div>'.
    '<div class="divcenter"><p>'.$this->getDesc().'</p></div>'.
    '<div class="divright"><img style="height: 75px; margin:auto;" src="'.$this->img[1].'"/></div>'.
    '</section>';
    }
    public function renderAll()
    {
        echo '<section class="sectionWrap">'.
            '<h2>'.$this->title.
            '</h2>'.
            '<p>'.$this->getDesc().'</p>';
            ?>
        <?php
foreach ($this->img as $value){
    echo '<img style="height: 75px; margin:auto;" src="'.$value.'"/>';
}
        ?>
<?
            '</section>';
    }
}

final class FFF extends Article {
    public function renderAll() {
        echo '<section>';
        echo '<h1 style="text-align:center">';
        echo $this->header;
        echo '</h1>';
        parent::renderAll();
        echo '</section>';
    }
}
?>
</body>
</html>



