# Madon-Website

This is a version of the template i use for my website. It is created with simple features that i just needed, such as a viewport size sensitive image grid, and some CSS stuff.

It is powered with PHP.

## Screenshots

## Add image-based projects with XML

	<?xml version=« 1.0 » encoding=« UTF-8 »?>
<items>
	<item type=« text » tags=« Maps / Data visualisation »>
	    <id>28</id>
        <title>About</title>
        <titleraw>about</titleraw>
        <text>files/about.md</text>
        <thumb>files/thumbnails/text_default.png</thumb>
        <backgroundcolor></backgroundcolor>
        <theme>dark</theme>
		<width>600</width>
		<date></date>
    </item>
    <!—<item type=« text » tags=« Maps / Data visualisation »>
	    <id>28</id>
        <title>Sample</title>
        <titleraw>sample</titleraw>
        <text>files/sample.md</text>
        <thumb>files/thumbnails/text_default.png</thumb>
        <backgroundcolor></backgroundcolor>
        <theme>light</theme>
		<width>600</width>
		<date></date>
    </item>—>
	<item type=« project » tags=« Maps / Data visualisation »>
	    <id>25</id>
        <title>Title</title>
        <titleraw>machine-readable-title-gor-url</titleraw>
        <text><![CDATA[Some description for your project.]]></text>
        <thumb>files/thumbnails/osm_style.jpg</thumb>
        <images>
					<image width=« 800 » height=« 600 »>files/osm_style/image-1.jpg</image>
					<image width=« 800 » height=« 600 »>files/osm_style/image-2.jpg</image>
        </images>
        <backgroundcolor>#0b0b13</backgroundcolor>
        <theme>dark</theme>
		<width>800</width>
		<date>15-11-2015</date>
    </item>

## Include simple articles written with Markdown

	<item type=« text » tags=« Maps / Data visualisation »>
	    <id>28</id>
        <title>About</title>
        <titleraw>about</titleraw>
        <text>files/about.md</text>
        <thumb>files/thumbnails/text_default.png</thumb>
        <backgroundcolor></backgroundcolor>
        <theme>dark</theme>
		<width>600</width>
		<date></date>
    </item>

## clean URLs with url_rewrite
