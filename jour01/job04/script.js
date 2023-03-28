function bissextile(année){


    if ((année % 4 === 0 && année % 100 > 0) || (année % 400 === 0)) {
        console.log(true) ;
    } else {
        console.log(false);
    }
    
}
bissextile(2020)
bissextile(1324)
bissextile(2000)
bissextile(1986)
