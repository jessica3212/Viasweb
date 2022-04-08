<div>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                MAPA VIA
            </h2>
        </div>
    </x-slot>

    <div class="container mx-auto py-12">
        <form method="post" action="{{ route('mark.save', $via) }}">
            @csrf

            <div id="map" class="z-20" style="height: 600px"></div>
            <br>
            <div>
                <label>The layer To Be Stored:</label>
                <input id="polygon" type="text" class="form-control" name="data" value="{{request('polygon')}}">
            </div>
            <br>
            <div>
                <x-button type="submit" color="teal">
                    Guardar
                </x-button>
            </div>
    </div>
    </form>

    @push('script')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

    <script>
       var cloudmadeUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18}),
        map = new L.Map('map', {layers: [cloudmade], center: new L.LatLng(5.336726312563761, -72.39572187571952), zoom: 15 });
    
    var editableLayers = new L.FeatureGroup();
    map.addLayer(editableLayers);

        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            position: 'topright',
            draw: {
                polygon: {
                    shapeOptions: {
                        color: 'purple' //polygons being drawn will be purple color
                    },
                    allowIntersection: false,
                    drawError: {
                        color: 'orange',
                        timeout: 1000
                    },
                    showArea: true, //the area of the polygon will be displayed as it is drawn.
                    metric: false,
                    repeatMode: true
                },
                polyline: {
                    shapeOptions: {
                        color: 'red'
                    },
                },
                circlemarker: false, //circlemarker type has been disabled.
                rect: {
                    shapeOptions: {
                        color: 'green'
                    },
                },
                circle: false,
            },
            edit: {
                featureGroup: drawnItems
            }
        });

        map.addControl(drawControl);
        map.on('draw:created', function(e) {
            var type = e.layerType,
                layer = e.layer;
            drawnItems.addLayer(layer);
            $('#polygon').val(JSON.stringify(layer.toGeoJSON()));
        });
    </script>
    @endpush
</div>
