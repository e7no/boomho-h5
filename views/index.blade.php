<!DOCTYPE html>
<html lang="en" id="html-root">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>ThinkSNS+</title>
  <link rel="stylesheet" href="{{ \Zhiyi\Component\ZhiyiPlus\PlusComponentWeb\mix('css/app.css') }}" />
  <style>
    #spinner-root {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0; 
      z-index: 8;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
    }
    #spinner-root-parent {
      display: flex;
      justify-content: center;
      position: relative;
      width: 100%;
    }
    .spinner-root-double-bounce-bounce1, .spinner-root-double-bounce-bounce2 {
      width: 6vw;
      height: 6vw;
      border-radius: 50%;
      opacity: 0.6;
      position: absolute;
      background-color: #59b6d7;
      -webkit-animation: mint-root-spinner-double-bounce 2.0s infinite ease-in-out;
              animation: mint-root-spinner-double-bounce 2.0s infinite ease-in-out;
    }
    .spinner-root-double-bounce-bounce2 {
      -webkit-animation-delay: -1.0s;
              animation-delay: -1.0s;
    }
    @-webkit-keyframes mint-spinner-root-double-bounce {
      0%, 100% {
        -webkit-transform: scale(0.0);
                transform: scale(0.0);
      }
      50% {
        -webkit-transform: scale(1.0);
                transform: scale(1.0);
      }
    }
    @keyframes mint-root-spinner-double-bounce {
      0%, 100% {
        -webkit-transform: scale(0.0);
                transform: scale(0.0);
      }
      50% {
        -webkit-transform: scale(1.0);
                transform: scale(1.0);
      }
    }
  </style>
  <script>
  	window.TS_WEB = {!! json_encode([
      'api' => $api,
      'url' => $base_url,
      'socketUrl' => $webSocktUrl,
      'im_token' => '',
      'webSocket' => null,
      'loaded' => false,
      'isWeiXin' => false
    ]) !!}
  </script>
</head>
<body id="body-root" onload="hideLoading()">
  <div id="app"></div>
  <section id="root-loading">
    <div id="spinner-root">
      <div id="spinner-root-parent">
        <div class="spinner-root-double-bounce-bounce2"></div>
        <div class="spinner-root-double-bounce-bounce1"></div>
      </div>
    </div>
  </section>
  <script>
    function hideLoading () {
      document.getElementById('root-loading').style.display = 'none';
    }
    // 判断微信浏览器
    function isWeiXin() {
      var ua = window.navigator.userAgent.toLowerCase();
      if (ua.match(/MicroMessenger/i) == 'micromessenger') {
      return true;
    } else {
      return false;
      }
    }
    if(isWeiXin()) {
      TS_WEB.isWeiXin = true;
    }
  </script>
  <script src="{{ \Zhiyi\Component\ZhiyiPlus\PlusComponentWeb\mix('js/app.js') }}"></script>
</body>
</html>