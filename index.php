


<?php include('n4.php');?>
<!--Start of Tawk.to Script-->
<script type="text/javascript" style="background: red;">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e9f06e435bcbb0c9ab3491a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<div style="padding:0px; margin-top:-35px; background-color:#fff; background-position: cover; font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/image-slider.slider/=edit -->
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:500,d:1000,x:0,e:{x:6}}],
              [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
              [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
              [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
              [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
              [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
              [{b:600,d:1000,o:0.4}],
              [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
              [{b:800,d:1000,o:0.4}],
              [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
              [{b:0,d:1000,o:1,p:{o:{o:4}}}],
              [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1366;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 40);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin double-tail-spin css*/
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 031 css*/
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
        .jssorb031 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:50px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:19px;position:relative;top:50%;width:38px;height:55px;" src="img/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.5;" src="img/Canteen.jpg" />
                <div data-ts="flat" data-p="320" style="left:144px;top:80px;width:550px;height:90px;position:absolute;overflow:hidden;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="0" style="left:550px;top:0px;width:550px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="1" style="left:20px;top:18px;width:200px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.1em; ">Fast and Good</div>
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="2" style="left:19px;top:36px;width:600px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338; text-shadow:1px 1px #d9d99a;">DON'T JUST</span> CHEAK YOUR FOODES</div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/b3.jpg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="3" style="left:400px;top:-30px;width:500px;height:400px;position:absolute;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="4" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                            <div data-to="50% 50%" data-ts="preserve-3d" data-t="5" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                                    <div data-to="50% 50%" data-t="7" style="left:-50px;top:175px;width:600px;height:48px;position:absolute;opacity:0;color:#ff1637;font-size:45px;font-weight:700;line-height:1.2;text-align:center; text-shadow:7px 7px #f4a6b6;">Create your kind of holiday</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/banner5.jpg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-arr="8" style="left:-2px;top:120px;width:1000px;height:70px;position:absolute;opacity:0;color:#ff1637;font-family:Arial,Helvetica,sans-serif;font-size:40px;line-height:1.2;letter-spacing:0.5em;text-align:center; ">CHEF'S ARE MADE GOOD QUALITY FOODES</div>
                </div>
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.5;" src="img/b2.jpg" />
                <div data-ts="flat" data-p="1800" data-po="50% -100%" style="left:120px;top:90px;width:600px;height:300px;position:absolute;">
                    <svg viewbox="0 0 200 200" width="200" height="200" data-t="10" style="left:66px;top:21px;display:block;position:absolute;opacity:0.6;overflow:visible;">
                        <path stroke-dasharray="0,700" fill="none" stroke="#ffffff" d="M0,100C0,44.77152 44.77152,0 100,0C155.22848,0 200,44.77152 200,100C200,155.22848 155.22848,200 100,200C44.77152,200 0,155.22848 0,100Z" data-t="9"></path>
                    </svg>
                    <svg viewbox="0 0 80 80" width="80" height="80" data-t="12" style="left:3px;top:124px;display:block;position:absolute;opacity:0.6;overflow:visible;">
                        <path stroke-dasharray="0,400" fill="none" stroke="#ffffff" shape-rendering="crispEdges" d="M80,80L0,80L0,0L80,0Z" data-t="11"></path>
                    </svg>
                    <svg viewbox="0 0 500 200" data-to="50% 50%" width="500" height="200" data-t="13" style="left:50px;top:50px;display:block;position:absolute;opacity:0;overflow:visible;">
                        <g>
                            <text fill="#ffffff" x="17" y="110" style="position:absolute;font-family:Montserrat,sans-serif;font-size:32px;font-weight:300;overflow:visible;">MODERN
                            </text>
                            <text fill="#ffffff" x="188" y="110" style="position:absolute;font-family:Montserrat,sans-serif;font-size:32px;font-weight:500;letter-spacing:0.1em;overflow:visible;">BASED
                            </text>
                            <text fill="#ff3700" x="218" y="130" style="position:absolute;font-family:Montserrat,sans-serif;font-size:16px;font-weight:900;letter-spacing:0.1em;overflow:visible;">MAKE MENY
                            </text>
                            <text fill="#ff3700" x="333" y="130" style="position:absolute;opacity:0.8;font-family:Montserrat,sans-serif;font-size:16px;font-weight:700;letter-spacing:0.1em;overflow:visible;">  &nbsp;  CAKES  IN OUR CANTEEN
                            </text>
                        </g>
                    </svg>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/banner4.jpg" />
                <div data-ts="flat" data-p="500" style="left:160px;top:40px;width:800px;height:200px;position:absolute;">
                    <div data-arr="14" style="left:0px;top:36px;width:800px;height:200px;position:absolute;opacity:0;color:#ff1637;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:600;line-height:1.2;letter-spacing:-0.05em;text-align:center;text-shadow:2px 1px #d9d99a;">ADDING&nbsp;&nbsp;<span style="font-size:2em;">PERFECTION</span>&nbsp; TO&nbsp; YOUR&nbsp;&nbsp;<span style="font-size:1.6em;">LAWN</span></div>
                    <div data-arr="15" style="left:0px;top:106px;width:800px;height:48px;position:absolute;opacity:0;color:#ff1637;font-family:'Roboto Condensed',sans-serif;font-size:20px;font-weight:400;line-height:1.2;letter-spacing:0.2em;text-align:center;text-shadow:1px 1px #d9d99a;">CREATING GREEN <span style="font-size:2em;">SPACES</span> FOR LIVING</div>
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:13px;height:13px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
</div>
    <!-- #endregion Jssor Slider End -->
<style>
    .main
    {
        min-height: 400px;
    
    }
    .aa1
    {
        min-height: 500px;
    margin-top: 30px;
margin-left: 30px;
    text-align: justify;
    }
    .aa2
    {
        min-height: 450px;
        background-image: url('img/banner1.jpg');
        background-repeat: no-repeat;
        border-radius: 100%;
        margin-top: 30px;
    }
</style>

        <div class="col-sm-12 main">
      
        <div class="col-sm-7 aa1">
            <b style="font-family: algerian; font-size: 35px; color:#faa7a1">Choosing healthy</b><br><p style="font-size: 35px; color:  #9c00e6;">food and drinks</p>
            Here are some healthy canteen options and ideas. If they’re available at your school canteen, these are the options to go for.
            <li>fresh soups with wholemeal bread rolls on the side</li>
<li>pasta or lasagne with fresh tomato, bolognaise or vegetable-based sauce</li>
            <br>
            <b style="font-family: algerian; font-size: 32px;color:#faa7a1">Unhealthy canteen</b><br><p style="font-size: 35px; color:#9c00e6; ">food and drinks</p>
           ‘Sometimes’ foods are foods with high amounts of sugar, saturated fat and salt. You see them on a lot of Our canteen menus.<br>
           These foods aren’t healthy for your child. They give your child a short energy boost that can leave him feeling tired for the rest of the day. They can also lead to unhealthy weight gain if your child eats too much of them.<br/><br/><br/>
            <a href="about.php" style="height: 80px;width: 100px; margin-bottom: 2%; background: linear-gradient(to left, #fcbdb8,#ec8dad); color: #f5f5f5; border-radius: 40px; padding: 3%; font-size: 20px;  margin-top: 6%;">READ MORE</a>
           
        </div>
        <div class="col-sm-4 aa2" style="width: 400px; height: 400px;"></div>
</div>
</div>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
     <link rel="stylesheet" href="css/service.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/section.css" type="text/css" media="all" />
    <!--/mid-sec-->
    <section class="mid-sec py-5" id="menu">
        <div class="container-fluid py-lg-5">
            <div class="header pb-lg-3 pb-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">Bigger & Bolder</h3>
            </div>
            <div class="middile-inner-con">
                <div class="tab-main mx-auto text-center">

                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1"><span class="fa fa-align-center" aria-hidden="true"></span> Burgers</label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2"><span class="fa fa-bolt" aria-hidden="true"></span> Fries</label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3"><span class="fa fa-bitbucket" aria-hidden="true"></span> Drinks</label>
                    <br>

                    <section id="content1" style="align-items: center; margin-left: 10%;">
                        <div class="ab-info">
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/5.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Bacon Burger</h4>
                                        <p class="price">50/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/6.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cheese Butter</h4>
                                        <p class="price">150/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/7.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Delicious sandwich</h4>
                                        <p class="price">100/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/6.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Delicious sandwich</h4>
                                        <p class="price">275</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>

                    <section id="content2" style="align-items: center; margin-left: 10%;">

                        <div class="ab-info">
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/8.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Pene Salmone</h4>
                                        <p class="price">75/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/9.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cheese Butter</h4>
                                        <p class="price">175/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/7.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Bolognese Pasta</h4>
                                        <p class="price">80/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/10.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Tagliatelle Molto</h4>
                                        <p class="price">90/</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section id="content3" style="align-items: center; margin-left: 10%;">
                        <div class="ab-info ">
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/11.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cola Bottle</h4>
                                        <p class="price">55/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/12.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Fresh Lime</h4>
                                        <p class="price">121/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/11.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cola Bottle</h4>
                                        <p class="price">51/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="images/12.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Kiwi Smoothie</h4>
                                        <p class="price">400/</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--//mid-sec-->
<!-- services -->
    <div class="services ">
        <div class="container">   
                <div class="agileits-title">
                    <h1 style="text-align: center; margin-top: 40px; font-weight: 600; color: #333">Our <span style="color: #f56994; font-family: algerian;">Services</span></h1>
                    <div class="" style="height: 5px; width: 230px; margin: 0 auto; border: 2px solid #f45e91;"></div>
            <div class="" style="height: 5px; width: 210px; margin: 0 auto; border: 2px solid#9c00e6;"></div>
            <div class="" style="height: 5px; width: 190px; margin: 0 auto; border: 2px solid #f45e91;margin-bottom:2px;"></div>
                </div>
                <div class="w3-services-grids">
                    <div class="col-md-4 col-xs-6 w3l-services-grid">
                        <div class="w3ls-services-img">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                        </div>
                        <div class="agileits-services-info">
                            <h4>Vaesent purus</h4>
                            <p style="color: #000">Donec non nibh in dui sagittis finibus. Duis suscipit arcu vel rhoncus molestie eget placerat mauris. </p>
                        </div>
                    </div>
                    
                    </div>
                    <div class="col-md-4 col-xs-6 w3l-services-grid">
                        <div class="w3ls-services-img">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </div>
                        <div class="agileits-services-info">
                            <h4>Tempor purus</h4>
                            <p style="color: #333">Sagittis donec non nibh in dui finibus. Duis suscipit arcu vel rhoncus molestie eget placerat mauris. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 w3l-services-grid">
                        <div class="w3ls-services-img">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div>
                        <div class="agileits-services-info">
                            <h4>Praesent tempor</h4>
                            <p style="color: #000">Arcu vel donec non nibh in dui sagittis finibus. Duis suscipit rhoncus molestie eget placerat mauris. </p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
        </div>
    </div>
    <!-- //services -->

    <!-- middle section -->
  <h1 style="text-align: center; ">Our <span style="color: #f56994; font-family: algerian;">Canteen  </span>COFFIE</h1>
                    <div class="" style="height: 5px; width: 190px; margin: 0 auto; border: 2px solid #f45e91;"></div>
            <div class="" style="height: 5px; width: 210px; margin: 0 auto; border: 2px solid#9c00e6;"></div>
            <div class="" style="height: 5px; width: 230px; margin: 0 auto; border: 2px solid #f45e91;margin-bottom:70px;"></div>
    <div class="section-middle" style="min-height: 600px;">
       
        <div class="d-flex">
            <div class="col-md-6 left-gids-agile" style="  min-height: 600px;">
                <i class="fa fa-coffee "></i>
                <h4 class="bottom-title-w3ls text-dark my-4 pb-3">Cool Coffie </h4>
                <p style="font-size: 20px;">Nemo enim ipsam voluptatem quia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; voluptas sit aspernatur aut odit aut fugit, sed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quia consequuntur magni dolores eos qui</p>
            </div>
            <div class="col-md-6 w3ls-right">
                <div class="agile-width">
                    <h4 class="bottom-title-w3ls text-dark my-4 pb-3">Hot Coffie </h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                        qui
                    </p>
                </div>
            </div>
        </div>
        <img src="images/middle.png" alt="" class="img-fluid img-posi">
    </div>
    <!-- //middle section -->

<?php include('footer.php');?> 

