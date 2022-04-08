<div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto flex flex-wrap">      
              <div class="flex border-2 rounded-lg border-gray-200 bg-gray-600 shadow-sm border-opacity-50 p-8 sm:flex-row flex-col">
                <div class="w-20 h-20 sm:mr-8 sm:mb-0 mb-4 p-2  inline-flex items-center justify-center rounded-full bg-indigo-100 text-orange-500 flex-shrink-0">
                  <img src="{{asset('img/logoleaf.png')}}" alt="">
                </div>
                <div class="flex-grow">
                  <h2 class="text-gray-50 text-lg title-font font-medium mb-3">LeafLeat</h2>
                  <p class="leading-relaxed text-base text-gray-50">Leaflet permite a los desarrolladores sin fondo SIG mostrar muy fácilmente mapas web en mosaico alojados en un servidor público, con superposiciones en mosaico opcionales. Puede cargar datos de entidades de archivos GeoJSON, aplicar estilos y crear capas interactivas, como marcadores con ventanas emergentes cuando se hace clic.</p>
                  <a href="https://leafletjs.com/" target="_blank" class="mt-3 text-indigo-500 inline-flex items-center">Ver Mas
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
        </div>
      </section>


    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div >
                <div id="map" class=" rounded-md mb-6 shadow-md" style="height: 700px;"></div>
            </div>
        </div>
    </div>

@push('script')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
{{-- <script>

var map = L.map('map', {drawControl: true}).setView([51.505, -0.09], 13);
     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
         attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
     }).addTo(map);


     // FeatureGroup is to store editable layers
     var drawnItems = new L.FeatureGroup();
     map.addLayer(drawnItems);
     var drawControl = new L.Control.Draw({
         edit: {
             featureGroup: drawnItems
         }
     });
     map.addControl(drawControl);

     var modifiedDraw = L.drawLocal.extend({
         draw: {
             toolbar: {
                 buttons: {
                     polygon: 'Draw an awesome polygon'
                 }
             }
         }
     });

     var toolbar = L.Toolbar();
   toolbar.addToolbar(map);

</script> --}}
<script>
var cloudmadeUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18}),
        map = new L.Map('map', {layers: [cloudmade], center: new L.LatLng(5.336726312563761, -72.39572187571952), zoom: 15 });
    
    var editableLayers = new L.FeatureGroup();
    map.addLayer(editableLayers);
    
    var MyCustomMarker = L.Icon.extend({
        options: {
            shadowUrl: null,
            iconAnchor: new L.Point(12, 12),
            iconSize: new L.Point(24, 24),
            iconUrl: 'link/to/image.png'
        }
    });
    
    var options = {
        position: 'topright',
        draw: {
            polyline: {
                shapeOptions: {
                    color: '#f357a1',
                    weight: 10
                }
            },
            polygon: {
                allowIntersection: false, // Restricts shapes to simple polygons
                drawError: {
                    color: '#e1e100', // Color the shape will turn when intersects
                    message: '<strong>Oh snap!<strong> you can\'t draw that!' // Message that will show when intersect
                },
                shapeOptions: {
                    color: '#bada55'
                }
            },
            circle: false, // Turns off this drawing tool
            rectangle: {
                shapeOptions: {
                    clickable: false
                }
            },
            marker: {
                icon: new MyCustomMarker()
            }
        },
        edit: {
            featureGroup: editableLayers, //REQUIRED!!
            remove: false
        }
    };
    
    var drawControl = new L.Control.Draw(options);
    map.addControl(drawControl);
    
    map.on(L.Draw.Event.CREATED, function (e) {
        var type = e.layerType,
            layer = e.layer;
    
        if (type === 'marker') {
            layer.bindPopup('A popup!');
        }
    
        editableLayers.addLayer(layer);
    });

            @foreach($data as $item )
                var marks = @json($item);
                var layer = L.geoJSON(JSON.parse(marks)).addTo(map);
            @endforeach
    
       
        // Adjust map to show the Layer
        var bounds = layer.getBounds();
            map.fitBounds(bounds);
</script>
@endpush

</div>
