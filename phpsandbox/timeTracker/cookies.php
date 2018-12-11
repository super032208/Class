

 <?php
 /*if(isset($_POST['text'])){
   $name = $_POST['text'];
   $handle = fopen('names.txt', 'a');
   fwrite($handle, $name."\n");
   fclose($handle);

 }

 ?>

<form method="POST">
  Name:<input type="text" name="text">
  LastName:
  <input type="submit" name="submit">
</form>*/



<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Give your time-tracking app the ability to record the time spent per project &#8211; IBM Developer</title>
<link rel='dns-prefetch' href='//unpkg.com' />
<link rel='dns-prefetch' href='//1.www.s81c.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="IBM Developer &raquo; Feed" href="https://developer.ibm.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="IBM Developer &raquo; Comments Feed" href="https://developer.ibm.com/comments/feed/" />
    <link rel="canonical" href="https://developer.ibm.com/tutorials/cl-track-time-on-projects-with-ibm-cloud-2/" />
    <meta name="description" content="This two-part series demonstrates how to create a browser-based time-tracking tool that professionals can use to record the time they&hellip;" />
    <meta name="keywords" content="">
    <meta property="og:title" content="Give your time-tracking app the ability to record the time spent per project" />
    <meta property="og:description" content="This two-part series demonstrates how to create a browser-based time-tracking tool that professionals can use to record the time they&hellip;" />
    <meta property="og:type" content="Tutorial" />
    <meta property="og:site_name" content="IBM Developer" />
    <meta property="og:url" content="https://developer.ibm.com/tutorials/cl-track-time-on-projects-with-ibm-cloud-2/" />
    <meta property="og:image" content="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/web/social/tutorials.jpg"/>
    <meta property="twitter:account_id" content="15651700" />
    <meta property="twitter:card" content="summary_large_image" />    <meta name="twitter:url" content="https://developer.ibm.com/tutorials/cl-track-time-on-projects-with-ibm-cloud-2/">
    <meta name="twitter:title" content="Give your time-tracking app the ability to record the time spent per project">
    <meta name="twitter:description" content="This two-part series demonstrates how to create a browser-based time-tracking tool that professionals can use to record the time they&hellip;">
    <meta name="twitter:image" content="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/web/social/tutorials.jpg">
    <meta property="twitter:image:src" content="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/web/social/tutorials.jpg" />
    <meta name="twitter:site" content="https://developer.ibm.com">
    <meta name="twitter:creator" content="@ibmcode">


    <!-- BEGIN: Use this section to set page specific variables for the Page Tag -->
  	<script language="JavaScript">var NTPT_PGEXTRA="ibmCmaId=58927";</script>
  	<!--END -->

  	<!-- Segment meta tag -->
  	<meta name="segment" property="developerWorks (developerWorks)" productTitle="developerWorks" value="Home English (developerWorks)"/>



		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='ibmcode-tutorials-css'  href='https://developer.ibm.com/site-content/plugins/ibmcode-tutorials/public/css/ibmcode_tutorials.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='carbon-styles-css'  href='https://developer.ibm.com/site-content/themes/lucio/carbon/carbon-components.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='https://developer.ibm.com/wp-includes/css/dashicons.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='lucio-style-css'  href='https://developer.ibm.com/site-content/themes/lucio/style.css?ver=v1' type='text/css' media='all' />
<link rel='stylesheet' id='pagepost_css-css'  href='https://developer.ibm.com/site-content/themes/lucio/css/pagepost.css?ver=4.9.8' type='text/css' media='all' />
<script type='text/javascript' src='https://developer.ibm.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://developer.ibm.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var authLinkAction = {"ajax_url":"https:\/\/developer.ibm.com\/wp-admin\/admin-ajax.php","nonce":"27da113777"};
/* ]]> */
</script>
<script type='text/javascript' src='https://developer.ibm.com/site-content/plugins/w3-ibm-id-auth/includes/../js/authPageAccess.js?ver=4.9.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpp_params = {"sampling_active":"1","sampling_rate":"100","ajax_url":"https:\/\/ibmcode-staging.us-east.containers.mybluemix.net\/wp-json\/wordpress-popular-posts\/v1\/popular-posts\/","ID":"58927","token":"5f53588eea","debug":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://developer.ibm.com/site-content/plugins/wordpress-popular-posts/public/js/wpp-4.2.0.min.js?ver=4.2.0'></script>
<script type='text/javascript' src='https://developer.ibm.com/site-content/themes/lucio/js/ibmcode.js?ver=20151215'></script>
<script type='text/javascript' src='https://unpkg.com/carbon-components@latest/scripts/carbon-components.js?ver=4.9.8'></script>
<script type='text/javascript' src='//1.www.s81c.com/common/stats/ida_stats.js'></script>
<link rel='https://api.w.org/' href='https://developer.ibm.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://developer.ibm.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://developer.ibm.com/wp-includes/wlwmanifest.xml" />
<link rel='prev' title='The languages of data science' href='https://developer.ibm.com/tutorials/ba-intro-data-science-4/' />
<link rel='next' title='Lessons learned from my first DIY IoT project' href='https://developer.ibm.com/tutorials/iot-lessons-learned-03/' />
<meta name="generator" content="WordPress 4.9.8" />
<link rel="canonical" href="https://developer.ibm.com/tutorials/cl-track-time-on-projects-with-ibm-cloud-2/" />
<link rel='shortlink' href='https://developer.ibm.com/?p=58927' />
<link rel="alternate" type="application/json+oembed" href="https://developer.ibm.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://developer.ibm.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F&#038;format=xml" />
	</head>
<body id="ibm-com" class="ibmcode_tutorials-template-default single single-ibmcode_tutorials postid-58927 ibm-code ibm-com ibm-type">
	<div class="code_adorn_announcement">
								<div class="code_content__wrap"><style>
  .drone-announcement{
    background: #e9e9e9;
    min-height: 53px;
    box-sizing: border-box;
  }
  .drone-announcement p{
    text-align: center;
    font-size: 1.125rem;
    line-height: 1.125rem;
    font-weight: 300;
  }
  .drone-announcement a p{
    display: table;
    color: #1e1e1e;
    width: auto;
    margin: 0 auto;
  }
  .drone-announcement a {
    text-decoration: none;
    display: block;
    text-align: center;
  }
  .drone-announcement a p .lt_text {
    display: table-cell;
    vertical-align: middle;
  }
  .drone-announcement a p .rt_img {
    display: table-cell;
    vertical-align: middle;
  }
  .drone-announcement a p strong{
    color: #41a8a5;
padding: 10px 20px !important;
margin-left: 10px;
    display: inline-block;
    background-color: #56d3d0;
    color: #000;
    font-weight: 600;
    font-size: 1.2rem;
  }
.drone-announcement a p img{
    height: auto;
    display: block;
    width: 94px;
    vertical-align: middle;
    margin-left: 2vw;
    max-width: none;
    position: relative;
    top: 1px;
  }
</style>
<div class="drone-announcement">
<a href="https://developer.ibm.com/contest?cm_mmc=ibmdev-_-drone_-internal-_-hellobar">
<p>
  <span class="lt_text">We&#8217;re giving away 1,500 DJI Tello drones.  <strong>Enter to win &rsaquo;</strong></span>
  <span class="rt_img"><img src="https://ibmcode-staging.us-east.containers.mybluemix.net/site-content/uploads/2018/11/drone.png" /></span>
