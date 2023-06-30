import domReady from '@roots/sage/client/dom-ready';
import Alpine from 'alpinejs'
import Focus from '@alpinejs/focus'

Alpine.plugin(Focus)

window.Alpine = Alpine

Alpine.start()

/**
 * Application entrypoint
 */
domReady(async () => {
  
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
