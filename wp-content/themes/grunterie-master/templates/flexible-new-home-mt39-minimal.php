<?php
/*
Template Name: Home - MT39 - Flexible(NEW-Minimal)
*/
get_header(); ?>

<style>
@media all{meta.foundation-mq-small{font-family:"/only screen/";width:0}meta.foundation-mq-small-only{font-family:"/only screen and (max-width: 40em)/";width:0}meta.foundation-mq-medium{font-family:"/only screen and (min-width:40.0625em)/";width:40.0625em}meta.foundation-mq-medium-only{font-family:"/only screen and (min-width:40.0625em) and (max-width:64em)/";width:40.0625em}meta.foundation-mq-large{font-family:"/only screen and (min-width:64.0625em)/";width:64.0625em}meta.foundation-mq-large-only{font-family:"/only screen and (min-width:64.0625em) and (max-width:90em)/";width:64.0625em}meta.foundation-mq-xlarge{font-family:"/only screen and (min-width:90.0625em)/";width:90.0625em}meta.foundation-mq-xlarge-only{font-family:"/only screen and (min-width:90.0625em) and (max-width:120em)/";width:90.0625em}meta.foundation-mq-xxlarge{font-family:"/only screen and (min-width:120.0625em)/";width:120.0625em}meta.foundation-data-attribute-namespace{font-family:false}body,html{height:100%}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body,html{font-size:16px}body{background:#fff;color:#5f6a7d;cursor:auto;font-family:'Inter',"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;font-style:normal;font-weight:400;line-height:24px;margin:0;padding:0;position:relative}a:hover{cursor:pointer}img{max-width:100%;height:auto}img{-ms-interpolation-mode:bicubic}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}img{display:inline-block;vertical-align:middle}.row{margin:0 auto;max-width:62.5rem;width:100%}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.columns{padding-left:.9375rem;padding-right:.9375rem;width:100%;float:left}.columns+.columns:last-child{float:right}@media only screen{.columns{position:relative;padding-left:.9375rem;padding-right:.9375rem;float:left}.small-6{width:50%}}@media only screen and (min-width:40.0625em){.columns{position:relative;padding-left:.9375rem;padding-right:.9375rem;float:left}.medium-2{width:16.66667%}.medium-3{width:25%}.medium-5{width:41.66667%}.medium-6{width:50%}.medium-offset-1{margin-left:8.33333%!important}}@media only screen and (min-width:64.0625em){.columns{position:relative;padding-left:.9375rem;padding-right:.9375rem;float:left}}.button,button{-webkit-appearance:none;-moz-appearance:none;border-radius:0;border-style:solid;border-width:0;cursor:pointer;font-family:'Inter',"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;font-weight:400;line-height:normal;margin:0 0 1.25rem;position:relative;text-align:center;text-decoration:none;display:inline-block;padding:1rem 2rem 1.0625rem 2rem;font-size:1rem;background-color:#39acbf;border-color:#2e8a99;color:#fff;transition:background-color .3s ease-out}.button:focus,.button:hover,button:focus,button:hover{background-color:#2e8a99}.button:focus,.button:hover,button:focus,button:hover{color:#fff}.button.secondary{background-color:#e7e7e7;border-color:#b9b9b9;color:#333}.button.secondary:focus,.button.secondary:hover{background-color:#b9b9b9}.button.secondary:focus,.button.secondary:hover{color:#333}button::-moz-focus-inner{border:0;padding:0}@media only screen and (min-width:40.0625em){.button,button{display:inline-block}}form{margin:0 0 1rem}label{color:#4d4d4d;cursor:pointer;display:block;font-size:.875rem;font-weight:400;line-height:1.5;margin-bottom:0}input[type=email],input[type=text]{-webkit-appearance:none;-moz-appearance:none;border-radius:0;background-color:#fff;border-style:solid;border-width:1px;border-color:#ccc;box-shadow:inset 0 1px 2px rgba(0,0,0,.1);color:rgba(0,0,0,.75);display:block;font-family:inherit;font-size:.875rem;height:2.3125rem;margin:0 0 1rem 0;padding:.5rem;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-transition:border-color .15s linear,background .15s linear;-moz-transition:border-color .15s linear,background .15s linear;-ms-transition:border-color .15s linear,background .15s linear;-o-transition:border-color .15s linear,background .15s linear;transition:border-color .15s linear,background .15s linear}input[type=email]:focus,input[type=text]:focus{background:#fafafa;border-color:#999;outline:0}input[type=email]:disabled,input[type=text]:disabled{background-color:#ddd;cursor:default}input[type=submit]{-webkit-appearance:none;-moz-appearance:none;border-radius:0}::-webkit-input-placeholder{color:#666}:-moz-placeholder{color:#666}::-moz-placeholder{color:#666}:-ms-input-placeholder{color:#666}meta.foundation-mq-topbar{font-family:"/only screen and (min-width:40.0625em)/";width:40.0625em}.fixed{position:fixed;top:0;width:100%;z-index:99;left:0}.top-bar{background:#fff;height:2.8125rem;line-height:2.8125rem;margin-bottom:0;overflow:hidden;position:relative}.top-bar ul{list-style:none;margin-bottom:0}.top-bar .button{font-size:.75rem;margin-bottom:0;padding-bottom:.4125rem;padding-top:.4125rem}@media only screen and (max-width:40em){.top-bar .button{position:relative;top:-1px}}.top-bar .title-area{margin:0;position:relative}.top-bar .name{font-size:16px;height:2.8125rem;margin:0}.top-bar .toggle-topbar{position:absolute;right:0;top:0}.top-bar .toggle-topbar a{color:#fff;display:block;font-size:.8125rem;font-weight:700;height:2.8125rem;line-height:2.8125rem;padding:0 .9375rem;position:relative;text-transform:uppercase}.top-bar .toggle-topbar.menu-icon{margin-top:-16px;top:50%}.top-bar .toggle-topbar.menu-icon a{color:#2f2f2f;height:34px;line-height:33px;padding:0 2.5rem 0 .9375rem;position:relative}.top-bar .toggle-topbar.menu-icon a span::after{content:"";display:block;height:0;position:absolute;margin-top:-8px;top:50%;right:.9375rem;box-shadow:0 0 0 1px #2f2f2f,0 7px 0 1px #2f2f2f,0 14px 0 1px #2f2f2f;width:16px}.top-bar .toggle-topbar.menu-icon a span:hover:after{box-shadow:0 0 0 1px "",0 7px 0 1px "",0 14px 0 1px ""}.top-bar-section{left:0;position:relative;width:auto;transition:left .3s ease-out}.top-bar-section ul{display:block;font-size:16px;height:auto;margin:0;padding:0;width:100%}.top-bar-section .divider{border-top:0;clear:both;height:1px;width:100%}.top-bar-section ul li{background:#8857ac}.top-bar-section ul li>a{color:#fff;display:block;font-family:'Inter',"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;font-size:.8125rem;font-weight:400;padding-left:.9375rem;padding:12px 0 12px .9375rem;text-transform:none;width:100%}.top-bar-section ul li>a.button{font-size:.8125rem;padding-left:.9375rem;padding-right:.9375rem;background-color:#39acbf;border-color:#2e8a99;color:#fff}.top-bar-section ul li>a.button:focus,.top-bar-section ul li>a.button:hover{background-color:#2e8a99}.top-bar-section ul li>a.button:focus,.top-bar-section ul li>a.button:hover{color:#fff}.top-bar-section ul li:hover:not(.has-form)>a{background-color:#555;color:#fff;background:#7b4d9c}.top-bar-section .has-dropdown{position:relative}.top-bar-section .has-dropdown>a:after{border:inset 5px;content:"";display:block;height:0;width:0;border-color:transparent transparent transparent rgba(47,47,47,.4);border-left-style:solid;margin-right:.9375rem;margin-top:-4.5px;position:absolute;top:50%;right:0}.top-bar-section .dropdown{clip:rect(1px,1px,1px,1px);height:1px;overflow:hidden;position:absolute!important;width:1px;display:block;padding:0;position:absolute;top:0;z-index:99;left:100%}.top-bar-section .dropdown li{height:auto;width:100%}.top-bar-section .dropdown li a{font-weight:400;padding:8px .9375rem}.top-bar-section .dropdown li a.parent-link{font-weight:400}.top-bar-section .dropdown li.parent-link,.top-bar-section .dropdown li.title h5{margin-bottom:0;margin-top:0;font-size:1.125rem}.top-bar-section .dropdown li.parent-link a,.top-bar-section .dropdown li.title h5 a{color:#fff;display:block}.top-bar-section .dropdown li.parent-link a:hover,.top-bar-section .dropdown li.title h5 a:hover{background:0 0}.js-generated{display:block}@media only screen and (min-width:40.0625em){.top-bar{background:#fff;overflow:visible}.top-bar:after,.top-bar:before{content:" ";display:table}.top-bar:after{clear:both}.top-bar .toggle-topbar{display:none}.top-bar .title-area{float:left}.top-bar .button{font-size:.875rem;height:1.75rem;position:relative;top:.53125rem}.top-bar-section{transition:none 0 0;left:0!important}.top-bar-section ul{display:inline;height:auto!important;width:auto}.top-bar-section ul li{float:left}.top-bar-section ul li .js-generated{display:none}.top-bar-section li:not(.has-form) a:not(.button){background:#fff;line-height:2.8125rem;padding:0 .9375rem}.top-bar-section li:not(.has-form) a:not(.button):hover{background-color:#555;background:#7b4d9c}.top-bar-section .has-dropdown>a{padding-right:2.1875rem!important}.top-bar-section .has-dropdown>a:after{border:inset 5px;content:"";display:block;height:0;width:0;border-color:rgba(47,47,47,.4) transparent transparent transparent;border-top-style:solid;margin-top:-2.5px;top:1.40625rem}.top-bar-section .has-dropdown.not-click:hover>.dropdown{position:static!important;height:auto;width:auto;overflow:visible;clip:auto;display:block;position:absolute!important}.top-bar-section .has-dropdown>a:focus+.dropdown{position:static!important;height:auto;width:auto;overflow:visible;clip:auto;display:block;position:absolute!important}.top-bar-section .dropdown{left:0;background:0 0;min-width:100%;top:auto}.top-bar-section .dropdown li a{background:#8857ac;color:#fff;line-height:2.8125rem;padding:12px .9375rem;white-space:nowrap}.top-bar-section .dropdown li:not(.has-form):not(.active)>a:not(.button){background:#8857ac;color:#fff}.top-bar-section .dropdown li:not(.has-form):not(.active):hover>a:not(.button){background-color:#555;color:#fff;background:#333}.top-bar-section>ul>.divider{border-right:0;border-bottom:none;border-top:none;clear:none;height:2.8125rem;width:0}.no-js .top-bar-section ul li:hover>a{background-color:#555;background:#7b4d9c;color:#fff}.no-js .top-bar-section ul li:active>a{background:#a069c3;color:#fff}.no-js .top-bar-section .has-dropdown:hover>.dropdown{position:static!important;height:auto;width:auto;overflow:visible;clip:auto;display:block;position:absolute!important}.no-js .top-bar-section .has-dropdown>a:focus+.dropdown{position:static!important;height:auto;width:auto;overflow:visible;clip:auto;display:block;position:absolute!important}}.text-center{text-align:center!important}div,form,h1,h2,h5,li,p,ul{margin:0;padding:0}a{color:#452f53;line-height:inherit;text-decoration:none}a:focus,a:hover{color:#3194a4}a img{border:none}p{font-family:inherit;font-size:1rem;font-weight:400;line-height:1.6;margin-bottom:1.25rem;text-rendering:optimizeLegibility}h1,h2,h5{color:#2e3b4e;font-family:'Inter',"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;font-style:normal;font-weight:400;line-height:1.2;margin-bottom:.8rem;margin-top:.2rem;text-rendering:optimizeLegibility}h1{font-size:1.5rem}h2{font-size:1.3125rem}h5{font-size:.875rem}ul{font-family:inherit;font-size:1rem;line-height:1.6;list-style-position:outside;margin-bottom:1.25rem}ul{margin-left:1.1rem}ul li ul{margin-left:1.25rem;margin-bottom:0}@media only screen and (min-width:40.0625em){h1,h2,h5{line-height:1.2}h1{font-size:2.125rem}h2{font-size:1.875rem}h5{font-size:.875rem}}@media print{*{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after{content:""}img{page-break-inside:avoid}img{max-width:100%!important}h2,p{orphans:3;widows:3}h2{page-break-after:avoid}}@media only screen{.show-for-small,.show-for-small-only{display:inherit!important}.hide-for-small{display:none!important}}@media only screen and (min-width:40.0625em){.hide-for-small{display:inherit!important}.show-for-small,.show-for-small-only{display:none!important}}@media only screen and (min-width:64.0625em){.hide-for-small{display:inherit!important}.show-for-small,.show-for-small-only{display:none!important}}@media only screen and (min-width:90.0625em){.hide-for-small{display:inherit!important}.show-for-small,.show-for-small-only{display:none!important}}@media only screen and (min-width:120.0625em){.hide-for-small{display:inherit!important}.show-for-small,.show-for-small-only{display:none!important}}@media only screen and (max-width:600px){#wpadminbar{margin-top:-46px}}.admin-bar>.main-wrapper>.fixed{margin-top:2rem}@media only screen and (max-width:782px){.admin-bar>.main-wrapper>.fixed{margin-top:2.875rem}}body,html{height:100%}body *{outline:0!important}.page-row{display:table-row;height:1px}.page-row-expanded{height:100%}.main-wrapper{width:100%;height:100%;display:table;position:relative;background-color:#fff;table-layout:fixed}.main-inner-wrapper{max-width:100%;overflow:hidden}header{background-color:#fff;margin-bottom:0!important;z-index:1000!important}.main-wrapper .header-inner{background-color:#fff;height:68px;width:100%;max-width:1200px;margin:0 auto}.main-wrapper .header-inner>.row{height:100%}.main-wrapper .header-inner .top-bar{height:auto}.main-wrapper .header-inner .top-bar .title-area .logo{display:inline-block;vertical-align:top;position:relative;padding-left:15px;top:12px;z-index:10}.main-wrapper .header-inner .top-bar .title-area .logo img{display:inline-block;vertical-align:top;width:155px}.main-wrapper .header-inner .top-bar .title-area .toggle-topbar.menu-icon{top:18px;margin-top:0}.main-wrapper .header-inner .top-bar .top-bar-section{margin-top:0}.main-wrapper .header-inner .top-bar .top-bar-section>ul{display:inline-block;vertical-align:top}.main-wrapper .header-inner .top-bar .top-bar-section>ul:last-child{float:right}.main-wrapper .header-inner .top-bar .top-bar-section>ul:after{content:'';display:table;clear:both}.header-placement{height:68px}@media only screen and (max-width:1023px){.main-wrapper>header .row>.columns{padding:0}}@media only screen and (min-width:642px) and (max-width:768px){.main-wrapper>header .top-bar .title-area{margin-right:20px}.main-wrapper .header-inner .top-bar .title-area .logo{top:15px}.main-wrapper .header-inner .top-bar .title-area .logo img{width:125px!important}.top-bar-section>ul:last-child{margin-top:16px!important}.top-bar-section>ul:last-child li a{font-size:15px!important}.top-bar-section>ul:first-child li:not(.has-form) a:not(.button){padding:22px 10px!important;font-size:15px!important}}@media only screen and (min-width:641px){.main-wrapper>header .top-bar .title-area{margin-right:24px}.top-bar-section>ul:first-child li:not(.has-form){background:0 0}.top-bar-section>ul:first-child li:not(.has-form) a:not(.button){color:#8857ac;line-height:16px;font-size:15px;font-weight:400;padding:26px 12px!important}.top-bar-section>ul:first-child li:not(.has-form):hover>a:not(.button){color:#898989;background:0 0}.top-bar-section>ul:first-child li:not(.has-form).has-dropdown>a:after{display:none}.top-bar-section>ul:first-child li:not(.has-form).has-dropdown>.dropdown{background-color:#fff;width:252px;padding:8px 22px;border:1px solid #ddd;left:-10px}.top-bar-section>ul:first-child li:not(.has-form).has-dropdown>.dropdown>li:not(.has-form)>a:not(.button){background-color:transparent;padding:0!important;color:#8857ac;line-height:40px}.top-bar-section>ul:first-child li:not(.has-form).has-dropdown>.dropdown>li:not(.has-form):hover>a:not(.button){color:#898989}.top-bar-section>ul:last-child{margin-top:15px;padding-right:15px}.top-bar-section>ul:last-child li{background-color:transparent;margin-left:10px}.top-bar-section>ul:last-child li a,.top-bar-section>ul:last-child li a:focus{display:inline-block;vertical-align:top;background-color:transparent;color:#8857ac;line-height:16px;font-size:15px;font-weight:400;border-radius:3px;padding:9px 10px;height:auto;border:1px solid transparent;transition:all .3s ease-out;top:auto}.top-bar-section>ul:last-child li a:focus:hover,.top-bar-section>ul:last-child li a:hover{color:#8857ac;border:1px solid #8857ac;background-color:transparent}.top-bar-section>ul:last-child li a.highlighted,.top-bar-section>ul:last-child li a.highlighted:focus{border:1px solid #8857ac;color:#fff;background-color:#8857ac}.top-bar-section>ul:last-child li a.highlighted:focus:hover,.top-bar-section>ul:last-child li a.highlighted:hover{color:#8857ac;background-color:transparent}}@media only screen and (max-width:640px){header{border-bottom:1px solid #ddd}.mobile-menu-expanded-bg{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:999}.header-placement:not(.landing-header-placement){height:112px}.top-bar{overflow:visible}.top-bar-section{border-top:1px solid #ddd;background:#fff;display:none}.top-bar-section>ul:last-child{float:none!important}.top-bar-section>ul:last-child>li:not(:nth-child(1)){display:none!important}.main-wrapper>header .top-bar .top-bar-section>ul{vertical-align:top}.top-bar-section ul li{background:#fff;padding:0 15px}.top-bar-section ul li>a{line-height:40px;color:#8857ac;font-size:16px;font-weight:400;padding:0}.top-bar-section ul li:hover:not(.has-form)>a{background-color:transparent;color:#898989}.top-bar-section .divider{display:none!important}.main-wrapper>header .top-bar .top-bar-section>ul:last-child{border-top:1px solid #ddd;background-color:#fff;float:none}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li{display:block;margin:5px 0}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a,.top-bar-section .dropdown li.title h5 a{background-color:transparent;color:#8857ac;line-height:1;font-size:16px;font-weight:400;border-radius:3px;padding:9px 10px;height:auto;border:1px solid #8857ac;transition:all .3s ease-out;top:auto}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a:hover,.top-bar-section .dropdown li.title h5 a:hover{color:#fff;background-color:#8857ac}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a.highlighted,.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a.highlighted:focus{border:1px solid #8857ac;color:#fff;background-color:#8857ac}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a.highlighted:focus:hover,.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a.highlighted:hover{color:#8857ac;background-color:transparent}.top-bar-section .dropdown li.title h5 a{text-align:center}.top-bar-section .dropdown li.parent-link{border-bottom:1px solid #8857ac;margin-bottom:8px}.top-bar-section .dropdown li.parent-link>a{color:#8857ac;font-weight:700;padding:8px 0}.top-bar-section .dropdown li a{padding:0}}p{margin-bottom:1rem!important}.page header{margin-bottom:1.25rem}[class*=column]+[class*=column]:last-child{float:left!important}@media only screen and (min-width:992px){.container{margin-bottom:3rem}}footer{background-color:#f3f3f3}footer .row{max-width:936px}.press-logos{border-bottom:1px solid #fff;padding:38px 0 31px}.press-logos p{color:#959595;font-size:14px}.press-logos ul{font-size:0;margin:0;display:flex;justify-content:center;align-content:center;flex-wrap:wrap}.press-logos ul li{display:inline-block;margin:0 10px 15px;vertical-align:middle}.press-logos ul li img{display:inline-block;vertical-align:middle}.copyright{border-top:1px solid #e4e4e4}.copyright .columns>p{line-height:60px;font-size:12px;color:#353535;margin-bottom:0!important;display:inline-block}.copyright .columns>div[class^=menu]{display:inline-block;vertical-align:top;float:right}.copyright .columns>div[class^=menu] ul.menu{margin:0}.copyright .columns>div[class^=menu] ul.menu li{display:inline-block;margin-left:13px}.copyright .columns>div[class^=menu] ul.menu li a{display:inline-block;font-size:12px;color:#353535;line-height:60px}.copyright .columns>div[class^=menu] ul.menu li a:hover{opacity:.8}@media only screen and (max-width:640px){.copyright .columns>p{display:block;line-height:1;margin:20px 0 15px!important;text-align:center}.copyright .columns>div[class^=menu]{float:none;display:block;text-align:center;margin-bottom:15px}.copyright .columns>div[class^=menu] ul.menu li a{line-height:1}}a,body,h1,h2,h5,p{font-weight:400}li,p{line-height:1.35;font-size:.875rem}input[type=email],input[type=submit],input[type=text]{box-shadow:none;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;padding:1rem}.section{text-align:center;}input[type=email]:focus,input[type=text]:focus{background:#fff;border:1px solid #39acbf}@media only screen and (min-width:40.0625em){h2{font-size:1.5rem}}@media only screen and (min-width:992px){.top-bar{height:3.5rem;line-height:3.5rem}.top-bar-section{margin-top:.375rem}p{font-size:1rem}li,p{font-size:1.0625rem}h2{font-size:1.8rem}}@media only screen and (max-width:700px){.main-wrapper .header-inner{height:63px}.main-wrapper .header-inner .top-bar .title-area .logo img{width:130px}.top-bar-section>ul:last-child{margin-top:12px}.top-bar-section>ul:last-child li a,.top-bar-section>ul:last-child li a:focus{padding:9px 7px!important}.header-placement{height:62px}}@media only screen and (min-width:641px){.top-bar-section>ul:first-child li:not(.has-form) a:not(.button){padding:23px 9px!important}}@media only screen and (min-width:701px){.top-bar-section>ul:first-child li:not(.has-form) a:not(.button){padding:26px 12px!important}}.topbannernotice{position:fixed;top:0;left:0;width:100%;z-index:99998;padding:0 5px;display:table;background-color:#f3edff}.topbannernotice>*{display:table-cell;vertical-align:middle}.topbannernotice p{margin-bottom:0!important;width:calc(100% - 40px);text-align:center;font-size:15px;padding:10px 0}.topbannernotice p a{font-weight:700}.topbannernotice .closenotice{width:35px;padding:8px 11px;cursor:pointer}@media only screen and (max-width:640px){.header-placement:not(.retain_old_height){height:62px}}footer{background-color:transparent}footer .press-logos{padding:2rem 0 1rem;border-bottom:none}footer .press-logos ul{align-items:center;flex-wrap:nowrap}footer .press-logos ul li{margin:0 2rem 2rem}footer .press-logos .columns p{font-weight:700;font-size:22px;line-height:24px;color:#452f53;margin-bottom:3rem!important}footer .footer-menu{padding:3rem 0;background-color:#f6f7f7;}footer .footer-menu .row .columns{margin-bottom:0;}footer .footer-menu p.footer-headline{color:#452f53;font-size:15px;font-weight:bold;line-height:1.5rem;margin-bottom:1rem !important;}footer .footer-menu ul.menu{margin:0;list-style-type:none;}footer .footer-menu ul.menu li a{display:inline-block;color:#452f53;font-size:13px;line-height:24px;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}footer .footer-menu ul.menu li a:hover{color:#04a2bd;}footer .footer-summary a,footer .footer-summary p{font-size:inherit;line-height:inherit;color:inherit}footer .footer-summary p{margin-bottom:0!important}footer .footer-summary a{font-weight:700}footer .copyright{border-top:none;padding-top:3rem;padding-bottom:3rem}footer .copyright .columns>p{font-weight:400;font-size:13px;line-height:24px;color:#616569}footer .copyright .columns>div[class^=menu] ul.menu li{display:inline-block;margin-left:0;padding:0 .5rem;border-right:1px solid rgba(98,105,112,.5)}footer .copyright .columns>div[class^=menu] ul.menu li:last-child{border-right:none}footer .copyright .columns>div[class^=menu] ul.menu li a{display:inline-block;font-weight:700;font-size:13px;line-height:24px;color:#452f53}@media screen and (max-width:640px){footer .row{padding:0!important}footer .row .columns{padding-left:1rem!important;padding-right:1rem!important}footer .press-logos ul{justify-content:space-between;flex-wrap:wrap}footer .press-logos ul li{margin:0 0 2rem}footer .press-logos ul li img{height:100%}footer .press-logos ul li:nth-child(1){order:1;height:25px}footer .press-logos ul li:nth-child(2){order:2;height:20px}footer .press-logos ul li:nth-child(3){order:4;height:20px}footer .press-logos ul li:nth-child(4){order:3;height:28px}footer .footer-menu{padding:1.5rem 0 2.5rem;}footer .footer-menu .row{display:grid;grid-row-gap:20px;grid-template-columns:repeat(2, 1fr);grid-auto-rows:20px;}footer .footer-menu .row::after,footer .footer-menu .row::before{display:none;}footer .footer-menu ul.menu li{margin-bottom:0.5rem;}footer .footer-menu .menu-copyright-container li{margin-bottom:1rem !important;}footer .footer-menu .menu-copyright-container li:last-child{margin-bottom:0 !important;}footer .footer-menu .menu-copyright-container li a{font-weight:bold;}footer .copyright{padding:2rem 0}footer .copyright .columns>p{margin:0!important}footer .copyright .columns>div[class^=menu]{display:none}}.page-placement{display:block}@media screen and (min-width:641px){.main-wrapper header .row .columns{padding-left:1rem;padding-right:1rem}.main-wrapper .header-placement{height:80px}.main-wrapper .header-inner:not(.landing-page-header){max-width:100%;height:auto;padding:1rem 0}.main-wrapper .header-inner:not(.landing-page-header) .top-bar{display:flex;justify-content:space-between;align-items:center;width:100%;border-bottom:none!important}.main-wrapper .header-inner:not(.landing-page-header) .top-bar .title-area .action{display:none}.main-wrapper .header-inner:not(.landing-page-header) .top-bar .title-area .name{height:auto}.main-wrapper .header-inner:not(.landing-page-header) .top-bar .title-area .name a.logo{top:auto;padding-left:0;padding-bottom:8px}.main-wrapper .header-inner:not(.landing-page-header) .top-bar .top-bar-section{display:flex;justify-content:space-between;align-items:center;flex:1}.main-wrapper .header-inner:not(.landing-page-header) .top-bar .top-bar-section>ul{margin-top:0}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:first-child li:not(.has-form)>a:not(.button){color:#969ba0;padding:1rem 1.25rem!important;transition:all .3s ease-out}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:first-child li:not(.has-form):hover>a:not(.button){color:#8746a8}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:first-child li:not(.has-form).has-dropdown>.dropdown>li:not(.has-form)>a:not(.button){color:#969ba0;transition:all .3s ease-out}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:first-child li:not(.has-form).has-dropdown>.dropdown>li:not(.has-form):active>a:not(.button),.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:first-child li:not(.has-form).has-dropdown>.dropdown>li:not(.has-form):hover>a:not(.button){color:#8746a8}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child{padding-right:0}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:focus{color:#452f53;font-weight:700;padding:14px 30px;border-width:2px;border-radius:50px}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:focus:hover,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:hover{border-color:#452f53;background-color:#fff}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a.highlighted,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a.highlighted:focus,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:focus.highlighted,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:focus.highlighted:focus{color:#fff;border-width:2px;border-color:#8746a8;background-color:#8746a8}.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a.highlighted:focus:hover,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a.highlighted:hover,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:focus.highlighted:focus:hover,.main-wrapper .header-inner:not(.landing-page-header) .top-bar-section>ul:last-child li a:focus.highlighted:hover{color:#8746a8;border-color:#8746a8;background-color:#fff}}@media screen and (max-width:640px){.main-wrapper .header-placement:not(.landing-header-placement){height:48px}.main-wrapper header{border-bottom:none;box-shadow:0 7px 16px rgba(138,94,166,.13)}.main-wrapper header .header-inner:not(.landing-page-header){height:auto}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area{display:flex;justify-content:space-between;align-items:center;height:3rem;margin-right:0;padding:0 1rem}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area .name{height:auto}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area .name a.logo{padding-left:0;top:auto}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area .name a.logo img{width:105px}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area .action{flex:1;text-align:right}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area .action a{font-weight:800;font-size:14px;line-height:1.5rem;color:#fff;padding:5px 1.5rem;background-color:#8746a8;border-radius:48px}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .title-area .toggle-topbar.menu-icon{position:relative;top:auto;margin-left:1.5rem}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .toggle-topbar a{width:20px;height:20px;position:relative;padding:0;-webkit-transform:rotate(0);-moz-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0);-webkit-transition:.5s ease-in-out;-moz-transition:.5s ease-in-out;-o-transition:.5s ease-in-out;transition:.5s ease-in-out;cursor:pointer}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .toggle-topbar a span{display:block;position:absolute;height:2px;width:100%;background:#8746a8;border-radius:9px;text-indent:-9999px;opacity:1;right:0;-webkit-transform:rotate(0);-moz-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0);-webkit-transition:.25s ease-in-out;-moz-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .toggle-topbar a span:nth-child(1){top:0}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .toggle-topbar a span:nth-child(2){top:8px}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .toggle-topbar a span:nth-child(3){top:16px}.main-wrapper header .header-inner:not(.landing-page-header) .top-bar .toggle-topbar a span::after{display:none}.top-bar-section ul li>a{color:#969ba0}.top-bar-section ul li:hover:not(.has-form)>a{color:#8746a8}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a{font-weight:700;color:#452f53;border:2px solid #452f53;border-radius:50px}.main-wrapper>header .top-bar .top-bar-section>ul:last-child li>a:hover{color:#fff;background-color:#452f53}.top-bar-section .dropdown li.title h5 a{font-weight:700;color:#8746a8;border:2px solid #8746a8;border-radius:50px}.top-bar-section .dropdown li.title h5 a:hover{color:#fff;background-color:#8746a8}.top-bar-section .dropdown li.parent-link>a{color:#8746a8}}.mobile-main-menu{position:fixed;top:-100%;left:0;width:100%;height:0;color:#452f53;background-color:#fff;overflow:hidden;z-index:999;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.mobile-main-menu .menu-container{overflow:scroll;height:100%}.mobile-main-menu ul{margin:0;list-style-type:none}.mobile-main-menu li.divider{display:none}.mobile-main-menu .menu-wrapper ul li{padding:0 2.5rem}.mobile-main-menu .menu-wrapper ul li a{position:relative;display:inline-block;font-size:20px;font-weight:400;line-height:24px;color:#452f53;padding:20px 0}.mobile-main-menu .menu-wrapper ul li.has-dropdown>a::after{content:"";position:absolute;width:16px;height:24px;margin-left:1rem;background-image:url(https://joinhomebase.com/wp-content/themes/grunterie-master/img/chevron-blue-16.svg);background-position:center;background-repeat:no-repeat;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.mobile-main-menu .menu-wrapper ul.dropdown li{padding:0}.mobile-main-menu .menu-wrapper ul.dropdown li a{font-size:1rem;font-weight:700;color:#af96c2;padding:10px 0}.mobile-main-menu .menu-wrapper ul.dropdown li:first-child a{padding-top:0}.mobile-main-menu .menu-wrapper ul.dropdown li:last-child a{padding-bottom:20px}.mobile-main-menu .button-wrapper{padding:2rem 1.5rem}.mobile-main-menu .button-wrapper ul li{margin-bottom:1rem}.mobile-main-menu .button-wrapper ul li:last-child{margin-bottom:0}.mobile-main-menu .button-wrapper ul li a.button{width:100%}} @media all{.new-style{color:#452f53;}.new-style h1{font-family:inherit;font-style:normal;font-weight:normal;font-size:3.625rem;line-height:4rem;color:inherit;letter-spacing:1px;margin-top:0;margin-bottom:0;}.new-style h1.fw-black{font-weight:900;}.new-style h1.fw-bold{font-weight:bold;}.new-style h1.normal{font-weight:normal;}.new-style h2{font-family:inherit;font-style:normal;font-weight:normal;font-size:2.75rem;line-height:3rem;color:inherit;letter-spacing:1px;margin-top:0;margin-bottom:0;}.new-style h2.fw-black{font-weight:900;}.new-style h2.fw-bold{font-weight:bold;}.new-style h2.normal{font-weight:normal;}.new-style p,.new-style li{font-size:15px;line-height:1.5rem;color:inherit;}.new-style p.fw-black,.new-style li.fw-black{font-size:13px;font-weight:900;line-height:1.5rem;}.new-style a.button,.new-style a.button.primary,.new-style button,.new-style button.primary,.new-style .button,.new-style .button.primary{font-family:inherit;font-style:normal;font-weight:bold;font-size:15px;line-height:1rem;color:#fff;letter-spacing:0.2px;padding:14px 30px;margin:0;border:2px solid #8746a8;background-color:#8746a8;border-radius:48px;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}.new-style a.button:hover,.new-style a.button.primary:hover,.new-style button:hover,.new-style button.primary:hover,.new-style .button:hover,.new-style .button.primary:hover,.new-style a.button:active,.new-style a.button.primary:active,.new-style button:active,.new-style button.primary:active,.new-style .button:active,.new-style .button.primary:active,.new-style a.button:focus,.new-style a.button.primary:focus,.new-style button:focus,.new-style button.primary:focus,.new-style .button:focus,.new-style .button.primary:focus{color:#8746a8;background-color:#fff;}.new-style a.button.disabled,.new-style a.button.primary.disabled,.new-style button.disabled,.new-style button.primary.disabled,.new-style .button.disabled,.new-style .button.primary.disabled,.new-style a.button:disabled,.new-style a.button.primary:disabled,.new-style button:disabled,.new-style button.primary:disabled,.new-style .button:disabled,.new-style .button.primary:disabled{pointer-events:none;background-color:#8746a8;border-color:#8746a8;color:#fff;cursor:not-allowed;opacity:0.5;}
.new-style form .form-item{position:relative;margin-right:2rem}
.new-style form .form-item.input{box-shadow:0 4px 21px rgba(115,78,138,.14);border-radius:50px}
.new-style form .form-item:last-child{margin-right:0}
.new-style form input[type=email]{position:relative;display:block;font-family:inherit;font-size:15px;line-height:1rem;color:#313a43;height:3rem;border-radius:50px;padding:0 1.5rem;background-color:#fff;border:2px solid transparent}
.new-style form input[type=email]::placeholder{color:#969ba0;opacity:1}
.new-style form input[type=email]:focus{box-shadow:0 7px 16px rgba(138,94,166,.14);border-color:transparent}

.new-style .row{padding:0}.new-style .row.row-flex{display:flex}.new-style .row.row-flex .row-container{display:flex;justify-content:center;align-items:center;width:100%}.new-style .row-container::after,.new-style .row-container::before{content:'';display:table}.new-style .row-container::after{clear:both}.new-style .columns{padding-left:0;padding-right:0}.new-style .column-inner{padding-left:1rem;padding-right:1rem}@media screen and (max-width:640px){.new-style h1,.new-style h1.fw-black{font-size:2.5rem;line-height:1}.new-style h2,.new-style h2.normal{font-size:2rem;line-height:1}.new-style form .form-item{width:100%;margin-right:0;margin-bottom:1rem}.new-style form .form-item:last-child{margin-bottom:0}.new-style .row.row-flex .row-container{flex-wrap:wrap}}} @media all{@media screen and (min-width:1200px){.row{max-width:992px;margin:0 auto}}@media screen and (max-width:1024px){.row{padding:0 15px}}.main-wrapper .header-inner>.row{padding:0}@media only screen and (min-width:641px){.top-bar-section>ul:last-child{margin-top:14px;padding-right:13px}}} @media all{.main-inner-wrapper{overflow:inherit}.page-placement{display:block}.row{max-width:1152px}#hero-signup-form{display:flex;margin-left:-1.5rem}#hero-signup-form .form-item{margin-right:0}#hero-signup-form input[type=email]{width:260px;height:3rem;margin-bottom:0;padding-right:3rem}#hero-signup-form button#create-account{margin-left:-2.5rem;padding:padding: 14px 28px;}@media screen and (max-width:640px){#hero-signup-form{margin-left:0;flex-wrap:wrap}#hero-signup-form input[type=email]{width:100%}#hero-signup-form button#create-account{width:100%;margin-left:0}}.section-hero{padding-top:4rem; padding-bottom: 5rem;}.section-hero h1{margin-bottom:2rem}.section-hero h2{font-size: 22px;font-weight: 400;line-height: 2rem;color: #8746a8;margin-bottom: 2rem;letter-spacing: 0;max-width:400px}.section-hero .col-left{text-align:left}.section-hero .col-right{text-align:right}@media screen and (max-width:640px){.main-wrapper header{box-shadow:0 7px 16px rgba(138,94,166,.13)}.section-hero{padding:0}.section-hero .col-left{height:calc(100vh - 48px);text-align:center}.section-hero .col-left .column-inner,.section-hero .col-left .text-wrapper{height:100%}.section-hero .col-left .text-wrapper{display:flex;flex-direction:column;justify-content:center;padding:4rem 0}.section-hero .col-left h1{max-width:248px;margin-left:auto;margin-right:auto}.section-hero .col-left h2{font-size:20px;line-height:1.5rem;margin-bottom:3.5rem;padding:0 1rem;max-width:none}.section-hero .col-right{padding:2rem 0 4rem}}}
</style>

<script type="application/ld+json">
  { 
   "@context": "http://schema.org",
   "@type": "Organization",
   "name": "Homebase",
   "legalName" : "Pioneer Works, Inc.",
   "url": "https://joinhomebase.com",
   "logo": "https://joinhomebase.com/wp-content/uploads/2020/05/homebase-logo-purple_proxnova.svg",
   "foundingDate": "2014",
   "founders": [{
     "@type": "Person",
     "name": "John Waldmann"
   }],
   "address": {
      "@type": "PostalAddress",
      "streetAddress": "835 Howard Street",
      "addressLocality": "San Francisco",
      "addressRegion": "CA",
      "postalCode": "94103",
      "addressCountry": "USA"
   },
   "contactPoint": {
     "@type": "ContactPoint",
     "contactType": "customer support",
     "telephone": "[+1-415-951-3830]",
     "email": "support@joinhomebase.com"
   },
   "sameAs":[  
       "https://www.facebook.com/HomebaseHQ/",
       "https://twitter.com/joinhomebase",
       "https://www.linkedin.com/company/homebase-hr/",
       "https://www.youtube.com/channel/UC6oEeT2TOCNEDM5OcYddUxA",
       "https://www.capterra.com/p/153076/Homebase/",
       "https://www.crunchbase.com/organization/homebase/",
	 "https://www.business.com/reviews/homebase/"
   ]
  }
</script>

<div class="container new-style" role="document">

<?php
if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : 
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        $load_without_image     = get_sub_field('load_without_image');
        $image_d                = get_sub_field('image_d');
        $image_m                = get_sub_field('image_m');
      ?>

        <div class="section section-hero">
          <div class="row row-flex">
            <div class="row-container">
              <div class="columns medium-5 medium-offset-1 col-left">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <div class="heading">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1 class="fw-black">' . $headline . '</h1>';
                      endif;

                      if ($subheadline) :
                        echo '<h2 class="subheading normal">' . $subheadline . '</h2>';
                      endif;?>
                    </div>

                    <form action="<?php echo $form_link; ?>"
                      id="hero-signup-form"
                      method="GET"
                      class="email-signup-form"
                    >
                      <div class="form-item input">
                        <input class="homeform"
                            aria-label="email address"
                            type="email"
                            name="email"
                            placeholder="Email address"
                            required
                        />
                      </div>
                      <div class="form-item">
                        <button type="submit"
                            aria-label="submit"
                            id="create-account"
                            name="Submit"
                            class="primary"
                        ><?php echo $button_text; ?></button>
                      </div>
                    </form> 
                  </div>
                </div>
              </div>
              <div class="columns medium-6 col-right">
                <div class="column-inner">
                  <div class="img-wrapper">
                    <?php if ( $load_without_image && wp_is_mobile() ) : ?>
                      <div class="hero-img hide-for-small" data-img-src="<?php echo $image_d['url']; ?>" data-img-alt="<?php echo $image_d['alt']; ?>" style="min-height: 495px;"></div>
                      <div class="hero-img show-for-small" data-img-src="<?php echo $image_m['url']; ?>" data-img-alt="<?php echo $image_m['alt']; ?>" style="min-height: 300px;"></div>
                    <?php else : ?>
                      <div class="hero-img hide-for-small" style="min-height: 495px;">
                        <?php if( is_int( stripos($image_d['url'], '.svg') ) ){ ?>
                          <object class="nolazyload" data="<?php echo $image_d['url']; ?>" type="image/svg+xml"></object>
                        <?php } else { ?>
                          <img class="nolazyload" src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                        <?php } ?>
                      </div>
                      <div class="hero-img show-for-small">
                        <img class="lazyload" data-src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php
    /* --------------------------------------------
      Single 2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_column' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $reverse                = get_sub_field('reverse');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $description            = get_sub_field('description');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-2-col text-left" data-reverse="<?php echo $reverse;?>" data-src="<?php echo $image['url'];?>" data-alt="<?php echo $image['alt'];?>">
          <?php if ($headline) : ?>
            <h2><?php echo $headline; ?></h2>
          <? endif;?>
          <?php if ($subheadline) : ?>
            <h3><?php echo $subheadline; ?></h3>
          <? endif;?>
          <?php if ($description) : ?>
            <p><?php echo $description; ?></p>
          <? endif;?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_columns' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

      <div class="section section-2-columns">
        <div class="section-header"  style="padding-top:5rem;">
          <h2><?php echo $headline; ?></h2>
          <h3><?php echo $subheadline; ?></h3> 
        </div>

        <?php if ( have_rows('items') ) :
          while ( have_rows('items') ) : the_row();
            $reverse          = get_sub_field('reverse');
            $link_group       = get_sub_field('link_group');
            $title            = get_sub_field('title');
            $description      = get_sub_field('description');
            $link_text        = get_sub_field('link_text');
            $link_url         = get_sub_field('link_url');
            $add_cert         = get_sub_field('add_certification');
            $c_logo           = get_sub_field('c_logo');
            $c_text           = get_sub_field('c_text');
            $links            = get_sub_field('links');
            $image            = get_sub_field('image');
            $max_width        = get_sub_field('max_width');
            $max_height       = get_sub_field('max_height');
        ?>

        <div class="row" 
            data-reverse="<?php echo $reverse; ?>"
            data-link="<?php echo $link_group; ?>"
            data-cert="<?php echo $add_cert;?>"
            data-src="<?php echo $image['url']; ?>"
            data-alt="<?php echo $image['alt']; ?>"
            data-mwidth="<?php echo $max_width; ?>"
            data-mheight="<?php echo $max_height; ?>">

            <?php if ($title) : ?>
              <h3><?php echo $title; ?></h3>
            <? endif;?>
            <?php if(!$link_group) : ?>
              <?php if ($description) : ?>
                <p class="desc"><?php echo $description; ?></p>
              <? endif;?>
              <?php if ($link_text) : ?>
                <a href="<?php echo $link_url; ?>" style="color:#452f53;"><?php echo $link_text; ?></a>
              <? endif;?>
              <?php if ($add_cert) : ?>
                <p class="cert"
                    data-src="<?php echo $c_logo['url']; ?>" 
                    alt="<?php echo $c_logo['alt']; ?>">
                    <?php echo $c_text; ?>
                </p>
              <? endif;?>
            <?php else : ?>
              <?php if ( have_rows('links') ) :
                  echo '<ul class="links">';
                    while ( have_rows('links') ) : the_row();
                      $link_text           = get_sub_field('link_text');
                      $link_url            = get_sub_field('link_url');
              ?>
                    <li><a style="color:#452f53; padding-bottom: 2rem;" class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a></li>
              <?php 
                  endwhile;
                  echo '</ul>';
                endif; 
              ?>
            <? endif;?>
        </div>
        <?php 
            endwhile;
          endif; 
        ?>
      </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Review widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_review' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $customer_review        = get_sub_field('customer_review');
      $customer_info          = get_sub_field('customer_info');
      $rating_text            = get_sub_field('rating_text');
      ?>

        <div class="section section-reviews">
          <?php
          if ($subheadline) :
            echo '<h3>' . $subheadline . '</h3>';
          endif;

          if ($headline) :
            echo '<h2>' . $headline . '</h2>';
          endif;?>

          <?php if ( have_rows('reviews') ) :
              while ( have_rows('reviews') ) : the_row();
                  $score        = get_sub_field('score');
                  $logo         = get_sub_field('logo');
                  $content      = get_sub_field('content');
                  $link_url     = get_sub_field('link_url');
          ?>
            <div class="review-item"
              data-logo-src = "<?php echo $logo['url']; ?>"
              data-logo-alt = "<?php echo $logo['alt']; ?>"
              data-score-src = "<?php echo $score['url']; ?>"
              data-score-alt = "<?php echo $score['alt']; ?>"
            >
              <a href="<?php echo $link_url; ?>" target="_blank" rel="noreferrer" style="color:#452f53;display:inline-block;margin-bottom:0.5rem;">
                <span><?php echo $content;?></span>
              </a>
            </div>
          <?php 
              endwhile;
            endif; 
          ?>
          <?php

          if ($rating_text) :
            echo '<p class="rating">'.$rating_text.'</p>';
          endif;

          if ($customer_review) :
            echo '<p class="c-review">' . $customer_review . '</p>';
          endif;

          if ($customer_info) :
            echo '<p class="c-info">' . $customer_info . '</p>';
          endif;?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Business tab
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_business' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-business-tab">
          <?php
          // headline
          if ($headline) 
            echo '<h2 class="fw-black">' . $headline . '</h2>';
          if ($subheadline) 
            echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
          ?>

          <?php
            if ( have_rows('b_tabs') ) : 
              while ( have_rows('b_tabs') ) : the_row();
                $title             = get_sub_field('title');
                $logos             = get_sub_field('logos');
          ?>
            <?php if ($logos) : ?>
              <ul class="grid" data-title="<?php echo $title; ?>">
              <?php foreach( $logos as $logo ): ?>
                <li data-src="<?php echo $logo['url']; ?>" data-alt="<?php echo $logo['alt']; ?>">
                </li>
              <?php endforeach; ?>
              </ul>
            <? endif;?>
          <?php
              endwhile;
            endif; 
          ?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Intro product
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_intro_product' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_button             = get_sub_field('add_button');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-intro-product text-left">
          <?php if ($headline) : ?>
            <h2><?php echo $headline; ?></h2>
          <? endif;?>
          <?php if ($subheadline) : ?>
            <h3><?php echo $subheadline; ?></h3>
          <? endif;?>
          <?php if ($add_button) : ?>
            <a class="btn" href="<?php echo $button_link; ?>"  style="color:#452f53;" 
              data-src="<?php echo $image['url']; ?>" data-alt="<?php echo $image['alt']; ?>"><?php echo $button_text; ?></a>
          <? endif;?>

          <?php if ( have_rows('groups') ) :
              while ( have_rows('groups') ) : the_row();
          ?>
            <div class="intro-group">
              <p class="group-title"><?php echo get_sub_field('title'); ?></p>
              <?php if ( have_rows('items') ) :
                  while ( have_rows('items') ) : the_row();
                    $icon             = get_sub_field('icon');
                    $link_text        = get_sub_field('link_text');
                    $link_url         = get_sub_field('link_url');
                    $description      = get_sub_field('description');
              ?>
                <div class="intro-box" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                  <a class="text-link-arrow" href="<?php echo $link_url; ?>" style="color:#452f53;" ><?php echo $link_text; ?></a>
                  <p><?php echo $description;?></p>
                </div>
              <?php 
                  endwhile;
                endif; 
              ?>
            </div>
          <?php 
              endwhile;
            endif; 
          ?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Signup widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_signup' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-signup-widget">
          <?php
            // headline
            if ($headline) 
              echo '<h3>' . $headline . '</h3>';
            if ($subheadline) 
              echo '<p>' . $subheadline . '</p>';
          ?>
          <?php
            if ( have_rows('features') ) : 
              echo '<ul>';
              while ( have_rows('features') ) : the_row();
                $title             = get_sub_field('title');
          ?>
            <li><span><?php echo $title; ?></span></li>
          <?php   
              endwhile;
              echo '</ul>';
            endif; 
          ?>
          <a href="<?php echo $button_link; ?>" style="color:#452f53;" ><?php echo $button_text; ?></a>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Vestibulum widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_vestibulum' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $l_content              = get_sub_field('l_content');
        $c_image                = get_sub_field('c_image');
        $r_content              = get_sub_field('r_content');
      ?>

        <div class="section section-vestibulum-widget hide-for-small">
          <?php
            // headline
            if ($headline) 
              echo '<h2>' . $headline . '</h2>';
            if ($subheadline) 
              echo '<h3>' . $subheadline . '</h3>';
          ?>
          <div class="col-left">
            <?php echo $l_content; ?>
          </div>
          <div class="col-center" data-src="<?php echo $c_image['url']; ?>" data-alt="<?php echo $c_image['alt']; ?>">
          </div>
          <div class="col-right">
            <?php echo $r_content; ?>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Customer quote slider
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_quote' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <div class="section section-customer-quote">
        <?php
          if ( have_rows('quotes') ) : 
            while ( have_rows('quotes') ) : the_row();
              $show_in_mobile         = get_sub_field('show_in_mobile');
              $title                  = get_sub_field('title');
              $image                  = get_sub_field('image');
              $quote                  = get_sub_field('quote');
              $label                  = get_sub_field('label');
              $name                   = get_sub_field('name');
              $position               = get_sub_field('position');
        ?>
          <div class="quote-item"
              data-show="<?php echo $show_in_mobile; ?>"
              data-photo-src="<?php echo $image['url']; ?>" data-photo-alt="<?php echo $image['alt']; ?>"
              data-label-src="<?php echo $label['url']; ?>" data-label-alt="<?php echo $label['alt']; ?>"
          >
            <?php if ($title) : ?>
              <h3><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if ($quote) : ?>
              <p class="message"><?php echo $quote; ?></p>
              <p class="name"><?php echo $name; ?></p>
              <p class="position"><?php echo $position; ?></p>
            <?php endif; ?>
          </div>
        <?php
            endwhile;
          endif; 
        ?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      New features widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_new_features' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-new-features text-left">
          <?php
            if ($headline) :
              echo '<h2 class="fw-black">' . $headline . '</h2>';
            endif;

            if ($subheadline) :
              echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
            endif;
          ?>

          <?php if ( have_rows('features') ) :
              while ( have_rows('features') ) : the_row();
                $icon           = get_sub_field('icon');
                $title          = get_sub_field('title');
                $description    = get_sub_field('description');
                $link_text      = get_sub_field('link_text');
                $link_url       = get_sub_field('link_url');
          ?>
            <div class="feature" data-alt="<?php echo $icon['alt']; ?>"  data-src="<?php echo $icon['url']; ?>">
              <p class="title"><?php echo $title; ?></p>
              <p class="desc"><?php echo $description; ?></p> 
              <a class="text-link-arrow" href="<?php echo $link_url; ?>" style="color:#452f53;" ><?php echo $link_text; ?></a>
            </div>
          <?php 
              endwhile;
            endif; 
          ?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Footer CTA banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $align                  = get_sub_field('align');
      $stype                  = get_sub_field('stype');
      $content                = get_sub_field('content');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-cta-banner" data-stype="<?php echo $stype; ?>" data-align="<?php echo $align; ?>">
          <?php if ($content) : ?>
            <h3 style="color: #fff; background-color:#452f53;"><?php echo $content; ?></h3>
          <?php endif; ?>
          <?php if ($button_text) : ?>
            <a href="<?php echo $button_link; ?>" style="color:#452f53;" ><?php echo $button_text; ?></a>
          <?php endif; ?>
        </div>

      <?php endif; ?>

    <?php
    /* --------------------------------------------
      About Us widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_about_us' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $logo               = get_sub_field('logo');
        $photo              = get_sub_field('photo');
        $content            = get_sub_field('content');
        $contact_us         = get_sub_field('contact_us');
        $contact_url        = get_sub_field('contact_link');
        $phone_num          = get_sub_field('phone_num');
        $label              = get_sub_field('label');
      ?>

        <div class="section section-aboutus text-left">
          <?php if ($content) : ?>
              <?php echo $content; ?>
          <?php endif; ?>

          <?php if ($contact_url) : ?>
              <a href="<?php echo $contact_url; ?>" class="contact-link" style="color:#452f53;" ><?php echo $contact_us; ?></a>
          <?php endif; ?>

          <?php if ($phone_num) : ?>
              <a href="tel:+1'.str_replace('-', '', $phone_num).'" class="phone-number" style="color:#452f53;" 
                data-logo-alt="<?php echo $logo['alt']; ?>"  data-logo-src="<?php echo $logo['url']; ?>"
                data-photo-alt="<?php echo $photo['alt']; ?>"  data-photo-src="<?php echo $photo['url']; ?>"
                data-label-alt="<?php echo $label['alt']; ?>"  data-label-src="<?php echo $label['url']; ?>"
              ><?php echo $phone_num; ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      
      <?php
      /* --------------------------------------------
        Business pictured widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_bs_pictured' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
          $title     = get_sub_field('title');
        ?>

          <div class="section section-bp-caption">
            <div class="row row-small">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <?php if ($title) :?>
                      <h3 class="title"><?php echo $title; ?></h3>
                    <?php endif; ?>

                    <?php if ( have_rows('businesses') ) :?>
                      <ul class="bp-list">
                      <?php while ( have_rows('businesses') ) : the_row();
                            $business_name   = get_sub_field('business_name');
                            $address         = get_sub_field('address');
                            $website         = get_sub_field('website');
                      ?>
                      
                        <li class="bs-item">
                          <?php if ($website) : ?>
                            <a href="<?php echo $website; ?>" target="_blank" rel="noreferrer" style="padding: 1rem 0;"><?php echo $business_name.', '; ?></a>
                          <?php else: ?>
                            <span><?php echo $business_name.', '; ?></span>
                          <?php endif; ?>

                          <span><?php echo $address; ?></span>
                        </li>
                      
                      <?php endwhile;?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>

</div>
<?php get_footer(); ?>