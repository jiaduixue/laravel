/*! Lazy Load 1.9.7 - MIT license - Copyright 2010-2015 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!1,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);

/*
 *  Remodal - v1.0.7
 *  Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
 *  http://vodkabears.github.io/remodal/
 *
 *  Made by Ilya Makarov
 *  Under MIT License
 */

!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],function(c){return b(a,c)}):"object"==typeof exports?b(a,require("jquery")):b(a,a.jQuery||a.Zepto)}(this,function(a,b){"use strict";function c(a){if(w&&"none"===a.css("animation-name")&&"none"===a.css("-webkit-animation-name")&&"none"===a.css("-moz-animation-name")&&"none"===a.css("-o-animation-name")&&"none"===a.css("-ms-animation-name"))return 0;var b,c,d,e,f=a.css("animation-duration")||a.css("-webkit-animation-duration")||a.css("-moz-animation-duration")||a.css("-o-animation-duration")||a.css("-ms-animation-duration")||"0s",g=a.css("animation-delay")||a.css("-webkit-animation-delay")||a.css("-moz-animation-delay")||a.css("-o-animation-delay")||a.css("-ms-animation-delay")||"0s",h=a.css("animation-iteration-count")||a.css("-webkit-animation-iteration-count")||a.css("-moz-animation-iteration-count")||a.css("-o-animation-iteration-count")||a.css("-ms-animation-iteration-count")||"1";for(f=f.split(", "),g=g.split(", "),h=h.split(", "),e=0,c=f.length,b=Number.NEGATIVE_INFINITY;c>e;e++)d=parseFloat(f[e])*parseInt(h[e],10)+parseFloat(g[e]),d>b&&(b=d);return b}function d(){if(b(document.body).height()<=b(window).height())return 0;var a,c,d=document.createElement("div"),e=document.createElement("div");return d.style.visibility="hidden",d.style.width="100px",document.body.appendChild(d),a=d.offsetWidth,d.style.overflow="scroll",e.style.width="100%",d.appendChild(e),c=e.offsetWidth,d.parentNode.removeChild(d),a-c}function e(){if(!x){var a,c,e=b("html"),f=k("is-locked");e.hasClass(f)||(c=b(document.body),a=parseInt(c.css("padding-right"),10)+d(),c.css("padding-right",a+"px"),e.addClass(f))}}function f(){if(!x){var a,c,e=b("html"),f=k("is-locked");e.hasClass(f)&&(c=b(document.body),a=parseInt(c.css("padding-right"),10)-d(),c.css("padding-right",a+"px"),e.removeClass(f))}}function g(a,b,c,d){var e=k("is",b),f=[k("is",u.CLOSING),k("is",u.OPENING),k("is",u.CLOSED),k("is",u.OPENED)].join(" ");a.$bg.removeClass(f).addClass(e),a.$overlay.removeClass(f).addClass(e),a.$wrapper.removeClass(f).addClass(e),a.$modal.removeClass(f).addClass(e),a.state=b,!c&&a.$modal.trigger({type:b,reason:d},[{reason:d}])}function h(a,d,e){var f=0,g=function(a){a.target===this&&f++},h=function(a){a.target===this&&0===--f&&(b.each(["$bg","$overlay","$wrapper","$modal"],function(a,b){e[b].off(r+" "+s)}),d())};b.each(["$bg","$overlay","$wrapper","$modal"],function(a,b){e[b].on(r,g).on(s,h)}),a(),0===c(e.$bg)&&0===c(e.$overlay)&&0===c(e.$wrapper)&&0===c(e.$modal)&&(b.each(["$bg","$overlay","$wrapper","$modal"],function(a,b){e[b].off(r+" "+s)}),d())}function i(a){a.state!==u.CLOSED&&(b.each(["$bg","$overlay","$wrapper","$modal"],function(b,c){a[c].off(r+" "+s)}),a.$bg.removeClass(a.settings.modifier),a.$overlay.removeClass(a.settings.modifier).hide(),a.$wrapper.hide(),f(),g(a,u.CLOSED,!0))}function j(a){var b,c,d,e,f={};for(a=a.replace(/\s*:\s*/g,":").replace(/\s*,\s*/g,","),b=a.split(","),e=0,c=b.length;c>e;e++)b[e]=b[e].split(":"),d=b[e][1],("string"==typeof d||d instanceof String)&&(d="true"===d||("false"===d?!1:d)),("string"==typeof d||d instanceof String)&&(d=isNaN(d)?d:+d),f[b[e][0]]=d;return f}function k(){for(var a=q,b=0;b<arguments.length;++b)a+="-"+arguments[b];return a}function l(){var a,c,d=location.hash.replace("#","");if(d){try{c=b("[data-"+p+'-id="'+d+'"]')}catch(e){}c&&c.length&&(a=b[p].lookup[c.data(p)],a&&a.settings.hashTracking&&a.open())}else n&&n.state===u.OPENED&&n.settings.hashTracking&&n.close()}function m(a,c){var d=b(document.body),e=this;e.settings=b.extend({},t,c),e.index=b[p].lookup.push(e)-1,e.state=u.CLOSED,e.$overlay=b("."+k("overlay")),e.$overlay.length||(e.$overlay=b("<div>").addClass(k("overlay")+" "+k("is",u.CLOSED)).hide(),d.append(e.$overlay)),e.$bg=b("."+k("bg")).addClass(k("is",u.CLOSED)),e.$modal=a.addClass(q+" "+k("is-initialized")+" "+e.settings.modifier+" "+k("is",u.CLOSED)).attr("tabindex","-1"),e.$wrapper=b("<div>").addClass(k("wrapper")+" "+e.settings.modifier+" "+k("is",u.CLOSED)).hide().append(e.$modal),d.append(e.$wrapper),e.$wrapper.on("click."+q,"[data-"+p+'-action="close"]',function(a){a.preventDefault(),e.close()}),e.$wrapper.on("click."+q,"[data-"+p+'-action="cancel"]',function(a){a.preventDefault(),e.$modal.trigger(v.CANCELLATION),e.settings.closeOnCancel&&e.close(v.CANCELLATION)}),e.$wrapper.on("click."+q,"[data-"+p+'-action="confirm"]',function(a){a.preventDefault(),e.$modal.trigger(v.CONFIRMATION),e.settings.closeOnConfirm&&e.close(v.CONFIRMATION)}),e.$wrapper.on("click."+q,function(a){var c=b(a.target);c.hasClass(k("wrapper"))&&e.settings.closeOnOutsideClick&&e.close()})}var n,o,p="remodal",q=a.REMODAL_GLOBALS&&a.REMODAL_GLOBALS.NAMESPACE||p,r=b.map(["animationstart","webkitAnimationStart","MSAnimationStart","oAnimationStart"],function(a){return a+"."+q}).join(" "),s=b.map(["animationend","webkitAnimationEnd","MSAnimationEnd","oAnimationEnd"],function(a){return a+"."+q}).join(" "),t=b.extend({hashTracking:0,closeOnConfirm:!0,closeOnCancel:!0,closeOnEscape:0,closeOnOutsideClick:0,modifier:""},a.REMODAL_GLOBALS&&a.REMODAL_GLOBALS.DEFAULTS),u={CLOSING:"closing",CLOSED:"closed",OPENING:"opening",OPENED:"opened"},v={CONFIRMATION:"confirmation",CANCELLATION:"cancellation"},w=function(){var a=document.createElement("div").style;return void 0!==a.animationName||void 0!==a.WebkitAnimationName||void 0!==a.MozAnimationName||void 0!==a.msAnimationName||void 0!==a.OAnimationName}(),x=/iPad|iPhone|iPod/.test(navigator.platform);m.prototype.open=function(){var a,c=this;c.state!==u.OPENING&&c.state!==u.CLOSING&&(a=c.$modal.attr("data-"+p+"-id"),a&&c.settings.hashTracking&&(o=b(window).scrollTop(),location.hash=a),n&&n!==c&&i(n),n=c,e(),c.$bg.addClass(c.settings.modifier),c.$overlay.addClass(c.settings.modifier).show(),c.$wrapper.show().scrollTop(0),c.$modal.focus(),h(function(){g(c,u.OPENING)},function(){g(c,u.OPENED)},c))},m.prototype.close=function(a){var c=this;c.state!==u.OPENING&&c.state!==u.CLOSING&&(c.settings.hashTracking&&c.$modal.attr("data-"+p+"-id")===location.hash.substr(1)&&(location.hash="",b(window).scrollTop(o)),h(function(){g(c,u.CLOSING,!1,a)},function(){c.$bg.removeClass(c.settings.modifier),c.$overlay.removeClass(c.settings.modifier).hide(),c.$wrapper.hide(),f(),g(c,u.CLOSED,!1,a)},c))},m.prototype.getState=function(){return this.state},m.prototype.destroy=function(){var a,c=b[p].lookup;i(this),this.$wrapper.remove(),delete c[this.index],a=b.grep(c,function(a){return!!a}).length,0===a&&(this.$overlay.remove(),this.$bg.removeClass(k("is",u.CLOSING)+" "+k("is",u.OPENING)+" "+k("is",u.CLOSED)+" "+k("is",u.OPENED)))},b[p]={lookup:[]},b.fn[p]=function(a){var c,d;return this.each(function(e,f){d=b(f),null==d.data(p)?(c=new m(d,a),d.data(p,c.index),c.settings.hashTracking&&d.attr("data-"+p+"-id")===location.hash.substr(1)&&c.open()):c=b[p].lookup[d.data(p)]}),c},b(document).ready(function(){b(document).on("click","[data-"+p+"-target]",function(a){a.preventDefault();var c=a.currentTarget,d=c.getAttribute("data-"+p+"-target"),e=b("[data-"+p+'-id="'+d+'"]');b[p].lookup[e.data(p)].open()}),b(document).find("."+q).each(function(a,c){var d=b(c),e=d.data(p+"-options");e?("string"==typeof e||e instanceof String)&&(e=j(e)):e={},d[p](e)}),b(document).on("keydown."+q,function(a){n&&n.settings.closeOnEscape&&n.state===u.OPENED&&27===a.keyCode&&n.close()}),b(window).on("hashchange."+q,l)})});

/*!
 * clipboard.js v1.5.12
 * https://zenorocha.github.io/clipboard.js
 *
 * Licensed MIT © Zeno Rocha
 */
