# Madon-Website

This is a version of the template i use for my website. It is created with simple features that i just needed, such as a viewport size sensitive image grid, and some CSS stuff.

It is powered with PHP.

## Screenshots

![](https://github.com/patjennings/Madon-Website/blob/master/screenshots/thomasguesnon_1.png)

![](https://github.com/patjennings/Madon-Website/blob/master/screenshots/thomasguesnon_2.png)

![](https://github.com/patjennings/Madon-Website/blob/master/screenshots/thomasguesnon_3.png)

## Add image-based projects with XML

	<?xml version=« 1.0 » encoding=« UTF-8 »?>
	<items>
		<item type=« project » tags=« Maps / Data visualisation »>
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
    	<items>
		

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
