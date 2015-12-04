var GHOObjects = function() {
  var mapAPI = "pk.eyJ1IjoicmFwaW9jaGEiLCJhIjoiY2locjRtOXd5MDAzOXQzbTFid29rN2ZwZyJ9.jvTZeUv0MtDPZIEtvSwTxw";
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
              )
            ],
            axes: {
              'Funding Requirement' : 'y'
            },
            type: "bar"
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
            "Funding Requirement" : "rgb(240, 83, 86)"
          },
          transition: {
              duration: 3000
          },
          legend: {
            show: false
          },
          oninit: function() {
            $("#home-chart > h3").delay(3000).animate({opacity: 1}, 1000);
            $("#home-chart > p").delay(4000).animate({opacity: 1}, 1000);
          }
      });
    }, // end of initializeChart.
    //has onClickEvent(feature) event
    initializeMap : function (events) {
      console.log("initializing GHO Map");
      if (!mapObject) {
        mapboxgl.accessToken = mapAPI;
        mapObject = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/rapiocha/cihr4rc6a008595lyxi1j47h1', //stylesheet location
            center: [14.7, 12], // starting position
            zoom: 1.7 // starting zoom
        });

        //Put markers
        mapObject.on('style.load', function() {
          $.ajax({
            url: "https://sheetsu.com/apis/ac727b26",
            dataType: "json",
            async: false,
            success: function(data) {

              //Creating Map Source
              mapObject.addSource("countries", {
                "type": "geojson",
                "data": {
                  "type": "FeatureCollection",

                  //Start rendering datapoints
                  "features": data.result.map(function(d) {
                      return {
                        "type": "Feature",
                        "geometry": {
                          "type": "Point",
                          "coordinates": [parseFloat(d.lat), parseFloat(d.lon)]
                        },
                        "properties": d
                      }
                  })
                  //end of feature rendering
                }
              }); // end of mapObject.addSource

              // data.result.forEach(function(d) {
              // }); //end of data.result.forEach
              //Add layers...
              mapObject.addLayer({
                  'id': 'country_marker',
                  'interactive': true,
                  'type': 'circle',
                  'source': 'countries',
                  'paint': {
                      'circle-radius': 6,
                      'circle-color': 'rgb(240, 83, 86)'
                  }
              });

              mapObject.addLayer({
                  'id': 'country_result',
                  'type': 'circle',
                  'source': 'countries',
                  'paint': {
                      'circle-radius': 15,
                      'circle-color': 'rgba(240, 83, 86, 0.3)'
                  }
              });

              // if oninit is defined
              if(events && events.oninit && events.oninit instanceof Function) {
                events.oninit(data);
              }


              mapObject.on('click',function(e) {

                mapObject.featuresAt(e.point, {radius: 10, layer: 'country_marker'},
                  function(err, features) {
                    if (features && features.length > 0 && events && events.onclick && events.onclick instanceof Function) {
                      events.onclick(features[0]);
                    }
                  });
              });
              //End of Adding layers
            }
          });
        }); // End of mapObject.on('style.load')
        //End Put markers
      }

      return mapObject;
    } // end of initializeMap
  }; //end of return
}(); //end of GHOObjects
