<?php
if(isset($php_to_js)){
    echo "<script>\n";
    echo "// Following are variables passed from PHP to JS";

    echo "var php_to_js = {\n";
    echo implode(',\n', array_filter($php_to_js, function($n) { return json_encode($n); }));
    echo "};\n";
    echo "</script>";
}

echo script_tag( 'third_party/tether/js/tether.min.js');
//echo script_tag( 'third_party/bootstrap/js/npm.js');
//echo script_tag( 'third_party/bootstrap/js/umd/collapse.js');
echo script_tag( 'third_party/bootstrap/js/bootstrap.min.js');

// Custom Scripts
if(isset($scripts)){
	foreach ($scripts as $script) {
		echo script_tag($script);
	}
}