<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Error Page</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
		<!-- EOF CSS INCLUDE -->    
		<style>
			@charset "UTF-8";

@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,500,600,700&subset=latin,latin-ext);
@import "jquery/jquery-ui.min.css";
@import "bootstrap/bootstrap.min.css";
@import "fontawesome/font-awesome.min.css";
@import "summernote/summernote.css";
@import "codemirror/codemirror.css";
@import "nvd3/nv.d3.css";
@import "mcustomscrollbar/jquery.mCustomScrollbar.css";
@import "fullcalendar/fullcalendar.css";
@import "blueimp/blueimp-gallery.min.css";
@import "rickshaw/rickshaw.css";
@import "dropzone/dropzone.css";
@import "introjs/introjs.min.css";
@import "animate/animate.min.css";

.clearfix {
  zoom: 1;
}
.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}
.clearfix:after {
  clear: both;
}
.background-colorful {
  background: linear-gradient(left, #b64645 0%, #fea223 50%, #95b75d 100%);
  background: -o-linear-gradient(left, #b64645 0%, #fea223 50%, #95b75d 100%);
  background: -moz-linear-gradient(left, #b64645 0%, #fea223 50%, #95b75d 100%);
  background: -webkit-linear-gradient(left, #b64645 0%, #fea223 50%, #95b75d 100%);
  background: -ms-linear-gradient(left, #b64645 0%, #fea223 50%, #95b75d 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0, #b64645), color-stop(0.5, #fea223), color-stop(1, #95b75d));
}
/* EOF PREDEFINED CLASSES */
html * {
  outline: none !important;
  text-decoration: none;
}
html,
body {
  min-height: 100%;
  padding: 0px;
  margin: 0px;
  background: #f5f5f5 url('../img/bg.png') left top repeat;
  position: relative;
  font-family: 'Open Sans', sans-serif;
  font-size: 12px;
  color: #656d78;
  overflow-x: hidden;
}
.body-full-height {
  height: 100%;
}
.body-full-height body {
  height: 100%;
}
.row {
  margin-left: 0px;
  margin-right: 0px;
}
.row [class^='col-xs-'],
.row [class^='col-sm-'],
.row [class^='col-md-'],
.row [class^='col-lg-'] {
  min-height: 1px;
  padding-left: 10px;
  padding-right: 10px;
}
.row.stacked [class^='col-xs-'],
.row.stacked [class^='col-sm-'],
.row.stacked [class^='col-md-'],
.row.stacked [class^='col-lg-'] {
  padding-left: 0px;
  padding-right: 0px;
}
/* PAGE CONTAINER */
.page-container {
  width: 100%;
  float: left;
  min-height: 100%;
  position: relative;
  background: #33414e;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  /* SIDEBAR */
  /* END SIDEBAR */
  /* CONTENT */
  /* END CONTENT */
  /* RTL CONTENT MODE */
  /* END RTL CONTENT MODE */
}
.page-container .page-sidebar {
  width: 220px;
  float: left;
  position: relative;
  z-index: 3;
}
.error-container {
  width: 500px;
  margin: 50px auto 0px;
}
.error-container .error-code {
  float: left;
  width: 100%;
  font-size: 135px;
  line-height: 130px;
  text-align: center;
  color: #333;
  font-weight: 300;
}
.error-container .error-text {
  float: left;
  width: 100%;
  margin-top: 10px;
  font-size: 26px;
  line-height: 24px;
  text-transform: uppercase;
  color: #666;
  text-align: center;
  font-weight: 400;
}
.error-container .error-subtext {
  float: left;
  width: 100%;
  margin: 30px 0px 10px;
  font-size: 13px;
  line-height: 20px;
  color: #AAA;
  text-align: center;
  font-weight: 400;
}
.error-container .error-actions {
  float: left;
  font-weight: bolder;
  width: 100%;
  margin-top: 60px;
	font-size: 19px;
    text-transform: capitalize;
	text-decoration: none !important;
	text-align:center;

}
.error-container .error-actions a{
	color:#f1612a !important;

}
/* end errors */
@media print {
  .x-navigation,
  .page-sidebar,
  .theme-settings {
    display: none;
  }
  .page-container .page-content {
    margin-left: 0px;
  }

}
@media screen and (min-width: 320px) and (max-width: 480px){

.error-container {

width: 236px;
margin: 50px auto 0px;
}
}

		</style>
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">404</div>
            <div class="error-text">page not found</div>
            <div class="error-actions">                                
                <a href="/">Previous page</a>
            </div>
        </div>                 
    </body>
</html>






