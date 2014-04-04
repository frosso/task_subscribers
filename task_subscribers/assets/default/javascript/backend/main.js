App.Inspector.Properties.TaskSubscribers = function (object, client_interface) {
    var subs_wrapper = $(this);
    subs_wrapper.html("");
    var img = App.Wireframe.Utils.imageUrl('icons/12x12/edit.png', 'environment');
    if((object['subscribers']) && object['subscribers'].length > 0) {
        subs_wrapper.append(App.Wireframe.Utils.userLink(object['subscribers'][0], true));
        for (var i=1; i<object['subscribers'].length; i++) {
            subs_wrapper.append(', ');
            subs_wrapper.append(App.Wireframe.Utils.userLink(object['subscribers'][i], true));
        }
    }
    if((object['options']['manage_subscriptions']) && object['options']['manage_subscriptions']) {
        subs_wrapper.append(' ');
        var subs_obj = object['options']['manage_subscriptions'];
        var subs_img = "<img src='" + subs_obj["icon"] + "' alt='" + subs_obj['text'].clean() + "' />";
        var subs_link = $('<a href="' + subs_obj.url.clean() + '" title="' + subs_obj["text"].clean() + '">' + subs_img + '</a>');
        if (typeof (subs_obj["onclick"]) == "string" && subs_obj["onclick"]) {
            var onclick;
            eval("onclick = " + subs_obj["onclick"]);
            if (typeof (onclick) == "function") {
                onclick.apply(subs_link[0])
            }
        }
        subs_wrapper.append(subs_link);
    }
};

console.log('asdf');