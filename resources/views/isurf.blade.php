<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
 
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            IPB
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            GREEN HOUSE TEA
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="./index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="setting">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Set Jadwal</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="{{ route('logout') }}">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div  class="content">


      <?php
      //include 'load.php';
      //include 'Ltandon.php';
     // include 'load.php'
      // $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
      // $qlsub=
      // $result = mysqli_query($koneksi,"SELECT *,DATE_FORMAT(waktu, '%y-%m-%d-%H:%i') AS waktu FROM sensor ORDER BY id_no desc limit 12 ") or die(mysql_error());
      
     
      // if (mysqli_num_rows($result) > 0) {
          
        
      //     $sens["waktu"] = '';
      //     $sens["sensor1"] = '';
      //     $sens["sensor2"] = '';
      //     $sens["sensor3"] = '';
      //     $sens["sensor4"] = '';
      //     $sens["sensor5"] = '';
      //     $sens["sensor6"] = '';
      //     $sens["ph1"] = '';
      //     $sens["ph2"] = '';
      //     $sens["ph3"] = '';
      //     $sens["ph4"] = '';
      //     $sens["ph5"] = '';
      //     $sens["ph6"] = '';
          
        
      //     while ($row = mysqli_fetch_array($result)) {
            
            
      //       $sens["waktu"] .= ''.$row['waktu'].',';
      //       $sens["sensor1"] .= ''.$row['sensor1'].',';
      //       $sens["sensor2"] .= ''.$row['sensor2'].',';
      //       $sens["sensor3"] .= ''.$row['sensor3'].',';
      //       $sens["sensor4"] .= ''.$row['sensor4'].',';
      //       $sens["sensor5"] .= ''.$row['sensor5'].',';
      //       $sens["sensor6"] .= ''.$row['sensor6'].',';
      //       $sens["ph1"] .= ''.$row['ph1'].',';
      //       $sens["ph2"] .= ''.$row['ph2'].',';
      //       $sens["ph3"] .= ''.$row['ph3'].',';
      //       $sens["ph4"] .= ''.$row['ph4'].',';
      //       $sens["ph5"] .= ''.$row['ph5'].',';
      //       $sens["ph6"] .= ''.$row['ph6'].',';
            
      //     }
          
      //   }
         
      ?>    
      <!-- end proses -->
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Kelembapan Tanah</h5>
                    <h2 class="card-title">Tingkat Kelembapan</h2>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig11"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div  id ="datal" class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">pH Tanah</h5>
                    <h2 class="card-title">Nilai pH Tanah</h2>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig12"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Suhu</h5>
                <h3 class="card-title"><i class='fas fa-temperature-high' style='font-size:36px'></i> Suhu</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">PPM</h5>
                <h3 class="card-title"><i class='fas fa-prescription-bottle' style='font-size:36px'></i>PPM</h3>
              </div>
              <div class="card-body">
              <head>
