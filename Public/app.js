let search = document.getElementById("search")
let ul =document.querySelector("#menu2 ul")
let ok= false




function affiche(){
    // if (search.classList.contains("display")) {
        // search.classList.add("display")
    // }
   

    if (ok===false){
        search.style.display= "block"
        ul.style.marginLeft="10vw"
        search.style.width="250px"
        ok= true

    }
    else{
        search.style.display= "none"
        ul.style.marginLeft="30vw"
        ok= false
        

    }
    


}