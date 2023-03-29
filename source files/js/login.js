document.addEventListener('DOMContentLoaded', () => {
    const registerButton = document.getElementById('register');
    const loginButton = document.getElementById('login');
    const container = document.getElementById('container');
  
    registerButton.addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });
  
    loginButton.addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });

    //     password validation
    let validationBox = document.querySelector(".valid-checks");
    let registerpwd = document.getElementById("registerpwd");
    let checklist = document.querySelector(".checklist").getElementsByTagName("li");
    let lowerCount = 0,
        numberCount = 0,
        upperCount = 0;
    let icon = document.querySelector(".icon");
    let show = true;


// show and hide password
    icon.addEventListener("click", () => {
        if (show) {
            registerpwd.type = "text";
            show = false;
        } else {
            registerpwd.type = "password";
            show = true;
        }
        icon.querySelector(".show").classList.toggle("hide");
        icon.querySelector(".slash").classList.toggle("hide");
    });



// focus and focusout events
    registerpwd.addEventListener("focus", () => {
        validationBox.classList.remove("hide");
    });

    registerpwd.addEventListener("focusout", () => {
        validationBox.classList.add("hide");
    });



// checking conditions
    registerpwd.addEventListener("input", () => {
        let value = registerpwd.value.trim();
        let lastCharacter = value.slice(value.length - 1);
        let index = checkLastCharacter(lastCharacter);

        if (value.length != 0) {
            checklist[index].classList.add("checked");
            registerpwd.addEventListener("keydown", uncheckConditions);
        } else {
            registerpwd.removeEventListener("keydown", uncheckConditions);
            resetValues();
        }

        // checking for minimum 8 letters
        if (value.length >= 8) {
            checklist[3].classList.add("checked");
        } else {
            checklist[3].classList.remove("checked");
        }
    });

    function uncheckConditions(event) {
        let value = registerpwd.value.trim();
        let index = checkLastCharacter(value.slice(value.length - 1));

        if (event.key == "Backspace") {
            decrementCount(index);
            checkCount();
        } else {
            incrementCount(index);
        }
    }

    function checkLastCharacter(lastCharacter) {
        // checking for number
        if (!Number.isNaN(Number(lastCharacter))) {
            return 2;

            // checking for upper case letters
        } else if (lastCharacter === lastCharacter.toUpperCase()) {
            return 1;

            // checking for lower case letter
        } else if (lastCharacter === lastCharacter.toLowerCase()) {
            return 0;
        }
    }

    function incrementCount(index) {
        switch (index) {
            case 0:
                lowerCount++;
                console.log("lower Count is ", lowerCount);
                break;
            case 1:
                upperCount++;
                console.log("upper Count is ", upperCount);
                break;
            case 2:
                numberCount++;
                console.log("number Count is ", numberCount);
                break;
        }
    }

    function decrementCount(index) {
        switch (index) {
            case 0:
                lowerCount--;
                console.log("lower Count is ", lowerCount);
                break;
            case 1:
                upperCount--;
                console.log("upper Count is ", upperCount);
                break;
            case 2:
                numberCount--;
                console.log("number Count is ", numberCount);
                break;
        }
    }

    function checkCount() {
        if (lowerCount <= 1) {
            checklist[0].classList.remove("checked");
            lowerCount = 0;
        }

        if (upperCount <= 1) {
            checklist[1].classList.remove("checked");
            upperCount = 0;
        }

        if (numberCount <= 1) {
            checklist[2].classList.remove("checked");
            numberCount = 0;
        }
    }

    function resetValues() {
        lowerCount = 0;
        upperCount = 0;
        numberCount = 0;

        for (let i = 0; i < checklist.length; i++) {
            checklist[i].classList.remove("checked");
        }
    }
});

  