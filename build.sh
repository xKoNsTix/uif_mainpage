#Before WP

#!/bin/sh


npm run build:scss
cp ./src/index.html ./dist/
cp ./src/about.html ./dist/
cp ./src/mail.php ./dist/
cp ./src/contact.html ./dist/
cp ./src/team.html ./dist/


cp ./src/images ./dist/

#cp ./src/favicons/*.* ./dist/
cp -R ./src/assets/images ./dist/assets/img
cp -R ./src/fonts ./dist/fonts
npm run build:assets
npm run build:scripts
# npx esbuild ./src/js/main.js --bundle --outfile=./dist/main.js  --minify
# npx esbuild ./src/js/scroll.js --bundle --outfile=./dist/scroll.js  --minify

#After WP
# px sass ./src/sass/style.scss ./public/wp-content/themes/aaron/style.css
# cp ./src/favicons/*.* ./public/wp-content/themes/aaron
# cp ./src/php/*.* ./public/wp-content/themes/aaron
# cp -R./src/images ./public/wp-content/themes/aaron/images
# cp ./src/wordpress/*.* ./public/wp-content/themes/aaron
# cp -R ./src/fonts ./public/wp-content/themes/aaron/fonts
# npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aaron/js/main.js  --minify
