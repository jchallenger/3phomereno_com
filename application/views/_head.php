<title>CI Template | Motto Mojo</title>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<?php
if(isset($stylesheets)){
    foreach ($stylesheets as $sheet) {
        echo link_tag($sheet);
    }
}