</p>
</a>
</div></div>
							</div>

	<div id="site-navigation" class="site-navigation">
		<div class="code_content__wrap">
		  <nav class="bx--cloud-header" role="navigation" aria-label="site navigation">
		    <div class="bx--cloud-header__wrapper leftnav">
		  		<a id="logo" href="//developer.ibm.com">IBM <span>Developer</span></a>
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="x-dashicons x-dashicons-menu"></span></button> -->
					<div class="site-navigation__wrap">
						<h6>Main Menu</h6>
			  		<ul id="primary-menu" class="bx--cloud-header-list"><li id='topics' class=' menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-type-custom menu-item-object-custom menu-item-has-mega'><a href="/technologies/">Topics<svg width="10" height="5" viewBox="0 0 10 5" fill-rule="evenodd"><path d="M10 0L5 5 0 0z"/></svg></a><div class="mega-menu"><div class="bx--grid">
  <div class="bx--row no-pad-t">
  </div>

<li id='more_open_source_at_ibm' class=' menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-type-custom menu-item-object-custom menu-item-has-mega'><a href="/open/">More open source at IBM<svg width="10" height="5" viewBox="0 0 10 5" fill-rule="evenodd"><path d="M10 0L5 5 0 0z"/></svg></a><div class="mega-menu"><div class="bx--grid">


<!-- begin new layout -->
<div class="code_container page ">
  <div class="code_aside">
    <div id="code_aside__navwrap"><div id="code_leftnav" class="code_leftnav"><nav role="navigation" aria-label="Code portlet"><h4>Code</h4><ul id="menu-code-nav" class=""><li><a href="/exchanges/models/all/category/paas/">Models</a></li><li><a href="/patterns/category/paas/">Code Patterns</a></li></ul></nav><nav role="navigation" aria-label="Content portlet"><h4>Content</h4><ul id="menu-content-nav" class=""><li><a href="tutorials/cl-5-facts-about-cloud-foundry,">Getting Started</a></li><li><a href="/announcements/category/paas/">Announcements</a></li><li><a href="/articles/category/paas/">Articles</a></li><li><a href="/series/category/paas/">Series</a></li><li><a href="/tutorials/category/paas/">Tutorials</a></li><li><a href="/videos/category/paas/">Videos</a></li></ul></nav><nav role="navigation" aria-label="Community portlet"><h4>Community</h4><ul id="menu-community-nav" class=""><li><a href="/blogs/category/paas/">Blogs</a></li><li><a href="/events/category/paas/">Events</a></li></ul></nav><nav> <h4>RELATED</h4> <ul> <li><a href="/depmodels/cloud/">Cloud</a></li> <li><a href="/components/cloud-foundry/">Cloud Foundry</a></li> <li><a href="/components/cloud-ibm/">IBM Cloud</a></li> <li><a href="/depmodels/hybrid/">Hybrid Cloud</a></li> <li><a href="/components/cloud-private/">IBM Cloud Private</a></li> <li><a href="/components/cloud-native/">Cloud Native</a></li> <li><a href="/technologies/serverless/">Serverless</a></li> <li><a href="/technologies/object-storage/">Cloud Object Storage</a></li> </ul> </nav> <nav> <h4>MORE</h4><ul><li><a href="/newsletters/cloud/">Cloud Newsletter</a></li></ul> </nav></div><div id="code_aside__overlay" class="code_aside__overlay"></div><button id="code_aside__navtoggle_close"><span class="dashicons dashicons-no-alt"></span> <i>Close</i></button></div>  </div>
  <div class="code_main">
<!-- begin new layout -->
<div class="code_postcontent">
  <div class="cpt-body">
    <div class="cpt-byline">
      <div class="cpt-byline__wrap">
        <p class="cpt-byline__posttype"><span>Tutorial</span></p>
        <h1 class="cpt-byline__title">Give your time-tracking app the ability to record the time spent per project</h1>        <h2 class="cpt-byline__subtitle">Retrieve and aggregate time entries to generate reports of hours worked</h2>        <p class="cpt-byline__author">By Vikram Vaswani | Published April 24, 2018 -  Updated April 24, 2018</p>
                <p class="cpt-byline__categories"><a href="https://developer.ibm.com/tutorials/category/cloud/" class="bx--tag bx--tag--category">Cloud</a><a href="https://developer.ibm.com/tutorials/category/databases/" class="bx--tag bx--tag--category">Databases</a><a href="https://developer.ibm.com/tutorials/category/paas/" class="bx--tag bx--tag--category">Platform as a Service</a></p>        <hr>
      </div>
    </div>

        <div class="cpt-content">
      <div class="cpt-content__wrap">
        <section class="wp-content">
          <!-- begin main body content -->
          <style>
  .dw-article-sidebar p.ibm-ind-link:last-child {
    padding-bottom: 26px !important;
}
.dw-article-sidebar p.ibm-ind-link {
    padding-bottom: 15px !important;
}

div.dw-article-sidebar > p {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    font-size: 0.875rem !important;
    line-height: 1.5 !important;
}
p.ibm-ind-link {
    padding-bottom: 12px;
}

.ibm-video-player-con {
    padding-bottom: 26px;
}

.dw-article-sidebar .ibm-video-player-con {
    padding-bottom: 0;
}

.ibm-video-link::before {
    content: "1f2";
}

ul.ibm-link-list a, .ibm-ind-link a, .ibm-icononly a, .ibm-icononly span, a.ibm-inlinelink[class*="-link"] {
    display: inline-block;
    margin: 0;
    padding-left: 2.1em;
    position: relative;
}

div.dw-article-sidebar {
    float: right;
    margin-left: 15px;
    margin-bottom: 15px;
    margin-top: 15px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 206px;
    border: 1px solid #aaaaaa;
}
.ibm-background-cool-white-20 {
    background-color: #f9f9fb;
}

.dw-article-head-container {
    display: table;
}

.dw-article-step {
    display: table-cell;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
}

.dw-article-stepnum {
    height: 42px;
    min-width: 42px;
    text-align: center;
    vertical-align: middle;
    border-radius: 50%;
    background-color: #007670;
    color: #fff;
    font-size: 1.4em;
    line-height: 42px;
}

.dw-article-h2 {
    margin-left: 20px;
    margin-top: 14px;
}

.ibm-button-link {
    padding-bottom: 8px;
}

.dw-article-btn-pri {
    background-color: #007670 !important;
    border-color: #007670 !important;
}
.ibm-btn-pri, .ibm-btn-sec {
    border: 2px solid #323232;
    background-color: #323232;
    color: #fff;
    cursor: pointer;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 16px;
    line-height: 20px;
    max-width: 100%;
    min-width: 120px;
    min-width: 90px9;
    min-height: 20px;
    padding: 11px 18px;
    text-align: center;
    text-decoration: none;
    -webkit-transition: border .3s,color .3s,background-color .3s;
    -moz-transition: border .3s,color .3s,background-color .3s;
    -o-transition: border .3s,color .3s,background-color .3s;
    -ms-transition: border .3s,color .3s,background-color .3s;
    transition: border .3s,color .3s,background-color .3s;
    white-space: normal;
}

.ibm-btn-sec {
	background-color:transparent;
	color:#323232;
	border-color:#323232
}

.ibm-btn-row input,.ibm-btn-row button,.ibm-btn-row a {
	display:inline-block;
	margin:0 20px 20px 0
}

a.ibm-btn-pri{
  color: #fff;
}

