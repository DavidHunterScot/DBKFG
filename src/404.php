<?php

$page_title = 'Not Found (404)';
$friendly_urls = false;

$page_content = function()
{
?>

<h2>Not Found (404)</h2>

<p>The resource you tried to access cannot be found.</p>

<ul>
    <li>Check the URL in the address bar of your web browsing software for any typing errors.</li>
    <li>Have a look around the website to see if you can find the resource. The <a href="/">home</a> page is a good place to start.</li>
    <li>(Optionally) If you clicked a hyperlink or button on another resource, that could now be considered outdated. Please let them know about this so it can be updated or removed accordingly.</li>
</ul>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
