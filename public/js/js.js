const setdrop=document.querySelector('.implinks');
setdrop.addEventListener('mouseover',()=>
{
    document.querySelector('.dropDown').style.display='block';
});
document.querySelector('.dropDown').addEventListener('mouseleave',()=>
{
    document.querySelector('.dropDown').style.display='none';
})
const sliderbox=document.querySelector('.slider');
const imageSRC=['imageAndIcons/lowPrice.jpg','imageAndIcons/isfehanCamp.jpg'];
let counter=-1;
setInterval(next,4000);
function next()
{
    const imag1=document.querySelector('#slider-iamge1');
    const imag2=document.querySelector('#slider-iamge2');
    const imag3=document.querySelector('#slider-iamge3');
    imag1.style.transform='translate(0)';
    imag2.style.transform='translate(100%)';
    imag1.id='slider-iamge2';
    imag2.id='slider-iamge3';
    sliderbox.removeChild(imag3);
    createItem();

}
function createItem()
{

    counter++;
    if (counter > imageSRC.length-1)
    {
        counter=0;
    }
    const newItem=document.createElement('img');
    newItem.src=imageSRC[counter];
    newItem.id='slider-iamge1';
    sliderbox.appendChild(newItem);
}
