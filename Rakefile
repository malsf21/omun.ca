require 'html-proofer'

task default: %w[test]

task :test do
  sh "bundle exec jekyll build"
  options = { :disable_external => true }
  HTMLProofer.check_directory("./_site").run
end