.ibm-btn-pri:visited,.ibm-btn-sec:visited {
	color:#fff
}
.ibm-btn-pri:hover,.ibm-btn-pri:focus,.ibm-btn-sec:hover,.ibm-btn-sec:focus {
	background-color:#000;
	border-color:#000;
	text-decoration:none
}
.ibm-btn-pri:focus,.ibm-btn-sec:focus {
	outline:1px dotted #000
}
.ibm-btn-pri::-moz-focus-inner,.ibm-btn-sec::-moz-focus-inner {
	border:0
}
.ibm-btn-pri.ibm-btn-small.ibm-btn-nowrap,.ibm-btn-sec.ibm-btn-small.ibm-btn-nowrap {
	padding:8px 1em 7px
}
.ibm-btn-pri.ibm-btn-nowrap,.ibm-btn-sec.ibm-btn-nowrap {
	line-height:20px;
	overflow:hidden;
	text-overflow:ellipsis;
	white-space:nowrap
}
.ibm-btn-sec {
	background-color:transparent;
	color:#323232;
	border-color:#323232
}
.ibm-btn-sec:visited {
	color:#323232
}
.ibm-btn-sec:hover,.ibm-btn-sec:focus {
	background-color:#323232;
	border-color:#323232;
	color:#fff
}
.ibm-btn-sec.ibm-btn-transparent:hover,.ibm-btn-sec.ibm-btn-transparent:focus {
	color:#323232
}
.ibm-button-link {
	padding-bottom:8px
}
.ibm-button-link a {
	margin-bottom:8px
}
.ibm-button-link a[class*='ibm-btn-'][class*='-btn'] {
	display:inline-block
}
.ibm-button-link a[class*='ibm-btn-'][class*='-btn'].ibm-btn-nowrap {
	margin-bottom:0
}
.ibm-button-link.ibm-btn-row {
	padding-bottom:0
}
.ibm-button-link.ibm-btn-row a {
	margin-bottom:20px
}

.ibm-btn-row [class*='-link'] {
	position:relative;
	padding-left:35px;
	padding-top:9px
}

.ibm-btn-row {
	padding:0
}
.ibm-btn-row.ibm-ind-link {
	padding:0
}
.ibm-btn-row.ibm-ind-link a.ibm-btn-no-icon-link {
	padding-left:18px
}
.ibm-btn-row input,.ibm-btn-row button,.ibm-btn-row a {
	display:inline-block;
	margin:0 20px 20px 0
}
.ibm-btn-row input:last-child,.ibm-btn-row button:last-child,.ibm-btn-row a:last-child {
	margin-right:0
}
@media only screen and (min-width:0) and (max-width:579px) {
	.ibm-btn-row input,.ibm-btn-row button,.ibm-btn-row a {
		width:100%
	}
}
.ibm-btn-row.ibm-btn-row--line-height-0 {
	line-height:0
}
.ibm-btn-row.ibm-btn-row--line-height-0 [class*='ibm-btn-'] {
	margin-bottom:0
}
.ibm-padding-bottom-r1 {
	padding-bottom:2vw!important
}
.ibm-codeblock {
 clear: both;
}
.bx--snippet--multi {
  margin-bottom: 2em;
  max-width: 100%;
}
.bx--snippet--multi .bx--snippet-container {
  overflow-x: auto;
}
code {
  white-space: pre;
}

.ibm-pull-quote.ibm-h3 em {
    font-size: 1.5625rem;
    line-height: 1.875rem;
}
.ibm-pull-quote blockquote em {
    display: block;
}
.ibm-pull-quote em {
    font-weight: 300;
}
.dw-pullquote {
    color: #767676;
    font-style: italic !important;
}
blockquote {
  border-left: 2px solid #ccc;
  margin: 1.5em 10px;
  padding: 0.5em 10px;
  vertical-align: baseline;
  quotes: "\201C","\201D","\2018","\2019";
  position: relative;
}
blockquote:before {
  position: absolute;
  content: open-quote;
  font-size: 2.5em;
  color: #767676;
}
.ibm-pull-quote blockquote em:after {
  position: absolute;
  content: close-quote;
  font-size: 2em;

}
blockquote p {
   display: block;
   margin-left: 1.0em;
}
  </style><p xmlns="http://www.w3.org/1999/xhtml">In <a href="http://www.ibm.com/developerworks/cloud/library/cl-track-time-on-projects-with-ibm-cloud-1">Part 1</a>, I explained the concept of a web-based time tracking tool for professionals that bill on an hourly basis. I walked you through building the basic skeleton of the application and showed you the business logic for adding, listing, and editing customer projects. I also explained how to launch a MySQL database instance on IBM Cloud and connect it with the tool.</p>
<p>In this second, concluding segment, I complete the application by adding the ability to record the time spent per project. I show you how to retrieve and aggregate time entries to generate reports of hours worked per project, both online and in a structured format suitable for download and further processing. Finally, I walk you through the steps to upload and deploy the application on IBM Cloud, so that it&#8217;s online and available in the cloud 24/7.</p>
<p> <p class="ibm-btn-row ibm-padding-bottom-r1"><a class="ibm-btn-pri dw-article-btn-pri" href="https://github.com/vvaswani/bluemix-time-tracker" onclick="segmentEvent(https://github.com/vvaswani/bluemix-time-tracker); return false;">Get the sample code on GitHub</a><a class="ibm-btn-sec dw-article-btn-sec" href="http://time-tracker-demo.mybluemix.net" onclick="segmentEvent(http://time-tracker-demo.mybluemix.net); return false;">Try the demo</a></p></p>
<h2 id="1-add-time-entries">1. Add time entries</h2>
<p>The first step is to add a form for users to input the time spent on a project. This form should include fields for the number of hours spent, the date on which the time was spent, and a brief description of the work done. Create this form at <em>$APP_ROOT</em>/views/entries/save.phtml by using the base template shown in <a href="http://www.ibm.com/developerworks/cloud/library/cl-track-time-on-projects-with-ibm-cloud-1">Part 1</a> and placing the code below in the content area:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php if (!isset($_POST['submit'])): ?>
  &lt;form method="post"
    action="&lt;?php echo $data['router']‑>pathFor('entries‑save'); ?>">
    &lt;div class="form‑group">
      &lt;label for="pid">Project&lt;/label>
      &lt;select class="form‑control" id="pid" name="pid">
      &lt;?php foreach ($data['projects'] as $project): ?>
        &lt;option value="&lt;?php echo htmlspecialchars($project['id'], ENT_COMPAT, 'UTF‑8'); ?>">
          &lt;?php echo htmlspecialchars($project['name'], ENT_COMPAT, 'UTF‑8'); ?>
        &lt;/option>
      &lt;?php endforeach; ?>
      &lt;/select>
    &lt;/div>
    &lt;div class="form‑group">
      &lt;label for="date">Date&lt;/label>
      &lt;input type="date" class="form‑control" id="date" name="date">
    &lt;/div>
    &lt;div class="form‑group">
      &lt;label for="hours">Hours spent&lt;/label>
      &lt;input type="text" class="form‑control" id="hours" name="hours">
    &lt;/div>
    &lt;div class="form‑group">
      &lt;label for="comment">Comment&lt;/label>
      &lt;input type="text" class="form‑control" id="comment" name="comment">
    &lt;/div>
    &lt;div class="form‑group">
      &lt;button type="submit" name="submit" class="btn btn‑success">Save&lt;/button>
    &lt;/div>
  &lt;/form>
&lt;?php else: ?>
  &lt;div class="alert alert‑success" role="alert">
    &lt;strong>Success!&lt;/strong> The time entry was successfully created or updated.
  &lt;/div>
&lt;?php endif; ?>
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<p xmlns="http://www.w3.org/1999/xhtml">This form contains four fields: a drop-down project selector and input fields for date, hours, and description. Notice that the date field is specified as type <code style="font-family:monospace;font-size:1rem">date</code> and not <code style="font-family:monospace;font-size:1rem">text</code>; in compatible browsers, this will inform the browser to display a date picker to make date entry easier for the user. Here&#8217;s what the form looks like:</p>
<img alt="Add entry form" height="523" src="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/Code-Tutorials/cl-track-time-on-projects-with-ibm-cloud-2/images/image1.png" width="349" class="ibm-downsize"/>
<p>Next, add the corresponding code to render and process the form in $APP_ROOT/public/index.php:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
B
// ...

