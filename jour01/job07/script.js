let date = new Date("19 march 2020");
jour = date.getDate();
mois = date.getMonth();
année = date.getFullYear();

listeMois =["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];

function jourtravaille(date){
    if(
        (jour == 1 && mois == 0 && année == 2020)||
        (jour == 13 && mois == 3 && année == 2020)||
        (jour == 1 && mois == 4 && année == 2020)||
        (jour == 8 && mois == 4 && année == 2020)||
        (jour == 21 && mois == 4 && année == 2020)||
        (jour == 1 && mois == 5 && année == 2020)||
        (jour == 14 && mois == 6 && année == 2020)||
        (jour == 15 && mois == 7 && année == 2020)||
        (jour == 1 && mois == 10 && année == 2020)||
        (jour == 11 && mois == 10 && année == 2020)||
        (jour == 25 && mois == 11 && année == 2020)
        ){
            console.log(`Le ${jour} ${listeMois[mois]} ${année} , est un jour fériée`);
        }
        else if(date.getDate()== 0 || date.getDate()== 6){
            console.log(`Le ${jour} ${listeMois[mois]} ${année} tombe un weekend`);
        }
        else{
            console.log(`Le ${jour} ${listeMois[mois]} ${année} est un jour de travail`);
        }
    }
    
jourtravaille(date);