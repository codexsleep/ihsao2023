const a=typeof window<"u";let t=!1,d=document.getElementsByClassName("links")[0],o=document.getElementsByClassName("menu")[0],r=document.getElementsByClassName("menu-overlay")[0];const e=document.getElementById("header"),m=document.getElementById("sentinel");a&&(t=!(window.innerWidth>1023),t&&e.classList.add("sticky-border"),t&&e.classList.remove("sticky-transparent-bg"),window.matchMedia("(max-width: 1023px)").addEventListener("change",s=>{t=s.matches||!1,t&&e.classList.add("sticky-border"),t&&e.classList.remove("sticky-transparent-bg")}));o.onclick=function(){o.classList.toggle("active"),r.classList.toggle("active"),d.classList.toggle("active"),setTimeout(()=>{o.classList.contains("active")?document.documentElement.classList.add("menu-html-fixed"):document.documentElement.classList.remove("menu-html-fixed")},0)};const u={rootMargin:`${e.offsetHeight*-1}px`,threshold:1},g=new IntersectionObserver(s=>{s.forEach(n=>{n.isIntersecting?document.documentElement.classList.contains("menu-html-fixed")||(e.dataset.onTop=String(!0)):e.dataset.onTop=String(!1)})},u);g.observe(m);const w=document.querySelector(".page-scroll-progress"),i=()=>{const s=document.body.scrollHeight,n=window.innerHeight,l=s-n,c=window.scrollY/l*100;w.style.width=`${c}%`};window.addEventListener("scroll",()=>{i()});window.addEventListener("resize",()=>{i()});window.plausible=window.plausible||function(){(window.plausible.q=window.plausible.q||[]).push(arguments)};window.onload=function(){document.getElementById("referrer").value=document.referrer,document.getElementById("screen_width").value=window.innerWidth};
