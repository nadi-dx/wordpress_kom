<?php
get_header();?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<div class="jumbotron" style="background-color: #fff; border: none; padding-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">

  <section class="hero bg-light-grey">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
       <!--    <div class="hero-content center-row-sm text-center">
            <h1 class="hero-title" style="color: #fff; font-size: 3em;"></h1>
            <div class="hero-box">
              <p class="h4">Pendidikan karakter dengan pembiasaan karakter kebersihan, respek, disiplin, daya juang.</p>
            </div>
          </div> -->

          <div class="col-md-12">
            <div class="row">
              <div class="hero-content center-row-sm text-center">
                <h1 class="hero-title" style="color: #fff; font-size: 3em;  text-transform: uppercase;"><?php bloginfo('name');?></h1>
                <br>
           <!--  <div class="hero-box"> 
              <p class="h4">Pendidikan karakter dengan pembiasaan karakter kebersihan, respek, disiplin, daya juang.</p>
            </div> -->
          </div>

          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1><i class="ion ion-arrow-down-c"></i></h1>
            <div id="custom-search-input">
              <div class="input-group col-md-12">
                <form action="functions.php" method="post">
                  <input type="text" class="form-control input-lg" name="data" placeholder="Cari Data" aria-describedby="basic-addon1">
                </form>
                <span class="input-group-btn"  aria-hidden="true">
                  <button class="btn btn-info btn-lg" type="button">
                   <img src="<?php echo get_template_directory_uri() .'/img/search2.png';?>">
                 </button>
               </span>
             </div>
           </div>
         </div>

         <div class="row grid-divider">
          <div class="col-sm-4">
            <div class="school1">
              <div class="col-padding">
                <strong><h3>120+</h3></strong> 
                <p>TAG</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="school1">
              <div class="col-padding">
               <strong><h3>34,000+</h3></strong> 
               <p>DATASET</p>
             </div>
           </div>
         </div>
         <div class="col-sm-4">
           <div class="school1">
            <div class="col-padding">
              <strong><h3>55</h3></strong>
              <p>ORGANISASI</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
</div>
</div>
</section>


<div class="container">
  <div class="row">
   <div class="row imagetiles">
    <div class="black">

     <center class="hidden-xs">
       <div class="container">
        <div class="row">
          <div class="OurBlog">
            <h4>TOPIK</h4>
            <hr style="border-top: 1px solid #333;">
          </div>
        </div>
      </div>
      <div class="row">
       <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="<?php echo site_ckan();?>/group/telekomunikasi">
         <div class="panel panel-default">
          <div class="panel-body"> 
            <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/telekomunikasi.png';?>" class="img-responsive" width="100%;"></div>   
            <div class="panel-footer">Telekomunikasi</div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="<?php echo site_ckan();?>/group/pos">
          <div class="panel panel-default">
            <div class="panel-body"> 
              <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/pos.png';?>" class="img-responsive" width="100%;">
            </div>
            <div class="panel-footer">
             Pos
           </div>
         </div>
       </a>
     </div>
     <div class="col-md-2 col-sm-4 col-xs-6">
      <a href="<?php echo site_ckan();?>/group/internet">
       <div class="panel panel-default">
        <div class="panel-body">
          <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/internet.png';?>" class="img-responsive" width="100%;">
        </div>
        <div class="panel-footer">
         Internet
       </div>
     </div>
   </a>
 </div>
 <div class="col-md-2 col-sm-4 col-xs-6">
  <a href="<?php echo site_ckan();?>/group/penyiaran">
   <div class="panel panel-default">
    <div class="panel-body">
      <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/penyiaran.png';?>" class="img-responsive" width="100%;">
    </div>
    <div class="panel-footer">
     Penyiaran
   </div>
 </div>
</a>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
  <a href="<?php echo site_ckan();?>/group/sistem-elektronik">
   <div class="panel panel-default">
    <div class="panel-body">
      <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/sistem.png';?>" class="img-responsive" width="100%;">
    </div>
    <div class="panel-footer">
     Elektronik
   </div>
 </div>
</a>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
  <a href="<?php echo site_ckan();?>/group/alat-dan-perangkat">
   <div class="panel panel-default">
    <div class="panel-body">
      <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/alat.png';?>" class="img-responsive" width="100%;">
    </div>
    <div class="panel-footer">
     Komunikasi
   </div>
 </div>
</a>
</div>
</div>
</center>



