    function dec(str) {
        return decodeURIComponent(str.replace(/\+/g, " "));
    }

    var dl = document.querySelector("dl");
    var params = document.location.search.slice(1).split("&");
    for (var i = 0; i < params.length; i++) {
        var param = params[i].split("=");
        var name = dec(param[1]), val = dec(param[2]);
            console.log(name);
            console.log(params);
            console.log(param);
    }

