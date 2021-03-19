document.querySelector('.callback').onclick = function(){
    
  animItem =  document.querySelectorAll("._anim_item");
  for(let i = 0; i < animItem.length; i++) {
    if(animItem[i].classList.contains('_active')) {
      animItem[i].classList.remove('_active');
    } else {
      animItem[i].classList.add('_active');
    };
  } 
};