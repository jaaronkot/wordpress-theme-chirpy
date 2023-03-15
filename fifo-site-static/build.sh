JEKYLL_ENV=production bundle exec jekyll b
cd _site
git add .
git cm "update"
git push
