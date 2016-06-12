"use strict";
(function() {
			
    $(document).ready(function() {

    	// Quote Generator
	    var famousQuotes = [
			{
				"words": "All you have to do is write one true sentence. Write the truest sentence that you know.",
				"person": "Ernest Hemingway"
			},
			{
				"words": "Write what should not be forgotten.",
				"person": "Isabel Allende"
			},
			{
				"words": "As a writer, you should not judge, you should understand.",
				"person": "Ernest Hemingway"
			},
			{
				"words": "Don't get it right, get it written.",
				"person": "Ally Carter"
			},
			{
				"words": "Write without pay until somebody offers to pay.",
				"person": "Mark Twain"
			}
		]
	    
    	var quote = famousQuotes[Math.floor(Math.random()*famousQuotes.length)];
    	var words = quote.words;
    	var person = quote.person;
    	$('#quote').html(words);
    	$('#author').html('- ' + person);
    	// End Quote Generator

    	// Toggle Resume Details
    	$(".read-more").click(function () {
    		$(this).next().toggle();
    		$(this).text(
      		$(this).next().is(':visible') ? "Hide details" : "Read more")

		});
		// End Toggle Resume Details
    })
})();