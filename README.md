# Ontario Model United Nations Website

Hey there, you've visited the repository of the Ontario Model United Nations website! Here you can see how all of our code works, and take a sneak peek of new features.

The test and development version of this website, in `master`, is hosted at [my website](http://matthewwang.me/omun/). It'll have the latest working version of master.

~~The official, `stable` version of the website is in the `stable` branch, and is hosted at [omun.ca](http://omun.ca/)~~ Currently no stable branch, since I'm reworking from scratch.

The "coming-soon" landing page is in the `coming-soon` branch, and is what is currently at [omun.ca](http://omun.ca/).

This website uses [Jekyll](https://jekyllrb.com), a static-site generator, [Bootstrap](https://getbootstrap.com), a CSS library, and [jQuery](http://jquery.com), a Javascript Library, among other small tools to make this website as awesome as it is!

## Setup

Want to run your own copy of this jekyll site? No problem. You'll need a few things:

* [Ruby](https://www.ruby-lang.org/en/), to install [Jekyll](https://jekyllrb.com)
* [Jekyll](https://jekyllrb.com), to build and run the website
* [Git](https://git-scm.com/), to clone this repository
* A Browser, to view the website of course!

First things first, we need to install Jekyll. We assume that you have Git and Ruby installed. If you don't, please visit the links above to install them. We also assume you're using a [Unix-based system](https://en.wikipedia.org/wiki/Unix); if you aren't, follow jekyll's alternatives instruction page.

Type in your command line:
```ruby
gem install jekyll
```

After Jekyll completes its setup, clone the git repository:
```
git clone https://github.com/malsf21/omun.ca.git
```

Then, cd into the repository: 
```
cd omun.ca
```

Inside the repository, all you'll need to do is "serve" the site. Type the following into your command line:
```
jekyll serve
```

After that, you should get a response that looks something like this:

```
jekyll serve
Configuration file: /Users/matthew.wang/github/omun.ca/_config.yml
            Source: /Users/matthew.wang/github/omun.ca
       Destination: /Users/matthew.wang/github/omun.ca/_site
 Incremental build: disabled. Enable with --incremental
      Generating... 
                    done in 0.605 seconds.
 Auto-regeneration: enabled for '/Users/matthew.wang/github/omun.ca'
Configuration file: /Users/matthew.wang/github/omun.ca/_config.yml
    Server address: http://127.0.0.1:4000/omun/
  Server running... press ctrl-c to stop.

```

Visit what follows the "Server address:" line (which is normally [http://127.0.0.1:4000/omun/](http://127.0.0.1:4000/omun/), but that might change soon)!

And voila! Everything should work for you. If something isn't, please let me know on our [issues tracker](https://github.com/malsf21/omun.ca/issues).
