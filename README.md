# Matomo SimpleVue Plugin

## Description

I created this SimpleVue project to demonstrate Vue Workflow in Matomo.

And to point out some bugs in the development process.

Hopefully, we can collaborate to get a better Developer Experience(DX).


### Steps done to create this plugin

Create Plugin:
```bash
$ ./console generate:plugin
Enter a plugin name: SimpleVue
Enter a plugin description: Demonstrate Workflow and fix issues.
Enter a plugin version number (default to 0.1.0):

Plugin SimpleVue 0.1.0 generated.
Our developer guides will help you developing this plugin, check out https://developer.matomo.org/guides
To see a list of available generators execute ./console list generate
Enjoy!
```

### Generate Vue Component
```bash
$ ./console generate:vue-component
Enter the name of your plugin: SimpleVue
Enter the name of the component you want to create: SimpleVueComponent

Vue component "SimpleVueComponent" for plugin "SimpleVue" in "/usr/local/var/www/matomo/plugins/SimpleVue/vue/src/SimpleVueComponent.vue" generated
You should now build the vue library using the vue:build command (use --watch to continuously build after making changes).
```

### Create a page to render our templates

But first!
```bash
$ ./console generate:controller
Enter the name of your plugin: SimpleVue

Controller for SimpleVue generated.
You can now start adding Controller actions
Enjoy!
```
### I haven't found a generator for templates, but this will do for now:
```bash
$ mkdir templates
$ cp plugins/ExamplePlugin/templates/index.twig plugins/SimpleVue/templates/index.twig
```


## My issue

Compile Vue assets for production:
```bash

```

