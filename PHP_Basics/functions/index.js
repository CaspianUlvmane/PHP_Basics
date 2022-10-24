function toggleImage(event){
    let direction = event.target.id
    if(direction == "left"){
        if(event.target.parentElement.dataset.img == 0){
            return
        }
        else{
            event.target.parentElement.dataset.img--
        }
    } else {
        if(event.target.parentElement.dataset.img == 4){
            return
        } else{
            event.target.parentElement.dataset.img++
        }
    }
    console.log(event.target.parentElement.dataset.img);
    let image = ".image" + (parseInt(event.target.parentElement.dataset.img) + 1)
    document.querySelector(".show").classList.toggle("show")
    document.querySelector(image).classList.toggle("show")
}

document.querySelector("#left").addEventListener("click", toggleImage)
document.querySelector("#right").addEventListener("click", toggleImage)