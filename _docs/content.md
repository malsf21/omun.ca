---
layout: doc
title: Content
type: Content
description: A set of guides for all types of content on the website, except ones that are covered in their own article.
---
# Editing Content

Most of the content on this website is displayed as plaintext in the file structure, which makes it very simple to edit, even without coding knowledge. Let's go over how to edit some of the more common pages on the OMUN website.

If you want to add **bold**, *italics*, or other stylistic features to your content, you can insert `Markdown` syntax into your content. [Here](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) is a markdown cheatsheet that can help you add features to your content.

After you're finished with the content, submit your content with the directions under *Submitting Your Content*

## About Page

The About page is very simple to edit. Simply, visit the about.md file, and edit the paragraph content under the `---`.

*Note: The content is written in plaintext and markdown. While tables and other content can be embedded, it is not recommended.*

## FAQ Page

Unlike other pages, editing the FAQ page is slightly different (but still very simple). Head to the `_data/faq.yml` file. Inside, you should see a format similar to this:

```yml
shortabbreviation:
  type: general
  question: Question.
  answer: Answer.

omunwhen:
  type: general
  question: When is OMUN II?
  answer: "OMUN II is held over two days from **April 22nd to April 23rd**."

committeesizes:
  type: committee
  question: What are the sizes of committees at OMUN?
  answer: "Each individual size will have a different committee size, which you can find on our committee page."
```

Simply append your question to the list, and it should appear.

The variable "type" will determine which category which the question appears in. If the type for your question does not exist, please message Matthew Wang and he'll set you up.

*Note: the text in the shortabbreviation should have no spaces.*

*Additional Note: The text in the question and answer is represented in markdown. Please do not embed tables, images or videos.*

## Committee Information Pages

Please visit the [COMMITTEE](committee.html) file to see a full tutorial.

## News Articles

Please visit the [ARTICLE](article.html) file to see a full tutorial.

## Social Media Accounts

Unlike other content, editing the social media accounts (that the site links to) is slightly different (but still very simple). Head to the `_data/contact.yml` file. Find the part of the file that looks like this:

```yml
# Social Media Accounts
facebook: "https://www.facebook.com/OntarioModelUnitedNations"
twitter: "https://twitter.com/OntarioMUN"
instagram: "https://www.instagram.com/ontariomodelun/"
github: "https://github.com/malsf21/omun.ca"
```

Simply, edit the account urls to the ones that you would like to display. The rest of the site will update automatically!

## Team Page

The Team page is very simple to edit. Simply, visit the team.md file, and edit the paragraph content under the `---`.

The content is written in plaintext and markdown. While tables and other content can be embedded, it is not recommended.

# Submitting Your Content

Once you're finished with your content, you have two ways to submit it: a GitHub Pull Request, or a submission to the USG of Communications.

## GitHub Pull Request

The GitHub Pull Request is the preferred way of submitting a file.

Visit the [GitHub repository](https://github.com/malsf21/omun.ca). Navigate to the correct directory, press the Upload Files button, and drag in your file. Write a short summary of your changes, and submit.

The maintainer of the GitHub repo (the USG of communications) will then approve (or deny) your changes in about a day.

### Submission to USG Communications

Send an email to the USG Communications including all of your files. USG Communications will receive your submission, edit if needed, and upload it to the site.

This process will take about two days.
