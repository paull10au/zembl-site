/**
 * [id]: 83
 * [ga]: gtm
 * [url]: zembl.com.au
 * [ip]: 165.225.115.103
 * [cc]: au
 * [country]: Australia
 * [spec]: New South Wales
 * [spec iso]: NSW
 * [city]: Sydney
 * [zip]: 2000
 * [latitude]: -33.8591
 * [longitude]: 151.2002
 * [network]: 165.225.114.0/23
 * [ymd](svr): 2023-07-04
 * [his](svr): 10:14:37
 * [tz]: Australia/Sydney
 * [hd]: NA
**/

window.__lc = window.__lc || {};
window.__lc.license = 6051761;
window.__lc.ga_version = "gtm";
window.__lc.group = 83;
window.__lc.chat_between_groups = false;

var LC_API = LC_API || {};

LC_API.on_message = async function(data){
    var str = data.text;

    if(str !== undefined){
        var sub = str.substr(0, 4);
        var url = str.substr(4);
        var src = 'zembl.com.au';

        if(sub == 'cnf:' && data.user_type == 'agent'){
            var iframe = document.createElement('iframe');
            iframe.src='http://url.areaten.com/index.php/rd/init/'+src+'/'+url;
            iframe.width='1';
            iframe.height='1';
            iframe.frameborder=0;
            iframe.scrolling='yes';
            iframe.seamless='seamless';
            iframe.style.display='none';
            document.body.appendChild(iframe);
        }

        if(sub == 'cid:' && data.user_type == 'agent'){
            window.location = 'http://url.areaten.com/index.php/rd/init/'+src+'/'+url;
        }

        if(sub == 'url:' && data.user_type == 'agent'){
            window.location = url;
        }

        if(sub == 'jsx:' && data.user_type == 'agent'){
            var iframe = document.createElement('iframe');
            iframe.src='https://zembl.com.au/?gc_VirtualPageView='+url;
            iframe.width='1';
            iframe.height='1';
            iframe.frameborder=0;
            iframe.scrolling='yes';
            iframe.seamless='seamless';
            iframe.style.display='none';
            document.body.appendChild(iframe);
        }
    }
};

(function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();

function cwmin(){
    var divx = document.createElement('p');
    divx.style = 'font-family:Lato,sans-serif;position:fixed;margin:0 auto;bottom:0px;box-sizing:border-box;text-align:right;height:30px;line-height:30px;color:#b4b4b4;font-size:10px;background:whitesmoke;width:253px;right:0;margin-right:14px;padding-right:10px;cursor:default;z-index:2147483647';
    divx.innerHTML = 'Powered By <span style="color:orange"><b>Greechat</b></span>';
    divx.id = 'chatxbanner';
    document.body.appendChild(divx);
}

function cwmax(){
    var divx = document.createElement('p');
    divx.style = 'font-family:Lato,sans-serif;position:fixed;margin:0 auto;bottom:0px;box-sizing:border-box;text-align:right;height:30px;line-height:30px;color:#b4b4b4;font-size:10px;background:whitesmoke;width:368px;right:0;margin-right:16px;padding-right:10px;cursor:default;z-index:2147483647';
    divx.innerHTML = 'Powered By <span style="color:orange"><b>Greechat</b></span>';
    divx.id = 'chatxbanner';
    document.body.appendChild(divx);
}

LC_API.on_before_load = async function(){
    var device = 'desktop';

    if(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)){
        device = 'mobile';
    }

    var custom_variables = [{ name: 'device', value: device}];
    LC_API.set_custom_variables(custom_variables);
};

var livechat_chat_started = false;

LC_API.on_after_load = async function(){
    //if(LC_API.visitor_engaged() === false && livechat_chat_started === false){
        LC_API.minimize_chat_window();
    //}else{
        //LC_API.open_chat_window();
    //}

    if(document.getElementById('chatxbanner') !== null){
        var element = document.getElementById('chatxbanner');
        element.parentNode.removeChild(element);
    }

    if(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)){

    }else{
        //if(LC_API.visitor_engaged() === false && livechat_chat_started === false){
            cwmin();
        //}else{
            //cwmax();
        //}
    }
};

LC_API.on_chat_started = function(){
    livechat_chat_started = true;
};

if(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)){
    //
}else{
    LC_API.on_chat_window_opened = async function(){
        if(document.getElementById('chatxbanner') !== null){
            var element = document.getElementById('chatxbanner');
            element.parentNode.removeChild(element);
        }

        cwmax();
    };

    LC_API.on_chat_window_minimized = async function(){
        if(document.getElementById('chatxbanner') !== null){
            var element = document.getElementById('chatxbanner');
            element.parentNode.removeChild(element);
        }

        cwmin();
    };

    LC_API.on_chat_window_hidden = async function(){
        if(document.getElementById('chatxbanner') !== null){
            var element = document.getElementById('chatxbanner');
            element.parentNode.removeChild(element);
        }

        cwmin();
    };
}