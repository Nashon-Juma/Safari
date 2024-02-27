/*
Class with constructor to create new pizza from inputs.
Putting class in the same JS file, just to comfortably show it on Codepen.
*/
class NewPizza {
    constructor(name, price, heat, toppings, photo) {
        this.name = name;
        this.price = price;
        this.heat = heat;
        this.toppings = toppings;
        this.photo = photo;
        //Spaces removed from title and so creating unique ID
        this.uniqueId = this.name.replace(/\s/g, '');
    }
};

/*
Empty array which will be updated with pizzas.
*/
let sessionStorageEntryArray = [];

/*show() is initiated on page loading to check if there are any pizzas.
*/
show();

/*
Database - sessionStorage to add, get and delete entries.
*/
function addEntry(obj) {
    sessionStorage.setItem(obj.uniqueId, JSON.stringify(obj));
};

function getAllEntries() {
    for (i = 0; i < sessionStorage.length; i++) {
        const key = sessionStorage.key(i);
        const singleEntry = JSON.parse(sessionStorage.getItem(key));
        sessionStorageEntryArray.push(singleEntry);
    }
    return sessionStorageEntryArray;
};

function removeEntry(ent) {
    sessionStorage.removeItem(ent);
};

/*
Simple function to clear input values.
*/
function clearInputs () {
    document.querySelector('.new-pizza__name').value = "";
    document.querySelector('.new-pizza__price').value = "";
    document.querySelector('.new-pizza__heat').value = 0;
    document.querySelector('.new-pizza__toppings').value = "";
    document.querySelector('.new-pizza__photo').value = 0;
};

/*
//////////////////////////////////////
Button to add new pizza.
*/
const addNewPizza = document.querySelector('.add-new-pizza');

addNewPizza.addEventListener('click', function (){
    const pizzaNameEntered = document.querySelector('.new-pizza__name').value;
    const pizzaPrice = document.querySelector('.new-pizza__price').value;
    const pizzaHeat = document.querySelector('.new-pizza__heat').value;
    const pizzaToppings = document.querySelector('.new-pizza__toppings').value;
    const pizzaPhoto = document.querySelector('.new-pizza__photo').value;

    //Converting pizza name to uppercase (also will prevent to enter different case duplicates like "Hawaii"/"hawaii")
    const pizzaName = pizzaNameEntered.toUpperCase();

    //Check if name is unique - trying to get similar name fron session storage.
    let checkName = JSON.parse(sessionStorage.getItem(pizzaName.replace(/\s/g, '')));
    let nameTochec;
    if(checkName) {
        nameTochec = checkName.name;
    } else {
        nameTochec = "";
    };

    //Check if number is good - using regex from Google :)
    function checkNumber(num) {
        let pattern = /^\d+(\.\d{1,2})?$/;
        if (!pattern.test(num)) {
            return false;
        }
    };

    /*
    Check if toppings are at least two.
    */
   let tempArr = [];
   tempArr = pizzaToppings.trim().split(/\s*,\s*/);
   for (i = 0; i < tempArr.length; i++) {
       let newStr = tempArr[i].charAt(0).toUpperCase() + tempArr[i].slice(1);
       tempArr[i] = newStr;
   }
   let finalPizzaToppings = tempArr.join(', ');

    //Global check
    if (pizzaName === nameTochec || pizzaName === "") {
        //This if block catches if name is already in sessionStorage or that name is not empty
        alert('Pizza name cannot be empty and must be unique.');
    } else if (checkNumber(pizzaPrice) === false) {
        //This checks the number to have it positive
        alert("Price should be positive number with max 2 decimals - like 10.00.");
    } else if (pizzaToppings.includes(".") || pizzaToppings.includes(";") || tempArr.length < 2) {
        //This checks that toppings are entered in proper way and also that array of toppings is at least two
        alert("Please add at least 2 toppings and separate each with a colon (cannot use dot (.) or semicolon (;)).");
    } else {
        //Creating new pizza object and adding it to sessionStorage, then clearing inputs and displaying all pizzas
        newPizza = new NewPizza(pizzaName, pizzaPrice, pizzaHeat, finalPizzaToppings, pizzaPhoto);
        addEntry(newPizza);
        clearInputs();
        show(sortByName);
    };
});

