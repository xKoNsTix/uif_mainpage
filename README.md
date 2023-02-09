# Aaron G. Miller's website


## Webdev-Dependencies
`npm install`
 
## Live server / browser syncing
`npx browser-sync dist -w`

### Please note when using browser-sync
On Windows only `build.sh` on/after save will work with browser-sync. So only use clean-build.sh before you deploy.  
On MacOs you can always use clean-build.sh.



## Build
Run `./build` to
* compile sass
* bundle JavaScript
* copy the index-file
* copy the `/images'-folder
* ...


### Clean Build
Run `./clean-build` to build a new dist-folder from scratch.


## Deploy with netlify
If you only need a static site and set up netlify, simply push to main, which then automatically triggers a new deployment.


