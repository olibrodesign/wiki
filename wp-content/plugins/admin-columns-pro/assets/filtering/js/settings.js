(()=>{var e={114:e=>{function t(e,t){if(!e)throw new Error(t||"AssertionError")}t.notEqual=function(e,n,s){t(e!=n,s)},t.notOk=function(e,n){t(!e,n)},t.equal=function(e,n,s){t(e==n,s)},t.ok=t,e.exports=t},403:(e,t,n)=>{var s=n(415),r=n(511),i=n(114);function o(e){if(!(this instanceof o))return new o(e);this._name=e||"nanobus",this._starListeners=[],this._listeners={}}e.exports=o,o.prototype.emit=function(e){i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.emit: eventName should be type string or symbol");for(var t=[],n=1,s=arguments.length;n<s;n++)t.push(arguments[n]);var o=r(this._name+"('"+e.toString()+"')"),l=this._listeners[e];return l&&l.length>0&&this._emit(this._listeners[e],t),this._starListeners.length>0&&this._emit(this._starListeners,e,t,o.uuid),o(),this},o.prototype.on=o.prototype.addListener=function(e,t){return i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.on: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.on: listener should be type function"),"*"===e?this._starListeners.push(t):(this._listeners[e]||(this._listeners[e]=[]),this._listeners[e].push(t)),this},o.prototype.prependListener=function(e,t){return i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.prependListener: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.prependListener: listener should be type function"),"*"===e?this._starListeners.unshift(t):(this._listeners[e]||(this._listeners[e]=[]),this._listeners[e].unshift(t)),this},o.prototype.once=function(e,t){i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.once: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.once: listener should be type function");var n=this;return this.on(e,(function s(){t.apply(n,arguments),n.removeListener(e,s)})),this},o.prototype.prependOnceListener=function(e,t){i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.prependOnceListener: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.prependOnceListener: listener should be type function");var n=this;return this.prependListener(e,(function s(){t.apply(n,arguments),n.removeListener(e,s)})),this},o.prototype.removeListener=function(e,t){return i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.removeListener: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.removeListener: listener should be type function"),"*"===e?(this._starListeners=this._starListeners.slice(),n(this._starListeners,t)):(void 0!==this._listeners[e]&&(this._listeners[e]=this._listeners[e].slice()),n(this._listeners[e],t));function n(e,t){if(e){var n=e.indexOf(t);return-1!==n?(s(e,n,1),!0):void 0}}},o.prototype.removeAllListeners=function(e){return e?"*"===e?this._starListeners=[]:this._listeners[e]=[]:(this._starListeners=[],this._listeners={}),this},o.prototype.listeners=function(e){var t="*"!==e?this._listeners[e]:this._starListeners,n=[];if(t)for(var s=t.length,r=0;r<s;r++)n.push(t[r]);return n},o.prototype._emit=function(e,t,n,s){if(void 0!==e&&0!==e.length){void 0===n&&(n=t,t=null),t&&(n=void 0!==s?[t].concat(n,s):[t].concat(n));for(var r=e.length,i=0;i<r;i++){var o=e[i];o.apply(o,n)}}}},792:(e,t,n)=>{var s=n(114),r="undefined"!=typeof window;function i(e){this.hasWindow=e,this.hasIdle=this.hasWindow&&window.requestIdleCallback,this.method=this.hasIdle?window.requestIdleCallback.bind(window):this.setTimeout,this.scheduled=!1,this.queue=[]}i.prototype.push=function(e){s.equal(typeof e,"function","nanoscheduler.push: cb should be type function"),this.queue.push(e),this.schedule()},i.prototype.schedule=function(){if(!this.scheduled){this.scheduled=!0;var e=this;this.method((function(t){for(;e.queue.length&&t.timeRemaining()>0;)e.queue.shift()(t);e.scheduled=!1,e.queue.length&&e.schedule()}))}},i.prototype.setTimeout=function(e){setTimeout(e,0,{timeRemaining:function(){return 1}})},e.exports=function(){var e;return r?(window._nanoScheduler||(window._nanoScheduler=new i(!0)),e=window._nanoScheduler):e=new i,e}},511:(e,t,n)=>{var s,r=n(792)(),i=n(114);o.disabled=!0;try{s=window.performance,o.disabled="true"===window.localStorage.DISABLE_NANOTIMING||!s.mark}catch(e){}function o(e){if(i.equal(typeof e,"string","nanotiming: name should be type string"),o.disabled)return l;var t=(1e4*s.now()).toFixed()%Number.MAX_SAFE_INTEGER,n="start-"+t+"-"+e;function u(i){var o="end-"+t+"-"+e;s.mark(o),r.push((function(){var r=null;try{var l=e+" ["+t+"]";s.measure(l,n,o),s.clearMarks(n),s.clearMarks(o)}catch(e){r=e}i&&i(r,e)}))}return s.mark(n),u.uuid=t,u}function l(e){e&&r.push((function(){e(new Error("nanotiming: performance API unavailable"))}))}e.exports=o},415:e=>{"use strict";e.exports=function(e,t,n){var s,r=e.length;if(!(t>=r||0===n)){var i=r-(n=t+n>r?r-t:n);for(s=t;s<i;++s)e[s]=e[s+n];e.length=i}}}},t={};function n(s){var r=t[s];if(void 0!==r)return r.exports;var i=t[s]={exports:{}};return e[s](i,i.exports,n),i.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var s in t)n.o(t,s)&&!n.o(e,s)&&Object.defineProperty(e,s,{enumerable:!0,get:t[s]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";var e=n(403),t=n.n(e);class s{constructor(e){this.element=e}static find(e){let t=document.querySelector(e);return null===t?null:new s(t)}static create(e){return new s(document.createElement(e))}getElement(){return this.element}addId(e){return this.element.id=e,this}toggleClass(e,t=null){return null===t?this.element.classList.contains(e)?this.removeClass(e):this.addClass(e):t?this.addClass(e):this.removeClasses(e)}addClass(e){return this.element.classList.add(e),this}addClasses(...e){return e.forEach((e=>this.addClass(e))),this}removeClasses(...e){return e.forEach((e=>this.removeClass(e))),this}removeClass(e){return this.element.classList.remove(e),this}setAttribute(e,t){return this.element.setAttribute(e,t),this}setAttributes(e){return Object.keys(e).forEach((t=>this.setAttribute(t,e[t]))),this}addHtml(e){return this.element.innerHTML=e,this}append(e){return this.element.appendChild(e),this}appendFound(e){return document.querySelectorAll(e).forEach((e=>this.append(e))),this}appendSelfTo(e){return e.append(this.element),this}prepend(e){return this.element.prepend(e),this}prependSelfTo(e){return e.prepend(this.element),this}css(e,t){return this.element.style[e]=t,this}insertAfter(e){var t;try{null===(t=this.element.parentElement)||void 0===t||t.insertBefore(e,this.element.nextElementSibling)}catch(e){console.error("Not able to insert element after current node",this.element)}}insertSelfBefore(e){var t;try{null===(t=e.parentElement)||void 0===t||t.insertBefore(this.element,e)}catch(e){console.error("Not able to insert element before current node",this.element)}return this}insertBefore(e){var t;try{null===(t=this.element.parentElement)||void 0===t||t.insertBefore(e,this.element)}catch(e){console.error("Not able to insert element before current node",this.element)}return this}addEventListener(e,t){return this.element.addEventListener(e,t),this}addEventListeners(e,t){return e.forEach((e=>this.addEventListener(e,t))),this}$(){return this.getElement()}}class r{constructor(){this.filters={}}addFilter(e,t,n=10){this.filters.hasOwnProperty(e)||(this.filters[e]={}),this.filters[e].hasOwnProperty(n)||(this.filters[e][n]=[]),this.filters[e][n].push(t)}applyFilters(e,t,n={}){return this.filters.hasOwnProperty(e)?(Object.keys(this.filters[e]).forEach((s=>{this.filters[e][parseInt(s)].forEach((e=>{t=e(t,n)}))})),t):t}}(window.AC_SERVICES||(window.AC_SERVICES=new class{constructor(){this.services={},this.events=new(t()),this.filters=new r,this.$=s}registerService(e,t){return this.services[e]=t,this.events.emit(`Service.Registered.${e}`,t),this}getService(e){return this.hasService(e)?this.services[e]:null}hasService(e){return this.services.hasOwnProperty(e)}addListener(e,t){this.events.addListener(e,t)}emitEvent(e,t){this.events.emit(e,t)}}),window.AC_SERVICES).addListener("Settings.Column.Init",(e=>{let t=e.getElement().querySelector(".ac-setting-input_filter_label");null!==t&&e.getElement().querySelectorAll(".ac-setting-input_label").forEach((e=>{e.addEventListener("keyup",(()=>{var n,s;t.placeholder=null!==(s=null===(n=t.dataset.defaultTranslation)||void 0===n?void 0:n.replace("%s",e.value))&&void 0!==s?s:""}))}))}))})()})();