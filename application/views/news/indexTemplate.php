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




{news}
<div class="news-wrapper">
    <h2>{title}</h2>
    <div id="main">
        {text}
    </div>
    <p>
    	<?php 
    	echo anchor(site_url("news/view/"."{slug}", 'View article'));
    	?>
    </p>
    <p><?php echo anchor('news/view/'."{slug}", 'My News', array('title' => 'View article!'));?></p>
    <p><?php echo anchor_popup(
			'news/view/'."{slug}", 
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
{/news}