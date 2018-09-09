<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .rightImg{float: left; padding-right: 10px; width: 75px; height: 75px;}
        .inTitle{color: crimson; text-align: center;}
        .sectionWrap{min-height: 150px; background: #a7ff9c;}
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
//	echo 'title'.$this->title;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDesc() {
        return $this->descr;
    }
    public function render() {
        echo '<article><h2 style="background:green;color:white;"><a href="/Polimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a></h2></article>';
    }
    public function renderAll() {
        echo '<article>'.
            '<h2 style="background:green;color:white;">'.$this->getTitle().'</h2>'.
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
            '<h2 style="background:green;color:white;"><a href="/Polimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a></h2>'.
            '<p>'.$this->getDesc().'</p>'.
            '</article>';
    }
}

class TextDescriptionImage extends Article{

    public function render(){
        echo '<section class="sectionWrap">'.
            '<h2 style="background:green;color:white;"><a href="/Polimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a></h2>'.
		'<img class="rightImg" src="'.$this->img.'"/>'.
		'<a href="/Polimorfizm/innerPage.php?id='.$this->id.'">'.$this->getTitle().'</a>'.
	'</section>';
    }
    public function renderAll(){
        echo '<section>'.
        '<h2 class="inTitle">'.$this->title.
         '</h2>'.
            '<img class="rightImg" src="'.$this->img.'"/>'.
            '<p>'.$this->getDesc().'</p>'.
            '<a href="/Polimorfizm/">'.$this->getTitle().'</a>';
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



