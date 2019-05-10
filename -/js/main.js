// head {
var __nodeId__ = "plugins_sticky__main";
// }

(function (__nodeId__) {
    window[__nodeId__] = {
        bind: function (data) {
            $(data.selector).sticky(data.options);
        }
    };
})(__nodeId__);