// time entry form renderer
$app‑>get('/entries/save', function (Request $request, Response $response, $args) {
  // query for all project records
  $projects = $this‑>db‑>query("SELECT * FROM projects");
  $response = $this‑>view‑>render($response, 'entries/save.phtml', [
    'router' => $this‑>router, 'projects' => $projects
  ]);
  return $response;
})‑>setName('entries‑save');

// time entry form processor
$app‑>post('/entries/save[/{id}]', function (Request $request, Response $response, $args) {
  // get configuration
  $config = $this‑>get('settings');
  // get input values
  $params = $request‑>getParams();
  // check input
  $pid = filter_var($params['pid'], FILTER_SANITIZE_NUMBER_INT);
  if (!(filter_var($pid, FILTER_VALIDATE_INT))) {
    throw new Exception('ERROR: Project is not valid');
  }
  $hours = filter_var($params['hours'], FILTER_SANITIZE_NUMBER_FLOAT,
    FILTER_FLAG_ALLOW_FRACTION);
  if (!(filter_var($hours, FILTER_VALIDATE_FLOAT))) {
    throw new Exception('ERROR: Time value is not a valid number');
  }
  $comment = filter_var($params['comment'], FILTER_SANITIZE_STRING);
  if (empty($comment)) {
    throw new Exception('ERROR: Comment is not valid');
  }
  $date = $params['date'];
  if (!($date == date('Y‑m‑d', strtotime($date)))) {
    throw new Exception('ERROR: Date is not valid');
  }
  // save record
  if (!$this‑>db‑>query("INSERT INTO entries (pid, hours, comment, date)
    VALUES ('$pid', '$hours', '$comment', '$date')")) {
    throw new Exception('Failed to save record: ' . $this‑>db‑>error);
  }
  $response = $this‑>view‑>render($response, 'entries/save.phtml', [
    'router' => $this‑>router
  ]);
  return $response;
});

// ...
B
$app‑>run();
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<div class="dw-article-sidebar ibm-background-cool-white-20"> <p xmlns="http://www.w3.org/1999/xhtml"> <strong>Try IBM Cloud for free</strong></p> <p>Build your next app quickly and easily with <a href="https://console.bluemix.net/">IBM Cloud Lite</a>. Your free account never expires, and you get 256 MB of Cloud Foundry runtime memory, plus 2 GB with Kubernetes Clusters. <a href="https://www.ibm.com/blogs/bluemix/2017/11/introducing-ibm-cloud-lite-account/">Get all the details</a> and find out how to get started. And if you&#8217;re new to IBM Cloud, check out the <a href="http://developer.ibm.com/courses/all-courses/bluemix-essentials/">IBM Cloud Essentials course on developerWorks</a>.</p></div>
<p>The listing above contains two handlers:</p>
<ul>
<li>The first handler (<code style="font-family:monospace;font-size:1rem">GET</code> requests) is responsible for rendering the form. It performs a <code style="font-family:monospace;font-size:1rem">SELECT</code> query on the MySQL database to retrieve a list of projects. This list is then passed to the view template, where it is used to populate the project list selector.</li>
<li><p>The second handler (<code style="font-family:monospace;font-size:1rem">POST</code> requests) is triggered when the form is submitted. Similar to the project addition/modification routine you already saw in <a href="http://www.ibm.com/developerworks/cloud/library/cl-track-time-on-projects-with-ibm-cloud-1">Part 1</a>, it begins by sanitizing and validating the form input to ensure, among other things, that the date provided is a valid date and that the project ID and number of hours are in the correct format. Assuming all tests pass, this handler generates and executes an <code style="font-family:monospace;font-size:1rem">INSERT</code> query to add the new time entry to the <code style="font-family:monospace;font-size:1rem">entries</code> table in the MySQL database, and returns control to the user via a success notification.</p>
<img alt="Result of adding a time entry" height="211" src="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/Code-Tutorials/cl-track-time-on-projects-with-ibm-cloud-2/images/image2.png" width="349" class="ibm-downsize"/>
</li>
</ul>
<h2 id="2-list-and-aggregate-time-entries">2. List and aggregate time entries</h2>
<p>As you continue recording the time spent on your various projects, you&#8217;re quickly going to start wishing for a way to see the total time spent per project, both to analyze the effort you&#8217;re putting in and to ensure that you&#8217;re not exceeding your client&#8217;s budget.</p>
<p>It&#8217;s easy enough to add a handler that lists and aggregates the time entries for a specific project by executing a <code style="font-family:monospace;font-size:1rem">SELECT</code> query on the database, as shown here:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
B
// ...

// time entry list controller
$app‑>get('/entries/{id:[0‑9]+}', function (Request $request, Response $response, $args) {
  $id = filter_var($args['id'], FILTER_SANITIZE_NUMBER_INT);
  // query for project name
  $projectResult = $this‑>db‑>query("SELECT  FROM projects WHERE id = '$id'");
  $project = $projectResult‑>fetch_object();
  // query for all time entries
  $entries = $this‑>db‑>query("SELECT  FROM entries
    WHERE pid = '$id' ORDER BY date ASC");
  $response = $this‑>view‑>render($response, 'entries/list.phtml', [
    'router' => $this‑>router, 'entries' => $entries, 'project' => $project
  ]);
  return $response;
})‑>setName('entries‑list');

// ...
B
$app‑>run();
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<p xmlns="http://www.w3.org/1999/xhtml">This handler accepts <code style="font-family:monospace;font-size:1rem">GET</code> requests for the /entries/<em>ID</em> URL, where ID refers to the project ID. On receipt of such a request, the handler first checks the <code style="font-family:monospace;font-size:1rem">projects</code> table to ensure that the ID provided refers to a valid project. Assuming it does, the handler then uses the same project ID to return a list of all associated time entries from the <code style="font-family:monospace;font-size:1rem">entries</code> table, ordered chronologically, and passes this list to the template.</p>
<p>The action then shifts to the <em>$APP_ROOT</em>/views/entries/list.phtml template, which is responsible for displaying the time entries retrieved from the database in an easy-to-read-and-print format. This template also takes care of aggregating the entries to arrive at a total &#8220;time spent&#8221; number. Here&#8217;s the code:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;h2>
  Project: &lt;?php echo htmlspecialchars($data['project']‑>name,
    ENT_COMPAT, 'UTF‑8'); ?>
  &lt;a role="button" class="btn btn‑success"
    href="&lt;?php echo $data['router']‑>pathFor('entries‑list',
    array('id' => htmlspecialchars($data['project']‑>id, ENT_COMPAT, 'UTF‑8'),
    'download' => true)); ?>">Download data&lt;/a>
&lt;/h2>
&lt;?php $count = 1; ?>
&lt;?php $total = 0; ?>
&lt;?php if (count($data['entries'])): ?>
&lt;table class="table table‑border table‑responsive‑md">
  &lt;thead>
    &lt;tr>
      &lt;th>#&lt;/th>
      &lt;th>Date&lt;/th>
      &lt;th>Hours&lt;/th>
      &lt;th>Comment&lt;/th>
      &lt;th>&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
  &lt;?php foreach ($data['entries'] as $entry): ?>
  &lt;tr>
    &lt;td>&lt;?php echo $count; ?>&lt;/td>
    &lt;td>&lt;?php echo htmlspecialchars($entry['date'], ENT_COMPAT, 'UTF‑8'); ?>
      &lt;/td>
    &lt;td>&lt;?php echo htmlspecialchars($entry['hours'], ENT_COMPAT, 'UTF‑8'); ?>
      &lt;/td>
    &lt;td>&lt;?php echo htmlspecialchars($entry['comment'], ENT_COMPAT, 'UTF‑8'); ?>
      &lt;/td>
    &lt;td>&lt;a role="button" class="btn btn‑danger"
      href="&lt;?php echo $data['router']‑>pathFor('entries‑delete',
      array('id' => htmlspecialchars($entry['id'], ENT_COMPAT, 'UTF‑8'))); ?>">
      Delete entry&lt;/a>&lt;/td>
  &lt;/tr>
  &lt;?php $total += $entry['hours']; ?>
  &lt;?php $count++; ?>
  &lt;?php endforeach; ?>
  &lt;tr>
    &lt;td>&lt;/td>
    &lt;td>&lt;strong>TOTAL&lt;/strong>&lt;/td>
    &lt;td>&lt;strong>&lt;?php echo $total; ?>&lt;/strong>&lt;/td>
    &lt;td colspan="2">&lt;/td>
  &lt;/tr>
  &lt;/tbody>
