function showhide(){
    let btn_element = document.getElementById("button");
    let text1 = document.getElementById("citation");
    btn_element.addEventListener("click", () =>{
        document.getElementById("citation")
        .innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";
        if (text1.style.display === "none"){
            text1.style.display = "block";
            }else{
            text1.style.display = "none";
            }
    })
}
showhide();