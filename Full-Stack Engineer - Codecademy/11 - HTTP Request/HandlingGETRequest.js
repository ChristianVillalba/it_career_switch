// Information to reach API
const url = 'https://api.datamuse.com/words?sl=';

// Selects page elements
const inputField = document.querySelector('#input');
const submit = document.querySelector('#submit');
const responseField = document.querySelector('#responseField');

// Asynchronous function
const getSuggestions = () => {
  const wordQuery = inputField.value;
  const endpoint = `${url}${wordQuery}`;
  
  fetch(endpoint, {cache: 'no-cache'}).then(response => {
    if (response.ok) {
      return response.json();
    }
    throw new Error('Request failed!');
  }, networkError => {
    console.log(networkError.message)
    // 1) chain a new .then()
    // 2) create arrow funct with jsonResponse as an argument
  }).then(  jsonResponse => {
    // 3) create renderRawResponse() function and pass in jsonResponse as its a
    // renderRawResponse(jsonResponse);
    renderResponse(jsonResponse)
  })
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

// In the previous exercise, we successfully wrote a GET request using the fetch API 
// and handled Promises to get word suggestions from Datamuse. 