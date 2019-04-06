Added five options for bot to respond with when it isn't sure what the user 
is getting at. These make the conversation feel a little more natural when the
bot isn't sure what to say.

	You
	God I am stupid

	Unknown
	Are you not reading what I'm saying? I need to get out of here

	You
	I'm just so stupid

	Unknown
	I don't understand what you're trying to say.

Added porterstemmer2 algorithm implementation for word correction. This drops
words to their simplest forms so that any varient of a word will trigger the
related topic. Overall, porterstemmer2 seemed to be way more a nuisance than it
was usefull as it would often make correctly spelled words unreadable.

	You
	That's not believable
	
	Unknown
	you have to believe me!

	You
	I don't believe you

	Unknown
	please believe me!

Using this strengthened the word recognition for topic destinction and cleaned up
the code.

Added usage of compromise NLP for location and name recognition. Compromise is
unforunately an extremely simple NLP with limited options. Furthermore, it was
difficult to make it interact with PHP. Regardless, the bot does have name and
place recognition, and appropriate responses. It recognizes its own name and 
distinguishes it from any other name.

	You
	Are you in China?

	Unknown
	I don't know where I am. All I know is that I'm inside this computer

Bot has very basic user recognition and responses that last for the session. It
won't continually respond with the same response if a user tries to tell it what
their name is.

	You
	My name is Evan

	Unknown
	Is evan your name? It doesn't matter, you need to help me.

	You
	But my name is Evan

	Unknown
	I already told you, names don't matter. I just need your help.

	You
	My name is Evan

	Unknown
	Would you drop it? I don't care what your name is!

Made GUI look a little tidier. GUI was already almost entirely implemented so
there wasn't much to do here. 