<script>window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"199e8a4832","applicationID":"2972453","transactionName":"c11cQBFeWw5TSh9TXlFARkdMQl8NQQ==","queueTime":0,"applicationTime":10,"agent":""}</script>
<script>(window.NREUM||(NREUM={})).loader_config={licenseKey:"199e8a4832",applicationID:"2972453"};window.NREUM||(NREUM={}),__nr_require=function(n,e,t){function r(t){if(!e[t]){var i=e[t]={exports:{}};n[t][0].call(i.exports,function(e){var i=n[t][1][e];return r(i||e)},i,i.exports)}return e[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(n,e,t){function r(){}function i(n,e,t){return function(){return o(n,[u.now()].concat(f(arguments)),e?null:this,t),e?void 0:this}}var o=n("handle"),a=n(4),f=n(5),c=n("ee").get("tracer"),u=n("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(n,e){s[e]=i(d+e,!0,"api")}),s.addPageAction=i(d+"addPageAction",!0),s.setCurrentRouteName=i(d+"routeName",!0),e.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(n,e){var t={},r=this,i="function"==typeof e;return o(l+"tracer",[u.now(),n,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return e.apply(this,arguments)}catch(n){throw c.emit("fn-err",[arguments,this,n],t),n}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(n,e){m[e]=i(l+e)}),newrelic.noticeError=function(n,e){"string"==typeof n&&(n=new Error(n)),o("err",[n,u.now(),!1,e])}},{}],2:[function(n,e,t){function r(n,e){var t=n.getEntries();t.forEach(function(n){"first-paint"===n.name?a("timing",["fp",Math.floor(n.startTime)]):"first-contentful-paint"===n.name&&a("timing",["fcp",Math.floor(n.startTime)])})}function i(n){if(n instanceof c&&!s){var e,t=Math.round(n.timeStamp);e=t>1e12?Date.now()-t:f.now()-t,s=!0,a("timing",["fi",t,{type:n.type,fid:e}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var o,a=n("handle"),f=n("loader"),c=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){o=new PerformanceObserver(r);try{o.observe({entryTypes:["paint"]})}catch(u){}}if("addEventListener"in document){var s=!1,p=["click","keydown","mousedown","pointerdown","touchstart"];p.forEach(function(n){document.addEventListener(n,i,!1)})}}},{}],3:[function(n,e,t){function r(n,e){if(!i)return!1;if(n!==i)return!1;if(!e)return!0;if(!o)return!1;for(var t=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],4:[function(n,e,t){function r(n,e){var t=[],r="",o=0;for(r in n)i.call(n,r)&&(t[o]=e(r,n[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],5:[function(n,e,t){function r(n,e,t){e||(e=0),"undefined"==typeof t&&(t=n?n.length:0);for(var r=-1,i=t-e||0,o=Array(i<0?0:i);++r<i;)o[r]=n[e+r];return o}e.exports=r},{}],6:[function(n,e,t){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(n,e,t){function r(){}function i(n){function e(n){return n&&n instanceof r?n:n?c(n,f,o):o()}function t(t,r,i,o){if(!d.aborted||o){n&&n(t,r,i);for(var a=e(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(n,e){h[n]=v(n).concat(e)}function m(n,e){var t=h[n];if(t)for(var r=0;r<t.length;r++)t[r]===e&&t.splice(r,1)}function v(n){return h[n]||[]}function g(n){return p[n]=p[n]||i(t)}function w(n,e){u(n,function(n,t){e=e||"feature",y[t]=e,e in s||(s[e]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:e,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var f="nr@context",c=n("gos"),u=n(4),s={},p={},d=e.exports=i();d.backlog=s},{}],gos:[function(n,e,t){function r(n,e,t){if(i.call(n,e))return n[e];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return n[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(n,e,t){function r(n,e,t,r){i.buffer([n],r),i.emit(n,e,t)}var i=n("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(n,e,t){function r(n){var e=typeof n;return!n||"object"!==e&&"function"!==e?-1:n===window?0:a(n,o,function(){return i++})}var i=1,o="nr@id",a=n("gos");e.exports=r},{}],loader:[function(n,e,t){function r(){if(!x++){var n=E.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(n&&n.licenseKey&&n.applicationID&&e))return s.abort();u(y,function(e,t){n[e]||(n[e]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=l.createElement("script");t.src="https://"+n.agent,e.parentNode.insertBefore(t,e)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=n("handle"),u=n(4),s=n("ee"),p=n(3),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1153.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=e.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};n(1),n(2),l[m]?(l[m]("DOMContentLoaded",o,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",i),d[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=n(6)},{}],"wrap-function":[function(n,e,t){function r(n){return!(n&&n instanceof Function&&n.apply&&!n[a])}var i=n("ee"),o=n(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;e.exports=function(n,e){function t(n,e,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){d([u,"",[r,a,i],f])}s(e+"start",[r,a,i],f);try{return c=n.apply(a,r)}catch(p){throw s(e+"err",[r,a,p],f),p}finally{s(e+"end",[r,a,c],f)}}return r(n)?n:(e||(e=""),nrWrapper[a]=n,p(n,nrWrapper),nrWrapper)}function u(n,e,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<e.length;c++)f=e[c],a=n[f],r(a)||(n[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||e){var o=c;c=!0;try{n.emit(t,r,i,e)}catch(a){d([a,t,r,i])}c=o}}function p(n,e){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(n);return t.forEach(function(t){Object.defineProperty(e,t,{get:function(){return n[t]},set:function(e){return n[t]=e,e}})}),e}catch(r){d([r])}for(var i in n)f.call(n,i)&&(e[i]=n[i]);return e}function d(e){try{n.emit("internal-error",e)}catch(t){}}return n||(n=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="//thingspeak.com/highcharts-3.0.8.js"></script>
  <script src="/assets/application-d61e98a55ee35578d8cbdcfbd60a4bbb8a0ac88c025d41d81b232931aa2da7c1.js"></script>
    <script type="text/javascript">
    // user's timezone offset
    var myOffset = new Date().getTimezoneOffset();

    // converts date format from JSON
    function getChartDate(d) {
      // offset in minutes is converted to milliseconds and subtracted so that chart's x-axis is correct
      return Date.parse(d) - (myOffset * 60000);
    }

    $(document).on('page:load ready', function() {
      // blank array for holding chart data
      var chartData = [];
      // variable for the local date in milliseconds
      var localDate;
      // variable for the last date added to the chart
      var last_date;
      // get the data with a webservice call
      $.getJSON('https://thingspeak.com/channels/702935/field/2.json?callback=?&amp;offset=0&amp;results=100', function(data) {

          // if no access
          if (data == '-1') {
            $('#chart-container').append('This channel is not public.  To embed charts, the channel must be public or a read key must be specified.');
          }

          // iterate through each feed
          $.each(data.feeds, function() {
            var p = new Highcharts.Point();
            // set the proper values
            var v = this.field2;
            p.x = getChartDate(this.created_at);
            p.y = parseFloat(v);
            // add location if possible
            if (this.location) {
              p.name = this.location;
            }
            // if a numerical value exists add it
            if (!isNaN(parseInt(v))
                            ) {
              chartData.push(p);
            }
          });

          // specify the chart options
          var chartOptions = {
            chart: {
              renderTo: 'chart-container',
              defaultSeriesType: "line",
              backgroundColor: '#ffffff',
              events: {
                load: function() {
                  //if dynamic and no "timeslice" options are set
                  //   GAK 02/16/2013 Let's try to add the last "average" slice if @chart_attr[:average]

                  var url = 'https://thingspeak.com/channels/702935/feed/last.json?callback=?&amp;offset=0&amp;location=true&amp;results=100';
                  if ("".length > 0) {
                    url = 'https://thingspeak.com/channels/702935/feed/last_average.json?callback=?&amp;offset=0&amp;location=true&amp;average=&amp;results=100';
                  } else if ("".length > 0) {
                    url = 'https://thingspeak.com/channels/702935/feed/last_median.json?callback=?&amp;offset=0&amp;location=true&amp;median=&amp;results=100';
                  } else if ("".length > 0) {
                    url = 'https://thingspeak.com/channels/702935/feed/last_sum.json?callback=?&amp;offset=0&amp;location=true&amp;sum=&amp;results=100';
                  }

                  if ('true' === 'true' && (''.length < 1)) {
                    // push data every 15 seconds
                    setInterval(function() {
                      // get the data with a webservice call if we're just getting the last channel
                      $.getJSON(url, function(data) {
                        // if data exists
                        if (data && data.field2) {

                          var p = new Highcharts.Point();
                          // set the proper values
                          var v = data.field2;

                          p.x = getChartDate(data.created_at);
                          p.y = parseFloat(v);
                          // add location if possible
                          if (data.location) {
                            p.name = data.location;
                          }
                          // get the last date if possible
                          if (dynamicChart.series[0].data.length > 0) {
                            last_date = dynamicChart.series[0].data[dynamicChart.series[0].data.length - 1].x;
                          }
                          var shift = false; //default for shift

                          //if push is requested in parameters
                          // then if results is and data.length is < results, shift = false
                          var results = 100;
                          if (results && dynamicChart.series[0].data.length + 1 >= results) {
                            shift = true;
                          }
                          // if a numerical value exists and it is a new date, add it
                          if (!isNaN(parseInt(v)) && (p.x != last_date)
                                                        ) {
                            dynamicChart.series[0].addPoint(p, true, shift);
                          } else {
                            dynamicChart.series[0].data[dynamicChart.series[0].data.length - 1].update(p);
                          }
                        }
                      });

                    }, 15000);
                  }
                }
              }
            },
            title: {
              text: ''
            },
            plotOptions: {
              line: {
                color: '#d62020'
              },
              bar: {
                color: '#d62020'
              },
              column: {
                color: '#d62020'
              },
              spline: {
                color: '#d62020'
              },
              series: {
                marker: {
                  radius: 3
                },
                animation: true,
                step: false,
                borderWidth: 0,
                turboThreshold: 0
              }
            },
            tooltip: {
              // reformat the tooltips so that local times are displayed
              formatter: function() {
                var d = new Date(this.x + (myOffset * 60000));
                var n = (this.point.name === undefined) ? '' : '<br/>' + this.point.name;
                return this.series.name + ':<b>' + this.y + '</b>' + n + '<br/>' + d.toDateString() + '<br/>' + d.toTimeString().replace(/\(.*\)/, "");
              }
            },
            xAxis: {
              type: 'datetime',
              title: {
                text: 'test'
              }
            },
            yAxis: {
              title: {
                text: ''
              },
              min: null ,
              max: null,
              startOnTick: false,
              endOnTick: false
            },
            legend: {
              enabled: false
            },
            series: [{
              name: data.channel.field2
            }],
            credits: {
              text: 'ThingSpeak.com',
              href: 'https://thingspeak.com/',
              style: {
                color: '#D62020'
              }
            }
          };

          // add the data to the chart
          chartOptions.series[0].data = chartData;

          // set chart labels here so that decoding occurs properly
          chartOptions.title.text = data.channel.name;
          chartOptions.xAxis.title.text = 'Date';
          chartOptions.yAxis.title.text = data.channel.field2;

          // draw the chart
          var dynamicChart = new Highcharts.Chart(chartOptions);

          // end getJSON success
        })
        // chained to getjson, on error
        .error(function() {
          $('#chart-container').html('Invalid Channel.');
        });

    }); // end document.ready
    </script>
</head>
<body style='background-color: #ffffff; height: 100%; margin: 0; padding: 0;'>
  <div id="chart-container" >
    <img style="position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0;" src="/assets/loader-transparent-7406197367159b4626544c658234ae0d274942855b5f55648a31aa50ee94f92a.gif" alt="Loader transparent" />
  </div>
</body>

              
              
                <!-- <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas> -->
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="card card">
              <div class="card-header">
                <h5 class="card-category">Live View</h5>
                
              </div>
              <div class="card-body">
                <!-- <div class="chart-area">
                  <canvas id="CountryChart"></canvas> -->
                  <img src="http://isurf.apps.cs.ipb.ac.id/cam1?date=1575879261723">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
 
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo1.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="//thingspeak.com/highcharts-3.0.8.js"></script>
  <script src="/assets/application-d61e98a55ee35578d8cbdcfbd60a4bbb8a0ac88c025d41d81b232931aa2da7c1.js"></script>

  <script>
   
   var waktu = '12-13-11:09,12-13-10:09,12-13-09:09,12-13-08:09,12-13-07:09,12-13-06:09,12-12-23:19,12-12-11:39,12-12-10:39,12-12-09:39,12-12-08:39,12-12-07:39,';
    var st1 = '94,94,94,92,92,94,80,72,77,72,79,75,';
    var st2 = '70,69,70,70,68,71,83,43,45,43,45,44,';
    var st3 = '96,96,97,97,98,97,94,73,71,70,72,72,';
    var st4 = '100,100,100,100,100,100,11,71,72,71,69,72,';
    var st5 = '100,100,100,100,100,100,5,79,84,83,84,84,';
    var st6 = '100,100,100,100,100,100,3,62,65,65,62,61,';
    var sph1 = '0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,';
    var sph2 = '0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,';
    var sph3 = '0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,';
    var sph4 = '0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,';
    var sph5 = '0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,';
    var sph6 = '0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,';
    var tanwaktu='19:03,12:38,11:27,10:27,09:27,08:27,07:27,06:27,05:27,03:35,03:34,03:34,';
    var tanppm='1801,200,207,218,215,212,213,213,200,196,195,200,';
    var tansuhu='28,30,27,27,27,27,26,26,26,28,28,28,';
    
    $(document).ready(function() {
      
      //console.log(waktu);
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <!-- <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script> -->

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
 

</body>

</html>