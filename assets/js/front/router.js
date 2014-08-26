
var router = require('../modules/router');

module.exports = router({
	'/': function () {
		console.log("index");
	},
	'/author': function () {
		console.log("author");
	},
	'/books': function () {
		console.log("books");
	},
	'/books/:bookId': function (bookId) {
		console.log("viewBook: bookId is populated: " + bookId);
	}
});
