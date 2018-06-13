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
