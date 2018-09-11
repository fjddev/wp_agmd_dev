<?php
$typography->add("body",       "Body", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "General");
$typography->add("h1",         "Heading 1", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "General");
$typography->add("h2",         "Heading 2", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "General");
$typography->add("h3",         "Heading 3", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "General");
$typography->add("h4",         "Heading 4", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "General");
$typography->add("h5",         "Heading 5", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "General");
$typography->add("a",          "Hyperlink", array("color" => ""), "General");

$typography->add(".navbar .nav > li > a",       "Navbar Link", array("color" => "", "font-family" => "", "font-size" => "", "font-weight" => ""), "Nav Bar");
$typography->add(".navbar .nav > li > a:hover", "Navbar Link (Hover)", array("color" => ""), "Nav Bar");

$typography->add(".website-name h3 a, .website-name h3, .website-name a, .website-name", "Website Name", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Website Name");
$typography->add(".website-name h3 span", "Website Name (2nd Line)", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Website Name");

$typography->add(".tagline h4 a, .tagline h4, .tagline a, .tagline", "Tagline", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Tagline");

$typography->add("#textlinks, #textlinks a", "Textlinks", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Text Links");
$typography->add("#textlinks a:hover", "Textlinks (Hover)", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Text Links");

$typography->add(".thumbnail .caption", "Thumbnail Caption", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Thumbnail");

$typography->add(".amazingslider-title-0", "Amazing Slider Title", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Amazing Slider");
$typography->add(".amazingslider-description-0", "Amazing Slider Description", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Amazing Slider");


$typography->add(".fs-slider.fs-wrapper .sl-slider h2", "Fullscreen Slider Title", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Fullscreen Slider");
$typography->add(".fs-slider.fs-wrapper .sl-slider blockquote", "Fullscreen Slider Description", array("font-family" => "", "font-size" => "", "font-weight" => "", "color" => ""), "Fullscreen Slider");


$typography->load();
?>
