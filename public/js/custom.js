function load_chat(id){
  var chat = id;
  var xmlhttp = new XMLHttpRequest ();
  xmlhttp.onreadystatechange = function (){
      if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
         document.getElementById('load_chat').innerHTML = xmlhttp.responseText;
      }
  }
  xmlhttp.open('GET', '/loadchat?chat_ID='+chat, true);
  xmlhttp.send();

}

$(document).ready(function(){
  $.ajaxSetup({ cache:false});
  setInterval(function(){
    $('#ldchat').load('/reload_chat');
    }, 2000);
});


function submitchat(){
  var id = document.getElementById('chat_ID').value;
  var msg = document.getElementById('msg').value;
  if (id=='' || msg =='') {
    alert('all fields are mandatory');
  }
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4&&xmlhttp.status==200){
      
      //document.getElementById('retriv').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open('get','/postchat?id='+id+'&msg='+msg, true);
  xmlhttp.send();
};
function submit(){
  var id = document.getElementById('chat_ID').value;
  var msg = document.getElementById('msg').value;
  if (id=='' || msg =='') {
    alert('all fields are mandatory');
  }
  var http = new XMLHttpRequest();
var url = '/postchat';
var params = id;
http.open('get', url, true);

//Send the proper header information along with the request
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
    }
}
http.send(params);
}


function ajax_call(){
  var xmlhttp = new XMLHttpRequest ();
  var count=document.getElementById('country').value;
if (count!="") {
  xmlhttp.onreadystatechange = function (){
      if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
         document.getElementById('retriv').innerHTML = xmlhttp.responseText;
      }
  }
  xmlhttp.open('GET', '/getstate?country='+count, true);
  xmlhttp.send();
}

}
