const countSneakers = document.querySelector('.count-sneakers');
const countCoat = document.querySelector('.count-coat');
const countShirt = document.querySelector('.count-shirt');
const countCap = document.querySelector('.count-cap');
const itemList = document.querySelectorAll('.list__item');

let counter = 0;
const countsList = {
  countOne: 0,
  countTwo: 0,
  countThree: 0,
  countFour: 0
}
itemList.forEach((item) =>{
  item.addEventListener('click', (e) =>{
    counter++;
    // count.innerHTML = counter;
    console.log(e.target.id);
    let num = e.target.id;
    countUp(num);
  });
});

function countUp(num) {
  if (num == 1){
    countsList.countOne++;
    countSneakers.innerHTML = countsList.countOne;
  } else if (num == 2){
    countsList.countTwo++;
    countCoat.innerHTML = countsList.countTwo;
  } else if (num == 3){
    countsList.countThree++;
    countShirt.innerHTML = countsList.countThree;
  } else if (num == 4){
    countsList.countFour++;
    countCap.innerHTML = countsList.countFour;
  }
  console.log(countsList);
}



