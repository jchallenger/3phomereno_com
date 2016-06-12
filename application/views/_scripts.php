<?php
if(isset($php_to_js)){
    echo "<script>\n";
    echo "// Following are variables passed from PHP to JS\n";

    echo "var php = {\n";
    echo implode(",\n", array_map( function($k, $n) { return "\"" . $k . "\": " . json_encode($n); }, array_keys($php_to_js), array_values($php_to_js)));
    echo "};\n";
    echo "</script>\n";
}

if(isset($scripts)){
    foreach ($scripts as $scr) {
        echo script_tag($scr);
    }
}
