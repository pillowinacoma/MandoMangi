function getPostCards(link){
  var f = document.createElement("form");
  f.setAttribute('method',"post");
  f.setAttribute('action',"blog.html.php");

  var i = document.createElement("input"); //input element, text
  i.setAttribute('type',"text");
  i.setAttribute('value',link);
  i.setAttribute('name',"source");
  i.setAttribute('style',"display : none");

  var s = document.createElement("input"); //input element, Submit button
  s.setAttribute('type',"submit");
  s.setAttribute('value',"Submit");
  s.setAttribute('style',"display : none");

  f.appendChild(i);
  f.appendChild(s);
  document.body.appendChild(f);
  s.click();
}
