import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
import { register } from "swiper/element/bundle";
// register Swiper custom elements
register();

window.Alpine = Alpine;

Alpine.start();
