$(document).ready(function(){
  $('#button').click(function(){
    var choice = $('#choices :selected').val()
    var fill = 'Your current choice is <u>' + choice + '</u>.';
    $('#fill').html(fill);
  });
})
/*The page should include a selector box and a button.

The choices in the selector box should be: 'bee', 'goat', 'hamster', and 'pig'.

Whenever someone clicks the button (and only then), a line is displayed at the bottom of the page:

"Your current choice is _____."  where the blank is filled in with the current setting of the selector box.

If the button is clicked multiple times, only the output from the most recent click should show.

Deliver the project as just index.html, or a zipped folder which contains index.html.

Use whatever libraries or frameworks you wish, but ensure that they will be accessible when we open index.html as a local file in the browse
*/