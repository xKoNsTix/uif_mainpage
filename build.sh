#Before WP

#!/bin/sh
npx sass ./src/sass/style.scss ./dist/style.css
cp ./src/index.html ./dist/

#cp ./src/favicons/*.* ./dist/
cp -R ./src/images ./dist/
cp -R ./src/fonts ./dist/fonts
npx esbuild ./src/js/main.js --bundle --outfile=./dist/main.js  --minify
npx esbuild ./src/js/scroll.js --bundle --outfile=./dist/scroll.js  --minify

#After WP
# px sass ./src/sass/style.scss ./public/wp-content/themes/aaron/style.css
# cp ./src/favicons/*.* ./public/wp-content/themes/aaron
# cp ./src/php/*.* ./public/wp-content/themes/aaron
# cp -R./src/images ./public/wp-content/themes/aaron/images
# cp ./src/wordpress/*.* ./public/wp-content/themes/aaron
# cp -R ./src/fonts ./public/wp-content/themes/aaron/fonts
# npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aaron/js/main.js  --minify