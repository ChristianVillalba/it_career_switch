# Feature Testing with TDD
We used several technologies to write tests for both “happy” and “sad” paths of:

Server status codes
Server response content
Error cases
We also saw how TDD can be used at the server level to guide the implementation of the server code:

We wrote a failing test
We wrote the minimal required server code to pass the test
When we decided or needed to refactor to meet external requirements, we used the existing tests to make sure our refactored code maintained the same end behavior