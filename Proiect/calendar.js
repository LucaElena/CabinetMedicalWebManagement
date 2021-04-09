/**
 1.grt the buttons DONE
 2 add "click" event listener on buttons
 3 on Click-> change style of months
 * 
 */
let currentMonthIndex = 0;
 /** 1.grt the buttons**/
 let LeftBtn = document.getElementById("leftBtn");
// console.log(leftBtn);
 let rightBtn = document.getElementById("rightBtn");
 //console.log(rightBtn);

 /**  2 add "click" event listener on buttons**/
 LeftBtn.addEventListener("click", onBtnClick);
 LeftBtn.addEventListener("mouseenter", setGreyBackground);
 LeftBtn.addEventListener("mouseleave", setWhiteBackground);

 rightBtn.addEventListener("click", onBtnClick);
 rightBtn.addEventListener("mouseenter", setGreyBackground);
 rightBtn.addEventListener("mouseleave", setWhiteBackground);

 rightBtn.addEventListener("click", goTOnextMount);


 function onBtnClick(){
    console.log("hello lili");
 }

function setGreyBackground(e){
    e.target.style.background= 'grey';
}
function setWhiteBackground(e){
    e.target.style.background= 'white';
}


function goTOnextMount()
{
    /**1. Get all cards
     * 2.'translate' all of them to the left based on th curent card number
     *       */
    let months = document.getElementsByClassName("schedul__calendar__months");

    for(let i = 0;i < months.length; i++)
    {
        months[i].style.transform = 'translateX(-${(currentMonthIndex + 1) *100}%)';
    }
    currentMonthIndex++;
}
