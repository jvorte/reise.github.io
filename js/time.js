var dt = new Date();
dt.setHours( dt.getHours() + 2 );

document.getElementById("time").innerHTML = dt.toGMTString();