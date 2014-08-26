
var director = require('director');

module.exports = function (routes) {
	return new director.Router(routes).configure({ html5history: true }).init();
};
