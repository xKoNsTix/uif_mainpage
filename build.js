// This is a script for WP Buildpipeline. It will watch the public folder for changes and will refresh after a change. 
// Since browsersync only works for static html sites it is not working for WP.
// Dependencies: NPM Esbuild, NPM Browsersync and a build script of your choice, preferably "build.sh" like we used to have it




const browserSync = require("browser-sync");
const { exec } = require("child_process");

const browsersync = browserSync({
  proxy: "http://tokowa.localhost",
  files: ["dist"],
  watchOptions: {
    ignoreInitial: true,
  },
  callbacks: {
    files: { changed(event, file) {
      // Run the build script
      exec("sh build.sh", (error, stdout, stderr) => {
        console.log("Building after file change");
        if (error) {
          console.error(`exec error: ${error}`);
          return;
        }

        // Reload the page after the build script has completed
        setTimeout(() => {
          console.log("Reloading after file change");
          browsersync.reload();
        }, 1); //set a delay if something is not working properly
      });
    } },
  },
});