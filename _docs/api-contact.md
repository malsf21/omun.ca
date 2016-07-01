---
layout: doc
title: Contact API
type: API
description: Documentation for the OMUN Contact Information API
---

The OMUN Contact Information API is an endpoint where developers can grab the contact information for OMUN.

Everything is standard: call for the `key`, and the returned `data` will be a `http` link to the social media presence that OMUN has.

This is not a RESTful API.

`data` will look something like this:

```json
"data":[{

    "email" : "omun@ucc.on.ca",

    "facebook" : "https://www.facebook.com/OntarioModelUnitedNations",

    "twitter" : "https://twitter.com/OntarioMUN",

    "instagram" : "https://www.instagram.com/ontariomodelun/",

    "github" : "https://github.com/malsf21/omun.ca",

    "website" : "http://omun.ca"
  }
```
