import{S as C,i as j,s as L,al as g,h as k,j as b,b as w,d as u,e as m,f as p,am as I,t as h,p as f,n as r,w as d,X as q,Y as D,g as y,m as M,o as P,q as R,L as B,r as S,M as N,u as V,N as T,P as W,R as $}from"./chunks/index.56cfbdee.js";import{E as F,a as G}from"./chunks/Ellipse-3.92c77ed2.js";import{E as X}from"./chunks/Ellipse-2.3a603fdb.js";import{T as Y}from"./chunks/TestimonialCard.e1de1c7c.js";import{g as z}from"./chunks/getImageDimensions.2adda0ad.js";import{t as A}from"./chunks/theme.9582e931.js";import"./chunks/clsx.m.94787637.js";/* empty css                              */import"./chunks/index.37fba356.js";function v(a,l,i){const o=a.slice();o[4]=l[i].content,o[5]=l[i].Ellipse;const e=z(o[4].logotype.logoBlack);return o[6]=e,o}function H(a){return{c:r,l:r,m:r,p:r,i:r,o:r,d:r}}function J(a){let l,i,o,e={ctx:a,current:null,token:null,hasCatch:!1,pending:Z,then:O,catch:K,blocks:[,,,]};return g(i=a[2],e),{c(){l=d(),e.block.c()},l(n){l=d(),e.block.l(n)},m(n,t){p(n,l,t),e.block.m(n,e.anchor=t),e.mount=()=>l.parentNode,e.anchor=l,o=!0},p(n,t){a=n,e.ctx=a,t&4&&i!==(i=a[2])&&g(i,e)||I(e,a,t)},i(n){o||(h(e.block),o=!0)},o(n){for(let t=0;t<3;t+=1){const s=e.blocks[t];f(s)}o=!1},d(n){n&&u(l),e.block.d(n),e.token=null,e=null}}}function K(a){return{c:r,l:r,m:r,p:r,i:r,o:r,d:r}}function O(a){let l,i,o=a[2],e=[];for(let t=0;t<o.length;t+=1)e[t]=E(v(a,o,t));const n=t=>f(e[t],1,1,()=>{e[t]=null});return{c(){for(let t=0;t<e.length;t+=1)e[t].c();l=d()},l(t){for(let s=0;s<e.length;s+=1)e[s].l(t);l=d()},m(t,s){for(let c=0;c<e.length;c+=1)e[c].m(t,s);p(t,l,s),i=!0},p(t,s){if(s&6){o=t[2];let c;for(c=0;c<o.length;c+=1){const _=v(t,o,c);e[c]?(e[c].p(_,s),h(e[c],1)):(e[c]=E(_),e[c].c(),h(e[c],1),e[c].m(l.parentNode,l))}for(M(),c=o.length;c<e.length;c+=1)n(c);P()}},i(t){if(!i){for(let s=0;s<o.length;s+=1)h(e[s]);i=!0}},o(t){e=e.filter(Boolean);for(let s=0;s<e.length;s+=1)f(e[s]);i=!1},d(t){R(e,t),t&&u(l)}}}function Q(a){let l,i;return l=new a[5]({props:{slot:"icon",className:"h-[40px] w-auto fill-textSecondary"}}),{c(){B(l.$$.fragment)},l(o){N(l.$$.fragment,o)},m(o,e){T(l,o,e),i=!0},p:r,i(o){i||(h(l.$$.fragment,o),i=!0)},o(o){f(l.$$.fragment,o),i=!1},d(o){W(l,o)}}}function U(a){let l,i,o,e,n;return{c(){l=k("img"),this.h()},l(t){l=b(t,"IMG",{slot:!0,src:!0,width:!0,height:!0,alt:!0,class:!0}),this.h()},h(){m(l,"slot","logo"),$(l.src,i=a[4].logotype[a[1]==="light"?"logoBlack":"logoWhite"].asset.url)||m(l,"src",i),m(l,"width",o=a[6].width),m(l,"height",e=a[6].height),m(l,"alt",n=a[4].logotype[a[1]==="light"?"logoBlack":"logoWhite"].alt),m(l,"class","max-h-[24px] max-w-fit text-textPrimary")},m(t,s){p(t,l,s)},p(t,s){s&6&&!$(l.src,i=t[4].logotype[t[1]==="light"?"logoBlack":"logoWhite"].asset.url)&&m(l,"src",i),s&4&&o!==(o=t[6].width)&&m(l,"width",o),s&4&&e!==(e=t[6].height)&&m(l,"height",e),s&6&&n!==(n=t[4].logotype[t[1]==="light"?"logoBlack":"logoWhite"].alt)&&m(l,"alt",n)},d(t){t&&u(l)}}}function E(a){let l,i,o,e;return i=new Y({props:{textClass:"text-lg",name:a[4].author,job:a[4].authorRole,website:a[4].companyWebsite,linkedIn:a[4].linkedIn,company:a[4].companyName,text:a[4].text,$$slots:{logo:[U],icon:[Q]},$$scope:{ctx:a}}}),{c(){l=k("div"),B(i.$$.fragment),o=S(),this.h()},l(n){l=b(n,"DIV",{class:!0});var t=w(l);N(i.$$.fragment,t),o=V(t),t.forEach(u),this.h()},h(){m(l,"class","md:w-[70%] lg:w-1/3")},m(n,t){p(n,l,t),T(i,l,null),y(l,o),e=!0},p(n,t){const s={};t&4&&(s.name=n[4].author),t&4&&(s.job=n[4].authorRole),t&4&&(s.website=n[4].companyWebsite),t&4&&(s.linkedIn=n[4].linkedIn),t&4&&(s.company=n[4].companyName),t&4&&(s.text=n[4].text),t&518&&(s.$$scope={dirty:t,ctx:n}),i.$set(s)},i(n){e||(h(i.$$.fragment,n),e=!0)},o(n){f(i.$$.fragment,n),e=!1},d(n){n&&u(l),W(i)}}}function Z(a){return{c:r,l:r,m:r,p:r,i:r,o:r,d:r}}function x(a){let l,i;return{c(){l=k("p"),i=q("Loading...")},l(o){l=b(o,"P",{});var e=w(l);i=D(e,"Loading..."),e.forEach(u)},m(o,e){p(o,l,e),y(l,i)},p:r,i:r,o:r,d(o){o&&u(l)}}}function ee(a){let l,i,o,e={ctx:a,current:null,token:null,hasCatch:!1,pending:x,then:J,catch:H,blocks:[,,,]};return g(i=a[0],e),{c(){l=k("div"),e.block.c(),this.h()},l(n){l=b(n,"DIV",{class:!0});var t=w(l);e.block.l(t),t.forEach(u),this.h()},h(){m(l,"class","flex flex-col flex-wrap justify-center gap-2 -mx-3 md:mx-0 md:flex-row lg:flex-nowrap lg:gap-3")},m(n,t){p(n,l,t),e.block.m(l,e.anchor=null),e.mount=()=>l,e.anchor=null,o=!0},p(n,[t]){a=n,e.ctx=a,t&1&&i!==(i=a[0])&&g(i,e)||I(e,a,t)},i(n){o||(h(e.block),o=!0)},o(n){for(let t=0;t<3;t+=1){const s=e.blocks[t];f(s)}o=!1},d(n){n&&u(l),e.block.d(),e.token=null,e=null}}}function te(a,l,i){let o;A.subscribe(s=>{i(1,o=s)});let{testimonials:e}=l,n=[];const t=s=>{i(2,n=s.sort(()=>.5-Math.random()).slice(0,3).map((c,_)=>({...c,Ellipse:_===0?F:_===1?X:G})))};return a.$$set=s=>{"testimonials"in s&&i(0,e=s.testimonials)},a.$$.update=()=>{a.$$.dirty&1&&e&&t(e)},[e,o,n]}class ue extends C{constructor(l){super(),j(this,l,te,ee,L,{testimonials:0})}}export{ue as default};
