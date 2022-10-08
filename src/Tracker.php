<?php

namespace Ezitisitis\LaravelTracking;

class Tracker
{
        public static function googleTagManager()
        {
            return "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','".config('services.google_tag_manager_id')."');</script>
<!-- End Google Tag Manager -->";
        }

        public static function gtm()
        {
            return self::googleTagManager();
        }

        public static function googleTagManagerNoScript()
        {
            return '<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id='.config('services.google_tag_manager_id').'"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->';
        }

        public static function gtmNoScript()
        {
            return self::googleTagManagerNoScript();
        }
}