&lt;/table>
&lt;?php endif; ?>
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<p xmlns="http://www.w3.org/1999/xhtml">The template simply iterates over the list of time entries, displaying them in separate rows of a table. It maintains an ongoing count of the time spent and prints the total in the last row of the table. Here&#8217;s an example of what the output looks like:</p>
<img alt="Time report" height="508" src="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/Code-Tutorials/cl-track-time-on-projects-with-ibm-cloud-2/images/image3.png" width="523" class="ibm-downsize"/>
<p>You will notice that each entry in the table includes a link to delete the corresponding record, and the entry ID is included in the link as a URL parameter. Let&#8217;s look at that next.</p>
<h2 id="3-delete-time-entries">3. Delete time entries</h2>
<p>Each time entry in the list shown in the previous section includes a deletion link. This operation is handled by the /entries/delete handler, which looks like this:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
B
// ...
// time entry deletion controller
$app‑>get('/entries/delete/{id}', function (Request $request, Response $response, $args) {
  $id = filter_var($args['id'], FILTER_SANITIZE_NUMBER_INT);
  if (!$this‑>db‑>query("DELETE FROM entries WHERE id = '$id'")) {
    throw new Exception('Failed to delete record.');
  }
  return $response‑>withHeader('Location', $this‑>router‑>pathFor('projects‑list'));
})‑>setName('entries‑delete');

// ...
B
$app‑>run();
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<p xmlns="http://www.w3.org/1999/xhtml">Nothing too complex here. The handler accepts a time entry ID and executes a <code style="font-family:monospace;font-size:1rem">DELETE</code> query for the corresponding record on the database. The user is redirected to the project list page following successful deletion.</p>
<p><a href="http://www.ibm.com/developerworks/cloud/library/cl-track-time-on-projects-with-ibm-cloud-1">Part 1</a> briefly mentioned project deletion, which is handled by the /projects/delete handler. Project deletion is similar to time entry deletion, with one additional step. Since projects and time entries are linked by a foreign key in the database, you must delete all time entries for a project before you can delete the project itself. Here&#8217;s what that code looks like:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
B
// ...

// project deletion controller
$app‑>get('/projects/delete/{id}', function (Request $request, Response $response, $args) {
  $id = filter_var($args['id'], FILTER_SANITIZE_NUMBER_INT);
  if (!$this‑>db‑>query("DELETE FROM entries WHERE pid = '$id'")) {
    throw new Exception('Failed to delete records.');
  }
  if (!$this‑>db‑>query("DELETE FROM projects WHERE id = '$id'")) {
    throw new Exception('Failed to delete record.');
  }
  return $response‑>withHeader('Location', $this‑>router‑>pathFor('projects‑list'));
})‑>setName('projects‑delete');

