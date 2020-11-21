
document.querySelector('.burger').addEventListener('click',(e)=>
{
    const slide=document.querySelector('.slide-nav');
    const slide_li=document.querySelectorAll('.slide-nav ul li');
    if(slide.classList.contains('slide-nav-animate'))
    {
        slide.classList.remove('slide-nav-animate');
    }
    else
    {
        slide.classList.add('slide-nav-animate');
    }
    slide_li.forEach((link,index) => {
        if(link.style.animation)
        {
            link.style.animation="";
        }else{
            link.style.animation='slideLink 1s ease forwards '+index/7 +'s ';
        }
    });
    document.querySelector('.burger').classList.toggle('rot');
})

function slide(){
    var height=$('.header').height();
    $(window).scroll(function(){
        if($(this).scrollTop()> height){
         $('.slide-nav-animate').addClass('slide-nav-after');
 
        }else{
         $('.slide-nav-animate').removeClass('slide-nav-after');
        //  console.log(height);
        }
    });
 }
 window.addEventListener('scroll',slide);




// notification menu appler
 const noti=document.querySelector('.fa-bell');
 const noti_box=document.querySelector('.notification-box');
 const noti_close=document.querySelector('.fa-times');
 noti.addEventListener('click',(e)=>{
    noti_box.style.display="block";
 })

 noti_close.addEventListener('click',(e)=>{
    noti_box.style.display="none";
 })
