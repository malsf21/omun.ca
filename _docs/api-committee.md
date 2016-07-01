---
layout: doc
title: Committee API
type: API
description: Documentation for the OMUN Committee Information API
---

The OMUN Committee Information API is an endpoint where developers can grab individual committee information for each committee in OMUN.

The `structure` of the API endpoint is as follows:

```json
"structure":{
  "name" : "Committee Name",
  "short" : "Committee Acronym",
  "type" : "Committee Type",
  "size" : "Committee Delegate Size",
  "guide" : "Delegate Guide Location",
  "shortbio" : "Short description of committee.",
  "content" : "Committee description, and the lead paragraph text on website.",
  "permalink" : "Website permalink of committee.",
  "image" : "Website permalink of committee picture."
}
```

*Notes:*

* `name` is the full, official title of the committee
* `short` is the uppercase acronym of the committee
* `type` has three possible values: General Assembly, Specialized Agency, or Crisis
* `size` is either a positive integer or "Coming Soon"
* `guide` is either a `http` link to the guide or "none"
* `shortbio` is a string-description of the committee
* `content` contains the **HTML-escaped** content of the committee page, with all relative links converted to permalinks.
* `permalink` is the `http` committee permalink
* `image` is the `http` image permalink

Here's an example of the `data` output:

```json
{
  "name": "Disarmament and International Security Committee",
  "short": "DISEC",
  "type": "General Assembly",
  "size": "Coming Soon",
  "guide":"none",
  "shortbio": "The Disarmament and International Security Committee deals with disarmament, global challenges and threats to peace that affect the international community and seeks out solutions to the challenges in the international security regime.",
  "content": "&lt;p&gt;The Disarmament and International Security Committee deals with disarmament, global challenges and threats to peace that affect the international community and seeks out solutions to the challenges in the international security regime.&lt;/p&gt;&lt;p&gt;Information on position papers, topics, and committee sizes are coming soon!&lt;/p&gt;",
  "permalink": "http://omun.ca/committees/disec.html",
  "image": "http://omun.ca/img/committees/disec.png"
}
```
