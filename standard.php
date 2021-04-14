<!DOCTYPE html>
<html lang="#rn:language_code#">
<rn:meta javascript_module="standard"/>
<head>
    <meta charset="utf-8"/>
    <title><rn:page_title/></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--[if lt IE 9]><script src="/euf/core/static/html5.js"></script><![endif]-->
    <!--Mohan added header 2/7/19-->
    <!--rn:widget path="custom/templates/header" /-->
    <rn:widget path="search/BrowserSearchPlugin" pages="home, answers/list, answers/detail" />
    <rn:theme path="/euf/assets/themes/standard" css="site.css,
        font-awesome/font-awesome.css,
        {YUI}/widget-stack/assets/skins/sam/widget-stack.css,
        {YUI}/widget-modality/assets/skins/sam/widget-modality.css,
        {YUI}/overlay/assets/overlay-core.css,
        {YUI}/panel/assets/skins/sam/panel.css" />
    <rn:head_content/>
    <link rel="icon" href="/euf/assets/images/favicon.png" type="image/png"/>
    <rn:widget path="utils/ClickjackPrevention"/>   
    <!--Mohan 2/7/19 added-->
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/similar-ny-gov.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/ogs_custom_2016.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/temp_local.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/ogs-responsive.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/ogs_second_level_2016.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/nys-global-nav-fonts.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/nys-nys-global-nav.css" />
    <link rel="stylesheet" type="text/css" href="nysbsc/global/assets/css/ogs-colors.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="nysbsc/global/assets/js/ogs-navpage.js" type="text/javascript"></script>
    <script src="nysbsc/global/assets/js/nys-global-nav-header.js" type="text/javascript"></script>   
</head>
<body class="yui-skin-sam yui3-skin-sam">
<!--Mohan added header 2/7/19-->
<!--rn:widget path="custom/templates/body" /-->
<!-- START NYS Universal Navigation. Place this as the first content under BODY. This is the NYS Universal Navigation. Content here is a remote frame loaded in. -->
<div id="nygov-universal-navigation" class="nygov-universal-container" data-iframe="true" data-updated="2014-11-07 08:30">
  <noscript>
  <iframe width="100%" height="86px" src="//static-assets.ny.gov/load_global_menu/ajax?iframe=true" frameborder="0" style="border:none; overflow:hidden; width:100%; height:86px;" scrolling="no"> Your browser does not support iFrames </iframe>
  </noscript>
  <script type="text/javascript">
          var _NY = {
              HOST: "static-assets.ny.gov",
              BASE_HOST: "www.ny.gov",
              hideSettings: false,
              hideSearch: false
          };
          (function (document, bundle, head) {
              head = document.getElementsByTagName('head')[0];
              bundle = document.createElement('script');
              bundle.type = 'text/javascript';
              bundle.async = true;
              bundle.src = "//static-assets.ny.gov/sites/all/widgets/universal-navigation/js/dist/global-nav-bundle.js";
              head.appendChild(bundle);
          }(document));
      </script> 
</div>
<!-- END NYS Universal Navigation -->

<!-- START OGS BSC Global Navigation. Place this DIRECTLY below/after the NYS Universal Navigation in the BODY. This is the orange banner that says Business Services Center as a placeholder for our proper navigation.-->
<div class="nys-global-header horizontal unstacked">
  <div class="nav-toggle"> <a href="#" role="button" id="nys-menu-control" tabindex="1">Navigation menu</a> </div>
  <h1><a href="https://bsc.ogs.ny.gov/">Business Services Center</a></h1>
  <ul id="nys-global-nav">
  </ul>
</div>
<!-- END OGS BSC Global Navigation-->

