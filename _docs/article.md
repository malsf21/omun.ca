---
layout: doc
title: Article
type: Content
description: A step-by-step walkthrough of how to write an OMUN News Article.
---
# Creating a News Article

News Articles are an important part of the website: they provide a medium where the conference and its administration can update delegates on conference information, registration, and create a consumer-organisation relationship.

## Requirements of a News Article

The actual article requires this information:

* A title for the article, which gives a clear idea of what the article is about
* The content of the news article
* An author of the article, including the author's full name
* A tag for the category that the article fits in best

In addition, the website (and my the API) requires this set of information, which overlaps with the previous set of information:

* Article Title (e.g. `Welcome to the OMUN Website`)
* Article Abbreviation, **No Spaces**, (e.g. `Welcome-To-Website`)
* Article Date (In UTC format, YYYY-MM-DD HH:MM:SS Time Zone, e.g. `2016-05-26 12:01:21 -0400`)
* Article Author (e.g. `Matthew Wang`)
* Article Tag (e.g. `site`)

## Creating a News Article

Now you know how what's needed inside a News Article, let's get ready to make one!

The omun.ca website uses a framework called `Jekyll`, which turns markdown files into beautiful HTML pages (with some tweaks and adjustments by the developer). This drastically simplifies the process of making a News Article. Essentially, we can break making a News Article into two steps: **Formatting the Header**, and **Writing the Content**. Let's go over them both.

We'll assume that you have a basic text editor, and either a GitHub account or a direct connection to Matthew Wang.

### Formatting the Header

First things first, make a `.md` file (**NOT A `.txt` FILE**), with following format: `YYYY-MM-DD-short-name` (e.g. `2016-05-30-welcome-to-website.md`).

In order for `Jekyll` to know to convert your markdown file into a website page, it needs to know a few things, to make the page look awesome, to put it in the right place, and so our API works.

At the beginning of your markdown file, you need to have something that looks like this:

```yml
---
layout: post
title:  "Welcome to the OMUN Website!"
short: "Welcome-To-Website"
date:   2016-05-26 12:01:21 -0400
author: Matthew Wang
tags: site
---
```

It's very important to follow these directions step by step, or the site will break. Ensure that you have the triple dashes (`---`) at the start and end of your header, and make sure that you follow the layout for each section. I've included a table below that outlines what each section means.


| Section Name | Section Description | Example |
|--------------|---------------------|---------|
| layout | For news articles, always leave this as `post`. | `post` |
| title | The official title of your news article. | `Welcome to the OMUN Website` |
| short | The abbreviated name of your article, **with no spaces** | `Welcome-To-Website` |
| date | The date, **formatted in UTC format**: YYYY-MM-DD HH:MM:SS Time Zone | `2016-05-26 12:01:21 -0400` |
| author | The author of the post. | `Matthew Wang` |
| tags | The tag/category that your post fits under, `site`, `registration`, etc. **Lowercase** | `site` |

*A note: Make sure that the date is formatted correctly. If it is formatted incorrectly, it will not appear on the site.*

### Writing the Content

The next part is fairly simple. As if this was a Word Document, you can write out the paragraphs that displays the aforementioned news update. **Make sure that this is under your header**.

If you want to add **bold**, *italics*, or other stylistic features to your article, you can insert `Markdown` syntax into your article. [Here](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) is a markdown cheatsheet that can help you add features to your article.

*A note: Please do not embed tables, images, or videos in your news article. It should only consist of formatted text. If you'd like to link to an image, video, or table: that's fine.*

## Submitting

Once you're finished with your News Article, you have two ways to submit it: a GitHub Pull Request, or a submission to Matthew Wang.

### GitHub Pull Request

The GitHub Pull Request is my preferred way of submitting a file.

Visit the [GitHub repository](https://github.com/malsf21/omun.ca). Navigate to the `/_posts` directory, press the Upload Files button, and drag in your article.md file. Write a short summary of your changes, and submit.

Matthew Wang will then approve (or deny) your changes in about a day.

### Submission to Matthew Wang

Send an email to Matthew Wang including your article.md file, your image, and optionally your background guide. Matthew Wang will receive your submission, edit if needed, and upload it to the site.

 This process will take about two days.
