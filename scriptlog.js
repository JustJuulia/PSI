function login(){
var nam = document.getElementById("name").value;
var pas = document.getElementById("pass").value;
if(nam == "admin" && pas == "123A"){
    window.location = "showtab.php";
}
else{
    //sprawdza czy sitenieje w sql
}
}
function congu(){
    window.location = "showtabg.php";
}
function create(){
    //send do sql tworzy 
}