<div id="rn_Container" >
    <div id="rn_SkipNav"><a href="#rn_MainContent">#rn:msg:SKIP_NAVIGATION_CMD#</a></div>
    <div id="rn_Header" role="banner">
        <rn:widget path="utils/CapabilityDetector"/>
        <!--Mohan comment out <div id="rn_Logo"><a href="/app/#rn:config:CP_HOME_URL##rn:session#"><span class="rn_LogoTitle">#rn:msg:SUPPORT_CENTER_LBL#</span></a></div> -->
        <div id="rn_LoginStatus">
            <rn:condition logged_in="true">
                 #rn:msg:WELCOME_BACK_LBL#
                <strong>
                    <rn:field name="Contact.LookupName"/><rn:condition language_in="ja-JP">#rn:msg:NAME_SUFFIX_LBL#</rn:condition>
                </strong>
                <div>
                    <rn:field name="Contact.Organization.LookupName"/>
                </div>
                <rn:widget path="login/LogoutLink"/>
            <rn:condition_else />
                <rn:condition config_check="PTA_ENABLED == true">
                    <a href="javascript:void(0);" id="rn_LoginLink">#rn:msg:LOG_IN_LBL#</a>&nbsp;|&nbsp;<a href="javascript:void(0);">#rn:msg:SIGN_UP_LBL#</a>
                <rn:condition_else />
                    <a href="javascript:void(0);" id="rn_LoginLink">#rn:msg:LOG_IN_LBL#</a>&nbsp;|&nbsp;<a href="/app/utils/create_account#rn:session#">#rn:msg:SIGN_UP_LBL#</a>
                    <rn:condition hide_on_pages="utils/create_account, utils/login_form, utils/account_assistance">
                    <!--Mohan 1/30/19 added open_login_providers -->
                        <rn:widget path="login/LoginDialog" trigger_element="rn_LoginLink" open_login_providers=""/>
                    </rn:condition>
                    <rn:condition show_on_pages="utils/create_account, utils/login_form, utils/account_assistance">
                      <!--Mohan 1/30/19 added open_login_providers -->
                        <rn:widget path="login/LoginDialog" trigger_element="rn_LoginLink" redirect_url="/app/account/overview" open_login_providers=""/>
                    </rn:condition>
                </rn:condition>
            </rn:condition>
        </div>
    </div>
    <div id="rn_Navigation">
    <rn:condition hide_on_pages="utils/help_search">
        <div id="rn_NavigationBar" role="navigation">
            <ul>
                <li><rn:widget path="navigation/NavigationTab" label_tab="#rn:msg:SUPPORT_HOME_TAB_HDG#" link="/app/#rn:config:CP_HOME_URL#" pages="home, "/></li>
                <li><rn:widget path="navigation/NavigationTab" label_tab="#rn:msg:ANSWERS_HDG#" link="/app/answers/list" pages="answers/list, answers/detail, answers/intent"/></li>
                <rn:condition config_check="COMMUNITY_ENABLED == true">
                    <li><rn:widget path="navigation/NavigationTab" label_tab="#rn:msg:COMMUNITY_LBL#" link="#rn:config:COMMUNITY_HOME_URL:RNW##rn:community_token:?#" external="true"/></li>
                </rn:condition>
                <li><rn:widget path="navigation/NavigationTab" label_tab="#rn:msg:ASK_QUESTION_HDG#" link="/app/ask" pages="ask, ask_confirm"/></li>
                <li><rn:widget path="navigation/NavigationTab" label_tab="#rn:msg:YOUR_ACCOUNT_LBL#" link="/app/account/overview" pages="utils/account_assistance, account/overview, account/profile, account/notif, account/change_password, account/questions/list, account/questions/detail, account/notif/list, utils/login_form, utils/create_account, utils/submit/password_changed, utils/submit/profile_updated"
                subpages="#rn:msg:ACCOUNT_OVERVIEW_LBL# > /app/account/overview, #rn:msg:SUPPORT_HISTORY_LBL# > /app/account/questions/list, #rn:msg:ACCOUNT_SETTINGS_LBL# > /app/account/profile, #rn:msg:NOTIFICATIONS_LBL# > /app/account/notif/list"/></li>
            </ul>
        </div>
    </rn:condition>
    </div>
    <div id="rn_Body">
        <div id="rn_MainColumn" role="main">
            <a id="rn_MainContent"></a>
            <rn:page_content/>
        </div>
        <div id="rn_SideBar" role="navigation">
            <div class="rn_Padding">
                <rn:condition hide_on_pages="answers/list, home, account/questions/list">
                <div class="rn_Module" role="search">
                    <h2>#rn:msg:FIND_ANS_HDG#</h2>
                    <rn:widget path="search/SimpleSearch"/>
                </div>
                </rn:condition>
                <div class="rn_Module">
                    <h2>#rn:msg:CONTACT_US_LBL#</h2>
                    <div class="rn_HelpResources">
                        <div class="rn_Questions">
                            <a href="/app/ask#rn:session#">#rn:msg:ASK_QUESTION_LBL#</a>
                            <span>#rn:msg:SUBMIT_QUESTION_OUR_SUPPORT_TEAM_CMD#</span>
                        </div>
                    <rn:condition config_check="COMMUNITY_ENABLED == true">
                        <div class="rn_Community">
                            <a href="javascript:void(0);">#rn:msg:ASK_THE_COMMUNITY_LBL#</a>
                            <span>#rn:msg:SUBMIT_QUESTION_OUR_COMMUNITY_CMD#</span>
                        </div>
                    </rn:condition>
                    <rn:condition config_check="MOD_CHAT_ENABLED == true">
                        <rn:widget path="chat/ConditionalChatLink" min_sessions_avail="1"/>
                    </rn:condition>
                        <div class="rn_Contact">
                            <a href="javascript:void(0);">#rn:msg:CONTACT_US_LBL#</a>
                            <span>#rn:msg:CANT_YOURE_LOOKING_SITE_CALL_MSG#</span>
                        </div>
                    <rn:condition config_check="CP_CONTACT_LOGIN_REQUIRED == false" logged_in="true">
                        <div class="rn_Feedback">
                            <rn:widget path="feedback/SiteFeedback" />
                            <span>#rn:msg:SITE_USEFUL_MSG#</span>
                        </div>
                    </rn:condition>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rn_Footer" role="contentinfo">
        <div id="rn_RightNowCredit">
            <rn:condition hide_on_pages="utils/guided_assistant">
            <div class="rn_FloatLeft">
                <!--Mohan rn:widget path="utils/PageSetSelector"/-->
            </div>
            </rn:condition>
            <div class="rn_FloatRight">
                <!--Mohan rn:widget path="utils/OracleLogo"/--->
            </div>
        </div>
    </div>

