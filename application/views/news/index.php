<style>
*{
	margin : 0px;
	padding : 0px;
}
footer,header{
	display:block;
}
body{
	text-align:center; /*For IE6 Shenanigans*/
}
#wrapper{
   width:960px;
   margin:0 auto;
   text-align:left;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
 
.clearfix {
	display: inline-block;
}
 
html[xmlns] .clearfix {
	display: block;
}
 
* html .clearfix {
	height: 1%;
}
.class-1{
	width : 200px;
	height:200px;
	color : red;
	background-color : blue;
}
.class-2{
	width : 100px;
	height:100px;
	color : red;
	background-color : red;
}
.class-3{
	width : 40px;
	height:40px;
	color : red;
	background-color : red;
	float : left;
	margin : 2px;
}
.class-11{
	margin-top : 10px;
}
.news-wrapper{
	border: 1px solid black;
}
</style>
<?php $this->load->helper('url');?>
<?php

echo site_url("news/view/123").'<br>';
$segments = array('news', 'view', '123');
echo site_url($segments).'<br>';

echo 'base_url = '.base_url().'<br>';

echo base_url("blog/post/123").'<br>';

echo base_url("/_user_guide_src_ci/images/icons/edit.png").'<br>';
echo current_url().'<br>';
echo 'uri_string() = '.uri_string().'<br>';

$title = "What's wrong with CSS?";

$url_title = url_title($title);
$url_title_underscore = url_title($title, '_', TRUE);
echo $url_title.'<br>';
echo $url_title_underscore.'<br>';

 //redirect('/news/create/', 'refresh');
 ?>
 
 <?php $this->load->helper('text');?>
 <?php
 
 
 echo '//------------------------------------------------------------------------------------------<br>';
 
$string = "Here is a nice text string consisting of eleven words.";

$string = word_limiter($string, 4);
echo $string.'<br>';

$string = "Here is a nice text string consisting of eleven words.";
$string = character_limiter($string, 25);
echo $string.'<br>';

$string = "Here is a nice text string shucks consisting  darn of eleven words.";
$disallowed = array('darn', 'shucks', 'golly', 'phooey');
$string = word_censor($string, $disallowed, 'Beep!');
echo $string.'<br>';


echo highlight_code('highlight text '.$string).'<br>';

$string = "Here is a nice text string about nothing in particular.";

echo highlight_phrase($string, "nice text", '<span style="color:#990000">', '</span>').'<br>';

$string = "Here is a simple string of text that will help us demonstrate this function.5555555555555555555555";
echo word_wrap($string, 2).'<br>';






echo '//-------------------------------html helper----------------------------------------';


$this->load->helper('html');
echo img(image_folder_url().'smileys\angry.gif'); 
?>

<?php echo anchor(site_url("news/create"), 'create new post');?>

<?php foreach ($news as $news_item): ?>
<div class="news-wrapper">
    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><?php echo anchor(site_url("news/view/".$news_item['slug']), 'View article');?></p>
    <p><?php echo anchor('news/view/'.$news_item['slug'], 'My News', array('title' => 'View article!'));?></p>
    <p><?php echo anchor_popup(
			'news/view/'.$news_item['slug'], 
			'My News In Popup', //optional
			array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0'
            )
		);?></p>
    
</div>
<?php endforeach ?>

