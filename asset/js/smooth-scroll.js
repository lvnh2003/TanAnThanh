const body=document.body;
scrollWrap=document.getElementsByClassName("smooth-scroll-wrapper")[0],
height=scrollWrap.getBoundingClientRect().height-1,speed=0.08;
var offset = 0;
body.style.height=Math.floor(height)+"px";
function smooth_scroll(){
    offset+=(window.pageYOffset-offset)*speed;
    var scroll="translateX(-"+offset+"px) translateZ(0)";
    scrollWrap.style.transform=scroll;
    callScroll=requestAnimationFrame(smooth_scroll);
}
smooth_scroll();