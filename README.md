# Project 1 Random Quote Generator in PHP
 First Treehouse Learning Project
 
 Project Instructions
To complete this project, follow the instructions below. If you get stuck, ask a question on Slack or in the Treehouse Community.

 10 steps
Open the project files in your favorite text editor and preview them in the browser.
Pro Tip: Text Editors and Browsers

If you have questions about selecting a good text editor, perhaps the best thing to do is find out what your fellow developers are using. An easy way to do that is to reach out to your team on Slack.
Pro Tip: Cross-Browser consistency

Google Chrome has become the default development browser for most modern developers. But with such a selection of browsers for users to choose from, it's a smart idea to test your projects in multiple browsers when possible.
Create a Multidimensional array to hold the data for your quotes.
In your PHP file, start by creating a multidimensional array for quotes. Be sure to use the name quotes for the outer most array when creating the multidimensional array.
The quotes array should be accessible in what's called "the global scope", which basically just means that it's not contained within a function.
Pro Tip: Remember, arrays are defined with brackets, [].

Add inner array elements to the quote array.
Each quote in the quotes array should be an associative array with the following named elements:
quote - a string containing the text of the quote that will be displayed on the page.
source - a string containing the creator of the quote. For example: "Mark Twain" or "Traditional Irish proverb” or "Anonymous".
citation - optional - a string identifying where the quote comes from, like a speech, publication or a movie. If there is no known publication, do not include this item in the inner array.
year - optional - a number identifying the year of the quote. If there is no known year, then do not include this item in the inner array.
Pro Tip: Remember that an associative array is defined in key/value pairs, like so:

["quote" => "There's no place like home."]
NOTE: To get the most out of this project, it would be best to include at least one year and citation property in your multidimensional array of quotes. This will give you the chance to get some good practice working with conditionals when you create the printQuote() function that prints the quotes to the screen.

Create the getRandomQuote function.
Be sure to name the function getRandomQuote.
The function should take in one parameter, that you can rightly call, array, since the argument that will later get passed into this function when it is invoked will be the array of quotes.
The body of the function should select and return a random quote element from the quotes array. Remember the method for finding a random number? If not, that's okay. Check the resources list in these instructions, or revisit the material in the unit. Alternatively, try using Google to see if you can find what you need on the web. Even professional developers use Google several times a day, so it's good to start developing your Google skills now.
Pro Tip: Remember, we target and select items in an array with "box notation". So array[0] will select the first item in an array, because, as you'll likely remember, indexed arrays always begin with a first index of zero.

Create the printQuote function.
Be sure to name the function printQuote.
The function should take in one parameter, that you can rightly call, array, since the argument that will get passed into the getRandomQuote function.
In the body of this function:
getRandomQuote should be called on the array of quote obejcts, and the result stored in a variable.
A new empty string should be created and stored in a variable.
The required quote array items, and the optional quote items if they exist, should be appropriately concatenated to the new string you created using the following HTML template:
<p class="quote"> [quote here] </p>
<p class="source"> [source here]
  <span class="citation"> [citation here] </span>
  <span class="year"> [year here] </span>
</p>
The span elements that hold the citation and year properties should only be created if the current quote element has those items. This is where your conditionals will come in handy.
The printQuote function should display the completed HTML string
Call the printQuote function appropriately.
Make sure the index page is named properly to execute PHP code.
Include the functions.php file. Make sure the you include the path to the file.
Call the printQuote function within the 'quote-box' HTML element.
Add code comments.
Replace the code comments in the file with your own code comments.
The key to creating good code comments is to keep them brief, but clear, so that your fellow developers can get an idea of what's going on in your code at a glance, and without having to review every single line of code. Generally, good code comments are placed above important code blocks to explain what they do.
Review the "How you'll be graded" section.
Check out the "How you'll be graded" section, located above, next to the instructions tab, just below the project title. This section lists specifically what will be considered and checked when your project is being reviewed, and your project grade is being determined.
Quality Assurance and the Student Project Submission Checklist
Web development work bears the need for a high level of precision. We're talking about an industry that measures performance by the pixel, kilobyte, and millisecond. So it's very important to pay attention to the details and take the time to do your own thorough quality assurance testing on all your own projects.
NOTE: Sometimes just getting started is the hardest part.

It's not uncommon to feel overwhelmed and confused when beginning to build a project. If you feel this way, try not to get too focused on seeing the project as a whole. Instead, just take it one small piece at a time. After familiarizing yourself with the instructions, start by downloading the source files, and creating a GitHub repo to store them. That is always a great place to start. Then just start tackling the project one small step at a time. Remember, your first attempt isn't likely to be perfect, and it doesn't have to be. As coders, we focus first on creating something that works. And then we refactor and optimize on later iterations.
NOTE: Seeking assistance

If you're feeling stuck or having trouble with this project
Reach out to the team on Slack.
Take a look at this great study guide: A Random Quote Generator Study Guide
Review material in the unit.
Practice your Google skills by finding different ways to ask the questions you have, paying close attention to the sort of results you get back depending on how your questions are worded.
Before submitting the project
Before you submit your project, check off each item in the project submissions checklist below.

 I have read all of the project instructions, including the “How you’ll be graded” section for this project.

 I understand what is needed to receive a Meets or Exceeds Expectations grade, and asked for clarification about grading requirements on Slack if necessary.

 My GitHub repo for this project contains only this project, only files needed to make this project run, and a README.md file providing details about my project.

 I wrote all of my own code for this project. Any code included in my project that I did not write myself is appropriately attributed to its source.

 I have completed all of the project requirements and believe the project is ready to receive a meets or exceeds expectation grade.

 I have received a preliminary review of my project in Slack to catch anything I might have missed.

 I understand that in order to receive an Exceeds Expectations grade, I must complete all extra credit items.

 I understand that what I submit is what will get reviewed, and that when I submit my project, any changes I make after the submission won't be seen by my reviewer.

Extra Credit
To get an "exceeds" rating, complete all of the steps below:

 3 steps
Add more items to the inner quote element.
For example, a tags property could include a list of "tags" like "humor", "business", or "politics" to categorize each quote.
Use the new properties you've created to conditionally add to the string that gets printed to the screen.
Random background color.
When the quote changes, randomly change the background color of the page.
Auto-refresh the quote.
After a set amount of time, like 20 to 30 seconds, print a new quote to the page. Meta tags can be one way to accomplish this.
