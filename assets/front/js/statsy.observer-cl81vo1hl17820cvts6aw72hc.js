"use strict";(()=>{var de=(t,e)=>()=>(t&&(e=t(t=0)),e);var le=(t,e)=>()=>(e||t((e={exports:{}}).exports,e),e.exports);var m,C,J,b,N,K,h,R,P,l,g,E,p,w,$,U,q,x,j,k,Q,T,pe,V,W,ve,X,Y,Z,B,L,me,ee,he,te,z,v,M,G,ne,D,ie,ge,re,ae=de(()=>{K=-1,h=function(t){addEventListener("pageshow",function(e){e.persisted&&(K=e.timeStamp,t(e))},!0)},R=function(){return window.performance&&performance.getEntriesByType&&performance.getEntriesByType("navigation")[0]},P=function(){var t=R();return t&&t.activationStart||0},l=function(t,e){var r=R(),i="navigate";return K>=0?i="back-forward-cache":r&&(i=document.prerendering||P()>0?"prerender":r.type.replace(/_/g,"-")),{name:t,value:e===void 0?-1:e,rating:"good",delta:0,entries:[],id:"v3-".concat(Date.now(),"-").concat(Math.floor(8999999999999*Math.random())+1e12),navigationType:i}},g=function(t,e,r){try{if(PerformanceObserver.supportedEntryTypes.includes(t)){var i=new PerformanceObserver(function(a){e(a.getEntries())});return i.observe(Object.assign({type:t,buffered:!0},r||{})),i}}catch{}},E=function(t,e){var r=function i(a){a.type!=="pagehide"&&document.visibilityState!=="hidden"||(t(a),e&&(removeEventListener("visibilitychange",i,!0),removeEventListener("pagehide",i,!0)))};addEventListener("visibilitychange",r,!0),addEventListener("pagehide",r,!0)},p=function(t,e,r,i){var a,n;return function(c){e.value>=0&&(c||i)&&((n=e.value-(a||0))||a===void 0)&&(a=e.value,e.delta=n,e.rating=function(u,f){return u>f[1]?"poor":u>f[0]?"needs-improvement":"good"}(e.value,r),t(e))}},w=-1,$=function(){return document.visibilityState!=="hidden"||document.prerendering?1/0:0},U=function(){E(function(t){var e=t.timeStamp;w=e},!0)},q=function(){return w<0&&(w=$(),U(),h(function(){setTimeout(function(){w=$(),U()},0)})),{get firstHiddenTime(){return w}}},x=function(t,e){e=e||{};var r,i=[1800,3e3],a=q(),n=l("FCP"),c=function(o){o.forEach(function(s){s.name==="first-contentful-paint"&&(f&&f.disconnect(),s.startTime<a.firstHiddenTime&&(n.value=Math.max(s.startTime-P(),0),n.entries.push(s),r(!0)))})},u=window.performance&&window.performance.getEntriesByName&&window.performance.getEntriesByName("first-contentful-paint")[0],f=u?null:g("paint",c);(u||f)&&(r=p(t,n,i,e.reportAllChanges),u&&c([u]),h(function(o){n=l("FCP"),r=p(t,n,i,e.reportAllChanges),requestAnimationFrame(function(){requestAnimationFrame(function(){n.value=performance.now()-o.timeStamp,r(!0)})})}))},j=!1,k=-1,Q=function(t,e){e=e||{};var r=[.1,.25];j||(x(function(s){k=s.value}),j=!0);var i,a=function(s){k>-1&&t(s)},n=l("CLS",0),c=0,u=[],f=function(s){s.forEach(function(d){if(!d.hadRecentInput){var S=u[0],fe=u[u.length-1];c&&d.startTime-fe.startTime<1e3&&d.startTime-S.startTime<5e3?(c+=d.value,u.push(d)):(c=d.value,u=[d]),c>n.value&&(n.value=c,n.entries=u,i())}})},o=g("layout-shift",f);o&&(i=p(a,n,r,e.reportAllChanges),E(function(){f(o.takeRecords()),i(!0)}),h(function(){c=0,k=-1,n=l("CLS",0),i=p(a,n,r,e.reportAllChanges)}))},T={passive:!0,capture:!0},pe=new Date,V=function(t,e){m||(m=e,C=t,J=new Date,X(removeEventListener),W())},W=function(){if(C>=0&&C<J-pe){var t={entryType:"first-input",name:m.type,target:m.target,cancelable:m.cancelable,startTime:m.timeStamp,processingStart:m.timeStamp+C};b.forEach(function(e){e(t)}),b=[]}},ve=function(t){if(t.cancelable){var e=(t.timeStamp>1e12?new Date:performance.now())-t.timeStamp;t.type=="pointerdown"?function(r,i){var a=function(){V(r,i),c()},n=function(){c()},c=function(){removeEventListener("pointerup",a,T),removeEventListener("pointercancel",n,T)};addEventListener("pointerup",a,T),addEventListener("pointercancel",n,T)}(e,t):V(e,t)}},X=function(t){["mousedown","keydown","touchstart","pointerdown"].forEach(function(e){return t(e,ve,T)})},Y=function(t,e){e=e||{};var r,i=[100,300],a=q(),n=l("FID"),c=function(o){o.startTime<a.firstHiddenTime&&(n.value=o.processingStart-o.startTime,n.entries.push(o),r(!0))},u=function(o){o.forEach(c)},f=g("first-input",u);r=p(t,n,i,e.reportAllChanges),f&&E(function(){u(f.takeRecords()),f.disconnect()},!0),f&&h(function(){var o;n=l("FID"),r=p(t,n,i,e.reportAllChanges),b=[],C=-1,m=null,X(addEventListener),o=c,b.push(o),W()})},Z=0,B=1/0,L=0,me=function(t){t.forEach(function(e){e.interactionId&&(B=Math.min(B,e.interactionId),L=Math.max(L,e.interactionId),Z=L?(L-B)/7+1:0)})},ee=function(){return N?Z:performance.interactionCount||0},he=function(){"interactionCount"in performance||N||(N=g("event",me,{type:"event",buffered:!0,durationThreshold:0}))},te=0,z=function(){return ee()-te},v=[],M={},G=function(t){var e=v[v.length-1],r=M[t.interactionId];if(r||v.length<10||t.duration>e.latency){if(r)r.entries.push(t),r.latency=Math.max(r.latency,t.duration);else{var i={id:t.interactionId,latency:t.duration,entries:[t]};M[i.id]=i,v.push(i)}v.sort(function(a,n){return n.latency-a.latency}),v.splice(10).forEach(function(a){delete M[a.id]})}},ne=function(t,e){e=e||{};var r=[200,500];he();var i,a=l("INP"),n=function(u){u.forEach(function(s){s.interactionId&&G(s),s.entryType==="first-input"&&!v.some(function(d){return d.entries.some(function(S){return s.duration===S.duration&&s.startTime===S.startTime})})&&G(s)});var f,o=(f=Math.min(v.length-1,Math.floor(z()/50)),v[f]);o&&o.latency!==a.value&&(a.value=o.latency,a.entries=o.entries,i())},c=g("event",n,{durationThreshold:e.durationThreshold||40});i=p(t,a,r,e.reportAllChanges),c&&(c.observe({type:"first-input",buffered:!0}),E(function(){n(c.takeRecords()),a.value<0&&z()>0&&(a.value=0,a.entries=[]),i(!0)}),h(function(){v=[],te=ee(),a=l("INP"),i=p(t,a,r,e.reportAllChanges)}))},D={},ie=function(t,e){e=e||{};var r,i=[2500,4e3],a=q(),n=l("LCP"),c=function(o){var s=o[o.length-1];if(s){var d=Math.max(s.startTime-P(),0);d<a.firstHiddenTime&&(n.value=d,n.entries=[s],r())}},u=g("largest-contentful-paint",c);if(u){r=p(t,n,i,e.reportAllChanges);var f=function(){D[n.id]||(c(u.takeRecords()),u.disconnect(),D[n.id]=!0,r(!0))};["keydown","click"].forEach(function(o){addEventListener(o,f,{once:!0,capture:!0})}),E(f,!0),h(function(o){n=l("LCP"),r=p(t,n,i,e.reportAllChanges),requestAnimationFrame(function(){requestAnimationFrame(function(){n.value=performance.now()-o.timeStamp,D[n.id]=!0,r(!0)})})})}},ge=function t(e){document.prerendering?addEventListener("prerenderingchange",function(){return t(e)},!0):document.readyState!=="complete"?addEventListener("load",function(){return t(e)},!0):setTimeout(e,0)},re=function(t,e){e=e||{};var r=[800,1800],i=l("TTFB"),a=p(t,i,r,e.reportAllChanges);ge(function(){var n=R();if(n){if(i.value=Math.max(n.responseStart-P(),0),i.value<0||i.value>performance.now())return;i.entries=[n],a(!0),h(function(){i=l("TTFB",0),(a=p(t,i,r,e.reportAllChanges))(!0)})}})}});var Te=le(se=>{ae();var F=document,ue=window,oe="https://statsy.observer/beep",{location:H,history:O}=ue;function ye(){return"connection"in navigator&&navigator.connection&&"effectiveType"in navigator.connection?navigator.connection.effectiveType:""}function A(t,{label:e,value:r,rating:i}={}){let a={href:H.href,domain:"dodonut.com",referrer:F.referrer,eventName:`${t}${e?`__${e}`:""}`,speed:ye(),value:r,rating:i},n=new Blob([new URLSearchParams(a).toString()],{type:"application/x-www-form-urlencoded"});navigator.sendBeacon?navigator.sendBeacon(oe,n):fetch(oe,{body:n,method:"POST",credentials:"omit",keepalive:!0})}var ce=window.statsy&&window.statsy.q||[];window.statsy=A;for(let t=0;t<ce.length;t++)A.apply(se,ce[t]);var _;function I(){_!==H.pathname&&(_=H.pathname,A("pageview"))}if(O.pushState){let t=O.pushState;O.pushState=function(){t.apply(this,arguments),I()},ue.addEventListener("popstate",I)}function we(){!_&&F.visibilityState==="visible"&&I()}F.visibilityState==="hidden"?F.addEventListener("visibilitychange",we):I();function y({name:t,...e}){A(t,{...e})}Q(y);x(y);Y(y);ne(y);ie(y);re(y)});Te();})();
