// GeoAlbum.js. Inspired by Tom MacWright's Big, partly based on Weenote, written by Ilya Zverev. Licensed WTFPL.

var geoAlbumInitialized = false;
window.onload = function() { initGeoAlbum(); }

function initGeoAlbum() {
    if (geoAlbumInitialized) return;
    geoAlbumInitialized = true;

    var prevText = ' ';
    var nextText = ' ';
    var detailZoom = 15;
    var overviewZoom = 6;

    var body = document.body;
    var pages = {};
    var page;
    var content;
    var TitleContent;
    var footer;
    var pageMarkersLayer = L.layerGroup();
    var photoMarkers = {};
    var currentDetailLayer;
    var overviewMap, detailMap;
    var sidebarContent = '<h1>Navigation</h1>';

    function process(page, idx) {
        //console.log('prozess gestartet');
        // find all coordinates, also mark photos
        var lat = 0.0,
            lon = 0.0;
        //var photoIndices = 'ABCDEFGHIJKLMN';
        var photoIdx = 0;
        var photoLayer = L.layerGroup();
        var children = page.childNodes;

        var title = page.getElementsByTagName('h1');
        TitleContent = title[0].innerHTML;

        for (var i = 0; i < children.length; i++) {
            //console.log('Schleife für ChildNodes gestartet.');
            var child = children[i];
            if (child.nodeType != 1) {
                //console.log('continue');
                continue
            };
            /*var images = child.getElementsByTagName('img');
            if (images.length > 0) {
                child.className = 'div-p ' + child.className;
                child.style.overflowX = 'auto';
            }*/
            if (child.hasAttribute('lat') && child.hasAttribute('lon') && child.classList.contains("headerImage")) {
                //console.log('Bild hat Koordinaten!');
                var plat = +child.getAttribute('lat');
                var plon = +child.getAttribute('lon');
                lat = parseFloat(plat);
                lon = parseFloat(plon);
                //console.log(idx + '|| Lat: ' + lat + ', Lon: ' + lon);
                var letter = photoIdx++;
                photoLayer.addLayer(L.letterMarker([plat, plon], letter, { clickable: false, color: '#715a9c' }));
                //console.log('Bild wurde der Karte hinzugefügt.');

                var letterDiv = document.createElement('div');
                letterDiv.className = 'photoidx';
                //letterDiv.appendChild(document.createTextNode(letter));
                var nummerTag = document.createElement('p');
                nummerTag.appendChild(document.createTextNode(idx));
                letterDiv.appendChild(nummerTag);
                child.insertBefore(letterDiv, child.firstChild);
                //console.log('Bildernummerierung hinzugefügt');
            }
        }
        if (photoIdx > 0)
            photoMarkers[idx] = photoLayer;

        if (page.hasAttribute('lat') && page.hasAttribute('lon')) {
            lat = +page.getAttribute('lat');
            lon = +page.getAttribute('lon');
        } else if (photoIdx > 0) {
            lat /= photoIdx;
            lon /= photoIdx;
        }
        if (lat !== 0) {
            pageMarkersLayer.addLayer(
                L.letterMarker([lat, lon], idx)
                .on('click', function() { window.location.hash = idx })
                .bindTooltip(TitleContent)
            );
        }

        // Add navigation links



        var nav = '';
        if (idx > 1) nav += '<a class="navleft" href="#' + (+idx - 1) + '">' + prevText + '</a>';
        nav += '<h1>' + TitleContent + '</h1>';
        if (idx < count) nav += '<a class="navright" href="#' + (+idx + 1) + '">' + nextText + '</a>';
        nav += '</div>';
        page.innerHTML = '<div class="nav navbar">' + nav + '<div style="clear: both;"></div>' + page.innerHTML;
    }

    function setSidebar(page, idx) {
        var title = page.getElementsByTagName('h1');
        //console.log(title[0].innerHTML);
        sidebarContent += '<a href="#' + idx + '">' + TitleContent + '</a> ';
    }

    function zoomOnLayerGroup(map, layer) {
        var clat = 0.0,
            clon = 0.0,
            ccount = 0;
        layer.eachLayer(function(m) {
            clat += m.getLatLng().lat;
            clon += m.getLatLng().lng;
            ccount++;
        });
        if (ccount > 0)
            map.panTo([clat / ccount, clon / ccount]);
    }

    for (var d, count = 0; d = body.firstChild;) {
        if (d.nodeType == 1 && d.localName != 'script') pages[++count] = d;
        body.removeChild(d);
    }
    for (var p in pages) {
        process(pages[p], p);
        setSidebar(pages[p], p);
    };
    //console.log("p: " + p + ". pages: " + pages);
    // body.innerHTML = '<div id="content"></div><div id="maps"><div id="overviewmap"></div><div id="detailmap"></div></div>';
    body.innerHTML = '';
    //body.innerHTML += '<div class="topnav" id="nav"><a id="info" href="#Info"><b>Info</b></a><a id="news" href="#News"><b>News</b></a></div>';
    body.innerHTML += '<div id="container"><div id="content"></div><div id="maps"><div id="overviewmap"></div></div><div id="sidebar">' + sidebarContent + '</div><div id="footer"></div></div>';

    footer = document.getElementById('footer');
    footerContent = '<section>Storymap by <a target="_blank" href="https://www.laura-lou.com">LauraLou</a></section>';
    footerContent += '<section>Storymap-Plugin by <a href="https://github.com/Zverik/geoalbum" target="_blank">Zverik (Geoalbum)</a></section>';
    footerContent += '<section><a href="#" data-featherlight="src/LeafletPlugins.html" >Weitere Plugins</a></section>';
    footer.innerHTML = footerContent;

    content = document.getElementById('content');
    content.appendChild(document.createComment(''));

    var overviewMap = L.map('overviewmap', { keyboard: false, attributionControl: false }).setView([51.08342, 10.423447], overviewZoom);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 22,
        minZoom: 1
    }).addTo(overviewMap);
    L.control.attribution({ position: 'topright' }).addTo(overviewMap);

    var flight = {
        color: '#588157',
        fillColor: 'rgb(145, 146, 150)',
        opacity: 0.8,
        weight: 4,
        steps: 6
    };

    const FRA = { lat: 50.0342, lng: 8.55361 }; //FRA
    const AUC = { lat: -37.0079, lng: 174.788 }; //AUC

    const geodesicLine = new L.Geodesic([FRA, AUC], flight).addTo(overviewMap);

    if (typeof overviewLayer != 'undefined')
        overviewMap.addLayer(overviewLayer);
    overviewMap.addLayer(pageMarkersLayer);
    zoomOnLayerGroup(overviewMap, pageMarkersLayer);

    /*var detailMap = L.map('detailmap', { keyboard: false }).setView([60, 30], detailZoom);
    L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 18,
        minZoom: 13
    }).addTo(detailMap);
    if (typeof detailLayer != 'undefined')
        detailMap.addLayer(detailLayer);*/

    ! function sync() {
        setTimeout(sync, 50);
        var next = 0 | location.hash.match(/\d+/);
        next = Math.max(Math.min(count, next), 1);
        if (page == next) return;
        location.hash = page = next;
        content.replaceChild(pages[page], content.firstChild);
        window.scrollTo(0, 0);
        // if (overviewMap && detailMap) {
        if (overviewMap) {
            pageMarkersLayer.eachLayer(function(m) {
                m.setColor(m.options.letter == page ? '#0b6f32' : '#715a9c');
                if (m.options.letter == page)
                //overviewMap.panTo(m.getLatLng());
                    overviewMap.flyTo(m.getLatLng(), 10, {
                    animate: true
                });
            });
            /* if (currentDetailLayer)
                 detailMap.removeLayer(currentDetailLayer);
             if (page in photoMarkers) {
                 currentDetailLayer = photoMarkers[page];
                 detailMap.addLayer(currentDetailLayer);
                 zoomOnLayerGroup(detailMap, currentDetailLayer);
                 detailMap.setZoom(detailZoom);
                 document.getElementById('detailmap').style.visibility = 'inherit';
             } else
                 document.getElementById('detailmap').style.visibility = 'hidden';*/
        }

        var galerien = $("a[class^='gallery']");
        // console.log(galerien);
        galerien.featherlightGallery({
            previousIcon: '<i class="fa fa-arrow-circle-left fa-lg"></i>',
            /* Code that is used as previous icon */
            nextIcon: '<i class="fa fa-arrow-circle-right fa-lg"></i>',
            /* Code that is used as next icon */
            galleryFadeIn: 100,
            /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300 /* fadeOut speed before slide is loaded */
        });

        $.featherlightGallery.prototype.afterContent = function() {
            debugger
            var caption = this.$currentTarget.find('img').attr('alt');
            this.$instance.find('.caption').remove();
            $('<div class="caption">').text(caption).appendTo(this.$instance.find('.featherlight-content'));
        };
    }();

    document.onkeydown = function(e) {
        var next = e.which == 39 ? page + 1 : e.which == 37 ? page - 1 : page;
        if (next in pages)
            location.hash = next;
    }
}

