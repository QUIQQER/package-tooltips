Tooltips
========

QUIQQER Tooltips basierend auf https://github.com/ytiurin/html5tooltipsjs


Paketname:

    quiqqer/tooltips


Features (Funktionen)
--------


Installation
------------

Der Paketname ist: quiqqer/tooltips


Mitwirken
----------

- Issue Tracker: https://dev.quiqqer.com/quiqqer/package-tooltips/issues
- Source Code: https://dev.quiqqer.com/quiqqer/package-tooltips


Support
-------

Falls Sie ein Fehler gefunden haben, oder Verbesserungen wünschen,
dann können Sie gerne an support@pcsg.de eine E-Mail schreiben.


Lizenz
-------

MIT

Entwickler
--------

```javascript

require(['html5tooltips'], function(html5tooltips) {
    html5tooltips({
        animateFunction: "spin",
        color          : "tangerine",
        stickTo        : "top",
        contentText    : text,
        targetSelector : '#' + id
    });
});

```


```html
<div data-tooltip="My Alt Text"></div>
```