/*
Function to show all pizzas from sessionStorage in HTML DOM.
*/
function show(sortCallback = sortByName) {
    //Resetting pizza array
    sessionStorageEntryArray = [];
    let tx = document.querySelector('.show');
    if(sessionStorage.length === 0) {
        //Shown if sessionStorage is empty
        tx.innerHTML = '<div class="center-delete">No pizzas yet. Use the form to add some.</div>';
    } else {
        //Resetting displayed pizza content and adding new
        tx.innerHTML = "";
        getAllEntries();

        //Sort function (default is by name everywhere)
        sortCallback();

        for (i = 0; i < sessionStorageEntryArray.length; i++) {
            const pizzaEntry = sessionStorageEntryArray[i];
            let fixedPrice = parseFloat(pizzaEntry.price);

            //Find out how much peppers to display
            let pepperCount = parseInt(pizzaEntry.heat);
            let totalPeppers = "";
            for (l = 0; l < pepperCount; l++) {
                totalPeppers += `<img src="https://raw.githubusercontent.com/Duncia/pizzaMenu/master/img/chili.png" class="chilli-photo" alt="Chilli">`;
            }

            //Single pizza entry HTML generation to be used and displayed for users.
            tx.insertAdjacentHTML('beforeend', `<div class="pizza-entry">
            <div class="show__pizza-image">
                <img src="https://raw.githubusercontent.com/Duncia/pizzaMenu/master/img/pizza${pizzaEntry.photo}.png" class="pizza-photo" alt="Pizza photo">
            </div>
            <div class="show__pizza-content">
                <h1>${pizzaEntry.name}</h1>
                <div class="price-peppers">
                    <p>EUR ${fixedPrice.toFixed(2)}</p>
                    <div>
                    ${totalPeppers}
                    </div>
                </div>
                <p>Toppings:</p>
                <p>${pizzaEntry.toppings}</p>
            </div>
        </div>`)

            //With this function I am passing unique ID to add delete button (then can delete it)
            deletePizza(tx, pizzaEntry.uniqueId);
        }
    }
};

/*
Function to delete pizza from sessionStorage and HTML DOM list.
Adding delete button with unique ID.
*/
function deletePizza (txt, el){
    txt.insertAdjacentHTML('beforeend', `<div class="center-delete"><button class="btn-dlt delete-pizza-${el}">Delete</button></div>`);
    let selectorDelete = ".delete-pizza-" + el;
    const deletBtn = document.querySelector(selectorDelete);
    deletBtn.addEventListener('click', function (){
        if (confirm('Are you sure you want to delete?')) {
            removeEntry(el);
            show();
        }

    });
};

/*
All sort functions.
*/
function sortByName() {
    /*
    sessionStorageEntryArray.sort(function(a, b) {
    return a.name - b.name;
    });
    */
    sessionStorageEntryArray.sort(function(a, b) {
        return a.name.localeCompare(b.name);
    });

};
function sortByPrice() {
    sessionStorageEntryArray.sort(function(a, b) {
    return a.price - b.price;
    });
};
function sortByHeat() {
    sessionStorageEntryArray.sort(function(a, b) {
    return a.heat - b.heat;
    });
};

const sortPriceButton = document.querySelector('.sort-price');
sortPriceButton.addEventListener('click', function (){
    show(sortByPrice);
});

const sortNameButton = document.querySelector('.sort-name');
sortNameButton.addEventListener('click', function (){
    show();
});

const sortHeatButton = document.querySelector('.sort-heat');
sortHeatButton.addEventListener('click', function (){
    show(sortByHeat);
});
