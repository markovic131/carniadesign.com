<?php

//Get the current language if exists
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

//Check if the selected language is valid
if(!in_array($lang,['en','mk'])) {
    $lang = 'en';
}

function to_rand_ascii($chr){
    switch (mt_rand(1, 3)) {
    case 1:
        return "&#" . ord($chr) . ";";
        break;
    case 2:
        return "&#000" . ord($chr) . ";";
        break;
    default:
        return "&#x" . dechex(ord($chr)) . ";";
    }
}

function mungemail($str_email, $str_display = null, $bln_link = true){

    $str_mailto = '';
    $str_encoded_email = '';

    for ($i = 0; $i < strlen($str_email); $i++) {
        $str_encoded_email .= to_rand_ascii(substr($str_email, $i));
    }
    if (strlen(trim($str_display)) > 0) {
        $str_display = $str_display;
    } else {
        $str_display = $str_encoded_email;
    }
    for ($i = 0; $i < strlen('mailto:'); $i++) {
        $str_mailto .= to_rand_ascii(substr('mailto:', $i, 1));
    }
    return '<a href="mailto:'.$str_display.'">'.$str_display.'</a>';
}

// echo '<nav class="navbar navbar-default navbar-fixed-top" role="navigaion">
//     <div class="container">
//         <div class="navbar-header">
//             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
//                 <span class="icon-bar"></span>
//                 <span class="icon-bar"></span>
//                 <span class="icon-bar"></span>
//             </button>
//             <!-- <a class="navbar-brand" href="/">
//                 CarniaDesign
//             </a> -->
//         </div>
//         <div class="navbar-collapse collapse">
//             <ul class="nav navbar-nav navbar-right" id="navigation">
//                 <li><a href="/#features">Services</a></li>
//                 <li><a href="/#features">Contact</a></li>
//             </ul>
//         </div>
//     </div>
// </nav>';