</div>
    <!--Mohan 2/7/19 added  footer-->
    <!--rn:widget path="custom/templates/footer" /-->    
    <!-- START OGS BSC Global Footer. Place this in the footer area first.-->
    <div class="nys-global-footer">
    <div class="footer-container">
        <h3>Business Services Center</h3>
        <div class="footer-col-3">
        <h4>WEBSITE</h4>
        <ul>
            <li><a href="https://bsc.ogs.ny.gov/">Business Services Center</a></li>
            <li><a href="https://ogs.ny.gov/">Office of General Services</a></li>
            
        </ul>
        </div>
        
        <div class="social-media">
        <div class="social-media-title">
            <h4><strong>CONNECT WITH US</strong></h4>
        </div>
        <div class="social-media-links">
            <ul class="menu">
            <li><a href="https://www.facebook.com/NewYorkStateOGS/" id="facebook" target="_blank" title=""><img src="nysbsc/global/assets/img/facebook.png" alt="facebook logo"><span style="line-height:20px;">Facebook</span></a></li>
            <li><a href="https://www.flickr.com/photos/nysogs" id="flickr" target="_blank" title=""><img src="nysbsc/global/assets/img/flickr.png" alt="flickr logo"><span style="line-height:20px;">Flickr</span></a></li>
            <li><a href="https://www.instagram.com/nysgeneralservices/" id="instagram" target="_blank" title=""><img src="nysbsc/global/assets/img/instagram.png" alt="instagram logo"><span style="line-height:20px;">Instagram</span></a></li>
            <li><a href="https://twitter.com/NYS_OGS" id="twitter" target="_blank" title=""><img src="nysbsc/global/assets/img/twitter.png" alt="twitter logo"><span style="line-height:20px;">Twitter</span></a></li>
                <li><a href="https://www.youtube.com/user/nysogs" id="youtube" target="_blank" title=""><img src="nysbsc/global/assets/img/youtube.png" alt="youtube logo"><span style="line-height:20px;">YouTube</span></a></li>
            </ul>
        </div>
        </div>
        <br>
        <br>
        
    </div>
    </div>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-38958217-1', 'auto');
    ga('send', 'pageview');
    </script> 
    <!--END OGS BSC Global Footer. --> 


    <!-- START NYGOV UNIVERSAL Footer. Place this directly after the Global footer  -->
    <div id="nygov-universal-footer" class="nygov-universal-container">
    <noscript>
    <iframe id="nygov-universal-footer-frame" class="nygov-universal-container" width="100%" height="200px" src="//static-assets.ny.gov/load_global_footer/ajax?iframe=true" data-updated="2014-11-07 08:30" frameborder="0" style="border:none; overflow:hidden; width:100%; height:200px;" scrolling="no"> Your browser does not support iFrames </iframe>
    </noscript>
    </div>
    <!-- END NYGOV UNIVERSAL --> 

</body>
</html>
