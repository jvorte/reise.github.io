
"use strict"
 let alleZimmerPreise = [];
 alleZimmerPreise["leer"]=0;
 alleZimmerPreise["eco"]=50;
 alleZimmerPreise["standard"]=90;
 alleZimmerPreise["suite"]=150;


 function getGaragenPreis()
{
    let garagenpreis=0;
    let garage = document.getElementById("garage").value;

	garagenpreis =parseInt(garage) 

   
	garagenpreis*=differenceInDays();
    
    return garagenpreis;
}

function getAutoMiete()
{
    let mietepreis=0;
    let miete = document.getElementById("miete").value;

	mietepreis =parseInt(miete) 

   
	mietepreis*=differenceInDays();
    
    return mietepreis;
}
function getAndereKosten()
{
    let anderepreis=0;
    let andere = document.getElementById("andere").value;

	anderepreis =parseInt(andere) 

   
	anderepreis*=differenceInDays();
    
    return anderepreis;
}

function getZimmerPreis()
{
    let zimmerpreis=0;
    let zimmer = document.getElementById("zimmer");

	zimmerpreis = alleZimmerPreise[zimmer.value];
	zimmerpreis*=differenceInDays();
    return zimmerpreis;
}



function differenceInDays()
{
	let startDate=new Date(document.getElementById("startDate").value);
	let endDate=new Date(document.getElementById("endDate").value);

	//let timeDiff=Math.abs(endDate.getTime()-startDate.getTime());
	let timeDiff=Math.abs(endDate-startDate);
	let diffDays=Math.round(timeDiff/(1000*3600*24));
	return diffDays;
	
}

function gesamt()
{
	let gesamtpreis=0;
	gesamtpreis=getZimmerPreis()+getGaragenPreis()+getAutoMiete()+getAndereKosten();
	document.getElementById("tage").innerHTML=differenceInDays();
	document.getElementById("gesamt").innerHTML=gesamtpreis;

}

document.getElementById("startDate").addEventListener("change",gesamt);
document.getElementById("endDate").addEventListener("change",gesamt);
document.getElementById("zimmer").addEventListener("change",gesamt);
document.getElementById("garage").addEventListener("change",gesamt);
