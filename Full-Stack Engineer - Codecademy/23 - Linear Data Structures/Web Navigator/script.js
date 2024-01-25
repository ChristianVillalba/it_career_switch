// script.js
const Stack = require('./Stack.js');
const prompt = require('prompt-sync')();

// Initialization
const backPages = new Stack();
const nextPages = new Stack();
let currentPage = 'Default Page';
let finish = false;
let showBack = false;
let showNext = false;

const baseInfo = '\nEnter a url';
const backInfo = 'B|b for back page';
const nextInfo = 'N|n for next page';
const quitInfo = 'Q|q for quit';
const question = 'Where would you like to go today? ';

// Helper Functions
const showCurrentPage = (action) => {
  console.log(`\n${action}`);
  console.log(`Current Page: ${currentPage}`);
  console.log(`Back Page: ${backPages.peek()}`);
  console.log(`Next Page: ${nextPages.peek()}`);
};

const newPage = (page) => {
  backPages.push(currentPage);
  currentPage = page;
  nextPages.clear();
  showCurrentPage('New Page Opened');
};

const backPage = () => {
  nextPages.push(currentPage);
  currentPage = backPages.pop();
  showCurrentPage('Navigated Backward');
};

const nextPage = () => {
  backPages.push(currentPage);
  currentPage = nextPages.pop();
  showCurrentPage('Navigated Forward');
};

// User Interface Part 1
while (!finish) {
  // User Interface Part 2
  let instructions = baseInfo;
  if (!backPages.isEmpty()) {
    instructions += `, ${backInfo}`;
    showBack = true;
  } else {
    showBack = false;
  }

  if (!nextPages.isEmpty()) {
    instructions += `, ${nextInfo}`;
    showNext = true;
  } else {
    showNext = false;
  }

  instructions += `, ${quitInfo}`;
  showCurrentPage(instructions);

  // Prompt for user input
  const answer = prompt(question);

  // Process user input
  const lowerCaseAnswer = answer.toLowerCase();

  if (lowerCaseAnswer === 'q') {
    finish = true;
  } else if (lowerCaseAnswer === 'b' && showBack) {
    backPage();
  } else if (lowerCaseAnswer === 'n' && showNext) {
    nextPage();
  } else if (lowerCaseAnswer !== 'b' && lowerCaseAnswer !== 'n') {
    newPage(answer);
  } else {
    console.log('Cannot proceed with that option. Please try again.');
  }
}


