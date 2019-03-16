/**查找Key在cookie里面存不存在
 * 
 * @param {*} key 
 */
function getCookie(key) {
    var cookie = document.cookie;
    if (cookie) {
        var cookieList = cookie.split("; ");
        for (var i = 0; i < cookieList.length; i++) {
            var item = cookieList[i].split("=");
            var itemKey = decodeURIComponent(item[0]);
            if (itemKey == key) {
                return decodeURIComponent(item[1]);
            }
        }
        return "";
    } else {
        return "";
    }
}

/**
 * 设置cookie
 * @param {*} key   名称
 * @param {*} value  内容
 * @param {*} days  过期的天数
 */
function setCookie(key, value, days, path = "/") {
    var date = new Date();
    date.setDate(date.getDate() + days);
    document.cookie = encodeURIComponent(key) + "=" + encodeURIComponent(value) + ";expires=" + date + ";path=" + path;
}