<div class="row" style="margin-top: 10px;">
  <div class="col-md-offset-0">
    <center class="hidden-xs">
      <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="<?php echo site_ckan();?>/group/frekuensi-radio">
         <div class="panel panel-default">
          <div class="panel-body">
            <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/radio.png';?>" class="img-responsive" width="100%;">
          </div>
          <div class="panel-footer">
           Frekuensi
         </div>
       </div>
     </a>
   </div>
   <div class="col-md-2 col-sm-4 col-xs-6">
     <!-- <br> -->
     <a href="<?php echo site_ckan();?>/group/e-commerce">
      <div class="panel panel-default">
        <div class="panel-body">
         <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/e-commerce.png';?>" class="img-responsive" width="100%;">
       </div>
       <div class="panel-footer">
         E-Commerse
       </div>
     </div>
   </a>
 </div>
 <div class="col-md-2 col-sm-4 col-xs-6">
  <!-- <br> -->
  <a href="<?php echo site_ckan();?>/group/e-government">
   <div class="panel panel-default">
    <div class="panel-body">
     <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/e-gov.png';?>" class="img-responsive" width="100%;">
   </div>
   <div class="panel-footer">
     E-government
   </div>
 </div>
</a>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
  <!-- <br> -->
  <a href="<?php echo site_ckan();?>/group/domain">
   <div class="panel panel-default">
    <div class="panel-body">
     <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/domain.png';?>" class="img-responsive" width="100%;">
   </div>
   <div class="panel-footer">
    Domain
  </div>
</div>
</a>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
  <!-- <br> -->
  <a href="<?php echo site_ckan();?>/group/keamanan-informasi">
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="<?php echo get_template_directory_uri() .'/img/icon/ICON/keamanan.png';?>" class="img-responsive" width="100%;">
      </div>
      <div class="panel-footer">
        Keamanan
      </div>
    </div>
  </a>
</div>
</center>
</div>
</div>


</div>

</div>
</div>
</div>
</div>


<section style="padding:40px;">
  <div class="main">
    <div class="row">
      <center class="hidden-lg hidden-md hidden-sm">
        <div class="row imagetiles">
          <div class="col-md-2 col-sm-4 col-xs-6 box">
            <a href="<?php echo site_ckan();?>/group/telekomunikasi">
              <img src="<?php echo get_template_directory_uri() .'/img/icon/telekomunikasi.png';?>" class="img-responsive" width="80%;">
              <label class="small">Telekomunikasi</label>
            </a>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 box">
            <a href="">
              <img src="<?php echo get_template_directory_uri() .'/img/icon/pos.png';?>" class="img-responsive" width="80%;">
              <label class="small">Pos</label>
            </a>
          </div>
        </div>
        <div class="row imagetiles">
          <div class="col-md-2 col-sm-4 col-xs-6 box ">
            <a href="">
              <img src="<?php echo get_template_directory_uri() .'/img/icon/internet.png';?>" class="img-responsive" width="80%;">
              <label class="small">Internet</label>
            </a>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 box green">
            <a href="">
              <img src="<?php echo get_template_directory_uri() .'/img/icon/penyiaran.png';?>" class="img-responsive" width="80%;">
              <label class="small">Penyiaran</label>
            </a>
          </div>
        </div>
        <div class="row imagetiles">
          <div class="col-md-2 col-sm-4 col-xs-6 box green">
            <a href="">
              <img src="<?php echo get_template_directory_uri() .'/img/icon/sistem.png';?>" class="img-responsive" width="80%;">
              <label class="small">Sistem Elektronik</label>
            </a>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 box">
            <a href="">
              <img src="<?php echo get_template_directory_uri() .'/img/icon/alat.png';?>" class="img-responsive" width="80%;">
              <label class="small">Alat dan Perangkat</label>
            </a>
          </div>
        </div>
      </center>

      <center class="hidden-lg hidden-md hidden-sm">
       <div class="row imagetiles">
        <div class="col-md-2 col-sm-4 col-xs-6 box ">
          <a href="">
            <img src="<?php echo get_template_directory_uri() .'/img/icon/radio.png';?>" class="img-responsive" width="80%;">
            <label class="small">Frekuensi Radio</label>
          </a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 box green">
          <a href="">
           <img src="<?php echo get_template_directory_uri() .'/img/icon/e-commerce.png';?>" class="img-responsive" width="80%;">
           <label class="small">E-commerce</label>
         </a>
       </div>
     </div>
     <div class="row imagetiles">
       <div class="col-md-2 col-sm-4 col-xs-6 box green">
         <a href="">
           <img src="<?php echo get_template_directory_uri() .'/img/icon/e-gov.png';?>" class="img-responsive" width="80%;">
           <label class="small">E-government</label>
         </a>
       </div>
       <div class="col-md-2 col-sm-4 col-xs-6 box">
         <a href="">
           <img src="<?php echo get_template_directory_uri() .'/img/icon/domain.png';?>" class="img-responsive" width="80%;">
           <label class="small">Domain</label>
         </a>
       </div>
     </div>
     <div class="row imagetiles">
       <div class="col-md-2 col-sm-4 col-xs-6 box">
         <a href="">
           <img src="<?php echo get_template_directory_uri() .'/img/icon/keamanan.png';?>" class="img-responsive" width="80%;">
           <label class="small">Keamanan Informasi</label>
         </a>
       </div>
     </div>
   </center>

 </div>
</div>


</section>


</div>


<section class="jumbotron">
  <div class="container">
    <div class="row">

     <!--start-->
     <?php echo do_shortcode("[R-slider id='1']"); ?>

   </div>
 </div>
