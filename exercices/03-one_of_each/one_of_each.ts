
function newliste (liste1:Array<number>,liste2:Array<number>){ 

    let liste3:Array<number> = [];
   
    for  ( let i = 0; i < Math.min(liste1.length, liste2.length); i++ ) {

        liste3.push(liste1[i],liste2[i]);

    }

    console.log(liste3);
    
}

newliste([4,2,3],[-3,5,6]);