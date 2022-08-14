require('./bootstrap');
import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'


// import {Map , TileLayer} from "leaflet";
// window.Map = Map;
// window.TileLayer = TileLayer;


Alpine.plugin(FormsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()
