mwcouchbase
===========
Deploy a php app which connects to a couchbase server on cloudControl. 

Followed the steps on https://www.cloudcontrol.com/blog/self-compiled-php-libraries-cloudControl, 
I created a php app which connects to a public couchbase server (already terminated).

I used the [CouchBase C-Client version 2.4](http://docs.couchbase.com/developer/c-2.4/download-install.html)
and [CouchBase PHP SDK version 2.0.2](http://docs.couchbase.com/developer/php-2.0/download-links.html)

You can git clone this repo and use the pre-compiled libraries (for cloudControl pinky stack) and config file.

## Create the app on cloudControl
~~~bash
cctrlapp APP_NAME create php
cctrlapp APP_NAME/default config.add SET_ENV_VARS=True
cctrlapp APP_NAME/default config.add LD_LIBRARY_PATH=/app/code/lib 
cctrlapp APP_NAME/default push
cctrlapp APP_NAME/default deploy
~~~