// ...
B
$app‑>run();
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<h2 id="4-export-time-reports" xmlns="http://www.w3.org/1999/xhtml">4. Export time reports</h2>
<p>In Step 2, you saw the business logic display a summary report of the time worked on a project. Usually, this is not enough: There are many cases where you would want this same report in a structured, downloadable format, perhaps to email to a client or to perform more complex calculations.</p>
<p>Since most of the hard work of retrieving and aggregating the individual time entries is already done by the /entries/ID handler, you can leverage this same handler to produce a CSV-formatted file instead of HTML output. Reusing existing code in this manner is a good example of the DRY (&#8220;Don&#8217;t Repeat Yourself&#8221;) principle, and also saves you some time.</p>
<p>Update the existing /entries/ID handler to accept an additional <code style="font-family:monospace;font-size:1rem">download</code> argument which triggers a CSV file download instead of the normal HTML output, as shown below:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
B
// ...

// time entry list controller
$app‑>get('/entries/{id:[0‑9]+}[/{download}]', function (Request $request, Response $response, $args) {
  $id = filter_var($args['id'], FILTER_SANITIZE_NUMBER_INT);
  // query for project name
  $projectResult = $this‑>db‑>query("SELECT  FROM projects WHERE id = '$id'");
  $project = $projectResult‑>fetch_object();
  // query for all time entries
  $entries = $this‑>db‑>query("SELECT  FROM entries WHERE pid = '$id'
    ORDER BY date ASC");
  if (isset($args['download'])) {
    $response = $response‑>withHeader('Content‑type', 'text/csv')
                         ‑>withHeader('Content‑Disposition',
                          'attachment; filename="' . $id .'.csv"')
                         ‑>withHeader('Expires', '@0')
                         ‑>withHeader('Cache‑Control', 'must‑revalidate')
                         ‑>withHeader('Pragma', 'public');
    $stream = fopen('php://memory', 'r+');
    fwrite($stream, $this‑>view‑>fetch('entries/list.csv', [
      'entries' => $entries
    ]));
    return $response‑>withBody(new \Slim\Http\Stream($stream));
  } else {
    $response = $this‑>view‑>render($response, 'entries/list.phtml', [
      'router' => $this‑>router, 'entries' => $entries, 'project' => $project
    ]);
    return $response;
  }
})‑>setName('entries‑list');

// ...
B
$app‑>run();
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<p xmlns="http://www.w3.org/1999/xhtml">This revised version of the handler now serves two purposes: A request without the <code style="font-family:monospace;font-size:1rem">download</code> flag triggers the same HTML response as before, while a request with the <code style="font-family:monospace;font-size:1rem">download</code> flag creates a custom Response object with all the headers necessary to trigger a browser download prompt.</p>
<p>In this latter case, the code generates a new PHP stream object and writes the list of entries to it in CSV format using a new CSV template. Here&#8217;s what that template, located at <em>$APP_ROOT</em>/views/entries/list.csv, looks like:</p>
<p><div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
$count = 1;
foreach ($data['entries'] as $entry) {
  printf(
    "%d,%s,%.2f,%s" . PHP_EOL,
    $count,
    htmlspecialchars($entry['date'], ENT_COMPAT, 'UTF‑8'),
    htmlspecialchars($entry['hours'], ENT_COMPAT, 'UTF‑8'),
    htmlspecialchars($entry['comment'], ENT_COMPAT, 'UTF‑8')
  );
  $count++;
}
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></p>
<p xmlns="http://www.w3.org/1999/xhtml">The resulting output stream is then transmitted to the browser using the custom Response object. The user can download and save this output stream as a CSV file on the client system, and then open it in any spreadsheet tool or CSV-capable editor. Here&#8217;s an example of one such CSV file:</p>
<img alt="CSV output example" height="138" src="https://wdc.objectstorage.softlayer.net/v1/AUTH_7046a6f4-79b7-4c6c-bdb7-6f68e920f6e5/Code-Tutorials/cl-track-time-on-projects-with-ibm-cloud-2/images/image4.png" width="323" class="ibm-downsize"/>
<h2 id="5-deploy-to-ibm-cloud">5. Deploy to IBM Cloud</h2>
<p>In order to connect to the ClearDB MySQL instance, the PHP application needs the database host name, username, password, and database name. You have already specified this information in the application configuration file. However, as an alternative, you can connect the database instance to the application and import these credentials directly from the IBM Cloud environment.</p>
<ol>
<li>If you wish to use this approach, add the following code to the $APP_ROOT/public/index.php script, before the lines that initialize the database connection: <div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
B
// autoload files
require '../vendor/autoload.php';
require '../config.php';

// if VCAP_SERVICES environment available
// overwrite local credentials with environment credentials
if ($services = getenv("VCAP_SERVICES")) {
  $services_json = json_decode($services, true);
  $config['settings']['db']['hostname'] =
    $services_json['cleardb'][0]['credentials']['hostname'];
  $config['settings']['db']['username'] =
    $services_json['cleardb'][0]['credentials']['username'];
  $config['settings']['db']['password'] =
    $services_json['cleardb'][0]['credentials']['password'];
  $config['settings']['db']['name'] =
    $services_json['cleardb'][0]['credentials']['name'];
}

//...
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></li>
<li xmlns="http://www.w3.org/1999/xhtml">At this point, the application is complete, so all that&#8217;s left is to deploy it to IBM Cloud. First, create the application manifest file, remembering to use a unique host and application name by appending a random string to it (such as your initials). <div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
‑‑‑
applications:
‑ name: timetracker‑initialsmemory: 256M
instances: 1
host: timetracker‑initialsbuildpack: https://github.com/cloudfoundry/php‑buildpack.git
stack: cflinuxfs2
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></li>
<li xmlns="http://www.w3.org/1999/xhtml">You must also configure the build pack to use the public/ directory of the application as the web server directory. Create a $APP_ROOT/.bp-config/options.json file with the following content:<div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
{
    "WEB_SERVER": "httpd",
    "WEBDIR": "public",
    "PHP_VERSION": "{PHP_70_LATEST}"
}
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></li>
<li xmlns="http://www.w3.org/1999/xhtml">You must also load the MySQL PHP extension. Create a <em>$APP_ROOT</em>/.bp-config/php/php.ini.d/php.ini file with the following content: <div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
extension=mysqli.so
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></li>
<li xmlns="http://www.w3.org/1999/xhtml">Now, go ahead and push the application to IBM Cloud:<div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
shell> cf api https://api.ng.bluemix.net
shell> cf login
shell> cf push
              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></li>
<li xmlns="http://www.w3.org/1999/xhtml">If you choose to import the database credentials from the IBM Cloud environment, bind the ClearDB instance that you initialized earlier to the application as shown below. Remember to use the correct ID for the service instance to ensure that the right instance is bound to the application. You can obtain the service ID from the IBM Cloud dashboard.<div class="ibm-codeblock"><div class="bx--snippet bx--snippet--multi" data-code-snippet=""><div class="bx--snippet-container" aria-label="Code Snippet Text"><pre><code>
shell> cf bind‑service timetracker‑[initials] "ClearDB Managed MySQL Database‑[id]"
shell> cf restage timetracker‑initials              </code></pre></div><button data-copy-btn="" class="bx--snippet-button" type="button" aria-label="Copy code" tabindex="0"><svg class="bx--snippet__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M1 10H0V2C0 .9.9 0 2 0h8v1H2c-.6 0-1 .5-1 1v8z"></path><path d="M11 4.2V8h3.8L11 4.2zM15 9h-4c-.6 0-1-.4-1-1V4H4.5c-.3 0-.5.2-.5.5v10c0 .3.2.5.5.5h10c.3 0 .5-.2.5-.5V9zm-4-6c.1 0 .3.1.4.1l4.5 4.5c0 .1.1.3.1.4v6.5c0 .8-.7 1.5-1.5 1.5h-10c-.8 0-1.5-.7-1.5-1.5v-10C3 3.7 3.7 3 4.5 3H11z"></path></svg><div class="bx--btn--copy__feedback" data-feedback="Copied!"></div></button><button class="bx--btn bx--btn--ghost bx--btn--sm bx--snippet-btn--expand" type="button"><span class="bx--snippet-btn--text" data-show-more-text="Show more" data-show-less-text="Show less">Show more</span><svg class="bx--icon-chevron--down" width="12" height="7" viewBox="0 0 12 7" aria-label="Show more icon"><title>Show more icon</title><path fill-rule="nonzero" d="M6.002 5.55L11.27 0l.726.685L6.003 7 0 .685.726 0z"></path></svg></button></div></div></li>
</ol>
<p xmlns="http://www.w3.org/1999/xhtml">You should now be able to browse to the application at <a href="http://timetracker-[initials].mybluemix.net">http://timetracker-[initials].mybluemix.net</a> and see the welcome page. In case you don&#8217;t see it, you can check the <a href="http://vikram-vaswani.in/weblog/2015/03/19/debugging-php-errors-on-ibm-bluemix/">debug log</a>.</p>
<h2 id="conclusion">Conclusion</h2>
<p>The goal of this article has been to show you how to build a useful application that can run entirely online, using a cloud database and cloud hosting infrastructure. IBM Cloud&#8217;s ClearDB database service, coupled with the PHP CloudFoundry buildpack and some framework glue, makes it easy to build database-backed PHP web applications without your having to worry about infrastructure security and scalability.</p>
<p>If you&#8217;d like to learn more about the services and tools discussed in this article, start by trying out the <a href="http://time-tracker-demo.mybluemix.net">live demo</a> of the application. Remember that this is a public demo, so you should be careful not to upload confidential or sensitive information to it. Then, download the<a href="https://github.com/vvaswani/bluemix-time-tracker">code</a> from its GitHub repository, take a closer look to see how it all fits together, and start modifying it to meet your own requirements. Happy coding!</p>                    <footer class="code--entry-footer"></footer>        </section>
      </div>
    </div>
    <div class="cpt-aside">
      <div id="dockable2" class="fixHeader2">
        <div class="cpt-aside__wrap">
          <nav class="cpt-social" role="navigation" aria-label="Social sharing">
	            <h5>Social</h5>
	            <ul>
	              <li>
									<a onclick="return ibmcode.socialpopup(this);" target="_blank" class="ibm-facebook-encircled-link" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F&amp;t=Give+your+time-tracking+app+the+ability+to+record+the+time+spent+per+project" data-id="facebook">
										<i class="ibm-access">Facebook</i>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		                  <title>Facebook</title>
		                  <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
		                </svg>
									</a>
								</li>
								<li>
									<a onclick="return ibmcode.socialpopup(this);" target="_blank" class="ibm-twitter-encircled-link" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F&amp;text=Give+your+time-tracking+app+the+ability+to+record+the+time+spent+per+project" data-id="twitter">
										<i class="ibm-access">Twitter</i>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<title>Twitter</title>
											<path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
										</svg>
									</a>
								</li>
								<li>
									<a onclick="return ibmcode.socialpopup(this);" target="_blank" class="ibm-linkedin-encircled-link" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F&amp;title=Give+your+time-tracking+app+the+ability+to+record+the+time+spent+per+project" data-id="linkedin">
										<i class="ibm-access">Linked In</i>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<title>LinkedIn</title>
											<path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
										</svg>
									</a>
								</li>
								<li>
									<a onclick="return ibmcode.socialpopup(this);" target="_blank" class="ibm-googleplus-encircled-link" href="https://plus.google.com/share?url=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F&amp;t=Give+your+time-tracking+app+the+ability+to+record+the+time+spent+per+project" data-id="googleplus">
									  <i class="ibm-access">Google+</i>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<title>Google+</title>
											<path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-10.333 16.667c-2.581 0-4.667-2.087-4.667-4.667s2.086-4.667 4.667-4.667c1.26 0 2.313.46 3.127 1.22l-1.267 1.22c-.347-.333-.954-.72-1.86-.72-1.593 0-2.893 1.32-2.893 2.947s1.3 2.947 2.893 2.947c1.847 0 2.54-1.327 2.647-2.013h-2.647v-1.6h4.406c.041.233.074.467.074.773-.001 2.666-1.787 4.56-4.48 4.56zm11.333-4h-2v2h-1.334v-2h-2v-1.333h2v-2h1.334v2h2v1.333z"/>
										</svg>
									</a>
								</li>
							</ul>
						</nav><nav class="cpt-contentNav"><h5>Contents</h5><ul>
<li><a href="#1-add-time-entries">1. Add time entries</a></li>
<li><a href="#2-list-and-aggregate-time-entries">2. List and aggregate time entries</a></li>
<li><a href="#3-delete-time-entries">3. Delete time entries</a></li>
<li><a href="#4-export-time-reports">4. Export time reports</a></li>
<li><a href="#5-deploy-to-ibm-cloud">5. Deploy to IBM Cloud</a></li>
<li><a href="#conclusion">Conclusion</a></li>
</ul>
</nav><nav class="cpt-contentNav"><h5>Resources</h5>                <ul><li><a href="https://getcomposer.org/" target="_blank">Composer documentation</a></li><li><a href="http://slimframework.com/" target="_blank">Slim framework documentation</a></li><li><a href="https://php.net/mysqli" target="_blank">PHP/MySQL extension documentation</a></li><li><a href="http://vikram-vaswani.in/weblog/2015/03/19/debugging-php-errors-on-ibm-bluemix/" target="_blank">Debugging PHP errors on IBM Cloud</a></li><li><a href="https://console.bluemix.net/" target="_blank">Try IBM Cloud for free</a></li>
                    </ul></nav>        </div>
      </div>
    </div>

  </div>
</div>
<!-- end new layout -->
<div class="cpt__related_content"><h4><span>Related content</span></h4><div class="bx--grid"><div id="ftrelated" class="bx--row" data-widget="setsameheight" data-always="true" data-items=".ibm--card__body"><div class="bx--col-xs-12 bx--col-md-4"><div class="ibm--card ibm--card__ibmcode_events">
          <a class="ibm--card__block_link" href="/events/ibm-developer-meetup-davinci-montevideo-10-9-2018/" class="">
            <div class="ibm--card__body">
              <p class="ibm--card__type">Meetup</p>
              <h3 class="ibm--card__title">IBM Developer Meetup @DaVinci</h3>
              <p class="ibm--card__date">
                <svg version="1.1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<g>
	<g>
		<g>
			<path class="st0" d="M15.6,4.5c0-1.4-1.1-2.5-2.5-2.5s-2.5,1.1-2.5,2.5v1.2h5V4.5z"/>
		</g>
		<g>
			<path class="st0" d="M38.8,4.5c0-1.4-1.1-2.5-2.5-2.5s-2.5,1.1-2.5,2.5v1.2h5V4.5z"/>
		</g>
		<g>
			<path class="st0" d="M44.1,5.7h-5.2v3.1c0,1.4-1.1,2.5-2.5,2.5s-2.5-1.1-2.5-2.5V5.7H15.6v3.1c0,1.4-1.1,2.5-2.5,2.5
				s-2.5-1.1-2.5-2.5V5.7H5.3c-1.1,0-2,0.9-2,2v34.6c0,1.1,0.9,2,2,2h38.7c1.1,0,2-0.9,2-2V7.7C46.1,6.6,45.2,5.7,44.1,5.7z
				 M42.1,40.3H7.3V15.4h34.7V40.3z"/>
		</g>
	</g>
	<g>
		<path class="st0" d="M22.5,36.3L22.5,36.3c-0.5,0-1-0.2-1.4-0.6l-7-7c-0.8-0.8-0.8-2,0-2.8s2-0.8,2.8,0l5.6,5.6l10.1-10.1
			c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8L23.9,35.7C23.5,36.1,23,36.3,22.5,36.3z"/>
	</g>
</g>
</svg>

                October 9, 2018
              </p>
              <p class="ibm--card__location"><svg version="1.1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<path class="st0" d="M25.3,0C16.5,0,9.3,7.2,9.3,16.1S23.2,50,25.3,50c2,0,16.1-25,16.1-33.9S34.2,0,25.3,0z M25.3,25.7
	c-5.3,0-9.7-4.3-9.7-9.7s4.3-9.7,9.7-9.7S35,10.7,35,16S30.7,25.7,25.3,25.7z"/>
</svg>
São Paulo</p>
            </div>
            <div class="ibm--card__bottom"><p class="cpt-byline__categories"><span class="bx--tag bx--tag--category">Analytics</span><span class="bx--tag bx--tag--category">Artificial Intelligence</span><span class="bx--tag--category_more">+</span></p></div>
          </a>
        </div></div><div class="bx--col-xs-12 bx--col-md-4"><div class="ibm--card ibm--card__ibmcode_events">
          <a class="ibm--card__block_link" href="/events/ibm-analytics-academy-at-centurylink-broomfield-10-30-2018/" class="">
            <div class="ibm--card__body">
              <p class="ibm--card__type">Conference</p>
              <h3 class="ibm--card__title">IBM Analytics Academy at CenturyLink</h3>
              <p class="ibm--card__date">
                <svg version="1.1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<g>
	<g>
		<g>
			<path class="st0" d="M15.6,4.5c0-1.4-1.1-2.5-2.5-2.5s-2.5,1.1-2.5,2.5v1.2h5V4.5z"/>
		</g>
		<g>
			<path class="st0" d="M38.8,4.5c0-1.4-1.1-2.5-2.5-2.5s-2.5,1.1-2.5,2.5v1.2h5V4.5z"/>
		</g>
		<g>
			<path class="st0" d="M44.1,5.7h-5.2v3.1c0,1.4-1.1,2.5-2.5,2.5s-2.5-1.1-2.5-2.5V5.7H15.6v3.1c0,1.4-1.1,2.5-2.5,2.5
				s-2.5-1.1-2.5-2.5V5.7H5.3c-1.1,0-2,0.9-2,2v34.6c0,1.1,0.9,2,2,2h38.7c1.1,0,2-0.9,2-2V7.7C46.1,6.6,45.2,5.7,44.1,5.7z
				 M42.1,40.3H7.3V15.4h34.7V40.3z"/>
		</g>
	</g>
	<g>
		<path class="st0" d="M22.5,36.3L22.5,36.3c-0.5,0-1-0.2-1.4-0.6l-7-7c-0.8-0.8-0.8-2,0-2.8s2-0.8,2.8,0l5.6,5.6l10.1-10.1
			c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8L23.9,35.7C23.5,36.1,23,36.3,22.5,36.3z"/>
	</g>
</g>
</svg>

                October 30, 2018
              </p>

            </div>
            <div class="ibm--card__bottom"><p class="cpt-byline__categories"><span class="bx--tag bx--tag--category">Cloud</span><span class="bx--tag bx--tag--category">Databases</span><span class="bx--tag--category_more">+</span></p></div>
          </a>
        </div></div><div class="bx--col-xs-12 bx--col-md-4"><div class="ibm--card ibm--card__ibmcode_events">
          <a class="ibm--card__block_link" href="/events/great-indian-developer-summit-bangalore-april-2019/" class="">
            <div class="ibm--card__body">
              <p class="ibm--card__type">Conference</p>
              <h3 class="ibm--card__title">Great Indian Developer Summit - Bangalore - 04/25/2018</h3>
              <p class="ibm--card__date">
                <svg version="1.1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<g>
	<g>
		<g>
			<path class="st0" d="M15.6,4.5c0-1.4-1.1-2.5-2.5-2.5s-2.5,1.1-2.5,2.5v1.2h5V4.5z"/>
		</g>
		<g>
			<path class="st0" d="M38.8,4.5c0-1.4-1.1-2.5-2.5-2.5s-2.5,1.1-2.5,2.5v1.2h5V4.5z"/>
		</g>
		<g>
			<path class="st0" d="M44.1,5.7h-5.2v3.1c0,1.4-1.1,2.5-2.5,2.5s-2.5-1.1-2.5-2.5V5.7H15.6v3.1c0,1.4-1.1,2.5-2.5,2.5
				s-2.5-1.1-2.5-2.5V5.7H5.3c-1.1,0-2,0.9-2,2v34.6c0,1.1,0.9,2,2,2h38.7c1.1,0,2-0.9,2-2V7.7C46.1,6.6,45.2,5.7,44.1,5.7z
				 M42.1,40.3H7.3V15.4h34.7V40.3z"/>
		</g>
	</g>
	<g>
		<path class="st0" d="M22.5,36.3L22.5,36.3c-0.5,0-1-0.2-1.4-0.6l-7-7c-0.8-0.8-0.8-2,0-2.8s2-0.8,2.8,0l5.6,5.6l10.1-10.1
			c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8L23.9,35.7C23.5,36.1,23,36.3,22.5,36.3z"/>
	</g>
</g>
</svg>

                April 24, 2018
              </p>
              <p class="ibm--card__location"><svg version="1.1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<path class="st0" d="M25.3,0C16.5,0,9.3,7.2,9.3,16.1S23.2,50,25.3,50c2,0,16.1-25,16.1-33.9S34.2,0,25.3,0z M25.3,25.7
	c-5.3,0-9.7-4.3-9.7-9.7s4.3-9.7,9.7-9.7S35,10.7,35,16S30.7,25.7,25.3,25.7z"/>
</svg>
Bangalore</p>
            </div>
            <div class="ibm--card__bottom"><p class="cpt-byline__categories"><span class="bx--tag bx--tag--category">Analytics</span><span class="bx--tag bx--tag--category">Artificial Intelligence</span><span class="bx--tag--category_more">+</span></p></div>
          </a>
        </div></div></div><div class="bx--row" data-widget="setsameheight" data-items=".ibm--card__body"></div></div></div>
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            $sameHeightWidgets = document.querySelectorAll(".cpt__related_content [data-widget=\"setsameheight\"]");
            ibmcode.widgetSetSameHeight($sameHeightWidgets);
            var resizeTimer;
            ibmcode.addEvent(window,"resize",function(){
              clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                  ibmcode.widgetSetSameHeight($sameHeightWidgets,true);
                }, 250);
            })
          });
        </script>
		</div><!-- #content -->
	</div><!-- end of ibm-content-wrapper -->

