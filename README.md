# How to embed a Create React App in CakePHP 4 and configure both for development

CakePHP 4 Features: 
    * Baking and implementing a custom Component
    * Example of `collection()` global helper method (.e.g. new Collection ())
    * Using `$this->request->is('ajax')` (a.k.a Detectors)
    * Cors Middleware


## Youtube Video 

[https://youtu.be/MRHbp8xkBJ0](https://youtu.be/MRHbp8xkBJ0)

## Video Timings

00:00 Intro\
01:12 Creating ReactEmbed Component with bake\
02:07 Creating a Controller with bake\
03:11 Create an action in Controller\
04:14 Create a template file\
05:20 Configuring routes\
06:30 Install React App using Create React App\
08:37 Run a React Production Build\
09:19 Deploy React App to CakePHP 4 webroot/\
11:30 Sourcing asset-manifest.json to create embed logic\
13:00 View CakePHP constants in DebugKit Environment Panel\
13:30 Write logic for CSS and JS entrypoints\
15:50 Using CakePHP 4 Collection::reduce() method\
19:53 Configure CSS and JS script tags in template\
20:43 Fix script loading before root div error\
20:30 Modify layout to add entrypoint script to custom block\
23:12 Fix logo not loading using package.json homepage property\
24:50 Configure dev/prod React to request data from CakePHP\
29:30 Create dummy api endpoint\
31:40 Using the $this->request->is("ajax")\
35:00 Make a fetch request from React\
35:58 Setting headers for fetch request\
39:20 Adding Cors Middleware\
42:17 Stopping useEffect running too many times\
46:36 Using npm version patch to version React builds\