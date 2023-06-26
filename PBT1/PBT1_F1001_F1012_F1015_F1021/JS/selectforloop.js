/*Group Azfar,Naqib,Firdaus Hasim , Mawi
JS Code to count 1-20 and put the value in Option for select name noroom*/
var select = document.getElementById("noroom");       //variable select = get element by id noroom
for (var i = 1; i <= 20; i++)                         //for loop to count 1-20
{
  var option = document.createElement("option");      //create element option
  option.value = i;                                   //create value to option
  option.text = i;                                    //create text to option
  select.appendChild(option);                         //appendClild method
}