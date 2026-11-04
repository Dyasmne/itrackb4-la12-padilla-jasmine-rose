ITRACKB4 LABORATORY ACTIVITY 12
Make the Failures Yours

H1.The top of your error page named a file inside vendor. Say why that was not where your mistake was, and where the page showed you it actually was?
  The vendor file appeared because Laravel detected the error while processing the code. However, the mistake was not in the vendor file because it was part of Laravel's framework. The actual mistake was in my MovieController.php, where I accidentally typed withh() instead of with() when loading the movie's genre.
H2.You wrote one Log::info line with a context array. Name something it will tell you next month that the error page could not?
   The Log::info context array can tell me the actual ID of the movie that was saved. Even next month, I can check the laravel.log file to identify which specific movie record was created, while the error page only shows information about an error that happened at that moment.
H3.Your guard answers with 403 instead of redirecting back with a message. Say when each of the two is the better answer?
   A 403 Forbidden response is better when the user is not allowed to perform an action, such as deleting the last movie in a genre. Redirecting back with a message is better when the action is not allowed but the user can safely return to the previous page and receive an explanation without seeing an error page.