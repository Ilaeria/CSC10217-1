//Using DOM 2 event listener

//Contact radio buttons event
var communication = document.eshopsignup.communicationmethod;
for(index = 0; index < communication.length; index++)
    communication[index].addEventListener("change", communicationChange, false);
    
//Magazine checkbox event
eshopsignup.magazinesubscription.addEventListener("click", magazineChange, false);