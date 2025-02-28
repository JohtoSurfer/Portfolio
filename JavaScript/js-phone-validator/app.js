// Get DOM elements
const userInput = document.getElementById('user-input');
const checkBtn = document.getElementById('check-btn');
const clearBtn = document.getElementById('clear-btn');
const resultsDiv = document.getElementById('results-div');

// Regex for validation
const validationRegex = /^(1\s?)?(\(\d{3}\)|\d{3})[\s-]?\d{3}[\s-]?\d{4}$/;

// Function to validate phone number
function validatePhoneNumber(input) {
    return validationRegex.test(input);
}

// Function to handle the "Check" button click
function handleCheckBtnClick() {
    const inputValue = userInput.value.trim(); 

    // Alert if input is empty
    if (!inputValue) {
        alert('Please provide a phone number');
        return;
    }

    // Validate the phone number
    const isValid = validatePhoneNumber(inputValue);

    // Display the result
    if (isValid) {
        resultsDiv.textContent = `Valid US number: ${inputValue}`;
        resultsDiv.style.color = 'green';
    } else {
        resultsDiv.textContent = `Invalid US number: ${inputValue}`;
        resultsDiv.style.color = 'red';
    }
}

// Function to handle the "Clear" button click
function handleClearBtnClick() {
    userInput.value = ''; 
    resultsDiv.textContent = ''; 
}

// Add event listeners
checkBtn.addEventListener('click', handleCheckBtnClick);
clearBtn.addEventListener('click', handleClearBtnClick);