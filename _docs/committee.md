---
layout: doc
title: Committee
type: Content
description: A step-by-step walkthrough of how to make or edit an OMUN committee information page.
---
# Creating or Editing Committee Information Pages

Committee information pages are an important part of the delegate experience, and are crucial to both the registration and the conference stages of any Model UN conference. Let's go over what each committee information page needs.

## Requirements of a Committee Information Page

The actual page requires this information:

* The name of the committee, both its title (e.g. `United Nations Human Rights Council`) and its abbreviation (e.g. `UNHRC`)
* Clear description of the goals of the committee
* Clear description of the topics of the committee
* Clear mention of the type of the committee (e.g. `Specialized Agency`)
* The logo or brand image of the committee (primarily for identification and website purposes)
* A link to the Delegate Guide for the Committee (can be edited in once it is finished)

In addition, the website (and my the API) requires this set of information, which overlaps with the previous set of information:

* Committee Title (e.g. `United Nations Human Rights Council`)
* Committee Abbreviation (e.g. `UNHRC`)
* Committee Logo/Brand image
* Committee Type (e.g. `Specialized Agency`)
* Committee Size (e.g. `56`, but this can be a rough estimate)
* Committee Background Guide Filename (e.g. `UNHRC-BACKGROUND-GUIDE-2017.pdf`)
* Committee Blurb (e.g. `The United Nations Human Rights Council deals with Human Rights all over the world.`)

## Creating a Committee Information Page

Now you know how what's needed inside a committee information page, let's get ready to make one!

The omun.ca website uses a framework called `Jekyll`, which turns markdown files into beautiful HTML pages (with some tweaks and adjustments by the developer). This drastically simplifies the process of making a committee information page. Essentially, we can break making a committee information page into three steps: **Formatting the Header**, **Writing the Content**, and **Adding the Resources**. Let's go over all three.

We'll assume that you have a basic text editor, and either a GitHub account or a direct connection to Matthew Wang.

### Formatting the Header

First things first, make a `.md` file (**NOT A `.txt` FILE**), with the **lowercase** abbreviation of your committee (e.g. `unhrc.md`).

In order for `Jekyll` to know to convert your markdown file into a website page, it needs to know a few things, to make the page look awesome, to put it in the right place, and so our API works.

At the beginning of your markdown file, you need to have something that looks like this:

```yml
---
layout: committee
title: United Nations Human Rights Council
short: UNHRC
pic: unhrc.png
type: Specialized Agency
size: "56"
guide: UNHRC-2017.pdf
shortbio: The United Nations Human Rights Council deals with Human Rights all over the world.
---
```

It's very important to follow these directions step by step, or the site will break. Ensure that you have the triple dashes (`---`) at the start and end of your header, and make sure that you follow the layout for each section. I've included a table below that outlines what each section means.


| Section Name | Section Description | Example |
|--------------|---------------------|---------|
| layout | For committee pages, always leave this as `committee`. | `committee` |
| title | The official title of your committee. | `United Nations Human Rights Council` |
| short | The capitalized abbreviation of your committee | `UNHRC` |
| pic | The name of the logo/brand image file of your committee, when placed in `img/committees/`. **Case matters**. | `unhrc.png` |
| type | The type of committee that your committee fits under. There are three options: `General Assembly`, `Specialized Agency`, or `Crisis` | `Specialized Agency` |
| size | The amount of delegates in your committee. This can be a rough estimate, and can be revised later. | `56` |
| guide | The name of the background guide file of your committee, when placed in `files/committees/`. **Case matters**. *If one is not available yet, omit this section*. | `UNHRC-2017.pdf` |
| shortbio | A short, one sentence description of your committee. | The United Nations Human Rights Council deals with Human Rights all over the world. |

This step is as simple as filling out information in a form. For the `pic` and `guide` sections, we can revisit them once we complete step three.

*A note: Delegate Guide is an optional parameter. If it is omitted, a "Background Guide Coming Soon" notice will appear instead.*

### Writing the Content

The next part is fairly simple. As if this was a Word Document, you can write out the paragraphs that displays the aforementioned information about the committee. **Make sure that this is under your header**.

If you want to add **bold**, *italics*, or other stylistic features to your article, you can insert `Markdown` syntax into your article. [Here](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) is a markdown cheatsheet that can help you add features to your article.

*A note: Please do not embed tables, images, or videos in your committee description. It should only consist of formatted text.*

### Adding the Resources

Now that you're done writing your committee information, you need only two more things: a committee image, and an optional background guide.

#### Committee Image

The committee image will appear on the website, the app, and any other service that uses the OMUN API. Because of that, there are several suggestions that you should consider when finding an image:

* The image should preferably be in `.png`, `.jpg`, or `.bmp` format.
* The image should be larger than `256*256` pixels
* The image should be as close as a square as possible
* The image should have a transparent background
* The image should contain the logo of the committee, and optional title text.
* The image's name should be the committee's abbreviation, and in **lowercase**

Once you find your image, you can either place it in this project's `/img/committees/` directory, or include it in your message to Matthew Wang.

*A note: ensure that your image name corresponds with the image name provided in the header.*

#### Committee Background Guide

The committee background guide is an optional task, as it might not be available yet. If it is available, please name it in the format of `COMMITTEE-ABBREVIATION-YEAR`, such as `UNHRC-2017`. It should always be a `.pdf` file.

Once you have your background guide, you can either place it in the project's  `/files/committees/` directory, or include it in your message to Matthew Wang.

*A note: ensure that your background guide name corresponds with the background guide name provided in the header.*

## Submitting

Once you're finished with your committee information page, you have two ways to submit it: a GitHub Pull Request, or a submission to the USG of Communications.

### GitHub Pull Request

The GitHub Pull Request is the preferred way of submitting a file.

Visit the [GitHub repository](https://github.com/malsf21/omun.ca). Navigate to the `/_committees` directory, press the Upload Files button, and drag in your committee.md file. Write a short summary of your changes, and submit.

Then, rinse and repeat for the committee image, and the committee background guide.

The maintainer of the GitHub repo (the USG of communications) will then approve (or deny) your changes in about a day.

### Submission to USG Communications

Send an email to the USG Communications including your committee.md file, your image, and optionally your background guide. USG Communications will receive your submission, edit if needed, and upload it to the site.

This process will take about two days.
