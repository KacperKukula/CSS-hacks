// Instruction 
// makeRequest("[Your url]", Object) 
//Task: add callback
//Version for CSS hacks

//Listeners
let li = document.querySelectorAll("li");
for(let i=0; i<li.length; i++) {
    li[i].addEventListener("click", function(e) {
        let name = String.prototype.ChangeCharsToSave(e.target.innerHTML);
        makeRequest('content/'+name+".html", _container)
    })
}

//Display 
document.querySelector("article.display")

//Request
let _container = document.querySelector(".display")
function makeRequest(_url, _container) {
    http_request = false;

    //Ajax from MDN
    if (window.XMLHttpRequest) { // Mozilla, Safari,...
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/html');
        }
    } else if (window.ActiveXObject) { // IE
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }
    if (!http_request) {
        alert('HTTP request faulty');
        return false;
    }

    //What happen if request okay
    http_request.onreadystatechange = function() { 
        if (http_request.readyState == 4) {
            if(http_request.status==200) {
                /*//////////////////////////////////////----\\*/
                _container.innerHTML = http_request.response;
                /*//////////////////////////////////////----//*/
            } else {
                _container.innerHTML = "something is not right...<br>"+http_request.status
            }
        }
    };

    _url = encodeURIComponent(_url);
    http_request.open('GET', _url, true);
    http_request.send(null);
}
