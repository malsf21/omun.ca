---
layout: doc
title: Setup
type: Developer
description: A step-by-step walkthrough of how to setup this website on a local development machine.
---
# Setup

Want to run your own copy of this jekyll site? No problem. You'll need a few things:

* [Ruby](https://www.ruby-lang.org/en/), to install [Bundler](https://bundler.io/) which installs our dependencies ([Jekyll](https://jekyllrb.com), [Rake](https://ruby.github.io/rake/), [html-proofer](https://github.com/gjtorikian/html-proofer))
* [Git](https://git-scm.com/), to clone this repository
* A Browser, to view the website of course!

First things first, we need to install bundler, which installs RubyGems dependencies in a cool way.

Type in your command line:
```bash
$ gem install bundler
```

After Bundle is installed, clone the git repository:
```bash
$ git clone https://github.com/malsf21/omun.ca.git
```

Then, cd into the repository:
```bash
$ cd omun.ca
```

After that, we'll run Bundler inside our root directory.

```bash
$ bundle
```

Now, all you'll need to do is "serve" the site. Type the following into your command line:
```bash
$ bundle exec jekyll serve
```

After that, you should get a response that looks something like this:

```bash
$ jekyll serve
Configuration file: /Users/matthew.wang/github/omun.ca/_config.yml
            Source: /Users/matthew.wang/github/omun.ca
       Destination: /Users/matthew.wang/github/omun.ca/_site
 Incremental build: disabled. Enable with --incremental
      Generating...
                    done in 0.605 seconds.
 Auto-regeneration: enabled for '/Users/matthew.wang/github/omun.ca'
Configuration file: /Users/matthew.wang/github/omun.ca/_config.yml
    Server address: http://127.0.0.1:4000/
  Server running... press ctrl-c to stop.

```

Visit what follows the "Server address:" line (which is normally http://127.0.0.1:4000/).

And voila! Everything should work for you. If something isn't, please let me know on our [issues tracker](https://github.com/malsf21/omun.ca/issues).

Addendum: we use rake and html-proofer in our testing process. Run `rake test` to check if your code compiles well, and if the HTML is standards-compliant.