L.LetterMarker = L.Marker.extend({
    options: {
        letter: 'A',
        color: '#715a9c',
        riseOnHover: true,
        icon: new L.DivIcon({ popupAnchor: [2, -2] })
    },

    initialize: function(latlng, letter, options) {
        L.Marker.prototype.initialize.call(this, latlng, options);
        this.options.letter = letter;
    },

    _initIcon: function() {
        var options = this.options,
            map = this._map,
            animation = (map.options.zoomAnimation && map.options.markerZoomAnimation),
            classToAdd = animation ? 'leaflet-zoom-animated' : 'leaflet-zoom-hide';

        if (!this._icon) {
            var div = document.createElement('div');
            div.innerHTML = '' + options.letter + '';
            div.className = 'leaflet-marker-icon';
            div.style.marginLeft = '-7px';
            div.style.marginTop = '-7px';
            div.style.width = '15px';
            div.style.height = '15px';
            div.style.borderRadius = '7px';
            div.style.fontSize = '10px';
            div.style.fontFamily = 'sans-serif';
            div.style.fontWeight = 'bold';
            div.style.textAlign = 'center';
            div.style.lineHeight = '15px';
            div.style.cursor = options.clickable ? 'hand' : 'default';
            div.style.color = 'white';
            div.style.backgroundColor = options.color;
            this._icon = div;

            if (options.title) {
                this._icon.title = options.title;
            }

            this._initInteraction();

            L.DomUtil.addClass(this._icon, classToAdd);

            if (options.riseOnHover) {
                L.DomEvent
                    .on(this._icon, 'mouseover', this._bringToFront, this)
                    .on(this._icon, 'mouseout', this._resetZIndex, this);
            }
        }

        var panes = this._map._panes;
        panes.markerPane.appendChild(this._icon);
    },

    setColor: function(color) {
        if (!this._icon)
            this.options.color = color;
        else
            this._icon.style.backgroundColor = color;
    }
});

L.letterMarker = function(latlng, letter, options) {
    return new L.LetterMarker(latlng, letter, options);
};