!function(t){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var e;e="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,e.Clipboard=t()}}(function(){var t,e,n;return function t(e,n,o){function i(a,c){if(!n[a]){if(!e[a]){var s="function"==typeof require&&require;if(!c&&s)return s(a,!0);if(r)return r(a,!0);var l=new Error("Cannot find module '"+a+"'");throw l.code="MODULE_NOT_FOUND",l}var u=n[a]={exports:{}};e[a][0].call(u.exports,function(t){var n=e[a][1][t];return i(n?n:t)},u,u.exports,t,e,n,o)}return n[a].exports}for(var r="function"==typeof require&&require,a=0;a<o.length;a++)i(o[a]);return i}({1:[function(t,e,n){var o=t("matches-selector");e.exports=function(t,e,n){for(var i=n?t:t.parentNode;i&&i!==document;){if(o(i,e))return i;i=i.parentNode}}},{"matches-selector":5}],2:[function(t,e,n){function o(t,e,n,o,r){var a=i.apply(this,arguments);return t.addEventListener(n,a,r),{destroy:function(){t.removeEventListener(n,a,r)}}}function i(t,e,n,o){return function(n){n.delegateTarget=r(n.target,e,!0),n.delegateTarget&&o.call(t,n)}}var r=t("closest");e.exports=o},{closest:1}],3:[function(t,e,n){n.node=function(t){return void 0!==t&&t instanceof HTMLElement&&1===t.nodeType},n.nodeList=function(t){var e=Object.prototype.toString.call(t);return void 0!==t&&("[object NodeList]"===e||"[object HTMLCollection]"===e)&&"length"in t&&(0===t.length||n.node(t[0]))},n.string=function(t){return"string"==typeof t||t instanceof String},n.fn=function(t){var e=Object.prototype.toString.call(t);return"[object Function]"===e}},{}],4:[function(t,e,n){function o(t,e,n){if(!t&&!e&&!n)throw new Error("Missing required arguments");if(!c.string(e))throw new TypeError("Second argument must be a String");if(!c.fn(n))throw new TypeError("Third argument must be a Function");if(c.node(t))return i(t,e,n);if(c.nodeList(t))return r(t,e,n);if(c.string(t))return a(t,e,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function i(t,e,n){return t.addEventListener(e,n),{destroy:function(){t.removeEventListener(e,n)}}}function r(t,e,n){return Array.prototype.forEach.call(t,function(t){t.addEventListener(e,n)}),{destroy:function(){Array.prototype.forEach.call(t,function(t){t.removeEventListener(e,n)})}}}function a(t,e,n){return s(document.body,t,e,n)}var c=t("./is"),s=t("delegate");e.exports=o},{"./is":3,delegate:2}],5:[function(t,e,n){function o(t,e){if(r)return r.call(t,e);for(var n=t.parentNode.querySelectorAll(e),o=0;o<n.length;++o)if(n[o]==t)return!0;return!1}var i=Element.prototype,r=i.matchesSelector||i.webkitMatchesSelector||i.mozMatchesSelector||i.msMatchesSelector||i.oMatchesSelector;e.exports=o},{}],6:[function(t,e,n){function o(t){var e;if("INPUT"===t.nodeName||"TEXTAREA"===t.nodeName)t.focus(),t.setSelectionRange(0,t.value.length),e=t.value;else{t.hasAttribute("contenteditable")&&t.focus();var n=window.getSelection(),o=document.createRange();o.selectNodeContents(t),n.removeAllRanges(),n.addRange(o),e=n.toString()}return e}e.exports=o},{}],7:[function(t,e,n){function o(){}o.prototype={on:function(t,e,n){var o=this.e||(this.e={});return(o[t]||(o[t]=[])).push({fn:e,ctx:n}),this},once:function(t,e,n){function o(){i.off(t,o),e.apply(n,arguments)}var i=this;return o._=e,this.on(t,o,n)},emit:function(t){var e=[].slice.call(arguments,1),n=((this.e||(this.e={}))[t]||[]).slice(),o=0,i=n.length;for(o;i>o;o++)n[o].fn.apply(n[o].ctx,e);return this},off:function(t,e){var n=this.e||(this.e={}),o=n[t],i=[];if(o&&e)for(var r=0,a=o.length;a>r;r++)o[r].fn!==e&&o[r].fn._!==e&&i.push(o[r]);return i.length?n[t]=i:delete n[t],this}},e.exports=o},{}],8:[function(e,n,o){!function(i,r){if("function"==typeof t&&t.amd)t(["module","select"],r);else if("undefined"!=typeof o)r(n,e("select"));else{var a={exports:{}};r(a,i.select),i.clipboardAction=a.exports}}(this,function(t,e){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}var i=n(e),r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol?"symbol":typeof t},a=function(){function t(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}return function(e,n,o){return n&&t(e.prototype,n),o&&t(e,o),e}}(),c=function(){function t(e){o(this,t),this.resolveOptions(e),this.initSelection()}return t.prototype.resolveOptions=function t(){var e=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];this.action=e.action,this.emitter=e.emitter,this.target=e.target,this.text=e.text,this.trigger=e.trigger,this.selectedText=""},t.prototype.initSelection=function t(){this.text?this.selectFake():this.target&&this.selectTarget()},t.prototype.selectFake=function t(){var e=this,n="rtl"==document.documentElement.getAttribute("dir");this.removeFake(),this.fakeHandlerCallback=function(){return e.removeFake()},this.fakeHandler=document.body.addEventListener("click",this.fakeHandlerCallback)||!0,this.fakeElem=document.createElement("textarea"),this.fakeElem.style.fontSize="12pt",this.fakeElem.style.border="0",this.fakeElem.style.padding="0",this.fakeElem.style.margin="0",this.fakeElem.style.position="absolute",this.fakeElem.style[n?"right":"left"]="-9999px",this.fakeElem.style.top=(window.pageYOffset||document.documentElement.scrollTop)+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,document.body.appendChild(this.fakeElem),this.selectedText=(0,i.default)(this.fakeElem),this.copyText()},t.prototype.removeFake=function t(){this.fakeHandler&&(document.body.removeEventListener("click",this.fakeHandlerCallback),this.fakeHandler=null,this.fakeHandlerCallback=null),this.fakeElem&&(document.body.removeChild(this.fakeElem),this.fakeElem=null)},t.prototype.selectTarget=function t(){this.selectedText=(0,i.default)(this.target),this.copyText()},t.prototype.copyText=function t(){var e=void 0;try{e=document.execCommand(this.action)}catch(n){e=!1}this.handleResult(e)},t.prototype.handleResult=function t(e){e?this.emitter.emit("success",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)}):this.emitter.emit("error",{action:this.action,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})},t.prototype.clearSelection=function t(){this.target&&this.target.blur(),window.getSelection().removeAllRanges()},t.prototype.destroy=function t(){this.removeFake()},a(t,[{key:"action",set:function t(){var e=arguments.length<=0||void 0===arguments[0]?"copy":arguments[0];if(this._action=e,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function t(){return this._action}},{key:"target",set:function t(e){if(void 0!==e){if(!e||"object"!==("undefined"==typeof e?"undefined":r(e))||1!==e.nodeType)throw new Error('Invalid "target" value, use a valid Element');if("copy"===this.action&&e.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if("cut"===this.action&&(e.hasAttribute("readonly")||e.hasAttribute("disabled")))throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');this._target=e}},get:function t(){return this._target}}]),t}();t.exports=c})},{select:6}],9:[function(e,n,o){!function(i,r){if("function"==typeof t&&t.amd)t(["module","./clipboard-action","tiny-emitter","good-listener"],r);else if("undefined"!=typeof o)r(n,e("./clipboard-action"),e("tiny-emitter"),e("good-listener"));else{var a={exports:{}};r(a,i.clipboardAction,i.tinyEmitter,i.goodListener),i.clipboard=a.exports}}(this,function(t,e,n,o){"use strict";function i(t){return t&&t.__esModule?t:{"default":t}}function r(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function a(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function c(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}function s(t,e){var n="data-clipboard-"+t;if(e.hasAttribute(n))return e.getAttribute(n)}var l=i(e),u=i(n),f=i(o),d=function(t){function e(n,o){r(this,e);var i=a(this,t.call(this));return i.resolveOptions(o),i.listenClick(n),i}return c(e,t),e.prototype.resolveOptions=function t(){var e=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];this.action="function"==typeof e.action?e.action:this.defaultAction,this.target="function"==typeof e.target?e.target:this.defaultTarget,this.text="function"==typeof e.text?e.text:this.defaultText},e.prototype.listenClick=function t(e){var n=this;this.listener=(0,f.default)(e,"click",function(t){return n.onClick(t)})},e.prototype.onClick=function t(e){var n=e.delegateTarget||e.currentTarget;this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new l.default({action:this.action(n),target:this.target(n),text:this.text(n),trigger:n,emitter:this})},e.prototype.defaultAction=function t(e){return s("action",e)},e.prototype.defaultTarget=function t(e){var n=s("target",e);return n?document.querySelector(n):void 0},e.prototype.defaultText=function t(e){return s("text",e)},e.prototype.destroy=function t(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)},e}(u.default);t.exports=d})},{"./clipboard-action":8,"good-listener":4,"tiny-emitter":7}]},{},[9])(9)});

!function(a){"use strict";"function"==typeof define&&define.amd?define(a):"undefined"!=typeof module&&"undefined"!=typeof module.exports?module.exports=a():"undefined"!=typeof Package?Sortable=a():window.Sortable=a()}(function(){"use strict";function a(a,b){if(!a||!a.nodeType||1!==a.nodeType)throw"Sortable: `el` must be HTMLElement, and not "+{}.toString.call(a);this.el=a,this.options=b=s({},b),a[M]=this;var c={group:Math.random(),sort:!0,disabled:!1,store:null,handle:null,scroll:!0,scrollSensitivity:30,scrollSpeed:10,draggable:/[uo]l/i.test(a.nodeName)?"li":">*",ghostClass:"sortable-ghost",chosenClass:"sortable-chosen",ignore:"a, img",filter:null,animation:0,setData:function(a,b){a.setData("Text",b.textContent)},dropBubble:!1,dragoverBubble:!1,dataIdAttr:"data-id",delay:0,forceFallback:!1,fallbackClass:"sortable-fallback",fallbackOnBody:!1};for(var d in c)!(d in b)&&(b[d]=c[d]);W(b);for(var f in this)"_"===f.charAt(0)&&(this[f]=this[f].bind(this));this.nativeDraggable=b.forceFallback?!1:Q,e(a,"mousedown",this._onTapStart),e(a,"touchstart",this._onTapStart),this.nativeDraggable&&(e(a,"dragover",this),e(a,"dragenter",this)),U.push(this._onDragOver),b.store&&this.sort(b.store.get(this))}function b(a){w&&w.state!==a&&(h(w,"display",a?"none":""),!a&&w.state&&x.insertBefore(w,t),w.state=a)}function c(a,b,c){if(a){c=c||O;do if(">*"===b&&a.parentNode===c||q(a,b))return a;while(a!==c&&(a=a.parentNode))}return null}function d(a){a.dataTransfer&&(a.dataTransfer.dropEffect="move"),a.preventDefault()}function e(a,b,c){a.addEventListener(b,c,!1)}function f(a,b,c){a.removeEventListener(b,c,!1)}function g(a,b,c){if(a)if(a.classList)a.classList[c?"add":"remove"](b);else{var d=(" "+a.className+" ").replace(L," ").replace(" "+b+" "," ");a.className=(d+(c?" "+b:"")).replace(L," ")}}function h(a,b,c){var d=a&&a.style;if(d){if(void 0===c)return O.defaultView&&O.defaultView.getComputedStyle?c=O.defaultView.getComputedStyle(a,""):a.currentStyle&&(c=a.currentStyle),void 0===b?c:c[b];b in d||(b="-webkit-"+b),d[b]=c+("string"==typeof c?"":"px")}}function i(a,b,c){if(a){var d=a.getElementsByTagName(b),e=0,f=d.length;if(c)for(;f>e;e++)c(d[e],e);return d}return[]}function j(a,b,c,d,e,f,g){var h=O.createEvent("Event"),i=(a||b[M]).options,j="on"+c.charAt(0).toUpperCase()+c.substr(1);h.initEvent(c,!0,!0),h.to=b,h.from=e||b,h.item=d||b,h.clone=w,h.oldIndex=f,h.newIndex=g,b.dispatchEvent(h),i[j]&&i[j].call(a,h)}function k(a,b,c,d,e,f){var g,h,i=a[M],j=i.options.onMove;return g=O.createEvent("Event"),g.initEvent("move",!0,!0),g.to=b,g.from=a,g.dragged=c,g.draggedRect=d,g.related=e||b,g.relatedRect=f||b.getBoundingClientRect(),a.dispatchEvent(g),j&&(h=j.call(i,g)),h}function l(a){a.draggable=!1}function m(){S=!1}function n(a,b){var c=a.lastElementChild,d=c.getBoundingClientRect();return(b.clientY-(d.top+d.height)>5||b.clientX-(d.right+d.width)>5)&&c}function o(a){for(var b=a.tagName+a.className+a.src+a.href+a.textContent,c=b.length,d=0;c--;)d+=b.charCodeAt(c);return d.toString(36)}function p(a,b){var c=0;if(!a||!a.parentNode)return-1;for(;a&&(a=a.previousElementSibling);)"TEMPLATE"!==a.nodeName.toUpperCase()&&q(a,b)&&c++;return c}function q(a,b){if(a){b=b.split(".");var c=b.shift().toUpperCase(),d=new RegExp("\\s("+b.join("|")+")(?=\\s)","g");return!(""!==c&&a.nodeName.toUpperCase()!=c||b.length&&((" "+a.className+" ").match(d)||[]).length!=b.length)}return!1}function r(a,b){var c,d;return function(){void 0===c&&(c=arguments,d=this,setTimeout(function(){1===c.length?a.call(d,c[0]):a.apply(d,c),c=void 0},b))}}function s(a,b){if(a&&b)for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c]);return a}if("undefined"==typeof window||"undefined"==typeof window.document)return function(){throw new Error("Sortable.js requires a window with a document")};var t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K={},L=/\s+/g,M="Sortable"+(new Date).getTime(),N=window,O=N.document,P=N.parseInt,Q=!!("draggable"in O.createElement("div")),R=function(a){return a=O.createElement("x"),a.style.cssText="pointer-events:auto","auto"===a.style.pointerEvents}(),S=!1,T=Math.abs,U=([].slice,[]),V=r(function(a,b,c){if(c&&b.scroll){var d,e,f,g,h=b.scrollSensitivity,i=b.scrollSpeed,j=a.clientX,k=a.clientY,l=window.innerWidth,m=window.innerHeight;if(A!==c&&(z=b.scroll,A=c,z===!0)){z=c;do if(z.offsetWidth<z.scrollWidth||z.offsetHeight<z.scrollHeight)break;while(z=z.parentNode)}z&&(d=z,e=z.getBoundingClientRect(),f=(T(e.right-j)<=h)-(T(e.left-j)<=h),g=(T(e.bottom-k)<=h)-(T(e.top-k)<=h)),f||g||(f=(h>=l-j)-(h>=j),g=(h>=m-k)-(h>=k),(f||g)&&(d=N)),(K.vx!==f||K.vy!==g||K.el!==d)&&(K.el=d,K.vx=f,K.vy=g,clearInterval(K.pid),d&&(K.pid=setInterval(function(){d===N?N.scrollTo(N.pageXOffset+f*i,N.pageYOffset+g*i):(g&&(d.scrollTop+=g*i),f&&(d.scrollLeft+=f*i))},24)))}},30),W=function(a){var b=a.group;b&&"object"==typeof b||(b=a.group={name:b}),["pull","put"].forEach(function(a){a in b||(b[a]=!0)}),a.groups=" "+b.name+(b.put.join?" "+b.put.join(" "):"")+" "};return a.prototype={constructor:a,_onTapStart:function(a){var b=this,d=this.el,e=this.options,f=a.type,g=a.touches&&a.touches[0],h=(g||a).target,i=h,k=e.filter;if(!("mousedown"===f&&0!==a.button||e.disabled)&&(h=c(h,e.draggable,d))){if(E=p(h,e.draggable),"function"==typeof k){if(k.call(this,a,h,this))return j(b,i,"filter",h,d,E),void a.preventDefault()}else if(k&&(k=k.split(",").some(function(a){return a=c(i,a.trim(),d),a?(j(b,a,"filter",h,d,E),!0):void 0})))return void a.preventDefault();(!e.handle||c(i,e.handle,d))&&this._prepareDragStart(a,g,h)}},_prepareDragStart:function(a,b,c){var d,f=this,h=f.el,j=f.options,k=h.ownerDocument;c&&!t&&c.parentNode===h&&(H=a,x=h,t=c,u=t.parentNode,y=t.nextSibling,G=j.group,d=function(){f._disableDelayedDrag(),t.draggable=!0,g(t,f.options.chosenClass,!0),f._triggerDragStart(b)},j.ignore.split(",").forEach(function(a){i(t,a.trim(),l)}),e(k,"mouseup",f._onDrop),e(k,"touchend",f._onDrop),e(k,"touchcancel",f._onDrop),j.delay?(e(k,"mouseup",f._disableDelayedDrag),e(k,"touchend",f._disableDelayedDrag),e(k,"touchcancel",f._disableDelayedDrag),e(k,"mousemove",f._disableDelayedDrag),e(k,"touchmove",f._disableDelayedDrag),f._dragStartTimer=setTimeout(d,j.delay)):d())},_disableDelayedDrag:function(){var a=this.el.ownerDocument;clearTimeout(this._dragStartTimer),f(a,"mouseup",this._disableDelayedDrag),f(a,"touchend",this._disableDelayedDrag),f(a,"touchcancel",this._disableDelayedDrag),f(a,"mousemove",this._disableDelayedDrag),f(a,"touchmove",this._disableDelayedDrag)},_triggerDragStart:function(a){a?(H={target:t,clientX:a.clientX,clientY:a.clientY},this._onDragStart(H,"touch")):this.nativeDraggable?(e(t,"dragend",this),e(x,"dragstart",this._onDragStart)):this._onDragStart(H,!0);try{O.selection?setTimeout(function(){O.selection.empty()}):window.getSelection().removeAllRanges()}catch(b){}},_dragStarted:function(){x&&t&&(g(t,this.options.ghostClass,!0),a.active=this,j(this,x,"start",t,x,E))},_emulateDragOver:function(){if(I){if(this._lastX===I.clientX&&this._lastY===I.clientY)return;this._lastX=I.clientX,this._lastY=I.clientY,R||h(v,"display","none");var a=O.elementFromPoint(I.clientX,I.clientY),b=a,c=" "+this.options.group.name,d=U.length;if(b)do{if(b[M]&&b[M].options.groups.indexOf(c)>-1){for(;d--;)U[d]({clientX:I.clientX,clientY:I.clientY,target:a,rootEl:b});break}a=b}while(b=b.parentNode);R||h(v,"display","")}},_onTouchMove:function(b){if(H){a.active||this._dragStarted(),this._appendGhost();var c=b.touches?b.touches[0]:b,d=c.clientX-H.clientX,e=c.clientY-H.clientY,f=b.touches?"translate3d("+d+"px,"+e+"px,0)":"translate("+d+"px,"+e+"px)";J=!0,I=c,h(v,"webkitTransform",f),h(v,"mozTransform",f),h(v,"msTransform",f),h(v,"transform",f),b.preventDefault()}},_appendGhost:function(){if(!v){var a,b=t.getBoundingClientRect(),c=h(t),d=this.options;v=t.cloneNode(!0),g(v,d.ghostClass,!1),g(v,d.fallbackClass,!0),h(v,"top",b.top-P(c.marginTop,10)),h(v,"left",b.left-P(c.marginLeft,10)),h(v,"width",b.width),h(v,"height",b.height),h(v,"opacity","0.8"),h(v,"position","fixed"),h(v,"zIndex","100000"),h(v,"pointerEvents","none"),d.fallbackOnBody&&O.body.appendChild(v)||x.appendChild(v),a=v.getBoundingClientRect(),h(v,"width",2*b.width-a.width),h(v,"height",2*b.height-a.height)}},_onDragStart:function(a,b){var c=a.dataTransfer,d=this.options;this._offUpEvents(),"clone"==G.pull&&(w=t.cloneNode(!0),h(w,"display","none"),x.insertBefore(w,t)),b?("touch"===b?(e(O,"touchmove",this._onTouchMove),e(O,"touchend",this._onDrop),e(O,"touchcancel",this._onDrop)):(e(O,"mousemove",this._onTouchMove),e(O,"mouseup",this._onDrop)),this._loopId=setInterval(this._emulateDragOver,50)):(c&&(c.effectAllowed="move",d.setData&&d.setData.call(this,c,t)),e(O,"drop",this),setTimeout(this._dragStarted,0))},_onDragOver:function(a){var d,e,f,g=this.el,i=this.options,j=i.group,l=j.put,o=G===j,p=i.sort;if(void 0!==a.preventDefault&&(a.preventDefault(),!i.dragoverBubble&&a.stopPropagation()),J=!0,G&&!i.disabled&&(o?p||(f=!x.contains(t)):G.pull&&l&&(G.name===j.name||l.indexOf&&~l.indexOf(G.name)))&&(void 0===a.rootEl||a.rootEl===this.el)){if(V(a,i,this.el),S)return;if(d=c(a.target,i.draggable,g),e=t.getBoundingClientRect(),f)return b(!0),void(w||y?x.insertBefore(t,w||y):p||x.appendChild(t));if(0===g.children.length||g.children[0]===v||g===a.target&&(d=n(g,a))){if(d){if(d.animated)return;r=d.getBoundingClientRect()}b(o),k(x,g,t,e,d,r)!==!1&&(t.contains(g)||(g.appendChild(t),u=g),this._animate(e,t),d&&this._animate(r,d))}else if(d&&!d.animated&&d!==t&&void 0!==d.parentNode[M]){B!==d&&(B=d,C=h(d),D=h(d.parentNode));var q,r=d.getBoundingClientRect(),s=r.right-r.left,z=r.bottom-r.top,A=/left|right|inline/.test(C.cssFloat+C.display)||"flex"==D.display&&0===D["flex-direction"].indexOf("row"),E=d.offsetWidth>t.offsetWidth,F=d.offsetHeight>t.offsetHeight,H=(A?(a.clientX-r.left)/s:(a.clientY-r.top)/z)>.5,I=d.nextElementSibling,K=k(x,g,t,e,d,r);if(K!==!1){if(S=!0,setTimeout(m,30),b(o),1===K||-1===K)q=1===K;else if(A){var L=t.offsetTop,N=d.offsetTop;q=L===N?d.previousElementSibling===t&&!E||H&&E:N>L}else q=I!==t&&!F||H&&F;t.contains(g)||(q&&!I?g.appendChild(t):d.parentNode.insertBefore(t,q?I:d)),u=t.parentNode,this._animate(e,t),this._animate(r,d)}}}},_animate:function(a,b){var c=this.options.animation;if(c){var d=b.getBoundingClientRect();h(b,"transition","none"),h(b,"transform","translate3d("+(a.left-d.left)+"px,"+(a.top-d.top)+"px,0)"),b.offsetWidth,h(b,"transition","all "+c+"ms"),h(b,"transform","translate3d(0,0,0)"),clearTimeout(b.animated),b.animated=setTimeout(function(){h(b,"transition",""),h(b,"transform",""),b.animated=!1},c)}},_offUpEvents:function(){var a=this.el.ownerDocument;f(O,"touchmove",this._onTouchMove),f(a,"mouseup",this._onDrop),f(a,"touchend",this._onDrop),f(a,"touchcancel",this._onDrop)},_onDrop:function(b){var c=this.el,d=this.options;clearInterval(this._loopId),clearInterval(K.pid),clearTimeout(this._dragStartTimer),f(O,"mousemove",this._onTouchMove),this.nativeDraggable&&(f(O,"drop",this),f(c,"dragstart",this._onDragStart)),this._offUpEvents(),b&&(J&&(b.preventDefault(),!d.dropBubble&&b.stopPropagation()),v&&v.parentNode.removeChild(v),t&&(this.nativeDraggable&&f(t,"dragend",this),l(t),g(t,this.options.ghostClass,!1),g(t,this.options.chosenClass,!1),x!==u?(F=p(t,d.draggable),F>=0&&(j(null,u,"sort",t,x,E,F),j(this,x,"sort",t,x,E,F),j(null,u,"add",t,x,E,F),j(this,x,"remove",t,x,E,F))):(w&&w.parentNode.removeChild(w),t.nextSibling!==y&&(F=p(t,d.draggable),F>=0&&(j(this,x,"update",t,x,E,F),j(this,x,"sort",t,x,E,F)))),a.active&&((null==F||-1===F)&&(F=E),j(this,x,"end",t,x,E,F),this.save()))),this._nulling()},_nulling:function(){a.active===this&&(x=t=u=v=y=w=z=A=H=I=J=F=B=C=G=a.active=null)},handleEvent:function(a){var b=a.type;"dragover"===b||"dragenter"===b?t&&(this._onDragOver(a),d(a)):("drop"===b||"dragend"===b)&&this._onDrop(a)},toArray:function(){for(var a,b=[],d=this.el.children,e=0,f=d.length,g=this.options;f>e;e++)a=d[e],c(a,g.draggable,this.el)&&b.push(a.getAttribute(g.dataIdAttr)||o(a));return b},sort:function(a){var b={},d=this.el;this.toArray().forEach(function(a,e){var f=d.children[e];c(f,this.options.draggable,d)&&(b[a]=f)},this),a.forEach(function(a){b[a]&&(d.removeChild(b[a]),d.appendChild(b[a]))})},save:function(){var a=this.options.store;a&&a.set(this)},closest:function(a,b){return c(a,b||this.options.draggable,this.el)},option:function(a,b){var c=this.options;return void 0===b?c[a]:(c[a]=b,void("group"===a&&W(c)))},destroy:function(){var a=this.el;a[M]=null,f(a,"mousedown",this._onTapStart),f(a,"touchstart",this._onTapStart),this.nativeDraggable&&(f(a,"dragover",this),f(a,"dragenter",this)),Array.prototype.forEach.call(a.querySelectorAll("[draggable]"),function(a){a.removeAttribute("draggable")}),U.splice(U.indexOf(this._onDragOver),1),this._onDrop(),this.el=a=null}},a.utils={on:e,off:f,css:h,find:i,is:function(a,b){return!!c(a,b,a)},extend:s,throttle:r,closest:c,toggleClass:g,index:p},a.create=function(b,c){return new a(b,c)},a.version="1.4.2",a});

