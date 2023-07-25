// Information to reach API
// 1) Create a cost named url
const url = "https://api.datamuse.com/words?sl="

// Selects page elements
const inputField = document.querySelector('#input');
const submit = document.querySelector('#submit');
const responseField = document.querySelector('#responseField');

// Asynchronous function
const getSuggestions = () => {
    // 2) wordquery stores the value of what is being typed into the input field 
  const wordQuery = inputField.value;
  const endpoint = url+wordQuery;
     // 3) to add suggestions. uses Codecademy API
     // 3.1) For this API to work within the Codecademy browser, add {cache: 'no-cache'} as the second argument.
  fetch(endpoint, {cache: 'no-cache'}).then(response => {
    // 5) checks if the ok property of the response object evaluates to a truthy value.
    if (response.ok) {
      return response.json();
    } 
    // 6) to raise an exception if the request failed.
    throw new Error('Request failed!');  
    // 7)  callback function to handle errors.  
  }, networkError => {
    console.log(networkError.message)}); 
}

// Clears previous results and display results to webpage
const displaySuggestions = (event) => {
  event.preventDefault();
  while(responseField.firstChild){
    responseField.removeChild(responseField.firstChild);
  }
  getSuggestions();
};

submit.addEventListener('click', displaySuggestions);