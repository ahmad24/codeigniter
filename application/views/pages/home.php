
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

</style>
<h1>Home Page</h1>
<div class="class-1">
	<div class="class-2"></div>
</div>


<!--div class="class-1 class-11"-->
<div class="clearfix">
	<div class="class-3"></div>
	<div class="class-3"></div>
	<div class="class-3"></div>
	<div class="class-3"></div>
</div>