//autogrow



(function($)
{
	/**
	 * Auto-growing textareas; technique ripped from Facebook
	 *
	 *
	 * http://github.com/jaz303/jquery-grab-bag/tree/master/javascripts/jquery.autogrow-textarea.js
	 */
	$.fn.autogrow = function(options)
	{
		return this.filter('textarea').each(function()
		{
			var self         = this;
			var $self        = $(self);
			var minHeight    = $self.height();
			var noFlickerPad = $self.hasClass('autogrow-short') ? 0 : parseInt($self.css('lineHeight')) || 0;
			var settings = $.extend({
				preGrowCallback: null,
				postGrowCallback: null
			}, options );

			var shadow = $('<div></div>').css({
				position:    'absolute',
				top:         -10000,
				left:        -10000,
				width:       $self.width(),
				fontSize:    $self.css('fontSize'),
				fontFamily:  $self.css('fontFamily'),
				fontWeight:  $self.css('fontWeight'),
				lineHeight:  $self.css('lineHeight'),
				resize:      'none',
				'word-wrap': 'break-word'
			}).appendTo(document.body);

			var update = function(event)
			{
				var times = function(string, number)
				{
					for (var i=0, r=''; i<number; i++) r += string;
					return r;
				};

				var val = self.value.replace(/&/g, '&amp;')
					.replace(/</g, '&lt;')
					.replace(/>/g, '&gt;')
					.replace(/\n$/, '<br/>&nbsp;')
					.replace(/\n/g, '<br/>')
					.replace(/ {2,}/g, function(space){ return times('&nbsp;', space.length - 1) + ' ' });

				// Did enter get pressed?  Resize in this keydown event so that the flicker doesn't occur.
				if (event && event.data && event.data.event === 'keydown' && event.keyCode === 13) {
					val += '<br />';
				}

				shadow.css('width', $self.width());
				shadow.html(val + (noFlickerPad === 0 ? '...' : '')); // Append '...' to resize pre-emptively.

				var newHeight=Math.max(shadow.height() + noFlickerPad, minHeight);
				if(settings.preGrowCallback!=null){
					newHeight=settings.preGrowCallback($self,shadow,newHeight,minHeight);
				}

				$self.height(newHeight);

				if(settings.postGrowCallback!=null){
					settings.postGrowCallback($self);
				}
			}

			$self.change(update).keyup(update).keydown({event:'keydown'},update);
			$(window).resize(update);

			update();
		});
	};
})(jQuery);


