# Compy Theme
Compy is an attempt at making a componet based theme for Wordpress.  The idea was to break everything into blocks you could compose layouts/templates from like legos.  I also like dinosaurs.

## File structure
**blocks** - this is where all of your componets will go.  Each block should have it's own folder (feel free to nest them) with their own self contained scss, javascript, and php files.   This way everything is all in one place to save you and your co-workers (or the next developer behind you) time and energy.

**css** - most of the style should live within a componet's own container folder.  We do use this folder for compiling the blocks style into a single stylesheet for loading/caching/cdning.  You could also put 'base styles' like fonts, variables, etc into the directories here.

**fonts** - just a nice place to include the font files your site will use.

**functions** - this we have broken up a functions.php file into parts.  Most should be self explainitory and easy to extend for your needs.  *You can see how these are all called in the **functions.php** file in the main root of the theme*

**images** - drop all of your images in the source folder and they will be minified into the images' root.

**js** - similar to css, we use this folder for compiling our blocks javascript down.  -- you can also do "general javascript" or work with vendor code (place this in the nested vendor folder)



