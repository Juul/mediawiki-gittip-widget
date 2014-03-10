This is a very simple mediawiki extension that makes it possible for users to embed [Gittip](https://gittip.com) [widgets](https://github.com/gittip/gttp.co) in articles. 

# Installation #

Download the extension and unzip:

```
cd /tmp
wget https://github.com/juul/mediawiki-gittip-widget/archive/master.zip
unzip master.zip
```

Move the extension to your mediawiki extensions directory, e.g:

```
sudo mv mediawiki-gittip-widget-master /var/www/mysite.org/public_html/mediawiki/extensions/GittipWidget
```

Set ownership, e.g:


```
cd /var/www/mysite.org/public_html/mediawiki
sudo chown www-data.www-data -R extensions/GittipWidget
```

Add the following line to the bottom of your mediawiki/LocalSettings.php file:

```
require_once( "$IP/extensions/GittipWidget/GittipWidget.php" );
```

The Gittip widget extension should now be installed! Try loading your wiki in a browser to ensure that it still works.

# Usage #

To add a widget to an article on your wiki, edit the article and add the following where you want to place the widget:

```
<gittip>username</gittip>
```

Replace username with the name of the gittip account you want so show.

# ToDo #

The widget javascript is included once even if the current page/article does not have any gittip widgets. This could be fixed.

Being able to set padding and float would be nice.

# License #

Simplified BSD license.

# Appreciation #

If you like what I do, you can [tip me on gittip](https://gittip.com/juul) :)
