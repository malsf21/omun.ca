---
layout: doc
title: Posts API
type: API
description: Documentation for the OMUN Posts API
---

The OMUN Posts API is an endpoint where developers can grab information about the OMUN News Updates, including author, content, and tags.

The `structure` of the API endpoint is as follows:

```json
"structure":{
  "title" : "Post Title",
  "author" : "Post Author",
  "date" : "Post Date",
  "short": "Short Post Title",
  "content" : "Post Content",
  "tags" : "Post Tags",
  "excerpt": "Post Excerpt",
  "permalink" : "Post Permalink"
}
```

*Notes:*

* `title` is the full title of the post
* `author` is the author of the post
* `date` is the UTC timestamp of the post release
* `short` is the hyphenated short post tile
* `content` contains the **HTML-escaped** content of the post, with all relative links converted to permalinks.
* `tags` contains the tags of the post
* `excerpt` is a string excerpt of the post
* `permalink` is the `http` post permalink

Here's an example of the `data` output:

```json
{
  "title": "Welcome to the OMUN Website!",
  "author": "Matthew Wang",
  "date": "2016-06-27 00:00:00 -0400",
  "short": "Welcome-To-Website",
  "content": "&lt;p&gt;Welcome to the OMUN website! Here youâ€™ll find information about Ontario Model United Nations, a Model United Nations simulation held at Upper Canada College. Youâ€™ll learn more about the committees available, general conference information, and about the OMUN staff that works tirelessly to ensure that OMUN is the best conference that it can be!&lt;/p&gt;&lt;p&gt;Iâ€™m Matthew Wang, your Under-Secretary General of Communications. Iâ€™m also the lead website designer for OMUN, and Iâ€™m happy to try my best to make this website (and the conference) to be the best that it can be! If you have any questions, feel free to send me an email at &lt;a href=&quot;&amp;#109;&amp;#097;&amp;#105;&amp;#108;&amp;#116;&amp;#111;:&amp;#109;&amp;#097;&amp;#116;&amp;#116;&amp;#104;&amp;#101;&amp;#119;&amp;#046;&amp;#119;&amp;#097;&amp;#110;&amp;#103;&amp;#064;&amp;#117;&amp;#099;&amp;#099;&amp;#046;&amp;#111;&amp;#110;&amp;#046;&amp;#099;&amp;#097;&quot;&gt;&amp;#109;&amp;#097;&amp;#116;&amp;#116;&amp;#104;&amp;#101;&amp;#119;&amp;#046;&amp;#119;&amp;#097;&amp;#110;&amp;#103;&amp;#064;&amp;#117;&amp;#099;&amp;#099;&amp;#046;&amp;#111;&amp;#110;&amp;#046;&amp;#099;&amp;#097;&lt;/a&gt;. If youâ€™re wondering how Iâ€™ve made this website, you can find our repository &lt;a href=&quot;https://github.com/malsf21/omun.ca&quot;&gt;on GitHub&lt;/a&gt;.&lt;/p&gt;",
  "tags": "site",
  "excerpt": "Welcome to the OMUN website! Here youâ€™ll find information about Ontario Model United Nations, a Model United Nations simulation held at Upper Canada College. Youâ€™ll learn more about the committees available, general conference information, and about the OMUN staff that...",
  "permalink" : "http://omun.ca/2016/06/27/welcome-to-the-omun-website.html"
}
```
