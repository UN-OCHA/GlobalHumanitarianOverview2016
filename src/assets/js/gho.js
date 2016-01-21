var GHOObjects = function() {
  var mapAPI = "pk.eyJ1IjoicmVsaWVmd2ViIiwiYSI6IldYR2ZuV3cifQ.eSPZMZWE6UyLtO0OH_-qrw";
  var mapObject = null;
  var powerScale = d3.scale.pow();

  return  {
    initializeChart : function() {
      return c3.generate({
          bindto: '#bar-chart',
          data: {
            x: 'date',
            columns: [
              ['date'].concat(CURRENTDATA.map(function(d) { return d.label; })),
              ['Funding Requirement'].concat(
                CURRENTDATA.map(function(d) { return d.requirement; })
              ),
              ['People Targeted'].concat(
                CURRENTDATA.map(function(d) { return d.targeted; })
              )
            ],
            axes: {
              'Funding Requirement' : 'y',
              'People Targeted' : 'y2'
            },
            types: {
              'Funding Requirement': 'bar',
              'People Targeted' : 'spline'
            }
          },
          bar: {
              width: {
                  ratio: 0.9
              }
          },
          axis: {
            x: {
              type: 'category',
              tick: {
                  format: '%b %Y'
              }
            },
            y2: {
              show: false,
              tick: {
                format: function(d) {
                  var fmt = d3.formatPrefix(d);
                  if (fmt.symbol == "G") { fmt.symbol = "B"; }
                  return d3.round(fmt.scale(d), 1) + fmt.symbol;
                }
              }
            },
            y: {
              show: false,
              label: {
                text: "Funding Requirement",
              },
              tick: {
                format: function(d) {
                  var fmt = d3.formatPrefix(d);
                  if (fmt.symbol == "G") { fmt.symbol = "B"; }
                  return "$" + d3.round(fmt.scale(d), 1) + fmt.symbol;
                }
              }
            }
          },
          colors : {
            "Funding Requirement" : "rgb(240, 83, 86)",
            "People Targeted" : "rgb(0, 146, 192)"
          },
          transition: {
              duration: 3000
          },
          legend: {
            show: false
          },
          oninit: function() {
            $("#home-title > h3").delay(3000).animate({opacity: 1}, 1000);
            // $("#home-chart > p").delay(4000).animate({opacity: 1}, 1000);
          }
      });
    }, // end of initializeChart.
    //has onClickEvent(feature) event
    initializeMap : function (geojsonData, events) {
      // console.log("initializing GHO Map");

      L.mapbox.accessToken = "pk.eyJ1IjoicmVsaWVmd2ViIiwiYSI6IldYR2ZuV3cifQ.eSPZMZWE6UyLtO0OH_-qrw";
      var mapboxTiles = L.tileLayer('http://{s}.tiles.mapbox.com/v4/reliefweb.c0787f42/{z}/{x}/{y}.png?access_token=' + L.mapbox.accessToken, {
          attribution: '<a href="http://www.unocha.org" target="_blank">&copy; UNOCHA</a>'
      });

      mapObject = new L.Map("map", {
        center: window.MAP_CENTER?window.MAP_CENTER.latlng:[13.4, 22.9],
        zoom: 3,
        zoomControl: false, scrollWheelZoom: true}).addLayer(mapboxTiles);

      // console.log(geojsonData);
      geojsonData.forEach(function(d) {
        var dot = L.circleMarker([parseFloat(d.lon), parseFloat(d.lat)], { color: 'red', stroke: '#33495A', strokeWidth: 4, data: d });

          dot.on('click', function(e) { console.log(e);
              NavControl.toPopup(e.target.options.data.iso);
            });

          dot.bindLabel(d.country, {className: "my-label", offset: [5, -10] });

          dot.addTo(mapObject);
      });

      // if (!mapObject) {
      //   mapboxgl.accessToken = mapAPI;
      //   mapObject = new mapboxgl.Map({
      //       container: 'map', // container id
      //       style: 'mapbox://styles/reliefweb/reliefweb.c0787f42', //stylesheet location
      //       // {lng: 13.401527376541026, lat: 22.921476647396943}lat: 22.921476647396943lng: 13.401527376541026__proto__: LngLat
      //       center: [13.4, 22.9], // starting position
      //       zoom: 1.7 // starting zoom
      //   });

      //   //Put markers
      //   mapObject.on('style.load', function() {
      //     mapObject.addSource("countries", geojsonData); // end of mapObject.addSource
      //     // data.result.forEach(function(d) {
      //     // }); //end of data.result.forEach
      //     //Add layers...

      //     mapObject.addLayer({
      //         'id': 'country_result',
      //         'type': 'circle',
      //         'source': 'countries',
      //         'paint': {
      //             'circle-radius': 15,
      //             'circle-color': 'rgba(240, 83, 86, 0.3)'
      //         }
      //     });

      //     mapObject.addLayer({
      //         'id': 'country_marker',
      //         'interactive': true,
      //         'type': 'circle',
      //         'source': 'countries',
      //         'paint': {
      //             'circle-radius': 6,
      //             'circle-color': 'rgb(240, 83, 86)'
      //         }
      //     });

      //     mapObject.addLayer({
      //       "id": "country_name",
      //       "type": "symbol",
      //       'interactive': true,
      //       "source": "countries",
      //       "layout": {
      //           "text-field": "{country}",
      //           "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
      //           "text-offset": [0, 0.6],
      //           "text-anchor": "top",
      //           "text-size": 10
      //       },
      //       "paint": {
      //           "text-color": "white"
      //       }
      //     });

      //     // if oninit is defined
      //     if(events && events.oninit && events.oninit instanceof Function) {
      //       // events.oninit(data);
      //     }


      //     mapObject.on('click',function(e) {

      //       mapObject.featuresAt(e.point, {radius: 10, layer: ['country_marker','country_name']},
      //         function(err, features) {
      //           if (features && features.length > 0 && events && events.onclick && events.onclick instanceof Function) {
      //             events.onclick(features[0]);
      //           }
      //         });
      //     });
      //     //End of Adding layers
      //   }); // End of mapObject.on('style.load')
      //   //End Put markers
      // }

      return mapObject;
    } // end of initializeMap
  }; //end of return
}(); //end of GHOObjects