</div>
</div>
<!-- end new layout -->

	<p class="ibm-ind-link ibm-nospacing ibm-icononly ibm-btt-auto ibm-hidden-small" style="display:none;">
		<a class="ibm-nospacing ibm-top-link" aria-label="Back to top" href="#top" tabindex="0">Back to top</a>
	</p>
		<section id="developerSearchFooter" class="developerSearchFooter">
		<form class="code_search__form hsearch" id="code_search__form" method="get" action="/">
			<input autocomplete="off" placeholder="Search" type="text" name="s" id="s" aria-label="Search IBM Developer" value="" />
			<button class="" type="submit" value="Submit" aria-label="Submit Search" role="button">
				<svg viewBox="0 0 16 16" fill-rule="evenodd">
					<title>search</title>
					<path d="M6 2c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm0-2C2.7 0 0 2.7 0 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm10 13.8L13.8 16l-3.6-3.6 2.2-2.2z" />
					<path d="M16 13.8L13.8 16l-3.6-3.6 2.2-2.2z" />
				</svg>
			</button>
		</form>
		<button class="searchModalClose" id="searchModalClose"><span class="dashicons dashicons-no-alt"></span></button>
		<div class="ibmDevSearchOverlay"></div>
	</section>

	<footer role="contentinfo" aria-label="IBM Developer Footer">
		<!-- developer footer here -->

		<!-- ibm footer here -->