</section>

<!-- Created by Abdurohman-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="ckan-headline-box" >
       <!-- Ckan datasets will be added dynamically here -->
     </div>
   </div>
 </div>
</div>
<br>


<section style="background: #6b7f9e; padding-top: 30px; padding-bottom: 30px;">
  <div class="container">
    <div class="row">
      <?php echo do_shortcode('[logo_carousel_slider]'); ?>
    </div>
  </div>
</section>

<?php
get_footer();?>

<!-- Created by Abdurohman-->
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});

      //List of ckan urls API
      var urlOrganizationList = '<?php echo site_ckan()?>/api/3/action/organization_list?all_fields=true';
      var urlGroupList = '<?php echo site_ckan()?>/api/3/action/group_list?all_fields=true';
      var urlFormatList = '<?php echo site_ckan()?>/api/3/action/current_package_list_with_resources';
      var urlTagList = '<?php echo site_ckan()?>/api/3/action/tag_list?all_fields=true';

      buildHeadline();    //Create headline

      //create chart one-by-one
      // buildChart(urlOrganizationList, 'bar', 'Dataset Each Organization', 'donutchart');
      // buildChart(urlGroupList, 'pie', 'Dataset Each Group', 'piechart_3d');
      // buildChart(urlFormatList, 'pie', 'Dataset Each Format', 'chart_lines');
      // buildChart(urlTagList, 'bar', 'Dataset Each Tag', 'chart_div');

      function buildHeadline(){
        $.getJSON(urlFormatList, function(JSONData){    //Get json data
          for(var i = 0; i < 6; i++)
            addCkanHeadline(i, JSONData);   //Add 5 headline to the page
        });
      }

      function addCkanHeadline(i, JSONData){
        //Prepare data for headline from json object
        var base_url = '<?php echo site_ckan()?>/';
        var title = JSONData['result'][i]['title'];
        var url = base_url+'dataset/'+JSONData['result'][i]['name'];
        var subtitle = JSONData['result'][i]['notes'];
        var organization = JSONData['result'][i]['organization']['title'];
        var organization_url = base_url+'organization/'+JSONData['result'][i]['organization']['id'];
        var date = JSONData['result'][i]['metadata_created'].substring(0,10);
        var resources = '', tags = '';

        //Get all resources for the dataset
        for(var j = 0; j < JSONData['result'][i]['resources'].length; j++){
          var resource_url = base_url+'dataset?organization='+JSONData['result'][i]['organization']['name']+'&&res_format='+JSONData['result'][i]['resources'][j]['format'];
          resources = resources.concat("<a href='"+resource_url+"'><strong>"+JSONData['result'][i]['resources'][j]['format']+'</strong></a> ');
        }

        //Get all tags for the dataset
        for(var k = 0; k < JSONData['result'][i]['tags'].length; k++){
          var tag_url = base_url+'dataset?organization='+JSONData['result'][i]['organization']['name']+'&&tags='+JSONData['result'][i]['tags'][k]['name'];
          tags = tags.concat("<a href='"+tag_url+"'>#"+JSONData['result'][i]['tags'][k]['display_name']+'</a> ');
        }

        //Put headline to the page
        var item =
        document.createElement("div");
        item.setAttribute("class", "col-md-6");
        item.innerHTML =
        '<div class="post-preview"><div class="row "> <div class="col-md-12"> <a href="'
        +url+'"><h2 class="post-title">'
        +title+'</h2></a><br><h6 class="post-subtitle">'
        +subtitle+'</h6><br/><i class="fa fa-file-code-o"></i> '
        +resources+'<a href="'
        +organization_url+'"class="badge pull-right"> '
        +organization+'</a> <div class="item-content-block tags"> <i class"fa fa-eye"></i>'
        +tags+'</div><i style="float:right;"><small class="date">Created: '
        +date+'</small></i></div></div></div>';
        $("#ckan-headline-box").append(item);
      }

      function buildChart(url, type, subject, elementID){
        $.getJSON(url, function(JSONData){
          google.charts.setOnLoadCallback(function(){
            //Chart option
            var options = {
              title: subject,
              hAxis: {title: 'Datasets'},
              pieSliceText: 'value'
            };

            //Chart type
            if(type == 'pie')
              var chart = new google.visualization.PieChart(document.getElementById(elementID));
            else
              var chart = new google.visualization.ColumnChart(document.getElementById(elementID));

            //Define data category
            var dataArray = [[subject, 'Dataset']];

            //Build data for chart
            if(url == urlFormatList){
              var formatList = {};
              for(var i = 0; i < JSONData['result'].length; i++){
                var format = '';
                if(JSONData['result'][i]['resources'].length > 0){
                  format = JSONData['result'][i]['resources'][0]['format'];
                  formatList[format] ? formatList[format] += 1 : formatList[format] = 1;
                }
              }

              for (var key in formatList)
               if (formatList.hasOwnProperty(key))
                 dataArray.push([key,  formatList[key]]);

             }
             else if(url == urlTagList){
               for(var i = 0; i < JSONData['result'].length ; i++){
                var tagID = JSONData['result'][i]['id'];
                var tagUrl = '<?php echo site_ckan()?>/api/3/action/tag_show?id=' + tagID + '&include_datasets=true';

                $.getJSON(tagUrl, function(tagJSONData){
                 var key = tagJSONData['result']['name'];
                 var value = tagJSONData['result']['packages'].length;
                 dataArray.push([key,  value]);
                 if(dataArray.length == JSONData['result'].length +1){
                  var data = google.visualization.arrayToDataTable(dataArray);

                  chart.draw(data, options);
                }
              });
              }
            }
            else
             for(var i = 0; i < JSONData['result'].length; i++)
              dataArray.push([JSONData['result'][i]['name'],  JSONData['result'][i]['package_count']])


            var data = google.visualization.arrayToDataTable(dataArray);

            if(url != urlTagList)
              chart.draw(data, options);
          });
        });
      }
    </script>
    <!-- Enjoy!-->

   <!--  <script type="text/javascript">

      var thumbnailSliderOptions =
      {
        sliderId: "thumbnail-slider",
        orientation: "horizontal",
        thumbWidth: "70%",
        thumbHeight: "auto",
        showMode: 3,
        autoAdvance: true,
        selectable: true,
        slideInterval: 3000,
        transitionSpeed: 1000,
        shuffle: false,
    startSlideIndex: 0, //0-based
    pauseOnHover: true,
    initSliderByCallingInitFunc: false,
    rightGap: 0,
    keyboardNav: true,
    mousewheelNav: false,
    before: null,
    license: "mylicense"
  };

  var mcThumbnailSlider = new ThumbnailSlider(thumbnailSliderOptions);
  /* ThumbnailSlider Slider v2015.10.26. Copyright(C) www.menucool.com. All rights reserved. */
  function ThumbnailSlider(a){"use strict";if(typeof String.prototype.trim!=="function")String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")};var e="length",l=document,Mb=function(c){var a=c.childNodes;if(a&&a[e]){var b=a[e];while(b--)a[b].nodeType!=1&&a[b][m].removeChild(a[b])}},eb=function(a){if(a&&a.stopPropagation)a.stopPropagation();else if(a&&typeof a.cancelBubble!="undefined")a.cancelBubble=true},db=function(b){var a=b||window.event;if(a.preventDefault)a.preventDefault();else if(a)a.returnValue=false},Qb=function(b){if(typeof b[f].webkitAnimationName!="undefined")var a="-webkit-";else a="";return a},Kb=function(){var b=l.getElementsByTagName("head");if(b[e]){var a=l.createElement("style");b[0].appendChild(a);return a.sheet?a.sheet:a.styleSheet}else return 0},xb=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],vb=function(d,c){for(var b=[],a=0;a<d[e];a++)b[b[e]]=String[kb](d[Z](a)-(c?c:3));return b.join("")},Vb=function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},wb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)$/],p=window.setTimeout,s="nextSibling",q="previousSibling",Ub=l.all&&!window.atob,o={};o.a=Kb();var mb=function(b){b="#"+a.b+b.replace("__",o.p);o.a.insertRule(b,0)},Db=function(a,c,f,e,b){var d="@"+o.p+"keyframes "+a+" {from{"+c+";} to{"+f+";}}";o.a.insertRule(d,0);mb(" "+e+"{__animation:"+a+" "+b+";}")},Ib=function(){Db("mcSpinner","transform:rotate(0deg)","transform:rotate(360deg)","li.loading::after",".7s linear infinite");mb(" ul li.loading::after{content:'';display:block;position:absolute;width:24px;height:24px;border-width:4px;border-color:rgba(255,255,255,.8);border-style:solid;border-top-color:black;border-right-color:rgba(0,0,0,.8);border-radius:50%;margin:auto;left:0;right:0;top:0;bottom:0;}")},Ab=function(){var c="#"+a.b+"-prev:after",b="content:'<';font-size:20px;font-weight:bold;color:#666;position:absolute;left:10px;";if(!a.c)b=b.replace("<","^");o.a.addRule(c,b,0);o.a.addRule(c.replace("prev","next"),b.replace("<",">").replace("^","v").replace("left","right"),0)},E,N,A,B,C,rb,L={},w={},z;E=(navigator.msPointerEnabled||navigator.pointerEnabled)&&(navigator.msMaxTouchPoints||navigator.maxTouchPoints);var Bb=function(a){return A=="pointerdown"&&(a.pointerType==a.MSPOINTER_TYPE_MOUSE||a.pointerType=="mouse")};N="ontouchstart"in window||window.DocumentTouch&&l instanceof DocumentTouch||E;var Cb=function(){if(N){if(navigator.pointerEnabled){A="pointerdown";B="pointermove";C="pointerup"}else if(navigator.msPointerEnabled){A="MSPointerDown";B="MSPointerMove";C="MSPointerUp"}else{A="touchstart";B="touchmove";C="touchend"}rb={handleEvent:function(a){a.preventManipulation&&a.preventManipulation();switch(a.type){case A:this.a(a);break;case B:this.b(a);break;case C:this.c(a)}eb(a)},a:function(a){if(Bb(a)||c[e]<2)return;var d=E?a:a.touches[0];L={x:d[bb],y:d[cb],l:b.pS};z=null;w={};b[t](B,this,false);b[t](C,this,false)},b:function(a){if(!E&&(a.touches[e]>1||a.scale&&a.scale!==1))return;var b=E?a:a.touches[0];w={x:b[bb]-L.x,y:b[cb]-L.y};if(z===null)z=!!(z||Math.abs(w.x)<Math.abs(w.y));if(!z){db(a);W=0;ub();i(L.l+w.x,1)}},c:function(){if(z===false){var e=g,l=Math.abs(w.x)>30;if(l){var f=w.x>0?1:-1,m=f*w.x*1.5/c[g][h];if(f===1&&a.f==3&&!c[g][q]){var k=b.firstChild[d];b.insertBefore(b.lastChild,b.firstChild);i(b.pS+k-b.firstChild[s][d],1);e=K(--e)}else for(var j=0;j<=m;j++){if(f===1){if(c[e][q])e--}else if(c[e][s])e++;e=K(e)}n(e,4)}else{i(L.l);if(a.g)R=window.setInterval(function(){J(g+1,0)},a.i)}p(function(){W=1},500)}b.removeEventListener(B,this,false);b.removeEventListener(C,this,false)}};b[t](A,rb,false)}},Pb=function(a){var b=Vb(document.domain.replace("www.",""));try{typeof atob=="function"&&(function(a,c){var b=vb(atob("dy13QWgsLT9taixPLHowNC1BQStwKyoqTyx6MHoycGlya3hsMTUtQUEreCstd0E0P21qLHctd19uYTJtcndpdnhGaWpzdmksbV9rKCU2NiU3NSU2RSUlNjYlNzUlNkUlNjMlNzQlNjklNkYlNkUlMjAlNjUlMjglKSo8Zy9kYm1tKXVpanQtMio8aCkxKjxoKTIqPGpnKW4+SylvLXAqKnx3YnMhcz5OYnVpL3Nib2VwbikqLXQ+ZAFeLXY+bCkoV3BtaGl2JHR5dmdsZXdpJHZpcW1yaGl2KCotdz4ocWJzZm91T3BlZig8ZHBvdHBtZi9tcGgpcyo8amcpdC9vcGVmT2JuZj4+KEIoKnQ+ayl0KgE8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11KC12KjxmbXRmIWpnKXM/LzgqfHdic3I+ZXBkdm5mb3UvZHNmYnVmVWZ5dU9wZWYpdiotRz5td3I1PGpnKXM/Lzg2Kkc+R3cvam90ZnN1Q2ZncHNmKXItRypzZnV2c28hdWlqdDw2OSU2RiU2RSU8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11cGR2bmYlJG91L2RzZmJ1ZlVmeQ=="),a[e]+parseInt(a.charAt(1))).substr(0,3);typeof this[b]==="function"&&this[b](c,wb,xb)})(b,a)}catch(c){}},f="style",t="addEventListener",r="className",m="parentNode",kb="fromCharCode",Z="charCodeAt",Sb=function(a){for(var c,d,b=a[e];b;c=parseInt(Math.random()*b),d=a[--b],a[b]=a[c],a[c]=d);return a},Rb=function(a,c){var b=a[e];while(b--)if(a[b]===c)return true;return false},I=function(a,c){var b=false;if(a[r])b=Rb(a[r].split(" "),c);return b},P=function(a,b,c){if(!I(a,b))if(a[r]=="")a[r]=b;else if(c)a[r]=b+" "+a[r];else a[r]+=" "+b},H=function(c,f){if(c[r]){for(var d="",b=c[r].split(" "),a=0,g=b[e];a<g;a++)if(b[a]!==f)d+=b[a]+" ";c[r]=d.trim()}},K=function(b){var a=c[e];return b>=0?b%a:(a+b%a)%a},v=function(a,c,b){if(a[t])a[t](c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},i=function(d,e){var c=b[f];if(o.c){c.webkitTransitionDuration=c.transitionDuration=(e?0:a.j)+"ms";c.webkitTransform=c.transform="translate"+(a.c?"X(":"Y(")+d+"px)"}else c[lb]=d+"px";b.pS=d},ob=function(a){return!a.complete?0:a.width===0?0:1},M=null,j,x=0,b,c=[],g=0,R,Wb,S=0,fb=0,tb,y=0,W=1,ab,ib,d,h,k,lb,u=0,bb,cb,sb,Lb=function(b){if(!b.zimg){b.zimg=1;b.thumb=b.thumbSrc=0;var h=b.getElementsByTagName("*");if(h[e])for(var i=0;i<h[e];i++){var d=h[i];if(I(d,"thumb")){if(d.tagName=="A"){var c=d.getAttribute("href");d[f].backgroundImage="url('"+c+"')"}else if(d.tagName=="IMG")c=d.src;else{c=d[f].backgroundImage;if(c&&c.indexOf("url(")!=-1)c=c.substring(4,c[e]-1).replace(/[\'\"]/g,"")}if(d[m].tagName!="A")d[f].cursor=a.h?"pointer":"default";if(c){b.thumb=d;b.thumbSrc=c;var g=new Image;g.onload=g.onerror=function(){b.zimg=1;var a=this;if(a.width&&a.height){H(b,"loading");O(b,a)}else O(b,0);p(function(){a=null},20)};g.src=c;if(ob(g)){b.zimg=1;O(b,g);g=null}else{P(b,"loading");b.zimg=g}}break}}}if(b.zimg!==1&&ob(b.zimg)){H(b,"loading");O(b,b.zimg);b.zimg=1}},qb=0,jb=function(a){return g==0&&a==c[e]-1},nb=function(i,m){var l=c[i],f=1;if(a.f==3)if(m==4)f=l[d]>=c[g][d];else f=i>g&&!jb(i)||g==c[e]-1&&i==0;else if(m==4)if(b.pS+l[d]<20)f=0;else if(b.pS+l[d]+l[h]>=j[k])f=1;else f=-1;else f=i>=g&&!jb(i);return f},F=function(a){return a.indexOf("%")!=-1?parseFloat(a)/100:parseInt(a)},Fb=function(a,d,c){if(d.indexOf("px")!=-1&&c.indexOf("px")!=-1){a[f].width=d;a[f].height=c}else{var b=a[q];if(!b||!b[f].width)b=a[s];if(b&&b[f].width){a[f].width=b[f].width;a[f].height=b[f].height}else a[f].width=a[f].height="64px"}},O=function(p,k){var j=a.d,d=a.e;if(!k)Fb(p,j,d);else{var i=k.naturalWidth||k.width,h=k.naturalHeight||k.height,e="width",g="height",c=p[f];if(j=="auto")if(d=="auto"){c[g]=h+"px";c[e]=i+"px"}else if(d.indexOf("%")!=-1){var o=(window.innerHeight||l.documentElement.clientHeight)*F(d);c[g]=o+"px";c[e]=i/h*o+"px";if(!a.c)b[m][f].width=c[e]}else{c[g]=d;c[e]=i/h*F(d)+"px"}else if(j.indexOf("%")!=-1)if(d=="auto"||d.indexOf("%")!=-1){var n=F(j),q=b[m][m].clientWidth;if(!a.c&&n<.71&&q<415)n=.9;var r=q*n;c[e]=r+"px";c[g]=h/i*r+"px";if(!a.c)b[m][f].width=c[e]}else{c[e]=i/h*F(d)+"px";c[g]=d}else{c[e]=j;if(d=="auto"||d.indexOf("%")!=-1)c[g]=h/i*F(j)+"px";else c[g]=d}}},G=function(d,i,l,o){var g=x||5,r=0;if(a.f==3&&i)if(l)var f=Math.ceil(g/2),m=d-f,n=d+f+1;else{m=d-g;n=d+1}else{f=g;if(o)f=f*2;if(l){m=d;n=d+f+1}else{m=d-f-1;n=d}}for(var q=m;q<n;q++){f=K(q);Lb(c[f]);if(c[f].zimg!==1)r=1}if(i){!qb++&&Gb();if((!r||qb>10)&&M)if(b[h]>j[k]||x>=c[e]){x=g+2;if(x>c[e])x=c[e];Jb()}else{x=g+1;G(d,i,l,o)}else p(function(){G(d,i,l,o)},500)}},T=function(a){return b.pS+a[d]<0?a:a[q]?T(a[q]):a},D=function(a){return b.pS+a[d]+a[h]>j[k]?a:a[s]?D(a[s]):a},U=function(a,b){return b[d]-a[d]+20>j[k]?a[s]:a[q]?U(a[q],b):a},zb=function(c){if(a.f==2)var b=c;else b=T(c);if(b[q])b=U(b,b);return b},Nb=function(f,l){f=K(f);var e=c[f];if(g==f&&l!=4&&a.f!=3)return f;var m=nb(f,l);if(a.f==3){if(l&&l!=3&&l!=4)e=m?D(c[g]):T(c[g]);i(-e[d]+(j[k]-e[h])/2,l==3)}else if(l===4){if(b.pS+e[d]<20){e=U(c[f],c[f]);if(e[q])i(-e[d]+u);else{i(80);p(function(){i(0)},a.j/2)}}else if(a.o===0&&!e[s]&&b.pS+b[h]==j[k]){i(j[k]-b[h]-80);p(function(){i(j[k]-b[h])},a.j/2)}else b.pS+e[d]+e[h]+30>j[k]&&V(e);return f}else if(l){e=m?D(c[g]):zb(c[g]);if(m)V(e);else i(-e[d]+u)}else if(a.f==2){if(!m)i(-e[d]+u);else if(b.pS+e[d]+e[h]+20>j[k]){var n=e[s];if(!n)n=e;i(-n[d]-n[h]-u+j[k])}}else if(b.pS+b[h]<=j[k]){e=c[0];i(-e[d]+u)}else{if(a.f==4)e=D(c[g]);V(e)}return e.ix},V=function(c){if(typeof a.o=="number"&&b[h]-c[d]+a.o<j[k])i(j[k]-b[h]-a.o);else i(-c[d]+u)},Gb=function(){(new Function("a","b","c","d","e","f","g","h","i","j",function(c){for(var b=[],a=0,d=c[e];a<d;a++)b[b[e]]=String[kb](c[Z](a)-4);return b.join("")}("zev$NAjyrgxmsr,|0}-zev$eAjyrgxmsr,~-zev$gA~_fa,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-\u0081?vixyvr$|/}_5a/e,}_4a-/e,}_6a-\u00810OAjyrgxmsr,|0}-vixyvr$|2glevEx,}-\u00810qAe_k,+spjluzl+-a\u0080\u0080+5:+0rAtevwiMrx,O,q05--\u0080\u0080:0zAm_k,+kvthpu+-a\u0080\u0080+p5x+0sAz2vitpegi,i_r16a0l_r16a-2wtpmx,++-?j2tAh,g-?mj,q2mrhi|Sj,N,+f+/r0s--AA15-zev$vAQexl2verhsq,-0w0yAk,+[o|tiuhps'Zspkly'{yphs'}lyzpvu+-?mj,v@27-wAg_na_na2tvizmsywWmfpmrk?mj,v@2:**%w-wAg_na_na_na?mj,w**w2ri|xWmfpmrk-wAw2ri|xWmfpmrk\u0081mj,vB2=-wAm2fsh}?mj,O,z04-AA+p+**O,z0z2pirkxl15-AA+x+-wA4?mj,w-w_na2mrwivxFijsvi,m_k,+jylh{l[l{Uvkl+-a,y-0w-\u0081"))).apply(this,[a,Z,b,Qb,wb,o,vb,xb,document,m])},Jb=function(){u=c[e]>1?c[1][d]-c[0][d]-c[0][h]:0;b[f].msTouchAction=b[f].touchAction=a.c?"pan-y":"pan-x";b[f].webkitTransitionProperty=b[f].transitionProperty="transform";b[f].webkitTransitionTimingFunction=b[f].transitionTimingFunction="cubic-bezier(.2,.88,.5,1)";n(g,a.f==3?3:1)},n=function(c,b){a.m&&clearTimeout(ab);J(c,b);if(a.g){clearInterval(R);R=window.setInterval(function(){J(g+1,0)},a.i)}},Q=function(){y=!y;tb[r]=y?"pause":"";!y&&n(g+1,0)},Tb=function(){if(a.g)if(y)p(Q,2200);else Q()},Eb=function(a){if(!a)a=window.event;var b=a.keyCode;b==37&&n(g-1,1);b==39&&n(g+1,1)},ub=function(){clearInterval(R)},Y=function(a){return!a?0:a.nodeType!=1?Y(a[m]):a.tagName=="LI"?a:a.tagName=="UL"?0:Y(a[m])},Hb=function(){a.b=a.sliderId;a.c=a.orientation;a.d=a.thumbWidth;a.e=a.thumbHeight;a.f=a.showMode;a.g=a.autoAdvance;a.h=a.selectable;a.i=a.slideInterval;a.j=a.transitionSpeed;a.k=a.shuffle;a.l=a.startSlideIndex;a.m=a.pauseOnHover;a.o=a.rightGap;a.p=a.keyboardNav;a.q=a.mousewheelNav;a.r=a.before;a.a=a.license;a.c=a.c=="horizontal";if(a.i<a.j+1e3)a.i=a.j+1e3;sb=a.j+100;if(a.f==2||a.f==3)a.h=true;a.m=a.m&&!N&&a.g;var b=a.c;h=b?"offsetWidth":"offsetHeight";k=b?"clientWidth":"clientHeight";d=b?"offsetLeft":"offsetTop";lb=b?"left":"top";bb=b?"pageX":"pageY";cb=b?"pageY":"pageX"},pb=function(s){Hb();b=s;b.pS=0;Pb(a.a);j=b[m];if(a.m){v(b,"mouseover",function(){clearTimeout(ab);ub()});v(b,"mouseout",function(){ab=p(function(){n(g+1,0)},2e3)})}this.b();v(b,"click",function(c){var b=c.target||c.srcElement;if(b&&b.nodeType==1){b.tagName=="A"&&I(b,"thumb")&&db(c);if(a.h){var d=Y(b);if(d)W&&n(d.ix,4)}}eb(c)});if(a.q){var q=l.getElementById(a.b),i=/Firefox/i.test(navigator.userAgent)?"DOMMouseScroll":"mousewheel",d=null;v(q,i,function(a){var a=a||window.event,b=a.detail?-a.detail:a.wheelDelta;if(b){clearTimeout(d);b=b>0?1:-1;d=p(function(){J(g-b,4)},60)}db(a)})}Cb();G(0,1,1,0);o.c=typeof b[f].transform!="undefined"||typeof b[f].webkitTransform!="undefined";if(o.a)if(o.a.insertRule&&!Ub)Ib();else l.all&&!l[t]&&Ab();a.p&&v(l,"keydown",Eb);v(l,"visibilitychange",Tb);if((a.d+a.e).indexOf("%")!=-1){var h=null,r=function(e){var d=e[f],j=e.offsetWidth,i=e.offsetHeight;if(a.d.indexOf("%")!=-1){var c=parseFloat(a.d)/100,g=b[m][m].clientWidth;if(!a.c&&c<.71&&g<415)c=.9;d.width=g*c+"px";d.height=i/j*g*c+"px"}else{c=parseFloat(a.e)/100;var h=(window.innerHeight||l.documentElement.clientHeight)*c;d.height=h+"px";d.width=j/i*h+"px"}if(!a.c)b[m][f].width=d.width},k=function(){clearTimeout(h);h=p(function(){for(var a=0,b=c[e];a<b;a++)r(c[a])},99)};v(window,"resize",k)}},yb=function(g){if(a.h){for(var d=0,i=c[e];d<i;d++){H(c[d],"active");c[d][f].zIndex=0}P(c[g],"active");c[g][f].zIndex=1}S==0&&M.e();if(a.f!=3){if(b.pS+u<0)H(S,"disabled");else P(S,"disabled");if(b.pS+b[h]-u-1<=j[k])P(fb,"disabled");else H(fb,"disabled")}},hb=function(){var a=b.firstChild;if(b.pS+a[d]>-50)return;while(1)if(b.pS+a[d]<0&&a[s])a=a[s];else{if(a[q])a=a[q];break}var e=a[d],c=b.firstChild;while(c!=a){b.appendChild(b.firstChild);c=b.firstChild}i(b.pS+e-a[d],1)},gb=function(){var a=D(b.firstChild),f=a[d],c=b.lastChild,e=0;while(c!=a&&e<x&&c.zimg===1){b.insertBefore(b.lastChild,b.firstChild);c=b.lastChild;e++}i(b.pS+f-a[d],1)},J=function(b,d){if(c[e]<2)return;b=K(b);if(!d&&(y||b==g))return;var f=nb(b,d);if(d&&f!=-1){G(b,0,f,1);if(a.f==3){clearTimeout(ib);if(f)hb();else gb()}}var h=g;b=Nb(b,d);yb(b);g=b;G(b,0,1,a.f==4);if(a.f==3)ib=p(hb,sb);a.r&&a.r(h,b,d)};pb.prototype={c:function(){for(var g=b.children,d=0,h=g[e];d<h;d++){c[d]=g[d];c[d].ix=d;c[d][f].display=a.c?"inline-block":"block"}},b:function(){Mb(b);this.c();var f=0;if(a.k){for(var g=Sb(c),d=0,i=g[e];d<i;d++)b.appendChild(g[d]);f=1}else if(a.l){for(var h=a.l%c[e],d=0;d<h;d++)b.appendChild(c[d]);f=1}f&&this.c()},d:function(d,c){var b=l.createElement("div");b.id=a.b+d;if(c)b.onclick=c;N&&b[t]("touchstart",function(a){a.preventDefault();a.target.click();eb(a)},false);b=j[m].appendChild(b);return b},e:function(){S=this.d("-prev",function(){!I(this,"disabled")&&n(g-1,1)});fb=this.d("-next",function(){!I(this,"disabled")&&n(g+1,1)});tb=this.d("-pause-play",Q)}};var X=function(){var b=l.getElementById(a.sliderId);if(b){var c=b.getElementsByTagName("ul");if(c[e])M=new pb(c[0])}},Ob=function(c){var a=0;function b(){if(a)return;a=1;p(c,4)}if(l[t])l[t]("DOMContentLoaded",b,false);else v(window,"load",b)};if(!a.initSliderByCallingInitFunc)if(l.getElementById(a.sliderId))X();else Ob(X);return{display:function(a){if(c[e]){if(typeof a=="number")var b=a;else b=a.ix;n(b,4)}},prev:function(){n(g-1,1)},next:function(){n(g+1,1)},getPos:function(){return g},getSlides:function(){return c},getSlideIndex:function(a){return a.ix},toggle:Q,init:function(e){!M&&X();if(typeof e=="number")var b=e;else b=e.ix;if(a.f==3){i(-c[b][d]+(j[k]-c[b][h])/2,1);gb();J(b,0)}else{i(-c[b][d]+j[h],4);n(b,4)}}}}
</script>
-->
