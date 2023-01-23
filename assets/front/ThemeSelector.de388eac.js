import{S as Y,i as K,s as U,h as w,r as F,X as j,j as p,b as C,u as Z,Y as V,d as k,e as d,f as E,g as m,n as S,q as X,ag as z,a2 as G,a as J,c as Q}from"./chunks/index.56cfbdee.js";import{t as D,s as R,g as W}from"./chunks/theme.9582e931.js";import{c as L}from"./chunks/clsx.m.94787637.js";import"./chunks/index.37fba356.js";const x=typeof window<"u",$=e=>{x&&(window.document.documentElement.className=e,D.set(e),R("theme",e,365))},ee='<path d="M21.0009 12.79C20.8436 14.4922 20.2047 16.1144 19.1591 17.4668C18.1135 18.8192 16.7044 19.8458 15.0966 20.4265C13.4888 21.0073 11.7489 21.1181 10.0804 20.7461C8.4119 20.3741 6.88387 19.5345 5.6751 18.3258C4.46633 17.117 3.62682 15.589 3.25479 13.9205C2.88275 12.252 2.99359 10.5121 3.57434 8.9043C4.15508 7.29651 5.18171 5.88737 6.53409 4.84175C7.88647 3.79614 9.50867 3.15731 11.2109 3C10.2143 4.34827 9.73473 6.00945 9.85941 7.68141C9.98409 9.35338 10.7047 10.9251 11.8903 12.1106C13.0758 13.2961 14.6475 14.0168 16.3195 14.1415C17.9914 14.2662 19.6526 13.7866 21.0009 12.79V12.79Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />',te=`<g><path d="M15.4142 6C15.149 6 14.8946 5.89464 14.7071 5.70711L12.7071 3.70711C12.3166 3.31658 11.6834 3.31658 11.2929 3.70711L9.2929 5.70711C9.10537 5.89464 8.85101 6 8.5858 6H7.00001C6.44773 6 6.00001 6.44772 6.00001 7V8.58579C6.00001 8.851 5.89465 9.10536 5.70712 9.29289L3.70711 11.2929C3.31658 11.6834 3.31658 12.3166 3.70711 12.7071L5.70712 14.7071C5.89465 14.8946 6.00001 15.149 6.00001 15.4142V17C6.00001 17.5523 6.44773 18 7.00001 18H8.58578C8.85099 18 9.10535 18.1054 9.29288 18.2929L11.2929 20.2929C11.6834 20.6834 12.3166 20.6834 12.7071 20.2929L14.7071 18.2929C14.8946 18.1054 15.149 18 15.4142 18H17C17.5523 18 18 17.5523 18 17V15.4142C18 15.149 18.1054 14.8946 18.2929 14.7071L20.2929 12.7071C20.6834 12.3166 20.6834 11.6834 20.2929 11.2929L18.2929 9.29289C18.1054 9.10536 18 8.851 18 8.58579V7C18 6.44772 17.5523 6 17 6H15.4142Z" stroke-width="2" stroke-linecap="square" />
<path d="M16 12C16 9.79086 14.2091 8 12 8V16C14.2091 16 16 14.2091 16 12Z" stroke-width="2" stroke-linecap="square" /></g>`,re=`<g>
<path
d="M12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17Z"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M12 1V3"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M12 21V23"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M4.21973 4.21973L5.63973 5.63973"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M18.3604 18.3604L19.7804 19.7804"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M1 12H3"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M21 12H23"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M4.21973 19.7804L5.63973 18.3604"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
<path
d="M18.3604 5.63973L19.7804 4.21973"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
/>
</g>`;var A=(e=>(e.Light="light",e.Dark="dark",e.Dark2="dark2",e))(A||{});const{Light:P,Dark:B,Dark2:I}=A,_={[B]:{value:I,label:"Contrast",icon:te},[I]:{value:B,label:"Dark",icon:ee},[P]:{value:P,label:"Light",icon:re}},oe=[...new Set(Object.keys(_))],ae=typeof window<"u",ne=()=>{if(ae){let e=W("theme");D.set(e)}};function O(e,t,r){const c=e.slice();return c[11]=t[r],c}function se(e){let t,r,c=_[e[11]].icon+"",f,h,u,i=_[e[11]].label.toLowerCase()==="contrast"?"High":"",o,s=" ",a,l,b=_[e[11]].label+"",M,n;return{c(){t=w("div"),r=J("svg"),f=F(),h=w("p"),u=w("span"),o=j(i),a=j(s),l=w("span"),M=j(b),this.h()},l(g){t=p(g,"DIV",{class:!0});var v=C(t);r=Q(v,"svg",{width:!0,height:!0,viewBox:!0,fill:!0,xmlns:!0,"aria-hidden":!0});var T=C(r);T.forEach(k),f=Z(v),h=p(v,"P",{class:!0});var H=C(h);u=p(H,"SPAN",{class:!0});var y=C(u);o=V(y,i),a=V(y,s),y.forEach(k),l=p(H,"SPAN",{});var N=C(l);M=V(N,b),N.forEach(k),H.forEach(k),v.forEach(k),this.h()},h(){d(r,"width","24"),d(r,"height","24"),d(r,"viewBox","0 0 24 24"),d(r,"fill","none"),d(r,"xmlns","http://www.w3.org/2000/svg"),d(r,"aria-hidden","true"),d(u,"class","hidden lg:inline"),d(h,"class",n=L("md:ml-3 mt-2 md:mt-0 font-sans font-normal",e[1]?"":"hidden")),d(t,"class",e[5])},m(g,v){E(g,t,v),m(t,r),r.innerHTML=c,m(t,f),m(t,h),m(h,u),m(u,o),m(u,a),m(h,l),m(l,M)},p(g,v){v&2&&n!==(n=L("md:ml-3 mt-2 md:mt-0 font-sans font-normal",g[1]?"":"hidden"))&&d(h,"class",n),v&32&&d(t,"class",g[5])},d(g){g&&k(t)}}}function q(e){let t,r=oe.some(o),c,f,h,u,i;function o(...l){return e[9](e[11],...l)}let s=r&&se(e);function a(){return e[10](e[11])}return{c(){t=w("button"),s&&s.c(),this.h()},l(l){t=p(l,"BUTTON",{"data-variant":!0,"data-key":!0,"data-active":!0,"aria-label":!0,"aria-live":!0,tabindex:!0,class:!0});var b=C(t);s&&s.l(b),b.forEach(k),this.h()},h(){d(t,"data-variant",e[4]),d(t,"data-key",e[11]),d(t,"data-active",c=e[7]===e[11]&&e[0]?"true":"false"),t.disabled=f=e[7]===e[11],d(t,"aria-label",`${_[e[11]].label} theme`),d(t,"aria-live","polite"),d(t,"tabindex",-1),d(t,"class",h=L("theme","theme-switch",e[2]&&"m-[4px]",!e[1]&&!e[2]&&"bg-cardChi border-t border-r lg:border-r-0 lg:border-t-0 border-b border-highContrast first:border-t"))},m(l,b){E(l,t,b),s&&s.m(t,null),u||(i=G(t,"click",a),u=!0)},p(l,b){e=l,r&&s.p(e,b),b&16&&d(t,"data-variant",e[4]),b&129&&c!==(c=e[7]===e[11]&&e[0]?"true":"false")&&d(t,"data-active",c),b&128&&f!==(f=e[7]===e[11])&&(t.disabled=f),b&6&&h!==(h=L("theme","theme-switch",e[2]&&"m-[4px]",!e[1]&&!e[2]&&"bg-cardChi border-t border-r lg:border-r-0 lg:border-t-0 border-b border-highContrast first:border-t"))&&d(t,"class",h)},d(l){l&&k(t),s&&s.d(),u=!1,i()}}}function ie(e){let t,r,c,f,h,u=Object.keys(_),i=[];for(let o=0;o<u.length;o+=1)i[o]=q(O(e,u,o));return{c(){t=w("div");for(let o=0;o<i.length;o+=1)i[o].c();r=F(),c=w("style"),f=j("button{color:rgb(var(--color-textPrimary))}button[data-active=true]{background-color:#daf464;color:#000}button svg{stroke:currentColor}.is-footer button[data-active=true]{background-color:transparent;border-bottom-width:2px;color:rgb(var(--color-textPrimary))}.is-footer button+button{margin-left:2rem}"),this.h()},l(o){t=p(o,"DIV",{"data-variant":!0,class:!0});var s=C(t);for(let l=0;l<i.length;l+=1)i[l].l(s);r=Z(s),c=p(s,"STYLE",{});var a=C(c);f=V(a,"button{color:rgb(var(--color-textPrimary))}button[data-active=true]{background-color:#daf464;color:#000}button svg{stroke:currentColor}.is-footer button[data-active=true]{background-color:transparent;border-bottom-width:2px;color:rgb(var(--color-textPrimary))}.is-footer button+button{margin-left:2rem}"),a.forEach(k),s.forEach(k),this.h()},h(){d(t,"data-variant",e[3]),d(t,"class",h=L("theme","theme-switcher",e[1]&&"is-footer",e[2]&&"bg-cardChi border border-highContrast overflow-hidden",!e[1]&&!e[2]&&"border-l border-highContrast",e[6]))},m(o,s){E(o,t,s);for(let a=0;a<i.length;a+=1)i[a].m(t,null);m(t,r),m(t,c),m(c,f)},p(o,[s]){if(s&439){u=Object.keys(_);let a;for(a=0;a<u.length;a+=1){const l=O(o,u,a);i[a]?i[a].p(l,s):(i[a]=q(l),i[a].c(),i[a].m(t,r))}for(;a<i.length;a+=1)i[a].d(1);i.length=u.length}s&8&&d(t,"data-variant",o[3]),s&70&&h!==(h=L("theme","theme-switcher",o[1]&&"is-footer",o[2]&&"bg-cardChi border border-highContrast overflow-hidden",!o[1]&&!o[2]&&"border-l border-highContrast",o[6]))&&d(t,"class",h)},i:S,o:S,d(o){o&&k(t),X(i,o)}}}function le(e,t,r){let c;D.subscribe(n=>{r(7,c=n)});let{isMounted:f=!1}=t;z(()=>{ne(),r(0,f=!0)});const h=n=>{$(n),r(7,c=n)};let{isFooter:u=!1}=t,{isHeader:i=!1}=t,{variant:o="header-desktop"}=t,{subVariant:s="header-mobile"}=t,{content:a=""}=t,{className:l}=t;const b=(n,g)=>g.toLowerCase()===_[n].value,M=n=>h(n);return e.$$set=n=>{"isMounted"in n&&r(0,f=n.isMounted),"isFooter"in n&&r(1,u=n.isFooter),"isHeader"in n&&r(2,i=n.isHeader),"variant"in n&&r(3,o=n.variant),"subVariant"in n&&r(4,s=n.subVariant),"content"in n&&r(5,a=n.content),"className"in n&&r(6,l=n.className)},[f,u,i,o,s,a,l,c,h,b,M]}class fe extends Y{constructor(t){super(),K(this,t,le,ie,U,{isMounted:0,isFooter:1,isHeader:2,variant:3,subVariant:4,content:5,className:6})}}export{fe as default};
