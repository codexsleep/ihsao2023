import{n as f,s as l}from"./index.56cfbdee.js";const e=[];function h(n,u=f){let o;const i=new Set;function r(t){if(l(n,t)&&(n=t,o)){const c=!e.length;for(const s of i)s[1](),e.push(s,n);if(c){for(let s=0;s<e.length;s+=2)e[s][0](e[s+1]);e.length=0}}}function b(t){r(t(n))}function p(t,c=f){const s=[t,c];return i.add(s),i.size===1&&(o=u(r)||f),t(n),()=>{i.delete(s),i.size===0&&(o(),o=null)}}return{set:r,update:b,subscribe:p}}export{h as w};