</footer>

<style>
	#modal-k7naq0vevup .bx--modal-container{
		max-width: 980px !important;
		padding:0 !important;
		height: 75% !important;
	}
	#modal-k7naq0vevup .bx--modal-content{
		margin-bottom: 0;
		height: 100%;
	}
	#modal-k7naq0vevup .bx--modal-container iframe{
		height:100%;
	}
</style>
<div data-modal id="modal-k7naq0vevup" class="bx--modal " role="dialog" aria-modal="true" aria-labelledby="modal-k7naq0vevup-label" aria-describedby="modal-k7naq0vevup-heading" tabindex="-1">
  <div class="bx--modal-container">
    <div class="bx--modal-header">
      <button class="bx--modal-close" type="button" data-modal-close aria-label="close modal"  data-modal-primary-focus>
        <svg class="bx--modal-close__icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
          <title>Close Modal</title>
          <path d="M6.32 5L10 8.68 8.68 10 5 6.32 1.32 10 0 8.68 3.68 5 0 1.32 1.32 0 5 3.68 8.68 0 10 1.32 6.32 5z" fill-rule="nonzero"
          />
        </svg>
      </button>
    </div>
    <div class="bx--modal-content">
      <iframe src="https://survey.medallia.eu/ibm-web-exp?tstamp=2018-11-26+23%3A53%3A39&lang=en&country=ZZ&pgroup=default&pparent=developerWorks Content/Raleigh/IBM&pmain=ZZ&oid=DWNEXT&content=ZZ000&campaign=null&oname=Great+Indian+Developer+Summit+%26%238211%3B+Bangalore+%26%238211%3B+04%2F25%2F2018&url=https%3A%2F%2Fdeveloper.ibm.com%2Ftutorials%2Fcl-track-time-on-projects-with-ibm-cloud-2%2F&id=n/a" width="970" height="212" frameborder="0"></iframe>
    </div>
  </div>
</div>

</div><!-- #page -->

<script type='text/javascript' src='https://developer.ibm.com/site-content/themes/lucio/js/navigation.js?ver=20151215'></script>
<script type='text/javascript' src='https://developer.ibm.com/site-content/themes/lucio/js/skip-link-focus-fix.js?ver=20151215'></script>
<script type='text/javascript' src='https://developer.ibm.com/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script>

	var $searchTrigger = document.getElementById('search-trigger');

	if($searchTrigger != null){
		$searchTrigger.addEventListener('click', function(event) {
			window.location.href = 'https://developer.ibm.com?s=';
		});
	}


	$codeLeftNav = document.getElementById('code_leftnav');
	if($codeLeftNav != null){
		$codeLeftNav.addEventListener('click', function(event) {
				var clickedEl = event.target;
				if(clickedEl.tagName === 'A' && event.target.attributes.href.value === "#") {
					event.preventDefault();
				}
		});
	}

	document.addEventListener('click', function (event) {
		if ( event.target.classList.contains('bx--snippet__icon') ) {
			// Get the parent with the `.accordion` class
			var parentBtn = ibmcode.getClosest(event.target, '.bx--snippet-button');
			var codeBlock = parentBtn.previousElementSibling.querySelectorAll('code');
			if(codeBlock[0]){
				ibmcode.copyText(codeBlock[0]);
			}
		}
	}, false);

</script>
</body>
</html>
