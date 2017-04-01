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

Falls Sie Fehler gefunden, Wünsche oder Verbesserungsvorschläge haben, 
können Sie uns gern per Mail an support@pcsg.de darüber informieren.  
Wir werden versuchen auf Ihre Wünsche einzugehen bzw. diese an die 
zuständigen Entwickler des Projektes weiterleiten.

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