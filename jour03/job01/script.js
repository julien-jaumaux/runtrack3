let h1 = document.createElement("h1");
document.body.appendChild(h1);
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b1").click(function(){
        h1.textContent = "Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit ensuite on prie";
        $("h1").hide();
    });
    
    //Dès qu'on clique sur #b1, on applique show() au titre
    $("#b2").click(function(){
        $("h1").show();
    });
});