/*! Swipebox v1.4.4 | Constantin Saguin csag.co | MIT License | github.com/brutaldesign/swipebox */
!function(a,b,c,d){c.swipebox=function(e,f){var g,h,i={useCSS:!0,useSVG:!0,initialIndexOnArray:0,removeBarsOnMobile:!0,hideCloseButtonOnMobile:!1,hideBarsDelay:3e3,videoMaxWidth:1140,vimeoColor:"cccccc",beforeOpen:null,afterOpen:null,afterClose:null,afterMedia:null,nextSlide:null,prevSlide:null,loopAtEnd:!1,autoplayVideos:!1,queryStringData:{},toggleClassOnLoad:""},j=this,k=[],l=e.selector,m=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i),n=null!==m||b.createTouch!==d||"ontouchstart"in a||"onmsgesturechange"in a||navigator.msMaxTouchPoints,o=!!b.createElementNS&&!!b.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect,p=a.innerWidth?a.innerWidth:c(a).width(),q=a.innerHeight?a.innerHeight:c(a).height(),r=0,s='<div id="swipebox-overlay">					<div id="swipebox-container">						<div id="swipebox-slider"></div>						<div id="swipebox-top-bar">							<div id="swipebox-title"></div>						</div>						<div id="swipebox-bottom-bar">							<div id="swipebox-arrows">								<a id="swipebox-prev"></a>								<a id="swipebox-next"></a>							</div>						</div>						<a id="swipebox-close"></a>					</div>			</div>';j.settings={},c.swipebox.close=function(){g.closeSlide()},c.swipebox.extend=function(){return g},j.init=function(){j.settings=c.extend({},i,f),c.isArray(e)?(k=e,g.target=c(a),g.init(j.settings.initialIndexOnArray)):c(b).on("click",l,function(a){if("slide current"===a.target.parentNode.className)return!1;c.isArray(e)||(g.destroy(),h=c(l),g.actions()),k=[];var b,d,f;f||(d="data-rel",f=c(this).attr(d)),f||(d="rel",f=c(this).attr(d)),h=f&&""!==f&&"nofollow"!==f?c(l).filter("["+d+'="'+f+'"]'):c(l),h.each(function(){var a=null,b=null;c(this).attr("title")&&(a=c(this).attr("title")),c(this).attr("href")&&(b=c(this).attr("href")),k.push({href:b,title:a})}),b=h.index(c(this)),a.preventDefault(),a.stopPropagation(),g.target=c(a.target),g.init(b)})},g={init:function(a){j.settings.beforeOpen&&j.settings.beforeOpen(),this.target.trigger("swipebox-start"),c.swipebox.isOpen=!0,this.build(),this.openSlide(a),this.openMedia(a),this.preloadMedia(a+1),this.preloadMedia(a-1),j.settings.afterOpen&&j.settings.afterOpen(a)},build:function(){var a,b=this;c("body").append(s),o&&j.settings.useSVG===!0&&(a=c("#swipebox-close").css("background-image"),a=a.replace("png","svg"),c("#swipebox-prev, #swipebox-next, #swipebox-close").css({"background-image":a})),m&&j.settings.removeBarsOnMobile&&c("#swipebox-bottom-bar, #swipebox-top-bar").remove(),c.each(k,function(){c("#swipebox-slider").append('<div class="slide"></div>')}),b.setDim(),b.actions(),n&&b.gesture(),b.keyboard(),b.animBars(),b.resize()},setDim:function(){var b,d,e={};"onorientationchange"in a?a.addEventListener("orientationchange",function(){0===a.orientation?(b=p,d=q):(90===a.orientation||-90===a.orientation)&&(b=q,d=p)},!1):(b=a.innerWidth?a.innerWidth:c(a).width(),d=a.innerHeight?a.innerHeight:c(a).height()),e={width:b,height:d},c("#swipebox-overlay").css(e)},resize:function(){var b=this;c(a).resize(function(){b.setDim()}).resize()},supportTransition:function(){var a,c="transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition".split(" ");for(a=0;a<c.length;a++)if(b.createElement("div").style[c[a]]!==d)return c[a];return!1},doCssTrans:function(){return j.settings.useCSS&&this.supportTransition()?!0:void 0},gesture:function(){var a,b,d,e,f,g,h=this,i=!1,j=!1,l=10,m=50,n={},o={},q=c("#swipebox-top-bar, #swipebox-bottom-bar"),s=c("#swipebox-slider");q.addClass("visible-bars"),h.setTimeout(),c("body").bind("touchstart",function(h){return c(this).addClass("touching"),a=c("#swipebox-slider .slide").index(c("#swipebox-slider .slide.current")),o=h.originalEvent.targetTouches[0],n.pageX=h.originalEvent.targetTouches[0].pageX,n.pageY=h.originalEvent.targetTouches[0].pageY,c("#swipebox-slider").css({"-webkit-transform":"translate3d("+r+"%, 0, 0)",transform:"translate3d("+r+"%, 0, 0)"}),c(".touching").bind("touchmove",function(h){if(h.preventDefault(),h.stopPropagation(),o=h.originalEvent.targetTouches[0],!j&&(f=d,d=o.pageY-n.pageY,Math.abs(d)>=m||i)){var q=.75-Math.abs(d)/s.height();s.css({top:d+"px"}),s.css({opacity:q}),i=!0}e=b,b=o.pageX-n.pageX,g=100*b/p,!j&&!i&&Math.abs(b)>=l&&(c("#swipebox-slider").css({"-webkit-transition":"",transition:""}),j=!0),j&&(b>0?0===a?c("#swipebox-overlay").addClass("leftSpringTouch"):(c("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch"),c("#swipebox-slider").css({"-webkit-transform":"translate3d("+(r+g)+"%, 0, 0)",transform:"translate3d("+(r+g)+"%, 0, 0)"})):0>b&&(k.length===a+1?c("#swipebox-overlay").addClass("rightSpringTouch"):(c("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch"),c("#swipebox-slider").css({"-webkit-transform":"translate3d("+(r+g)+"%, 0, 0)",transform:"translate3d("+(r+g)+"%, 0, 0)"}))))}),!1}).bind("touchend",function(a){if(a.preventDefault(),a.stopPropagation(),c("#swipebox-slider").css({"-webkit-transition":"-webkit-transform 0.4s ease",transition:"transform 0.4s ease"}),d=o.pageY-n.pageY,b=o.pageX-n.pageX,g=100*b/p,i)if(i=!1,Math.abs(d)>=2*m&&Math.abs(d)>Math.abs(f)){var k=d>0?s.height():-s.height();s.animate({top:k+"px",opacity:0},300,function(){h.closeSlide()})}else s.animate({top:0,opacity:1},300);else j?(j=!1,b>=l&&b>=e?h.getPrev():-l>=b&&e>=b&&h.getNext()):q.hasClass("visible-bars")?(h.clearTimeout(),h.hideBars()):(h.showBars(),h.setTimeout());c("#swipebox-slider").css({"-webkit-transform":"translate3d("+r+"%, 0, 0)",transform:"translate3d("+r+"%, 0, 0)"}),c("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch"),c(".touching").off("touchmove").removeClass("touching")})},setTimeout:function(){if(j.settings.hideBarsDelay>0){var b=this;b.clearTimeout(),b.timeout=a.setTimeout(function(){b.hideBars()},j.settings.hideBarsDelay)}},clearTimeout:function(){a.clearTimeout(this.timeout),this.timeout=null},showBars:function(){var a=c("#swipebox-top-bar, #swipebox-bottom-bar");this.doCssTrans()?a.addClass("visible-bars"):(c("#swipebox-top-bar").animate({top:0},500),c("#swipebox-bottom-bar").animate({bottom:0},500),setTimeout(function(){a.addClass("visible-bars")},1e3))},hideBars:function(){var a=c("#swipebox-top-bar, #swipebox-bottom-bar");this.doCssTrans()?a.removeClass("visible-bars"):(c("#swipebox-top-bar").animate({top:"-50px"},500),c("#swipebox-bottom-bar").animate({bottom:"-50px"},500),setTimeout(function(){a.removeClass("visible-bars")},1e3))},animBars:function(){var a=this,b=c("#swipebox-top-bar, #swipebox-bottom-bar");b.addClass("visible-bars"),a.setTimeout(),c("#swipebox-slider").click(function(){b.hasClass("visible-bars")||(a.showBars(),a.setTimeout())}),c("#swipebox-bottom-bar").hover(function(){a.showBars(),b.addClass("visible-bars"),a.clearTimeout()},function(){j.settings.hideBarsDelay>0&&(b.removeClass("visible-bars"),a.setTimeout())})},keyboard:function(){var b=this;c(a).bind("keyup",function(a){a.preventDefault(),a.stopPropagation(),37===a.keyCode?b.getPrev():39===a.keyCode?b.getNext():27===a.keyCode&&b.closeSlide()})},actions:function(){var a=this,b="touchend click";k.length<2?(c("#swipebox-bottom-bar").hide(),d===k[1]&&c("#swipebox-top-bar").hide()):(c("#swipebox-prev").bind(b,function(b){b.preventDefault(),b.stopPropagation(),a.getPrev(),a.setTimeout()}),c("#swipebox-next").bind(b,function(b){b.preventDefault(),b.stopPropagation(),a.getNext(),a.setTimeout()})),c("#swipebox-close").bind(b,function(){a.closeSlide()})},setSlide:function(a,b){b=b||!1;var d=c("#swipebox-slider");r=100*-a,this.doCssTrans()?d.css({"-webkit-transform":"translate3d("+100*-a+"%, 0, 0)",transform:"translate3d("+100*-a+"%, 0, 0)"}):d.animate({left:100*-a+"%"}),c("#swipebox-slider .slide").removeClass("current"),c("#swipebox-slider .slide").eq(a).addClass("current"),this.setTitle(a),b&&d.fadeIn(),c("#swipebox-prev, #swipebox-next").removeClass("disabled"),0===a?c("#swipebox-prev").addClass("disabled"):a===k.length-1&&j.settings.loopAtEnd!==!0&&c("#swipebox-next").addClass("disabled")},openSlide:function(b){c("html").addClass("swipebox-html"),n?(c("html").addClass("swipebox-touch"),j.settings.hideCloseButtonOnMobile&&c("html").addClass("swipebox-no-close-button")):c("html").addClass("swipebox-no-touch"),c(a).trigger("resize"),this.setSlide(b,!0)},preloadMedia:function(a){var b=this,c=null;k[a]!==d&&(c=k[a].href),b.isVideo(c)?b.openMedia(a):setTimeout(function(){b.openMedia(a)},1e3)},openMedia:function(a){var b,e,f=this;return k[a]!==d&&(b=k[a].href),0>a||a>=k.length?!1:(e=c("#swipebox-slider .slide").eq(a),void(f.isVideo(b)?(e.html(f.getVideo(b)),j.settings.afterMedia&&j.settings.afterMedia(a)):(e.addClass("slide-loading"),f.loadMedia(b,function(){e.removeClass("slide-loading"),e.html(this),j.settings.afterMedia&&j.settings.afterMedia(a)}))))},setTitle:function(a){var b=null;c("#swipebox-title").empty(),k[a]!==d&&(b=k[a].title),b?(c("#swipebox-top-bar").show(),c("#swipebox-title").append(b)):c("#swipebox-top-bar").hide()},isVideo:function(a){if(a){if(a.match(/(youtube\.com|youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/)||a.match(/vimeo\.com\/([0-9]*)/)||a.match(/youtu\.be\/([a-zA-Z0-9\-_]+)/))return!0;if(a.toLowerCase().indexOf("swipeboxvideo=1")>=0)return!0}},parseUri:function(a,d){var e=b.createElement("a"),f={};return e.href=decodeURIComponent(a),e.search&&(f=JSON.parse('{"'+e.search.toLowerCase().replace("?","").replace(/&/g,'","').replace(/=/g,'":"')+'"}')),c.isPlainObject(d)&&(f=c.extend(f,d,j.settings.queryStringData)),c.map(f,function(a,b){return a&&a>""?encodeURIComponent(b)+"="+encodeURIComponent(a):void 0}).join("&")},getVideo:function(a){var b="",c=a.match(/((?:www\.)?youtube\.com|(?:www\.)?youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/),d=a.match(/(?:www\.)?youtu\.be\/([a-zA-Z0-9\-_]+)/),e=a.match(/(?:www\.)?vimeo\.com\/([0-9]*)/),f="";return c||d?(d&&(c=d),f=g.parseUri(a,{autoplay:j.settings.autoplayVideos?"1":"0",v:""}),b='<iframe width="560" height="315" src="//'+c[1]+"/embed/"+c[2]+"?"+f+'" frameborder="0" allowfullscreen></iframe>'):e?(f=g.parseUri(a,{autoplay:j.settings.autoplayVideos?"1":"0",byline:"0",portrait:"0",color:j.settings.vimeoColor}),b='<iframe width="560" height="315"  src="//player.vimeo.com/video/'+e[1]+"?"+f+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'):b='<iframe width="560" height="315" src="'+a+'" frameborder="0" allowfullscreen></iframe>','<div class="swipebox-video-container" style="max-width:'+j.settings.videoMaxWidth+'px"><div class="swipebox-video">'+b+"</div></div>"},loadMedia:function(a,b){if(0===a.trim().indexOf("#"))b.call(c("<div>",{"class":"swipebox-inline-container"}).append(c(a).clone().toggleClass(j.settings.toggleClassOnLoad)));else if(!this.isVideo(a)){var d=c("<img>").on("load",function(){b.call(d)});d.attr("src",a)}},getNext:function(){var a,b=this,d=c("#swipebox-slider .slide").index(c("#swipebox-slider .slide.current"));d+1<k.length?(a=c("#swipebox-slider .slide").eq(d).contents().find("iframe").attr("src"),c("#swipebox-slider .slide").eq(d).contents().find("iframe").attr("src",a),d++,b.setSlide(d),b.preloadMedia(d+1),j.settings.nextSlide&&j.settings.nextSlide(d)):j.settings.loopAtEnd===!0?(a=c("#swipebox-slider .slide").eq(d).contents().find("iframe").attr("src"),c("#swipebox-slider .slide").eq(d).contents().find("iframe").attr("src",a),d=0,b.preloadMedia(d),b.setSlide(d),b.preloadMedia(d+1),j.settings.nextSlide&&j.settings.nextSlide(d)):(c("#swipebox-overlay").addClass("rightSpring"),setTimeout(function(){c("#swipebox-overlay").removeClass("rightSpring")},500))},getPrev:function(){var a,b=c("#swipebox-slider .slide").index(c("#swipebox-slider .slide.current"));b>0?(a=c("#swipebox-slider .slide").eq(b).contents().find("iframe").attr("src"),c("#swipebox-slider .slide").eq(b).contents().find("iframe").attr("src",a),b--,this.setSlide(b),this.preloadMedia(b-1),j.settings.prevSlide&&j.settings.prevSlide(b)):(c("#swipebox-overlay").addClass("leftSpring"),setTimeout(function(){c("#swipebox-overlay").removeClass("leftSpring")},500))},nextSlide:function(a){},prevSlide:function(a){},closeSlide:function(){c("html").removeClass("swipebox-html"),c("html").removeClass("swipebox-touch"),c(a).trigger("resize"),this.destroy()},destroy:function(){c(a).unbind("keyup"),c("body").unbind("touchstart"),c("body").unbind("touchmove"),c("body").unbind("touchend"),c("#swipebox-slider").unbind(),c("#swipebox-overlay").remove(),c.isArray(e)||e.removeData("_swipebox"),this.target&&this.target.trigger("swipebox-destroy"),c.swipebox.isOpen=!1,j.settings.afterClose&&j.settings.afterClose()}},j.init()},c.fn.swipebox=function(a){if(!c.data(this,"_swipebox")){var b=new c.swipebox(this,a);this.data("_swipebox",b)}return this.data("_swipebox")}}(window,document,jQuery);



/*
 *	jQuery OwlCarousel v1.27
 *  
 *	Copyright (c) 2013 Bartosz Wojciechowski
 *	http://www.owlgraphic.com/owlcarousel
 *
 *	Licensed under MIT
 *
 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('7(F 3v.2K!=="9"){3v.2K=9(e){9 t(){}t.5C=e;q 5B t}}(9(e,t,n,r){b i={1K:9(t,n){b r=c;r.6=e.3F({},e.3g.28.6,t);r.27=t;b i=n;b s=e(n);r.$k=s;r.3G()},3G:9(){b t=c;7(F t.6.2Y==="9"){t.6.2Y.U(c,[t.$k])}7(F t.6.38==="3a"){b n=t.6.38;9 r(e){7(F t.6.3d==="9"){t.6.3d.U(c,[e])}p{b n="";1Z(b r 3x e["h"]){n+=e["h"][r]["1W"]}t.$k.29(n)}t.2R()}e.5w(n,r)}p{t.2R()}},2R:9(e){b t=c;t.$k.A({23:0});t.2n=t.6.v;t.3M();t.5p=0;t.21;t.1L()},1L:9(){b e=c;7(e.$k.1Q().14===0){q d}e.1M();e.3T();e.$V=e.$k.1Q();e.J=e.$V.14;e.3Z();e.$L=e.$k.Z(".h-1W");e.$H=e.$k.Z(".h-1g");e.3e="R";e.1i=0;e.m=0;e.40();e.42()},42:9(){b e=c;e.2H();e.2I();e.4c();e.2L();e.4e();e.4f();e.22();e.4l();7(e.6.2j!==d){e.4o(e.6.2j)}7(e.6.N===j){e.6.N=4I}e.1b();e.$k.Z(".h-1g").A("4D","4E");7(!e.$k.2x(":32")){e.37()}p{e.$k.A("23",1)}e.5j=d;e.2l();7(F e.6.3b==="9"){e.6.3b.U(c,[e.$k])}},2l:9(){b e=c;7(e.6.1J===j){e.1J()}7(e.6.1q===j){e.1q()}7(e.6.2g===j){e.2g()}7(F e.6.3i==="9"){e.6.3i.U(c,[e.$k])}},3j:9(){b e=c;7(F e.6.3l==="9"){e.6.3l.U(c,[e.$k])}e.37();e.2H();e.2I();e.4C();e.2L();e.2l();7(F e.6.3o==="9"){e.6.3o.U(c,[e.$k])}},4B:9(e){b t=c;19(9(){t.3j()},0)},37:9(){b e=c;7(e.$k.2x(":32")===d){e.$k.A({23:0});1a(e.1u);1a(e.21)}p{q d}e.21=4z(9(){7(e.$k.2x(":32")){e.4B();e.$k.4y({23:1},2E);1a(e.21)}},4J)},3Z:9(){b e=c;e.$V.4U(\'<M K="h-1g">\').4u(\'<M K="h-1W"></M>\');e.$k.Z(".h-1g").4u(\'<M K="h-1g-4t">\');e.1D=e.$k.Z(".h-1g-4t");e.$k.A("4D","4E")},1M:9(){b e=c;b t=e.$k.1H(e.6.1M);b n=e.$k.1H(e.6.24);e.$k.w("h-4s",e.$k.2c("2d")).w("h-4r",e.$k.2c("K"));7(!t){e.$k.I(e.6.1M)}7(!n){e.$k.I(e.6.24)}},2H:9(){b t=c;7(t.6.2V===d){q d}7(t.6.4q===j){t.6.v=t.2n=1;t.6.1v=d;t.6.1I=d;t.6.1X=d;t.6.1A=d;t.6.1E=d;q d}b n=e(t.6.4p).1h();7(n>(t.6.1v[0]||t.2n)){t.6.v=t.2n}7(n<=t.6.1v[0]&&t.6.1v!==d){t.6.v=t.6.1v[1]}7(n<=t.6.1I[0]&&t.6.1I!==d){t.6.v=t.6.1I[1]}7(n<=t.6.1X[0]&&t.6.1X!==d){t.6.v=t.6.1X[1]}7(n<=t.6.1A[0]&&t.6.1A!==d){t.6.v=t.6.1A[1]}7(n<=t.6.1E[0]&&t.6.1E!==d){t.6.v=t.6.1E[1]}7(t.6.v>t.J){t.6.v=t.J}},4e:9(){b n=c,r;7(n.6.2V!==j){q d}b i=e(t).1h();n.33=9(){7(e(t).1h()!==i){7(n.6.N!==d){1a(n.1u)}4V(r);r=19(9(){i=e(t).1h();n.3j()},n.6.4n)}};e(t).4m(n.33)},4C:9(){b e=c;7(e.B.1j===j){7(e.D[e.m]>e.2a){e.1k(e.D[e.m])}p{e.1k(0);e.m=0}}p{7(e.D[e.m]>e.2a){e.16(e.D[e.m])}p{e.16(0);e.m=0}}7(e.6.N!==d){e.3f()}},4i:9(){b t=c;b n=0;b r=t.J-t.6.v;t.$L.2h(9(i){b s=e(c);s.A({1h:t.P}).w("h-1W",3k(i));7(i%t.6.v===0||i===r){7(!(i>r)){n+=1}}s.w("h-2y",n)})},4h:9(){b e=c;b t=0;b t=e.$L.14*e.P;e.$H.A({1h:t*2,X:0});e.4i()},2I:9(){b e=c;e.4g();e.4h();e.4b();e.3t()},4g:9(){b e=c;e.P=1P.57(e.$k.1h()/e.6.v)},3t:9(){b e=c;e.E=e.J-e.6.v;b t=e.J*e.P-e.6.v*e.P;t=t*-1;e.2a=t;q t},47:9(){q 0},4b:9(){b e=c;e.D=[0];b t=0;1Z(b n=0;n<e.J;n++){t+=e.P;e.D.58(-t)}},4c:9(){b t=c;7(t.6.25===j||t.6.1t===j){t.G=e(\'<M K="h-59"/>\').5a("5b",!t.B.Y).5d(t.$k)}7(t.6.1t===j){t.3V()}7(t.6.25===j){t.3R()}},3R:9(){b t=c;b n=e(\'<M K="h-5l"/>\');t.G.1e(n);t.1s=e("<M/>",{"K":"h-1o",29:t.6.2P[0]||""});t.1z=e("<M/>",{"K":"h-R",29:t.6.2P[1]||""});n.1e(t.1s).1e(t.1z);n.z("2s.G 2u.G",\'M[K^="h"]\',9(n){n.1r();7(e(c).1H("h-R")){t.R()}p{t.1o()}})},3V:9(){b t=c;t.1p=e(\'<M K="h-1t"/>\');t.G.1e(t.1p);t.1p.z("2s.G 2u.G",".h-1n",9(n){n.1r();7(3k(e(c).w("h-1n"))!==t.m){t.1m(3k(e(c).w("h-1n")),j)}})},3J:9(){b t=c;7(t.6.1t===d){q d}t.1p.29("");b n=0;b r=t.J-t.J%t.6.v;1Z(b i=0;i<t.J;i++){7(i%t.6.v===0){n+=1;7(r===i){b s=t.J-t.6.v}b o=e("<M/>",{"K":"h-1n"});b u=e("<3H></3H>",{5x:t.6.31===j?n:"","K":t.6.31===j?"h-5y":""});o.1e(u);o.w("h-1n",r===i?s:i);o.w("h-2y",n);t.1p.1e(o)}}t.2O()},2O:9(){b t=c;7(t.6.1t===d){q d}t.1p.Z(".h-1n").2h(9(n,r){7(e(c).w("h-2y")===e(t.$L[t.m]).w("h-2y")){t.1p.Z(".h-1n").S("2e");e(c).I("2e")}})},36:9(){b e=c;7(e.6.25===d){q d}7(e.6.2f===d){7(e.m===0&&e.E===0){e.1s.I("15");e.1z.I("15")}p 7(e.m===0&&e.E!==0){e.1s.I("15");e.1z.S("15")}p 7(e.m===e.E){e.1s.S("15");e.1z.I("15")}p 7(e.m!==0&&e.m!==e.E){e.1s.S("15");e.1z.S("15")}}},2L:9(){b e=c;e.3J();e.36();7(e.G){7(e.6.v===e.J){e.G.3E()}p{e.G.3B()}}},5A:9(){b e=c;7(e.G){e.G.3c()}},R:9(e){b t=c;7(t.1S){q d}t.1T=t.m;t.m+=t.6.1U===j?t.6.v:1;7(t.m>t.E+(t.6.1U==j?t.6.v-1:0)){7(t.6.2f===j){t.m=0;e="2m"}p{t.m=t.E;q d}}t.1m(t.m,e)},1o:9(e){b t=c;7(t.1S){q d}t.1T=t.m;7(t.6.1U===j&&t.m>0&&t.m<t.6.v){t.m=0}p{t.m-=t.6.1U===j?t.6.v:1}7(t.m<0){7(t.6.2f===j){t.m=t.E;e="2m"}p{t.m=0;q d}}t.1m(t.m,e)},1m:9(e,t,n){b r=c;7(r.1S){q d}r.3h();7(F r.6.1V==="9"){r.6.1V.U(c,[r.$k])}7(e>=r.E){e=r.E}p 7(e<=0){e=0}r.m=r.h.m=e;7(r.6.2j!==d&&n!=="4w"&&r.6.v===1&&r.B.1j===j){r.1x(0);7(r.B.1j===j){r.1k(r.D[e])}p{r.16(r.D[e],1)}r.3z();r.2q();q d}b i=r.D[e];7(r.B.1j===j){r.1Y=d;7(t===j){r.1x("1y");19(9(){r.1Y=j},r.6.1y)}p 7(t==="2m"){r.1x(r.6.2t);19(9(){r.1Y=j},r.6.2t)}p{r.1x("1f");19(9(){r.1Y=j},r.6.1f)}r.1k(i)}p{7(t===j){r.16(i,r.6.1y)}p 7(t==="2m"){r.16(i,r.6.2t)}p{r.16(i,r.6.1f)}}r.2q()},3h:9(){b e=c;e.1i=e.h.1i=e.1T===r?e.m:e.1T;e.1T=r},3r:9(e){b t=c;t.3h();7(F t.6.1V==="9"){t.6.1V.U(c,[t.$k])}7(e>=t.E||e===-1){e=t.E}p 7(e<=0){e=0}t.1x(0);7(t.B.1j===j){t.1k(t.D[e])}p{t.16(t.D[e],1)}t.m=t.h.m=e;t.2q()},2q:9(){b e=c;e.2O();e.36();e.2l();7(F e.6.3s==="9"){e.6.3s.U(c,[e.$k])}7(e.6.N!==d){e.3f()}},W:9(){b e=c;e.3u="W";1a(e.1u)},3f:9(){b e=c;7(e.3u!=="W"){e.1b()}},1b:9(){b e=c;e.3u="1b";7(e.6.N===d){q d}1a(e.1u);e.1u=4z(9(){e.R(j)},e.6.N)},1x:9(e){b t=c;7(e==="1f"){t.$H.A(t.2w(t.6.1f))}p 7(e==="1y"){t.$H.A(t.2w(t.6.1y))}p 7(F e!=="3a"){t.$H.A(t.2w(e))}},2w:9(e){b t=c;q{"-1G-1d":"2p "+e+"1w 2i","-1R-1d":"2p "+e+"1w 2i","-o-1d":"2p "+e+"1w 2i",1d:"2p "+e+"1w 2i"}},3C:9(){q{"-1G-1d":"","-1R-1d":"","-o-1d":"",1d:""}},3D:9(e){q{"-1G-O":"1l("+e+"T, C, C)","-1R-O":"1l("+e+"T, C, C)","-o-O":"1l("+e+"T, C, C)","-1w-O":"1l("+e+"T, C, C)",O:"1l("+e+"T, C,C)"}},1k:9(e){b t=c;t.$H.A(t.3D(e))},3I:9(e){b t=c;t.$H.A({X:e})},16:9(e,t){b n=c;n.26=d;n.$H.W(j,j).4y({X:e},{5r:t||n.6.1f,3L:9(){n.26=j}})},3M:9(){b e=c;b r="1l(C, C, C)",i=n.5q("M");i.2d.3N="  -1R-O:"+r+"; -1w-O:"+r+"; -o-O:"+r+"; -1G-O:"+r+"; O:"+r;b s=/1l\\(C, C, C\\)/g,o=i.2d.3N.5n(s),u=o!==18&&o.14===1;b a="4F"3x t||5h.5e;e.B={1j:u,Y:a}},4f:9(){b e=c;7(e.6.1C!==d||e.6.1B!==d){e.3X();e.3Y()}},3T:9(){b e=c;b t=["s","e","x"];e.13={};7(e.6.1C===j&&e.6.1B===j){t=["41.h 2b.h","2A.h 44.h","2s.h 45.h 2u.h"]}p 7(e.6.1C===d&&e.6.1B===j){t=["41.h","2A.h","2s.h 45.h"]}p 7(e.6.1C===j&&e.6.1B===d){t=["2b.h","44.h","2u.h"]}e.13["46"]=t[0];e.13["2z"]=t[1];e.13["3w"]=t[2]},3Y:9(){b t=c;t.$k.z("55.h",9(e){e.1r()});t.$k.z("2b.4a",9(t){q e(t.1c).2x("54, 52, 51, 4Y")})},3X:9(){9 o(e){7(e.3p){q{x:e.3p[0].3m,y:e.3p[0].4j}}p{7(e.3m!==r){q{x:e.3m,y:e.4j}}p{q{x:e.4X,y:e.4W}}}}9 u(t){7(t==="z"){e(n).z(i.13["2z"],f);e(n).z(i.13["3w"],l)}p 7(t==="Q"){e(n).Q(i.13["2z"]);e(n).Q(i.13["3w"])}}9 a(n){b n=n.35||n||t.34;7(i.26===d&&!i.6.30){q d}7(i.1Y===d&&!i.6.30){q d}7(i.6.N!==d){1a(i.1u)}7(i.B.Y!==j&&!i.$H.1H("2W")){i.$H.I("2W")}i.11=0;i.12=0;e(c).A(i.3C());b r=e(c).2k();s.2J=r.X;s.2G=o(n).x-r.X;s.2F=o(n).y-r.4H;u("z");s.2o=d;s.2C=n.1c||n.4A}9 f(r){b r=r.35||r||t.34;i.11=o(r).x-s.2G;i.3q=o(r).y-s.2F;i.12=i.11-s.2J;7(F i.6.3n==="9"&&s.39!==j&&i.12!==0){s.39=j;i.6.3n.U(c)}7(i.12>8||i.12<-8&&i.B.Y===j){r.1r?r.1r():r.4G=d;s.2o=j}7((i.3q>10||i.3q<-10)&&s.2o===d){e(n).Q("2A.h")}b u=9(){q i.12/5};b a=9(){q i.2a+i.12/5};i.11=1P.3t(1P.47(i.11,u()),a());7(i.B.1j===j){i.1k(i.11)}p{i.3I(i.11)}}9 l(n){b n=n.35||n||t.34;n.1c=n.1c||n.4A;s.39=d;7(i.B.Y!==j){i.$H.S("2W")}7(i.12!==0){b r=i.4x();i.1m(r,d,"4w");7(s.2C===n.1c&&i.B.Y!==j){e(n.1c).z("2X.3y",9(t){t.4K();t.4L();t.1r();e(n.1c).Q("2X.3y")});b o=e.4M(n.1c,"4N")["2X"];b a=o.4O();o.4P(0,0,a)}}u("Q")}b i=c;b s={2G:0,2F:0,4Q:0,2J:0,2k:18,4R:18,4S:18,2o:18,4T:18,2C:18};i.26=j;i.$k.z(i.13["46"],".h-1g",a)},4x:9(){b e=c,t;b t=e.4v();7(t>e.E){e.m=e.E;t=e.E}p 7(e.11>=0){t=0;e.m=0}q t},4v:9(){b t=c;b n=t.D;b r=t.11;b i=18;e.2h(n,9(e,s){7(r-t.P/20>n[e+1]&&r-t.P/20<s&&t.2Q()==="X"){i=s;t.m=e}p 7(r+t.P/20<s&&r+t.P/20>n[e+1]&&t.2Q()==="4k"){i=n[e+1];t.m=e+1}});q t.m},2Q:9(){b e=c,t;7(e.12<0){t="4k";e.3e="R"}p{t="X";e.3e="1o"}q t},40:9(){b e=c;e.$k.z("h.R",9(){e.R()});e.$k.z("h.1o",9(){e.1o()});e.$k.z("h.1b",9(t,n){e.6.N=n;e.1b();e.2N="1b"});e.$k.z("h.W",9(){e.W();e.2N="W"});e.$k.z("h.1m",9(t,n){e.1m(n)});e.$k.z("h.3r",9(t,n){e.3r(n)})},22:9(){b e=c;7(e.6.22===j&&e.B.Y!==j&&e.6.N!==d){e.$k.z("4Z",9(){e.W()});e.$k.z("50",9(){7(e.2N!=="W"){e.1b()}})}},1J:9(){b t=c;7(t.6.1J===d){q d}1Z(b n=0;n<t.J;n++){b i=e(t.$L[n]);7(i.w("h-17")==="17"){4d}b s=i.w("h-1W"),o=i.Z(".53"),u;7(F o.w("2r")!=="3a"){i.w("h-17","17");4d}7(i.w("h-17")===r){o.3E();i.I("49").w("h-17","56")}7(t.6.48===j){u=s>=t.m}p{u=j}7(u&&s<t.m+t.6.v&&o.14){t.43(i,o)}}},43:9(e,t){9 i(){r+=1;7(n.2D(t.2B(0))){s()}p 7(r<=2v){19(i,2v)}p{s()}}9 s(){e.w("h-17","17").S("49");t.5c("w-2r");n.6.3W==="3U"?t.5f(5g):t.3B()}b n=c,r=0;t[0].2r=t.w("2r");i()},1q:9(){9 s(){i+=1;7(t.2D(n.2B(0))){o()}p 7(i<=2v){19(s,2v)}p{t.1D.A("2S","")}}9 o(){b n=e(t.$L[t.m]).2S();t.1D.A("2S",n+"T");7(!t.1D.1H("1q")){19(9(){t.1D.I("1q")},0)}}b t=c;b n=e(t.$L[t.m]).Z("5i");7(n.2B(0)!==r){b i=0;s()}p{o()}},2D:9(e){7(!e.3L){q d}7(F e.3S!=="5k"&&e.3S==0){q d}q j},2g:9(){b t=c;t.$L.S("2e");1Z(b n=t.m;n<t.m+t.6.v;n++){e(t.$L[n]).I("2e")}},4o:9(e){b t=c;t.3Q="h-"+e+"-5m";t.3P="h-"+e+"-3x"},3z:9(){9 u(e,t){q{2k:"5o",X:e+"T"}}b e=c;e.1S=j;b t=e.3Q,n=e.3P,r=e.$L.1O(e.m),i=e.$L.1O(e.1i),s=1P.3O(e.D[e.m])+e.D[e.1i],o=1P.3O(e.D[e.m])+e.P/2;e.$H.I("h-1F").A({"-1G-O-1F":o+"T","-1R-3K-1F":o+"T","3K-1F":o+"T"});b a="5s 5t 5u 5v";i.A(u(s,10)).I(t).z(a,9(){e.2T=j;i.Q(a);e.2U(i,t)});r.I(n).z(a,9(){e.2Z=j;r.Q(a);e.2U(r,n)})},2U:9(e,t){b n=c;e.A({2k:"",X:""}).S(t);7(n.2T&&n.2Z){n.$H.S("h-1F");n.2T=d;n.2Z=d;n.1S=d}},4l:9(){b e=c;e.h={27:e.27,5z:e.$k,V:e.$V,L:e.$L,m:e.m,1i:e.1i,Y:e.B.Y,B:e.B}},3A:9(){b r=c;r.$k.Q(".h h 2b.4a");e(n).Q(".h h");e(t).Q("4m",r.33)},1N:9(){b e=c;7(e.$k.1Q().14!==0){e.$H.2M();e.$V.2M().2M();7(e.G){e.G.3c()}}e.3A();e.$k.2c("2d",e.$k.w("h-4s")||"").2c("K",e.$k.w("h-4r"))},5D:9(){b e=c;e.W();1a(e.21);e.1N();e.$k.5E()},5F:9(t){b n=c;b r=e.3F({},n.27,t);n.1N();n.1K(r,n.$k)},5G:9(e,t){b n=c,i;7(!e){q d}7(n.$k.1Q().14===0){n.$k.1e(e);n.1L();q d}n.1N();7(t===r||t===-1){i=-1}p{i=t}7(i>=n.$V.14||i===-1){n.$V.1O(-1).5H(e)}p{n.$V.1O(i).5I(e)}n.1L()},5J:9(e){b t=c,n;7(t.$k.1Q().14===0){q d}7(e===r||e===-1){n=-1}p{n=e}t.1N();t.$V.1O(n).3c();t.1L()}};e.3g.28=9(t){q c.2h(9(){7(e(c).w("h-1K")===j){q d}e(c).w("h-1K",j);b n=3v.2K(i);n.1K(t,c);e.w(c,"28",n)})};e.3g.28.6={v:5,1v:[5K,4],1I:[5L,3],1X:[5M,2],1A:d,1E:[5N,1],4q:d,1f:2E,1y:5O,2t:5P,N:d,22:d,25:d,2P:["1o","R"],2f:j,1U:d,1t:j,31:d,2V:j,4n:2E,4p:t,1M:"h-5Q",24:"h-24",1J:d,48:j,3W:"3U",1q:d,38:d,3d:d,30:j,1C:j,1B:j,2g:d,2j:d,3l:d,3o:d,2Y:d,3b:d,1V:d,3s:d,3i:d,3n:d}})(5R,5S,5T)',62,366,'||||||options|if||function||var|this|false||||owl||true|elem||currentItem|||else|return|||||items|data|||on|css|browser|0px|positionsInArray|maximumItem|typeof|owlControls|owlWrapper|addClass|itemsAmount|class|owlItems|div|autoPlay|transform|itemWidth|off|next|removeClass|px|apply|userItems|stop|left|isTouch|find||newPosX|newRelativeX|ev_types|length|disabled|css2slide|loaded|null|setTimeout|clearInterval|play|target|transition|append|slideSpeed|wrapper|width|prevItem|support3d|transition3d|translate3d|goTo|page|prev|paginationWrapper|autoHeight|preventDefault|buttonPrev|pagination|autoPlayInterval|itemsDesktop|ms|swapSpeed|paginationSpeed|buttonNext|itemsTabletSmall|touchDrag|mouseDrag|wrapperOuter|itemsMobile|origin|webkit|hasClass|itemsDesktopSmall|lazyLoad|init|setVars|baseClass|unWrap|eq|Math|children|moz|isTransition|storePrevItem|scrollPerPage|beforeMove|item|itemsTablet|isCss3Finish|for||checkVisible|stopOnHover|opacity|theme|navigation|isCssFinish|userOptions|owlCarousel|html|maximumPixels|mousedown|attr|style|active|rewindNav|addClassActive|each|ease|transitionStyle|position|eachMoveUpdate|rewind|orignalItems|sliding|all|afterGo|src|touchend|rewindSpeed|mouseup|100|addCssSpeed|is|roundPages|move|touchmove|get|targetElement|completeImg|200|offsetY|offsetX|updateItems|calculateAll|relativePos|create|updateControls|unwrap|hoverStatus|checkPagination|navigationText|moveDirection|logIn|height|endPrev|clearTransStyle|responsive|grabbing|click|beforeInit|endCurrent|dragBeforeAnimFinish|paginationNumbers|visible|resizer|event|originalEvent|checkNavigation|watchVisibility|jsonPath|dragging|string|afterInit|remove|jsonSuccess|playDirection|checkAp|fn|getPrevItem|afterAction|updateVars|Number|beforeUpdate|pageX|startDragging|afterUpdate|touches|newPosY|jumpTo|afterMove|max|apStatus|Object|end|in|disable|singleItemTransition|clearEvents|show|removeTransition|doTranslate|hide|extend|loadContent|span|css2move|updatePagination|perspective|complete|checkBrowser|cssText|abs|inClass|outClass|buildButtons|naturalWidth|eventTypes|fade|buildPagination|lazyEffect|gestures|disabledEvents|wrapItems|customEvents|touchstart|onStartup|lazyPreload|mousemove|touchcancel|start|min|lazyFollow|loading|disableTextSelect|loops|buildControls|continue|response|moveEvents|calculateWidth|appendWrapperSizes|appendItemsSizes|pageY|right|owlStatus|resize|responsiveRefreshRate|transitionTypes|responsiveBaseWidth|singleItem|originalClasses|originalStyles|outer|wrap|improveClosest|drag|getNewPosition|animate|setInterval|srcElement|reload|updatePosition|display|block|ontouchstart|returnValue|top|5e3|500|stopImmediatePropagation|stopPropagation|_data|events|pop|splice|baseElWidth|minSwipe|maxSwipe|dargging|wrapAll|clearTimeout|clientY|clientX|option|mouseover|mouseout|select|textarea|lazyOwl|input|dragstart|checked|round|push|controls|toggleClass|clickable|removeAttr|appendTo|msMaxTouchPoints|fadeIn|400|navigator|img|onstartup|undefined|buttons|out|match|relative|wrapperWidth|createElement|duration|webkitAnimationEnd|oAnimationEnd|MSAnimationEnd|animationend|getJSON|text|numbers|baseElement|destroyControls|new|prototype|destroy|removeData|reinit|addItem|after|before|removeItem|1199|979|768|479|800|1e3|carousel|jQuery|window|document'.split('|'),0,{}))


/**
 * bootbox.js v4.1.0
 *
 * http://bootboxjs.com/license.txt
 */
window.bootbox=window.bootbox||function a(b,c){"use strict";function d(a){var b=r[p.locale];return b?b[a]:r.en[a]}function e(a,c,d){a.preventDefault();var e=b.isFunction(d)&&d(a)===!1;e||c.modal("hide")}function f(a){var b,c=0;for(b in a)c++;return c}function g(a,c){var d=0;b.each(a,function(a,b){c(a,b,d++)})}function h(a){var c,d;if("object"!=typeof a)throw new Error("Please supply an object of options");if(!a.message)throw new Error("Please specify a message");return a=b.extend({},p,a),a.buttons||(a.buttons={}),a.backdrop=a.backdrop?"static":!1,c=a.buttons,d=f(c),g(c,function(a,e,f){if(b.isFunction(e)&&(e=c[a]={callback:e}),"object"!==b.type(e))throw new Error("button with key "+a+" must be an object");e.label||(e.label=a),e.className||(e.className=2>=d&&f===d-1?"btn-primary":"btn-default")}),a}function i(a,b){var c=a.length,d={};if(1>c||c>2)throw new Error("Invalid argument length");return 2===c||"string"==typeof a[0]?(d[b[0]]=a[0],d[b[1]]=a[1]):d=a[0],d}function j(a,c,d){return b.extend(!0,{},a,i(c,d))}function k(a,b,c,d){var e={className:"bootbox-"+a,buttons:l.apply(null,b)};return m(j(e,d,c),b)}function l(){for(var a={},b=0,c=arguments.length;c>b;b++){var e=arguments[b],f=e.toLowerCase(),g=e.toUpperCase();a[f]={label:d(g)}}return a}function m(a,b){var d={};return g(b,function(a,b){d[b]=!0}),g(a.buttons,function(a){if(d[a]===c)throw new Error("button key "+a+" is not allowed (options are "+b.join("\n")+")")}),a}var n={dialog:"<div class='bootbox modal' tabindex='-1' role='dialog'><div class='modal-dialog'><div class='modal-content'><div class='modal-body'><div class='bootbox-body'></div></div></div></div></div>",header:"<div class='modal-header'><h4 class='modal-title'></h4></div>",footer:"<div class='modal-footer'></div>",closeButton:"<button type='button' class='bootbox-close-button close'>&times;</button>",form:"<form class='bootbox-form'></form>",inputs:{text:"<input class='bootbox-input bootbox-input-text form-control' autocomplete=off type=text />",email:"<input class='bootbox-input bootbox-input-email form-control' autocomplete='off' type='email' />",select:"<select class='bootbox-input bootbox-input-select form-control'></select>",checkbox:"<div class='checkbox'><label><input class='bootbox-input bootbox-input-checkbox' type='checkbox' /></label></div>"}},o=b("body"),p={locale:"en",backdrop:!0,animate:!0,className:null,closeButton:!0,show:!0},q={};q.alert=function(){var a;if(a=k("alert",["ok"],["message","callback"],arguments),a.callback&&!b.isFunction(a.callback))throw new Error("alert requires callback property to be a function when provided");return a.buttons.ok.callback=a.onEscape=function(){return b.isFunction(a.callback)?a.callback():!0},q.dialog(a)},q.confirm=function(){var a;if(a=k("confirm",["cancel","confirm"],["message","callback"],arguments),a.buttons.cancel.callback=a.onEscape=function(){return a.callback(!1)},a.buttons.confirm.callback=function(){return a.callback(!0)},!b.isFunction(a.callback))throw new Error("confirm requires a callback");return q.dialog(a)},q.prompt=function(){var a,d,e,f,h,i,k;if(f=b(n.form),d={className:"bootbox-prompt",buttons:l("cancel","confirm"),value:"",inputType:"text"},a=m(j(d,arguments,["title","callback"]),["cancel","confirm"]),i=a.show===c?!0:a.show,a.message=f,a.buttons.cancel.callback=a.onEscape=function(){return a.callback(null)},a.buttons.confirm.callback=function(){var c;switch(a.inputType){case"text":case"email":case"select":c=h.val();break;case"checkbox":var d=h.find("input:checked");c=[],g(d,function(a,d){c.push(b(d).val())})}return a.callback(c)},a.show=!1,!a.title)throw new Error("prompt requires a title");if(!b.isFunction(a.callback))throw new Error("prompt requires a callback");if(!n.inputs[a.inputType])throw new Error("invalid prompt type");switch(h=b(n.inputs[a.inputType]),a.inputType){case"text":case"email":h.val(a.value);break;case"select":var o={};if(k=a.inputOptions||[],!k.length)throw new Error("prompt with select requires options");g(k,function(a,d){var e=h;if(d.value===c||d.text===c)throw new Error("given options in wrong format");d.group&&(o[d.group]||(o[d.group]=b("<optgroup/>").attr("label",d.group)),e=o[d.group]),e.append("<option value='"+d.value+"'>"+d.text+"</option>")}),g(o,function(a,b){h.append(b)}),h.val(a.value);break;case"checkbox":var p=b.isArray(a.value)?a.value:[a.value];if(k=a.inputOptions||[],!k.length)throw new Error("prompt with checkbox requires options");if(!k[0].value||!k[0].text)throw new Error("given options in wrong format");h=b("<div/>"),g(k,function(c,d){var e=b(n.inputs[a.inputType]);e.find("input").attr("value",d.value),e.find("label").append(d.text),g(p,function(a,b){b===d.value&&e.find("input").prop("checked",!0)}),h.append(e)})}return a.placeholder&&h.attr("placeholder",a.placeholder),f.append(h),f.on("submit",function(a){a.preventDefault(),e.find(".btn-primary").click()}),e=q.dialog(a),e.off("shown.bs.modal"),e.on("shown.bs.modal",function(){h.focus()}),i===!0&&e.modal("show"),e},q.dialog=function(a){a=h(a);var c=b(n.dialog),d=c.find(".modal-body"),f=a.buttons,i="",j={onEscape:a.onEscape};if(g(f,function(a,b){i+="<button data-bb-handler='"+a+"' type='button' class='btn "+b.className+"'>"+b.label+"</button>",j[a]=b.callback}),d.find(".bootbox-body").html(a.message),a.animate===!0&&c.addClass("fade"),a.className&&c.addClass(a.className),a.title&&d.before(n.header),a.closeButton){var k=b(n.closeButton);a.title?c.find(".modal-header").prepend(k):k.css("margin-top","-10px").prependTo(d)}return a.title&&c.find(".modal-title").html(a.title),i.length&&(d.after(n.footer),c.find(".modal-footer").html(i)),c.on("hidden.bs.modal",function(a){a.target===this&&c.remove()}),c.on("shown.bs.modal",function(){c.find(".btn-primary:first").focus()}),c.on("escape.close.bb",function(a){j.onEscape&&e(a,c,j.onEscape)}),c.on("click",".modal-footer button",function(a){var d=b(this).data("bb-handler");e(a,c,j[d])}),c.on("click",".bootbox-close-button",function(a){e(a,c,j.onEscape)}),c.on("keyup",function(a){27===a.which&&c.trigger("escape.close.bb")}),o.append(c),c.modal({backdrop:a.backdrop,keyboard:!1,show:!1}),a.show&&c.modal("show"),c},q.setDefaults=function(){var a={};2===arguments.length?a[arguments[0]]=arguments[1]:a=arguments[0],b.extend(p,a)},q.hideAll=function(){b(".bootbox").modal("hide")};var r={br:{OK:"OK",CANCEL:"Cancelar",CONFIRM:"Sim"},da:{OK:"OK",CANCEL:"Annuller",CONFIRM:"Accepter"},de:{OK:"OK",CANCEL:"Abbrechen",CONFIRM:"Akzeptieren"},en:{OK:"OK",CANCEL:"Cancel",CONFIRM:"OK"},es:{OK:"OK",CANCEL:"Cancelar",CONFIRM:"Aceptar"},fi:{OK:"OK",CANCEL:"Peruuta",CONFIRM:"OK"},fr:{OK:"OK",CANCEL:"Annuler",CONFIRM:"D'accord"},it:{OK:"OK",CANCEL:"Annulla",CONFIRM:"Conferma"},nl:{OK:"OK",CANCEL:"Annuleren",CONFIRM:"Accepteren"},no:{OK:"OK",CANCEL:"Avbryt",CONFIRM:"OK"},pl:{OK:"OK",CANCEL:"Anuluj",CONFIRM:"Potwierdź"},ru:{OK:"OK",CANCEL:"Отмена",CONFIRM:"Применить"},zh_CN:{OK:"OK",CANCEL:"取消",CONFIRM:"确认"},zh_TW:{OK:"OK",CANCEL:"取消",CONFIRM:"確認"}};return q.init=function(c){window.bootbox=a(c||b)},q}(window.jQuery);


/*! Lazy Load 1.9.3 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);





/*---------------------------------------------------------------------------------------------

@author       Constantin Saguin - @brutaldesign
@link            http://bsign.co
@github        http://github.com/brutaldesign/swipebox
@version     1.1.2
@license      MIT License

----------------------------------------------------------------------------------------------*/
$("body").on("click touchmove",".slide.current",function(){
	$("#swipebox-close").click();
});

(function (window, document, $, undefined) {
	
	$.swipebox = function(elem, options) {
		var imgIndex,imgsrc,dlIndex;
		$(elem.selector).off("click").on("click",function(){
			dlIndex= $(this).parents("dl").index();
			imgIndex = $(this).parents("dd").index();
		});

		var defaults = {
			useCSS : true,
			hideBarsDelay : 3000
		},
			imgIndex = imgIndex,
			imgsrc = [],
			plugin = this,
			$elem = $(elem),
			elem = elem,
			selector = elem.selector,
			$selector = $(selector),
			isTouch = document.createTouch !== undefined || ('ontouchstart' in window) || ('onmsgesturechange' in window) || navigator.msMaxTouchPoints,
			supportSVG = !!(window.SVGSVGElement),
			html = '<div id="swipebox-overlay">\
					<div id="swipebox-slider"></div>\
					<div id="swipebox-caption"></div>\
					<div id="swipebox-action">\
						<a id="swipebox-close"></a>\
						<a id="swipebox-prev"></a>\
						<a id="swipebox-next"></a>\
						<a class="swipebox-cart"><i class="iconfont icon-gouwuche"></i></a>\
					</div>\
					</div>';

		plugin.settings = {}
// <a class="swipebox-cart" href="javascript:;"><i class="iconfont"></i></a>
		plugin.init = function(){

			plugin.settings = $.extend({}, defaults, options);
			
			$selector.click(function(e){
				e.preventDefault();
				e.stopPropagation();
				index = $elem.index($(this));
				ui.target = $(e.target);
				ui.init(index);
			});
		}

		var ui = {

			init : function(index){
				this.target.trigger('swipebox-start');
				this.build();
				this.openSlide(index);
				this.openImg(index);
				this.preloadImg(index+1);
				this.preloadImg(index-1);
			},

			build : function(){
				var $this = this;

				$('body').append(html);
				if(options.hideShopcartButton){
					$('.swipebox-cart').hide();
				}
				if($this.doCssTrans()){
					$('#swipebox-slider').css({
						'-webkit-transition' : 'left 0.4s ease',
						'-moz-transition' : 'left 0.4s ease',
						'-o-transition' : 'left 0.4s ease',
						'-khtml-transition' : 'left 0.4s ease',
						'transition' : 'left 0.4s ease'
					});
					$('#swipebox-overlay').css({
						'-webkit-transition' : 'opacity 1s ease',
						'-moz-transition' : 'opacity 1s ease',
						'-o-transition' : 'opacity 1s ease',
						'-khtml-transition' : 'opacity 1s ease',
						'transition' : 'opacity 1s ease'
					});
					// $('#swipebox-action, #swipebox-caption').css({
					// 	'-webkit-transition' : '0.5s',
					// 	'-moz-transition' : '0.5s',
					// 	'-o-transition' : '0.5s',
					// 	'-khtml-transition' : '0.5s',
					// 	'transition' : '0.5s'
					// });
				}


				if(supportSVG){
					var bg = $('#swipebox-action #swipebox-close').css('background-image');
					bg = bg.replace('png', 'svg');
					$('#swipebox-action #swipebox-prev,#swipebox-action #swipebox-next,#swipebox-action #swipebox-close').css({
						'background-image' : bg
					});
				}
				
				imgsrc = $(".layer-wrap.active dl.product-to-cart-list,.task-detail-products").children().eq(imgIndex).find(".photo-group").data("imggroup");
				
				if(!imgsrc){
					imgsrc = $(".layer-wrap.active dl.shopping-cart,.task-detail-products").eq(dlIndex-1).children().eq(imgIndex).find(".photo-group").data("imggroup");
				}
				if(!imgsrc){
					imgsrc = $("dl.product-to-cart-list,.task-detail-products").children().eq(imgIndex).find(".photo-group").data("imggroup");
				}
				if(!imgsrc){
					imgsrc = $("dl.shopping-cart,.task-detail-products").eq(dlIndex-1).children().eq(imgIndex).find(".photo-group").data("imggroup");
				}
				imgsrc = imgsrc.split(",");
				
				for (var i=0;i<imgsrc.length;i++){
					$('#swipebox-slider').append('<div class="slide"><img src="'+imgsrc[i]+'"></div>');
				}	
				/*
				$elem.each(function(){
					var imgurl=$(".layer-wrap.active .img-wrap.slider-photo img").attr('src');
					$('#swipebox-slider').append('<div class="slide"><img src="'+imgurl+'"></div>');
				});
				*/

				$this.setDim();
				$this.actions();
				$this.keyboard();
				$this.gesture();
				$this.animBars();

				$(window).resize(function() {
					$this.setDim();
				}).resize();
			},

			setDim : function(){
				var sliderCss = {
					width : $(window).width(),
					height : window.innerHeight ? window.innerHeight : $(window).height() // fix IOS bug
				}

				$('#swipebox-overlay').css(sliderCss);

			},

			supportTransition : function() {
				var prefixes = 'transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition'.split(' ');
				for(var i = 0; i < prefixes.length; i++) {
					if(document.createElement('div').style[prefixes[i]] !== undefined) {
						return prefixes[i];
					}
				}
				return false;
			},

			doCssTrans : function(){
				if(plugin.settings.useCSS && this.supportTransition() ){
					return true;
				}

			},

			gesture : function(){
					var $this = this,
					distance = null,
					swipMinDistance = 10,
					startCoords = {}, 
					endCoords = {};
					// var b = $('#swipebox-caption, #swipebox-action');
					var b = $('#swipebox-caption');
					b.addClass('visible-bars');
					$this.setTimeout();

					$('body').bind('touchstart', function(e){

						$(this).addClass('touching');
						

		  				endCoords = e.originalEvent.targetTouches[0];
		    				startCoords.pageX = e.originalEvent.targetTouches[0].pageX;

						$('.touching').bind('touchmove',function(e){
							e.preventDefault();
							e.stopPropagation();
		    					endCoords = e.originalEvent.targetTouches[0];

						});
			           			
			           			return false;

	           			}).bind('touchend',function(e){
	     //       			e.preventDefault();
						// e.stopPropagation();

						$(".slide.current").on("click",function(){
							$("#swipebox-close").click();
						});
						

	   					distance = endCoords.pageX - startCoords.pageX;
	       				
	       				if( distance >= swipMinDistance ){
	       					// swipeLeft
	       					$this.getPrev();
	       				}

	       				else if( distance <= - swipMinDistance ){
	       					// swipeRight
	       					$this.getNext();
	       				
	       				}else{
	       					// tap
	       					if(!b.hasClass('visible-bars')){
							$this.showBars();
							$this.setTimeout();
						}else{
							$this.clearTimeout();
							// $this.hideBars();
						}
	       				}	

	       				$('.touching').off('touchmove').removeClass('touching');


	       				
					});
			},

			setTimeout: function(){
				if(plugin.settings.hideBarsDelay > 0){
					var $this = this;
					$this.clearTimeout();
					$this.timeout = window.setTimeout( function(){
						// $this.hideBars(); 
					},
						plugin.settings.hideBarsDelay
					);
				}
			},
			
			clearTimeout: function(){	
				window.clearTimeout(this.timeout);
				this.timeout = null;
			},

			// showBars : function(){
			// 	var b = $('#swipebox-caption, #swipebox-action');
			// 	if(this.doCssTrans()){
			// 		b.addClass('visible-bars');
			// 	}else{
			// 		$('#swipebox-caption').animate({ top : 0 }, 500);
			// 		$('#swipebox-action').animate({ bottom : 0 }, 500);
			// 		setTimeout(function(){
			// 			b.addClass('visible-bars');
			// 		}, 1000);
			// 	}
			// },

			// hideBars : function(){
			// 	var b = $('#swipebox-caption, #swipebox-action');
			// 	if(this.doCssTrans()){
			// 		b.removeClass('visible-bars');
			// 	}else{
			// 		$('#swipebox-caption').animate({ top : '-50px' }, 500);
			// 		$('#swipebox-action').animate({ bottom : '-50px' }, 500);
			// 		setTimeout(function(){
			// 			b.removeClass('visible-bars');
			// 		}, 1000);
			// 	}
			// },

			animBars : function(){
				var $this = this;
				var b = $('#swipebox-caption, #swipebox-action');
					
				b.addClass('visible-bars');
				$this.setTimeout();

				$('#swipebox-slider').click(function(e){

					if(!b.hasClass('visible-bars')){
						$this.showBars();
						$this.setTimeout();

					}
					e.preventDefault();
					e.stopPropagation();
					$this.closeSlide();
				});
				
				$('#swipebox-next').bind('click touchend', function(e){
					e.preventDefault();
					e.stopPropagation();
					// $this.getNext();
					$this.setTimeout();
				});

				$('#swipebox-action').hover(function() {
				  		$this.showBars();
						b.addClass('force-visible-bars');
						$this.clearTimeout();
					
					},function() { 
						b.removeClass('force-visible-bars');
						$this.setTimeout();

				});
			},

			keyboard : function(){
				var $this = this;
				$(window).bind('keyup', function(e){
					e.preventDefault();
					e.stopPropagation();
					if (e.keyCode == 37){
						$this.getPrev();
					}
					else if (e.keyCode==39){
						$this.getNext();
					}
					else if (e.keyCode == 27) {
						$this.closeSlide();
					}
				});
			},

			actions : function(){
				var $this = this;
				// $('.swipebox-cart').on('click touchend', function(e){
				// 		e.preventDefault();
				// 		e.stopPropagation();
				// 		if($(this).hasClass("active")){
		  //               //移除
		  //               $(this).removeClass("active");
		  //               if(false){
		  //                   $(".swipebox-cart").removeClass("active");
		  //               }

		  //           }else{
		  //               //添加
		  //               $(this).addClass("active");
		  //               cartA(this);
		  //           }
				// 	});
				
				if( imgIndex.length < 2 ){
					$('#swipebox-prev, #swipebox-next').hide();
				}else{
					$('#swipebox-prev').bind('click touchend', function(e){
						e.preventDefault();
						e.stopPropagation();
						$this.getPrev();
						$this.setTimeout();
					});
					
					$('#swipebox-next').bind('click touchend', function(e){
						e.preventDefault();
						e.stopPropagation();
						$this.getNext();
						$this.setTimeout();
					});
				}
				$('#swipebox-close').bind('click touchend', function(e){
					$this.closeSlide();
				});
				// $('.slide.current').bind('click', function(e){
				// 	$this.closeSlide();
				// });

			},
			
			setSlide : function (index, isFirst){

				isFirst = isFirst || false;
				
				var slider = $('#swipebox-slider');
				
				if(this.doCssTrans()){
					slider.css({ left : (-index*100)+'%' });
				}else{
					slider.animate({ left : (-index*100)+'%' });
				}
				
				$('#swipebox-slider .slide').removeClass('current');
				$('#swipebox-slider .slide').eq(index).addClass('current');
				
				this.setTitle(index);
				if( isFirst ){
					slider.fadeIn();
				}
				$('#swipebox-prev, #swipebox-next').removeClass('disabled');
				if(index == 0 ){
					$('#swipebox-prev').addClass('disabled');
					if(imgsrc.length == 1){
						$('#swipebox-next').addClass('disabled');
					}
				}else if( index == imgsrc.length - 1 ){
					$('#swipebox-next').addClass('disabled');
				}
			},
		
			openSlide : function (index){
				

				
				$('html').addClass('swipebox');
				$(window).trigger('resize'); // fix scroll bar visibility on desktop
				this.setSlide(0, true);
			},
		
			preloadImg : function (index){
				var $this = this;
				setTimeout(function(){
					$this.openImg(index);
				}, 1000);
			},
			
			openImg : function (index){
				var $this = this;
				if(index < 0 || index >= imgIndex.length){
					return false;
				}

				$this.loadImg($elem.eq(index).attr('href'), function(){
					$('#swipebox-slider .slide').eq(index).html(this);
				});


			},


			setTitle : function(index, isFirst){
				$('#swipebox-caption').empty();
				
				if($elem.eq(index).attr('title')){
					$('#swipebox-caption').append($elem.eq(index).attr('title'));
				}
			},
			
			loadImg : function (src, callback){
				var img = $('<img>').on('load', function(){
					callback.call(img);
				});
				
				img.attr('src',src);
			},
			
			getNext : function (){
				var $this = this;
				index = $('#swipebox-slider .slide').index($('#swipebox-slider .slide.current'));
				if(index+1 < imgsrc.length){
					index++;
					$this.setSlide(index);
					$this.preloadImg(index+1);
				}
				else{
					
					$('#swipebox-slider').addClass('rightSpring');
					setTimeout(function(){
						$('#swipebox-slider').removeClass('rightSpring');
					},500);
				}
			},
			
			getPrev : function (){
				var $this = this;
				index = $('#swipebox-slider .slide').index($('#swipebox-slider .slide.current'));
				if(index > 0){
					index--;
					$this.setSlide(index);
					$this.preloadImg(index-1);
				}
				else{
					
					$('#swipebox-slider').addClass('leftSpring');
					setTimeout(function(){
						$('#swipebox-slider').removeClass('leftSpring');
					},500);
				}
			},


			closeSlide : function (){
				var $this = this;
				$(window).trigger('resize');
				$('html').removeClass('swipebox');
				$this.destroy();
			},

			destroy : function(){
				var $this = this;
				$(window).unbind('keyup');
				$('body').unbind('touchstart');
				$('body').unbind('touchmove');
				$('body').unbind('touchend');
				$('#swipebox-slider').unbind();
				$('#swipebox-overlay').remove();
				$elem.removeData('_swipebox');
				$this.target.trigger('swipebox-destroy');
 			},

 			

		}

		plugin.init();
		
	}

	$.fn.swipebox = function(options){
		if (!$.data(this, "_swipebox")) {
			var swipebox = new $.swipebox(this, options);
			this.data('_swipebox', swipebox);
			


		}
	}

	

}(window, document, jQuery));



