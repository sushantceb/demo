/** @jsx React.DOM */

var assert = require("assert");
var _ = require("underscore");

var $_ = require("../js/i18n.jsx");

var maybeJoin = function(renderable) {
    return _.isArray(renderable) ? renderable.join("") : renderable;
};

describe("i18n", function() {
    it("returns an array of just the string when no args", function() {
        assert.deepEqual(maybeJoin(<$_>Khan Academy</$_>), "Khan Academy");
    });

    it("returns an array representing the string", function() {
        assert.deepEqual(
            maybeJoin(
                <$_ who="anyone anywhere">
                  A free world-class education for %(who)s.
                </$_>
            ),
            "A free world-class education for anyone anywhere."
        );
    });
});
