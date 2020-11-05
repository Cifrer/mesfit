function setAnimation(element, buttons, class1, class2){
  const el = document.querySelector(element)
  document.querySelectorAll(buttons).forEach(button => {
    button.addEventListener('click', function(){
      if(el.classList.contains(class1)){
        el.classList.remove(class1)
        el.classList.add(class2)
      }else{
        el.classList.add(class1)
        el.classList.remove(class2)
      }
    })
  })
}

setAnimation(".editPerf","#showEdit","fadeInDown","fadeInUp")
setAnimation(".moreBox","#showMore","fadeInDown","fadeInUp")
setAnimation(".menuTop","#showMenu","slideUp","slideDown")

setAnimation(".menuBtns","#toggle","menuDown","menuUp")